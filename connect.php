<?php
$server_name = "localhost";
$dbuser = "root";
$dbPass = "";
$dbName = "crud";

//Kelangan sunod sunod
$conn = mysqli_connect($server_name, $dbuser, $dbPass, $dbName); 

if (!$conn){
    die("Something went wrong!");
}
?>