<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "password";
$dbName = "rainbow_high";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn) {
    die("Connection Failed: ". mysqli_connect_error());
}