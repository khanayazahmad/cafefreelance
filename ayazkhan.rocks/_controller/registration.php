<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 11/24/2018
 * Time: 1:07 PM
 */

if($_SERVER["REQUEST_METHOD"] == "POST") {
	require_once "config.php";

	$userid = $_POST['userid'];
	$password = ($_POST['passid']);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$hphone = $_POST['hphone'];
	$cphone = $_POST['cphone'];
	$role = $_POST['role'];

	$sql_stmt = "select * from users where uname = '$userid'";
	$result = mysqli_query($conn,$sql_stmt);
	if (mysqli_num_rows($result)> 0) {

		mysqli_close($conn);
		echo "Username already taken :( Try Another";
		echo '<script>$(document).ready(function () { $("#registerModalHeader").css("background-color","#AE3B24");});</script>';
	}else{

		$sql_stmt = "insert into users values (
                          '$userid',
                          '$password',
                          '$fname',
                          '$lname',
                          '$address',
                          '$email',
                          '$hphone',
                          '$cphone',
                          '$role'
                  )";

		if( mysqli_query($conn,$sql_stmt)) {
			echo "Registration Successful! You can login now";
			echo '<script>$(document).ready(function () { $("#registerModalHeader").css("background-color","#108a15");$("#regForm").hide();});</script>';
		}else {
			echo "Registration Failed! Check back later";
			echo '<script>$(document).ready(function () { $("#registerModalHeader").css("background-color","#AE3B24");$("#regForm").hide();});</script>';

		}



	}

}


