<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--w3.css framework -->
	<link rel="stylesheet" href="css/w3.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font awesome  --> 
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css">
       <title>OSMS</title>
       <style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid black;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: left;
}
</style>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</head>
<body onload="myFunction()" style="margin:0;">
    <div id="loader"></div>
    <div id="myDiv">
    <div class="w3-container">   
    <!-- start navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    
	<a href="index.php" class="navbar-brand"><img src="images/logo2.png" class="w3-circle w3-spin" style="width:10%; height:9%;"> </img></a>
	<span class="navbar-text"> Customer's Happiness is outr Aim </span>
    <button type="button" class="navbar-toggler"
    data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
    </button>    
    <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php"
        class="nav-link">Home</a></li>

        <li class="nav-item"><a href="#Services"
        class="nav-link">Services</a></li>

        <li class="nav-item"><a href="#register" 
        class="nav-link">Registration</a></li>

        <li class="nav-item"><a href="Requester/RequesterLogin.php"
        class="nav-link">Login</a></li>

        <li class="nav-item"><a href="#Contact"
        class="nav-link">Contact</a></li>

	</ul>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </ul>        
    </div>    
    </nav> 
	</div>
    <!-- end navigation -->

    <!-- start header jumbotron -->
    <video id="videoBG" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
    </video>
	<div class="w3-container">
    <header class="jumbotron back-image w3-animate-right" style="background-image:url(images/call-center.png);">
	<div class="myclass mainHeading">
		<div class="w3-container">	
			<h1 class="w3-left w3-animate-bottom text-uppercase text-danger font-weight-bold">Welcome to OSMS </h1>
		</div>	
        <p class="font-italic class">Customer's Happiness is our Aim</p>
        <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
        <a href="#register" class="btn btn-danger mr-4">SignUp</a>
    </div>
	</div>
    </header>
    <!-- jumbotron end -->

     <!--  -->
     <div class="container" id="Services">
        <div class="jumbotron">
		<div class="w3-container">	
			<h3 class="text-center w3-animate-bottom">OSMS SERVICE</h3>
        </div>
		<p style="text-align:justify;"> 
        OSMS Services is India's leading chain of multi-brand
        Electronics and Electrical service workshops offering wide
        array of services. We focus on enhancing your uses
        experience by offering world-class Electronic Appliances 
        maintenance services. Our sole mission is "To provide
        Elecetronic Appliances care services to keep the devices fit
        and healthy and customers happy and smiling."
        
        With well-equipped Electronics Appliances service centres
        and fully trained mechanics, we provide quality sevices
        with excellent packages that are designed to offer you great savings.
        
        Our state-of-art workshops are conveiently located in main cities across the country. Now 
        You can book your service online by doing Registration.
        
        </p>
    </div>
    <div class="container text-center">
        <div class="w3-container">	
			<h2>Our Services</h2>
			<div class="row mt-4 w3-animate-zoom">
				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
					<h4>Electronic Appliances</h4>
				</div>
					<div class="col-sm-4">    
					<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
					<h4>Preventive Maintenance</h4>
				</div> 
				<div class="col-sm-4">
					 <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
					<h4>Fault Repair</h4>
				</div>    
			</div>
		</div>	
    </div>
    <!-- start registration form -->
    <p id="register"></p>
    <?php include('UserRegistration.php')?>
    <!-- end registration form -->
    <!-- start happy -->
    <div class="jumbotron bg-danger w3-animate-bottom">
        <div class="container">
            <h2 class="text-center text-white">Happy Customers</h2>
            <div class="row">
                <!-- start of first column -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="images/1.jfif" class="img-fluid"
                            style="border-radius:100px;" alt="act1">
                            <h4 class="card-title">Rahul Kumar</h4>
                            <p class="card-text">hey this website gives best facilities to our needs.
                                so i always refered as this website become more funtastic.
                            </p>
                        </div>
                    </div>    
                </div>
                <!-- ENd of first column -->
                <!-- start of second column -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="images/2.jfif" class="img-fluid"
                            style="border-radius:100px;" alt="act1">
                            <h4 class="card-title">Sonam Gupta</h4>
                            <p class="card-text">hey this website gives best facilities to our needs.
                                so i always refered as this website become more funtastic.
                            </p>
                        </div>
                    </div>    
                </div>
                <!-- ENd of second column -->
                <!-- start of third column -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="images/3.jfif" class="img-fluid"
                            style="border-radius:100px;" alt="act1">
                            <h4 class="card-title">Awale Sunil</h4>
                            <p class="card-text">hey this website gives best facilities to our needs.
                                so i always refered as this website become more funtastic.
                            </p>
                        </div>
                    </div>    
                </div>
                <!-- ENd of third column -->
                <!-- start of forth column -->
                <div class="col-lg-3 col-sm-6">
                    <div class="card shadow-lg mb-2">
                        <div class="card-body">
                            <img src="images/4.jfif" class="img-fluid"
                            style="border-radius:100px;" alt="act1">
                            <h4 class="card-title">Virat sinha</h4>
                            <p class="card-text">hey this website gives best facilities to our needs.
                                so i always refered as this website become more funtastic.
                            </p>
                        </div>
                    </div>    
                </div>
                <!-- ENd of forth column -->
            </div> 
        </div>       
    </div>

    <!-- start of contact us -->
    <div class="container w3-animate-bottom" id="Contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <?php include('contactform.php')?> 
            <div class="col-md-4 text-center">
                <strong>Headquarter:</strong><br>
                OSMS pvt Ltd,<br>
                Ashok Nagar, Hottal<br>
                Degloor - 431717 </br>                        phone: +919370136567<br>
                <a href="#" target="_blank">www.osms.com</a><br>
                <br><br>
                <strong>Headquarter:</strong><br>
                OSMS pvt Ltd,<br>
                Ashok Nagar, Nanded<br>
                Nanded - 431515 </br>
                phone: +917218644087<br>
                <a href="#" target="_blank">www.osms.com</a><br>
            </div>    
        </div>
    </div>
    <!-- end of contact us -->

    <!-- start footer -->
    <footer class="container-fluid bg-dark mt-5 text-white w3-animate-bottom">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-6">
                    <span class="pr-2">Follow Us:</span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i 
                    class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i 
                    class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i 
                    class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i 
                    class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i 
                    class="fas fa-rss"></i></a>
                </div>
				
				
                <div class="col-md-6 text-right">
							
					<div id="google_translate_element"></div>
                    <small>Designed by AwaleBrother's &copy; 2020-2021</small>
                    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                </div>
            </div>    
        </div>
    
    </footer>

    <!--bootstrap javascript  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js">Login</script>
    <script src="js/all.min.js">SignUp</script>
</div>
</body>
</html> 