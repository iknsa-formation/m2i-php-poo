<?php

namespace App\Entity;
use App\Trait\SayWorld;

require_once "../Trait/SayWorld.php";
require_once "Base.php";

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

// Hello World