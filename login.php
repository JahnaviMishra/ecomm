<?php 
	
	include('includes/database.php');
	session_start();
	if (isset($_SESSION['id'])) {
		echo "<script>window.location.href='index.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Imploy Services | Account</title>
<link rel="icon" type="icon" href="images/3.png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sportify template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<?php include('includes/navbar.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/classes.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Account</h1></div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact custom_container_wrap">
		<div class="container">
				
				<!-- Contact Content -->
				
					
						
							<div class="row contact_row">
								<div class="col-xl-6" style="padding: 80px; margin-top: 30px;">
									
									<div class="contact_text" style=" background-color: #F3F4F8; padding: 10px">
										<div class="contact_title text-center">Login</div><br>
										<form class="contact_form" method="post" enctype="multipart/form-data" action="user_account.php">
											<div class="form-group">
												<input type="email" name="email" placeholder="Enter email" required class="form-control">
											</div>
											<div class="form-group">
												<input type="password" name="password" placeholder="Enter Password" required class="form-control">
											</div>
											<div class="form-group">
												<input type="submit" class="btn button home_button" style="width: 100%; background-color: #FF0E3B; color: white" name="login" class="form-control" value="Login">
											</div>
										</form>
									</div>
								</div>
								<div class="col-xl-6" style="padding: 80px; margin-top: 30px;">
									
									<div class="contact_info_list" style=" background-color: #F3F4F8; padding: 10px">
										<form class="contact_form" method="post" enctype="multipart/form-data" action="user_account.php">
											<div class="contact_title text-center">Register</div><br>
											<div class="form-group">
												<input type="text" name="name" placeholder="Enter name" required class="form-control">
											</div>
											<div class="form-group">
												<input type="text" name="mobile" placeholder="Enter mobile number" required class="form-control">
											</div>
											<div class="form-group">
												<input type="email" name="email" placeholder="Enter email" required class="form-control">
											</div>
											<div class="form-group">
												<input type="password" name="password" placeholder="Enter Password" class="form-control">
											</div>
											<div class="form-group">
												<input type="submit" name="register" class="btn button home_button" style="width: 100%; background-color: #190A49; color: white" class="form-control" value="Register">
											</div>
										</form>
									</div>
								</div>
							</div>
			</div>
	</div>

<?php include('includes/footer.php'); ?>