<?php
	session_start();
	if($_SESSION["teacher_email"]==true)
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Teacher</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--===============================================================================================-->	
	<!--link rel="icon" type="image/png" href="images/icons/favicon.ico"/-->
<!--===============================================================================================-->
	<!--link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"-->
<!--===============================================================================================-->
<!--===============================================================================================-->
</head>
<body style="background-color:#eeeeee">
<div class="container">
  <div class="jumbotron">
    <div class="row">
      <div class="col-xs-12 well" style="background:white;margin-top:-20px">
        <h2 class="text-center" style="font-family:Monospace"><strong>Create New Quiz<strong> </h2>
          <hr>
          <form method="post" action="http://localhost/quiz/php/dashEntry.php">
            <div class="input-group">
    <span class="input-group-addon">&nbsp&nbspSubject  Code &nbsp</span>
    <input  type="text" class="form-control" name="Subject_code">
              
  </div>
            <br>
            <div class="input-group">
    <span class="input-group-addon">Question Count&nbsp</span>
    <input  type="number" min="0" class="form-control" name="No_ques" >
  </div>
            <br>
              <div class="input-group">
    <span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTest Key&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
    <input type="password"  class="form-control" name="Test_key" >
  </div>
            <br>
          <div class="input-group">
    <span class="input-group-addon">Confirm Test Key</span>
    <input name="cTest_key" type="password"  class="form-control"  >
  </div>    
            <br>
            <div class="row">
              <div class="col-xs-6">
               <div class="input-group">
    <span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspHour&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
    <input  type="number" min="0" class="form-control" name="Hours" >
  </div>
            </div>
              <div class="col-xs-6">
               <div class="input-group">
    <span class="input-group-addon">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMinutes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
    <input  type="number" min="0" class="form-control" name="Minutes" >
  </div>
            </div>
                </div>
            <br>
			  <div class="form-group">
      <label >Select Branch:</label>
      <select class="form-control" name="Branch" >
       <option value="Information Technology">Information Technology</option>
		<option value="Mechanical Engineering">Mechanical Engineering</option>
		<option value="Electronics and Communication">Electronics and Communication</option>
		<option value="Electrical Engineering">Electrical Engineering</option>
		<option value="Chemical Engineering">Chemical Engineering</option>
		<option value="Civil Engineering">Civil Engineering</option>
		<option value="Production Engineering">Production Engineering</option>
		<option value="BioTechnology Engineering">BioTechnology Engineering</option>
		<option value="Computer Science And Engineering">Computer Science And Engineering</option>
						
      </select>
         </div>

            <br>
           
            <center><button class="btn btn-success input-group-text" style="float:center;">Submit</button>
                   </center>   </form>
        
        
      </div>
    </div> 
  </div>
    
</div>  
</body>
</html>
<?php
}
else
{
	header('location:./teacher.html');
}
?> 