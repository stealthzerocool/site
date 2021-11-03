<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
<a href="logout.php">Logout</a>
<a href="account.php">Account</a>
<a href="dashboard.php">Home</a>

</div class="hi1" >

  <h2>Edit Profile</h2>
</div>
</body>
</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
?>