<?php

$config['routes'] = array(
    '' => array(
        'controller' => 'default',
        'auth' => FALSE,
    ),
    'page_not_found' => array(
        'controller' => 'page_not_found',
        'auth' => FALSE,
    ),
    'user/login' => array(
        'controller' => 'user/login',
        'auth' => FALSE,
    ),
    'user/register' => array(
        'controller' => 'user/register',
        'auth' => FALSE,
    ),
    'user/profile' => array(
        'controller' => 'user/profile',
        'auth' => TRUE,
    ),
    'user/logout' => array(
        'controller' => 'user/logout',
        'auth' => FALSE,
    ),
    'user/forgot' => array(
        'controller' => 'user/forgot',
        'auth' => FALSE,
    ),
    'user/confirmation' => array(
        'controller' => 'user/confirmation',
        'auth' => FALSE,
    ),
);
