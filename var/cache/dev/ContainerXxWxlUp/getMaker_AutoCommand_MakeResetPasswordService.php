<?php

namespace ContainerXxWxlUp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeResetPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_reset_password' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService'));

        $container->privates['maker.auto_command.make_reset_password'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Symfony\Bundle\MakerBundle\Maker\MakeResetPassword($a, ($container->privates['maker.doctrine_helper'] ?? $container->load('getMaker_DoctrineHelperService')), ($container->privates['maker.entity_class_generator'] ?? $container->load('getMaker_EntityClassGeneratorService'))), $a, ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:reset-password');
        $instance->setDescription('Create controller, entity, and repositories for use with symfonycasts/reset-password-bundle');

        return $instance;
    }
}
