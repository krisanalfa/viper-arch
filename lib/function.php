<?php

if (! function_exists('schema')) {
    function schema($type, $args)
    {
        $args = func_get_args();

        array_shift($args);

        return Schema::resolve($type, $args);
    }
}
