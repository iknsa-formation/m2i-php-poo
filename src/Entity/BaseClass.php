<?php


final class BaseClass {
    public function test() {
        echo "BaseClass::test() appelée\n";
    }

   // Ici, peu importe si vous spécifiez la fonction en finale ou pas
    final public function moreTesting() {
       echo "BaseClass::moreTesting() appelée\n";
    }
}
