<?php
	session_start();
	if($_SESSION["teacher_email"]==true)
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
<div class="table-scrol container-fluid">  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
    <h2 align="center" style="font-family:Monospace"><strong> List of Quizes<strong></h2>
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
            <th>Exam ID</th>  
            <th>Subject Code</th>
			<th>No of Questions</th>
			<th>Branch</th>			
            <th>Key</th>  
            <th>Hours</th>
			<th>Minutes</th>
			<th>Edit Quiz</th>
			<th>Delete Quiz</th>
        </tr>  
        </thead>
        <?php  
		$dbcon=mysqli_connect('172.31.100.41','quizmnnit','quizportal123');
		mysqli_select_db($dbcon,'dbquizmnnit');
		$s=substr($_SESSION["teacher_email"],0,strlen($_SESSION["teacher_email"])-12);
        $view_teachers_query="select * from `Test_Info` where Teacher_id='$s'";//select query for viewing users.  
        $run=mysqli_query($dbcon,$view_teachers_query);//here run the sql query.  
        $storeArray=Array();  
        while($row=mysqli_fetch_array($run,MYSQLI_ASSOC))//while look to fetch the result and store in a array $row.  
        {  
		    $examid=$row['Exam_id'];
            $Teacher_id=$row['Teacher_id']; 
            $No_Ques=$row['No_Ques']; 			
            $Subject_code=$row['Subject_code'];  
            $Branch=$row['Branch'];  
            $Test_key=$row['Test_key'];
			$Hours=$row['Hours'];
			$Minutes=$row['Minutes'];
			$status=$row['status'];
			
        ?>  
  
        <tr>  
		<!--here showing results in the table -->  
            <td><?php echo $examid; ?></td>  
            <td><?php echo $Subject_code;  ?></td>  
			<td><?php echo $No_Ques;  ?></td>  
            <td><?php echo $Branch;  ?></td>  
            <td><?php echo $Test_key;  ?></td>
			<td><?php echo $Hours;  ?></td>
			<td><?php echo $Minutes;  ?></td>
            
			<td>
			   <a href="dist/Question.php?id=<?php echo $examid;?>"><button id=<?php echo $examid?> class="btn btn-primary" > Edit</button></a>
			</td>
            <td>
			   <a href="php/delete_quiz.php?id=<?php echo $examid;?>"><button class="btn btn-danger" > Delete</button></a>
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
	header('location:./teacher.html');
}
?>  
