<?php
$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');
if(isset($_GET['id']))
{
$id = $_GET['id'];
if(ischeck()==true)
{
$query="delete from `Test_Info` where Exam_id='$id'";
$run=mysql_query($query);
}
}
echo "<script>
window.location.href='../list_of_quizes.php';
</script>";
function ischeck()
{
	return "<script> return confirm(\"Are you sure,you want to delete?\");</script>" ;
} 
mysql_close($con);
?>