<?php
include('include/header.php');
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background: lightgrey;





/*.container {
  
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;

}*/


.row2{
  display: flex;
  justify-content: center;

}

.left{
  flex-basis: 60%;
  padding: 40px 60px;
  background-color: #f2f2f2;
  
}

.right{
  flex-basis: 40%;
  padding: 40px;
  background: #F4BB44;


}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #F4BB44;
  color: black;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  font-size: 17px;
}

.btn:hover {
  background-color: black;
  color: white;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

}

</style>
</head>
<body>

<h2 style="text-align: center;" >PAYMENT PAGE</h2>
<p style="text-align: center; font-weight: bolder;">Enter the details carefully</p>
<div class="row2">
  <div >
    <div class="container">
      <form>
      
        <div class="row2">
          <div class="right">
            <h3>Address Details</h3>
            <label type="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Enter full name">
            <label type="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Enter E-mail">
            <label type="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter your Address">
            
            <div class="row2">
              <div>
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="State name">
              </div>
              <div class="col-50">
                <label for="pincode">Pin-code</label>
                <input type="text" id="pincode" name="pincode" placeholder="######">
              </div>
            </div>
          </div>

          <div class="left">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
             
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
             
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="####-####-####">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Month">
            <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="20**">
                 <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="*">
                 </div>
              <div>
               
              </div>
            </div>
          </div>
            <div class="row2">
              <div >
                
             
          
        </div>
        <button type="submit" style="background-color: #F4BB44; width: 70%; height:40px;margin-top: 15px;
        margin-bottom: 15px;">Make Payment</button>
      </form>
    </div>
  </div>
</div>

</body>
</html><?php
include('include/footer.php');
?>