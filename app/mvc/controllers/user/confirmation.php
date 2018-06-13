<?php

$lang['es']['login_message'] = "Debe estar deslogueado para acceder a la confirmación";
$lang['en']['login_message'] = "You must be logged off before confirm your account";

if (session_state()){
    session_set_message(t('login_message'));
    redirect('user/profile');
}

require PATH_VIEWS.'layouts/header.php';
require PATH_VIEWS.'user/confirmation.php';
require PATH_VIEWS.'layouts/footer.php';
