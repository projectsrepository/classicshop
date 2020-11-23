<?php
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){  //this code block goes through all albums and place their data in different variables
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM album WHERE code ='$code'");
$row = mysqli_fetch_assoc($result);
$albumid = $row['AlbumID'];
$name = $row['Album_Name'];
$code = $row['Code'];
$price = $row['Price'];
$image = $row['Image'];


//this creates an array using the previous variables extracted from the album table
$cartArray = array(
	$code=>array(
	'albumid'=>$albumid,
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;	//if the session shopping cart is empty, the previously created array is passed into it
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]); //this is to inform that the product was already added in the cart
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray); //this merges the previously created array with session shopping cart array. 
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="shortcut icon" href="pics/icon2.png" />
	<link rel="stylesheet" href="css/mystyle.css">
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <style>


			

		#grad1 {
		
		background-color: white; /* For browsers that do not support gradients */
		background-image: linear-gradient(to right, white, lightblue);
		}
		


		
		
    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.6) 100%), url(https://www.iep.utm.edu/wp-content/media/Aesthetics-of-Classical-Music-Image.jpg)">
        <div class="container">
            <h1 class="display-5 fontclass"><i><span class= "text-danger">CLASSIC</span>SHOP</i></h1>            
            <hr class="my-1">
            <p>The classical shop you deserve.</p> </div>
    </div></a> </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top">
        <a class="navbar-brand" href="index.php"><img src="pics/icon2.png" alt="logo" style="width:60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse nav-item:hover" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto  ">
                <li class="nav-item "> <a class="nav-link" href="index.php">Home</a> </li>                                
                <li class="nav-item"> <a class="nav-link" href="catalogue.php">Catalogue</a> </li>                
                <li class="nav-item "> <a class="nav-link" href="gallery.php">Gallery</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>&nbsp&nbsp&nbsp
                <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Search</li>
        </ul>
        <div class="container-sm" style="margin-top:50px ">
            <div class="row">
                <div id ="grad1" class="col-sm-12">
                    <h4>Results</h4>
					
			
  
  





<?php
if(!empty($_SESSION["shopping_cart"])) {   //if session shopping cart is not empty pass number of items to a variable that keeps the count
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div"><!--this small section prints the small shopping cart icon with the item number-->
<a href="cart.php"><img src="pics/cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div><br><br>

<?php
}

$search = '';
//this receives any input that is typed in any of the many pages with a search box in the navigation bar
if(isset($_POST['search'])){
  $search = $_POST['search'];
}

//this inner join query produces all albums that fulfill one of three conditions of WHERE. These are wrapped with percentage signs so that only parts of the input are enough 
//to make a search. For example, it is enough to write 'moz' if I want to search for 'mozart', or 'ita' if I search for Italy.
$result = mysqli_query($con,"SELECT *	FROM album  INNER JOIN artist ON album.artistID = artist.artistID 
		WHERE lastName LIKE '%".$search."%' OR country LIKE '%".$search."%' OR firstName LIKE '%".$search."%' OR album_name LIKE '%".$search."%'");
while($row = mysqli_fetch_assoc($result)){
		//this loops all the results in the form of wrapped cards, which gets its form from the css file style.css
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['Code']." />
			  <div class='image'><img src='pics/{$row["Image"]}' width='200' height='200'/></div>
			  <div class='name'>".$row['Album_Name']."</div>
			  <div class='lastname'>".$row['LastName']."</div>
		   	  <div class='price'>$".$row['Price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div><div></div>";
		
        }
	
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?> <!--this prints any of the messages that may result when handling the shopping cart, like 'Product is added to your cart' etc.--> 
</div>
</div>
  
  
  
  
  
				</div>
            </div>
        </div>
    <div class="jumbotron jumbotron-fluid text-center bg-secondary text-light" style="margin-bottom:0">
        <p><a href="https://www.facebook.com/LaureaUAS"><i class="fab fa-facebook" style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://twitter.com/laureauas"><i class='fab fa-twitter' style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://www.instagram.com/LaureaUAS/"><i class='fab fa-instagram' style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://www.youtube.com/user/LaureaUAS"><i class='fab fa-youtube' style='font-size:30px;color:white'></i></a></p>
        <p>Classic Shop | Vanha maantie 9, 02650 Espoo - Finland </p>
        <p>Tel: +358 46 5740588 | Email: classicshop@live.com </p>
        <p>© 2019 All rights reserved. | Site developed by Danny Boy Designs</p><img src="pics/logo11.jpg" alt="logo" style="width:120px;"></div>
</body>

</html>
