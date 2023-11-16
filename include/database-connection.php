<?php

$dbhost = "sg2nlmysql35plsk.secureserver.net";
$dbuser = "usrcarservice";
$dbpass = "bkgV55*2";
$dbname = "carservice";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!isset($conn)) {
    echo die("Database connection failed");
}
?>