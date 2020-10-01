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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/testimony.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer.css">
  <title>Codac | TESTIMONY </title>
</head>

<body id="home">
  <!-- NAVIGATION SECTION -->
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
  <!-- HEADER SECTION -->
  <section class="header">
    <h1>
      Codac Graduate Reviews and Testimonials Stories of Empowerment
    </h1>
    <p class="paragraph">
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam sint expedita quis dolores cumque illo! Fugit nihil neque laudantium hic numquam sint expedita quis dolores cumque illo.
    </p>
  </section>
  <!-- STORY SECTION -->
  <section class="story">
    <ul class="story__card m-0 text-center">
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Kaka Morufu</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Nigeria</i>
          </span>
          <h6><i>Improved Work Skills!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Andrew Gift</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Nigeria</i>
          </span>
          <h6><i>Boosted My CV!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Lilly Lang</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>U.S.</i>
          </span>
          <h6><i>Got a Job!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Esther Amadi</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Ghana</i>
          </span>
          <h6><i>Built My Confidence!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Kaka Morufu</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Nigeria</i>
          </span>
          <h6><i>Improved Work Skills!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Andrew Gift</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Nigeria</i>
          </span>
          <h6><i>Boosted My CV!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Lilly Lang</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>U.S.</i>
          </span>
          <h6><i>Got a Job!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Esther Amadi</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Ghana</i>
          </span>
          <h6><i>Built My Confidence!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Kaka Morufu</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Nigeria</i>
          </span>
          <h6><i>Improved Work Skills!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Andrew Gift</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Nigeria</i>
          </span>
          <h6><i>Boosted My CV!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Lilly Lang</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>U.S.</i>
          </span>
          <h6><i>Got a Job!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
      <li>
        <img src="https://source.unsplash.com/Oalh2MojUuk/250x160">
        <h5 class="mt-3">Esther Amadi</h5>
        <div class="story__card-body mt-4 pb-2">
          <span>
            <i>Ghana</i>
          </span>
          <h6><i>Built My Confidence!</i></h6>
          <p class="px-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores doloribus voluptatibus ipsam.
          </p>
          <a href="#" class="btn btn-md px-5 btn-primary mt-3">Read More</a>
        </div>
      </li>
    </ul>
  </section>

  <!-- FOOTER SECTION -->
  <section id="footer" class="footer w-100">
    <a href="#home" class="text-light">
      <span class="footer__go-up text-light">
        <i class="fa fa-angle-up arrow-up" aria-hidden="true"></i>
      </span>
    </a>
    <?php include('fragments/footer.php'); ?>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/nav.js"></script>
</body>

</html>