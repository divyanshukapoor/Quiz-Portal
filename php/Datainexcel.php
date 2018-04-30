<?php  
//export.php  
$connect = mysqli_connect("172.31.100.41", "quizmnnit", "quizportal123", "dbquizmnnit");
$output = '';

 $query = "SELECT * FROM `Teacher Info`";
 $result = mysqli_query($connect, $query) or die(mysqli_error());
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Email</th>  
                         <th>Teacher_Id</th>  
                         <th>Name</th>  
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
   $output .= '
    <tr>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["Teacher_id"].'</td>  
                         <td>'.$row["name"].'</td>  
  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download1.xls');
  echo $output;
 }
?>