<?php 

namespace Core;

class Router
{
    private $routers = [
        'GET' => [],
        'POST' => []
    ];

    public function get($url, $action)
    {
        $this->routers['GET'][$url] = $action;
    }

    public function post($url, $action)
    {
        $this->routers['POST'][$url] = $action;
    }
    
    public function path($url)
    {
        if (array_key_exists($url, $this->routers[Request::getMethod()])) {
            list($class, $method) = explode('@', $this->routers[Request::getMethod()][$url]);

            return $this->callController('App\\' . $class, $method);
        }
        
        throw new \Exception('Page not found :))');
    }

    public static function run($file)
    {
        $router = new static;

        include "$file.php";

        return $router;
    }

    private function callController($class, $method)
    {
        $class = new $class;
        
        $class->$method();
    }
}