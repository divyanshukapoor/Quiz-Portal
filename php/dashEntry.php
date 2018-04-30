<?php

session_start();

$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');

$Subject = test_input($_POST['Subject_code']);
$Ques =$_POST['No_ques'];
$TestKey=$_POST['Test_key'];
$CTestKey=$_POST['cTest_key'];
$Branch=$_POST['Branch'];
$Hours=$_POST['Hours'];
$Minutes=$_POST['Minutes'];

$id=$_SESSION["teacher_email"];
$q1="SELECT Exam_id FROM Test_Info WHERE Exam_id LIKE '$Subject%' ORDER BY Exam_id DESC LIMIT 1 ";
$r=mysql_query($q1);
$row=mysql_fetch_array($r);
$s=$row['Exam_id'];
$s=strrev($s);
$pos=strpos($s,"_");
$s=substr($s,0,$pos);
$s=$s+1;
$examid=$Subject . '_' . $s;
$id=substr($id,0,strlen($id)-12);
if($TestKey == $CTestKey){
$query="INSERT INTO `Test_Info` (Exam_id,Subject_code,No_Ques,Test_key,Branch,Hours,Minutes,Teacher_id) VALUES('$examid','$Subject','$Ques','$TestKey','$Branch','$Hours','$Minutes','$id')";
$result=mysql_query($query);
$tb="question" . "_" . $examid;
$query="CREATE TABLE $tb (Qid int,Question varchar(200),OpA varchar(100),OpB varchar(100), OpC varchar(100),OpD varchar (100),Correct_answer varchar(10))";
$result=mysql_query($query);
 echo "<script>
  alert('$Subject $Ques $TestKey $Branch $Hours $Minutes: Success');
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
mysql_close($con);
?>