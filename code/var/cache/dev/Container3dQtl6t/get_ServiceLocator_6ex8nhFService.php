<?php

namespace Container3dQtl6t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6ex8nhFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6ex8nhF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6ex8nhF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\IndexController::list' => ['privates', '.service_locator.Gd3E3IZ', 'get_ServiceLocator_Gd3E3IZService', true],
            'App\\Controller\\ViewController::editArticle' => ['privates', '.service_locator.9TUXj4T', 'get_ServiceLocator_9TUXj4TService', true],
            'App\\Controller\\ViewController::view' => ['privates', '.service_locator.j6RelyX', 'get_ServiceLocator_J6RelyXService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\IndexController:list' => ['privates', '.service_locator.Gd3E3IZ', 'get_ServiceLocator_Gd3E3IZService', true],
            'App\\Controller\\ViewController:editArticle' => ['privates', '.service_locator.9TUXj4T', 'get_ServiceLocator_9TUXj4TService', true],
            'App\\Controller\\ViewController:view' => ['privates', '.service_locator.j6RelyX', 'get_ServiceLocator_J6RelyXService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\IndexController::list' => '?',
            'App\\Controller\\ViewController::editArticle' => '?',
            'App\\Controller\\ViewController::view' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\IndexController:list' => '?',
            'App\\Controller\\ViewController:editArticle' => '?',
            'App\\Controller\\ViewController:view' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
