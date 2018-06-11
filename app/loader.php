<?php

// Defining paths
define('PATH_APP','../app/');
define('PATH_CONFIG',PATH_APP.'config/');
define('PATH_LIB',PATH_APP.'libs/');
define('PATH_MODELS',PATH_APP.'mvc/models/');
define('PATH_VIEWS',PATH_APP.'mvc/views/');
define('PATH_CONTROLLERS',PATH_APP.'mvc/controllers/');

// Loading configuration files
require PATH_CONFIG.'general.php';
require PATH_CONFIG.'database.php';
require PATH_CONFIG.'mail.php';
require PATH_CONFIG.'routes.php';

// Loading controller
$path = (isset($_GET['q']) ? $_GET['q'] : '');
$controller = (isset($config['routes'][$path]) ? $config['routes'][$path] : $config['routes']['page_not_found'] );
require PATH_CONTROLLERS.$controller.'.php';
