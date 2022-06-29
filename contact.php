<?php 
	
	include('includes/database.php');
	session_start();
?>

<?php

	if (isset($_POST['sendmessage'])) {
		$cuname = $_POST['name'];
		$cuemail = $_POST['email'];
		$cusubject = $_POST['subject'];
		$cumessage = $_POST['message'];

		$sql = "INSERT into contactus (cuname, cuemail, cusubject, cumessage) values ('$cuname', '$cuemail', '$cusubject', '$cumessage')";
		$result = mysqli_query($con,$sql);
		if ($result) {
			echo "<script> alert('Query submited successfully!');window.location.href='contact.php';</script>";
		} else {
			echo "<script> alert('Error. Something went wrong!');window.location.href='contact.php';</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Imploy Services | Contact</title>
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
			<div class="home_title"><h1>Contact</h1></div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact custom_container_wrap">
		<div class="container">
			<div class="row" style="padding: 20px">
				
				<!-- Contact Content -->
				
					<div class="contact_content">
						<div>
							<div class="contact_logo"><img src="images/logo_1.png" alt=""></div>
							<div class="contact_title">Our Contact Info</div>
							<div class="row contact_row">
								<div class="col-xl-6">
									<div class="contact_text">
										<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="contact_info_list">
										<ul>
											<li>Main Str, no 23, New York</li>
											<li>+546 990221 123</li>
											<li>gymsportify@contact.com</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="contact_form_container">
								<form method="post" class="contact_form">
									<div class="row contact_form_row">
										<div class="col-md-6"><input type="text" class="contact_input" name="name" placeholder="Your name" required="required"></div>
										<div class="col-md-6"><input type="email" class="contact_input" name="email" placeholder="Your email" required="required"></div>
										<div class="col-12"><input type="text" class="contact_input" name="subject" placeholder="Subject"></div>
										<div class="col-12"><textarea class="contact_input contact_textarea" name="message" placeholder="Message" required="required"></textarea></div>
									</div>
									<button type="submit" name="sendmessage" class="contact_button">send message</button>
								</form>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>