<?php

namespace ContainerItP7zwA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotatkaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NotatkaController' shared autowired service.
     *
     * @return \App\Controller\NotatkaController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\NotatkaController'] = $instance = new \App\Controller\NotatkaController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\NotatkaController', $container));

        return $instance;
    }
}
