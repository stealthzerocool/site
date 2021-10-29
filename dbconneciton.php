<?php
$sname= "localhost";
$username= "root";
$password = "";
$db_name = "site";
$conn = mysqli_connect($sname, $username, $password, $db_name);
//mysqli_select_db($db_name);

if (!$conn) {
    echo "Connection failed!";

}