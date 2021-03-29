<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "autoload.php";

$dba = new DBA();
$am = new ArticleManager($dba->getPDO());
$articleArr = [
    "titre" => "Poo",
    "auteur" => "Mooss",
    "date" => "2021-03-30",
    "image" => "JPEG",
    "message" => "Tout ce qu'il faut savoir",
];

$article = new Article($articleArr);
$am->addArticle($article);
var_dump($am->getArticles());