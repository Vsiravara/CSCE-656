<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CSCE 656</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="288x288" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
  <style>
  .grey{
		background-color: #7FFFD4;
		padding:20px;
		
		
       }
  </style>
</head>

<body>
<div class="container">
	
	<div class="row clearfix">
		
		<div class="col-md-12 column">
			
			<div class="row clearfix">
				<div class="col-md-3 column">
					<img class="img-circle" alt="140x140" src="pikachu.jpeg" onclick="www.google.com">
				</div>
				<hr>
				
				<div class="col-md-9 column">
				<div class="grey">
				<div class="well">
					<h3>
						<?php
session_start();
if(session_is_registered(myusername)){
echo 'Hello '.$_SESSION["username"].'!';
}
?>
					</h3>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row clearfix">
		<div class="col-md-2 column">
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="btn-group btn-group-vertical btn-group-lg">
						 <a href="index.php" class="btn btn-primary" type="button"> Home</a>
 						 <a href=""  class="btn btn-info" type="button"> Help</a>
 						 <a href="" class="btn btn-success" type="button"> Tools</a> 
						 <a href="tutorial.html" class="btn btn-warning" type="button"> Tutorial</a>
						 <a href="" class="btn btn-danger" type="button"> Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-10 column">
			<div class="row ">
				<div class="col-md-6 column">
					<a href="question11.html"><img alt="512x512" src="unlock.png" style="max-height: 300px; max-width: 300px;"></a>
					<h4>Level 1</h4>		
				</div>
				
				<div class="col-md-6 column">
					<a href="question21.html"><img alt="280x280" src="lock.png" style="max-height: 300px; max-width: 300px;">
					<h4>Level 2</h4></a>
				</div>
			</div>
			<hr>
			<div class="row ">
				<div class="col-md-6 column">
				<a href="question31.html"><img alt="280x280" src="lock.png" style="max-height: 300px; max-width: 300px;"></a>
					<h4>Level 3</h4>
				</div>
				
				<div class="col-md-6 column">
					<a href="question41.html"><img alt="280x280" src="lock.png" style="max-height: 300px; max-width: 300px;"></a>
					<h4>Level 4</h4>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
