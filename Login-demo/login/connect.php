<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "fablab_winam";


if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
    die("failed to connect!");
}
?>