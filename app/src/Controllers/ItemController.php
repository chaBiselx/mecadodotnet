<?php

namespace App\Controllers;

// use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
// use Slim\Flash\Messages;


final class ItemController extends BaseController
{

    public function item(Request $request, Response $response, $args)
    {
        // TODO $args->id
        $item = ["nom" => "test nom", "description" => "test description", "tarif" => 10];
        return $this->container->view->render($response, "testItem.twig", $item);
    }
 }