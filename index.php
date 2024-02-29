<?php

namespace Test;

require_once 'autoloader.php';

// Instantiate the loader
$loader = new Psr4AutoloaderClass();

// Register the autoloader
$loader->register();

// Register the base directories for the namespace prefix
$loader->addNamespace('Test\Src', realpath(__DIR__) . DIRECTORY_SEPARATOR . 'src');

$example = new \Test\Src\Example();

$example->itWorks();
