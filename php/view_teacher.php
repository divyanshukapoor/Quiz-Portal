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
            echo $teacher_name.PHP_EOL;
			echo $teacher_email.PHP_EOL;
			echo $teacher_department.PHP_EOL;
			echo $teacher_password.PHP_EOL;
		}
	mysqli_close($dbcon);
?>  	
			
			