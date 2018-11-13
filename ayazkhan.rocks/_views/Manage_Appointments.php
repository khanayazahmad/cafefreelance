<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 11/9/2018
 * Time: 12:57 PM
 */
error_reporting(E_ERROR | E_PARSE);
$file = fopen("../_resources/Sec_Files/root_key_".$_POST["username"].".data","r") or die("Unable to open file!");
$iv = fgets($file);
fclose($file);
$sign = md5("authenticated_redirection_verification_code_".$iv);
if($sign != $_POST["sign"]){
    exit("<div style='color:red; width:500px;height:500px;'>You shall Not Pass!</div>");
}
$username = $_POST["username"];
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="This is practice site only for learning purposes">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="../_resources/IMG/Eagle-clipart-free-clipart-clipartix.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">




    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title style="font-family: cursive">Café Freelance</title>
    <style>
        img {
            max-width: 100%;
        }
        html, body{
            height: 100%;
        }
        body{

            background-size:100% 105%;
            width:100%;
            height:100%;
        }

        .header{
            background-image: url("../_resources/IMG/cellphone-coffee-desk-860379.jpg");
            background-size:105% 105%;
            width:100%;
            height:100%;
        }
        .section_services{
            background-image: url("../_resources/IMG/barista-barista-girl-business-702251.jpg");
            background-size:105% 105%;
            width:100%;
            height:100%;
        }

        .section_contact{
            background-image: url("../_resources/IMG/cable-call-communication-33999.jpg");
            background-size:105% 105%;
            width:100%;
            height:100%;
        }

        label{
            font-family:sans-serif;
            font-size:14px;
        }
        input{
            width:100%;
        }

        .sticky
        {
            position: fixed;
            top: 0%;
            left: 0;
            right: 0;

        }

        .navbar-brand {
            float: left;
            height: 50px;
            padding: 0px 15px;
            font-size: 18px;
            line-height: 20px;
        }

        .navbar {
            margin-bottom: 0px;
        }

        .btn-outline-success {
            color: #337ab7;
            background-color: #337ab700;
            background-image: none;
            border-color: #337ab7;
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7;
        }

        .btn_custom {
            color: #337ab7;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .text-muted {
            color: #cccccce0!important;
        }

        .btn-primary2 {
            color: #fff;
            background-color: #ac311c;
            border-color: #750009;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#"><b style="margin-left:2%; margin-top:2%">
            <img src="..\_resources\IMG\Eagle-clipart-free-clipart-clipartix.png" alt="HTML5 Icon" style="width:50px;height:50px;"><i style="font-size: 30px; font-family: Brush Script MT">Café Freelance</i></b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <li class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../_controller/redirect.php?service=index_admin.php&username=<?php
                echo $_POST["username"];
                ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Hire_Freelancer.php&username=<?php
                    echo $_POST["username"];
                    ?>">Hire A FreeLancer</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Find_Contractor.php&username=<?php
                    echo $_POST["username"];
                    ?>">Find A Contractor</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Find_Project.php&username=<?php
                    echo $_POST["username"];
                    ?>">Find A Project</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Find_Team.php&username=<?php
                    echo $_POST["username"];
                    ?>">Find a Team</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Build_Team.php&username=<?php
                    echo $_POST["username"];
                    ?>">Build a Team</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Post_Adv.php&username=<?php
                    echo $_POST["username"];
                    ?>">Post Advertisement</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Project_Bid.php&username=<?php
                    echo $_POST["username"];
                    ?>">Project Bidding</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Manage_Appointments.php&username=<?php
                    echo $_POST["username"];
                    ?>">Manage Appointments</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Manage_Progress.php&username=<?php
                    echo $_POST["username"];
                    ?>">Manage Progress</a>
                    <a class="dropdown-item" href="../_controller/redirect.php?service=Take_Test.php&username=<?php
                    echo $_POST["username"];
                    ?>">Take Skill Test</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#checkview">Check Views
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger active" href="#contactus">Contact Us</a>
            </li>
        </ul>

        <ul class="navbar-nav mr-auto" style="margin-left:50%">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <?php
                    echo $_POST["username"];
                    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#services">Account</a>
                    <?php
                    if($_POST["role"] == "0") {?>
                        <a class="dropdown-item getUserBtn"  href="#" >View Users</a>
                    <?php } ?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"   href="../_controller/signout.php">Sign Out</a>

                </div>
            </li>
        </ul>
    </li>

    </div>
</nav>
<header class="masthead text-center text-white d-flex header">
    <div class="container my-auto">

        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase" style="color: rgba(255,255,255,0.88)">
                    <strong>Manage your Appointments</strong>
                </h1>
                <hr>
            </div>
            <?php
            if($_POST["role"] == "0") {
                ?>
                <div class="col-lg-8 mx-auto">
                    <a class="btn btn-primary btn-xl js-scroll-trigger getUserBtn">Get User List</a>
                </div>
            <?php } ?>
        </div>

    </div>
</header>

<section class="bg-primary section_contact text-center text-white d-flex" id="contactus">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top: 70px">
                <h2 class="section-heading" style="color:#ae3b24"><strong>We are just one call away..</strong></h2>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <br>
                <a class="btn btn-primary2 btn-xl open-contacts" style="width:100%" data-val="1">
                    <img src="../_resources/IMG/baseline-contact_mail-24px.svg"/><br>Write to us</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <br>
                <a class="btn btn-primary2 btn-xl open-contacts" style="width:100%" data-val="2">
                    <img src="../_resources/IMG/baseline-contact_phone-24px.svg"/><br>Call us</a>
            </div>
        </div>

        <div class="row navbar" style="margin-top:10%; margin-left:50%">
            <a class="navbar-brand" href="#"><b style="margin-left:2%; margin-top:2%">
                    <img src="../_resources/IMG/Eagle-clipart-free-clipart-clipartix.png" alt="HTML5 Icon" style="width:50px;height:50px;">
                    <i style="font-size: 30px; font-family: Brush Script MT; color:white">Café Freelance</i></b></a>
            <a style="color:white" href="#">Privacy</a>
            <p style="margin-left:2%; margin-right: 2%">|</p><a style="color:white" href="#">Terms</a>
            <p style="margin-left:2%; margin-right: 2%">|</p><a style="color:white" href="#">Sitemap</a>
        </div>

    </div>
</section>
<div class="modal fade in" id="checkview" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ae3b24; color:white; width:100.2%">

                <h4 class="modal-title" id="contactsModalHeader">View Information</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
            </div>
            <div class="modal-body" style="font-family:sans-serif; font-size:14px;" id="checkview-body">
                <?php
                $last_5 = json_decode($_COOKIE[$username."_last_visited"],true);
                echo "<table class='table table-hover'>Last Five Visited Services:";
                foreach($last_5 as $i=>$val){

                    echo "<tr><td>".$i.".  </td><td>".explode(".",$val)[0]."</td></tr>";
                }
                echo "</table><br>";
                $most_visited = json_decode($_COOKIE[$username."_most_visited"],true);
                echo "<table class='table table-hover'>Five Most Visited Services:";
                $x=1;
                foreach($most_visited as $i=>$val) {
                    echo    "<tr><td>".explode(".", $i)[0].       "</td><td>".$val."  times</td></tr>";
                    $x++;
                    if($x == 5)
                        break;
                }
                echo "</table><br>";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade in" id="contacts" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ae3b24; color:white; width:100.2%">

                <h4 class="modal-title" id="contactsModalHeader">Contact Information</h4>
                <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
            </div>
            <div class="modal-body" style="font-family:sans-serif; font-size:14px;" id="contacts-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        $('.open-contacts').on('click', function () {
            var valueID = $(this).data('val');
            $('#contacts-body').load('../_controller/fetch_contacts.php?id='+valueID, function () {
                $('#contacts').modal({show: true});
            });
        });
    });

    });


    $(document).ready(function () {
        $(document).on('scroll',function() {
            if($(window).scrollTop()>0)
            {
                $("body > nav").addClass("sticky");
            }
            else
                $("body > nav").removeClass("sticky");
        });
    });

</script>



<!-- Modal -->
<?php
if($_POST["role"] == "0") {
    ?>
    <div class="modal fade in" id="getUsers" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="background-color: #ae3b24; color:white; width:100.2%">

                    <h4 class="modal-title" id="contactsModalHeader">Member Information</h4>
                    <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                </div>
                <div class="modal-body" style="font-family:sans-serif; font-size:14px;" id="users-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function() {
            $('.getUserBtn').on('click', function () {
                $('#users-body').load('../_controller/fetch_users.php', function () {
                    $('#getUsers').modal({show: true});
                });
            });
        });

    </script>


    <?php
}
?>



</body>
</html>