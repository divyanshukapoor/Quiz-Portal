<?php
session_start();
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123","dbquizmnnit");
if(isset($_GET['id']))
{
$_SESSION["email"]=$_GET['teacher_email'];
$id = $_GET['id'];
$_SESSION["id"]=$id;
$tb="question_" . $id;
//echo $tb;
$Ques =$_POST['Question'];
$OpA=$_POST['OpA'];
$OpB=$_POST['OpB'];
$OpC=$_POST['OpC'];
$OpD=$_POST['OpD'];
$Corr=$_POST['Correct_option'];
$query="INSERT INTO $tb(`Question`, `OpA`, `OpB`, `OpC`, `OpD`, `Correct_answer`) VALUES('$Ques','$OpA','$OpB','$OpC','$OpD','$Corr')";
$run=mysqli_query($con,$query);
$q="select * from Test_Info where Exam_id='$id'";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_array($r,MYSQLI_ASSOC);
$n=$row['No_Ques'];
$q1="select count(*)as cnt from $tb";
$r1=mysqli_query($con,$q1); 
$row=mysqli_fetch_array($r1,MYSQLI_ASSOC);
$n1=$row['cnt'];
if($n1>$n)
	$n=$n1;
$q2="update Test_Info set No_Ques='$n' where Exam_id='$id' ";
$r2=mysqli_query($con,$q2);
}
echo "<script>
window.location.href='../dist/Question.php';
</script>"; 

mysqli_close($con);
?>