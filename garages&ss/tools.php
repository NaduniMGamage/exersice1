<?php
	$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
	
		//echo "Cinnected to the database toolsdb";
		
	error_reporting(0);
	 //echo $_POST['uname'];
	 
	if($_POST['login']){
		if($_POST['uname'] && $_POST['password']){
			$username = mysql_real_escape_string($_POST['uname']);
			$password = mysql_real_escape_string(hash("sha512",$_POST['password']));
			$user= mysql_fetch_array(mysql_query("select * from 'user' where 'uname'='$username'" ));
			if($user=='0'){
				die("That username does't exist..Try again");
			}
			if($user['password']!=$password){
				die("Incorrect password");
			}
		}
	
	}
	
	
	
	
	/*require('db.php');
	session_start();
	// If form submitted, insert values into the database.
	if (isset($_POST['username'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysql_real_escape_string($username);
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);
 //Checking is user existing in the database or not
 $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
 $result = mysql_query($query) or die(mysql_error());
 $rows = mysql_num_rows($result);
 if($rows==1){
 $_SESSION['username'] = $username;
 header("Location: index.php"); // Redirect user to index.php
 }else{
 echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
 */


?>




<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<title>Login Form</title>
	</head>
	<body>
		<div class="container">
		<div class="jumbotron text-left">	
		<h2><b>Login to the Tools Management Section</b></h2>
		<form action='' method='POST'>
		<table>
		<tr>
			<td>
				<h4>User Name   :</h4>
			</td>
			<td>
				<input type="text" name="uname" style='padding: 4px;'></input></br>
			</td>
		</tr>
		
		<tr>
			<td>
				<h4>Password    :</h4>
			</td>
			<td>
				<input type="password" name="password" style='padding: 4px;'></input></br>
			</td>
		</tr>
		<tr>
		<td>
			<input type="submit" value="Login" name="login">
		</td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
	</body>

</html>    

