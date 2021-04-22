<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 21/04/2021
 * Time: 16:42
 */


namespace Itech\Controller;


use Itech\Repository\ProductManager;

use Simplex\Templating;
use Symfony\Component\HttpFoundation\Response;

class AppController
{
    public function index()
    {
        $security = false;
        if (isset($_SESSION['security'])) {
            $security = $_SESSION['security'];
        }

        $products = (new ProductManager())->findBySellable();

        if (!$products) {
            $products = [];
        }

        $templating = new Templating();
        return new Response(
            $templating->render('Itech::home.php', [
                'security' => $security,
                'products' => $products
            ])
        );
    }
}