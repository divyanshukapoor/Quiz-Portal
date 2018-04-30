<script>
var s=sessionStorage.getItem("ans");
var str=s.toUpperCase();
var c=0;
var u=0;
function fun(y)
{
	console.log(str);
	for(i=0;i<y.length;i++)
	{
		if(str[i]==y[i])
			c++;
	}
	for(i=0;i<y.length;i++)
	{
		if(str[i]=='F')
			u++;
	}
	sessionStorage.setItem("unans",u);
	sessionStorage.setItem("count",c);
	sessionStorage.setItem("len",y.length);
	console.log(u);
}
</script>
<?php
session_start();
$Exam_id=$_SESSION['Exam_id'];
$stu_exam=$_SESSION['Stu_exam'];
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
$query="select * from Test_Info where Exam_id='$Exam_id'";
$run=mysqli_query($con,$query);
$row=mysqli_fetch_array($run,MYSQLI_ASSOC);
$cor_ans=$row['cor_answer'];
$c=10;
echo "<script> fun('$cor_ans');</script>";
//echo $_SESSION['count'];
echo "<script>
window.location.href='../result_display.php';
</script>";
mysqli_close($con);
?>