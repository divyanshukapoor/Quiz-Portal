<?php

session_start();

$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');

$Subject = test_input($_POST['Subject_code']);
$Ques =$_POST['No_ques'];
$TestKey=$_POST['Test_key'];
$CTestKey=$_POST['cTest_key'];
$Branch=$_POST['Branch'];
$Hours=$_POST['Hours'];
$Minutes=$_POST['Minutes'];

$id=$_SESSION["teacher_email"];
$q1="SELECT Exam_id FROM Test_Info WHERE Exam_id LIKE '$Subject%' ORDER BY Exam_id DESC LIMIT 1 ";
$r=mysqli_query($con,$q1);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
$s=$row['Exam_id'];
$s=strrev($s);
$pos=strpos($s,"_");
$s=substr($s,0,$pos);
$s=$s+1;
$examid=$Subject . '_' . $s;
$id=substr($id,0,strlen($id)-12);
if($TestKey == $CTestKey){
$query="INSERT INTO `Test_Info` (Exam_id,Subject_code,No_Ques,Test_key,Branch,Hours,Minutes,Teacher_id) VALUES('$examid','$Subject','$Ques','$TestKey','$Branch','$Hours','$Minutes','$id')";
$result=mysqli_query($con,$query);
$tb="question" . "_" . $examid;
$stb=$Subject . "_" . $Branch;
$query="CREATE TABLE `$stb` (Name varchar(100), Registration_No int,Email varchar(50),group_no varchar(10),Answer_string varchar(200), Score int)";
$run=mysqli_query($con,$query);
$query1="CREATE TABLE ".$tb . " (Qid int NOT NULL AUTO_INCREMENT,Question varchar(200),OpA varchar(100),OpB varchar(100), OpC varchar(100),OpD varchar (100),Correct_answer varchar(10),PRIMARY KEY (Qid))";
$result=mysqli_query($con,$query1);
 echo "<script>
  alert('Test Created ,Exam_id: $stb');
  window.location.href='../create_test.php';
  </script>";
}
else
{
	
	 echo "<script>
  alert('$Subject: key mismatch');
  window.location.href='../create_test.php';
  </script>";
}

function test_input($data){
 $data=strtoupper($data);
 return $data;
}
mysqli_close($con);
?>