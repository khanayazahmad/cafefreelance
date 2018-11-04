<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 10/26/2018
 * Time: 3:27 PM
 */


error_reporting(E_ERROR | E_PARSE);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "config.php";
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $sql_stmt = "SELECT uname, passw, role FROM users WHERE uname = '$username'";

    $result = mysqli_query($conn,$sql_stmt);

    if (mysqli_num_rows($result)> 0) {

        $row = mysqli_fetch_assoc($result);
        $passhash = $row["passw"];

        if(($password == $passhash)) {

            echo "Login Successful";
            echo '<script>$(document).ready(function () { $("#loginModalHeaderDiv").css("background-color","#108a15");$("#loginForm").hide();});</script>';

            $role = $row["role"];

            $iv = random_bytes(32);
            $file = fopen("../_resources/Sec_Files/root_key.data","w") or die("Unable to open file!");;
            fwrite($file,$iv);
            fclose($file);
            $sign = md5("authenticated_redirection_verification_code_".$iv);
            mysqli_close($conn);
                echo '<form action="_views/index_admin.php" method="post" id="indexForm">';
                echo "<input type=\"hidden\" name=\"username\" value=\"" . $username . "\"/><br>";
                echo "<input type=\"hidden\" name=\"role\" value=\"" . $role . "\"/></p><br>";
                echo "<input type=\"hidden\" name=\"sign\" value=\"" . $sign . "\"/></p><br>";
                /**echo '<script>$(document).ready(function () { $("#indexForm").submit();});</script>';
                */

                echo "<script>document.getElementById('indexForm').submit();</script>";

        }else {
            mysqli_close($conn);
            echo "Login Failed: Wrong Password";
            echo '<script>$(document).ready(function () { $("#loginModalHeaderDiv").css("background-color","#AE3B24");});</script>';
        }

    } else {
        mysqli_close($conn);
        echo "Login Failed: User not found<script>alert('User not found! Try again')</script>";
        echo '<script>$(document).ready(function () { $("#loginModalHeaderDiv").css("background-color","#AE3B24");});</script>';
    }

    mysqli_close($conn);
}
