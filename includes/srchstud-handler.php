<?php

include_once 'dbconn-handler.php';

$sEmail = $_GET['email'];

$sql = 'SELECT * FROM student_subject WHERE name=?;';
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: login.php?error=notloggedin');
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $name);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    $_SESSION['row'] = $row;
    header('location: ../lecturer.php');
}