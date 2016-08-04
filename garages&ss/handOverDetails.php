<?php
			$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
			echo "Cinnected to the database toolsdb";
		
			//$link = mysql_connect('localhost', 'root', '')or die("Could not connect to the host".mysql_error());
			//$db = mysql_select_db('toolsdb',$link) or die("Could not connect to the db".mysql_error());
			//echo "Cinnected to the database toolsdb";
			//error_reporting(0);
		
	
			$techid = $_POST["techId"];
			$techname = $_POST["techName"];
			$itemid =$_POST["itemId"];
			$itemname =$_POST["ItemName"];
			$amount= $_POST["amount"];
			$date = $_POST["date"];
			$time = $_POST["time"];
		
	
	$query = "Insert into handoverdetails (Technician's Name,Technician's Id,Item Id,Item Name,Amount,Date,Time) values ('$techid','$techname', '$itemid', '$itemname','amount','date','time')";
		
	$result=mysql_query($query)or die("cound not insert values to database".mysql_error());
			
		if($result==true){
			echo "Successfully hand overed.";
		}
		else
			echo "This tool Couldn't be hand overed.";
	
?>