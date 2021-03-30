<?php

require_once "autoload.php";

$dba = new DBA();
$am = new ArticleManager($dba->getPDO());

include "src/Views/articles.php";