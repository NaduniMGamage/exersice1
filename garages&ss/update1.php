<html>
	<head> 
		<meta charset="utf-8"><>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<title> HomePage</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>

	</head>
	
<body>
	<!--<h1> <center>  </center> </h1>
		Name : <?php echo $_POST ['uname'];
		?> <br/>
		-->
		
		<div class="container">
			<div class="jumbotron text-center">	
				<h2><b>Welcome to the Tools Management Section</b></h2>
			</div>
		</div>
		<div class="container">
			<div class="jumbotron text-left">	

	
				<h3><b>Update the item   :- </b></h3>
				<form action='' method='POST'>
				<table>
					<tr>
						<td>
							<h4>Name   :</h4></br>
						</td>
						<td>
							<input type="text" name="upName" style='padding: 4px;'></input>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Id   :</h4></br>
						</td>
						<td>
							<input type="text" name="upId" style='padding: 4px;'></input>
						</td>
					</tr>
					<tr>
						<td>
							<button type=button class="btn btn-success"><h3><a href="update.html">Update</a></h3></button>
						</td>
					</tr>
				</table>
				</form>
			</div>
		</div>

</body>
</html>
