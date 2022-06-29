<?php 
	
	include('includes/database.php');
	session_start();
	$cid = $_SESSION['id'];
	if (!isset($_SESSION['id'])) {
		echo "<script>window.location.href='home';</script>";
	}

	if (isset($_POST['sid'])) {
		if ($_POST['sid'] == "") {
			echo "<script>window.location.href='services';</script>";
		} else {
			$sid = $_POST['sid'];
			$amount = $_POST['planPrice'];
			$plan = $_POST['plantype'];
			$sql = "SELECT * from services where sid = '$sid'";
			$result = mysqli_query($con,$sql);
			$rows = mysqli_fetch_array($result);
			$id = $rows['sid'];
			$sname = $rows['sname'];
			$slocation = $rows['slocation'];
		}
		
	} else {
		echo "<script>window.location.href='services';</script>";
	}
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

<style type="text/css">
	.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.containers {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.contact_button {
  width: 100%;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<div class="super_container">
	
	<?php include('includes/navbar.php'); ?>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/classes.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Service- CHECKOUT</h1></div>
		</div>
	</div>


	<div class="contact custom_container_wrap">
		<div class="containers"><br>
			<div class="row">
		  		<div class="col-75">
				    <div class="containers">
				      	<form action="userpay" method="post">
				      
					        <div class="row">
					          	<div class="col-50">
						            <h3>Delivery Address</h3><br><br>
						            <input type="hidden" name="sid" value="<?= $id ?>">
						            <input type="hidden" name="cid" value="<?= $cid ?>">
						            <input type="hidden" name="splantype" value="<?= $plan ?>">
						            <input type="hidden" name="amount" value="<?= $amount ?>">
						            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
						            <input type="text" id="fname" name="name" placeholder="R. K. Singh" required>
						            <label for="email"><i class="fa fa-envelope"></i> Email</label>
						            <input type="text" id="email" name="email" placeholder="rk@example.com" required>
						            <label for="mobile"><i class="fa fa-mobile"></i> Mobile</label>
						            <input type="text" id="email" name="mobile" placeholder="7777777777" maxlength="10" required>
						            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
						            <input type="text" id="adr" name="address" placeholder="Complete Address" required>
						            <label for="city"><i class="fa fa-institution"></i> City</label>
						            <input type="text" id="city" name="city" placeholder="Enter city" required>

					            	<div class="row">
						            	<div class="col-50">
							                <label for="state">State</label>
							                <input type="text" id="state" name="state" placeholder="Punjab" required>
						              	</div>
						              	<div class="col-50">
							                <label for="zip">Zip</label>
							                <input type="text" id="zip" name="zip" placeholder="144411" maxlength="6" required>
						              	</div>
						              	<div class="col-50">
							                <label for="ddate">Delivery Date</label>
							                <input type="date" id="zip" class="form-control" name="ddate" required>
						              	</div>
					            	</div>
					            	<br>
					            	<label for="fname">Choose Payment Method</label>
					            	<input type="radio" name="payment_method" value="cod" required><span class="text-dark"> <b>Cash On Delivery</b></span><br><br>
					            	<!--input type="radio" name="payment_method" value="op" required><span class="text-dark"> <b>Online Payment</b></span-->
					          	</div>
							</div>
				        	<input type="submit" value="Continue to Pay" name="pay" class="contact_button">
				    	</form>
				    </div>
		  		</div>
		  		<div class="col-25">
				    <div class="containers">
				      	<h4>Service Details</h4><br>
				      	<p>
				      		1. <b><?= $sname ?></b><br>
				      		Plan Type: <b><?= $plan ?></b><br>
				      		Price: <b>&#8377;<?= $amount ?></b>
				      	</p>
				      	<hr>
				      	<p>Total <span class="price" style="color:black"><b>&#8377;<?= $amount ?></b></span></p>
				    </div>
		  		</div>
			</div>
		</div>
	</div>

	

<?php include('includes/footer.php'); ?>