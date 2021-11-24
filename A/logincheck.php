<?php
session_start();

$con = mysqli_connect('localhost', 'root' );

// //check connection

// if($con){
// 	echo "connection successful";
// }else{
// 	echo "No connection";
// }

// //check connection end :)


$db = mysqli_select_db($con, 'atest');

if (isset($_POST['submit'])) {
	$username = $_POST['uname'];
	$password  = $_POST['pass'];

	$sql = " select * from login where user = '$username' and pass = '$password'";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['user'] = $username;
			header('location:home.php');
		}else{
			echo "login failed";
			header('location:index.php');
		}
	
}



?>












