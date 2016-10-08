<?php 
namespace Core;

class Request
{
    public static function url()
    {
        $request = parse_url($_SERVER['REQUEST_URI']);

        return trim($request['path'], '/');
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}