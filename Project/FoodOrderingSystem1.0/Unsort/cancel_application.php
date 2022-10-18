
<?php


$response = array();

if (isset($_POST['leave_id'])) {

    require_once 'admin/connection.php';

    $leave_id = $_POST['leave_id'];

    // $queryGet = "select * from Cuti where  id= '".$user."' AND  status='3' ";	

    $query = "UPDATE Cuti SET status= '3' WHERE id ='".  $leave_id."'";
     // echo  $query ;

     

      $result = mysqli_query($link, $query);
      if (!$result)
      {
            $response['title']  =  'Unsuccessful...';
        $response['status']  = 'error';
        $response['message'] = 'Unable to cancel leave application...'; 
      }
      else
      {

        $response['title']  =  'Successful...';
        $response['status']  = 'success';
        $response['message'] = 'Leave application successfully cancelled ...';

      }

      

    
    
    echo json_encode($response);
}
