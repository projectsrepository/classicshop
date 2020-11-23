
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
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
                <li class="nav-item active active-nav"> <a class="nav-link" href="index.php">Home</a> </li>    
                                
                <li class="nav-item"> <a class="nav-link" href="catalogue.php">Catalogue</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="gallery.php">Gallery</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>&nbsp&nbsp&nbsp
                <form class="form-inline" action="searchbox.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search"><br>
                    <button class="btn btn-success" type="submit">Search</button>
                </form>					
            </ul>
        </div>
    </nav>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        
    </ul>
    <div class="container" style="margin-top:50px ">
        <div  class="row">
            <div id ="grad1"  class="col-sm-4">
                <h2 class="text-center">About us</h2> <img src="pics/classical-music.jpeg" class="img-fluid mx-auto d-block " alt="my photo" style="height: 200px;">
                <br>
				<p>Our dedicated and knowledgeable Classical Music Superstore actively stocks more than 44,000 titles.</p>
                <p>Buy CDs, DVDs online from Classicalshop.com, specializing in Classical, jazz, blues & world music at discount prices.</p><br>
                <h2 class="text-center">Our partners</h2>
                <p>We are happy to have developed a prosperous relationship with the following partners.</p>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item"> <a class="nav-link btn btn-outline-primary" href="https://www.rpo.co.uk/" target="_blank">Royal Philharmonic Orchestra</a> </li>
                    <br>
                    <li class="nav-item"> <a class="nav-link btn btn-outline-primary" href="https://oopperabaletti.fi/" target="_blank">Ooppera</a> </li>
                    <br>
                    <li class="nav-item"> <a class="nav-link btn btn-outline-primary" href="https://www.musiikkitalo.fi/" target="_blank">Musiikkitalo</a> </li>
                    <br>
                </ul><br>				
			    <h4 class="text-center">Listen to Live Radio</h4>
            <div><!--this references and it is linked to the radio page made with javascript that pops on click-->
                <a href="javascript:void(0);" NAME="Error Handling"  title="ZeroDivisionError handling" onClick=window.open("radio.html","Ratting","width=350,height=450,left=0,top=100,toolbar=0,status=0,");><img class="img-fluid mx-auto d-block" src="pics/classic.jpg"></a>
				<img src="pics/live_radio.jpg" class="img-fluid mx-auto d-block" alt="live radio" style="height: 20px;">
                <h4 class="text-center">Click icon to listen!</h4> </div><br><br>				
				
				
                <hr class="d-sm-none"> </div>				
            <div class="col-sm-4">
                <h2 class="text-center">New arrivals</h2>  
				
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
	<li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/beethoven.jpg" class="img-fluid mx-auto d-block" alt="beethoven" width="200" height="200">
    </div>
    <div class="carousel-item">
      <img src="pics/mozart1.jpg" class="img-fluid mx-auto d-block" alt="Chicago" width="200" height="200">
    </div>
    <div class="carousel-item">
      <img src="pics/schumann.jpg" class="img-fluid mx-auto d-block" alt="robert" width="200" height="200">
    </div>
	    <div class="carousel-item">
      <img src="pics/bach.jpg" class="img-fluid mx-auto d-block" alt="johann" width="200" height="200">
    </div>
    <div class="carousel-item">
      <img src="pics/camille.jpg" class="img-fluid mx-auto d-block" alt="camille" width="200" height="200">
    </div>  
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br><br>				
                <div><img src="pics/3144413.jpg" class="img-fluid mx-auto d-block" alt="bethooven" style="height: 200px;"></div>
                <p class="text-center">Beethoven: Symphony No. 9 / Stefan Blunier, Beethoven Orchester Bonn</p><br>
                
                <h2 class="text-center">Upcoming releases</h2>                
                <div><img src="pics/5055354413049.jpg" class="img-fluid mx-auto d-block" alt="mozart" style="height: 200px;"></div>
                <p class="text-center">Mozart: Piano Quartet in G minor, K478; Piano Quartet in E flat, K493 / The Nash Ensemble</p><br>				
				                
                <div><img src="pics/3007288.jpg" class="img-fluid mx-auto d-block" alt="bach" style="height: 200px;"></div>
                <p class="text-center">J.S. Bach: Sonatas & Partitas for Solo Violin / Midori, violin</p>

                <br>
                <br>
				
			<hr class="d-sm-none"> </div>
			
			<div  class="col-sm-4 text-center">
			
				<!--embedded Facebook feed-->
				<?php include 'facebook.php';?>
				
				<br><br>				
				<h2 class="text-center">Our sponsors</h2> 	
				<img src="pics/piano_add2.jpg" class="img-fluid mx-auto d-block " alt="piano add" style="height: 200px;"><br><br>	
				<img src="pics/laurea_icon2.png" class="img-fluid mx-auto d-block " alt="laurea add" style="height: 250px;"><br><br>								
				
				
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