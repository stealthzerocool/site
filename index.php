<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <!--<a href ="login.php">Login</a> 
    !-->
    <div class="row">
    <div class="column" >
        <div class="head_a">
            <h1>Demo Site </h1>
        </div>
    </div>
    <div class="column">
        <div class="col2">
        <div class="login_pg">
        <h2>Sign in</h2>
        <form action="login.php" method ="post">
        <br>
        <?php if(isset($_GET['error'])){?>
        <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="main">
      
        <div class="form">
            <input type="text" name="uname" class="text" placeholder="Your username"/> <br>
            <input type="password" name="password" class="text" placeholder="Your password" />
        </div>
        <div class="hero-btn" type="submit">
            <button>Log in</button>
        </div>

    </div>
        
        </form>   
    </div>
        </div>
</div> 
</body>
</html>
