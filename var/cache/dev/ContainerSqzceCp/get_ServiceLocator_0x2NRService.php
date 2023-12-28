<?php

namespace ContainerSqzceCp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0x2NRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0x2__nR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0x2__nR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ingredient' => ['privates', '.errored..service_locator.0x2__nR.App\\Entity\\Ingredient', NULL, 'Cannot autowire service ".service_locator.0x2__nR": it needs an instance of "App\\Entity\\Ingredient" but this type has been excluded in "config/services.yaml".'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'ingredient' => 'App\\Entity\\Ingredient',
            'manager' => '?',
        ]);
    }
}
