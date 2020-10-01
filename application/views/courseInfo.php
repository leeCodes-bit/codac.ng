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



	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/info.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nav.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer.css">
	<title>Codac | Course Info</title>
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
	<section class="container-fluid bg-dark px-3 py-5">
		<div class="hero">
			<div class="row">
				<div class="col-lg-8 col-md-7 col-sm-12 text-light mb-4">
					<h1>The Complete Financial Analyst Course 2020</h1>
					<p>Excel, Accounting, Financial Statement Analysis, Business Analysis, Financial Math, PowerPoint: Everything is Included!</p>
					<button class="btn btn-lg btn-primary">Bestseller</button>
					<div class="ratings mt-3">
						<span>4.5</span>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<span> 43,573 ratings 235,040 students</span>
					</div>
					<div>
						<i class="fa fa-cog" aria-hidden="true"><span> Last Updated 29/07/2020</span></i>
						<span> <i class="fa fa-globe" aria-hidden="true"></i> English</span>
					</div>
					<div class="btn-group mt-3">
						<a href="#" class="btn btn-outline-light btn-lg mr-3">
							Wishlist
							<span>
								<i class="fa fa-heart-o" aria-hidden="true"></i>
							</span>
						</a>
						<a href="#" class="btn btn-outline-light btn-lg">
							Share
							<span>
								<i class="fa fa-share text-primary" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-5 col-sm-12 mt-sm-4">
					<div class="card border-primary">
						<img src="<?php echo base_url(); ?>assets/img/digitalclass.fw.png" alt="Course Illustration">
						<div class="card-body">
							<h4 class="card-price h2 mb-4">$342.66</h4>
							<a href="#" class="card-button btn btn-danger btn-lg w-100 py-3">Add to cart</a>
							<a href="#" class="card-button btn btn-outline-primary btn-lg w-100 mt-3 py-3">Buy now</a>
						</div>
						<div class="card-footer">
							<h5 class="font-weight-bold">This course includes:</h5>
							<div class="card-footer-text">
								<p class="lead">Certificate of completion</p>
								<p class="lead">Full lifetime access</p>
								<p class="lead">80 hours on-demand video</p>
								<p class="lead">1 downloadable resource</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section one -->
	<div class="container mx-auto benefits mt-3 col-lg-9 col-md-10 col-sm-11">
		<div class="jumbotron">
			<h3>What you stand to learn</h3>
			<div class="benefits--outline mt-3">
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
				<p><i class="fa fa-check" aria-hidden="true"></i><span> Work comfortably with Microsoft Excel</span></p>
			</div>
		</div>

		<div class="content mt-3">
			<h3>Course content</h3>
			<div id="accordion" class="mt-3 accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn font-weight-bold" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Course Introduction
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn font-weight-bold collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Software Tools Setup
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn font-weight-bold collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								First Steps
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
							<li><a href="#">Lorem ipsum dolor sit amet.</a></li>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="requirement mt-3">
			<h3>Requirements</h3>
			<ul class="mx-0 px-4">
				<li>Absolutely no experience is required. We will start from the basics and gradually build up your knowledge. Everything is in the course.</li>
				<li>You will need Microsoft Excel 2010, 2013, 2016, or 2020</li>
				<li>You will need Microsoft Excel 2010, 2013, 2016, or 2020</li>
			</ul>
		</div>

		<div class="review py-3">
			<h3>Reviews</h3>
			<div class="review--form">
				<form action="" method="post" class="d-flex align-items-center">
					<input type="search" name="searchReview" id="searchReview" class="form-control form-control-lg" placeholder="Search reviews">
					<button type="submit" class="btn btn-md btn-primary">Search</button>
				</form>
			</div>
			<div class="review--comments mt-3">
				<div class="review--comments-user">
					<div class="avatar">
						<img src="<?php echo base_url(); ?>assets/img/user.jpg" alt="user">
					</div>
					<div class="review--comments-body">
						<h5 class="my-0 py-0">Donnie Yen</h5>
						<p class="data-posted my-0 py-0">3 weeks ago</p>
						<p class="comment">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, quisquam exercitationem similique culpa sunt dolorem tenetur non numquam iste voluptatum?
						</p>
					</div>
				</div>
				<div class="review--comments-user">
					<div class="avatar">
						<img src="<?php echo base_url(); ?>assets/img/user.jpg" alt="user">
					</div>
					<div class="review--comments-body">
						<h5 class="my-0 py-0">Park Shin Hye</h5>
						<p class="data-posted my-0 py-0">1 week ago</p>
						<p class="comment">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, voluptatum?
						</p>
					</div>
				</div>
				<div class="review--comments-user">
					<div class="avatar">
						<img src="<?php echo base_url(); ?>assets/img/user.jpg" alt="user">
					</div>
					<div class="review--comments-body">
						<h5 class="my-0 py-0">John Doe</h5>
						<p class="data-posted my-0 py-0">1 week ago</p>
						<p class="comment">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, voluptatum?
						</p>
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