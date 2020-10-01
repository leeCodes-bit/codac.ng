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
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/studentdashboard.css"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer.css">
  <title>Codac | Student Quiz</title>
</head>

<body id="home">
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

  <!-- QUIZ SECTION -->
  <div class="quiz-page container mx-auto py-5 px-5">
    <div class="row">
      <div class="col-lg-6 col-md-10 col-sm-12 mx-auto">
        <ul class="listgroup mx-0 px-0">
          <li class="list-group-item font-weight-bold">
            Total Question:
            <span>1</span> /
            <span>10</span>
          </li>
        </ul>
        <h3 class="quiz-title py-3">HTML QUIZ</h3>
        <div class="row">
          <div class="jumbotron">
            <p class="col-lg-12 d-flex">
              <strong class="mr-2">1.</strong>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, totam.
            </p>
            <div class="px-5">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Lorem
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Lorem ipsum
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                <label class="form-check-label" for="exampleRadios3">
                  Lorem dolor
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option2">
                <label class="form-check-label" for="exampleRadios4">
                  Ipson dolor
                </label>
              </div>
            </div>
            <div class="form-group mt-3 text-center d-flex justify-content-center">
              <form action="" method="post" class="mr-2">
                <input type="hidden" name="courseId" class="form-control form-control-lg">
                <button type="submit" class="btn btn-primary btn-md font-weight-bold rounded-0">
                  Prev
                </button>
              </form>
              <form action="" method="post">
                <input type="hidden" name="courseId" class="form-control form-control-lg">
                <button type="submit" class="btn btn-success btn-md font-weight-bold rounded-0">
                  Next
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER SECTION -->
  <section id="footer" class="footer w-100">
    <a href="#home" class="text-light">
      <span class="footer__go-up text-light">
        <i class="fa fa-angle-up arrow-up" aria-hidden="true"></i>
      </span>
    </a>
    <?php include('fragments/footer.php'); ?>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nav.js"></script>

</body>

</html>