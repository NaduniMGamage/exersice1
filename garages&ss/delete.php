<?php 
			$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
				echo "Connected to the database toolsdb";

			$id = $_POST['delid'];

			$query = "Delete from toolsde where Tid='$id'";

			if($result  = mysql_query($query) or die("Could not enter data".mysql_error())){
			echo("Successfuly Deleted");
			}
			else{
				echo("Failed to delete this item");
			}
		?>