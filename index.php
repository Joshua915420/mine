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


<!-- abuout section starts  -->

<section id="about" class="about">

<h1 class="heading">About us</h1>

<div class="row">

  <div class="content">
    <h3>Our services will help build and automate your business</h3>
    <p>With many years of experience in the industry, Our team has developed applications that has automated many businesses, increasing their sales with less effort. We are passionate and client-minded, making sure requirements are met.</p>
  </div>

  <div class="image">
    <img src="images/about-image.svg" alt="">
  </div>

</div>


</section>

<!-- abuout section ends  -->

<!-- service section starts  -->

<section id="service" class="service">

<h1 class="heading">our services</h1>

<div class="row">

  <div class="image">
    <img src="images/img1.svg" alt="">
  </div>
  <div class="content">
    <h3>Website Development</h3>
  </div>

</div>

<div class="row">

  <div class="content">
    <h3>Mobile App Development</h3>
  </div>
  <div class="image">
    <img src="images/img2.svg" alt="">
  </div>

</div>

<div class="row">

  
  <div class="image">
    <img src="images/img3.svg" alt="">
  </div>
  <div class="content">
    <h3>UI/UX Design</h3>
  </div>

</div>

<div class="row">

  <div class="content">
    <h3>Cloud Computing</h3>
  </div>
  <div class="image">
    <img src="images/img4.svg" alt="">
  </div>

</div>

<div class="row">

  
  <div class="image">
    <img src="images/img5.svg" alt="">
  </div>
  <div class="content">
    <h3>Search Engine Optimization</h3>
  </div>

</div>

<div class="row">

  <div class="content">
    <h3>Graphic Design</h3>
  </div>
  <div class="image">
    <img src="images/img6.svg" alt="">
  </div>

</div>

</section>


<!-- service section ends -->


  <!-- ======= portfolio Section ======= -->
  
  
  <section id="portfolio" class="portfolio">

        <div id="service" class="service">
    <h1 class="heading">Projects</h1>
    
  </div>
    <div class="container">

      

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <span class="ins">Website Applications</span>
            <button class="demo"><a href="redirect.html">See Demo</a></button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-file"></i></div>
            <span  class="ins">Mobile Applications</span>
            <button class="demo"><a href="redirect.html">See Demo</a></button>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-tachometer"></i></div>
            <span  class="ins">Management Systems</span>
            <button class="demo"><a href="redirect.html">See Demo</a></button>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Services Section -->



<!-- team section starts  -->
<!-- 
<section id="team" class="team">

<h1 class="heading">our team</h1>

<div class="row">

<div class="card">
  <div class="image">
    <img src="images/pic1.jpg" alt="">
  </div>
  <div class="info">
    <h3>Joshua Honest</h3>
    <span>Software Engineer</span>
    <div class="icons">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
    </div>
  </div>
</div>

<div class="card">
  <div class="image">
    <img src="images/pic2.jpg" alt="">
  </div>
  <div class="info">
    <h3>Victor Nuhu</h3>
    <span>Graphic Designer</span>
    <div class="icons">
      <a href="https://www.facebook.com/profile.php?id=100077067039448" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="https://www.instagram.com/iamprincevns/" class="fab fa-instagram"></a>
    </div>
  </div>
</div>

<div class="card">
  <div class="image">
    <img src="images/pic3.jpg" alt="">
  </div>
  <div class="info">
    <h3>Emmanuel</h3>
    <span>UI/UX Designer</span>
    <div class="icons">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
    </div>
  </div>
</div>

</div>


</section>
 -->


<!-- team section ends -->


<!-- FAQ section starts  -->

<section id="faq" class="faq">

<h1 class="heading">FAQ</h1>

<div class="row">

<div class="image">
  <img src="images/faq-image.svg" alt="">
</div>

<div class="accordion-container">

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>How much will it cost?</h3>
    </div>
    <div class="accordion-body">
      <p>Fees are calculated after an evaluation of your project</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>How Secure Is your website</h3>
    </div>
    <div class="accordion-body">
      <p>Clients need not worry about security. Our team makes sure that our client's websites get the right hosting service with the best SSL certificate.</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>is domain provided free?</h3>
    </div>
    <div class="accordion-body">
      <p>No. you will have to purchase your domain. But we also offer services on how to get the right domain name for your project</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>how long does it take to run a project?</h3>
    </div>
    <div class="accordion-body">
      <p>This depends on your project.</p>
    </div>
  </div>

  <div class="accordion">
    <div class="accordion-header">
      <span>+</span>
      <h3>is it seo freindly?</h3>
    </div>
    <div class="accordion-body">
      <p>We develop SEO friendly websites, making sure your website works smoothly and fast.</p>
    </div>
  </div>

</div>

</div>


</section>


<!-- FAQ section ends -->




     <!-- TESTIMONIAL -->
     <section id="testimonial">
      <div class="service" id="service">
                              <h1 class="heading">Reviews</h1>
                         </div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Jonathan</h4>
                                             <span>Principal</span>
                                        </div>
                                        <p>I'm really excited to have worked with Jaytech. My demands were met even before the arranged deadline, and right now activities at my school are going perfect.</p>
                                        <div class="tst-rating">
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Camila</h4>
                                             <span>Real estate Manager</span>
                                        </div>
                                        <p>My expectations were met, no doubts. Thanks to Jaytech my real estate business has been automated. will definitely come back for my next project</p>
                                        <div class="tst-rating">
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>James</h4>
                                             <span>Investor</span>
                                        </div>
                                        <p>I'm glad to say that my Investments have being going well lately with more clients because of the amazing automated website i got from Jaytech. I will surely recommend this to anyone.</p>
                                        <div class="tst-rating">
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                             <i class="fas fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                             

                         </div>

               </div>
          </div>
     </section> 

<!-- review end -->



<!-- contact section starts  -->

<section id="contact" class="contact">

<h1 class="heading">contact us</h1>


<div class="row">

  <div class="image">
    <img src="images/contact-image.svg" alt="">
  </div>

  <div class="form-container">
    <form action="index.php" method="POST">

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