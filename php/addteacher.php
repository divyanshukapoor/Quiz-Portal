<<?php
$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');
$email = $_POST['email'];
$password =$_POST['password'];
$name=$_POST['name'];
$department=$_POST['department'];
if($department==null)
{
	echo "<script>
	alert('Please add department');
	window.location.href='../admin.html';
	</script>";
}
else
{
	$query="SELECT * FROM `Teacher Info` WHERE email='$email'";
	$result=mysql_query($query);
	$count = mysql_num_rows($result);
	if($count>0)
	{
		echo "<script>
		alert('$email already exists!');
		window.location.href='../admin.html';
		</script>";
	}
	else
	{
                $password=sha1($password);
		$query="INSERT INTO `Teacher Info`(`email`, `password`, `name`, `department`) VALUES ('$email','$password','$name','$department')";
		$result=mysql_query($query);
		echo "<script>
		alert('$name is added.');
		window.location.href='../admin.html';
		</script>";
	}
}
mysql_close($con);
?>