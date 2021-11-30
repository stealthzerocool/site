<?php
include "dbconnection.php";
session_start();
$id = $_SESSION['user_name'];
//echo $id;
$del = mysqli_query($conn,"DELETE FROM 'users' WHERE 'users'.'user_name' = '$id'"); //delete
//DELETE FROM `users` WHERE `users`.`id` = 4"
if($del)
{
    mysqli_close($conn); //Close connection
    header("location:index.php");
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>