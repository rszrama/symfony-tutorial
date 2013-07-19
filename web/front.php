<?php

// example.com/web/front.php

define(FRAMEWORK_ROOT, dirname(__DIR__));

require_once FRAMEWORK_ROOT.'/src/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = array(
    '/hello' => FRAMEWORK_ROOT.'/src/pages/hello.php',
    '/bye'   => FRAMEWORK_ROOT.'/src/pages/bye.php',
);

$path = $request->getPathInfo();
if (isset($map[$path])) {
    require $map[$path];
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->prepare($request);
$response->send();

