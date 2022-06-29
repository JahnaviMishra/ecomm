<?php 
	
	include('includes/database.php');
	session_start();
	if (isset($_SESSION['id'])) {
		echo "<script>window.location.href='home';</script>";
	}
?>

<?php

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * from customers where email = '$email' and password = '$password'";
	$result = mysqli_query($con,$sql);
	$count = mysqli_num_rows($result);
	if ($count == 1) {
		$rows = mysqli_fetch_array($result);
		$_SESSION['id'] = $rows['id'];
		$_SESSION['name'] = $rows['name'];
		echo "<script>window.location.href='home';</script>";
	} else {
		echo "<script> alert('Error. Something went wrong!');window.location.href='userlogin';</script>";
	}
}

if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$check = "SELECT * from customers where email = '$email'";
	$res = mysqli_query($con,$check);
	$count = mysqli_num_rows($res);
	if ($count == 1) {
		echo "<script> alert('Email id already exists!');window.location.href='userlogin';</script>";
	} else {
		$sql = "INSERT into customers (name, email, mobile, password) values ('$name', '$email', '$mobile', '$password')";
		$result = mysqli_query($con,$sql);
		if ($result) {
			echo "<script> alert('Account Created Successfully');window.location.href='userlogin';</script>";
		} else {
			echo "<script> alert('Error. Something went wrong!');window.location.href='userlogin';</script>";
		}
	}
}



?>