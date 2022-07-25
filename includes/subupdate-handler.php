<?php 

include_once('dbconn-handler.php');
include_once('handler-funcs.php');

$nEmail = $_POST['n-email'];
$nStream = $_POST['n-stream'];
$nSub1 = $_POST['n-sub1'];
$nSub2 = $_POST['n-sub2'];
$nSub3 = $_POST['n-sub3'];

// if($nEmail !== '') {
//     $emailState = updateEmail($conn, $nEmail);
// }

if($nStream) {
    $streamState = updateStream($conn, $nStream);
}

if($nSub1) {
    $sub1State = changeSub1($conn, $nSub1);
}

if ($nSub2) {
    $sub2State = changeSub2($conn, $nSub2);
}

if ($nSub3) {
    $sub3State = changeSub3($conn, $nSub3);
}

if($emailState || $streamState || $sub1State || $sub2State || $sub3State) {
    header('location: ../lecturer.php?msg=valuesupdated');
    // echo 'update Success';
}
