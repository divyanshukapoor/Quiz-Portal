<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');

if(isset($_GET['email']))
{
$email = $_GET['email'];
$query="delete from `Teacher Info` where email='$email'";
$run=mysqli_query($con,$query);
}
echo "<script>
window.location.href='../view_teacher.php';
</script>";
mysqli_close($con);
?>