<?php
namespace Test;
require_once 'autoloader.php';


// instantiate the loader
$loader = new Psr4AutoloaderClass();

// register the autoloader
$loader->register();
// register the base directories for the namespace prefix
$loader->addNamespace('Test\Src', realpath(__DIR__) . DIRECTORY_SEPARATOR . 'src');


$example = new \Test\Src\Example();

$example->itWorks();