

<html>
	<head> 
		<meta charset="utf-8"><>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<title> AddPage</title>
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
				<h3><b>Add New tools   :- </b></h3>
				<form action='' method'POST'>
				<table>
					<tr>
						<td>
							<h4>Tool Name   :</h4></br>
						</td>
						<td>
							<input type="text" name="toolName" style='padding: 4px;'/>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Item ID   :</h4></br>
						</td>
						<td>
							<input type="text" name=itemId" style='padding: 4px;'>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Amount   :</h4></br>
						</td>
						<td>
							<input type="text" name="amount" style='padding: 4px;'/>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Description   :</h4></br>
						</td>
						<td>
							<textarea name="desc" rows="10" cols="30">
							</textarea>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Select relavant Category  :</h4></br>
						</td>
						<td>
							<input type="text" name="cat" style='padding: 4px;'/>
						</td>
					</tr>
					<tr>
						<td>
							<h3><input type="submit" value="Add" name="add1" /></h3>
						</td>
						<td>
							<h3><input type="reset" value="Clear" /></h3>
						</td>
					</tr>
				</table>
				<h3><b>Add Fluids and Chemicals   :- </b></h3>
				<table>
					<tr>
						<td>
							<h4>Name   :</h4></br>
						</td>
						<td>
							<input type="text" name="fName" style='padding: 4px;'/>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Id   :</h4></br>
						</td>
						<td>
							<input type="text" name="fId" style='padding: 4px;'/>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Amount  :</h4></br>
						</td>
						<td>
							<input type="text" name="famount" style='padding: 4px;'/>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" value="Add" name="add2" />
						</td>
						<td>
							<h3><input type="reset" value="Clear" /></h3>
						</td>
					</tr>
				</table>
				</form>
			</div>
		</div>

</body>
</html>
