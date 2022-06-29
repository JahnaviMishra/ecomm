<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/slider.php'); ?>

	<!-- Intro -->

	<div class="intro">
		<div class="intro_boxes_wrap">
			<div class="d-flex flex-row align-items-start justify-content-start flex-wrap">
				
				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<img src="images/1.jpg" width="100%">
				</div>

				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<img src="images/3.jpg" width="100%">
				</div>

				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<img src="images/2.jpg" width="100%">
				</div>

			</div>
		</div>
	</div>


	<!-- Pricing -->

	<div class="pricing">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_3.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">our service</div>
						<div class="section_title"><h1>pricing</h1></div>
					</div>
					<div class="pricing_slider_container">
						<div class="owl-carousel owl-theme pricing_slider">
							<?php
							$sql = "SELECT * from services order by sid desc limit 3";
							$result = mysqli_query($con,$sql);
							while($get = mysqli_fetch_array($result)){
							?>
							<!-- Slide -->
							<div>
								<div class="pricing_box text-center">
									<a><img src="images/services/<?= $get['simage'] ?>" height="320px" alt=""></a>
									<div class="pricing_title_box">
										<div>
											<div class="pricing_name"><h3 style="color: white"><a>
												<center><?= substr($get['sname'],0,40) ?></center></a></h3>
											</div>
											<div class="pricing_price">&#8377;<?= $get['sprice1'] ?></center></div>
										</div>
									</div>
									<div class="pricing_content">
										<div class="button pricing_button ml-auto mr-auto"><a href="services?id=<?= $get['sid'] ?>">Book Service</a></div>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</div>
					<center><div class="quote_author text-center button home_button"><a href="services">– Check More</a></div></center>
				</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>