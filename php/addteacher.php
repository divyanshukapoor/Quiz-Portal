<<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
$email = $_POST['email'];
$password =$_POST['password'];
$name=$_POST['name'];
$department=$_POST['department'];
if($department==null)
{
	echo "<script>
	alert('Please add department');
	window.location.href='../admin.php';
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
		alert('$email already exists!');
		window.location.href='../admin.php';
		</script>";
	}
	else
	{
		$id=substr($email,0,strlen($email)-12);
		$query="INSERT INTO `Teacher Info`(`email`,`Teacher_id`, `password`, `name`, `department`) VALUES ('$email','$id','$password','$name','$department')";
		$result=mysqli_query($con,$query);
		echo "<script>
		alert('$name is added.');
		window.location.href='../admin.php';
		</script>";
	}
}
mysqli_close($con);
?>