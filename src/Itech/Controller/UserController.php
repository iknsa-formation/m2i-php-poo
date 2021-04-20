<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 19/04/2021
 * Time: 16:02
 */


namespace Itech\Controller;


use Simplex\Service\Form;
use Simplex\Templating;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function register(Request $request): Response
    {
        if ($request->getMethod() === Request::METHOD_POST) {
            /** User $user */
            $user = Form::handleSubmit($request);

            dd($user);
        }

        $templating = new Templating();

        return new Response(
            $templating->render('Itech::register.php', ['test' => 'from register controller']),
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );
    }
}
