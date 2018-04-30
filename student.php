<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Student's Portal</title>
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
<!--===============================================================================================-->
</head>
<body background="images/background.jpg">
	
	<div class="limiter" align="middle">
		<div class="container-login100">
			<div class="wrap2">
                <div class="logo" align="middle">
					<img src="images/img-01.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post" action="http://localhost/quiz/php/addstudentinfo.php">
					<span class="login100-form-title">
						 Student's Login
					</span>

					<div class="form-element">
						<label  for="student_name">Student's Name:</label>
						<input class="input2" type="text" name="student_name" placeholder="Enter Your Name" required>
					</div>

					<div class="form-element">
						<label for="registration_no">Registration Number:</label>
						<input class="input2" type="text" name="reg_no" placeholder="Enter Registration Number"required>
					</div>
					
					<div class="form-element">
						<label  for="email">Email Id:</label>
						<input class="input2" type="text" name="email" placeholder="Enter Email ID" required>
					</div>
					
					<div class="form-element">
						<label  for="branch">Branch:</label>
						<select class="input2" name="branch">
						<option value="Information Technology">Information Technology</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Electronics and Communication">Electronics and Communication</option>
						<option value="Electrical Engineering">Electrical Engineering</option>
						<option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Production Engineering">Production Engineering</option>
						<option value="BioTechnology Engineering">BioTechnology Engineering</option>
						<option value="Computer Science And Engineering">Computer Science And Engineering</option>
						</select>
					</div>
					
					<div class="form-element">
						<label  for="group">Group:</label>
						<input class="input2" type="text" name="group" placeholder="Enter Your Group"required>
					</div>
					
					<div class="form-element">
						<label  for="subject">Exam-id:</label>
						<input class="input2" type="text" name="Exam_id" placeholder="Enter Exam-id"required>
					</div>
					
					<div class="form-element">
						<label  for="key">Test Key:</label>
						<input class="input2" type="password" name="key" placeholder="Enter Test Key"required>
					</div>
					
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Enter Test
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