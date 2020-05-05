<html>
	<head>
	
		<link rel="stylesheet" href="form.css" type"text/css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	
	</head>
		<title>Add new User</title>
	<body style="background-color:#24a1b7;"><br><br><br>	 
	 
	 <div class="jumbotron">	
			<h2 class="display-4">Enter details of the new user</h2>
			<hr class="my-4">
			<div class="lead">
				<form action="save.php" method="post">
					Id:  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp   <input type="number" name="id"/><br><br>		
					Name:   &nbsp  &nbsp &nbsp 					 <input type="text" name="name"/><br><br>			
					Age: &nbsp  &nbsp  &nbsp   &nbsp  &nbsp 	 <input type="number" name="age"/><br><br>		
					Location:  &nbsp 							 <input type="text" name="location"/><br><br>	
					<input class="btn btn-primary btn-lg" type="submit"/>
					<input class="btn btn-primary btn-lg" type="reset"/>
				</form>	
			</div>
	</div>
	</body>
</html>




