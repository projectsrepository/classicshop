<?php
session_start();
$status="";
//this following section will remove any item previously added to the cart by looping through all albums and removing that with the same code as key=>value
//it also empties the cart from showing any data if all items are removed (using unset)
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product was removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}
//this section changes the quantity of items to be bought. It receives the number of items from the form further below which is sent via a function called this.form.submit()
if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // this stops the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>


<h2 class="text-center" style = "color:darkblue">Shopping Cart</h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<a class="btn-lg btn-primary fa fa-trash-o" style="font-size:36 px;color:white" href="orders.php" role="button">  Delete order/s</a> 


<?php
//counting items in shopping cart (if not empty)and assigning the count to a variable
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="pics/cart-icon.png" /> Cart &nbsp&nbsp&nbsp
<span><?php echo $cart_count; ?></span></a> <!--this prints the count of session array shopping cart-->
</div>
<?php
}
?>
<!--importing class 'cart' from css file -->
<div class="cart">
<?php
//reseting price and quantity to zero before using cart to add items
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
	$total_quant = 0;
?>

    <div class="container" style="margin-top:50px ">
        <div class="row">
            <div class="col-sm-12">

			
<table class="table" >
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php
//extracting data from shopping cart session array and asigning the quantity of albums to be bought
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo "pics/{$product["image"]}"; ?>' width="50" height="50" /></td> <!--this prints the images of items  -->
<td><?php echo $product["name"]; ?><br />  <!--this prints the names of items  -->
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove fa fa-trash-o' style="font-size:26 px;color:red"> Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option> <!--all these options print and select quantity of items chosen -->
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>  <!--this prints the price of items  -->
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td> <!--this prints the total price of each item times number of items  -->
</tr>
<?php
//assigning chosen quantities and prices to SESSION variables/arrays for later use in page sending.php ..or anywhere else with a session_start() function at the top of the page
$total_price += ($product["price"]*$product["quantity"]);
$total_quant += $product["quantity"];
$_SESSION["total"] = $total_price;
$_SESSION["totalquant"] = $total_quant;






$_SESSION["albumid"] = $product["albumid"];
$_SESSION["quantity"] = $product["quantity"];
$_SESSION["price"] = $product["price"];



}
?>
<!-- styling how the shopping cart will look with the data chosen -->
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong> <!--this prints total price of items  -->
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3 class='text-center' style = 'color:orange'>Your cart is empty!</h3>"; //this prints a message if cart is empty
	}
?>
</div>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>  <!--this prints a message indicating the step taken by the user in the cart   -->
</div>

</div>

				
				<div class="form-group text-center " method="post" action="checkout.php">
					<a class="btn-lg btn-warning fa fa-arrow-circle-left" style="font-size:20px" href="searchbox.php" role="button">  Go back</a>
					<a class="btn-lg btn-success  fa fa-cc-visa" href="checkout.php" role="button">  Proceed to Checkout</a><br><br>					
					<img src="pics/paypal.jpg" class="img-fluid " alt="paypal pic" style="height: 50px;">
				</div><br>

</div>
</div>
</div>
</body>
</html>