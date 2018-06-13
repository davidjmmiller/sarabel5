<?php

$lang['es']['logout_message'] = 'Ha sido desconectado exitosamente del sistema';
$lang['en']['logout_message'] = 'Desconnection successfully';

session_destroy();
session_start();
session_set_message(t('logout_message'));
redirect('user/login');
