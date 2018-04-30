<?php
 /*function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }
$prompt_msg = 'Enter your email';*/

$to = (isset($_GET['id']) ? $_GET['id'] : ''); 
if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
  echo("<script type='text/javascript'> alert('Invalid Email') </script>");
}
/*if( isset( $_GET['id'])) {
    $to = $_GET['id']; 
	echo $to;
} */
//$token = sha1('localhost/my_quiz/resetPassword.html').dechex(time());
$subject = 'My subject';
$from= 'dbmsmnnit@gmail.com';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

//$txt = 'Reset Your Password At : http://'.$token;

$message = '<html><head></head><body>';
$message .= '<h1 style="color:#f40;">Reset your password here : </h1>';
$message .= '<div id="where_to_insert"><a href="http://localhost/quiz/resetPassword.html">Link Title</a></div>';
$message .= '</body></html>';

mail($to,$subject,$message,$headers)
?>
