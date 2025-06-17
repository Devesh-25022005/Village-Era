<?php 
include('include/header.php');
if($_SESSION['loginSession'] !== '' && !empty($_SESSION['loginSession'])) {
?>
<div class="container mt-3">
  <h2>My Profile</h2>
  <form method="post" action="controllor/controllor.php">
  <div class="card" style="width:400px">
    <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo ucwords($result['name']);?></h4>
      <p class="card-text"><?php echo $result['email'];?></p>
      <p class="card-text"><?php echo $result['contact'];?></p>
     	<button class="btn btn-md" style="background: #F4BB44;"type="submit" name="signout">Sign Out</button>
    </div>
  </div>
  </form>
  <br>
</div>

<?php
}else {
	header("location:".$siteUrl."/index.php");
}
include('include/footer.php');
?>