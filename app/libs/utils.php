<?php

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}

function t($key,$params = array()){
    global $lang, $config;
    $current_lang = (isset($_SESSION['lang']) ? $_SESSION['lang'] : $config['lang_default']);
    $text = (isset($lang[$current_lang][$key]) ? $lang[$current_lang][$key] : '*'.$key.'*' );
    return $text;
}

function form_id(){
    $key = md5(rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).date('YmdHis'));
    $_SESSION['form_id'] = $key;
    return $key;
}

function redirect($url){
    header('Location: /'.$url);
    die();
}

function session_state(){
    return (isset($_SESSION['active']) && $_SESSION['active'] == 1);
}

function session_set_message($message){
    $_SESSION['message'] = $message;
}

function session_status_message(){
    if (isset($_SESSION['message'])){
        return TRUE;
    }
    return FALSE;
}

function session_show_message(){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
    return $message;
}