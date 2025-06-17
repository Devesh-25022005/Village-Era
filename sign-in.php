<?php 
include('include/header.php');
if($_SESSION['loginSession'] == '' && empty($_SESSION['loginSession'])) {
?>
<div class="container">
	<form method="post" action="controllor/controllor.php">
	<div class="row bg-light p-5">
		<div class="col-md-6 offset-3">
			<h3 class="signin-title">Sign-in</h3>
			<div class="form-group mb-3">
				<label>Email <span class="required">*</span></label>
				<input type="text" name="email" class="form-control" placeholder="Enter email id">
			</div>

			<div class="form-group mb-3">
				<label>Password <span class="required">*</span></label>
				<input type="password" name="pass" class="form-control" placeholder="*********">
			</div>

			<div class="form-group mb-5">
				<button class="btn btn-md w-100" style="background: #F4BB44;" type="submit" name="signin">Sign In</button>

				<?php 
					if($_SESSION['error'] !== ''){
						echo $_SESSION['error'];		
					}
					$_SESSION['error'] ='';
				?>
			</div>
			<a href="sign-up.php" class="btn " style="background: black; color: #F4BB44;">Sign-up here</a>
		</div>
	</div>
	</form>
</div>

<?php 
}else {
	header("location:".$siteUrl."/profile.php");
}
include('include/footer.php');
?>