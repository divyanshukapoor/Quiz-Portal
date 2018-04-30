<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
if(isset($_GET['id']))
{
$id = $_GET['id'];
if(ischeck()==true)
{
$query="delete from `Test_Info` where Exam_id='$id'";
$run=mysqli_query($con,$query);
$tb="question_" . $id;
$q="drop table $tb";
$run=mysqli_query($con,$q);
}
}
echo "<script>
window.location.href='../list_of_quizes.php';
</script>";
function ischeck()
{
	return "<script> return confirm(\"Are you sure,you want to delete?\");</script>" ;
} 
mysqli_close($con);
?>