<?php
	$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
		echo "Cinnected to the database toolsdb";
		
	//$link = mysql_connect('localhost', 'root', '')or die("Could not connect to the host".mysql_error());

	//$db = mysql_select_db('toolsdb',$link) or die("Could not connect to the db".mysql_error());
		//echo "Cinnected to the database toolsdb";
		
		//error_reporting(0);
		
	
	$id = $_POST["itemId"];
	$name = $_POST["toolName"];
	$amount =$_POST["amount"];
	$description = $_POST["desc"];
	$category = $_POST["cat"];
		
		$query=$query = "Insert into toolsde (ToolName,Iid,Amount,Description,category)values('$id','$name', '$amount', '$description','category')");

		$result=mysql_query($query)or die("cound not insert values to database".mysql_error());
		if($result==true){
			echo "Successfully Added";
		}
		else
		echo "This tool Couldn't be added";
	
?>