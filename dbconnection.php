<?php
$sname= "localhost";
$unames= "root";
$password = "";
$db_name = "test";
$conn = mysqli_connect($sname, $unames, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";

}



/*
    <?php
    define('DB_SERVER', 'localhost:3036');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'rootpassword');
    define('DB_DATABASE', 'database');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
  */