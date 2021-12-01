<?php
include "dbconnection.php";
session_start();
$id = $_SESSION['user_name'];


$sqldel="DELETE FROM users WHERE user_name = '$id'";


if ($conn->query($sqldel)===TRUE){
    echo '<script>alert("Account Deleted Successfully")</script>';
    header("Location:index.php");
}
else{
    echo "error deleting".$conn->error;
}
$conn->close();

?>