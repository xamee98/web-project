<?php

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    require_once 'dbconn-handler.php';

    require_once 'handler-funcs.php';

    loginLect($conn, $email, $pwd);
}
