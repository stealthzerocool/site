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

</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Top Navigation Menu -->
<div class="topnav">
  <a href="#home" class="active">Logo</a>
  <!-- Navigation links (hidden by default) -->
  <div id="myLinks">
    <a href="#account">Account</a>

  </div>
 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
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