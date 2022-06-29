<?php 
	
	include('includes/database.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Imploy Services | About</title>
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
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>
<body>

<div class="super_container">
	
	<?php include('includes/navbar.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>about us</h1></div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-8">
					<div class="about_content">
						<div class="section_title_container">
							<div class="section_subtitle">aerobics program</div>
							<div class="section_title"><h1>about sportify</h1></div>
						</div>
						<div class="about_text">
							<p>Aenean auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis lacinia. Vestibulum nec justo lectus. In hac habitasse platea dictumst. Proin vulputate rhoncus nibh eu vehicula. Donec vitae laoreet quam, ac feugiat nibh. Aenean auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus.</p>
						</div>
						<div class="button about_button"><a href="#">read more</a></div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-4">
					<div class="about_image">
						<img src="images/about_2.png" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Quote -->

	<div class="quote">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="quote_content d-flex flex-row align-items-center justify-content-center text-center">
						<p>“Train like a beast look like a beauty”</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>