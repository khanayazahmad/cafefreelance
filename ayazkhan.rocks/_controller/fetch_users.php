<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 10/27/2018
 * Time: 7:01 PM
 */



if(strcasecmp($_POST["key"],md5("Welcome123")) == 0){
	require_once "config.php";
	$sql_stmt = "SELECT fname, lname, role FROM users";

	$result = mysqli_query($conn,$sql_stmt);
	$data = array();

	if (mysqli_num_rows($result)> 0) {

		while(($row = mysqli_fetch_assoc($result))){

			if($row["role"] != 0) {

				$role = ($row["role"] == 1) ? "Freelancer" : "Contractor";
				$data[$row["lname"].", ".$row["fname"]] = $role;

			}
		}


		echo json_encode($data);



	}

	mysqli_close($conn);
}