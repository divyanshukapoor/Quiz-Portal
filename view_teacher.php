<?php
	session_start();
	if($_SESSION["email"]==true)
	{
?>
<html>  
<head lang="en">  
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="animate.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/adminprofile.css">	
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View teachers</title>  
		<script type="text/javascript">
       function deleteteacher($email)
	   {
		   var s=<?php
		   $query="delete from `Teacher Info` where email='$email'";
		   $run=mysqli_query($dbcon,$query);
		   ?>
	   }
		</script>
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  +
	
	
	
	
	
	

    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body> 
<div class="table-scrol">  
<br>
<br>
<br> 
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
    
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Teacher Name</th>  
            <th>Teacher E-mail</th>
			<th>Teacher Department</th>			
            <th>Teacher Password</th>  
            <th>Delete Teacher</th>  
        </tr>  
        </thead>
        <?php  
		$dbcon=mysqli_connect('172.31.100.41','quizmnnit','quizportal123');
		mysqli_select_db($dbcon,'dbquizmnnit');
        $view_teachers_query="select * from `Teacher Info` ";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_teachers_query);//here run the sql query.  
        $storeArray=Array();
        while($row=mysqli_fetch_array($run,MYSQL_ASSOC))//while look to fetch the result and store in a array $row.  
        {  
            $teacher_email=$row['email'];  
            $teacher_password=$row['password'];  
            $teacher_name=$row['name'];  
            $teacher_department=$row['department']; 
        ?>  
  
        <tr>  
		<!--here showing results in the table -->  
            <td><?php echo $teacher_name;  ?></td>  
            <td><?php echo $teacher_email;  ?></td>  
            <td><?php echo $teacher_department;  ?></td>  
            <td><?php echo $teacher_password;  ?></td>  
            <td>
			   <a href="php/remove_teacher.php?email=<?php echo $teacher_email;?>"><button class="btn btn-danger" > Delete</button></a>
			</td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php }
		mysqli_close($dbcon);
		?>  
  
    </table>  
        </div>  
</div> 
  
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> 
</body>  
  
</html>
<?php
}
else
{
	echo '<script>parent.window.location.reload(true);</script>';
}
?>  