<?php
include '../config/config.php';


// signup here

if(isset($_REQUEST['signup']) == 'signup') {

	$name = $_REQUEST['name'];
	$contact = $_REQUEST['contact'];
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];
	$cpass = $_REQUEST['cpass'];

	if(empty($name) && empty($contact) && empty($email) && empty($pass)) {
		$_SESSION['error'] = "Please fill the details.";
		header("location:".$siteUrl."/sign-up.php");
	}else {
		if($pass == $cpass) {
				$password = md5($pass);

				$sql = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email'");
				if(mysqli_num_rows($sql)>0) {
					$_SESSION['error'] = "Your registration already exists!Please Sign-in";
					header("location:".$siteUrl."/sign-up.php");

				}else {
					
				mysqli_query($conn, "INSERT INTO user_registration(name, contact, email, pass) VALUES('$name', '$contact', '$email', '$password')");
				$_SESSION['error'] = "Your registration successfully";
				header("location:".$siteUrl."/sign-in.php");
				}

		}else {
		$_SESSION['error'] = "Password & Confirm password did not match!";
		header("location:".$siteUrl."/sign-up.php");
		}
	}

}


// Sign In here 

if(isset($_REQUEST['signin']) == 'signin') {
	$email = $_REQUEST['email'];
	$pass = $_REQUEST['pass'];

	if(empty($email) && empty($pass)) {
		$_SESSION['error'] = "Please fill the blank field";
		header("location:".$siteUrl."/sign-in.php");
	}else {

		$password = md5($pass);
		$sql = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email' AND pass ='$password'");

		if(mysqli_num_rows($sql)>0) {
			$result = mysqli_fetch_array($sql);

			$_SESSION['loginSession'] = $result['email'];

			header("location:".$siteUrl."/sign-in.php");
		}else{
		$_SESSION['error'] = "Your email & password is invalid!Please enter valid details.";
		header("location:".$siteUrl."/sign-in.php");
		}
	}

}


// Signout

if(isset($_REQUEST['signout']) =='signout') {
	session_destroy();
	session_unset();
	header("location:".$siteUrl."/index.php");
}