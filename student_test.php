<?php 
session_start();
$Exam_id=$_SESSION['Exam_id'];
$Stu_exam=$_SESSION['Stu_exam'];
if($Exam_id==true)
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Test Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/stud_test.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
	var no_ques;
	var ans_string="";
	var radiobtn="z";
	
function formatTime(seconds) {
    var h = Math.floor(seconds / 3600),
        m = Math.floor(seconds / 60) % 60,
        s = seconds % 60;
    if (h < 10) h = "0" + h;
    if (m < 10) m = "0" + m;
    if (s < 10) s = "0" + s;
    return h + ":" + m + ":" + s;
}
var count = 20;//give the duration of timer here
var counter = setInterval(timer, 1000);

function timer() {
    count--;
    //if (count < 0) return clearInterval(counter);
	if (count == 0)
	{
		storeans();
		alert("Test Has Ended..!!!");
		window.location.href="php/calculate_result.php";
	}
    document.getElementById('timer').innerHTML = formatTime(count);
}

function fun(a,b)
{
	var variab;
	var elem;
	if(a==0)
		a=1;
	if(a<=no_ques)
	{
	for(i=1;i<=b;i++)
	{
		if(i!=a)
		{
			variab='form'+i;
			elem=document.getElementById(variab);
			elem.style.display = "none";
		}
		else
		{
			variab='form'+a;
			elem=document.getElementById(variab);
			elem.style.display = "block";
		}
	}
	}
}
function fun2(x)
{
	l=ans_string.length;
	ans_string=ans_string.substring(0,x)+radiobtn+ans_string.substring(x+1,l);
	 radiobtn="z";
	console.log(ans_string);
}
function colorc(x)
{
	y="btn"+(x+1);
	//console.log(y);
	elem2=document.getElementById(y);
	elem2.style.backgroundColor="#4CAF50";
	elem2.style.color="white";
}
function unselect(x)
{
	
	y="btn"+(x+1);
	ans_string=ans_string.substring(0,x)+"f"+ans_string.substring(x+1,l);
	console.log(ans_string);
	elem2=document.getElementById(y);
	elem2.style.backgroundColor="white";
	elem2.style.color="black";
}
function unselectradio(x)
{
	var ele = document.getElementsByName("indoor-outdoor"+x);
   for(var i=0;i<ele.length;i++)
      ele[i].checked = false;
}
function clicka()
{
	radiobtn="a";
}
function clickb()
{
	radiobtn="b";
}
function clickc()
{
	radiobtn="c";
}
function clickd()
{
	radiobtn="d";
}
function storeans()
{
	sessionStorage.setItem("ans", ans_string);
}
document.onkeydown = function(event) 
{ 
/*switch (event.keyCode) { 
case 116: //F5 button 
event.returnValue = false; 
event.keyCode = 0; 
return false; 
case 82: //R button 
if (event.ctrlKey) { 
event.returnValue = false; 
event.keyCode = 0; 
return false; 
}
case 27: //esc button
if (event.ctrlKey) { 
event.returnValue = false; 
event.keyCode = 0; 
return false; 
} 
} */
}

var ss=2;
document.addEventListener('contextmenu', event => event.preventDefault());
$(document).keyup(function(e){
   if(e.which==122 && ss!=0){
	   ss=ss-1;
       e.preventDefault();//kill anything that browser may have assigned to it by default
       //do what ever you wish here :)
	   if(ss==1)
	   {		   
       alert('F11 pressed again and test will be ended ☺☺!!');
	   }
       return false;
   }
   else if(e.which==122)
   {
	   alert("bye bye");
	   sessionStorage.setItem("ans", ans_string);
	   window.open("./php/calculate_result.php","_self");
   }
});
		</script>
<style>
	.questionl
	{
		overflow-y:scroll;
		overflow-x:scroll;
	}
	.button-pane
	{
	width: 230px;
    height: 500px;
    overflow-y:scroll;
    overflow-x:hidden;
	margin-left:20px;
	}
	.btn_ques{
		width:50px;
		height:33px;
		font-size: 24px;
		border: 2px groove #4CAF50;
		margin: 2px;
	}
	.btn_ques:hover{
		background-color: #4CAF50;
		color: white;
	}
	.btn_ques:onmouseleave{
		background-color:white;
		color:black;
	}
	#navcolor{
		background-color:black;
	}
	#bbtn{
		margin-left:36px;
	}
</style>
</head>
<body onload="fun(1,1000)">
<nav class="navbar navbar-inverse" id="navcolor">
  <div class="container-fluid">
	<a href="#" class="navbar-left"><img src="images/logom.png"></a>
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white">Test Has Started.. All the Best</a>
    </div>
	<div id="timerstuff" >
    <ul class="nav navbar-nav">
      <li class="active">
	  <div style="color:white">
	  <b>Time left</b>
		<p id="timer" style="color:white"></p></li>
    </ul>
	
   <a href="php/calculate_result.php" onclick="storeans();"> 
<button class="btn btn-danger navbar-btn" id="bbtn" >End Test</button>
   </a>
	</div>
  </div>
</nav>

<div>
<div class="button-pane" id="navai" style="position:fixed;height:560px;">
<?php
//echo "Hello";
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123","dbquizmnnit");
//$examid = $_POST['email'];
$query="SELECT * FROM `Test_Info` WHERE Exam_id='$Exam_id' ";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$nos=$row['No_Ques'];
echo "<script>
no_ques=$nos;
</script>";
for($x=1;$x<=$nos;$x++)
{?>
<script>
ans_string+="f";
</script>
<?php}
//echo "the result is ".$nos;
for($x=1;$x<=$nos;$x++)
{ ?>	
	<button type="submit" class="btn_ques" onclick="fun(<?= $x ?>,<?= $nos ?>)" id="btn<?= $x ?>"><?= $x ?></button>&nbsp;&nbsp;
	<?php
	if($x%3==0)
		echo "<br>";
}
mysqli_close($con);
?>
</div >
<div id="questions">
<div class="questionl" id="rcorners35">

<div class="container-fluid well" >
<?php
$con=mysqli_connect("172.31.100.41","quizmnnit","quizportal123","dbquizmnnit");
//$examid = $_POST['email'];
$tb="question_" . $Exam_id;
$query="SELECT * FROM `$tb`";
if($result=mysqli_query($con,$query))
{?>

<?php
while($row=mysqli_fetch_assoc($result))
{
$qid=$row['Qid'];
$question=$row['Question'];
$opa=$row['OpA'];
$opb=$row['OpB'];
$opc=$row['OpC'];
$opd=$row['OpD'];
?>

	<form class="div_ques" id="form<?= $qid ?>" >
  	<div class="row">
    <div class="col-sm-12 well" style="background-color:#b3ffb3">
      <p>Q<?= $qid ?>.  <?= $question ?></p>
    </div>
    </div>
    <div class="row well" style="background-color:#DCDCDC"><!--#BDFBFF-->
    <div class="col-sm-12">
      <label><input type="radio"name="indoor-outdoor<?= $qid ?>" onclick="clicka(); fun2(<?= $qid-1 ?>); colorc(<?= $qid-1 ?>);"><?= $opa ?></label>
    </div>
    </div>
    <div class="row well" style="background-color:#DCDCDC">
    <div class="col-sm-12">
      <label><input type="radio"name="indoor-outdoor<?= $qid ?>" onclick="clickb(); fun2(<?= $qid-1 ?>); colorc(<?= $qid-1 ?>);"><?= $opb ?></label>
    </div>
    </div>
    <div class="row well" style="background-color:#DCDCDC">
    <div class="col-sm-12">
      <label><input type="radio"name="indoor-outdoor<?= $qid ?>" onclick="clickc(); fun2(<?= $qid-1 ?>); colorc(<?= $qid-1 ?>);"><?= $opc ?></label>
    </div>
    </div>
    <div class="row well" style="background-color:#DCDCDC">
    <div class="col-sm-12" >
      <label><input type="radio"name="indoor-outdoor<?= $qid ?>" onclick="clickd(); fun2(<?= $qid-1 ?>); colorc(<?= $qid-1 ?>)"><?= $opd ?></label>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-sm-4">
    <div class="row">
	<div class="col-sm-4">
	<button class="btn btn-block btn-primary" type='button' onclick="fun(<?= $qid-1 ?>,<?= $qid ?>)">Previous</button>
	</div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
    
    </div>
    </div>
    <div class="col-sm-4">
    <div class="row">
	<div class="col-sm-4"></div>
    
    <div class="col-sm-4">
	<button class="btn btn-block btn-danger" type='button' onclick="unselect(<?= $qid-1 ?>); unselectradio(<?= $qid ?>);">Undo</button>
	</div>
    <div class="col-sm-4"></div>
    
    </div>
    </div><div class="col-sm-4">
    <div class="row">
	<div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
    
    <div class="col-sm-4">
	<button class="btn btn-block btn-primary" type='button' onclick="fun(<?= $qid+1 ?>,<?= $qid+1 ?>)">Next</button>
	</div>
    
    </div>
    </div>
    </div>
</form>
	<?php
	}
}
mysqli_close($con);
?>
</div ><!--div in which forms of questions-->
</div><!-- questionl-->
</div><!--questions-->
</div><!--buttonpane+question pane-->
</body>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
</html>

<?php
}
else
{
header('locaion:./student.php');
}
?>