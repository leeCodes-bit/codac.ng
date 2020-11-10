<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name='keywords' content='Codac, E-learning,favourite courses' />
  <meta name='description' content='E-learning site, where registered students learn their favourite courses at their own pace' />


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

  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css" />


  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nav.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/search.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer.css">
  <title>Codec | E-learning</title>
</head>

<body id="home">

  <!-- HEADER SECTION -->
  <?php
  if ($this->input->cookie('userId', true) != '') {
    include('fragments/std_online_header.php');
  } else {
    include('fragments/std_offline_header.php');
  }
  ?>

  <!-- TOTAL RESULTS -->
  <div class="total px-5 mt-5">
    <div class="row">
      <div class="col-12">
        <h1>
          <span class="total-course">
            2000
          </span>
          results for "php"
        </h1>
      </div>
    </div>
  </div>

  <!-- FILTER  -->
  <section class="filter px-5 my-3">
    <button class="filter--button btn btn-md px-3 btn-outline-primary">
      Filter
    </button>
    <div class="form-group filter-review">
      <select class="form-control px-3" name="review" id="review">
        <option value="Most Reviewed">Most Reviewed</option>
        <option value="Newest">Newest</option>
        <option value="Most Relevant">Most Relevant</option>
      </select>
    </div>
  </section>

  <!-- COURSES SECTION -->
  <section class="courses px-5 my-5">
    <aside class="course--sidebar py-2">
      <div class="levels">
        <h4>Level</h4>
        <div class="form-group">
          <label for="all-levels">
            <input type="checkbox" name="all-levels" id="all-levels">
            <span>All Levels </span>
            (<span class="all-levels-course">1000</span>)
          </label>
        </div>
        <div class="form-group">
          <label for="beginner">
            <input type="checkbox" name="beginner" id="beginner">
            <span>Beginner </span>
            (<span class="beginner-course">400</span>)
          </label>
        </div>
        <div class="form-group">
          <label for="intermediate">
            <input type="checkbox" name="intermediate" id="intermediate">
            <span>Intermediate </span>
            (<span class="intermediate-course">200</span>)
          </label>
        </div>
        <div class="form-group">
          <label for="expert">
            <input type="checkbox" name="expert" id="expert">
            <span>Expert</span>
            (<span class="expert">100</span>)
          </label>
        </div>
      </div>
      <div class="price mt-3">
        <h4>Price</h4>
        <div class="form-group">
          <label for="paid">
            <input type="checkbox" name="paid" id="paid">
            <span>Paid</span>
            (<span class="paid">210</span>)
          </label>
        </div>
        <div class="form-group">
          <label for="free">
            <input type="checkbox" name="free" id="free">
            <span>Free</span>
            (<span class="free">43</span>)
          </label>
        </div>
      </div>
    </aside>
    <div class="courses--grid py-2">
      <div class="courses--grid-item">
        <img src="<?php echo base_url(); ?>assets/img/contact.png" alt="">
        <div class="body">
          <h5>Lorem ipsum dolor sit amet consectetur.</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, tenetur nam excepturi sapiente hic accusamus?
          </p>
          <div class="small">
            <span class="hours">10hrs </span>
            <b> . </b>
            <span class="lectures">40 Lectures</span>
            <b> . </b>
            <span>All Levels</span>
          </div>
        </div>
      </div>
      <div class="courses--grid-item">
        <img src="<?php echo base_url(); ?>assets/img/help.jpg" alt="">
        <div class="body">
          <h5>Lorem ipsum dolor sit amet consectetur.</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, tenetur nam excepturi sapiente hic accusamus?
          </p>
          <div class="small">
            <span class="hours">10hrs </span>
            <b> . </b>
            <span class="lectures">40 Lectures</span>
            <b> . </b>
            <span>All Levels</span>
          </div>
        </div>
      </div>
      <div class="courses--grid-item">
        <img src="<?php echo base_url(); ?>assets/img/virtuallearning.fw.png" alt="">
        <div class="body">
          <h5>Lorem ipsum dolor sit amet consectetur.</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, tenetur nam excepturi sapiente hic accusamus?
          </p>
          <div class="small">
            <span class="hours">10hrs </span>
            <b> . </b>
            <span class="lectures">40 Lectures</span>
            <b> . </b>
            <span>All Levels</span>
          </div>
        </div>
      </div>
      <div class="courses--grid-item">
        <img src="<?php echo base_url(); ?>assets/img/digitalclass.fw.png" alt="">
        <div class="body">
          <h5>Lorem ipsum dolor sit amet consectetur.</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae, tenetur nam excepturi sapiente hic accusamus?
          </p>
          <div class="small">
            <span class="hours">10hrs </span>
            <b> . </b>
            <span class="lectures">40 Lectures</span>
            <b> . </b>
            <span>All Levels</span>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- PAGINATION SECTION -->
  <section aria-label="Page navigation">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
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


  <?php include 'fragments/modals.php'; ?>

  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/search.js"></script>
  </script>
</body>

</html>
