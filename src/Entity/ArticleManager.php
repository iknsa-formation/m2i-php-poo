<?php

require_once "autoload.php";

class ArticleManager {
    private PDO $_db;

    public function __construct(PDO $db) {
        $this->setDb($db);
    }

    public function setDb(PDO $db) {
        $this->_db = $db;
    }

    public function addArticle(Article $article)
    {
        $ADD_ARTICLE = $this->_db->prepare(
            'INSERT INTO poo.article SET titre=:titre, auteur=:auteur, date=:date, image=:image, message=:message'
        );

        $ADD_ARTICLE->bindValue(':titre', $article->getTitre());
        $ADD_ARTICLE->bindValue(':auteur', $article->getAuteur());
        $ADD_ARTICLE->bindValue(':image', $article->getImage());
        $ADD_ARTICLE->bindValue(':message', $article->getMessage());
        $ADD_ARTICLE->bindValue(':date', $article->getDate());

        $ADD_ARTICLE->execute();
    }

    public function getArticles(): array
    {
        $sth =  $this->_db->prepare(
            'SELECT * FROM poo.article'
        );

        $sth->execute();
        return $sth->fetchAll();
    }
}