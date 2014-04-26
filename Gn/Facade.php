<?php

namespace Gn;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Facade
 */
abstract class Facade
{

    /**
     * @var ContainerInterface
     */
    protected static $container;

    /**
     * Set the ioc container that is used by the facade to retrieve
     * the dependencies from.
     *
     * @param ContainerInterface $container
     */
    public static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }

    /**
     * Magic function that is used to capture the called method on the facade
     * and port it to a method on an instance that is retrieved from the set
     * ioc container. ie: App::handle => self::$container->get('app)->handle()
     *
     * @param string $method
     * @param array $arguments
     *
     * @return Object
     */
    public static function __callStatic($method, $arguments)
    {
        $serviceInstance = self::$container->get(self::getContainerAccessor());

        static::validateInstance($serviceInstance);

        return call_user_func_array(array($serviceInstance, $method), $arguments);
    }

    /**
     * Returns the key that is searched for in the ioc container when a method is
     * called on this facade. This method should be overriden by the actual facade.
     *
     * @return string
     * @throws \RuntimeException        If this method is not overriden
     */
    protected function getContainerAccessor()
    {
        throw new \RuntimeException('Facade should implement this getContainerAccessor method.');
    }

    /**
     * Validates the instance retrieved from the ioc container to see
     * if it matches the requirements. Override to add your own validation
     * setup.
     *
     * @param Object $instance
     */
    protected static function validateInstance($instance) {}
}
