<?php
include_once 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple User registration form</title>
	<link rel="stylesheet" type="text/css "href="style.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	   
       <div class="container">
       	<div class="login-box">
       	 <div class="row">
       	 	<div class="col-md-6 login-left">
       	 		<h2>Login Here</h2>
       	 		<form action="validation.php" method="post" accept-charset="utf-8">
       	 			<div class="form-group">
       	 				<label>UserName</label>
       	 				<input type="text" name="user" class="form-control" required>
       	 			</div>
       	 			<div class="form-group">
       	 				<label>UserPassword</label>
       	 				<input type="password" name="password" class="form-control" required>
       	 			</div>
       	 			<button type="submit" class="btn btn-primary pr-3 pl-3">Login</button>
       	 		</form>
       	 	</div>
       	 	<div class="col-md-6 login-right">
       	 		<h2>Register Here</h2>
       	 		<form action="registration.php" method="post" accept-charset="utf-8">
       	 			<div class="form-group">
       	 				<label>UserName</label>
       	 				<input type="text" name="user" class="form-control" required>
       	 			</div>
       	 			<div class="form-group">
       	 				<label>UserPassword</label>
       	 				<input type="password" name="password" class="form-control" required>
       	 			</div>
       	 			<button type="submit" class="btn btn-primary pr-3 pl-3">Register</button>
       	 		</form>
       	 	</div>
       	 </div>
       </div>
      </div>

</body>
</html>