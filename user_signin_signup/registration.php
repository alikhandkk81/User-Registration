<?php
include_once 'connection.php';

session_start();

$name = $_POST['user'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usertable WHERE name = '$name'";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
if($num == 1){
	echo 'User Already Taken';
}else{
	$reg = "insert into usertable(name,password)
	values('$name','$pass')";
	mysqli_query($conn,$reg);
	echo 'Registration Succesfull';
}
?>