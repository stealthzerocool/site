<?php 
    session_start();
    include "dbconnection.php";

    if(isset ($_POST['uname']) && isset($_POST['password'])) {
        function validate($x) {
            
        $x = trim($x); 
        $x = htmlspecialchars ($x);
        //echo "<script>console.log('Debug Objects: " . $x . "' );</script>";
        return $x;
        }
    }
    $uname =validate($_POST['uname']); 
    $pass =validate($_POST['password']);
    
    //echo"<script>console.log('hi');</script>";
    
    //echo 'hidd';

    if (empty($uname)) {
        //echo"uname error";
        
        header ("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)) {
        
        header("Location: index.php?error=Password is required"); 
        exit();
    }
      //echo "<script>console.log('Debug Objects: " . $x . "' );</script>";
       
    $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password ='$pass'";
    
    $result = mysqli_query($conn, $sql);
    
    //echo $sql;
    //exit();
//mysqli_num_rows ($result)==1

    if(true){
        try {
        //$row = mysqli_fetch_assoc($result); 
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        throw new Exception('error');
        }
        catch (Exception $e){
            echo "something went wrong";
        }
        
        //throw new Exception();
        //$row = $result;
        //echo $row;
        
        /*if(true){ 
            $_SESSION['user_name'] =$row['user_name'];
            $_SESSION['name'] = $row['name']; 
            $_SESSION['id'] = $row['id'];
            //header("Location:dashboard.php");
            exit();
        }
        */
        
        if($row['user_name'] == $uname && $row['password'] == $pass) {
            echo "Logged In "; 
            echo $sql,$row['id'];

            $_SESSION['user_name'] =$row['user_name'];
             
            $_SESSION['id'] = $row['id'];
            header("Location:dashboard.php");
            exit();
            
        } 
        
        else{
            header("Location: index.php?error=Incorrect User Name or Password");
            exit();
        }
    
    }
    else{
        header("Location: index.php?error=Incorrect User Name or Password");    
        exit();
    }





