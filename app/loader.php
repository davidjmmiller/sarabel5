<?php

session_start();

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

// Loading libraries
require PATH_LIB.'utils.php';
require PATH_LIB.'database.php';

// Loading controller
$path = substr((isset($_GET['q']) ? $_GET['q'] : ''), 0, 255);
$path = ( substr($path,strlen($path)-1,1) == '/' ? substr($path,0,strlen($path)-1) : $path );
$controller = (isset($config['routes'][$path]) ? $config['routes'][$path]['controller'] : $config['routes']['page_not_found']['controller'] );
$path = (isset($config['routes'][$path]) ? $path : 'page_not_found' );

// Validating authentication
if ($config['routes'][$path]['auth']){
    if (isset($_SESSION['active']) && $_SESSION['active'] == 1){

    }
    else {
        redirect('user/login');
    }
}

require PATH_CONTROLLERS.$controller.'.php';
