<?php

namespace ContainerBhDMDj1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserCrudControllercreateIndexQueryBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iydwXyk.App\Controller\Admin\UserCrudController::createIndexQueryBuilder()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iydwXyk.App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder()'] = ($container->privates['.service_locator.iydwXyk'] ?? $container->load('get_ServiceLocator_IydwXykService'))->withContext('App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder()', $container);
    }
}
