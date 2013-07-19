<?php

// example.com/src/app.php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => 'render_template',
)));
$routes->add('bye', new Routing\Route('/bye', array(
    '_controller' => 'render_template',
)));

return $routes;
