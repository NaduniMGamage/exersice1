<?php
	/*$conn = mysql_connect('localhost','root','');
	if($conn){
		echo 'connect to my sql';
		
	}else{
		
		echo 'MySql sever is not connected';
	}*/
	
	$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
	
		echo "Cinnected to the database toolsdb";

?>