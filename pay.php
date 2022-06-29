<?php 
	
	include('includes/database.php');
	session_start();
	if (!isset($_SESSION['id'])) {
		echo "<script>window.location.href='home';</script>";
	}
?>

<?php

if (isset($_POST['pay'])) {
	
	$orderid = "IMPS".mt_rand(1000,4999)."".mt_rand(100000,999999)."".mt_rand(5000,9999);
	$sid = $_POST['sid'];
	$cid = $_POST['cid'];
	$splantype = $_POST['splantype'];
	$amount = $_POST['amount'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$ddate = $_POST['ddate'];
	$payment_method = $_POST['payment_method'];

	if ($payment_method == 'cod') {
		$insert = "INSERT into orders (orderid, sid, cid, amount, splantype, name, email, mobile, address, city, state, zip, ddate) values ('$orderid', '$sid', '$cid', '$amount', '$splantype', '$name', '$email', '$mobile', '$address', '$city', '$state', '$zip', '$ddate')";
		$resi = mysqli_query($con, $insert);
		if ($resi) {
			$ins = "INSERT into payments (orderid, transactionid, transactionamount, transactionstatus, transactionmode) values ('$orderid', 'COD', '$amount', 'DUE', '$payment_method')";
			$reqi = mysqli_query($con, $ins);
			if ($reqi) {
				echo "<script>alert('Order placed successfully!');window.location.href='home';</script>";
			} else {
				echo "<script>alert('Something went wrong. Try again later!');window.location.href='home';</script>";
			}
		} else {
			echo "<script>alert('Something went wrong. Try again later!');window.location.href='home';</script>";
		}
	}

	if ($payment_method == 'op') {
		
	}

} else {
	echo "<script>alert('Something went wrong. Try again later!');window.location.href='home';</script>";
}

?>