<?php

$lang['es']['login_message'] = "Debe estar deslogueado para acceder al recordatorio de password";
$lang['en']['login_message'] = "You must be logged off before recover password";

if (session_state()){
    session_set_message(t('login_message'));
    redirect('user/profile');
}

require PATH_VIEWS.'layouts/header.php';
require PATH_VIEWS.'user/forgot.php';
require PATH_VIEWS.'layouts/footer.php';
