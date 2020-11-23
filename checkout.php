<?php
session_start(); //including sessions and the database file
include('db.php');

?>





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
		background-image: linear-gradient(to right, white, lightblue);
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
		<li class="breadcrumb-item active">Checkout</li>        
    </ul><br>
<!--template with fields to create a registration form for the client table in the database-->
<h4 class="text-center" style = "color:darkblue">Registration and checkout form</h4><br>
<a class="btn-lg btn-primary" href="account.php" role="button">  Update account</a>

<div class="row">
  <div class="col-75">
    <div class="contain" style="margin-top:50px ">
	
      <form id = "form" name="form" method="post" action="sending.php">      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <div class="row">
              <div class="col-50">
				<label for="firstname"><i class="fa fa-user"></i> First Name</label>
				<input type="text" id="firstname" name="firstname" placeholder="John" required>
              </div>
              <div class="col-50">
				<label for="lastname"><i class="fa fa-user"></i> Last Name</label>
				<input type="text" id="lastname" name="lastname" placeholder="Smith" required>
              </div>
            </div>			

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adress" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="country">Country</label>
                <input type="text" id="country" name="country" placeholder="Germany" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
			
          </div>
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-containr">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number (type exactly 16 digits)</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing <!-- purposely not in use -->
        </label>
        <input type="submit" onclick="fields();" name="submit"  value="Continue to checkout" class="btn"><!--one of the three functions used in this project-->
      </form>
    </div>
  </div>
  <div  class="col-25">
    <div style="background-color:rgb(255, 255, 230);" class="contain"><!--summarizes all the purchase information from the shopping cart-->
      <h4>Cart summary <span class="price" style="color: orange"><i class="fa fa-shopping-cart"></i> <b><?php  echo $_SESSION["totalquant"];?></b></span></h4><!-- prints total quantity -->
<?php
		foreach ($_SESSION["shopping_cart"] as $product){ // loops through shopping cart session and prints name, price and quantity of each item chosen

			echo '<p><a>'. $product['name'] . '</a> <span class="price">€'.$product["price"]*$product["quantity"].'</span></p>';

		}
?>	  

      <hr>
      <h5>Total <span class="price" style="color:green"><b>€<?php echo $_SESSION["total"]; ?></b></span></h5><!-- prints total price -->
	  
		

    </div>
  </div>
</div>



    <div class="jumbotron jumbotron-fluid text-center bg-secondary text-light" style="margin-bottom:0">
        <p><a href="https://www.facebook.com/LaureaUAS"><i class="fab fa-facebook" style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://twitter.com/laureauas"><i class='fab fa-twitter' style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://www.instagram.com/LaureaUAS/"><i class='fab fa-instagram' style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://www.youtube.com/user/LaureaUAS"><i class='fab fa-youtube' style='font-size:30px;color:white'></i></a></p>
        <p>Classic Shop | Vanha maantie 9, 02650 Espoo - Finland</p>
        <p>Tel: +358 46 5740588 | Email: classicshop@live.com </p>
        <p>© 2019 All rights reserved. | Site developed by Danny Boy Designs</p><img src="pics/logo11.jpg" alt="logo" style="width:120px;">
	</div>
<?php


?>
</body>
</html>


