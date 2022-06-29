<?php 
	
	include('includes/database.php');
	session_start();
	$cid = $_SESSION['id'];
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
			<div class="home_title"><h1>My Orders</h1></div>
		</div>
	</div>


	<!-- CTA -->

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="cta_content">
						<div class="cta_text text-center">
							<table class="table table-responsive" style="border: 1px solid">
								<?php
								$sql = "SELECT * FROM orders INNER JOIN payments ON orders.orderid = payments.orderid WHERE cid = '$cid' ORDER BY oid DESC";
								$result = mysqli_query($con,$sql);
								if (mysqli_num_rows($result) > 0) {
								?>
								<tr>
									<th>#</th>
									<th>Order Id</th>
									<th>Service</th>
									<th>Delivery Date</th>
									<th>Delivery Address</th>
									<th>Amount</th>
									<th>Plan</th>
									<th>Payment Mode</th>
									<th>Payment Status</th>
								</tr>
								<?php
				                    while ($rows=mysqli_fetch_array($result))
				                    {
				                    	$sid = $rows['sid'];
				                    	$orderid = $rows['orderid'];
				                    	$ddate = $rows['ddate'];
				                    	$address = $rows['address'];
				                    	$city = $rows['city'];
				                    	$state = $rows['state'];
				                    	$zip = $rows['zip'];
				                    	$splantype = $rows['splantype'];
				                    	$transactionamount = $rows['transactionamount'];
				                    	$transactionmode = $rows['transactionmode'];
				                    	$transactionstatus = $rows['transactionstatus'];

				                    	$find = "SELECT * from services where sid = '$sid'";
				                    	$rep = mysqli_query($con,$find);
				                    	$row = mysqli_fetch_array($rep);
				                    	$sname = $row['sname'];

			                    ?>
								<tr>
									<td>#</td>
									<td><?= $orderid ?></td>
									<td><a href="http://localhost/neoemploy/service-details.php?id=<?= $sid ?>"><?= $sname ?></a></td>
									<td><?= $ddate ?></td>
									<td><?= $address ?> <?= $city ?> <?= $zip ?> <?= $state ?></td>
									<td>&#8377;<?= $transactionamount ?></td>
									<td><?= $splantype ?></td>
									<td><?= $transactionmode ?></td>
									<td><?= $transactionstatus ?></td>
								</tr>
							<?php
									}
								} else {
									echo "<h2 style='color: ; text-align: center'>You haven't ordered yet.<br>Please order something first!</h2>"; 
								}
							?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php include('includes/footer.php'); ?>