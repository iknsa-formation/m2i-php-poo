<?php
/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 19/04/2021
 * Time: 16:02
 */


namespace Itech\Controller;


use Itech\Model\User;
use Itech\Repository\UserManager;
use Simplex\Service\Form;
use Simplex\Service\Hydrator;
use Simplex\Templating;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function register(Request $request): Response
    {
        if (isset($_SESSION) && isset($_SESSION['security']) && $_SESSION['security']['isLoggedIn']) {
            header('Location: /');
            exit;
        }

        if ($request->getMethod() === Request::METHOD_POST) {

            /** @var User $user */
            $user = Form::handleSubmit($request);

            (new UserManager())->create($user);
        }

        $templating = new Templating();

        return new Response(
            $templating->render('Itech::register.php', ['test' => 'from register controller']),
            Response::HTTP_OK,
            ['content-type' => 'text/html']
        );
    }

    public function login(Request $request): Response
    {
        if (isset($_SESSION) && isset($_SESSION['security']) && $_SESSION['security']['isLoggedIn']) {
            header('Location: /');
            exit;
        }

        if ($request->getMethod() === Request::METHOD_POST) {
            $submittedData = Form::handleSubmit($request);
            /** @var User $user */
            $user = (new UserManager())->findByEmail($submittedData->getEmail());

            if (!$user) {
                header('Location: /login?no-user');
                exit;
            }

            if ($user->verifyPassword($submittedData->getPassword())) {
                // User est valide
                // Mettre en session
                $_SESSION['security'] = [
                    'user' => $user,
                    'isLoggedIn' => true
                ];

                header('Location: /');
                exit;
            }
        }

        $templating = new Templating();
        return new Response(
            $templating->render('Itech::login.php', [])
        );
    }

    public function logout()
    {
        if (!isset($_SESSION['security'])) {
            exit;
        }

        unset($_SESSION['security']);
        header('Location: /login');
    }
}
