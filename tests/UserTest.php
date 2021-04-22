<?php

use Itech\Controller\UserController;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by iKNSA.
 * User: Khalid Sookia <khalidsookia@gmail.com>
 * Date: 22/04/2021
 * Time: 10:37
 */

require_once 'config.php';

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testRegisterPostWithWrongParams()
    {
        $this->expectExceptionMessage("Class 'Itech\Model\Wrong_Param' not found");
        $this->expectExceptionCode(0);

        $_POST = [
            "Itech" => [
                "Wrong_Param" => [
                    "firstName" => "Khalid",
                    "lastName" => "Sookia",
                    "email" => "khalid.sookia@iknsa.com",
                    "password" => "paris"
                ]
            ]
        ];

        $request = Request::createFromGlobals();
        $request->attributes->add(['_app_root' => __DIR__ . '/../src/']);

        $request->setMethod(Request::METHOD_POST);

        $controller = new UserController();
        $controller->register($request);
    }

    public function testRegisterPostWithGoodParams()
    {
        $_POST = [
            "Itech" => [
                "User" => [
                    "firstName" => "Khalid",
                    "lastName" => "Sookia",
                    "email" => "khalid.sookia@iknsa.com",
                    "password" => "paris"
                ]
            ]
        ];

        $request = Request::createFromGlobals();
        $request->attributes->add(['_app_root' => __DIR__ . '/../src/']);

        $request->setMethod(Request::METHOD_POST);

        $controller = new UserController();
        $response = $controller->register($request);

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertStringContainsString('<!doctype html>', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][firstName]"', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][lastName]"', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][email]"', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][password]"', $response->getContent());
        $this->assertStringContainsString('type="submit"', $response->getContent());
    }

    public function testRegisterGetForm()
    {
        $request = Request::createFromGlobals();
        $request->setMethod(Request::METHOD_GET);

        $controller = new UserController();
        $response = $controller->register($request);

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertStringContainsString('<!doctype html>', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][firstName]"', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][lastName]"', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][email]"', $response->getContent());
        $this->assertStringContainsString('name="Itech[User][password]"', $response->getContent());
        $this->assertStringContainsString('type="submit"', $response->getContent());
    }
}
