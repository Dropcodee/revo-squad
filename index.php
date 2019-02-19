<?php

require_once __DIR__ . '/vendor/autoload.php';


$klein = new \Klein\Klein();


//Define Routes

//Page - Home
$klein->respond('GET', '/', function ($request, $response, $service, $app) {
    $service->render('views/Home.php'); //Home Page
});


//Handle Errors
$klein->onHttpError(function ($code, $router) {
    switch ($code) {
        case 404:
            /*$router->response()->body(
                'Page Not Found'
            );*/
            $router->service()->render('views/404.php');
            break;
        case 405:
            $router->response()->body(
                'You can\'t do that!'
            );
            break;
        default:
            $router->response()->body(
                'Oh no, a bad error happened that caused a '. $code
            );
    }
});

$klein->dispatch();