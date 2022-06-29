<?php 
	
	include('includes/database.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Imploy Services | Book Service</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="super_container">
	
	<?php include('includes/navbar.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/classes.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Service</h1></div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact custom_container_wrap">
		<div class="container">
			<div class="row" style="padding: 20px">
				
				<!-- Contact Content -->
				
					<div class="contact_content">
						<div>
							<?php
							if (isset($_GET['id'])) {
								if ($_GET['id'] == "") {
									echo "<script>window.location.href='services';</script>";
								} else {
									$sid = $_GET['id'];
									$sql = "SELECT * from services where sid = '$sid'";
									$result = mysqli_query($con,$sql);
									$rows = mysqli_fetch_array($result);
								}
								
							} else {
								echo "<script>window.location.href='services';</script>";
							}
							?>
							<div class="row contact_row">
								<div class="col-xl-6">
									<div class="contact_text">
										<img width="580px" height="" src="images/services/<?= $rows['simage'] ?>" alt="">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="contact_info_list">
										
										<div class="blog_post_title">
											<h3><a class="text-dark"><?= $rows['sname'] ?></a></h3><br>
											<h4><a class="text-secondary"><b>Available Location:</b> <?= $rows['slocation'] ?></a></h4><br><br>
											<h3 id="oldPrice">&#8377; <?= $rows['sprice1'] ?>&nbsp;-&nbsp;&#8377;<?= $rows['sprice3'] ?></h3>
											<h3 id="newPrice">ksdnsdn</h3><br>
											<h4>
												
											</h4><br>
											<?php
											if (isset($_SESSION['id']))
											{
											?>
											<form method="post" enctype="multipart/form-data" id="myForm" action="checkout">
												<div class="form-group">
													<label class="text-dark" style="font-weight: bold; font-size: 22px">Select Service Type:</label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="plan" class="form-check-input text-dark" onclick="func();" value="<?= $rows['sprice1'] ?>" required><b class="text-dark">Daily Basis</b>
													</label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="plan" class="form-check-input text-dark" onclick="func();" value="<?= $rows['sprice2'] ?>" required><b class="text-dark">Monthly Basis</b>
													</label>
												</div>
												<div class="form-check-inline">
													<label class="form-check-label">
														<input type="radio" name="plan" class="form-check-input text-dark" onclick="func();" value="<?= $rows['sprice3'] ?>" required><b class="text-dark">Yearly Basis</b>
													</label>
												</div>
												<input id="planPrice" type="hidden" name="planPrice" value="none">
												<input id="plantype" type="hidden" name="plantype" value="none">
												<br><br>
												<input type="hidden" name="sid" value="<?= $sid ?>" readonly>
												<button class="btn" id="booknow" name="submit" style="width: 100%; background-color: #FF0E3B; color: white;">Book Now</button>
											</form>
											<?php
											} else {
											?>
											<a href="userlogin"><button class="btn home_button" style="width: 100%; background-color: #190A49; color: white;">Login First</button></a>
										<?php } ?>
											<br>
											<h3>Short Details</h3>
											<p><?= $rows['sdetails'] ?></p>
										</div>

										
									</div>
								</div>
							</div><hr>
							<div class="contact_form_container">
								<center>
									<h3>Description</h3><br>
								<p><?= $rows['sdescription'] ?></p>
								</center>
							</div>
							<hr>
						</div>
					</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>

<script type="text/javascript">
	jQuery('#newPrice').hide();
	jQuery('#booknow').display=none();
	function func(){

		var type = document.getElementsByName('plan');

		if (type[0].checked) {
			var value = type[0].value;
			var dvalue = parseInt(value)+200;
			jQuery('#oldPrice').hide();
			jQuery('#newPrice').show();
			jQuery('#newPrice').html('&#8377; '+value+'&nbsp;<del>&#8377;'+dvalue+'</del>');
			jQuery('#planPrice').val(value);
			jQuery('#plantype').val("Daily");
		}
		else if (type[1].checked) {
			var value = type[1].value;
			var dvalue = parseInt(value)+500;
			jQuery('#oldPrice').hide();
			jQuery('#newPrice').show();
			jQuery('#newPrice').html('&#8377; '+value+'&nbsp;<del>&#8377;'+dvalue+'</del>');
			jQuery('#planPrice').val(value);
			jQuery('#plantype').val("Monthly");
		}
		else if (type[2].checked) {
			var value = type[2].value;
			var dvalue = parseInt(value)+3000;
			jQuery('#oldPrice').hide();
			jQuery('#newPrice').show();
			jQuery('#newPrice').html('&#8377; '+value+'&nbsp;<del>&#8377;'+dvalue+'</del>');
			jQuery('#planPrice').val(value);
			jQuery('#plantype').val("Yearly");
		}
	}
	
</script>