<?php

$lang['es']['login'] = 'Acceso al sistema';

if ($result = db_query('select * from user where 1')){
    dd($result);
}
else {
    dd('Error en el SQL');
}

require PATH_VIEWS.'layouts/header.php';
require PATH_VIEWS.'user/login.php';
require PATH_VIEWS.'layouts/footer.php';
