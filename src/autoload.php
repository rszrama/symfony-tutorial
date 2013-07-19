<?php

// example.com/src/autoload.php

require_once FRAMEWORK_ROOT.'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->register();

$loader->registerNamespace('Symfony\\Component\\HttpFoundation', FRAMEWORK_ROOT.'/vendor/symfony/http-foundation');
