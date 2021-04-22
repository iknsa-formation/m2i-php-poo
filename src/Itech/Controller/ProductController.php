<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 13:45
 */


namespace Itech\Controller;


use Itech\Model\Product;
use Itech\Repository\ProductManager;
use Simplex\Controller;
use Simplex\Service\Form;
use Simplex\Templating;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{
    public function new(Request $request): Response
    {
        if (!isset($_SESSION['security']) || !$_SESSION['security']['isLoggedIn']) {
            return new RedirectResponse(
                $this->urlGenerator->generate('security_login')
            );
        }

        if ($request->getMethod() === Request::METHOD_POST) {
            /** @var Product $product */
            $product = Form::handleSubmit($request);

            if (!floatval($product->getPrice())) {
                return new RedirectResponse(
                    $this->urlGenerator->generate('product_new', ['error'])
                );
            }

            $product->setUser($_SESSION['security']['user']);

            if ((new ProductManager)->create($product) !== true) {
                return new RedirectResponse(
                    $this->urlGenerator->generate('product_new', ['error'])
                );
            }

            return new RedirectResponse(
                $this->urlGenerator
                    ->generate('product_show', ['productId' => $product->getId()])
            );
        }

        return new Response(
            (new Templating())->render('Itech::product/new.php', [])
        );
    }

    public function show(Request $request, $productId): Response
    {
        if (!intval($productId)) {
            return new Response(
                (new Templating())->render('Itech::error/404.php', [
                    'error' => 'Forbidden product'
                ])
            );
        }

        $product = (new ProductManager())->findOneById($productId);
        if (!$product) {
            return new Response(
                (new Templating())->render('Itech::error/404.php', [
                    'error' => 'This product is not available anymore'
                ])
            );
        }

        return new Response(
            (new Templating())->render('Itech::product/show.php', [
                'product' => $product
            ])
        );
    }
}
