<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123");
mysqli_select_db($con,'dbquizmnnit');
$pwd=password_hash("admin", PASSWORD_DEFAULT);
$q="update admin set password='$pwd' where username='admin'";
$r=mysqli_query($con,$q);
mysqli_close($con);
?>