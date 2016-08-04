<html>
	<head> 
		<meta charset="utf-8"><>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<title> UpdatePage</title>
		 <!-- adding front awesome tools -->
		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
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
				<h3><b>View of Tools :- </b></h3>
				<?php 
					$db=new mysqli('localhost','root','','toolsdb') or die ("Can not connect");
					echo "Cinnected to the database toolsdb";

					$query = "select * from toolsde";

					$result = mysql_query($query) or die("Could not enter data".mysql_error());
				?>
			
			<table style="width:40%" border="2px">

			<tr>
			<th>ToolName</th>
			<th>Item ID</th>
			<th>Amount</th>
			<th>Description</th>
			<th>Category</th>
		</tr>
	  	<?php while($row = mysql_fetch_assoc($result)){ ?>
	    <tr>
	        <td><?php echo $row['toolName']; ?></td>
	        <td><?php echo $row['toolId']; ?></td>
	        <td><?php echo $row['amu']; ?></td>
	        <td><?php echo $row['desc']; ?></td>
	        <td><?php echo $row['cat']; ?></td
	    </tr>
		</table>		
				
		<h3><b>View of Fluids and Chemicals   :- </b></h3>
			<table style="width:40%" border="2px">

			<tr>
				<th>Name</th>
					<th>ID</th>
			<th>Amount</th>
			
			</tr>
	  	<?php while($row = mysql_fetch_assoc($result)){ ?>
	    <tr>
	        <td><?php echo $row['fname']; ?></td>
	        <td><?php echo $row['fid']; ?></td>
	        <td><?php echo $row['famount']; ?></td>
	    </tr>
							
			</div>
		</div>

</body>
</html>
