<?php

use App\Entity\DBA;
use App\Entity\Article;
use App\Entity\ArticleManager;

$titre = "";
$auteur = "";
$date = "";
$image = "";
$message = "";
$id = "";

if (isset($verb) && $verb === 'update') {
    $action = "update_article.php";
} else {
    $action = "src/Views/add_article.php";
}

if (isset($_GET['id'])) {

    require_once "../Entity/DBA.php";
    require_once "../Entity/ArticleManager.php";

    $dba = new DBA();
    $am = new ArticleManager($dba->getPDO());

    $id = $_GET['id'];

    $article = new Article($am->getArticle($id));
    $titre = $article->getTitre();
    $auteur = $article->getAuteur();
    $date = $article->getDate();
    $image = $article->getImage();
    $message = $article->getMessage();

}
?>

<form action="<?=$action?>" method="post">
    <label>
        Titre
        <input type="text" name="titre" value="<?=$titre?>">
    </label>
    <label>
        Auteur
        <input type="text" name="auteur" value="<?=$auteur?>">
    </label>
    <label>
        Date
        <input type="text" name="date" value="<?=$date?>">
    </label>
    <label>
        Image
        <input type="text" name="image" value="<?=$image?>">
    </label>
    <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"><?=$message?></textarea>
    <input type="submit">
    <input type="hidden" name="state" value="send">
    <input type="hidden" name="id" value="<?=$id?>">
</form>
