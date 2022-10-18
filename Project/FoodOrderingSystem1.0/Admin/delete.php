<?php
include "connection.php";

$user = $_GET['usrID'];

if(isset($user)){
	$queryDelete = "DELETE FROM users WHERE username = '".$user."'";
	$resultDelete = mysqli_query($link,$queryDelete);
	if (!$resultDelete)
	{
		die ("Error: ".mysqli_error($link));
		}		
	else {
		header("Location: Users.php");
	}
}

?>