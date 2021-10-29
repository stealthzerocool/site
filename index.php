<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <!--<a href ="login.php"> Login</a> 
    !-->
    <form action="login.php" method ="post">
    <?php if(isset($_GET['error'])){?>
    <p class="error"> <?php echo $_GET['error']; ?></p>
    <?php } ?>
        <h5>Username</h5>
        <input type="text" name="username" placeholder="User Name"><br>
        <h5>Password</h5>
        <input type="text" name="pword" placeholder="Password"><br><br>
        <button type="button">Login</button>
        
        <!---
        <input type="text">
        <input type="submit">
        --->

    </form>    
</body>
</html>
