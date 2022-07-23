<?php

session_start();
require_once 'dbconn-handler.php';
require_once 'handler-funcs.php';

$stream = $_SESSION['stream'];
$sub_1 = $_POST['sub-1'];
$sub_2 = $_POST['sub-2'];
$sub_3 = $_POST['sub-3'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];


$isCreated  = createSubject($conn, $name, $email, $stream, $sub_1, $sub_2, $sub_3);