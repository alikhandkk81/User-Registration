<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "userlogin";

$conn = mysqli_connect($server,$user,$password,$db) or die("Connection Faild".mysqli_connect_error());

?>