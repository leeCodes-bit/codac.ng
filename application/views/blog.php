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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/blog.css">
  <title>Codac | CODAC BLOG </title>
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
      <div class="auth ml-auto  mr-5 d-flex flex-row align-items-center">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="userdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="user__pic mr-3">
              <img src="<?php echo base_url(); ?>assets/img/user.png" alt="user" style="width: 30px;" class="user__image">
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="userdropdown">
            <ul class="text-center nav user--dropdown">
              <li class="nav-item user--name font-weight-bold">
                <a href="#" class="nav-link">John Doe</a>
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
                <a href="#" class="nav-link">
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
  <!-- MAIN SECTION -->
  <section class="main mt-5 mx-auto">
    <h1 class="h1 mx-5">Codac Blog</h1>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 article px-5 py-3 border-grey">
          <article>
            <img src="<?php echo base_url(); ?>assets/img/blog/smarter.jpg" alt="smart-hobbies">
            <div class="main-body">
              <h3 class="sub-header post-title">
                <strong>
                  8 Hobbies That Make You Smarter (According to Science)
                </strong>
              </h3>
              <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
              <p class="paragraph">
                For many years, people have believed that you are as smart as you are, and there’s nothing you can do about it.
                Wrong!
                Not only are you able to make yourself smarter, you can have fun doing it. Here are 8 hobbies that Science has
                proven to make you more...
              </p>
              <a href="#">
                <button class="btn btn-md btn-outline-dark">
                  Read More
                </button>
              </a>
            </div>
            <div class="main-footer">
              <div class="main-footer-sns">
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
              <div class="main-footer-related">
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Health</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Lifestyle</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Self-development</buttton>
                </a>
              </div>
            </div>
          </article>
          <article>
            <img src="<?php echo base_url(); ?>assets/img/blog/cofidence.jpg" alt="confidence">
            <div class="main-body">
              <h3 class="sub-header post-title">
                <strong>
                  Study Smart And Save Time With These 6 Tips
                </strong>
              </h3>
              <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
              <p class="paragraph">
                Trying to balance life’s day-to-day commitments and studying can be quite overwhelming. But it doesn’t have to
                be! Here are 6 tips to help you study smart and achieve your goals, so that you can save time for everything
                else that
                matters in your life.
              </p>
              <a href="#">
                <button class="btn btn-md btn-outline-dark">
                  Read More
                </button>
              </a>
            </div>
            <div class="main-footer">
              <div class="main-footer-sns">
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
              <div class="main-footer-related">
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Stress</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Time Management</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Study Skills</buttton>
                </a>
              </div>
            </div>
          </article>
          <article>
            <img src="<?php echo base_url(); ?>assets/img/blog/grammar.jpg" alt="grammer-mistakes-image">
            <div class="main-body">
              <h3 class="sub-header post-title">
                <strong>
                  8 Common English Grammer mistakes We Make
                </strong>
              </h3>
              <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
              <p class="paragraph">
                When it comes to language, it’s easy to make English grammar mistakes, even as native speakers. Here are the 8
                most
                commonly made errors to watch out for. 1. The Missing Comma A comma is used after an introductory word, phrase,
                or
                clause. This gives a pause...
              </p>
              <a href="#">
                <button class="btn btn-md btn-outline-dark">
                  Read More
                </button>
              </a>
            </div>
            <div class="main-footer">
              <div class="main-footer-sns">
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
              <div class="main-footer-related">
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Health</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Lifestyle</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Self-development</buttton>
                </a>
              </div>
            </div>
          </article>
          <article>
            <img src="<?php echo base_url(); ?>assets/img/blog/problems.jpg" alt="workspace-problem-image">
            <div class="main-body">
              <h3 class="sub-header post-title">
                <strong>
                  4 Work Space Problem and What You Can Do About Them
                </strong>
              </h3>
              <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
              <p class="paragraph">
                There’s no such thing as a perfect workplace. No matter who you are or where you work, there will be something
                that makes your day a little (or a lot) more difficult than you want it to be. Some of these workplace problems
                are things we just have to deal...
              </p>
              <a href="#">
                <button class="btn btn-md btn-outline-dark">
                  Read More
                </button>
              </a>
            </div>
            <div class="main-footer">
              <div class="main-footer-sns">
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
              <div class="main-footer-related">
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Career</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Job</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Motivation</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Time Management</buttton>
                </a>
              </div>
            </div>
          </article>
          <article>
            <img src="<?php echo base_url(); ?>assets/img/blog/direction.jpg" alt="direction-image">
            <div class="main-body">
              <h3 class="sub-header post-title">
                <strong>
                  Where Are You Going?<br> How Can You Get There?
                </strong>
              </h3>
              <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
              <p class="paragraph">
                Do you know where you are going in life? A lot of people don’t. If you have a clear idea of where you want to be
                in a few years, you really are a lucky one. Dreams are valuable, if you’ve got one then hold onto it! But even
                more
                important than dreams, are...
              </p>
              <a href="#">
                <button class="btn btn-md btn-outline-dark">
                  Read More
                </button>
              </a>
            </div>
            <div class="main-footer">
              <div class="main-footer-sns">
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
              <div class="main-footer-related">
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Career</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">Job</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">CV</buttton>
                </a>
              </div>
            </div>
          </article>
          <article>
            <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="training-image">
            <div class="main-body">
              <h3 class="sub-header post-title">
                <strong>
                  White Paper: Why Study ISO 45001 H&S Management
                </strong>
              </h3>
              <p class="lead author">by Codac Marketing | May 8, 2020 | Codac in Action</p>
              <p class="paragraph">
                SO 45001 is an internationally agreed standard for occupational health and safety management systems published
                by the International Organization for Standardization (ISO) in March 2018. Alison now features a course which
                will
                teach you...
              </p>
              <a href="#">
                <button class="btn btn-md btn-outline-dark">
                  Read More
                </button>
              </a>
            </div>
            <div class="main-footer">
              <div class="main-footer-sns">
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
              <div class="main-footer-related">
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">ISO</buttton>
                </a>
                <a href="#">
                  <buttton class="btn btn-md btn-secondary">online courses</buttton>
                </a>
              </div>
            </div>
          </article>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 main-right-sidebar">
          <div class="row">
            <div class="col-lg-12">
              <form action="" id="search-form" class="search-form">
                <input type="search" name="search" id="search" class="form-control">
                <button class="btn btn-secondary">Search</button>
              </form>
            </div>
            <div class="col-lg-12">
              <div class="popular__posts text-center border-grey py-3">
                <h3 class="h4">Popular Posts</h3>
                <hr>
                <div class="popular__posts-body p-2">
                  <div class="popular__posts-body-card">
                    <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
                    <h6 class="h5">Top Ten Codac Courses</h6>
                  </div>
                  <div class="popular__posts-body-card">
                    <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
                    <h6 class="h5">Top Ten Codac Courses</h6>
                  </div>
                  <div class="popular__posts-body-card">
                    <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
                    <h6 class="h5">Top Ten Codac Courses</h6>
                  </div>
                  <div class="popular__posts-body-card">
                    <img src="<?php echo base_url(); ?>assets/img/blog/training.jpg" alt="">
                    <h6 class="h5">Top Ten Codac Courses</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 mt-5">
              <div class="categories text-center border-grey py-3">
                <h3 class="h4">Categories</h3>
                <hr>
                <div class="categories__tags p-2">
                  <h6><a href="#">Codac HQ News (3)</a></h6>
                  <h6><a href="#">Codac in Action (72)</a></h6>
                  <h6><a href="#">Guest Posts (1)</a></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER SECTION -->
  <!-- <section class="footer">
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
  </section> -->

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