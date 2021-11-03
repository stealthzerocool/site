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
<a href="logout.php">Logout</a>
<a href="profile.php">Profile</a>

<a class="Menu" href="home">Home</a>
<!-- <a href="explore.php">Explore</a>
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
		<th>Feed</th>
	</tr>
	</thead>
  
	<tbody>
  <tr></tr>
	<tr>
		<th><p>sdfasdf asdfa sdf asdf</p></th>
		<td>98 ui</td>
	</tr>
	<tr>
		<th>Oranges</th>
		<td>295 ui</td>
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