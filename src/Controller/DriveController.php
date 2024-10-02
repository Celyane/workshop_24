<?php
namespace App\Controller;

use App\Form\FichierType;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DriveController extends AbstractController
{
    private $client;
    private $logger;

    public function __construct(HttpClientInterface $client, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->logger = $logger;
    }

    #[Route('/upload', name: 'app_file_upload')]
    public function upload(Request $request): Response
    {
        $form = $this->createForm(FichierType::class);
        $form->handleRequest($request);

        $this->logger->info('Formulaire chargé et handleRequest effectué');

        if ($form->isSubmitted()) {
            $this->logger->info('Formulaire soumis');
            
            if ($form->isValid()) {
                $this->logger->info('Formulaire validé');
                $file = $form->get('file')->getData();
                $tag = $form->get('tag')->getData(); 
                $this->logger->info('Fichier récupéré : ' . ($file ? 'Oui' : 'Non'));
                $this->logger->info('Tag récupéré : ' . $tag);

                if ($file) {
                    $filename = uniqid() . '.' . $file->guessExtension();
                    $this->logger->info('Nom du fichier généré : ' . $filename);
                    $destination = $this->getParameter('kernel.project_dir') . '/public/uploads';
                    $this->logger->info('Chemin de destination : ' . $destination);

                    try {
                        $file->move($destination, $filename);
                        $filePath = $destination . '/' . $filename;
                        $this->logger->info('Fichier déplacé avec succès vers : ' . $filePath);

                        $response = $this->client->request('POST', 'http://15.237.41.119:3000/upload', [
                            'headers' => [
                                'Content-Type' => 'multipart/form-data',
                            ],
                            'body' => [
                                'file' => fopen($filePath, 'r'),
                                'tag' => $tag,
                            ]
                        ]);
                        
                        $statusCode = $response->getStatusCode();
                        $this->logger->info('Réponse de l\'API Express avec le statut : ' . $statusCode);

                        if ($statusCode === 200) {
                            $this->addFlash('success', 'Fichier uploadé avec succès');
                            return $this->redirectToRoute('app_file_upload');
                        } else {
                            $this->logger->error('Erreur lors de l\'upload, code HTTP : ' . $statusCode);
                            $this->addFlash('error', 'Erreur lors de l\'upload');
                        }
                    } catch (FileException $e) {
                        $this->logger->error('Erreur lors du déplacement du fichier : ' . $e->getMessage());
                        $this->addFlash('error', 'Erreur lors du déplacement du fichier : ' . $e->getMessage());
                        return $this->redirectToRoute('app_file_upload');
                    } catch (\Exception $e) {
                        $this->logger->error('Erreur lors de l\'upload vers le serveur Express : ' . $e->getMessage());
                        $this->addFlash('error', 'Erreur lors de l\'upload : ' . $e->getMessage());
                        return $this->redirectToRoute('app_file_upload');
                    }
                } else {
                    $this->logger->warning('Aucun fichier sélectionné');
                }
            } else {
                $this->logger->warning('Formulaire soumis mais invalide');
            }
        } else {
            $this->logger->info('Formulaire non soumis');
        }

        return $this->render('drive/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/list', name: 'app_file_list')]
    public function list(): Response
    {
        try {
            $this->logger->info('Demande de liste des fichiers au serveur Express');
            
            // Appelle le serveur Express pour récupérer la liste des fichiers
            $response = $this->client->request('GET', 'http://15.237.41.119:3000/list');
            $files = $response->toArray(); // Convertit la réponse en tableau
    
            $this->logger->info('Liste des fichiers reçue avec succès');
    
            // Affiche la liste des fichiers dans la vue
            return $this->render('drive/list.html.twig', [
                'files' => $files,
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la récupération de la liste des fichiers : ' . $e->getMessage());
            return new Response('Erreur lors de la récupération de la liste des fichiers : ' . $e->getMessage(), 500);
        }
    }
    

    #[Route('/download/{filename}', name: 'app_file_download', requirements: ['filename' => '.+'])]
    public function download($filename): Response
    {
        $this->logger->info('Début du téléchargement du fichier : ' . $filename);

        try {
            // Envoie la requête GET au serveur Express avec des en-têtes similaires à ceux de curl
            $response = $this->client->request('GET', "http://15.237.41.119:3000/download/{$filename}", [
                'headers' => [
                    'User-Agent' => 'curl/7.68.0', // Simule un User-Agent de curl
                    'Accept' => '*/*', // Simule ce que curl envoie par défaut
                ],
            ]);

            // Récupère le statut de la réponse
            $statusCode = $response->getStatusCode();
            $this->logger->info('Réponse du serveur Express reçue. Code HTTP : ' . $statusCode);

            if ($statusCode === 200) {
                // Récupère le contenu du fichier depuis la réponse
                $fileContent = $response->getContent();
                $fileSize = strlen($fileContent);
                $this->logger->info("Taille du fichier reçu : $fileSize octets");

                return new Response($fileContent, 200, [
                    'Content-Type' => 'application/octet-stream',
                    'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                ]);
            } else {
                $this->logger->error('Le téléchargement du fichier a échoué, code HTTP reçu : ' . $statusCode);
                return new Response('Erreur lors du téléchargement du fichier. Code HTTP : ' . $statusCode, 500);
            }
        } catch (\Exception $e) {
            // Gestion des exceptions
            $this->logger->error('Erreur lors du téléchargement du fichier : ' . $e->getMessage());
            return new Response('Erreur lors du téléchargement du fichier : ' . $e->getMessage(), 500);
        }
    }

}
