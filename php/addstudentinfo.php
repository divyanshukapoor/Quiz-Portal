<?php
session_start();
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
$name = $_POST['student_name'];
$regno =$_POST['reg_no'];
$email=$_POST['email'];
$group=$_POST['group'];
$Exam_id=test_input($_POST['Exam_id']);
$branch=$_POST['branch'];
$key=$_POST['key'];
$subject=substr($Exam_id,0,6);
$tbname=$subject . '_' . $branch;
$query="SELECT * FROM key_table WHERE Exam_id='$Exam_id'";
$query2="SELECT * FROM `$tbname` WHERE Registration_No='$regno' ";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$result2=mysqli_query($con,$query2);
$count2 = mysqli_num_rows($result2);
if($count2!=0)
{
  echo "<script>
  alert('$regno: student already exist');
  window.location.href='../student.php';
  </script>";
}
if($count<=0)
{
  echo "<script>
  alert('$subject: enter valid subject name');
  window.location.href='../student.php';
  </script>";
}
else if($key==$row['key'])
{
	$_SESSION["regno"]=$regno;
	$_SESSION["Exam_id"]=$Exam_id;
	$_SESSION["Stu_exam"]=substr($Exam_id,0,6) . $branch;
	$query1="INSERT INTO `$tbname` (`Name`, `Registration_No`, `Email`, `group_no`) VALUES('$name','$regno','$email','$group')";
    $result1=mysqli_query($con,$query1);
	echo "<script>
    window.location.href='../instructions.php';
    </script>";
}
else
{
  echo "<script>
  alert('key mismatch');
  window.location.href='../student.php';
  </script>";
}
function test_input($data){
 $data=strtoupper($data);
 return $data;
}
mysqli_close($con);
?>