<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 11/14/2018
 * Time: 1:22 PM
 */

if($_POST["curl_key"] == md5("WelcomeToTheJungle")){

	if($_POST["option"] == "CF"){

		$ch = curl_init("http://ayazkhan.rocks/_controller/fetch_users.php");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array("key" => md5("Welcome123")));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$html = json_decode(curl_exec($ch));
		echo "<table class='table table-hover' style = 'width:100%'>Cafe Freelance Members:"
		     . "<tr><th>#</th><th>Name</th><th>Role</th></tr>";;
		$x = 1;
		foreach($html as $i=>$val) {
			echo    "<tr><td>$x</td><td>".$i."</td><td>".$val."</td></tr>";
			$x++;
		}
		echo "</table>";


	}else if($_POST["option"] == "CA"){

		$ch = curl_init("http://coderalley.net/users.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$x = 1;

		echo "<table class='table table-hover' style='width:100%'>Coder Alley Members:<br>"
                 . "<tr><th>#</th><th>Name</th></tr>";
		$user_array = explode(",",curl_exec($ch));
		foreach($user_array as $user){
			echo "<tr><td>$x</td></td><td>$user</td></tr>";
			$x++;
		}


	}else{

	}


}else{
	echo "Error 404: You are not authorized to view this information.";
}


