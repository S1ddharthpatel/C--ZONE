		<?php
				$severname="localhost";
				$username="root";
				$password="";
				$conn;
				
				//connect to dbserver
				$conn=mysqli_connect($severname,$username,$password ,"user")  or die('Error connecting to MySQL server.');
				
				//check connection_aborted
				if (!$conn) {echo "error";}
				
				//connect to database of the project
			//	mysqli_select_db($conn,"thenoob.com");		
				
		?>