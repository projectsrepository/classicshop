<!DOCTYPE html>
<html lang="en">

<!--self-explanatory and easy to understand page. Just a few bootstrap tricks and a few youtube links. Nothing remarcably difficult here.-->

<head>
    <title>Gallery</title>
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
                <li class="nav-item active active-nav"> <a class="nav-link" href="gallery.php">Gallery</a> </li>                
                <li class="nav-item"> <a class="nav-link" href="contact.php">Contact</a> </li>&nbsp&nbsp&nbsp
                <form class="form-inline" action="searchbox.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
            <li class="breadcrumb-item active">Gallery</li>
        </ul>
		
		<h2 class="text-center">Our recomended video findings of the month</h2>
		
        <div class="container-fluid" style="margin:30px 0px">
            <div class="row">
			    <div class="col-lg-4 col-md-4 col-sm-6">
					<div class="mx-auto d-block text-center">
					<h4>This is a clock to show skills</h4><br>
                    <?php include "clock.php"; ?>   <!--it includes the page clock.php. that embeds a clock to the gallery-->
					</div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>J.S.Bach</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_ioc6sdgugo"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Mozart</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Vwub-9dZLFU"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Mozart</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/N4BH3G_R9wY"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <h4>Rossini</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://youtube.com/embed/c7O91GDWGPU"></iframe>
                    </div>
                </div>				
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Beethoven</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fRg0K5rgXog"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Mozart</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/JTc1mDieQI8"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Handel</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i7vJ2UFbeXA"></iframe>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Saint-Saens</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YVpl-RNzdE4"></iframe>
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
