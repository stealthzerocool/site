<?php 
include 'dbconnection.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
		h2 {
			text-transform: capitalize;
		}
		.card{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2 );
		transition: 0.3s;
		width: 70%;
		border: 20px;
		border-color: black;
		border-radius: 10px;
		}
		.card:hover{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.container{
		padding: 2px 16px;
		}
	</style>

		
</head>
<body>
<div class="topnav">
<a href="logout.php" style="font-family:sans-serif">Logout </a>
<a href="account.php" style="font-family:sans-serif">Account</a>
<a href="dashboard.php" style="font-family:sans-serif">Home</a>
<!--
<a class="Menu" href="dashboard.php">Home</a>
<a href="explore.php">Explore</a>
!-->
<br>

  <h2 style="color: #ffffff"> Hello, <?php echo $_SESSION['user_name']; ?></h2>

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
!-->
<br>

<div class="container">

        <div class="leftpane"><h4 style="font-family: sans-serif;">People you may know</h4>
		<table>
			<tr>
				<div class="card">
					<div class="container">
						<?php
							$selectquery="select 'user_name' from users";
							$query = mysqli_query($conn,$selectquery);
							$res = mysqli_fetch_array($query);
							echo $res[1];
						?>
					</div>
				</div>
			</tr>
				<?php

		


				//$result = $conn->query($sql);
				//927181bcd7f9410c90d5733c13fb53c8
				?>
		</table>
		</div>
			
        <div class="middlepane"><h4 style="font-family: sans-serif;"> NewsFeed</h4>
		<br>	
		<div class="card">
				<div class="container">
					
					<h4>Heading1</h4>
					
				</div>

			</div>
		</div>

</div>
</body>
</html>

<?php 

}else{
     header("Location: index.php");
     exit();
}
?>