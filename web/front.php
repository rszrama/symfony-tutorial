<?php

// example.com/web/front.php

define(FRAMEWORK_ROOT, dirname(__DIR__));

require_once FRAMEWORK_ROOT.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$map = array(
    '/hello' => 'hello',
    '/bye'   => 'bye',
);

$path = $request->getPathInfo();
if (isset($map[$path])) {
    ob_start();
    extract($request->query->all(), EXTR_SKIP);
    include sprintf(FRAMEWORK_ROOT.'/src/pages/%s.php', $map[$path]);
    $response = new Response(ob_get_clean());
} else {
    $response = new Response('Not Found', 404);
}

$response->prepare($request);
$response->send();

