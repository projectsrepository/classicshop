<?php
session_start();
include('db.php');

?>
<!--This is the final page a client will see if he/she succeeds in registering and making a purchase. It basically says that all went well and you can close the browser-->
<!--This page is quite straightforward really. Nothing difficult or worth explaining-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

    <style>
	
	.p1 {
	color: rgb(0, 0, 160);
	font-family: georgia, verdana;
	font-size: 20px;	
	}
	
	.p2 {	
	font-family: georgia, verdana;
	font-size: 24px;	
	}
	.p3 {
	color: green;
	font-family: georgia, verdana;
	font-size: 20px;	
	}	
		
    </style>
</head>
<body>




<div class="container text-center" style="margin-top:30px ">
    <div class="row">
        <div class="col-sm-12">
		
		<img src="pics/ok.png" class="img-fluid " alt="success pic" style="height: 100px;"><br><br>
		<p class="p3">Your order has been delivered successfully</p>
		<p class="p3">Please, close your browser to protect your account!</p><br>				
		<?php include 'summary.php';?>	<!--this includes a summary of the purchase from the summary.php file-->
		<?php summary();?>  <!--this will print the cart summary that comes from the summary.php file above-->
			

		<img src="pics/phonecart.png" class="img-fluid " alt="success pic" style="height: 250px;"><br><br>
		<p class="p2"><i><span class= "text-danger">CLASSIC</span>SHOP</i></p>
		
		<?php include 'footer.php';?><!--this includes a footer from the footer.php file-->
		


		</div>
	</div>
</div>
</body>
</html>