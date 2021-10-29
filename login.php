    <?php 
    session_start();
    include "dbconnection.php";

    if(isset ($_POST['uname']) && isset($_POST['password'])) {
        function validate($data) {
        $data = trim($data); 
        $data= stripslashes ($data);
        $data = htmlspecialchars ($data);
        return data;
        }
    }
    $uname =validate($_POST['uname']); 
    $pass =validate($_POST['password']);

    if (empty($uname)) {
        header ("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)) {
        header("Location: index.php?error=Password is required"); 
        exit();
    }

    $sql = "SELECT * FROM users WHERE username= '$uname' AND password ='$pass'"
    $result = mysqli query(Sconn, Ssql);

    if(mysqli num_rows ($result)==1) {
        $row mysqli->fetch_assoc($result); 
        if($row['username'] == $uname && $row['password'] $pass) {
            echo "Logged In"; 
            $_SESSION['username'] =$row['username'];
            $_SESSION[ 'name'] = $row[ 'name']; 
            $_SESSION['id'] = $row['id'];
            header("Location: dashboard.php");
            exit();
    
    } 
    else{
    header("Location: index.php?error-Incorrect User Name or Password"); 
    exit();
    }
    
    }
    else{
    header("Location: index.php");    
    }
    exit();
    }