<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 16:13
 */


namespace Simplex;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;

abstract class Controller
{
    protected $urlGenerator;

    public function __construct()
    {
        $this->urlGenerator = new UrlGenerator($GLOBALS['routes'], $GLOBALS['context']);
    }
}
