<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "eventswave";

$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

if(!$con)
{
    die(mysqli_error($con));
}
?>