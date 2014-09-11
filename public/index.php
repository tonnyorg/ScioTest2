<?php

use Slim\Slim;
use Pimple\Container;

require_once '../vendor/autoload.php';

// Slim - Init
$app = new Slim();
$app->config(array(
	'debug' => true,
    'templates.path' => '../templates'
));

// Slim - Routes
require_once '../config/routes.php';

// Pimple - Init
$container = new Container();

// Pimple - Config
require_once '../config/container.php';

// Pass Pimple to Slim
$app->custom_container = $container;

// Slim - Run App
$app->run();