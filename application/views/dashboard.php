<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name='keywords' content='Codac, E-learning,favourite courses' />
  <meta name='description' content='E-learning site, where registered students learn there favourite courses at their own pace' />
  <meta property="og:title" content="Codec | E-learning,favourite courses" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="">
  <meta property="og:url" content="" />
  <meta property="og:description" content="E-learning site, where registered students learn there favourite courses at their own pace" />
  <meta name="twitter:card" content="">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="">
  <meta name="twitter:url" content="">
  <meta name="twitter:title" content="Codec | E-learning,favourite courses">
  <meta name="twitter:description" content="E-learning site, where registered students learn there favourite courses at their own pace">
  <meta name="twitter:image" content="">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dashboard.css">
  <title>Codac | DASHBOARD</title>
</head>

<body>

  <!-- MOBILE NAV -->
  <section class="mobile-nav">
    <div class="mobile-nav__bg">
      <span class="mobile-nav__toggle">
        <i class="fa fa-bars mobile-open" aria-hidden="true"></i>
      </span>
    </div>
  </section>

  <!-- MOBILE SIDEBAR -->
  <section class="mobile__sidebar">
    <div class="mobile__sidebar-bg">
      <div class="mobile__sidebar-user">
        <span class="username">OO</span>
        <div class="greet">
          <h4>Hi, <span class="name">Olamide Odore</span></h4>
          <p>Welcome back</p>
        </div>
      </div>

      <ul class="mobile__sidebar-list list-group">

        <li class="list-item show-profile list-group-item">
          <a href="#" class="show-profile">
            Profile
          </a></li>

        <li class="list-item show-courses list-group-item">
          <a href="#" class="show-courses">
            Courses
          </a></li>

        <li class="list-item show-comms list-group-item">
          <a href="#" class="show-comms">
            Communication
          </a></li>
        <li class="list-item show-perf list-group-item">
          <a href="#" class="show-perf">
            Performance
          </a></li>
        <li class="list-item show-tools list-group-item">
          <a href="#" class="show-tools">
            Tools
          </a></li>
        <li class="list-item show-resource list-group-item">
          <a href="#" class="show-resource">
            Resources
          </a></li>
      </ul>

      <div class="list-group">
        <li class="list-group-item">
          <a href="#">Notification</a>
          <span class="badge badge-danger">3</span>
        </li>
        <li class="list-group-item">
          <a href="<?php echo base_url(); ?>logout">Log out</a>
        </li>
      </div>

    </div>
  </section>

  <div class="wrapper">
    <section class="sidebar-container">
      <div class="user" id="user">
        <span class="user__role">Student</span>
        <span class="user__notify">

          <div class="dropright">
            <i class="fa fa-bell-o" aria-hidden="true" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </span>
        <div class="user__name">
          <div class="dropright">
            <span class="user__initials" aria-hidden="true" id="dropdownButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OO</span>
            <div class="dropdown-menu" aria-labelledby="dropdownButton">
              <li class="list-group-item">
                <a href="#">Public Profile</a>
              </li>
              <li class="list-group-item">
                <a href="#">Account</a>
              </li>
              <li class="list-group-item">
                <a href="#">Notification</a>
                <span class="badge badge-danger">3</span>
              </li>
              <li class="list-group-item">
                <a href="#">Payout Settings</a>
              </li>
              <li class="list-group-item">
                <a href="<?php echo base_url(); ?>logout">Log out</a>
              </li>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar">
        <nav class="sidebar__nav">
          <ul class="sidebar__nav-list">
            <li class="list-item list-logo">
              <a href="#"> <img src="<?php echo base_url(); ?>assets/img/codaclogo.png" alt="codac logo">
              </a></li>

            <li class="list-item show-profile profileBorder active-list">
              <a href="#" class="show-profile">
                <i class="fas fa-user show-profile"></i>
                Profile
              </a></li>

            <li class="list-item show-courses courseBorder">
              <a href="#" class="show-courses">
                <i class="fas fa-play show-courses"></i>
                Courses
              </a></li>

            <li class="list-item show-comms commsBorder">
              <a href="#" class="show-comms">
                <i class="fas fa-comment-dots show-comms"></i>
                Communication
              </a></li>
            <li class="list-item show-quiz quizBorder">
              <a href="#" class="show-quiz">
                <i class="fas fa-book open show-quiz"></i>
                Quiz
              </a></li>
            <li class="list-item show-perf showBorder">
              <a href="#" class="show-perf">
                <i class="fas fa-chart-bar show-perf"></i>
                Performance
              </a></li>
            <li class="list-item show-tools toolsBorder">
              <a href="#" class="show-tools">
                <i class="fa fa-wrench show-tools"></i>
                Tools
              </a></li>
            <li class="list-item show-resource resourceBorder">
              <a href="#" class="show-resource">
                <i class="fa fa-question-circle-o show-resource"></i>
                Resources
              </a></li>
          </ul>
        </nav>
        <div class="overview hide">
          <h5 class="overview__header header font-weight-bold">Overview</h5>
        </div>

        <div class="communicate hide">
          <h5 class="q&a font-weight-bold pt-5 pl-4">Q&A</h5>
          <h5 class="pl-4">Message <span class="badge badge-danger notification">6</span> </h5>
        </div>

      </div>
    </section>


    <!-- PROFILE PAGE -->
    <main class="profile hide show">

      <div class="profile__dashboard">
        <h1 class="display-4">Profile</h1>
        <form action="#" method="post">
          <div class="form-group form-bg">
            <label for="about">Personal Profile</label>
            <textarea style="resize: none;text-align: initial;" placeholder="Tell us a bit about yourself...." name="summary" class="about-info" id="about"></textarea>
          </div>

          <div class="form-details form-bg">
            <div class="form-details-container">
              <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control form-control-md" placeholder="First Name">
              </div>

              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control form-control-md" placeholder="Last Name">
              </div>

              <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control form-control-md" placeholder="Country">
              </div>

              <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control form-control-md" placeholder="Nationality">
              </div>

              <div class="form-group">
                <label for="dob">Date of birth</label>
                <input type="text" name="dob" id="dob" class="form-control form-control-md" placeholder="eg: 11/01/2020">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control form-control-md" placeholder="Email">
              </div>

              <div class="form-group">
                <label for="gender">Gender</label>
                <select class="custom-select" name="gender" id="gender">
                  <option selected>Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>

              </div>
            </div>
        </form>
      </div>
    </main>


    <!-- COURSES PAGE -->
    <main class="courses hide">

      <!-- CREATE COURSE -->
      <!-- check if teacher acccount is approved -->
      <?php
      $tutor_id = $this->input->cookie('userId', true);
      $query = $this->db->get_where('users', array("user_id" => $tutor_id));
      if ($this->db->affected_rows() < 1) {
        echo 'You are not logged in';
        exit();
      } else {
        $res = $query->result_array();
        foreach ($res as $val) {
          $approved = $val['tutor_approved'];
        }
      }

      if ($approved == 0) {
        // tutor is not approved
      ?>
        <div class="createcourse__container box-shadow">
          <span class="createcourse__text">
            <i class="fa fa-sticky-note-o text-primary mr-4" aria-hidden="true"></i>
            <h2>Apply for approval</h2>
          </span>

          <br />

          <form action="<?php echo base_url(); ?>apply_for_approval" method="post">
            <div class="form-group">
              <input type="hidden" class="form-control" name="tutor_id" value="<?php echo $this->input->cookie('userId', true); ?>">
              <label for="">LinkedIn Profile URL</label>
              <input type="url" class="form-control" name="linkedin_link" required>
            </div>

            <div class="form-group">
              <label for="pwd">Link to CV</label>
              <input type="url" class="form-control" name="cv_link" required>
            </div>

            <button type="submit" class="btn btn-default" class="btn btn-primary">Apply for Approval</button>
          </form>


          <a href="">
            <button class="btn btn-lg btn__button"></button>
          </a>
        </div>
        </section>
      <?php

      } else if ($approved == 1) {
        // tutor approval is pending
      ?>
        <div class="createcourse__container box-shadow">
          <span class="createcourse__text">
            <i class="fa fa-sticky-note-o text-primary mr-4" aria-hidden="true"></i>
            <h3>Your application is under review. You will get a mail once it is approved</h3>
          </span>
          <!-- <a href="<?php echo base_url(); ?>createcourse">
          <button class="btn btn-lg btn__button">Create Your Course</button>
        </a> -->
        </div>
        </section>
      <?php
      } else if ($approved == 2) {
        // tutor is approved to post courses
      ?>
        <div class="createcourse__container box-shadow">
          <span class="createcourse__text">
            <i class="fa fa-sticky-note-o text-primary mr-4" aria-hidden="true"></i>
            <h3>Jump Into Course Creation</h3>
          </span>
          <a href="<?php echo base_url(); ?>createcourse">
            <button class="btn btn-lg btn__button">Create Your Course</button>
          </a>
        </div>
        </section>
      <?php
      }
      ?>

      <div class="info marginbt" id="info">
        <h3>Based on your experience, we think these resources will be helpful.</h3>
      </div>

      <!-- ENGAGING SECTION -->
      <section class="engaging box-shadow" id="engaging">
        <span class="engaging__img">
          <img src="<?php echo base_url(); ?>assets/img/laptop.png" alt="laptop">
        </span>
        <div class="engaging__body">
          <h4 class="opacify">Create an Engaging Course</h4>
          <p class="mt-4 opacify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius ut consequatur! Voluptates ducimus
            repudiandae tempora, consectetur quo nulla voluptate aperiam quod, repellendus dignissimos voluptatem ad dolore?
            Atque, numquam odit.
          </p>
          <a href="#" class="get-started mt-5">Get Started</a>
        </div>
      </section>

      <!-- AUDIENCE & VIDEO -->
      <section class="video mt-4" id="video">
        <div class="video__start">
          <span class="video__img">
            <img src="img/video.png" alt="video"></span>
          <div class="video__body">
            <h5 class="opacify">Get Started with Video</h5>
            <p class="mt-4 opacify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <a href="#" class="get-started d-block mt-3">Get Started</a>
            </p>
          </div>
        </div>

        <div class="video__audience">
          <span class="video__img">
            <img src="img/chat.png" alt="video">
          </span>
          <div class="video__body">
            <h5 class="opacify">Build Your Audience</h5>
            <p class="mt-4 opacify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              <a href="#" class="mt-3 d-block get-started">Get Started</a>
            </p>
          </div>
        </div>
      </section>

      <!-- NEWCOMER SECTION -->
      <section class="newcomer box-shadow mt-5 py-3" id="newcomer">
        <span class="newcomer__img">
          <img src="img/stopwatch.png" alt="laptop">
        </span>
        <div class="newcomer__body">
          <h4 class="opacify">Join the Newcomer Challenge!</h4>
          <p class="mt-4 opacify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem eius ut consequatur! Voluptates ducimus
            repudiandae tempora, consectetur quo nulla voluptate aperiam quod, repellendus dignissimos voluptatem ad dolore?
            Atque, numquam odit.
          </p>
          <a href="#" class="get-started mt-5">Get Started</a>
        </div>
      </section>

      <!-- RESOURCES SECTION -->
      <section class="resources marginbt" id="resources">
        <h3 class="opacify text-center">Have questions? Here are our most popular instructor resources.</h3>

        <ul class="resources__items mt-5">
          <li><a href="#">
              <i class="fa fa-play-circle-o mb-2" aria-hidden="true"></i>
              <h6>Test Video</h6>
              <p class="resources__items-text mt-3">
                Send us a sample video and get expert feedback.
              </p>
            </a></li>
          <li><a href="#">
              <i class="fa fa-thumbs-up  mb-2" aria-hidden="true"></i>
              <h6>Codac Community</h6>
              <p class="resources__items-text mt-3">
                Ask experienced instructors for advice, or browse answers.
              </p>
            </a></li>
          <li><a href="#">
              <i class="fa fa-book mb-2" aria-hidden="true"></i>
              <h6>Teaching Center</h6>
              <p class="resources__items-text mt-3">
                Learn about best practices for teaching on Udemy.
              </p>
            </a></li>
          <li><a href="#">
              <i class="fa fa-apple mb-2" aria-hidden="true"></i>
              <h6>Insight Courses</h6>
              <p class="resources__items-text mt-3">
                Get guided by video courses for Udemy instructors.
              </p>
            </a></li>
          <li><a href="#">
              <i class="fa fa-smile-o mb-2" aria-hidden="true"></i>
              <h6>Help and Support</h6>
              <p class="resources__items-text mt-3">
                Browse our Help Center or contact our support team.
              </p>
            </a></li>
        </ul>

      </section>

      <!-- READY SECTION -->
      <section class="ready text-center" id="ready">
        <h4 class="opacify mb-3">Are You Ready To Begin?</h4>
        <a href="createcourse.html">
          <button class="btn btn-lg btn__button">Create Your Course</button>
        </a>
      </section>
    </main>

    <!-- COMMUNICATION PAGE -->
    <main class="communication hide">

      <div class="communication__dashboard">
        <h2 class="mb-5 text-left pl-4">Q&A</h2>
        <h5 class="opacify">No questions Yet</h5>
        <p class="mt-3 opacify">
          Q&A is a forum where your students can ask questions, hear your responses, and respond to one another. Here’s where you’ll see your courses’ Q&A threads
        </p>
      </div>
    </main>

    <!-- Quiz -->
    <main class="quiz hide">
      <div class="quiz__dashboard">
        <div class="rows">
          <h2 class="mb-5 text-left pl-4">Set Quiz</h2>
          <div class="col-lg-6 col-md-8 mx-auto">
            <form action="" method="post" id="setQuiz">
              <div class="form-group">
                <label for="quiz-title">Title</label>
                <input type="text" name="quiz-title" id="quiz-title" class="form-control form-control-lg" placeholder="Quiz Title" required>
                <span class="text-danger d-block small mt-2 font-weight-bold" id="title-error"></span>
              </div>
              <div class="form-group d-none" id="questionType">
                <label for="question-type">Choose a Question Type</label>
                <select class="form-control" name="question-type" id="type" required>
                  <option value="none">--</option>
                  <option value="Multiple Choice">Multiple Choice</option>
                  <option value="Objective">Objective</option>
                </select>
                <span class="text-danger d-block small mt-2 font-weight-bold " id="type-error"></span>
              </div>
              <div class="form-group d-none" id="question">
                <div class="form-group">
                  <label for="question">Question</label>
                  <input type="text" name="quiz-question" id="quiz-question" class="form-control form-control-lg" placeholder="Enter Question" required>
                  <span class="text-danger d-block small mt-2 font-weight-bold " id="question-error"></span>
                </div>
              </div>
              <div class="form-group d-none" id="submitButton">
                <button type="submit" class="btn btn-md btn-success">
                  Submit
                </button>
              </div>
            </form>
            <div id="buttons-container">
              <button class="btn btn-md py-2 px-3 btn-danger" id="add-question">Add a Question</button>
              <div class="d-flex justify-content-between">
                <button class="btn btn-md d-none py-2 px-3 btn-primary" id="add-answer">Add Answer</button>
                <button class="btn btn-md d-none py-2 px-3 btn-success" id="done">Done</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- PERFORMANCE PAGE -->
    <main class="performance hide">
      <div class="performance__dashboard">
        <h1 class="mb-5 text-left">Overview</h1>
        <h4 class="mt-3 opacify">
          Get top insights about your performance
        </h4>

        <div class="performance__data box-shadow">
          <div class="performance__data-header">
            <div class="revenue">
              <span class="revenue__total ovr-small">Total revenue</span>
              <p class="revenue__price ovr-big">
                $0.00
              </p>
              <span class="revenue__month ovr-medium">
                $0.00 this month
              </span>
            </div>
            <div class="enrollment">
              <span class="enrollment__total ovr-small">Total enrollments</span>
              <p class="enrollment__num ovr-big">
                0
              </p>
              <span class="enrollment__total ovr-medium">
                0 this month
              </span>
            </div>
            <div class="rating">
              <span class="rating__text ovr-small">Instructor rating</span>
              <p class="rating__num ovr-big">
                0.00
              </p>
              <span class="rating__total ovr-medium">
                0 ratings this month
              </span>
            </div>
          </div>

          <div class="performance__display">
            <div class="performance__display-table">
              <p>No data to display</p>;
            </div>
          </div>
          <span class="report"> <a href="#">Revenue Report</a> </span>
        </div>

      </div>
    </main>

    <!-- TOOLS PAGE -->
    <main class="tools hide">
      <div class="tools__dashboard px-5">
        <h1 class="mb-5 text-left">Tools</h1>

        <div class="tools__box">

          <div class="card-box">
            <div class="card py-4 mr-4">
              <i class="fas fa-sticky-note text-danger"></i>
              <div class="card-body">
                <h4 class="card-title">Test Video</h4>
                <p class="card-text">
                  Get free feedback from Codac video experts
                  on your audio, video, and delivery.
                </p>
              </div>
            </div>
            <div class="card py-4">
              <i class="fas fa-chart-bar text-danger"></i>
              <div class="card-body">
                <h4 class="card-title">Marketplace Insights</h4>
                <p class="card-text">
                  Get Codac-wide market data to create successful courses.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>

    <!-- RESOURCE PAGE -->
    <main class="resource hide">
      <div class="resource__dashboard px-5">
        <h1 class="mb-5 text-left">Resources</h1>

        <div class="resource__box">
          <div class="card-box">
            <div class="card py-4 mr-4">
              <i class="fas fa-globe text-danger"></i>
              <div class="card-body">
                <h4 class="card-title">Instructor Community</h4>
                <p class="card-text">
                  Share your progress and ask other instrucors questions in our community.
                </p>
              </div>
            </div>
            <div class="card py-4">
              <i class="fas fa-comment-dots text-danger"></i>
              <div class="card-body">
                <h4 class="card-title">Help and Support</h4>
                <p class="card-text">
                  Can't find what you need? Reach out to our support team.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>

  </div>

  <!-- FOOTER SECTION -->
  <footer class="footer" id="footer">
    <div class="footer__copyright">
      <span class="logo"><a href="index.html"><img src="img/codaclogo.png" alt=""></a></span>
      <span class="ml-3 opacify">Copyright &copy; 2020 Codec, Inc.</span>
    </div>
    <ul class="copyright__links">
      <li class="mr-3"><a href="#">Terms</a></li>
      <li><a href="#">Privacy Policy and Cookie Policy</a></li>
    </ul>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/quiz.js"></script>
</body>

</html>
