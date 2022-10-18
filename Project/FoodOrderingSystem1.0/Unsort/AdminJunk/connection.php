<?php

$link = mysqli_connect('localhost', 'globalel_cuti', 'Sz3759779', 'globalel_cuti');
// Check connection
if (mysqli_connect_errno())
{
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die();
}

?>