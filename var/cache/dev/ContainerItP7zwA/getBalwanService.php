<?php

namespace ContainerItP7zwA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBalwanService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\balwan' shared autowired service.
     *
     * @return \App\Controller\balwan
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\balwan'] = $instance = new \App\Controller\balwan();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\balwan', $container));

        return $instance;
    }
}
