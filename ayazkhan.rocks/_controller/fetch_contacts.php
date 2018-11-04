<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 10/13/2018
 * Time: 10:12 AM
 */

if(empty($_GET["id"])) {
	'Content not found....';
}else if($_GET["id"]=="1"){

	$contactsFile = fopen( "../_resources/T_FILES/contacts.data", "r" );
	echo "<table style='width:100%'><tr><th>Name</th><th>Designation</th><th>Email Address</th></tr>";

	while ( ! feof( $contactsFile ) ) {
		$conArr = explode(",",fgets( $contactsFile ));
		echo "<tr><td>".$conArr[0]."</td><td>".$conArr[1]."</td><td>".$conArr[2]."</td></tr>";
	}
	echo "</table>";
	fclose( $contactsFile );
}else{
	$contactsFile = fopen( "../_resources/T_FILES/contacts.data", "r" );
	echo "<table style='width:100%'><tr><th>Name</th><th>Designation</th><th>Phone Number</th></tr>";

	while ( ! feof( $contactsFile ) ) {
		$conArr = explode(",",fgets( $contactsFile ));
		echo "<tr><td>".$conArr[0]."</td><td>".$conArr[1]."</td><td>".$conArr[3]."</td></tr>";
	}
	echo "</table>";
	fclose( $contactsFile );
}
