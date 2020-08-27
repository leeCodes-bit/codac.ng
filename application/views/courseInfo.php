<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name='keywords' content='Codec, E-learning,favourite courses' />
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



	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<title>Codac | Course Info</title>
</head>
<body>
<body id="home">
	<!-- SPINNER -->
	<div class="loader">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>
	<!-- HEADER SECTION -->
  <?php 
    if ($this->input->cookie('userId', true) != '') {
      include('fragments/std_online_header.php');
    } else {
      include('fragments/std_offline_header.php');
    }
  ?>
		<div class="container">
			<div class="banner">
				<h1>The Complete Financial Analyst Course 2020</h1>
				<p>Excel, Accounting, Financial Statement Analysis, Business Analysis, Financial Math, PowerPoint: Everything is Included!</p>
				<button class="btn btn-primary">Bestseller</button>
				<div class="ratings">
				<span>4.5</span>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<span> 43,573 ratings 235,040 students</span>
				</div>
				<div>
				<i class="fa fa-cog" aria-hidden="true"><span> 	Last Updated 29/07/2020</span></i>
				<span> <i class="fa fa-globe" aria-hidden="true"></i> English</span>
				<span><a href="">More</a></span>
				</div>
				<div class="btn">
					<button class="btn">Wishlist <span><i class="fa fa-heart" aria-hidden="true"></i></span></button>
					<button class="btn">Share <span><i class="fa fa-share" aria-hidden="true"></i></span></button>
					<button class="btn">Gift Course</button>
				</div>
			</div>

			<!-- Section one -->
			<div class="section-one course-benefits">
				<h3>What you stand to learn</h3>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<a class="btn-primary">Show more <span> <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
			</div>
			<div class="section-two">
				<h3>Requirements</h3>
				<ul>
					<li>Absolutely no experience is required. We will start from the basics and gradually build up your knowledge. Everything is in the course.</li>
					<li>You will need Microsoft Excel 2010, 2013, 2016, or 2020</li>
					<li>You will need Microsoft Excel 2010, 2013, 2016, or 2020</li>
				</ul>
			</div>
		</div>
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
					<!-- <img src="<?php echo base_url(); ?>assets/img/footer-triangles.png" alt="footer bg" class="footer__bg"> -->
					<div class="container">
						<div class="nav-container">
							<h6 class="footer__header one">ABOUT CODEC
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum lolo</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
							</ul>
						</div>
						<div class="nav-container">
							<h6 class="footer__header three">LEARNING
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum </a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum </a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum </a>
								</li>

							</ul>
						</div>
						<div class="nav-container">
							<h6 class="footer__header two">MORE
								<hr>
							</h6>
							<ul class="footer__links">
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Lorem ipsum</a>
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
								<!-- <li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-instagram" aria-hidden="true"></i><span class="ml-2">Instagram</span>
									</a>
								</li> -->
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
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="fa fa-envelope" aria-hidden="true"></i><span class="ml-2">Customer Support</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__copyright text-light py-3">

					<ul class="copyright__links">
						<h5 class="title">CODEC</h5>
						<li class="nav-item">
							<a href="#" class="nav-link">
								&copy; Codec 2019
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


	<?php include 'fragments/modals.php'; ?>

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src=" https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
	</script>
</body>

</html>
