<?php

// header('Content-type: application/json; charset=UTF-8');

// $response = array();

if (isset($_POST['data_id'])) {

    require_once 'connection.php';

    $data_id = $_POST['data_id'];

        $queryDelete = "DELETE FROM cutiumum WHERE id = '".$data_id."'";
        $resultDelete = mysqli_query($link,$queryDelete);
        if (!$resultDelete)
        {
            die ("Error: ".mysqli_error($link));
            $response['title']  = 'Error';
            $response['status']  = 'error';
            $response['message'] = 'Unable to delete data...';
            }		
        else {
            $response['title']  = 'Deleted !';
            $response['status']  = 'success';
            $response['message'] = 'Data was duccessfully deleted ...';
        }
   



    echo json_encode($response);
}
