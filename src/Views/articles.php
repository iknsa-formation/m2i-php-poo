<?php

use App\Entity\DBA;
use App\Entity\ArticleManager;
use App\Entity\Article;

$dba = new DBA();
$am = new ArticleManager($dba->getPDO());
$articles = $am->getArticles();

include "add_article.php";

foreach ($articles as $art) {
    $article = new Article($art);
    ?>
        <table>
            <thead>
                <th>id</th>
                <th>titre</th>
                <th>auteur</th>
                <th>date</th>
                <th>image</th>
                <th>message</th>
                <th>supprimer</th>
            </thead>
            <tbody>
                <td><?php echo $article->getId();?></td>
                <td><?php echo $article->getTitre();?></td>
                <td><?php echo $article->getAuteur();?></td>
                <td><?php echo $article->getDate();?></td>
                <td><?php echo $article->getImage();?></td>
                <td><?php echo $article->getMessage();?></td>
                <td>
                    <a href="src/Views/delete_article.php?id=<?=$article->getId()?>">
                        supprimer
                    </a>
                </td>
                <td>
                    <a href="src/Views/update_article.php?id=<?=$article->getId()?>">
                        modifier
                    </a>
                </td>
            </tbody>
        </table>
    <?php
}