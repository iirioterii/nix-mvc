<?php

use Mvc\Apps\Router;
use Mvc\Apps\Templater;

require_once('core/Autoloader.php');
require_once('../config/settings.php');

$autoLoader = new Mvc\Autoloader();
$autoLoader->register();
$autoLoader->addNamespace('Apps', 'core');
$autoLoader->addNamespace('Models', 'models');

//$templater = new Templater();

$router = new Router();
$router->run();