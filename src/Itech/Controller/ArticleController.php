<?php

namespace Itech\Controller;

use Itech\Repository\ArticleManager;
use Itech\Repository\DBA;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $dba = new DBA();
        $articleManager = new ArticleManager($dba->getPDO());
        $articles = $articleManager->getArticles();
        return new Response(json_encode($articles));
    }
}
