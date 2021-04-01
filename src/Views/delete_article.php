<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Entity\DBA;
use App\Entity\Article;
use App\Entity\ArticleManager;

require_once "../Entity/DBA.php";
require_once "../Entity/ArticleManager.php";

$dba = new DBA();
$am = new ArticleManager($dba->getPDO());
$article_id = isset($_GET['id']) ? $_GET['id'] : '';

if (!$article_id) {
    return;
}

$am->deleteArticle($article_id);
header("Location: ../../index.php");
