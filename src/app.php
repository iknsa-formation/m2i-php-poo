<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::index',
]));

$routes->add('article_home', new Routing\Route('/articles', [
    '_controller' => 'Itech\Controller\ArticleController::index',
]));


return $routes;
