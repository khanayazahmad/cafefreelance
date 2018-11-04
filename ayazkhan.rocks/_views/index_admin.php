<?php

if($_SERVER["REQUEST_METHOD"] != "POST") {
    exit("<div style='color:red; width:500px;height:500px;'>Nice Try ;)</div>");
}
$file = fopen("../_resources/Sec_Files/root_key.data","r") or die("Unable to open file!");
$iv = fgets($file);
fclose($file);
$sign = md5("authenticated_redirection_verification_code_".$iv);
if($sign != $_POST["sign"]){
   exit("<div style='color:red; width:500px;height:500px;'>So close!! :P</div>");
}

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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#services">Hire A FreeLancer</a>
                    <a class="dropdown-item" href="#services">Become A FreeLancer</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services">Place Product Order</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services">Find a Team</a>
                    <a class="dropdown-item" href="#services">Build a Team</a>
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
                        <a class="dropdown-item getUserBtn"  href="#services" >View Users</a>
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
        <?php
        if($_POST["role"] == "0") {
            ?>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase" style="color: rgba(255,255,255,0.88)">
                        <strong>Check Out our current Members</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <a class="btn btn-primary btn-xl js-scroll-trigger getUserBtn">Get User List</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</header>
<section id="services" class="section_services text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" style="margin-top: 50px">
                <h2 class="section-heading">At Your Service</h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <img src="../_resources/IMG/baseline-person_add-24px.svg"/><br>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="width:100%" data-toggle="modal" data-target="#SignUpModal">Hire a Freelancer</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path fill="#8A8A8A" d="M20.57 14.86L22 13.43 20.57 12 17 15.57 8.43 7 12 3.43 10.57 2 9.14
                         3.43 7.71 2 5.57 4.14 4.14 2.71 2.71 4.14l1.43 1.43L2 7.71l1.43 1.43L2 10.57 3.43 12 7 8.43
                          15.57 17 12 20.57 13.43 22l1.43-1.43L16.29 22l2.14-2.14 1.43 1.43 1.43-1.43-1.43-1.43L22
                           16.29z"/>
                    </svg>
                    <h3 class="mb-3">Sturdy Architects</h3>
                    <p class="text-muted mb-0">Our Freelancers are tested regularly so they don't break.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="../_resources/IMG/baseline-how_to_reg-24px.svg"/>
                    <h3 class="mb-3">Up to Date</h3>
                    <p class="text-muted mb-0">We make sure  they are up to date with the most fresh technologies.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <img src="../_resources/IMG/baseline-local_cafe-24px.svg"/><br>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="width:100%" data-toggle="modal" data-target="#SignUpModal">Become a Freelancer</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="../_resources/IMG/baseline-favorite-24px.svg"/>
                    <h3 class="mb-3">Designs with Love</h3>
                    <p class="text-muted mb-0">You have to get your applications developed with love</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="../_resources/IMG/baseline-send-24px.svg"/>
                    <h3 class="mb-3">Ready to Develop</h3>
                    <p class="text-muted mb-0">You can use them as is, or you can make them learn new tech for you!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <img src="../_resources/IMG/baseline-phone-24px.svg"/><br>
                <a class="btn btn-primary btn-xl js-scroll-trigger" style="width:100%" href="#contactus">Talk to Us</a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">

            </div>
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-3 col-md-6 text-center">

            </div>
        </div>

    </div>
</section>

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