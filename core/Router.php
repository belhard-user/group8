<?php 

namespace Core;

class Router
{
    private $routers = [];

    public function define($routers)
    {
        $this->routers = $routers;
    }
    
    public function path($url)
    {
        if (array_key_exists($url, $this->routers)) {
            return $this->routers[$url];
        }
        
        throw new Exception('Page not found');
    }

    public static function run($file)
    {
        $router = new static;

        include "$file.php";

        return $router;
    }
}