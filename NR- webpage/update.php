<html>

	<body style="background-color:#24a1b7;">
<br>
			<a href="list.php"><br><font size="6">List</font></a>
			<?php
				
				//construction of query	
				$autoquery="UPDATE `friends` SET `name` = '".$_POST["name"]."',
												`age`=".$_POST['age'].",
												`location`= '".$_POST["location"]."'  WHERE `friends`.`id` = ".$_POST['id'];
				

				$severname="localhost";
				$username="root";
				$password="";
				
				//connect to dbserver
				$conn=mysqli_connect($severname,$username,$password);
				
				//check connection_aborted
				if (!$conn) {echo "error";}
				else {echo "connected successfully";}
				
				//connect to database of the project
				mysqli_select_db($conn,"user");
				
				
				
				
				
				if(mysqli_query($conn,$autoquery))
					{?>
							<script>
								alert("Insertion Successful");
								window.location.replace("list.php");		
							</script>
						<?php	
					}
				else
					{echo mysqli_error($conn);}
				
				
			?>
	
	</body>
</html>	