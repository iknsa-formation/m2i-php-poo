<?php

require_once "Mere.php";

class Fille extends Mere {

    public function enfant(): string
    {
        return "Je suis la classe Fille, j'hérite de ma mère.";
    }

    public static function quiEstCe()
    {
        echo 'Je suis la classe <strong>Enfant</strong> !';
    }
}

$fille = new Fille();
$fille::lancerLeTest();

// Je suis la classe Enfant !