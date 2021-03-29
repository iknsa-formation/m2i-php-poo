<?php


class Foo
{
    public static string $my_static = 'foo';
    public static function aStaticMethod() {
        // ...
    }

    public function staticValue(): string
    {
        return self::$my_static;
    }
}

Foo::aStaticMethod(); // À partir de PHP 5.3.0

