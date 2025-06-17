<?php 
include('include/header.php');
?>
<div class="container">
	<form method="post" action="controllor/controllor.php" enctype="multipart-form-data">
	<div class="row bg-light p-5">
		<div class="col-md-6 offset-3">
			<h3 class="signin-title">Sign Up Here</h3>

			<div class="form-group mb-3">
				<label>Full Name <span class="required">*</span></label>
				<input type="text" name="name" class="form-control" placeholder="Name">
			</div>

			<div class="form-group mb-3">
				<label>Contact Number <span class="required">*</span></label>
				<input type="text" name="contact" class="form-control" placeholder="Contact Number">
			</div>

			<div class="form-group mb-3">
				<label>Email <span class="required">*</span></label>
				<input type="text" name="email" class="form-control" placeholder="Enter email id">
			</div>

			<div class="form-group mb-3">
				<label>Password <span class="required">*</span></label>
				<input type="password" name="pass" class="form-control" placeholder="*********">
			</div>

			<div class="form-group mb-3">
				<label>Confirm Password <span class="required">*</span></label>
				<input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
			</div>

			<div class="form-group mb-5">
				<button class="btn  btn-md w-100"  style="background: #F4BB44;"type="submit" name="signup">Sign-up</button>

				<?php 
					if($_SESSION['error'] !== ''){
						echo $_SESSION['error'];		
					}
					$_SESSION['error'] ='';
				?>
			</div>
			<a href="sign-in.php" class="btn " style="background: black; color: #F4BB44">Sign-in here</a>
		</div>
	</div>
</form>
</div>

<?php 
include('include/footer.php');
?>