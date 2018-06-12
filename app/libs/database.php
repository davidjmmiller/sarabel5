<?php

function db_connect()
{
    global $database;
    $database['link'] = mysqli_connect(
        $database['host'],
        $database['user'],
        $database['pass'],
        $database['name']
    );

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
}

function db_query($sql)
{
    global $database;
    if (!isset($database['link']))
    {
        db_connect();
    }
    if ($result = mysqli_query($database['link'], $sql)) {
        if ($result->num_rows == 0) {
            return array();
        }
        $info = $result->fetch_assoc();
        mysqli_free_result($result);
        return $info;
    }
    printf("SQL Error: %s\n", mysqli_error($database['link']));
    return FALSE;
}

function db_escape($var){
    global $database;
    return mysqli_real_escape_string($database['link'], $var);
}
