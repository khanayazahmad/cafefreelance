<?php
$username = $_GET["username"];
unlink("../_resources/Sec_Files/root_key_".$username.".data");

unlink("../_resources/Sec_Files/session_".$username.".data");
header("Location: ../Welcome.html");