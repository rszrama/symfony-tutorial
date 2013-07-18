<?php

// framework/bye.php

require_once __DIR__.'/init.php';

$response->setContent('Goodbye!');

$response->prepare($request);
$response->send();
