<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="topnav">
<a href="logout.php">Logout</a>
<a href="account.php">Account</a>
<a href="dashboard.php">Home</a>
<!--
<a class="Menu" href="dashboard.php">Home</a>
<a href="explore.php">Explore</a>
!-->



</div class="hi1" >

  <h2>Hello, <?php echo $_SESSION['user_name']; ?></h2>
</div>
<!--
<div class=row>
<div class="column" id="col_left">
    <h2>Column 1</h2>
    <p>Some text..</p>
  </div>
  <div class="column" id="col_right">
    <h2>Column 2</h2>
    <p>Some text..</p>
  </div>

</div>
!-->
<table width="90%">
	<col style="width:10%">
	<col style="width:70%">
	<thead>
	<tr>
		<th><h3>Friends</h3></th>
		<th><h3>Feed</h3></th>
	</tr>
	</thead>
  
	<tbody>
  <tr></tr>
	<tr>
		<th><p>Friend list</p></th>
		<td> </td>
	</tr>
	</tbody>
</table>
</body>
</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
?>