<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Gn\Facade;
use Gn\Facade\App;

$container = new ContainerBuilder();
$container->register('app', 'Gn\App');
// $container->register('app', 'Other\App');

Facade::setContainer($container);

$app = App::handle(Request::createFromGlobals());
