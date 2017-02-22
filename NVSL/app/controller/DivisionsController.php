<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require("../../config.php");
require(RAIZ.'/lib/slim/vendor/autoload.php');



$app = new \Slim\Slim();
$app -> get('/hello/:name',function($name){
    echo "Hello, ".$name;
});
$app->run();
echo(RAIZ);
//$app->get(
//    '/', function () use($app){
    
//    echo "hola";
    
//})->setParams(array($app));*/

/*$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();*