<?php

namespace Local\Bundles\FacadeBundle\Tests;

use PHPUnit\Framework\TestCase;
use Prokl\FacadeBundle\DependencyInjection\FacadeExtension;
use Prokl\FacadeBundle\Services\AbstractFacade;
use Prokl\FacadeBundle\Tests\Fixture\Facades\Foo;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ServiceLocator;

/**
 * Class FacadeBundleTest
 * @package Local\Bundles\FacadeBundle\Tests
 *
 * @since 15.04.2021
 */
class FacadeBundleTest extends TestCase
{
    /**
     * @var ContainerInterface $testContainer Тестовый контейнер.
     */
    protected static $testContainer;

    /**
     * @return void
     */
    public function testRegisterAutoconfigure() : void
    {
        $container = new ContainerBuilder();
        $container->register(Foo::class);

        $extension = new FacadeExtension();
        $extension->load([], $container);

        $this->assertArrayHasKey(
            AbstractFacade::class,
            $container->getAutoconfiguredInstanceof()
        );

        $this->assertArrayHasKey('laravel.facade', $container->getAutoconfiguredInstanceof()[AbstractFacade::class]->getTags());
    }
}
