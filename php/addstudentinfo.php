<?php
session_start();
$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');
$name = $_POST['student_name'];
$regno =$_POST['reg_no'];
$email=$_POST['email'];
$group=$_POST['group'];
$subject=test_input($_POST['subject_code']);
$branch=$_POST['branch'];
$key=$_POST['key'];
$tbname=$subject . '_' . $branch;
$query="SELECT * FROM key_table WHERE subject_code='$subject'";
$query2="SELECT * FROM `$tbname` WHERE Registration_No='$regno' ";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
$count = mysql_num_rows($result);
$result2=mysql_query($query2);
$count2 = mysql_num_rows($result2);
if($count2!=0)
{
  echo "<script>
  alert('$regno: student already exist');
  window.location.href='../student.html';
  </script>";
}
if($count<=0)
{
  echo "<script>
  alert('$subject: enter valid subject name');
  window.location.href='../student.html';
  </script>";
}
else if($key==$row['key'])
{
	$_SESSION["regno"]=$regno;
	$query1="INSERT INTO `$tbname` (`Name`, `Registration_No`, `Email`, `Group`) VALUES('$name','$regno','$email','$group')";
    $result1=mysql_query($query1);
	echo $query1;
}
else
{
  echo "<script>
  alert('key mismatch');
  window.location.href='../student.html';
  </script>";
}
function test_input($data){
 $data=strtoupper($data);
 return $data;
}
mysql_close($con);
?>