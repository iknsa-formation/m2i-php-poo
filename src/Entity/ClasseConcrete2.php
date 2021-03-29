<?php

require_once "AbstractClass.php";
class ClasseConcrete2 extends AbstractClass
{
    public function getValue(): string
    {
        return "ClasseConcrete2";
    }

    public function prefixValue($prefix): string
    {
        return "{$prefix}ClasseConcrete2";
    }
}

$classe2 = new ClasseConcrete2();
$classe2->printOut();
echo $classe2->prefixValue("FOO_") . "\n";
// ConcreteClass2
// FOO_ConcreteClass2