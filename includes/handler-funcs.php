<?php

function invalidEmail($email) {
    $result = true;

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function pwdMatch($pwd, $confPwd) {
    $result = true;

    if($pwd !== $confPwd) {
        $result = false;
    }else {
        $result = true;
    }

    return $result;
}

function pwdCheck($pwd) {
    $result = true;
    
    if(strlen($pwd) < 8) {
        $result = false;
        return $result;
    }else {
        $result = true;
        return $result;
    }
}

function emailExists($conn, $email) {
    $result = true;

    $sql = "SELECT * FROM student_login WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../stud-reg.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function emailExistsLect($conn, $email)
{
    $result = true;

    $sql = "SELECT * FROM lect_login WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../prof-reg.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function studentExists($conn, $email) {
    $result = true;

    $sql = "SELECT * FROM student_subject WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../student.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createStudent($conn, $name, $email, $pwd)
{
    $result = true;

    $sql = "INSERT INTO student_login(name, email, pwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../stud-reg.php?error=stmtfailed");
        exit();
    }

    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../stud-reg.php?error=none");
    exit();
}

function createLect($conn, $name, $email, $pwd)
{
    $result = true;

    $sql = "INSERT INTO lect_login(name, email, pwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../prof-reg.php?error=stmtfailed");
        exit();
    }

    $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../prof-reg.php?error=none");
    exit();
}

function nameFind($conn, $email)
{

    $sql = "SELECT * FROM student_login WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../stud-reg.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}


function loginStud($conn, $email, $pwd) {
    $userExists = emailExists($conn, $email);

    if($userExists === false) {
        header("location: ../stud-login.php?error=usernotexist");
        exit();
    }
    else {
        $hashPwd = $userExists["pwd"];
        $checkPwd = password_verify($pwd, $hashPwd);

        if(!$checkPwd) {
            header("location: ../stud-login.php?error=wrongpwd");
            exit();
        }else if($checkPwd === true) {
            session_start();
            $_SESSION['email'] = $userExists['email'];

            header("location: stud-handler.php");
            exit();
        }
    }
}

function loginLect($conn, $email, $pwd)
{
    $userExists = emailExistsLect($conn, $email);

    if ($userExists === false) {
        header("location: ../prof-login.php?error=usernotexist");
        exit();
    } else {
        $hashPwd = $userExists["pwd"];
        $checkPwd = password_verify($pwd, $hashPwd);

        if (!$checkPwd) {
            header("location: ../prof-login.php?error=wrongpwd");
            exit();
        } else if ($checkPwd === true) {
            session_start();
            $_SESSION['email'] = $userExists['email'];
            $_SESSION['name'] = $userExists['name'];
            header("location: ../lecturer.php");
            exit();
        }
    }
}

function createSubject($conn, $name, $email, $stream, $sub_1, $sub_2, $sub_3) {
    
    if(!studentExists($conn, $email)) {
        $sql = "INSERT INTO student_subject VALUES (?,?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../student.php?error=subregfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $stream, $sub_1, $sub_2, $sub_3);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        header("location: ../stud-profile.php?msg=userexists");
    }
}

function changeSub1($conn, $sub_1) {

    $result = true;
    $sql = "UPDATE student_subject SET sub_1=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        $result = false;
        exit();
        return $result;
    }
    mysqli_stmt_bind_param($stmt, "s", $sub_1);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function changeSub2($conn, $sub_2)
{

    $result = true;
    $sql = "UPDATE student_subject SET sub_2=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = false;
        exit();
        return $result;
    }
    mysqli_stmt_bind_param($stmt, "s", $sub_2);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function changeSub3($conn, $sub_3)
{

    $result = true;
    $sql = "UPDATE student_subject SET sub_3=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = false;
        exit();
        return $result;
    }
    mysqli_stmt_bind_param($stmt, "s", $sub_3);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

function updateEmail($conn, $nEmail) {

    $result = true;
    $sql = "UPDATE student_subject SET email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = false;
        exit();
        return $result;
    }
    mysqli_stmt_bind_param($stmt, "s", $nEmail);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;

}

function updateStream($conn, $nStream) {
    $result = true;
    $sql = "UPDATE student_subject SET stream=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $result = false;
        exit();
        return $result;
    }
    mysqli_stmt_bind_param($stmt, "s", $nStream);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}