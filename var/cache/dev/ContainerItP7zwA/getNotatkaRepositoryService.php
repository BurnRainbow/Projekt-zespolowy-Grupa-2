<?php

namespace ContainerItP7zwA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNotatkaRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\NotatkaRepository' shared autowired service.
     *
     * @return \App\Repository\NotatkaRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\NotatkaRepository'] = new \App\Repository\NotatkaRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
