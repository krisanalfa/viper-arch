<?php

if (! function_exists('schema')) {
    function schema($type, $args)
    {
        $args = func_get_args();

        array_shift($args);

        return Schema::resolve($type, $args);
    }
}

if (! function_exists('app_register')) {
    function app_register($contract, $concrete)
    {
        App::getInstance()->kraken->shared($contract, $concrete);
    }
}

if (! function_exists('app_resolve')) {
    function app_resolve($contract, $parameters = array())
    {
        return App::getInstance()->kraken->resolve($contract, $parameters);
    }
}
