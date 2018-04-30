<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
$oldpwd = $_POST['oldpwd'];
$newpwd =$_POST['newpwd'];
$repwd=$_POST['repwd'];
$query="SELECT * FROM admin where password='$oldpwd' ";
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
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
  $result=mysqli_query($con,$query);
  echo "<script>
  alert('Password updated successfully');
  window.location.href='../forgot_password.html';
  </script>";
}
mysqli_close($con);
?>