<?php
include "dbconnection.php";
$id = $_SESSION['user_name'];
$del = mysqli_query($conn,"delete from users where user_name = '$id'"); //delete

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