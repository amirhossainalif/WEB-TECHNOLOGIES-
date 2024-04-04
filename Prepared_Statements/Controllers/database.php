<?php
$hostName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "test1";

$con = new mysqli($hostName, $dbUser, $dbPass, $dbName);

if(!$con)
{
    die("Something Wrong!");
}
?>