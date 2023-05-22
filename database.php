<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "usbw";
$dbName = "mentes-agiles";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>