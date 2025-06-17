<?php
include 'config/config.php';
$email = $_SESSION['loginSession'];
$sql= mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email' " );
$result = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VILLAGE-ERA</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assest/css/style.css">
</head>

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

			<!-- 	<li class ="navbar-item dropdown">
							<a href="#" class="nav-link top-menu-link dropdown-toggle" data-bs-toggle="dropdown">About us
								<i class="fa fa-address-book" aria-hidden="true"></i></a>
							<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="women.php">Empowering Women</a></li>
    <li><a class="dropdown-item" href="objective.php">Mission-Vision </a></li>
    <li><a class="dropdown-item" href="#">link 3</a></li> 
  </ul></li> -->
				
					 <li class="navbar-item">
  <a href="objective.php" class="nav-link top-menu-link" >About us <i class="fa fa-address-book" aria-hidden="true"></i></a>
 </li>
 <li class="navbar-item">
  <a href="contactus.php" class="nav-link top-menu-link" >Contact us <i class="fa fa-envelope" aria-hidden="true"></i></a>
 </li>





 <li class="navbar-item">
 <a href="page1.html" class="nav-link top-menu-link" > Sell with us <i class="fa fa-address-book" aria-hidden="true"></i></a>
 </li>



						
						<<!-- li class ="navbar-item dropdown">
							<a href="#" class="nav-link top-menu-link dropdown-toggle" data-bs-toggle="dropdown">Categories
								<i class="fa fa-address-book" aria-hidden="true"></i></a>
							<ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Art and Craft</a></li>
    <li><a class="dropdown-item" href="#"> Grocery </a></li>
    <li><a class="dropdown-item" href="#">Clothing Brands</a></li>
  </ul></li> -->
						
							</ul>

							<form class="d-flex">
								<?php 
        if($_SESSION['loginSession'] == '') 
        	?>
								<a href="sign-in.php"><button type="button" class="btn  contact-btn">Sign In
								</div></button></a>
							
       
        
        <!-- <a href="sign-in.php" class="btn contact-btn">Sign-in/ Sign-up</a> -->

      
      </form>
    </div>
  </div>
</nav>
