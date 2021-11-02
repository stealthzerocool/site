<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
<a class="Menu" href="home">Home</a>
<a href="#news">News</a>

  <div id="myLinks">
    <a href="#account">Accounts</a>

  </div>
</div>

     <h1>Hello, <?php echo $_SESSION['user_name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
?>