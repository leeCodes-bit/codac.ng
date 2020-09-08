<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name='keywords' content='Codac, E-learning,favourite courses' />
  <meta name='description' content='E-learning site, where registered students learn their favourite courses at their own pace' />
  <meta property="og:title" content="Codac | E-learning,favourite courses" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="">
  <meta property="og:url" content="" />
  <meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:url" content="">
  <meta name="twitter:title" content="Codac | E-learning,favourite courses">
  <meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
  <meta name="twitter:image" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nav.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/faq.css">
  <title>Codac | Faq </title>
</head>

<body>
  <!-- HEADER SECTION -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a href="<?php echo base_url(); ?>" class="navbar-brand text-light">
      <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="Codac Logo">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mt-2 mt-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course Categories</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Technology</a>
            <a class="dropdown-item" href="#">Language</a>
            <a class="dropdown-item" href="#">Science</a>
            <a class="dropdown-item" href="#">Health</a>
            <a class="dropdown-item" href="#">Business</a>
            <a class="dropdown-item" href="#">Math</a>
            <a class="dropdown-item" href="#">Marketing</a>
            <a class="dropdown-item" href="#">Humanities</a>
            <a class="dropdown-item" href="#">Lifestyle</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-3 ml-lg-3 my-lg-0" id="searchcourse">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="auth ml-auto mr-5 d-flex flex-row align-items-center">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="userdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="user__pic mr-3">
              <img src="<?php echo base_url(); ?>assets/img/user.png" alt="user" style="width: 30px;" class="user__image">
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="userdropdown">
            <ul class="text-center nav user--dropdown">
              <li class="nav-item user--name font-weight-bold">
                <?php echo $this->input->cookie('fullname', true); ?>
              </li>
              <li class="nav-item">
                <a href="#">
                  <button class="btn btn-danger">View Profile</button>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="far fa-play-circle"></i>Resume Study</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-user"></i>My Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-cog"></i>Account Settings</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-question-circle"></i>Help </a> </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>logout" class="nav-link">
                  <i class="fa fa-power-off"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="notification">
          <i class="fa fa-bell-o text-light fa-lg" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </nav>
  <section class="container-fluid py-2 px-5 hero__header">
    <h1 class="main-header">FREQUENTLY ASK QUESTION</h1>
    <h4 class="main-sub-header">How can we help?</h4>
  </section>
  <section class="container-fluid hero__bg">
    <figure class="figure px-5">
      <figcaption class="figure-caption text-xs-right">
        Welcome to Codac's Help Center; where all your most commonly asked questions are answered.
        Before contacting us, use the search (above) or browse through our categories (left) to try and find your answer.
      </figcaption>
      <img src="<?php echo base_url(); ?>assets/img/faq-media/faq.jpg" class="figure-img" alt="hero-background">
    </figure>
  </section>
  <section class="container-fluid question px-5 py-2">
    <div class="row">
      <div class="question-container">
        <div class="question-body">
          <img src="<?php echo base_url(); ?>assets/img/faq-media/learning.png" alt="learning">
          <div class="question-body-text">
            <h5 class="sub-header">Learning</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea suscipit voluptatem eos veritatis obcaecati
              incidunt nihil.</p>
          </div>
        </div>
        <div class="question-footer bg-success text-light px-4 mt-1">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur mollitia quisquam cum culpa libero
            recusandae delectus totam, nam eum magni animi alias labore quis debitis unde necessitatibus sapiente laborum!
          </p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question-container">
        <div class="question-body">
          <img src="<?php echo base_url(); ?>assets/img/faq-media/account.png" alt="account">
          <div class="question-body-text">
            <h5 class="sub-header">Account</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea suscipit voluptatem eos veritatis obcaecati
              incidunt nihil.</p>
          </div>
        </div>
        <div class="question-footer bg-success text-light px-4 mt-1">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur mollitia quisquam cum culpa libero
            recusandae delectus totam, nam eum magni animi alias labore quis debitis unde necessitatibus sapiente laborum!
          </p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question-container">
        <div class="question-body">
          <img src="<?php echo base_url(); ?>assets/img/faq-media/refer-a-friend.png" alt="refer-a-friend">
          <div class=" question-body-text">
            <h5 class="sub-header">Refer A Friend</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea suscipit voluptatem eos veritatis obcaecati
              incidunt nihil.</p>
          </div>
        </div>
        <div class="question-footer bg-success text-light px-4 mt-1">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur mollitia quisquam cum culpa libero
            recusandae delectus totam, nam eum magni animi alias labore quis debitis unde necessitatibus sapiente laborum!
          </p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question-container">
        <div class="question-body">
          <img src="<?php echo base_url(); ?>assets/img/faq-media/donations.png" alt="donation">
          <div class="question-body-text">
            <h5 class="sub-header">Donations</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea suscipit voluptatem eos veritatis obcaecati
              incidunt nihil.</p>
          </div>
        </div>
        <div class="question-footer bg-success text-light px-4 mt-1">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur mollitia quisquam cum culpa libero
            recusandae delectus totam, nam eum magni animi alias labore quis debitis unde necessitatibus sapiente laborum!
          </p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question-container">
        <div class="question-body">
          <img src="<?php echo base_url(); ?>assets/img/faq-media/mobile.png" alt="mobile-application">
          <div class="question-body-text">
            <h5 class="sub-header">Mobile Applications</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea suscipit voluptatem eos veritatis obcaecati
              incidunt nihil.</p>
          </div>
        </div>
        <div class="question-footer bg-success text-light px-4 mt-1">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur mollitia quisquam cum culpa libero
            recusandae delectus totam, nam eum magni animi alias labore quis debitis unde necessitatibus sapiente laborum!
          </p> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question-container">
        <div class="question-body">
          <img src="<?php echo base_url(); ?>assets/img/faq-media/payment.png" alt="certiction-and-payment">
          <div class="question-body-text">
            <h5 class="sub-header">Certification and Payments</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea suscipit voluptatem eos veritatis obcaecati
              incidunt nihil.</p>
          </div>
        </div>
        <div class="question-footer bg-success text-light px-4 mt-1">
          <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae tenetur mollitia quisquam cum culpa libero
            recusandae delectus totam, nam eum magni animi alias labore quis debitis unde necessitatibus sapiente laborum!
          </p> -->
        </div>
      </div>
    </div>
    <!-- footer
    <footer class="footer-social mt-3">
      <a href="#">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="#">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="#">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
    </footer>
  </section>
  <section class="footer">
    <div class="nav-container">
      <h6 class="footer__header">ABOUT CODAC
      </h6>
      <ul class="footer__links">
        <li class="nav-item">
          <a href="#" class="nav-link">Our Story</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Blog</a>
        </li>
      </ul>
    </div>
    <div class="nav-container">
      <h6 class="footer__header">LEARNING </h6>
      <ul class="footer__links">
        <li class="nav-item">
          <a href="#" class="nav-link">Courses</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Testimonials</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Refer a Friend</a>
        </li>
      </ul>
    </div>
    <div class="nav-container">
      <h6 class="footer__header">MORE</h6>
      <ul class="footer__links">
        <li class="nav-item">
          <a href="#" class="nav-link">News & Press</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">FAQ</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Index</a>
        </li>
      </ul>
    </div>
    </div> -->
  </section>

<!-- FOOTER SECTION -->
  <section id="footer" class="footer w-100">
    <a href="#home" class="text-light">
      <span class="footer__go-up text-light">
        <i class="fa fa-angle-up arrow-up" aria-hidden="true"></i>
      </span>
    </a>
    <footer class="footer section-padding">
      <div class="navigation__container w-100">
        <div class="footer__navigation">
          <div class="container-fluid px-4">
            <div class="nav-container">
              <h6 class="footer__header one">ABOUT CODAC
                <hr>
              </h6>
              <ul class="footer__links">
                <li class="nav-item">
                  <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">About</a>
                </li>
              </ul>
            </div>
            <div class="nav-container">
              <h6 class="footer__header three">LEARNING
                <hr>
              </h6>
              <ul class="footer__links">
                <li class="nav-item">
                  <a href="#" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Blog</a>
                </li>
              </ul>
            </div>
            <div class="nav-container">
              <h6 class="footer__header two">MORE
                <hr>
              </h6>
              <ul class="footer__links">
                <li class="nav-item">
                  <a href="#" class="nav-link">Faq</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Certificate</a>
                </li>
              </ul>
            </div>
            <div class="nav-container">
              <h6 class="footer__header four">CONNECT
                <hr>
              </h6>
              <ul class="footer__links">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-facebook" aria-hidden="true"></i><span class="ml-2">Facebook </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-instagram" aria-hidden="true"></i><span class="ml-2">Instagram</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-twitter" aria-hidden="true"></i><span class="ml-2">Twitter</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-linkedin" aria-hidden="true"></i><span class="ml-2"> Linkedin </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer__copyright text-light py-3">

          <ul class="copyright__links">
            <a href="<?php echo base_url(); ?>" class="navbar-brand text-light">
              <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="Codac Logo">
            </a>
            <li class="nav-item">
              <a href="#" class="nav-link">
                &copy; Codac 2019
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Privacy
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Terms
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Cookie Policy
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Sitemap
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nav.js"></script>
</body>

</html>