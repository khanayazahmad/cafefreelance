<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 10/26/2018
 * Time: 4:42 PM
 */

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Welcome123');
define('DB_NAME', 'cafe_freelance');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}