<?php

namespace Itech\Controller;

use Itech\Model\Article;
use Itech\Repository\ArticleManager;
use Itech\Repository\DBA;
use Simplex\Service\Hydrator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @var ArticleManager
     */
    private ArticleManager $articleManager;

    public function __construct()
    {
        $this->articleManager = new ArticleManager((new DBA())->getPDO());
    }

    /**
     * @return Response
     */
    public function index(): Response
    {
        $articles = $this->articleManager->getArticles();
        return new Response(json_encode($articles));
    }

    public function show($id): Response
    {
        $article = $this->articleManager->getArticle($id);
        return new Response(json_encode($article));
    }

    public function delete($id): Response
    {
        $this->articleManager->deleteArticle($id);
        return new Response('delete');
    }

    public function update(Request $request, $id): Response
    {
        $article = $request->toArray();
        $article['id'] = $id;

        /** @var Article $articleObject */
        $articleObject = Hydrator::hydrate(Article::class, $article);
        $this->articleManager->updateArticle($articleObject);
        return new Response('update');
    }

    public function add(Request $request): Response
    {
        $article = $request->toArray();

        /** @var Article $articleObject */
        $articleObject = Hydrator::hydrate(Article::class, $article);
        $this->articleManager->addArticle($articleObject);
        return new Response('add');
    }
}
