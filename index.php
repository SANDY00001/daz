<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>DanZoon</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Miltonian&family=Miltonian+Tattoo&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Macondo&family=Miltonian&family=Miltonian+Tattoo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Ewert&family=Londrina+Shadow&family=Macondo&family=Miltonian&family=Miltonian+Tattoo&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2fad37f844.js" crossorigin="anonymous"></script>

</head>

<body>
  <section id="title">

    <div class="container-fluid">


      <nav class="navbar navbar-expand-lg navbar-dark ">



        <img class="logo" src="images/i.png" alt="">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d dropout collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://api.whatsapp.com/send?phone=919944941083" target="_blank">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Price</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cta">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=919566924901');" href="https://api.whatsapp.com/send?phone=919566924901" target="_blank">Help</a>
            </li>

          </ul>
        </div>
      </nav>
      <div class="row">


        <div class="col-lg-12 head-one ">
          <div>
			<h4 style="color:grey;">Hello, <?php echo $user_data['user_name']; ?></h4>
            <h1>Stop waiting😊<br>Feel free to order your fuel at <label for="">DanZoon</label>...</h1>
            <br>
            <a class="order-link" onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=919566924901');" href="https://api.whatsapp.com/send?phone=919566924901" target="_blank">  <button type="button" class="btn btn-lg btn-success Order-btn"><i class="fab fa-whatsapp"></i> Order Now</button></a>
          </div>
        </div>

      </div>
    </div>
  </section>




    </section>
    <section id="pricing">

      <h2>Only for Emergency purpose</h2>
      <p class="timing">Service 7 : 00 A.M to 9 : 00 P.M </p>



      <div class="row">

        <div class="pricing-column col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header">
              <h3>Petrol</h3>
            </div>
            <div class="card-body">
              <h2 class="counter">₹100</h2>

              <p class="para">Coimbatore</p>
              <p class="para">At Ghandhipuram</p>

            <a href="https://api.whatsapp.com/send?phone=919566924901" target="_blank"><button type="button" class="w-100 bf btn btn-lg btn-outline-dark">Order</button></a>

            </div>
          </div>
        </div>
        <div class="pricing-column col-lg-6 col-md-12">
          <div class="card">
            <div class="card-header">
              <h3>Diesel</h3>
            </div>
            <div class="card-body">
              <h2 class="counter">₹95</h2>
              <p class="para">Coimbatore</p>
              <p class="para">At Ghandhipuram</p>
            <a href="https://api.whatsapp.com/send?phone=919566924901" target="_blank">  <button type="button" class="w-100 bf btn btn-lg btn-outline-dark">Order</button></a>
            </div>
          </div>
        </div>
      </div>



    </section>

    <section id="features">

      <div class="work">
        <h2>How it works?</h2><br>
        <p>For fuel delivery Plastic Bottle is not safe for carring a petrol. when petrol gets legage from plastic Bottle it becomes a dangerous situation.Therefore we find a solution for fuel delivery using Aluminium Bottles to carry a petrol. Aluminium tamks only used to carry a petrol to petrol bunks. we serve only petrol in the Aluminium Bottles we did'nt serve besides Aluminum Bottles.If You need that Aluminum Bottle along with Petrol you must pay for that Aluminum Bottels. After Refuelling your petrol tank our Delivey men carry that Aluminum Bottle to our Company. If you have been thinking of using petrol for a while then the you need a plastic bottle or anything else to store that petrol. if you dont have plastic we provide it for cost. </p>
      </div>
    </section>


  <section id="testimonials">
    <div id="testimonial-Controls" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <ul>
            <h2>Details</h2>
      <li>
          <p class="testi-text">Our aim is no need to wait at petrol bunk as a long queue to fuel their bike.Here after no need to pull your bike at petrol bunk when the petrol was dried in your tank.</p>

      </li>
  <li><p class="testi-text">Order your fuel how much you needed through our DanZoon website within 20-30 mints the petrol will be delivered at your location</p></li>
  </ul>
  </div>
        <div class="carousel-item">
          <ul>
            <h2>About us</h2>
              <li>
                  <p class="testi-text">DanZoon is an online platform to provide doorstep delivery of fuel in a safe, reliable, and efficient way.</p>

              </li>
          <li><p class="testi-text">You can place your order online and get fuel delivered at your location in specialized Refuellers (Aluminium Bottles)</p></li>
          <li><p class="testi-text"class="testi-text">
              We are making refueling Safe and Secure.
          </p></li>
          </ul>
        </div>

        <div class="carousel-item">
          <ul>
            <h2>Safety</h2>
              <li>
                  <p class="testi-text">We provide petrol with safe and secure.We don't comparamise about safety.</p>

              </li>
          <li><p class="testi-text">We provide specially designed bag for delivery to carry a petrol and also provide Fire-Extingusier.</p></li>
          <li><p class="testi-text">
              We are making refueling Safe and Secure.We Delivey a petrol in Aluminum Bottle with safe and secure.
          </p></li>
          </ul>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonial-Controls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonial-Controls" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>



  </section>



  <section id="cta">

    <h3 class="cta-heading">For Support <label for="">Click Here</label></h3>
  <a class="dummylink" onclick="return gtag_report_conversion('https://api.whatsapp.com/send?phone=919566924901');" href="https://api.whatsapp.com/send?phone=919566924901" target="_blank"><div class="homesupportbtn"> Whatsapp<br/>Support</div></a>

</section>
<section id="features">
  <div class="row">


    <div class="feature-box col-lg-4 ">
      <i class=" icon fas fa-check-circle fa-4x"></i>
      <br><br>
      <h3>Easy to use</h3>

    </div>
    <div class="feature-box col-lg-4 ">
      <i class="icon fas fa-bullseye fa-4x"></i>
      <br><br>
      <h3>Elite Clientele</h3>

    </div>
    <div class="feature-box col-lg-4 ">
      <i class=" icon fas fa-heart fa-4x"></i>
      <br><br>
      <h3>Guaranteed to work</h3>

    </div>
  </div>
</section>

<footer>
  <div class="content">
    <div class="left box">
      <div class="upper">
        <div class="topic">About us</div>
        <p>We are providing petrol in online delivery only of Emergency.</p>
      </div>
      <div class="lower">
        <div class="topic">Contact us</div>
        <div class="phone">
          <a href="tel:+919566-924-901"><i class="fas fa-phone-volume"></i>+919566-924-901</a>
        </div>
        <div class="email">
          <a href="mailto:kanisant0595@gmail.com"><i class="fas fa-envelope"></i>kanisant0595@gmail.com</a>
        </div>
        <div class="">
          <a href="https://www.twitter.com/" target="_blank"     <i class="ic fab fa-twitter"></i></a>
          <a href="https://www.facebook.com/" target="_blank"  <i class="ic fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/" target="_blank"     <i class="ic fab fa-instagram"></i></a>
          <a href="https://www.google.com/" target="_blank"     <i class="ic fas fa-envelope"></i></a>
            </div>
      </div>
    </div>
    <div class="middle box">
      <div class="topic">Our Services</div>
      <div><a href="#">Petrol Delivery</a></div>
      <div><a href="#">Deisel Delivery</a></div>


    </div>
    <div class="right box">
      <div class="topic">Subscribe us</div>
      <form action="#">
        <input type="text" placeholder="Enter email address">
        <input type="submit" name="" value="Send"><br><br>
		<a style="text-align:right;" class="button_corner" href="logout.php">Logout</a>
      </form>
    </div>
  </div>
  <div class="bottom">
    <p  class="copyright">Copyright &#169; 2020 <a class="bb" href="#">DanZoon</a></p>
  </div>
</footer>

</body>

</html>
