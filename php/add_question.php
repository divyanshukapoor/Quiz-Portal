<?php
session_start();
$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');
if(isset($_GET['id']))
{
$_SESSION["email"]=$_GET['teacher_email'];
$id = $_GET['id'];
$_SESSION["id"]=$id;
$tb="question_" . $id;
echo $tb;
$Ques =$_POST['Question'];
$OpA=$_POST['OpA'];
$OpB=$_POST['OpB'];
$OpC=$_POST['OpC'];
$OpD=$_POST['OpD'];
$Corr=$_POST['Correct_option'];
$query="INSERT INTO `$tb` VALUES('$Ques','$OpA','$OpB','$OpC','$OpD','$Corr')";
$run=mysql_query($query);
}

echo "<script>
window.location.href='../dist/Question.php';
</script>"; 

mysql_close($con);
?>