<?php
/**
 * Created by PhpStorm.
 * User: kayaz
 * Date: 10/27/2018
 * Time: 7:01 PM
 */

require_once "config.php";

$sql_stmt = "SELECT uname, role FROM users";

$result = mysqli_query($conn,$sql_stmt);

if (mysqli_num_rows($result)> 0) {
    echo "<table style='width:100%'><tr><th>Name</th><th>Role</th></tr>";
    while(($row = mysqli_fetch_assoc($result))){
        if($row["role"] != 0) {
            $role = ($row["role"] == 1) ? "Freelancer" : "Contractor";
            echo "<tr><td>" . $row["uname"] . "</td><td>" . $role . "</td></tr>";
        }
    }

}

mysqli_close($conn);