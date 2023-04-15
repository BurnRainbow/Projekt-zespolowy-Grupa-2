<?php

namespace ContainerItP7zwA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Command_DebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.command.debug' shared service.
     *
     * @return \Symfony\Bridge\Twig\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['twig.command.debug'] = $instance = new \Symfony\Bridge\Twig\Command\DebugCommand(($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService()), 'E:\\symfony', $container->parameters['kernel.bundles_metadata'], 'E:\\symfony/templates', ($container->privates['debug.file_link_formatter'] ?? $container->getDebug_FileLinkFormatterService()));

        $instance->setName('debug:twig');
        $instance->setDescription('Show a list of twig functions, filters, globals and tests');

        return $instance;
    }
}
