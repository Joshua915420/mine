<?php

  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['name'], FILTER_VALIDATE_EMAIL)) {

      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $mailFrom = $_POST['mail'];
      $message = $_POST['message'];

      $mailTo = "honestmu77@gmail.com";
      $body = "";

      $body .= "From: ".$name. "\r\n";
      $body .= "Email: ".$mailFrom. "\r\n";
      $body .= "Message: ".$message. "\r\n";

      mail($mailTo, $subject, $body);

      $message_sent = true;


    }

    else{
      $invalid_class_name = "form_invalid";
    }
  }

  ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font awesome file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="css/owl.carousel.css">
 <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">

  <title>Jaytech</title>
</head>
<body>


  
      <?php
      if($message_sent):       
      ?>

         <h3>Thanks, we'll be in touch</h3>

      <?php 
      else:
      ?>
     

<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"><img src="images/logo.png"> Jaytech</a>


<div class="fas fa-bars"></div>


<nav class="navbar">
  <ul>
    <li><a href="#home">home</a></li>
    <li><a href="#about">about</a></li>
    <li><a href="#service">services</a></li>
    <li><a href="#portfolio">Projects</a></li>
    <li><a href="#testimonial">Reviews</a></li>
    <li><a href="#faq">FAQ</a></li>
    <li><a href="#contact">contact</a></li>
  </ul>
</nav>


</header>


<!-- header section ends -->

<!-- home section starts  -->

<section id="home" class="home">

<h1 class="banner">WELCOME</h1>
<h3 class="slogan">You have a vision? We have a team to get you there.</h3>



<div class="wave wave1"></div>
<div class="wave wave2"></div>
<div class="wave wave3"></div>

<div class="fas fa-cog nut1"></div>
<div class="fas fa-cog nut2"></div>


</section>


<!-- home section ends -->




<!-- contact section starts  -->

<section id="contact" class="contact">

<h1 class="heading">contact us</h1>


<div class="row">

  <div class="image">
    <img src="images/contact-image.svg" alt="">
  </div>

  <div class="form-container">
    <form action="redirect.php" method="POST">

      <div class="inputBox">
        <input type="text" class="<?= $invalid_class_name ?? "" ?>" name="name" placeholder="full name" required="">
        <input type="email" name="mail" placeholder="Email" required="">
      </div>

      <input type="text" name="subject" placeholder="Subject" required="">
      <textarea name="message" id="" cols="30" rows="10" placeholder="message" required=""></textarea>
      <button type="submit" class="demo" name="submit">Send</button>

    </form>
  </div>

</div>

</section>


<!-- contact section ends -->


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>Wuse 1, Abuja,<br> Nigeria</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fab fa-facebook-f"></a></li>
                                   <li><a href="#" class="fab fa-twitter"></a></li>
                                   <li><a href="#" class="fab fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2022 Jaytech</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+2349036622078</p>
                                   <p><a href="mailto:youremail.co">Jaytechnology10@gmail.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                    <li><a href="#home">home</a></li>
                                    <li><a href="#about">about</a></li>
                                    <li><a href="#service">services</a></li>
                                    <li><a href="#portfolio">Projects</a></li>
                                    <li><a href="#testimonial">Reviews</a></li>
                                    <li><a href="#faq">FAQ</a></li>
                                    <li><a href="#contact">contact</a></li>
                                  </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>



<!-- jquery file link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- custom js file link  -->

<script src="js/main.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>


<?php
endif;

?>

  
</body>
</html>