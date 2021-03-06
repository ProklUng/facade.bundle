<?php

namespace Prokl\FacadeBundle;

use Prokl\FacadeBundle\DependencyInjection\CompilerPass\AddFacadePass;
use Prokl\FacadeBundle\DependencyInjection\FacadeExtension;
use Prokl\FacadeBundle\Services\AbstractFacade;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class FacadeBundle
 * @package Prokl\FacadeBundle
 *
 * @since 15.04.2021
 */
class FacadeBundle extends Bundle
{
   /**
   * @inheritDoc
   */
    public function getContainerExtension()
    {
        if ($this->extension === null) {
            $this->extension = new FacadeExtension();
        }

        return $this->extension;
    }

    /**
     * {@inheritdoc}
     */
    public function boot() : void
    {
        parent::boot();

        /** @var ContainerInterface $facadeContainer */
        $facadeContainer = $this->container->get('laravel.facade.container');
        AbstractFacade::setFacadeContainer($facadeContainer);
    }

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container) : void
    {
        parent::build($container);

        $container->addCompilerPass(new AddFacadePass());
    }
}
