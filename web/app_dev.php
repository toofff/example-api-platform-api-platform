<?php

declare(strict_types=1);

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

$loader = require __DIR__ . '/../app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
