<?php
include_once 'connection.php';

session_start();

$name = $_POST['user'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usertable WHERE name = '$name' && password = '$pass'";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['username'] = $name;
	header("Location:home.php");
}else{
	header("location:login.php");
}
?>