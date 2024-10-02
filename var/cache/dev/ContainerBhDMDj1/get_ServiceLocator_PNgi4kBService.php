<?php

namespace ContainerBhDMDj1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PNgi4kBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PNgi4kB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PNgi4kB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'context' => ['privates', '.errored..service_locator.PNgi4kB.EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext', NULL, 'Cannot autowire service ".service_locator.PNgi4kB": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext" but no such service exists.'],
            'batchActionDto' => ['privates', '.errored..service_locator.PNgi4kB.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto', NULL, 'Cannot autowire service ".service_locator.PNgi4kB": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto" but no such service exists.'],
        ], [
            'context' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext',
            'batchActionDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\BatchActionDto',
        ]);
    }
}
