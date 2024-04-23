<?php

namespace core;

class App
{

    protected static $container;

    public static function setContainer($container)
    {
        static::$container = $container;
    }
    public static function container()
    {
        return static::$container;
    }

    public static function bind($key, $reolver)
    {

        static::$container->bind($key, $reolver);
    }

    public static function resolve($key)
    {

       return static::$container->resolve($key);
    }
}
