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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/newspress.css">
  <title>Codac | NewsPress </title>
</head>

<body>
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
                <a href="#" class="nav-link">
                  <?php echo $this->input->cookie('fullname', true); ?>
                </a>
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
  <!-- HERO SECTION -->
  <section class="hero" style="background-image: url('<?php echo base_url(); ?>assets/img/newspress-files/hero-bg.jpg');">
    <div class="container text-center text-light">
      <h1 class="display-3">Press room</h1>
      <p class="paragraph">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sit illum saepe voluptates possimus, numquam at et
        repellendus quo omnis praesentium a necessitatibus iure ad eligendi aspernatur provident. Veniam, accusantium!
      </p>
    </div>
  </section>

  <!-- PRESS CARD -->
  <section class="press mt-5">
    <div class="press__social">
      <a href="#" class="social" rel="nofollow" target="_blank">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="#" class="social" rel="nofollow" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="#" class="social" rel="nofollow" target="_blank">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
    </div>
    <ul class="press__listing mt-4">
      <li>
        <img src="<?php echo base_url(); ?>assets/img/newspress-files/press.png" alt="press-image">
        <h3 class="main-sub-header mt-2">Press Releases</h3>
        <p class="mt-4">
          Find out the latest news about Codac and out Free
          Learning Mission.
        </p>
        <a href="#" class="text-decoration-none">
          <button class="btn btn-success btn-md">
            Learn More
          </button>
        </a>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/img/newspress-files/Course-alerts.png" alt="course-alert-image">
        <h3 class="main-sub-header mt-2">New Course Alerts</h3>
        <p class="mt-4">
          Read about our latest courses and the people and organisations behind them.
        </p>
        <a href="#" class="text-decoration-none">
          <button class="btn btn-success btn-md">
            Learn More
          </button>
        </a>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/img/newspress-files/press-release.png" alt="press-release-image">
        <h3 class="main-sub-header mt-2">Selected Press Articles</h3>
        <p class="mt-4">
          Read selected press articles about what the world is saying about Codac.
        </p>
        <a href="#" class="text-decoration-none">
          <button class="btn btn-success btn-md">
            Learn More
          </button>
        </a>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="codac-image">
        <h3 class="main-sub-header mt-2">Branding Guidelines</h3>
        <p class="mt-4">
          Learn about out values, how to present our brand and much more.
        </p>
        <a href="#" class="text-decoration-none">
          <button class="btn btn-success btn-md">
            Learn More
          </button>
        </a>
      </li>
    </ul>
  </section>

  <!-- PRESS FOOTER -->
  <section class="press-footer pt-5">
    <p class="container">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque sunt placeat corporis aperiam sequi. Nisi, aliquam
      numquam ipsum architecto maiores assumenda in minima quas ratione? Expedita molestiae nisi dolores neque delectus
      voluptas ut. Repellendus sint ducimus quibusdam vel cumque ex illum perspiciatis, voluptatibus ullam sunt aut ut,
      nobis, ipsam excepturi.
      <br>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempore molestiae corporis atque fuga suscipit sed
      voluptatum nulla exercitationem.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempore molestiae corporis atque fuga suscipit sed
      voluptatum nulla exercitationem.
    </p>

    <div class="press-footer-social">
      <a href="#" class="social">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="#" class="social">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="#" class="social">
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </a>
    </div>
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
    </div>
  </section>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nav.js"></script>
</body>

</html>
