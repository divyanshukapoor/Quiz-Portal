<?php
session_start();
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
$email = $_POST['email'];
$password =$_POST['password'];
$query="SELECT * FROM admin WHERE username='$email' AND password='$password'";
$result=mysqli_query($con,$query);
$count = mysqli_num_rows($result);

if($count>0)
{
	 $_SESSION["email"]=$email;
	 header("location:../dist/Admin_dashboard.php");
}
else
{
	$_SESSION["teacher_email"]=$email;
	$query="SELECT * FROM `Teacher Info` WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$query);
	$count = mysqli_num_rows($result);
	if($count>0)
	{
		echo "<script>
	  window.location.href='../dist/dashboard_1.php';
	  </script>";
	}
	else
	{
	  $query="SELECT * FROM `Teacher Info` WHERE email='$email'";
	  $result=mysqli_query($con,$query);
   	  $count = mysqli_num_rows($result);
	  if($count>0)
	  {
	   echo "<script>
	  alert('Please enter correct password.');
	  window.location.href='../teacher.html';
	  </script>";
	  }
	  else
	  {
	  echo "<script>
	  alert('You are not yet registered.Please Contact to admin.');
	  window.location.href='../teacher.html';
	  </script>";
	  }
	}
}
mysqli_close($con);
?>