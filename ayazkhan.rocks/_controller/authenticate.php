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
    $password = md5(trim($_POST["password"]));

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
            $file = fopen("../_resources/Sec_Files/root_key_".$username.".data","w") or die("You shall Not Pass!!");
            fwrite($file,$iv);
            fclose($file);
            $file_session = fopen("../_resources/Sec_Files/session_".$username.".data","w") or die("You shall Not Pass!!");
            $info = $username . "," . $role;
            fwrite($file_session, $info);
            fclose($file_session);

            if(!isset($_COOKIE[$username."_most_visited"])){
                $page_views = array("Hire_Freelancer.php"=>0,
                    "Find_Contractor.php"=>0,
                    "Find_Project.php"=>0,
                    "Find_Team.php"=>0,
                    "Build_Team.php"=>0,
                    "Post_Adv.php"=>0,
                    "Project_Bid.php"=>0,
                    "Manage_Appointments.php"=>0,
                    "Manage_Progress.php"=>0,
                    "Take_Test.php"=>0,
                );
                $page_views = json_encode($page_views);

                setcookie($username."_most_visited", $page_views, time() + (100 * 365 * 86400 * 30), "/");
            }

            if(!isset($_COOKIE[$username."_last_visited"])){
                $last_5 = array(1=>"",
                    2=>"",
                    3=>"",
                    4=>"",
                    5=>"",
                );
                $last_5 = json_encode($last_5);
                setcookie($username."_last_visited", $last_5, time() + (100 * 365 * 86400 * 30), "/");
            }


            $sign = md5("authenticated_redirection_verification_code_".$iv);
            mysqli_close($conn);
                echo '<form action="./_views/index_admin.php" method="post" id="indexForm">';
                echo "<input type=\"hidden\" name=\"username\" value=\"" . $username . "\"/><br>";
                echo "<input type=\"hidden\" name=\"role\" value=\"" . $role . "\"/></p><br>";
                echo "<input type=\"hidden\" name=\"sign\" value=\"" . $sign . "\"/></p><br>";
                /**echo '<script>$(document).ready(function () { $("#indexForm").submit();});</script>';
                */

                echo "<script>document.getElementById('indexForm').submit();</script>";

        }else {
            mysqli_close($conn);
            echo "Login Failed: Jingle your Keys Again";
            echo '<script>$(document).ready(function () { $("#loginModalHeaderDiv").css("background-color","#AE3B24");});</script>';
        }

    } else {
        mysqli_close($conn);
        echo "Login Failed: User not found<script>alert('I do not know Who You Are! Try again')</script>";
        echo '<script>$(document).ready(function () { $("#loginModalHeaderDiv").css("background-color","#AE3B24");});</script>';
    }

    mysqli_close($conn);
}
