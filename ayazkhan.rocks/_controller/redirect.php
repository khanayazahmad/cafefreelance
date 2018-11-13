<?php
error_reporting(E_ERROR | E_PARSE);
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $username = $_GET["username"];
    $file = fopen("../_resources/Sec_Files/root_key_".$username.".data","r") or die("You shall Not Pass!!");
    $iv = fgets($file);
    fclose($file);
    $sign = md5("authenticated_redirection_verification_code_".$iv);
    $file_session = fopen("../_resources/Sec_Files/session_".$username.".data","r") or die("You shall Not Pass!!");
    $info = explode(",", fgets($file_session));
    $name = $info[0];
    $role = $info[1];

    fclose($file_session);

    if(!isset($_COOKIE[$username."_most_visited"])){
        $page_views = ["Hire_Freelancer.php"=>0,
            "Find_Contractor.php"=>0,
            "Find_Project.php"=>0,
            "Find_Team.php"=>0,
            "Build_Team.php"=>0,
            "Post_Adv.php"=>0,
            "Project_Bid.php"=>0,
            "Manage_Appointments.php"=>0,
            "Manage_Progress.php"=>0,
            "Take_Test.php"=>0,
        ];

        setcookie($username."_most_visited", $page_views, time() + (100 * 365 * 86400 * 30), "/");
    }

    if(!isset($_COOKIE[$username."_last_visited"])){
        $last_5 = [1=>"",
            2=>"",
            3=>"",
            4=>"",
            5=>"",
        ];

        setcookie($username."_last_visited", $last_5, time() + (100 * 365 * 86400 * 30), "/");
    }

    if($_GET["service"] != "index_admin.php"){

        $last_5 = json_decode($_COOKIE[$username."_last_visited"],true);
        $index = 5;
        while($index > 1){
            $last_5[$index] = $last_5[$index-1];
            $index -- ;
        }
        $last_5[$index] = $_GET["service"];

        $most_visited = json_decode($_COOKIE[$username."_most_visited"],true);
        $most_visited[$_GET["service"]] += 1;
        arsort($most_visited);
        setcookie($username."_most_visited", json_encode($most_visited), time() + (100 * 365 * 86400 * 30), "/");
        setcookie($username."_last_visited", json_encode($last_5), time() + (100 * 365 * 86400 * 30), "/");

    }


    echo '<form action="../_views/'.$_GET["service"].'" method="post" id="indexForm">';
    echo "<input type=\"hidden\" name=\"username\" value=\"" . $name . "\"/><br>";
    echo "<input type=\"hidden\" name=\"role\" value=\"" . $role . "\"/></p><br>";
    echo "<input type=\"hidden\" name=\"sign\" value=\"" . $sign . "\"/></p><br>";
    echo "<script>document.getElementById('indexForm').submit();</script>";

}
else{
    echo "Having Trouble? Contact admin. If you are admin, give up :)";
}