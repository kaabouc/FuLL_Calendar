<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title >FULL CALL </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>admin_page@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>060001020304</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a  href="#top" class="logo" style="padding: 10px; color: #49045a; text-align: center; font-size: 24px; tex">
             Full Calendar 
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#blog">Blog</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li> 
                    @if (Route::has('login'))
                      @auth
                      <li class="scroll-to-section"><div class="border-first-button"><a  href="{{ url('/home') }}" > home  </a></div></li> 
                    @else
                          <li class="scroll-to-section"><div class="border-first-button"><a  href="{{ route('login') }}"> login </a></div></li> 
                        @if (Route::has('register'))
                          <li class="scroll-to-section"><div class="border-first-button"><a  href="{{ route('register') }}"> registre  </a></div></li> 
                        @endif
                  @endif
                 @endif
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>family calendar </h6>
                    <h2>We Boost Your Website Traffic</h2>
                    <p>TFamily Calendar est un calendrier interactif partagé conçu pour les familles. Organisez facilement vos emplois du temps, partagez des événements et restez synchronisés en un seul endroit pratique. Simplifiez la coordination familiale pour des moments inoubliables ensemble.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/famile.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/event.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who is family calendar  <em>calendar</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>
                  Notre plateforme a été conçue pour simplifier la gestion des emplois du temps et des événements pour 
                  toute votre famille. Avec Family Calendar, coordonner les horaires de chacun, 
                  planifier des activités en groupe et ne manquer aucun événement important devient un jeu d'enfant</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>Coding</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Photoshop</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Animation</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="services" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our services</h6>
            <h4>See Our Recent <em>services</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-01.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Gestion des événements </h4>
                  <span>Gestion des événements </span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-01.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Calendrier familial partagé</h4>
                  <span>Calendrier familial partagé</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-02.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Gestion des membres de la famille</h4>
                  <span>membres de familes</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-03.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Catégories d'événements personnalisées</h4>
                  <span>Catégories d'événements personnalisées</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/portfolio-04.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Interface conviviale</h4>
                  <span>Interface conviviale</span>
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Check Our Blog <em>Posts</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="assets/images/footbale.jpeg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">football</span>
              <span class="date">03 August 2021</span>
              <a href="#"><h4>Le football, également appelé soccer dans certains pays, est un sport de ballon très populaire joué à l'échelle mondiale</h4></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
              <span class="author"><img src="assets/images/author-post.jpg" alt="">By: Admin de page </span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/date food friend.jpeg" style="width: 30%; height: 50%;" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">food with friends</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/R.jpeg" alt="" style="width: 30%; height: 50%;"></a>
                  </div>
                  <div class="right-content">
                    <span class="category">hand ball</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/travel date.png" alt="" style="width: 30%; height: 50%;"></a>
                  </div>
                  <div class="right-content">
                    <span class="category">Travel </span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">060001020304</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">Admin_page@email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">Maroc, marrakech, rue 100</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>