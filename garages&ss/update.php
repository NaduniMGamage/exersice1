<?php
	$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
				echo "Connected to the database toolsdb";

			$id = $_POST["itemId"];
			$name = $_POST["toolName"];
			$amount =$_POST["amount"];
			$description = $_POST["desc"];
			$category = $_POST["cat"];
		
		
		$query="UPDATE toolsde
				SET itemId='$id',toolName='$name',amount='$amount',desc='$description',cat='$category'
				WHERE itemId='$id'";
				
		$result=mysql_query($query)or die("cound not insert values to database".mysql_error());
		if($result==true){
			echo "Successfully Updated";
		}
		else
			echo "This tool Couldn't be updated";
?>