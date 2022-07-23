<?php
session_start();

include_once 'dbconn-handler.php';

$email = $_SESSION['email'];

$sql = 'SELECT * FROM student_login WHERE email=?;';
$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    header('location: ../login.php?error=notloggedin');
    exit();
}

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultData)) {
    $_SESSION['name'] = $row['name'];
    header('location: ../student.php');
}

mysqli_stmt_close($stmt);
