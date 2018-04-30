<?php
	session_start();
	if($_SESSION["email"]==true)
	{
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/adminprofile.css">
<!--===============================================================================================-->
</head>
<body >
		<div class="container-login100">
			<div class="wrap4">
				<form class="login100-form validate-form" method="post" action="http://localhost/quiz/php/addteacher.php">

					<div class="form-element">
						<label  for="student_name">Teacher's Name:</label>
						<input class="input2" type="text" name="name" placeholder="Enter Teacher's Name" required>
					</div>
					
					<div class="form-element">
						<label  for="email">Email Id:</label>
						<input class="input2" type="text" name="email" placeholder="Enter Email ID" required>
					</div>
					
					<div class="form-element">
						<label  for="password">Password:</label>
						<input class="input2" type="password" name="password" placeholder="Enter Password" required>
					</div>
					
					<div class="form-element">
						<label  for="department">Department:</label>
						<select class="input2" name="department">
						<option selected="true" disabled="disabled">Select Department</option>
						<option value="Information Technology">Information Technology</option>
						<option value="Electronics and Communication">Electronics and Communication</option>
						<option value="Electrical Engineering">Electrical Engineering</option>
						<option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Production Engineering">Production Engineering</option>
						<option value="BioTechnology Engineering">BioTechnology Engineering</option>
						<option value="Computer Science And Engineering">Computer Science And Engineering</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						</select>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Add Teacher
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
<?php
}
else
{
	echo '<script>parent.window.location.reload(true);</script>';
}
?>