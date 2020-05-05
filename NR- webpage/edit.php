<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	</head>
		<title>Edit Student Details</title>
	<body style="background-color:#24a1b7;">
	
			<?php

			 //connectio to server
					include "connection.php"; 	
				
			//run query
					$query="select * from friends where id=".$_GET['id'];
					$student=mysqli_query($conn,$query);
					$row=mysqli_fetch_array($student);
			?>		
				 <br>
				 <div class="jumbotron">	
					<h2 class="display-4">Edit the details</h2>
					<hr class="my-4">
					<div class="lead">
					<form action="update.php" method="post">
					ID: &nbsp 		<input type="number" name="id" value="<?php echo $row['id'];?>"/> <br><br>								
					Name: &nbsp 	<input type="text" name="name" value="<?php echo $row['name'];?>"/> <br><br>			
					Age:  &nbsp		<input type="number" name="age" value="<?php echo $row['age']; ?>"/><br><br>
					Location:&nbsp  <input type="text" name="location" value="<?php echo $row['location']; ?>"/><br><br>
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
					</form>	
					</div>
				</div>
	</body>
</html>			
			
