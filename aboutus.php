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
    <link rel="stylesheet" href="assets/css/Footer-with-map.css">

</head>
<body style="background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%)";>


<?php
      include_once "headers/header.php";
 ?>
 
<br>
<h2 class="text-center">Services</h2>


<div class="container">
 


  
<h3 style="color:#1F3152"><b>Our Mission</b></h3>
<p style="color:#1F3152"> “The epitome of excellence in entertainment while being the beacon of innovation, hope and change with a sustainable value to all our stakeholders” </p><br>
  
<h1 style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'; color: #202C41"><center>Welcome to CINETIME</center></h1><br>
<center><img src="https://image.freepik.com/free-vector/vintage-cinema-tickets-set_23-2147543251.jpg" alt="" width="747" height="302" class="img-rounded"/></center><br><br>
<p style="color:#1F3152;font-size:20px">CineTime Cinema is into  Theaters Private Limited and recommendations for our users. It has long been a one of the top end movie entertainment centers , it also provides the users with basic recommendations of what movies to watch based on their interest!
CineTime is well equipped with the latest movie technology can accommodate 150 GOLD CLASS, 497ODC and 8 Box seats that can seat two per Box. 
CineTime is  currently running screen movies in four major languages, namely English and Hindi Movies and the cinema currently screens four movies per day.</p>
<br>
<br>
<p style="color:#1F3152; font-size:20px">In order to uplift Indian Cinema it is vital to match up to the International standards and technology plays a key role in this venture. International cinema has reached its peak in the highest of technological standards, and the same experience should be enjoyed by indian cinema to reach the much sought after international standards. One such initiative and by far one of the biggest ventures of CineTime"</p>
<p style="color:#1F3152; font-size:20px">International cinemas use the 3D Technology which is the latest revolution to enter the cinema industry in order to create a much more entertaining and satisfying cinematographic experience for viewers and to provide the indian viewers the same experience, the CineTime will open its doors to the indian public soon after the pandemic.When it  comes to service , it is equipped completely  with all new 3D Technology containing 4K Projectors. The present day cinema experience comprises of 2K projectors, hence the 4k projectors will indeed be a refreshing experience as the new technology will enable extremely clear views and the 3D technology is four times more effective than the 2D Technology and the viewer is guaranteed to receive an extremely satisfying and an electrifying cinema experience.
</p><br><br>

<br><br>
<div class="col-md-12"><h2 style="color:#0C304E;; font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';">Send us your suggestions...</h2>
          

          <form action="suggestions.php" method="post">
            <div class="row form-group">
              <div class="col-md-6">
                <label for="fname">First Name</label><br>
                <input type="text" name="firstname" class="form-control" placeholder="Your firstname" required>
              </div>
              <div class="col-md-6">
                <label for="lname">Last Name</label><br>
                <input type="text" name="lastname" class="form-control" placeholder="Your lastname" required>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="email">Email</label><br>
                <input type="email" name="email" class="form-control" required>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="subject">Contact Number</label><br>
                <input type="tel" name="contactno" class="form-control" placeholder="Enter your contact number" required>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="message">Message</label><br>
                <textarea name="suggestion" cols="30" rows="10" class="form-control" placeholder="Write us your suggestions..." required></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary">
            </div>

          </form>
  </div> 
        <div id="cntct"; align="center" > <h3 style="color:#233B64; font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';">For further info - Contact Us</h3>
          <div class="gtco-contact-info">
           
          </div>
          </div>

<!--Footer-->
<br>
<br>
<?php
      include_once "footers/Footer-with-map.html";
?>
</div>

<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<br>
<br>

</body>
</html>