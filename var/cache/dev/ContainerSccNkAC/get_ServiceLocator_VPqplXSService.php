<?php

namespace ContainerSccNkAC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VPqplXSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vPqplXS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vPqplXS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'prediccionRepository' => ['privates', 'App\\Repository\\PrediccionesRepository', 'getPrediccionesRepositoryService', true],
        ], [
            'prediccionRepository' => 'App\\Repository\\PrediccionesRepository',
        ]);
    }
}