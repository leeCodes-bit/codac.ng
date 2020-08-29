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
	<title>Codec | Reset Password</title>
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

	<section>
		<div class="container">
			<div class="row mt-4">

				<div class="col-md-6">

					<?php
					if (isset($length)) {
						echo '<p class="text-danger">' . $length . '</p>';
					}
					if (isset($match)) {
						echo '<p class="text-danger">' . $match . '</p>';
					}

					if (isset($_GET['success'])) {
						echo '<p class="text-success">Your password has been updated</p>';
					}
					if (isset($_GET['error'])) {
						echo '<p class="text-success">Passowr reset failed</p>';
					}
					?>

					<form method="post" action="<?php echo base_url(); ?>resetPasswordAction">
						<input type="hidden" value="<?php echo $userId; ?>" name="userId" />
						<input type="hidden" value="<?php echo $code; ?>" name="code" />
						<div class="form-group">
							<label for="password">New Password</label>
							<input type="password" name="password" class="form-control" id="password" required>
						</div>
						<div class="form-group">
							<label for="confirmPassword">Confirm New Password</label>
							<input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>

					</form>

				</div>
			</div>
		</div>
	</section>

	<?php include 'fragments/modals.php'; ?>

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
	</script>
</body>

</html>