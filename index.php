<?php

require_once __DIR__ . '/vendor/autoload.php';


use App\Application;
use App\Core\Request;
use App\Core\RequestHandler;

// create a request handler
$requestHandler = new RequestHandler();

// setup the application
$app = new Application();
$app->run($requestHandler->getRouter());

// handle the current request
$request = Request::createFromGlobals();

try {
    $requestHandler->handleRequest($request);
} catch (\App\Core\NotFoundException $e) {
    die($e);
}

var_dump($request);