<?php

namespace Prokl\FacadeBundle\Tests\Fixture\Services;

/**
 * Class FooService
 * @package Prokl\FacadeBundle\Tests\Fixture\Services
 *
 * @since 15.04.2021
 */
class FooService
{
    public function sayHello() : string
    {
        return 'hello';
    }

    public function callWithArgs($bar, $foo)
    {
        return [$bar, $foo];
    }
}
