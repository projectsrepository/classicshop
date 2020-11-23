<?php
include('db.php');

?>

<!--this page was created to update the addresses of clients from the Mysql database table called client -->



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="pics/icon2.png" />
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="css/style.css">
<script type = "text/javascript" src="js/jscript.js"></script>

<style>
		
		#grad1 {
		
		background-color: white; /* For browsers that do not support gradients */
		background-image: linear-gradient(to right, white, rgb(255, 212, 0));
		}	


</style>

</head>

<body>


    <nav id ="grad1" class="navbar navbar-expand-lg bg-warning navbar-light sticky-top">

		<h3 class=" fontclass"><i><span class= "text-danger">CLASSIC</span>SHOP</i></h3>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse nav-item:hover" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item "> <a class="nav-link" href="index.php">Home</a> </li>                                
                <li class="nav-item "> <a class="nav-link" href="catalogue.php">Catalogue</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>&nbsp&nbsp&nbsp

            </ul>
        </div>
    </nav>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">Account</li>
        
    </ul>

<h4 class="text-center" style = "color:darkblue">Update client address information</h4><br>


    <div class="container" style="margin-top:5px ">
        <div class="row text-center">
            <div  class="col-sm-6 mx-auto">
                
                <br>

                
<!--form to get the client's email through post and then other input to update the address  -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<p style="color:blue">Type your Email and your new address to update your account</p>
		<label for="email"> Email</label>
            <input type="text" id="email" name="email" required>
            <label for="address"> Address</label>
            <input type="text" id="address" name="address" required>
            <label for="city"> City</label>
            <input type="text" id="city" name="city" required>
            <label for="country">Country</label>
            <input type="text" id="country" name="country" required>
            <label for="zip">Zip</label>
            <input type="text" id="zip" name="zip" required> 
		<input class="btn btn-primary btn-sm" name="update" type="submit">
</form>	<br><br>				
				
</div>

<?php

//Posting form input to variables, which are then trimmed of white space and it also removes any possible tags present
if(isset($_POST['email'])){
  $email = strip_tags( trim( $_POST["email"]));  
}

if(isset($_POST['address'])){
  $address = strip_tags( trim( $_POST["address"]));
}

if(isset($_POST['city'])){
  $city = strip_tags( trim( $_POST["city"]));
}

if(isset($_POST['country'])){
  $country = strip_tags( trim( $_POST["country"]));
}

if(isset($_POST['zip'])){
  $zip = strip_tags( trim( $_POST["zip"]));
}
//filtering and sanitizing variables
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$address = filter_var($address, FILTER_SANITIZE_STRING);
$city = filter_var($city, FILTER_SANITIZE_STRING);
$country = filter_var($country, FILTER_SANITIZE_STRING);
$zip = filter_var($zip, FILTER_SANITIZE_STRING);




if (isset($_POST['update']) && !empty($_POST['update'])) { 

	// sql prepared statement to update a record
	$sql = "UPDATE client SET Address = ?, City = ?, Country = ?, Zip = ? WHERE Email = ?";

	$stmt = mysqli_stmt_init($con);

	if(mysqli_stmt_prepare($stmt, $sql)){
		mysqli_stmt_bind_param($stmt, "sssss", $address, $city, $country, $zip, $email);
		mysqli_stmt_execute($stmt);	
		echo "<p style='color:green'> Record updated successfully</p>";
	}	

	mysqli_stmt_close($stmt);
}

mysqli_close($con);

?>

</body>
</html>


