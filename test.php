<?php

/*class Connector
{
    public static $instance = null;
    
    public static function create()
    {
        if( is_null(static::$instance) ){
            static::$instance = new static('Say one');
        }

        return static::$instance;
    }
    
    private function __construct($one){ echo $one; }
    private function __clone(){}

    public function getAllNews()
    {
        return [
            'news 1',
            'news 2',
            'news 3',
            'news 4',
        ];
    }
}

print_r( Connector::create()->getAllNews() );*/

class Foo
{
    public function foo2()
    {
        echo "say foo";

        return $this;
    }

    public function bar()
    {
        echo "say bar";

        return $this;
    }

    public function jaz()
    {
        echo "say jaz";

        return $this;
    }


}

echo Foo::class;



( new Foo )
    ->foo()
    ->foo()
    ->bar()
    ->jaz();