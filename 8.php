<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cinetime</title>
<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="footers/assets/css/Footer-with-map.css">

</head>

<body style="background-image: linear-gradient(to top, #cc208e 0%, #6713d2 100%);"

<?php
      include_once "headers/header.php";
 ?>
<br>
<h2 class="text-center">BOOKING DETAILS</h2>
<br>

<div class="container">
  <div class="row text-center">
    <div class="col-lg-4 col-xs-6 col-sm-3 col-md-5">
      <div class="thumbnail"> <img src="images/26.jpg" alt="Thumbnail Image 1" class="img-responsive">      
      </div>
    </div>
<form action="booking.php" method="post">
    <div class="col-md-7">
       <h3 class="col-md-12">Star Wars: The Last Jedi</h3>
      <p class="col-md-12" id="mDescrip">Luke Skywalker's peaceful and solitary existence gets upended when he encounters Rey, a young woman who shows strong signs of the Force. Her desire to learn the ways of the Jedi forces Luke to make a decision that changes their lives forever. Meanwhile, Kylo Ren and General Hux lead the First Order in an all-out assault against Leia and the Resistance for supremacy of the galaxy.</p>
    </div>
    <div class="col-md-7" align="center" style="padding-top: 40px; padding-bottom: 40px" >
    <h3>Enter Booking Details</h3>

  <div class="input-group input-group-sm" style="width: 70%">
  <input type="text" name="movie" class="form-control" value="Star Wars: The Last Jedi" readonly>
  </div>
  <div class="input-group input-group-sm" style="width: 70%">
  <input type="text" name="name" class="form-control" placeholder="Full Name" required>
  </div>
      <div class="input-group input-group-sm" style="width: 70%">
      <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
  <div class="input-group input-group-sm" style="width: 70%">
  <input type="tel" name="contactno" class="form-control" placeholder="Contact No" onkeypress='return event.charCode >= 48 && event.charCode<=57' title="Enter 10 digit mobile number" required>
  </div>
<div class="input-group input-group-sm" style="width: 70%">
 <input type="number" name="quantity" class="form-control" placeholder="Quantity" min="1" required>
 </div>
<div style="width: 70%;height: 80px" >
 <div style="width: 100%;margin-top: 5px; font-family: Consolas" align="left">
    
   <label> Payment Method </label>
   </div>
   
   <p style="width: 50%" align="left">
     <label>
       <input type="radio" name="paymentmethod" value="paypal" id="payment_0" required>
       paypal</label>
     <br>
     <label>
       <input type="radio" name="paymentmethod" value="credit/debit" id="payment_1" required>
       credit/debit</label>
     <br>
   </p>
   </div>
   <div class="input-group input-group-sm" style="width: 70%">
  <input type="text" name="cardno" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode<=57'  placeholder="Card Number" required>
  </div> 
  <br>
  <!--
  <a href="booking.php" class="btn btn-primary" role="button"><span aria-hidden="true"></span> Book Now</a>
-->
<input type="submit" value="Book Now" class="btn btn-primary" role="button"><span aria-hidden="true"></span> 
</form>

</div>
</div>

<!--Footer-->

<br>
<?php
      include_once "footers/Footer-with-map.html";
 ?>

<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>
<br>

</body>
</html>

 