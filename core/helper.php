<?php

if(! function_exists('dd')) {
    function dd()
    {
        array_map(function ($element) {
            var_dump($element);
        }, func_get_args());

        die;
    }
}