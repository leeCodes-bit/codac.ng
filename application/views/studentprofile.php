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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/studentdashboard.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/footer.css">
	<title>Codac | Student Dashboard</title>
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
	<!-- DASHBOARD SECTION -->
	<section class="dashboard">
		<!-- SIDE BAR -->
		<?php include('fragments/student_profile_sidebar.php'); ?>
		<!-- DASHBOARD WIDGET -->
		<!-- <div class="dashboard__widget widget">
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Courses in Progress</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<h5 class="course-num">0</h5>
					<a href="#" class="p-2">
						Complete your Courses
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Completed Courses</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<p>Keep learning and become an Codac Graduate!</p>
					<a href="#" class="p-2">
						Resume Study
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>My Certificates</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<p>You have no Certificates yet. Purchase a Certificate to see it here</p>
					<a href="#" class="p-2">
						Resume Study
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Goals and Achievement</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<p>No Medal Yet</p>
					<a href="#" class="p-2">
						View Goals & Medals
					</a>
				</div>
			</div>
			<div class="dashboard__widget-card">
				<div class="dashboard__widget-card-header">
					<h5>Study Hours</h5>
				</div>
				<div class="dashboard__widget-card-body">
					<h4>0</h4>
					<h6>Hours Used</h6>
				</div>
			</div>
		</div> -->
		<!-- PROFILE WIDGET -->
		<div class="profile__widget widget">
			<h1 class="display-4 text-center">Profile</h1>
			<?php
			if (isset($_GET["success"])) {
				echo '
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Great! </strong> Your changes were updated.
					</div>';
			}

			if (isset($_GET["error"])) {
				echo '
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<strong>Opps! </strong> No changes were found.
					</div>';
			}
			?>
			<form action="<?php echo base_url(); ?>editStudentProfileAction" method="post">

				<input type="hidden" name="userId" value="<?php echo $userId; ?>" />
				<div class="form-group form-bg">
					<label for="about">Personal Profile</label>
					<textarea style="resize: none;text-align: initial;" placeholder="Tell us a bit about yourself...." name="personalProfile" class="about-info" id="about"><?php if (isset($personalProfile)) {
																																																																																		echo $personalProfile;
																																																																																	} ?></textarea>
				</div>

				<div class="form-details form-bg">
					<div class="form-details-container">
						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" name="firstname" id="firstname" class="form-control form-control-md" placeholder="First Name" required value="<?php if (isset($firstname)) {
																																																																									echo $firstname;
																																																																								} ?>">
						</div>

						<div class="form-group">
							<label for="lastname">Last Name</label>
							<input type="text" name="lastname" id="lastname" class="form-control form-control-md" placeholder="Last Name" required value="<?php if (isset($lastname)) {
																																																																							echo $lastname;
																																																																						} ?>">
						</div>

						<div class="form-group">
							<label for="country">Country</label>
							<input type="text" name="country" id="country" class="form-control form-control-md" placeholder="Country" value="<?php if (isset($country)) {
																																																																	echo $country;
																																																																} ?> ">
						</div>

						<div class="form-group">
							<label for="nationality">Nationality</label>
							<input type="text" name="nationality" id="nationality" class="form-control form-control-md" placeholder="Nationality" value="<?php if (isset($nationality)) {
																																																																							echo $nationality;
																																																																						} ?>">
						</div>

						<div class="form-group">
							<label for="dob">Date of birth</label>
							<input type="date" name="dateOfBirth" id="dob" class="form-control form-control-md" placeholder="eg: 11/01/2020" value="<?php if (isset($dateOfBirth)) {
																																																																				echo $dateOfBirth;
																																																																			} ?>">
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control form-control-md" placeholder="Email" required value="<?php if (isset($email)) {
																																																																			echo $email;
																																																																		} ?>" readonly>
						</div>

						<div class="form-group">
							<label for="gender">Gender</label>
							<select class="custom-select" name="gender" id="gender">
								<option value=""></option>
								<option value="male" <?php
																			if (isset($gender)) {
																				if ($gender == "male") {
																					echo 'selected';
																				}
																			}
																			?>>Male</option>
								<option value="female" <?php
																				if (isset($gender)) {
																					if ($gender == "female") {
																						echo 'selected';
																					}
																				}
																				?>>Female</option>
							</select>
						</div>

						<div class="form-group">
							<label for="subscribeToMails">Subscribe to Newsletter</label>
							<select class="custom-select" name="subscribeToMails" id="subscribeToMails">
								<option value=""></option>
								<option value="yes" <?php
																		if (isset($subscribeToMails)) {
																			if ($subscribeToMails == "yes") {
																				echo 'selected';
																			}
																		}
																		?>>Yes</option>
								<option value="no" <?php
																		if (isset($subscribeToMails)) {
																			if ($subscribeToMails == "no") {
																				echo 'selected';
																			}
																		}
																		?>>No</option>
							</select>
						</div>

					</div>

					<button type="submit" class="btn btn-primary">Save Changes</button>
					&nbsp; &nbsp;
					<a href="<?php echo base_url(); ?>profilePicture">
						<button type="button" class="btn btn-success">Profile Picture</button>
					</a>
			</form>

		</div>

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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/nav.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/studentdash.js"></script>

</body>

</html>