<?php

namespace ContainerK9OC4yD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ForumController' shared autowired service.
     *
     * @return \App\Controller\ForumController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ForumController.php';

        $container->services['App\\Controller\\ForumController'] = $instance = new \App\Controller\ForumController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\ForumController', $container));

        return $instance;
    }
}
