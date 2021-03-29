<?php

require_once "Foo.php";

class Bar extends Foo
{
    public function fooStatic(): string
    {
        return parent::$my_static;
    }
}
print Foo::$my_static;

// foo