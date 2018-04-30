<?php
session_start();
?>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  var a=sessionStorage.getItem('len');
  var b=sessionStorage.getItem('count');
  var c=sessionStorage.getItem('unans');
  </script>
  <?php
  $_SESSION["Exam_id"]="";
  ?>
  <style>
body {
  margin-top: 60px;
  background-color:#EBEFF5;
}
</style>
</head>
<body>
<div class="container" >
  <div class="jumbotron" style="border-radius:2%;background-color:#FFFFFF">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center">Your Scorecard</h1>
		<br>
		<br>
		
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          
         
            <h2 class="text-center" style="font-size:28px;font-family:Monospace"><strong>No. of Questions:</strong> 
			<script>
		      document.write(a);
		    </script>
			</h2>
			<h2 class="text-center" style="font-size:28px;font-family:Monospace"><strong>No. of Correct Answers:</strong> 
			<script>
		      document.write(b);
		    </script>
			</h2>
			<h2 class="text-center" style="font-size:28px;font-family:Monospace"><strong>No. of Incorrect Answers:</strong> 
			<script>
		      document.write(a-b-c);
		    </script>
			</h2>
			<h2 class="text-center" style="font-size:28px;font-family:Monospace"><strong>No. of Unanswered Answers:</strong> 
			<script>
		      document.write(c);
		    </script>
			</h2>
         
		<br>
		<h2 class="text-center"><strong>Scores:</strong>
		 <script>
		  document.write(4*b-(a-b-c));
		 </script>
		</h2>
	<div class="row">
	<div class="col-xs-4"></div>
	<div class="col-xs-4">
		<a href="./home.html">
		<button class="btn btn-primary btn-block"><strong>Finish</strong></button></a>
</div>
		<div class="col-xs-4"></div>
		</div>
		</div>
      </div>
    </div>
  </div>
  <footer class="text-center">
    <hr>
    <p> by MNNIT<a href="#" target="_blank">  QuizIt </a>Platform</p>
  </footer>
</div>
</body>
</html>