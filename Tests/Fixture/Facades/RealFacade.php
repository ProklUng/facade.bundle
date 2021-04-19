<?php

namespace Prokl\FacadeBundle\Tests\Fixture\Facades;

use Prokl\FacadeBundle\Services\AbstractFacade;

/**
 * Class RealFacade
 * @package Prokl\FacadeBundle\Tests\Fixture\Facades
 */
class RealFacade extends AbstractFacade
{
    /**
     * {@inheritdoc}
     */
    public static function getFacadeAccessor() : string
    {
        return 'request_stack';
    }
}
