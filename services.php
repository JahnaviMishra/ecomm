<?php 
	
	include('includes/database.php');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Imploy Services | Services</title>
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
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>

<div class="super_container">
	
<?php include('includes/navbar.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/service1.png" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>services</h1></div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<?php
						if (isset($_POST['search'])) {
						$location = $_POST['location'];
						$search = "SELECT * from services where slocation like '%$location%' order by sid desc";
						$find = mysqli_query($con,$search);
						$count = mysqli_num_rows($find);

				?>
				<!-- Blog Posts -->
				<div class="col-lg-12">
					<div class='blog_post_title'><b>Search Location</b>:- <?= $location ?></div><br>
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between flex-wrap">
						<?php
							if ($count > 0) {

							while($rows = mysqli_fetch_array($find)){ 
							?>
								<!-- Blog Post -->
								<div class="blog_post">
									<div class="blog_post_image">
										<a href="service-details?id=<?= $rows['sid'] ?>"><img src="images/services/<?= $rows['simage'] ?>" width="480px" height="320px" alt=""></a>
									</div>
									<div class="blog_post_content">
										<div class="blog_post_title"><h3><a href="service-details?id=<?= $rows['sid'] ?>"><center><?= $rows['sname'] ?></center></a></h3></div>
										<div class="blog_post_text" style="color: black">
											<p><center><b>Available Locations:</b> <span style="text-transform: uppercase;"><?= $rows['slocation'] ?></span></center></p>
											<p><center>&#8377;<?= $rows['sprice1'] ?> &nbsp;-&nbsp;&#8377;<?= $rows['sprice3'] ?></center></p>
										</div>
									</div>
								</div>
							<?php
								}	
							} else{
								echo "<center><h3 class='text-danger'>Currently there is no services at your location</h3></center>";
							}
						} else {
							$sql = "SELECT * from services order by sid desc";
							$result = mysqli_query($con,$sql);
						?>
				<div class="col-lg-12">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between flex-wrap">
						<?php
							while($get = mysqli_fetch_array($result)){
						?>
						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="service-details?id=<?= $get['sid'] ?>"><img src="images/services/<?= $get['simage'] ?>" width="480px" height="320px" alt=""></a>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="service-details?id=<?= $get['sid'] ?>"><center><?= $get['sname'] ?></center></a></h3></div>
								<div class="blog_post_text" style="color: black">
									<p><center><b>Available Locations:</b> <span style="text-transform: uppercase;"><?= $get['slocation'] ?></span></center></p>
											<p><center>&#8377;<?= $get['sprice1'] ?> &nbsp;-&nbsp;&#8377;<?= $get['sprice3'] ?></center></p>
								</div>
							</div>
						</div>
						
						<?php
							}
						}
						?>
					</div>

				</div>

				

			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>