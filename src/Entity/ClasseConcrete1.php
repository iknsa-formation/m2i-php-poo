<?php

require_once "AbstractClass.php";
class ClasseConcrete1 extends AbstractClass
{
    public function getValue(): string
    {
        return "ClasseConcrete1";
    }

    public function prefixValue($prefix): string
    {
        return "{$prefix}ClasseConcrete1";
    }
}

$classe1 = new ClasseConcrete1();
$classe1->printOut();
echo $classe1->prefixValue("FOO_") . "\n";
// ConcreteClass1
// FOO_ConcreteClass1