<!DOCTYPE html>
<html>
<head>
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
        <label>Username</label><br>
        <input type="text" name="uname" placeholder="User Name"><br><br>

        
        <label>Password</label><br>
        <input type="password" name="password" placeholder="Password"><br><br>

        <button type="submit">Login</button>
        
        <!---
        <input type="text">
        <input type="submit">
        --->
    
    </form>    
</body>
</html>
