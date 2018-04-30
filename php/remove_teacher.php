<?php
$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');

if(isset($_GET['email']))
{
$email = $_GET['email'];
$query="delete from `Teacher Info` where email='$email'";
$run=mysql_query($query);
}
echo "<script>
window.location.href='../view_teacher.php';
</script>";
mysql_close($con);
?>