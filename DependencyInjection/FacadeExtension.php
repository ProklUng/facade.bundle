<?php

namespace Prokl\FacadeBundle\DependencyInjection;

use Prokl\FacadeBundle\Services\AbstractFacade;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * Class FacadeExtension
 * @package Prokl\FacadeBundle\DependencyInjection
 *
 * @since 15.04.2021
 */
class FacadeExtension extends Extension
{
    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container) : void
    {
        $container->registerForAutoconfiguration(AbstractFacade::class)->addTag('laravel.facade');
    }
}
