<?php

namespace ContainerBhDMDj1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFichierCrudControllerconfigureResponseParametersService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OgOMxLk.App\Controller\Admin\FichierCrudController::configureResponseParameters()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OgOMxLk.App\\Controller\\Admin\\FichierCrudController::configureResponseParameters()'] = ($container->privates['.service_locator.OgOMxLk'] ?? $container->load('get_ServiceLocator_OgOMxLkService'))->withContext('App\\Controller\\Admin\\FichierCrudController::configureResponseParameters()', $container);
    }
}
