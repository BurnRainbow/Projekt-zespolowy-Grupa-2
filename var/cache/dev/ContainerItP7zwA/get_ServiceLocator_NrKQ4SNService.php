<?php

namespace ContainerItP7zwA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NrKQ4SNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NrKQ4SN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NrKQ4SN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\KontaktapiController::deleteKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController::modyfikacjaKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController::nowyKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController::szukajKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController::szukajSearchtermKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController::szukajSluzbowyKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController::szukajTelefonKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity::DeleteNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity::GetNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity::ModifyNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity::NewNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\KontaktapiController:deleteKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController:modyfikacjaKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController:nowyKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController:szukajKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController:szukajSearchtermKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController:szukajSluzbowyKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\KontaktapiController:szukajTelefonKontakt' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity:DeleteNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity:GetNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity:ModifyNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\entity:NewNotatka' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\KontaktapiController::deleteKontakt' => '?',
            'App\\Controller\\KontaktapiController::modyfikacjaKontakt' => '?',
            'App\\Controller\\KontaktapiController::nowyKontakt' => '?',
            'App\\Controller\\KontaktapiController::szukajKontakt' => '?',
            'App\\Controller\\KontaktapiController::szukajSearchtermKontakt' => '?',
            'App\\Controller\\KontaktapiController::szukajSluzbowyKontakt' => '?',
            'App\\Controller\\KontaktapiController::szukajTelefonKontakt' => '?',
            'App\\Controller\\entity::DeleteNotatka' => '?',
            'App\\Controller\\entity::GetNotatka' => '?',
            'App\\Controller\\entity::ModifyNotatka' => '?',
            'App\\Controller\\entity::NewNotatka' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\KontaktapiController:deleteKontakt' => '?',
            'App\\Controller\\KontaktapiController:modyfikacjaKontakt' => '?',
            'App\\Controller\\KontaktapiController:nowyKontakt' => '?',
            'App\\Controller\\KontaktapiController:szukajKontakt' => '?',
            'App\\Controller\\KontaktapiController:szukajSearchtermKontakt' => '?',
            'App\\Controller\\KontaktapiController:szukajSluzbowyKontakt' => '?',
            'App\\Controller\\KontaktapiController:szukajTelefonKontakt' => '?',
            'App\\Controller\\entity:DeleteNotatka' => '?',
            'App\\Controller\\entity:GetNotatka' => '?',
            'App\\Controller\\entity:ModifyNotatka' => '?',
            'App\\Controller\\entity:NewNotatka' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
