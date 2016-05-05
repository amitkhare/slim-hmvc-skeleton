<?php
session_start();
date_default_timezone_set("asia/kolkata");
define("APPPATH",__DIR__.DIRECTORY_SEPARATOR."../app/");
require __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$settings = require APPPATH . 'src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require APPPATH . 'src/dependencies.php';

// Register middleware
require APPPATH . 'src/middleware.php';

// initiate HMVC Module

new \AmitKhare\SlimHMVC\AutoloadHMVC($app);

// Register routes
require APPPATH . '/src/routes.php';

// Run app
$app->run();