<?php 
	
	include('includes/database.php');
	session_start();
?>

<?php

$msg = "";

if (isset($_POST['apply'])) {

	$ename = $_POST['name'];
	$emobile = $_POST['mobile'];
	$eaddress = $_POST['address'];
	$ecity = $_POST['city'];
	$edistrict = $_POST['district'];
	$estate = $_POST['state'];
	$epincode = $_POST['pincode'];

	$check = "SELECT * from employeregistration where emobile = '$emobile'";
	$fetch = mysqli_query($con,$check);
	$count = mysqli_num_rows($fetch);
	if ($count > 0) {
		$msg = "<h3 class='text-center' style='color: orange'>Mobile number already exists. Please try with different mobile number!</h3><br>";
	} else {

		$sql = "INSERT INTO employeregistration (ename, emobile, eaddress, ecity, edistrict, estate, epincode) values ('$ename', '$emobile', '$eaddress', '$ecity', '$edistrict', '$estate', '$epincode')";
		$result = mysqli_query($con,$sql);
		if ($result) {
			$msg = "<h3 class='text-center' style='color: green'>Form submitted successfully!</h3><br>";
		} else {
			$msg = "<h3 class='text-center' style='color: red'>Error. Something went wrong!</h3><br>";
		}

	}
	
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Imploy Services | Join Us</title>
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
<link rel="stylesheet" type="text/css" href="styles/classes.css">
<link rel="stylesheet" type="text/css" href="styles/classes_responsive.css">
</head>
<body>

<div class="super_container">
	
	<?php include('includes/navbar.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/classes.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Join Us</h1></div>
		</div>
	</div>


	<!-- CTA -->

	<div class="cta">
		<?= $msg ?>
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="cta_content">
						<h3 class="text-center">Join Us as a Employee</h3>
						<div class="cta_text text-center">
							<form method="post" enctype="multipart/form-data">
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Enter your full name" required>
								</div>
								<div class="form-group">
									<input class="form-control" maxlength="10" type="text" name="mobile" placeholder="Enter your mobile number" required>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="address" placeholder="Enter your address" required>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="city" placeholder="Enter your city" required>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="district" placeholder="Enter your district" required>
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="state" placeholder="Enter your state" required>
								</div>
								<div class="form-group">
									<input class="form-control" maxlength="6" type="text" name="pincode" placeholder="Enter your pincode" required>
								</div>

								<div class="form-group">
									<input type="submit" class="btn button home_button" name="apply" value="Submit Form">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include('includes/footer.php'); ?>