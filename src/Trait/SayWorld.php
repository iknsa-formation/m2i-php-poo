<?php

namespace App\Trait;

Trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo "World";
    }
}