<?php 
include 'dbconnection.php';
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	$uss=$_SESSION['user_name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
	
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		h2 {
			text-transform: capitalize;
		}
		.container {
			font-family: sans-serif;
			text-transform: capitalize;
		}
		.card{
		font-family: sans-serif;
		
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2 );
		transition: 0.3s;
		width: 55%;
		border: 20px;
		border-color: black;
		border-radius: 10px;
		}
		.card2{
		font-family: sans-serif;
		font-size: 5;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2 );
		transition: 0.3s;
		width: 60%;
		border: 20px;
		border-color: black;
		border-radius: 10px;
		}
		.card:hover{
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}
		.container{
		font-family: sans-serif;
		padding: 2px 16px;
		
		}
		.container2{
		font-family: sans-serif;
		padding: 2px 16px;
		
		}
		img{
			border-radius: 5%;
		}
	</style>
			
</head>
<body>
<script>
		function hai(a){
			alert(a.value);
		}
        function makeGETRequest(aa) {
			const proxyUrl = "https://cors-anywhere.herokuapp.com/"
			//var aa = bb.value
			alert(aa)
			//var a = document.getElementById('search1')
            const url = `${proxyUrl}https://newsapi.org/v2/everything?q=${aa}&from=2021-11-1&sortBy=priority&apiKey=034ea1cdee72495d9f3aab7aa212570f`
			const options = {
            //methood: 'GET',
            headers: {
				"X-Requested-With": "sssdfasdf"
            }}
			const request=new Request(url,options);
			
            fetch(request)
                .then(response => response.json())
				.then(response => {
					for(var i=0; i<response.articles.length; i++){
						
						document.getElementById("output").innerHTML +="<div style='padding-top:20px;'><img style='float:right; width:150px;' src='"+response.articles[i].urlToImage+"'> <h3>"+response.articles[i].title+"</h3><br>"+response.articles[i].description+"<br> <a href='"+response.articles[i].url+"'target='_blank'>"+response.articles[i].url+"</a></div>";
						
					}
				})
                .then(data => console.log(data))
                .catch(e => console.error(e))
				
        	}
    </script>
<div class="topnav">
<a href="logout.php" style="font-family:sans-serif">Logout </a>
<a href="account.php" style="font-family:sans-serif">Account</a>
<a href="dashboard.php" style="font-family:sans-serif">Home</a>
<!--
<a class="Menu" href="dashboard.php">Home</a>
<a href="explore.php">Explore</a>
!-->
<br>
  <h2 style="color: #ffffff">Hello, <?php echo $_SESSION['user_name']; ?></h2>

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
		<div><br></div>
		<table>
			<tr>
				<div class="card">
					<div class="container">
						<?php
							$selectquery="select * from users";
							$query = mysqli_query($conn,$selectquery);
							//$nums = mysqli_num_rows($query);
							//$res = mysqli_fetch_array($query);
							//foreach (array_keys($res,$uss , true) as $key) {
							//	unset($res[$key]);
							//	}
							//	print_r($res);
							//foreach($res as $val){
							//	print $val."<button class='button button1'>Add</button><br><br>";
							//}
							while($res = mysqli_fetch_array($query)){
								//echo "<div class ='card'">;
								if($res['user_name']==$uss){
									continue;
								}
								else{
								print $res['user_name']."&nbsp"."<button class='button button1'>Add</button><br><br>";
								//echo "</div>";
								//$nums=$nums-1;
									}
							}	
							//echo $res[1]; 
							//	
						?>
					</div>
				</div>
			</tr>
				<?php
				//$result = $conn->query($sql);
				//https://newsapi.org/v2/everything?q=Apple&from=2021-11-25&sortBy=popularity&apiKey=927181bcd7f9410c90d5733c13fb53c8
				?>
		</table>
		</div>
			
        <div class="middlepane"><h4 style="font-family: sans-serif;"> NewsFeed</h4>
		<br>
		<!--
		</div><form action=""></form></div>
		!-->
		<script>
			var x="technology";
		</script>
		<div>
		<form>
		<input id="search1" name="search2" type="text" placeholder="Search"></input>
		<button onclick="searchFunc(search2.value)">Submit</button>
		</form>
		</div>
		<br>	

		<script>
			
			function searchFunc(srchfunc){
				var x=srchfunc;
				alert (srchfunc);
			}
			
		</script>
		<div class="card2">
				<div class="container2">
				</div>
				<div class="container2">	
					<script>
						//var b = getElementById("");
						//alert (b);
						makeGETRequest(x);
						
					</script>
					<!--
					<button type="submit" onclick="makeGETRequest()">Get news</button>
					!-->
					<div id="output"></div>
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