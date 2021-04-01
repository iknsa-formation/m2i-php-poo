<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Entity\DBA;
use App\Entity\Article;
use App\Entity\ArticleManager;

require_once "../Entity/Article.php";
require_once "../Entity/ArticleManager.php";
require_once "../Entity/DBA.php";

$verb = "update";
$dba = new DBA();
$am = new ArticleManager($dba->getPDO());

if (isset($_POST['state']) && $_POST['state'] === 'send') {
    $article = [
        "id" => $_POST['id'],
        "titre" => htmlspecialchars($titre = isset($_POST['titre'])?$_POST['titre']:''),
        "auteur" => htmlspecialchars($titre = isset($_POST['titre'])?$_POST['titre']:''),
        "date" => htmlspecialchars($date = isset($_POST['date'])?$_POST['date']:''),
        "image" => htmlspecialchars($image = isset($_POST['image'])?$_POST['image']:''),
        "message" => htmlspecialchars($message = isset($_POST['message'])?$_POST['message']:''),
    ];

    $articleObj = new Article($article);
    $am->updateArticle($articleObj);

    header("Location: ../../index.php");
}
include "article_form.php";