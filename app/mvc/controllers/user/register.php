<?php

$lang['es']['session_message'] = 'Debe finalizar la sesión antes de registrarse';
$lang['en']['session_message'] = 'You must be logged out before register';

if (isset($_SESSION['active']) && $_SESSION['active'] == 1){
    session_set_message(t('session_message'));
    redirect('user/profile');
    exit;
}



require PATH_VIEWS.'layouts/header.php';
require PATH_VIEWS.'user/register.php';
require PATH_VIEWS.'layouts/footer.php';
