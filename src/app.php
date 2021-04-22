<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/', [
    '_controller' => 'Itech\Controller\AppController::index',
], [], [], '', [], ['GET']));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::index',
], [], [], '', [], ['GET']));

$routes->add('get_articles', new Routing\Route('/articles', [
    '_controller' => 'Itech\Controller\ArticleController::index',
], [], [], '', [], ['GET']));

$routes->add('add_article', new Routing\Route('/articles', [
    '_controller' => 'Itech\Controller\ArticleController::add',
], [], [], '', [], ['POST']));

$routes->add('show_tarticle', new Routing\Route('/articles/{id}', [
    '_controller' => 'Itech\Controller\ArticleController::show',
], [], [], '', [], ['GET']));

$routes->add('delete_article', new Routing\Route('/articles/{id}', [
    '_controller' => 'Itech\Controller\ArticleController::delete',
], [], [], '', [], ['DELETE']));

$routes->add('update_article', new Routing\Route('/articles/{id}', [
    '_controller' => 'Itech\Controller\ArticleController::update',
], [], [], '', [], ['PUT']));

$routes->add('security_register', new Routing\Route('/register', [
    '_controller' => 'Itech\Controller\UserController::register',
], [], [], '', [], ['GET', 'POST']));

$routes->add('security_login', new Routing\Route('/login', [
    '_controller' => 'Itech\Controller\UserController::login',
], [], [], '', [], ['GET', 'POST']));

$routes->add('security_logout', new Routing\Route('/logout', [
    '_controller' => 'Itech\Controller\UserController::logout',
], [], [], '', [], ['GET']));

$routes->add('security_profile', new Routing\Route('/profile', [
    '_controller' => 'Itech\Controller\UserController::profile',
], [], [], '', [], ['GET', 'POST']));

$routes->add('product_new', new Routing\Route('/product/new', [
    '_controller' => 'Itech\Controller\ProductController::new',
], [], [], '', [], ['GET', 'POST']));

$routes->add('product_show', new Routing\Route('/product/{productId}', [
    '_controller' => 'Itech\Controller\ProductController::show',
], [], [], '', [], ['GET']));

return $routes;
