<html>

	<body style="background-color:#24a1b7;">

			<br>
			<br>
			<?php
				echo $_POST['id']."<br>";
				echo $_POST['name']."<br>";
				echo $_POST['age']."<br>";
				echo $_POST['location']."<br>";



				//construction of query

					$autoquery= "INSERT INTO `friends`(`id`, `name`, `age`, `location`)
						VALUES ('".$_POST['id']."','".$_POST['name']."','".$_POST['age']."', '".$_POST['location']."')";



				//connectio to server
					include "connection.php"; 	



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