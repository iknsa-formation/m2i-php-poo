<?php

class Mere {

    public function parent() {
        return "Je suis la classe Mère.";
    }

    public static function lancerLeTest()
    {
        static::quiEstCe();
    }

    public static function quiEstCe()
    {
        echo 'Je suis la classe <strong>Mere</strong> !';
    }
}
