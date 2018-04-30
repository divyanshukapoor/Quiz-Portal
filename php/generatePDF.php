<?php 
require('fpdf.php');

//create a FPDF object
$pdf=new FPDF(); 

//set font for the entire document
$pdf->SetFont('Times','B',20);
$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 
$pdf->SetDisplayMode('default');

//insert an image and make it a link
//$pdf->Image('image/logo.gif',100,10,20,0);


//Set x and y position for the main text, reduce font size and write content

$con=mysql_connect("172.31.100.41","quizmnnit","quizportal123");
mysql_select_db('dbquizmnnit');

$sql="SELECT * FROM `Teacher Info` ";
$result = mysql_query($sql);
$x=20;
$y=20;
while($rows= (mysql_fetch_array($result,MYSQLI_ASSOC)))
{           
    $email = $rows['email'];
    $Teacher_id = $rows['Teacher_id'];
    $password = $rows['password'];
    $name = $rows['name'];
	$department = $rows['department'];

    $pdf->SetXY ($x,$y);
    $pdf->SetFontSize(12);
    $pdf->SetTextColor(0,0,0);
    $pdf->Write(7,$email);
    $pdf->SetXY ($x,$y+5);
    $pdf->Write(7,$Teacher_id);
    $pdf->SetXY ($x,$y+10);
    $pdf->Write(7,$password);
    $pdf->SetXY ($x,$y+15);
    $pdf->Write(7,$name);
	$pdf->SetXY ($x,$y+20);
    $pdf->Write(7,$department);
	$y=$y+30;
    $pdf->Ln(); 
}

//Output the document
$pdf->Output('test.pdf','I');     
?>