<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 11/24/2018
 * Time: 4:27 PM
 */

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$keyword = trim( $_POST["keyword"] );

	if(strlen($keyword) <= 3){
		echo "No results found";
		exit(0);
	}

	require_once "config.php";
	$sql_stmt = "SELECT fname, lname, role, email, cphone, address FROM users where 
                                                          (fname like '%$keyword%') or
                                                          (lname like '%$keyword%') or
                                                          (email like '$keyword') or
                                                          (hphone like '$keyword') or
                                                          (cphone like '$keyword') or
															(address like '%$keyword%')";

	$result = mysqli_query($conn,$sql_stmt);
	$data = array();

	if (mysqli_num_rows($result)> 0) {
		echo "<table class='table table-hover' style = 'width:100%'>\"".$keyword."\":"
		     . "<tr><th>Name</th><th>Role</th><th>Email</th><th>Number</th><th>Address</th></tr>";
		while(($row = mysqli_fetch_assoc($result))){

				$role = ($row["role"] == 1) ? "Freelancer" : "Contractor";
			echo    "<tr><td>".$row["lname"].", ".$row["fname"]."</td><td>".$role."</td><td>".$row["email"]."</td><td>".$row["cphone"]."</td><td>".$row["address"]."</td></tr>";

		}
		echo "</table>";


	}else {
		echo "No results found for \"".$keyword."\"";
		exit(0);

	}

	mysqli_close($conn);


}