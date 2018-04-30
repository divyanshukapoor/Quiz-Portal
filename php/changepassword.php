<?php
$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');
$oldpwd = $_POST['oldpwd'];
$newpwd =$_POST['newpwd'];
$repwd=$_POST['repwd'];
$query="SELECT * FROM admin where password='$oldpwd' ";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
$count = mysql_num_rows($result);
if(strcmp($_POST['newpwd'],$_POST['repwd'])!=0)
{
  echo "<script>
  alert('Password doesn't match');
  window.location.href='../forgot_password.html';
  </script>";
}
else if($count<=0)
{
  echo "<script>
  alert('Password not updated successfully');
  window.location.href='../forgot_password.html';
  </script>";
}
else if($count==1)
{
  $query="UPDATE admin set password='$newpwd' where username='admin' ";
  $result=mysql_query($query);
  echo "<script>
  alert('Password updated successfully');
  window.location.href='../forgot_password.html';
  </script>";
}
mysql_close($con);
?>