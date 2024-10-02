<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class CreateFormPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('comment')
        ->add('title', TextType::class, [
            'required' => false,
        ])
        ->add('id_master', HiddenType::class, [
            'required' => false,
        ])
        // récupère le formulaire + données avant de l'envoyer
        ->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData(); 
            $form = $event->getForm(); 

            if (empty($data['id_master'])) {
                // ajout de la contrainte non null
                $form->add('title', TextType::class, [
                    'constraints' => new NotBlank([
                        'message' => 'Vous devez donner un titre.',
                    ]),
                    'required' => true,
                ]);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}