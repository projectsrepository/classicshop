<?php
session_start();
include('db.php');

?>


<?php
//receiving SESSION arrays and variables from cart.php for later use...if needed
$total = $_SESSION['total'];
$albumid = $_SESSION["albumid"];
$quantity = $_SESSION["quantity"];
$price = $_SESSION["price"];






//Posting form input to variables, which are then trimmed of white space and it also removes any possible tags present
if(isset($_POST['firstname'])){
  $firstname = strip_tags( trim( $_POST["firstname"]));
}

if(isset($_POST['lastname'])){
  $lastname = strip_tags( trim( $_POST["lastname"]));
}

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

if(isset($_POST['cardname'])){
  $cardname = strip_tags( trim( $_POST["cardname"]));
}

if(isset($_POST['cardnumber'])){
  $cardnumber = strip_tags( trim( $_POST["cardnumber"]));
}

if(isset($_POST['expmonth'])){
  $expmonth = strip_tags( trim( $_POST["expmonth"]));
}

if(isset($_POST['expyear'])){
  $expyear = strip_tags( trim( $_POST["expyear"]));
}

if(isset($_POST['cvv'])){
  $cvv = strip_tags( trim( $_POST["cvv"]));
}

//sanitizing and validating input variables
$firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
$laststname = filter_var($lastname, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$address = filter_var($address, FILTER_SANITIZE_STRING);
$city = filter_var($city, FILTER_SANITIZE_STRING);
$country = filter_var($country, FILTER_SANITIZE_STRING);
$zip = filter_var($zip, FILTER_SANITIZE_STRING);
$cardname = filter_var($cardname, FILTER_SANITIZE_STRING);
$cardnumber = filter_var($cardnumber, FILTER_SANITIZE_NUMBER_INT);
$expmonth = filter_var($expmonth, FILTER_SANITIZE_STRING);
$expyear = filter_var($expyear, FILTER_SANITIZE_STRING);
$cvv = filter_var($cvv, FILTER_SANITIZE_NUMBER_INT);


//prepared statement for the form input to prevent sql injection attacks
$sql = "INSERT INTO Client (firstname, lastname, email, address, city, country, zip, nameoncard, cardnumber, expmonth, expyear, cvv)
	VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($con);

if(mysqli_stmt_prepare($stmt, $sql)){
	mysqli_stmt_bind_param($stmt, "ssssssssssss", $firstname, $lastname, $email, $address, $city, $country, $zip, $cardname, $cardnumber, $expmonth, $expyear, $cvv);
	mysqli_stmt_execute($stmt);	
}

mysqli_stmt_close($stmt);


//this insert operation does not use prepared statements since its data is inaccessible to outsiders. i.e. it's created automatically with secure data  
$sql = "INSERT INTO Orders (clientid, sold, total)
VALUES(LAST_INSERT_ID(), now(), '$total')";


if (isset($_POST['submit']) && !empty($_POST['submit'])) { 

    if (mysqli_query($con, $sql)) { 

    header('Location: sent.php');//this sends the result of the operation of this whole page to sent.php to be handled
    exit();


    } else {
    echo "<h3 style='color:red'>Error: Oops...something went wrong!</h3>" . $sql . "<br>" . $con->error;
    }
}


mysqli_close($con);


?>