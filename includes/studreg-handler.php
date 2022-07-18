<?php

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $confPwd = $_POST['pwd-conf'];

    require_once 'dbconn-handler.php';
    require_once 'handler-funcs.php';

    if(invalidEmail($email) === false) {
        header("location: ../stud-reg.php?error=invalidemail");
        exit();
    }

    if(!pwdMatch($pwd, $confPwd)) {
        header("location: ../stud-reg.php?error=pwdmatchfailed");
        exit();
    }

    if(emailExists($conn, $email)) {
        header("location: ../stud-reg.php?error=emailtaken");
        exit();
    }

    if(!pwdCheck($pwd)) {
        header("location: ../stud-reg.php?error=pwdshort");
        exit();
    }

    createStudent($conn, $name, $email, $pwd);

}
else {
    header("location: ../stud-reg.php?error=somethingwentwrong");
    exit();
}
