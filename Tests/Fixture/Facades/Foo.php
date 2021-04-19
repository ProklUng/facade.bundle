<?php

namespace Prokl\FacadeBundle\Tests\Fixture\Facades;

use Local\Bundles\FacadeBundle\Tests\Fixture\Services\FooService;
use Prokl\FacadeBundle\Services\AbstractFacade;

/**
 * Class Foo
 * @package Prokl\FacadeBundle\Tests\Fixture\Facades
 */
class Foo extends AbstractFacade
{
    /**
     * {@inheritdoc}
     */
    public static function getFacadeAccessor() : string
    {
        return FooService::class;
    }
}
