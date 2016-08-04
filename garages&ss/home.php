<!DOCTYPE html>
<html>
	<head> 
			<meta charset="utf-8"><>
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/custom.css" rel="stylesheet">
			 <!-- adding front awesome tools -->
			<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="js/bootstrap.min.js"></script>
			<title> HomePage</title>
	</head>
	
<body>
	
		<div class="container">
			<div class="jumbotron text-center">	
				<h2><b>Welcome to the Tools Management Section</b></h2>
			</div>
		</div>
	
		
			<div class="container">
			
			<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="2500"><!--in mili second-->
			<ol class="carousel-indicators">
				<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mycarousel" data-slide-to="1"></li>
				<li data-target="#mycarousel" data-slide-to="2"></li>
				<li data-target="#mycarousel" data-slide-to="3"></li>
			</ol>
		
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/one.jpg">
				
			</div>
			<div class="item">
				<img src="img/two.jpg">
			</div>
			
			<div class="item">
				<img src="img/three.jpg">
			</div>
			
			
			<div class="item">
				<img src="img/four.jpg">
			</div>
		
		</div>
		
		
		<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphican-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
			<span class="glyphicon glyphican-chevron-right"></span>
		</a>
	</div>
	</div>

	<div class="container">
	<div class="jumbotron text-center">	
		<button type=button class="btn btn-success"><h2><a href="add.php">Add</a></h2></button>
		<button type=button class="btn btn-success"><h2><a href="view.php">View</a></h2></button>
		<button type=button class="btn btn-success"><h2><a href="update1.php">Update</a></h2></button>
		<button type=button class="btn btn-success"><h2><a href="delete.html">Delete</a></h2></button>
		<button type=button class="btn btn-success"><h2><a href="takeOverDetails.html">Take over Details</a></h2></button>
		<button type=button class="btn btn-success"><h2><a href="handOverDetails.html">Hand over Details</a></h2></button>
	</div>
	</div>
</body>
</html>
