<?php
$sname= "localhost";
$unames= "root";
$password = "";
$db_name = "test";
$conn = mysqli_connect($sname, $unames, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";

}
