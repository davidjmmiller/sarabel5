<?php

if (isset($_SESSION['active']) && $_SESSION['active'] == 1){
    redirect('user/profile');
}

$lang['es']['login'] = 'Acceso al sistema';
$lang['en']['login'] = 'Login';
$lang['es']['user_invalid'] = 'Usuario o contraseña invalido';
$lang['en']['user_invalid'] = 'User or password invalid';

if (isset($_POST["form_id"])) {

    // Fields
    db_connect();
    $username = db_escape($_POST['username']);
    $password = db_escape(md5($_POST['password']));

    // Validating the fields
    $sql = "select * from user where username = '$username' and password = '$password' and status = 1";
    $result = db_query($sql);
    if (count($result) > 0) {

        // Registering user in session
        $_SESSION['active'] = 1;
        $_SESSION['user_info'] = $result[1];
        redirect('user/profile');

    }
    else {
        $error_message = t('user_invalid');
    }

}

require PATH_VIEWS.'layouts/header.php';
require PATH_VIEWS.'user/login.php';
require PATH_VIEWS.'layouts/footer.php';
