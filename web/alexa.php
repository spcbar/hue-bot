<?php

use MaxBeckers\AmazonAlexa\Request\Request;
use MaxBeckers\AmazonAlexa\RequestHandler\RequestHandlerRegistry;
use MaxBeckers\AmazonAlexa\Validation\RequestValidator;

require __DIR__ . '/../vendor/autoload.php';

$requestBody  = file_get_contents('php://input');
$alexaRequest = Request::fromAmazonRequest($requestBody, $_SERVER['HTTP_SIGNATURECERTCHAINURL'], $_SERVER['HTTP_SIGNATURE']);

$validator = new RequestValidator();
$validator->validate($alexaRequest);

$requestHandler = new \SpaceBar\Alexa\RequestHandler();

$requestHandlerRegistry = new RequestHandlerRegistry();
$requestHandlerRegistry->addHandler($requestHandler);

$requestHandler = $requestHandlerRegistry->getSupportingHandler($alexaRequest);
$response       = $requestHandler->handleRequest($alexaRequest);

header('Content-Type: application/json');
echo json_encode($response);
exit();
