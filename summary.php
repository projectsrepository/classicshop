<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>


<?php
//this script and function will embed a summary of the shopping cart in the sent file

function summary(){
		echo "<p style='color:rgb(0, 0, 160);'>Thank you for your purchase! You bought the following items:</p>";
		foreach ($_SESSION["shopping_cart"] as $product){ // loops through shopping cart session and prints name, price and quantity of each item chosen

			
			echo '<p style="color:rgb(0, 0, 160);"><a>'.$product["quantity"].' '. $product['name'] . '</a> <span class="price">€'.$product["price"]*$product["quantity"].'</span></p>';
		}
		echo "<p style='color:rgb(0, 0, 160);'>A total of ".$_SESSION["total"]. " €</p>";
}
?>	  

      
</body>

</html>    