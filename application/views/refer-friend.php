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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/refer-friend.css">
  <title>Codac | Refer A Friend </title>
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
  <section class="hero">
    <div class="container-fluid text-light text-center">
      <h1 class="main-header">Refer A Friend and Earn Rewards</h1>
      <p class="paragraph">
        Refer your friends to Codac and earn FREE Digital Ceritificates and Digital Diplomas.
        Refer as many people as you want to. <em>The more you refer, the more you could earn!</em>
        <a href="#">
          <button class="btn btn-lg btn-md btn-success d-block mt-3 mx-auto">Start referring my friends
          </button>
        </a>
      </p>
    </div>
  </section>
  <!-- STEPS SECTION -->
  <section class="steps py-3">
    <div class="container mx-auto">
      <div class="steps__card">
        <div class="invite">
          <div class="steps__header">
            <h3 class="sub-header">Share</h3>
            <img src="<?php echo base_url(); ?>assets/img/refer-friend-files/invite.png" alt="invite-image">
          </div>
          <div class="steps-body">
            <p class="paragraph-header">Step 1</p>
            <p class="paragraph">
              Share your <a href="#">unique link</a>
              with your friends, family, or contacts through
              social media or email.
            </p>
          </div>
        </div>
      </div>
      <div class="steps__card arrow">
        <img src="<?php echo base_url(); ?>assets/img/refer-friend-files/arrow.png" alt="arrow" class="rotate">
      </div>
      <div class="steps__card">
        <div class="complete">
          <div class="steps__header">
            <h3 class="sub-header">Complete</h3>
            <img src="<?php echo base_url(); ?>assets/img/refer-friend-files/complete.png" alt="complete-image">
          </div>
          <div class="steps-body">
            <p class="paragraph-header">Step 2</p>
            <p class="paragraph">
              Your friends register on Alison through your
              <a href="#">unique link</a>, and complete a course within 30 days of registering.
            </p>
          </div>
        </div>
      </div>
      <div class="steps__card arrow">
        <img src="<?php echo base_url(); ?>assets/img/refer-friend-files/arrow.png" alt="arrow">
      </div>
      <div class="steps__card">
        <div class="reward">
          <div class="steps__header">
            <h3 class="sub-header">Earn Rewards</h3>
            <img src="<?php echo base_url(); ?>assets/img/refer-friend-files/earn.png" alt="earn-image">
          </div>
          <div class="steps-body">
            <p class="paragraph-header">Step 3</p>
            <p class="paragraph">
              You’re rewarded with a FREE Digital Certificate/Diploma download and your friends get a 10% DISCOUNT on their
              first
              purchase.
            </p>
          </div>
        </div>
      </div>
  </section>
  <!-- REFER REWARDS SECTION -->
  <section class="refer-rewards pt-5 text-center">
    <div class="container">
      <h1 class="sub-header mb-3">Refer A Friend Rewards</h1>
      <p class="paragraph opacify">
        3 friends complete a course = <strong>you earn a Free Digital Certificate.</strong>
      </p>
      <p class="paragraph opacify">
        25 friends complete a course = <strong>you earn a Free Digital Diploma.</strong>
      </p>

      <p class="paragraph opacify mt-5">
        Check the progress of your referred friends anytime through your Refer a Friend Progress table on your Stats Page .
        <span class="d-block">
          You can also check them on your <a href="#">Dashboard.</a>
        </span>
      </p>
      <a href="#" class="text-decoration-none mt-2 d-block stats-btn">
        <button class="btn btn-success btn-md">See my stats</button>
      </a>
      <p class="paragraph mt-4">
        <strong>
          Your friends will get a 10% DISCOUNT on their first purchase if they register through your link and complete a
          course.
          They must register on Codac through your link and complete a course within 30 days.
        </strong>
      </p>
    </div>
    <div class="refer-footer mt-5">
      <p class="paragraph unique-link">
        <a href="#">Sign up</a> or <a href="#">Log in</a>
        now to reveal your unique link.
      </p>
      <p class="paragrahp mt-4">
        <small>
          Note: Rewards can’t be claimed more than once and can’t be reversed. Refer to our <a href="#">FAQs </a> for more
          information.
        </small>
      </p>
    </div>
    <div class="refer-footer-bg">
      &nbsp;
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