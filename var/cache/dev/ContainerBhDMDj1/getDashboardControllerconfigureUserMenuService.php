<?php

namespace ContainerBhDMDj1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerconfigureUserMenuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._1ARgjp.App\Controller\Admin\DashboardController::configureUserMenu()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._1ARgjp.App\\Controller\\Admin\\DashboardController::configureUserMenu()'] = ($container->privates['.service_locator._1ARgjp'] ?? $container->load('get_ServiceLocator_1ARgjpService'))->withContext('App\\Controller\\Admin\\DashboardController::configureUserMenu()', $container);
    }
}
