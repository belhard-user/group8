<?php 
namespace Core;

class Request
{
    public static function url()
    {
        $request = parse_url($_SERVER['REQUEST_URI']);

        return trim($request['path'], '/');
    }
}