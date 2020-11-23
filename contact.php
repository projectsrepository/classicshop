<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
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
        body {
            background: rgb(240, 240, 240);
        }
        
        .col-md-6 {
            text-align: center;
        }
        
        #map {
            height: 500px;
            width: 100%;
        }
        
        .color-green {
            color: green;
        }
    </style>
    <script type="text/javascript" src="javascript/map_validation.js"></script>
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
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>           
                                
                <li class="nav-item"> <a class="nav-link" href="catalogue.php">Catalogue</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a> </li>                
                <li class="nav-item active active-nav"> <a class="nav-link" href="contact.php">Contact</a> </li>&nbsp&nbsp&nbsp
                <form class="form-inline" action="searchbox.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name= "search" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
    
    
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
    </ul>
    <div class="container" style="margin-top:50px ">
        <div class="row">
            <div class="col-md-6">
                <h4>Our main shop's location</h4>
				<!--I have included this following embeded file where I import a google api to use their maps-->
				<?php include 'googlemaps.php'; ?>

                <h6>Vanha maantie 9, 02650 Espoo</h6><br><br><br></div>                  
            <div class="col-md-6">
                <h4>Contact</h4>
                <br>
                <div class="container"><!--bootstrap contact form with a javascript function for validating input-->
                    <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method = "post" onsubmit="return false" class="needs-validation" novalidate>
                        <h4 id="demo"></h4>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Username.." name="username" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" placeholder="Email.." name="email" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        
                        <br>
                        <div class="form-group">
							<label for="text">Comment:</label>
							<textarea class="form-control" rows="5" id="text" placeholder="Comment here..." name="text" required></textarea>
							<div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
						</div>
                            
                            <button type="submit" name= "submit" onclick="function()" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-primary" onclick="contact.php">Refresh</button>
                            <br>
                    </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php

//in a wonderfull world this following piece of code should work, but as I understand or have read, we don't have the credentials/authority to sent messages 
//as students when using Azure, otherwise this would work
$name = '';
$email = '';
$text = '';

if(isset($_POST['submit'])){
	$name = $_POST["username"];
	$email = $_POST["email"];
	$text = $_POST["text"];
  
	$mailTo = "daniel*******@live.com";
	$headers = "From: ".$email;
	$message = "You have received an e-mail from ". $name . ".\n\n". $text;
	
	// send email
	mail($mailTo, $email, $message, $headers);
	header("Location: contact.php?");
}
?>	
	
	
	
	
    <div class="jumbotron jumbotron-fluid text-center bg-secondary text-light" style="margin-bottom:0">
        <p><a href="https://www.facebook.com/LaureaUAS"><i class="fab fa-facebook" style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://twitter.com/laureauas"><i class='fab fa-twitter' style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://www.instagram.com/LaureaUAS/"><i class='fab fa-instagram' style='font-size:30px;color:white'></i></a>&nbsp&nbsp
		<a href="https://www.youtube.com/user/LaureaUAS"><i class='fab fa-youtube' style='font-size:30px;color:white'></i></a></p>
        <p>Classic Shop - Vanha maantie 9, 02650 Espoo - Finland</p>
        <p>Tel: +358 46 5740588 | Email: classicshop@live.com </p>
        <p>© 2019 All rights reserved. | Site developed by Danny Boy Designs</p><img src="pics/logo11.jpg" alt="logo" style="width:120px;"></div>
</body>

</html>