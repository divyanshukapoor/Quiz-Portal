<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
if(isset($_GET['id']))
{
$id = $_GET['id'];
$query="update `Test_Info` set status=1 where Exam_id='$id'";
$run=mysqli_query($con,$query); 
$tb="question_" . $id;
$query="select * from $tb;";
$run=mysqli_query($con,$query);
$ans="";
$storeArray=Array();  
while($row=mysqli_fetch_array($run,MYSQLI_ASSOC))
 {
	$ans=$ans . $row['Correct_answer'];
 }
 #echo $ans;
 $query="update `Test_Info` set cor_answer='$ans' where Exam_id='$id'";
 $run=mysqli_query($con,$query);
echo "<script>
window.location.href='../activate_test.php';
</script>";
}
mysqli_close($con);
?>