<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "site";
$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";

}