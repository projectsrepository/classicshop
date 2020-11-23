<?php
include('db.php');//it includes the page db.php. There I have placed the connection to my database. It will be included in more than 4 or 5 pages in this project
?>				  

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Catalogue</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="shortcut icon" href="pics/icon2.png" />
	<link rel="stylesheet" href="css/mystyle.css">
    <style>

<!--specific css style for only this page -->		
		table{
			
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: georgia, times new roman;
			font-size: 15px;
			text-align: left;
			
 
		}		
		
		
		.heightgallery {
			height: 140px;
			width: 145px;			
		}
		
		#grad1 {
		
		background-color: lightblue; /* For browsers that do not support gradients */
		background-image: linear-gradient(to right, white, lightblue);
		}
		
		
		
    </style>
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.6) 100%), url(https://www.iep.utm.edu/wp-content/media/Aesthetics-of-Classical-Music-Image.jpg)">
        <div class="container">
            <h1 class="display-5 fontclass"><i><span class= "text-danger">CLASSIC</span>SHOP</i></h1>            
            <hr class="my-1">
            <p>The classical shop you deserve.</p></div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top">
        <a class="navbar-brand" href="index.php"><img src="pics/icon2.png" alt="logo" style="width:60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse nav-item:hover" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto  ">
                <li class="nav-item "> <a class="nav-link" href="index.php">Home</a> </li>                                
                <li class="nav-item active active-nav"> <a class="nav-link" href="catalogue.php">Catalogue</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>&nbsp&nbsp&nbsp
                <form class="form-inline" action="searchbox.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">Catalogue</li>
        
    </ul>
    <div class="container" style="margin-top:50px ">
        <div class="row">
            <div id ="grad1" class="col-sm-4">
                <h2 class="text-center">Search options</h2> <img src="pics/dog.jpg" class="img-fluid mx-auto d-block " alt="my photo" style="height: 200px;">
                <br>

<!--form that posts the input to this very same page. -->				
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="lastname">Type the composer's last name:</label><br>
  <input type="text" id="lastname" name="lastname" value=""><br><br>
  <label for="country">...or type the composer's country of origin:</label><br>
  <input type="text" id="country" name="country" value=""><br><br>
    <label for="period">...or select a music period:</label><br>
  <select id="period" name="period">
    <option value= '0' selected></option>
    <option value= 1>Barroch</option>
    <option value= 2>Classical</option>
	<option value= 3>Romantic</option>
	<option value= 4>Contemporary</option>
	<option value= 5>Medieval</option>
  </select><br><br>  
  <input class="btn btn-primary btn-sm" type="submit">
</form>	<br><br>				
			
				
                <hr class="d-sm-none"> </div>				
            <div class="col-sm-8">
                <h2 class="text-center">Search results</h2> <br> 
				
<div class="table-responsive">          
  <table class="table table-condensed table-borderless">				
				
<?php

//it's self-explanatory. The input from the form is verified that it has been posted and then is assigned to variables. 
$period = "0";
$country = '';
$lastname = '';

if(isset($_POST['lastname'])){
  $lastname = $_POST["lastname"];
}

if(isset($_POST['country'])){  
  $country = $_POST["country"];  
}

if(isset($_POST['period'])){
  $period = $_POST["period"];
}

 

//inner join query to select some features that will be displayed in the table below
$sql = "SELECT image, albumID, lastName, firstName, album_name, released, price 
		FROM album  INNER JOIN artist ON album.artistID = artist.artistID 
		WHERE lastName = '$lastname' OR country = '$country' OR periodID = '$period'";
		


$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
	//looping the result of the query to rows which are displayed in the form of a table
    echo "<tr><td><a href='albums/{$row["albumID"]}.php'> ID: ". $row["albumID"]. "</a></td><td><b><a href='albums/{$row["albumID"]}.php'>".
	$row["lastName"]. "&nbsp&nbsp</a></b></td><td><b><a href='albums/{$row["albumID"]}.php'>".$row["album_name"]. "&nbsp&nbsp</a></b></td></tr>";
	echo "<tr><td rowspan='2'>". "<a href='albums/{$row["albumID"]}.php'><img class = 'heightgallery' src= 'pics/{$row["image"]}' ".
	"</a></td><td></td><td >Released : ". $row["released"]. "</td></tr>";
	echo "<tr><td></td><td>". $row["price"]." €</td></tr>";
	echo "<tr><td colspan='4'><hr class='my-'></td></tr>";	
  }
} else {
  echo "0 results";
}

mysqli_close($con);
?>

</table>
</div>				


                <br>
                <br>
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
        <p>© 2019 All rights reserved. | Site developed by Danny Boy Designs</p><img src="pics/logo11.jpg" alt="logo" style="width:120px;"></div>
</body>

</html>