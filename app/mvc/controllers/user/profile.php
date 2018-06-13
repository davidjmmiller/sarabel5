<?php

$lang['es']['login_message'] = "Debe estar logueado para acceder al perfil de usuario";
$lang['en']['login_message'] = "You must be logged in order to access the user profile";

if (!session_state()){
    session_set_message(t('login_message'));
    redirect('user/login');
}

require PATH_VIEWS.'layouts/header.php';
require PATH_VIEWS.'user/profile.php';
require PATH_VIEWS.'layouts/footer.php';
