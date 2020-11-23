<?php
include('db.php');

?>

<!--this page was created to delete orders from the Mysql database table called orders -->



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
		background-image: linear-gradient(to right, white, lightgreen);
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
		<li class="breadcrumb-item active">Orders</li>
        
    </ul>

<h4 class="text-center" style = "color:darkblue">Remove order/s from database</h4><br>


    <div class="container text-center" style="margin-top:20px ">
        <div class="row">
            <div id ="grad1" class="col-sm-6 mx-auto">
                
                <br>

<!--form to get the client ID -->				
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label style="color:blue" for="email">Type your client email to delete your order/s:</label><br>
  <input type="text" id="email" name="email" required><br>
  <input class="btn btn-primary btn-sm" name="submit" type="submit">

</form>	<br>
  <a class="btn-lg btn-warning" href="cart.php" role="button">Go back</a>&nbsp&nbsp&nbsp
  <br>

<?php



//Posting form input to variables, which are then trimmed of white space and it also removes any possible tags present
if(isset($_POST['email'])){
  $email = strip_tags( trim( $_POST["email"]));  
}
//filtering and sanitizing the variable
$email = filter_var($email, FILTER_SANITIZE_EMAIL);


if (isset($_POST['submit']) && !empty($_POST['submit'])) { 

	// sql prepared statement to delete a record using a subquery, i.e. a query inside another query
	$sql = "DELETE FROM orders WHERE clientid=ANY(SELECT clientid FROM client WHERE Email = ?)";

	$stmt = mysqli_stmt_init($con);

	if(mysqli_stmt_prepare($stmt, $sql)){
		mysqli_stmt_bind_param($stmt, 's', $email);
		mysqli_stmt_execute($stmt);
		echo"<br>";
		echo "<p style='color:blue'>If an order with that email existed, it has been successfully removed!</p>";
		}	
	

	mysqli_stmt_close($stmt);

}


mysqli_close($con);

?>


</body>
</html>


