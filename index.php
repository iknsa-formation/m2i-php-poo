<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Entity\ArticleManager;
use App\Entity\DBA;

require_once "autoload.php";

$dba = new DBA();
$am = new ArticleManager($dba->getPDO());

include "src/Views/articles.php";