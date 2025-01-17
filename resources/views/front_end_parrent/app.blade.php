<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Path Finders</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="./assets/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./assets/frontend/css/animate.css">
    
    <link rel="stylesheet" href="./assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="./assets/frontend/css/aos.css">

    <link rel="stylesheet" href="./assets/frontend/css/ionicons.min.css">
    
    <link rel="stylesheet" href="./assets/frontend/css/flaticon.css">
    <link rel="stylesheet" href="./assets/frontend/css/icomoon.css">
    <link rel="stylesheet" href="./assets/frontend/css/style.css">
  </head>
  <body>
	  <div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
			    			<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
						    <span class="text">81/52, old bus stand, nittambuwa, Siri Lanka</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">support@masterpf.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">0 76 263 8411</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="{{ url('/') }}">Path Finders</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="{{ url('/') }}" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Teacher</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

@yield('body')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">81/52, old bus stand, nittambuwa, Siri Lanka</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0 76 263 8411</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@masterpf.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="{{ url('/') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="{{ url('/') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by: <a href="https://facebook.com/roboCoders" target="_blank">Robo Coders</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="./assets/frontend/js/jquery.min.js"></script>
  <script src="./assets/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="./assets/frontend/js/popper.min.js"></script>
  <script src="./assets/frontend/js/bootstrap.min.js"></script>
  <script src="./assets/frontend/js/jquery.easing.1.3.js"></script>
  <script src="./assets/frontend/js/jquery.waypoints.min.js"></script>
  <script src="./assets/frontend/js/jquery.stellar.min.js"></script>
  <script src="./assets/frontend/js/owl.carousel.min.js"></script>
  <script src="./assets/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="./assets/frontend/js/aos.js"></script>
  <script src="./assets/frontend/js/jquery.animateNumber.min.js"></script>
  <script src="./assets/frontend/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="./assets/frontend/js/google-map.js"></script>
  <script src="./assets/frontend/js/main.js"></script>
    
  </body>
</html>