<?php

namespace Gn\Facade;

use Gn\AppInterface;
use Gn\Facade;
use Symfony\Component\HttpFoundation\Request;

/**
 * App
 *
 * @method static handle(Request $request)
 */
class App extends Facade
{

    /**
     * @param Object $instance
     * @throws \UnexpectedValueException
     */
    protected static function validateInstance($instance)
    {
        if (is_object($instance) === false) {
            throw new \UnexpectedValueException('App Instance should be of type Object');
        }

        if (($instance instanceof AppInterface) === false) {
            throw new \UnexpectedValueException('App instance should implement the Gn\AppInterface');
        }
    }

    /**
     * @return string
     */
    protected function getContainerAccessor()
    {
        return 'app';
    }
}
