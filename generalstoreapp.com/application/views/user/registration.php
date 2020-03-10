<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"  crossorigin="anonymous">

	<!-- jQuery library -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body class="bg-grey">

<section class="mt-5">
	<div class="container">
		<div class="text-center bg-light p-5 br-15" style="max-width: 400px;margin-left: auto;margin-right: auto;">
			<div>
				<h2 class="mb-4">User Registration</h2>
				<form method="post" action="<?php echo site_url('user/registration'); ?>">
					<div class="form-group">
						<?php if ($this->session->flashdata('user_status')) {
							echo $this->session->flashdata('user_status');
						} ?>
					</div>
					<div class="form-group">
						<input type="text" name="username" placeholder="example_name" required="" class="form-control" title="Username">
					</div>
					<div class="form-group">
						<input type="text" name="name" placeholder="Full Name" required="" class="form-control" minlength="3" maxlength="20" title="Full Name">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="************" required="" class="form-control">
					</div>
					<div>
						<button class="btn btn-theme" type="submit">Submit</button><br>
						<a href="<?php echo site_url('user/login'); ?>">Already Registrer, Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>