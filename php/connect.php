<?php

    $db_host = 'localhost';
    $db_user_name = 'root';
    $db_password = '';
    $db_name = 'fujenglobal';

    $mysqli = new mysqli($db_host, $db_user_name, $db_password, $db_name);

    if ($mysqli -> connect_error) {
        die($mysqli -> connect_error);
    }

    $mysqli -> set_charset('utf8');

?>