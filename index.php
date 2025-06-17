<?php
include('include/header.php');
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Village Era</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assest/css/style.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="assest/css/rating.css">
	<link rel="stylesheet" type="text/css" href="assest/css/rating2.css"> -->
	<!-- <script type="text/javascript" src="assest/js/style.js"></script>
</head> -->
<body>
<!-- 
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container">
			<a href="#" class="navbar-brand">
				<img src="assest/images/villageera1.jpg" width="210" height="60">
			</a>
			<button title="button" class="navbar-toggler"
			data-bs-toggle="collapse" data-bs-target=#menu>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">

			<ul class="navbar-nav">
				<li class ="navbar-item">
					<a href="index.php" class="nav-link top-menu-link">Home
						<i class="fa fa-home" aria-hidden="true"></i>
					</a>
				</li>

				<li class ="navbar-item dropdown">
							<a href="#" class="nav-link top-menu-link dropdown-toggle" data-bs-toggle="dropdown">About us
								<i class="fa fa-address-book" aria-hidden="true"></i></a>
							<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="women.php">Empowering Women</a></li>
    <li><a class="dropdown-item" href="objective.php">Mission-Vision </a></li>
   
  </ul></li>
				
					
 <li class="navbar-item">
  <a href="contactus.php" class="nav-link top-menu-link" >Contact us <i class="fa fa-envelope" aria-hidden="true"></i></a>
 </li>


						
						<li class ="navbar-item dropdown">
							<a href="#" class="nav-link top-menu-link dropdown-toggle" data-bs-toggle="dropdown">Categories
								<i class="fa fa-address-book" aria-hidden="true"></i></a>
							<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Art and Craft</a></li>
    <li><a class="dropdown-item" href="#"> Grocery </a></li>
    <li><a class="dropdown-item" href="#">Clothing Brands</a></li>
  </ul></li>
							
							</ul>

							<div class="d-flex">
								<a href="sign-in.php"><button type="button" class="btn  contact-btn">Sign In
								</div></button></a>
							</div></div>
						</nav> -->

						

						<div id="demo" class="carousel slide "  data-bs-ride="carousel">

							
							<!-- The slideshow/carousel -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="assest/images/vegetable.png"   class="d-block w-100  slider-height">
									<!-- <div class="carousel-caption">
										<span><h1 class="caption">Village Era</h1>
											<br>
											<h4 class="caption2" >Bringing the village to your city</h4></span>
										</div> -->
									</div>


									<!-- Indicators/dots -->
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
								<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
								<!-- <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button> -->

							</div>


									<div class="carousel-item">
										<img src="assest/images/dairy.png"  class="d-block w-100 slider-height">
										<!-- <div class="carousel-caption">
											<span><h1 class="caption">Experience the authenticity of village life</h1>
												<br>
												<h4 class="caption2" > Delivered to your doorstep</h4></span>
											</div> -->
										</div>
										<!-- <div class="carousel-item">
											<img src="assest/images/pots.png"  class="d-block w-100 slider-height"></div> -->
											<!-- <div class="carousel-caption">
												<span><h1 class="caption">Authentic Village Products</h1>
													<br>
													<h4 class="caption2" >Crafted with love and care</h4></span>
												</div> -->
											


											<!-- Left and right controls/icons -->
											<button class="carousel-control-prev " type="button" data-bs-target="#demo "  data-bs-slide="prev">
												<span class="carousel-control-prev-icon"></span>
											</button>
											<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
												<span class="carousel-control-next-icon"></span>
											</button>
										</div>

										<!-- Cards -->

										<div class="container-fluid">
											<div class="row">
												<h2 class="heading bg-light">Best from Art and Craft</h2>
												<div class="col-3">
													<div class="card">
														<img src="assest/images/11.avif" style="height:200px; object-fit: cover;" alt="11">
														<div class="card-body">
															<h5 class="card-title">Crafted Plates and Bowls</h5>
															<p class="card-text" style="font-weight:bolder ;"> Starting from Rs 199/-</p>
															<a href="products.php" >See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>




												<div class="col-3">
													<div class="card">
														<img src="assest/images/17.jpg" style="height:200px; object-fit: cover;">
														<div class="card-body">
															<h5 class="card-title">Handmade Mat</h5>
															<p class="card-text" style="font-weight:bolder ;"> Starting from Rs 525/-</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>



												<div class="col-3">
													<div class="card">
														<img src="assest/images/15.jpg" style="height:200px; object-fit: cover;" alt="11">
														<div class="card-body">
															<h5 class="card-title">Handmade containers</h5>
															<p class="card-text" style="font-weight:bolder ;"> Starting from Rs 229/-</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>


												<div class="col-3">
													<div class="card">
														<img src="assest/images/16.jpg" style="height:200px; object-fit: cover;" alt="11">
														<div class="card-body">
															<h5 class="card-title">Mini-Ganesha</h5>
															<p class="card-text" style="font-weight:bolder ;"> Starting from Rs 359/-</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>
											</div>
										</div>


										<!-- Second row of cards -->

										<div class="container-fluid">
											<div class="row">
												<h2 class="heading bg-light">Healthy Grocery Items</h2>
												<div class="col-3">
													<div class="card">
														<img src="assest/images/sonarice.jpg" style="height:200px; object-fit: cover;" alt="11">
														<div class="card-body">
															<h5 class="card-title">Sona rice</h5>
															<p class="card-text" style="font-weight:bolder ;">  Rs 79/- per kg</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>




												<div class="col-3">
													<div class="card">
														<img src="assest/images/dryfruits.jpg" style="height:200px; object-fit: cover;">
														<div class="card-body">
															<h5 class="card-title">Almonds</h5>
															<p class="card-text" style="font-weight:bolder ;"> 
															Now at 549/- per kg</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>



												<div class="col-3">
													<div class="card">
														<img src="assest/images/jaggerycubes.jpg" style="height:200px; object-fit: cover;" alt="11">
														<div class="card-body">
															<h5 class="card-title">Jaggery Cubes</h5>
															<p class="card-text" style="font-weight:bolder ;"> Starting from Rs 250/-</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>


												<div class="col-3">
													<div class="card">
														<img src="assest/images/pickle.jpg" style="height:200px; object-fit: cover;" alt="11">
														<div class="card-body">
															<h5 class="card-title">Homemeade Pickles</h5>
															<p class="card-text" style="font-weight:bolder ;">  Rs 155/- per kg</p>
															<a href="products.php">See more</a>
															<br>
															<a href="payment.php"><button type="button" class="btn  button1">Buy now</button></a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<a href="rating2.php"><center><button type="submit" style="background:black; color: #F4BB44; margin-bottom: 50px; margin-top: 50px; width:60%; height: 40px; font-size: 28px; ">Click to see Customers reviews</button></a><center>
										<!-- footer -->


<!-- 
			<footer class="footer bg-light">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-3"> <div class="footer-content">
							<img src="assest/images/villageera1.jpg"width="200" style="margin-top: 5px;">
							<div class="footer-description text-black">
								<h5>Connecting  Village to Cities</h5>
								<br>
								<p class="address">
									<span class="icon">

										<i class="fa fa-address-card" aria-hidden="true" ></i>


									</span> Headquarters,Jaipur,India</p>

									<p class="address">
										<span class="icon">

											<i class="fa fa-envelope" aria-hidden="true"></i>


										</span>villageera25@gmail.com</p>

										<p class="address">
											<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i>


											</span>+91 8208405197</p>

											<span class="icon">

												<p>Feel Free To Follow Us On Our Social Media Handles.</p>

												<i class="fa fa-facebook" aria-hidden="true"></i>

												<i class="fa fa-instagram" aria-hidden="true"></i>
												<i class="fa fa-twitter" aria-hidden="true"></i>

											</span>
										</div>
									</div>
								</div>



								<div class="col-md-3"> 
									<div class="footer-content">
										<h4 class="heading">Company</h4><br>
										<ul>
											<li><a href="objective.php" class="info" >Our journey</a></li>
											<li><a href="#" class="info">Careers</a></li>
											<li><a href="#" class="info">Our staff</a></li>
											<li><a href="contactus.php" class="info">Contact us</a></li>
											<li><a href="#" class="info">Updates</a></li>
											<li><a href="#" class="info">Blogs</a></li>

										</ul>
									</div>
								</div>



								<div class="col-md-3"> 
									<div class="footer-content">
										<h4 class="heading">Work With Us</h4><br>
										<ul>
											<li><a href="page1.php" class="info" >Sell at Village ERA</a></li>
											<li><a href="#" class="info">Protect and Build Your Brand</a></li>
											<li><a href="#" class="info">Advetise Your Products</a></li>
											

										</ul>
									</div>
								</div>
								
								<div class="col-md-3"> <div class="footer-content">
									<h4 class="heading">Help</h4><br>

									<ul>
										<li><a href="# " class="info" >Shipping</a></li>
										<li><a href="payment.php" class="info">Payments</a></li>
										<li><a href="#" class="info">Cancellation and returns</a></li>
										<li><a href="#" class="info">Privacy</a></li>
									


									</ul>
								</div></div></div></div>
							


							
							</footer>



									</body>
									</html> -->
									<?php
include('include/footer.php');
?>