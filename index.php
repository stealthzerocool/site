<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <!--<a href ="login.php"> Login</a> 
    !-->
    <div class="row">
    <div class="column" >
        <div class="head_a">
            <h1>Welcome</h1>
        </div>
    </div>
    <div class="column">
        <div class="col2">
        <div class="login_pg">
        <h2>Login</h2>
        <form action="login.php" method ="post">
        <?php if(isset($_GET['error'])){?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
            <!-- <label>Username</label><br>
            !-->
            <input type="text" name="uname" placeholder="User Name"><br><br>

            <!--
            <label>Password</label><br>
            !-->
            <input type="password" name="password" placeholder="Password"><br><br>
            
            <button class="button1" type="submit">Login</button>
            
            <!---
            <input type="text">
            <input type="submit">
            --->
        
        </form>   
    </div>
        </div>
</div> 
</body>
</html>
