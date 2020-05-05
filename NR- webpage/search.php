<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
	<style>
		.searchbar{
			margin:50px;
		}
	</style>
	
	<title>Search</title>
	<body style="background-color:#24a1b7;">
	
		<!-- The form -->
		<form class="searchbar" action="search.php" method="post">
		  <input type="text" placeholder="Location" name= "location" >
		  <button type="submit">Search</i></button>
		</form>
		
		
			<div class="container">
				<div class="jumbotron">
				
		<?php 
		
				include "connection.php"; 
				if(isset($_POST['location']))
				{	?>
					<h1>List of friends at <?PHP echo $_POST['location'] ?> </h1> <br>
					<?PHP
					$query="select * from friends where location ='".$_POST['location']."'";		
				}
				else
				{	
					?>
					<h1>List of friends </h1><br>
					<?PHP
					$query="select * from friends";	
				}
				
				

				
				mysqli_query($conn, $query) or die('Error querying database.');

				$result = mysqli_query($conn, $query);
				
				
				//printing table
				
					echo	"<table class='table  table-hover table-sm' style='width:100%'>
								<tr>
									<th></th>
									<th style='font-size:20px'>ID</th>
									<th style='font-size:20px'>Name</th>
									<th style='font-size:20px'>Age</th>
									<th style='font-size:20px'>Location</th>
									<th></th>
								</tr>";				
					
					while ($row = mysqli_fetch_array($result))
					{  
						echo	 "<tr>
									<td></td>
									<td>".$row['id']."</td>
									<td>".$row['name']."</td>	
									<td>".$row['age']."</td>
									<td>".$row['location']."</td>
									<td><a id='editlink' href='edit.php?id=".$row['id']."'>Edit</a></td>
								  </tr>";
					}
					
					echo	"</table>";
		?>		
		</div>
		</div>
	</body>
</html>