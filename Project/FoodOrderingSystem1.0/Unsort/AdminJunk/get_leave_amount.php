<?php  

 include("connection.php");

 if(isset($_POST["staff_id"]))  
 {  
  
     $query = "SELECT * FROM jenisCuti WHERE usrID = '".$_POST["staff_id"]."'"; 
    // echo   $query;
      $result = mysqli_query($link, $query );
       if(!$result )
 {
   die ("Invalid Query". mysqli_error($link));
 }
 else
 {
      $row = mysqli_fetch_array($result, MYSQLI_BOTH);
 }

      echo json_encode($row);  
 }  
 ?>
