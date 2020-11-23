
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="shortcut icon" href="/classicshop/pics/icon2.png" />
	<link rel="stylesheet" href="/classicshop/css/mystyle.css">
    <style>

        .col-sm-6 {
            background-color: white;
			font-family:  sans-serif, helvetica, verdana;
			
		}
		h2 {
			font-family: Arial, Georgia;
			font-style: italic;			
		}
		.checked {
		  color: orange;
		}
		
		#grad1 {
		
		background-color: white; /* For browsers that do not support gradients */
		background-image: linear-gradient(to right, white, blue);
		}
		
    </style>
</head>

<body>
    <div  class="jumbotron jumbotron-fluid bg-cover text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.7) 0%,rgba(0,0,0,0.6) 100%), url(https://www.iep.utm.edu/wp-content/media/Aesthetics-of-Classical-Music-Image.jpg)">
        <div class="container">
            <h1 class="display-5 fontclass"><i><span class= "text-danger">CLASSIC</span>SHOP</i></h1>            
            <hr class="my-1">
            <p>The classical shop you deserve.</p>
		</div> 
    </div>
    <nav  class="navbar navbar-expand-lg bg-white navbar-light sticky-top">
        <a class="navbar-brand" href="/classicshop/index.php"><img src="/classicshop/pics/icon2.png" alt="logo" style="width:60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse nav-item:hover" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto  ">
                <li class="nav-item "> <a class="nav-link" href="/classicshop/index.php">Home</a> </li>                                
                <li class="nav-item"> <a class="nav-link" href="/classicshop/catalogue.php">Catalogue</a> </li>                
                <li class="nav-item "> <a class="nav-link" href="/classicshop/gallery.php">Gallery</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="/classicshop/contact.php">Contact</a> </li>&nbsp&nbsp&nbsp
                <form class="form-inline" action="/classicshop/searchbox.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
    <ul  class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">Albums</li>
        
    </ul>
    <div  class="container" style="margin-top:50px ">
        <div class="row">
            <div  class="col-sm-6">
                <h2 class="text-center"></h2><img src="pics2/beethoven_symphonies2.jpg" class="img-fluid mx-auto d-block" alt=" pic" style="height: 350px;">
                <br>

						
				<div class="text-center ">
					<form method="post" action="/classicshop/searchbox.php">				
						<input type="submit" class="btn btn-warning fa fa-shopping-cart" name="submit" value="Add to cart">&nbsp&nbsp&nbsp
					</form>
				</div>
				<div class= "text-center" >					
					<img src="/classicshop/pics/paypal.jpg" class="img-fluid " alt="paypal pic" style="height: 50px;">					
				</div><br>


				
				
            <hr class="d-sm-none">
			</div>	
				
				
				
            <div class="col-sm-6">
                <h2 class="text-left">Beethoven: The Symphonies</h2><br>
				<p class="text-primary">Ludvig van Beethoven (Composer), Riccardo Chailly (Conductor),Gewandhausorchester (Orchestra)  Format: Audio CD</p><br>
				
                <p>Buy a CD or Vinyl record and get 90 days free Classicshop Music Unlimited
				With the purchase of a CD or Vinyl record dispatched from and sold by Classicshop, you get 90 days free
				access to the Classicshop Music Unlimited Individual plan.<br> After your purchase, you will receive an email
				with further information. Terms and Conditions apply.</p>
				<img src="/classicshop/pics/smile.jpg" class="img-fluid " alt="smile pic" style="height: 50px;"><br>				
                
                <p>Gewandhausorchester:<br>
				   Riccardo Chailly<br>
				   Original Release Date : 2011<br>
				   <span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span><br>
				   4.9 out of 5 stars<br>
				   Audio CD<br>
                   €22.00<br>
                   Only 5 left in stock.</p>
			   
				<img src="/classicshop/pics/CD.png" class="img-fluid " alt="cd pic" style="height: 50px;">&nbsp&nbsp&nbsp
				<img src="/classicshop/pics/DVD.png" class="img-fluid " alt="dvd pic" style="height: 50px;"><br>
                <br>
				
				
				
				
				
				
				
				
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
        <p>© 2019 All rights reserved. | Site developed by Danny Boy Designs</p><img src="/classicshop/pics/logo11.jpg" alt="logo" style="width:120px;"></div>
</body>

</html>
