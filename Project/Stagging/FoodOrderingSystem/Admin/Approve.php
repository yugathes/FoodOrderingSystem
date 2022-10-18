<?php
include("../Auth/connection.php");
		$id = $_POST["id"];
		$appr = $_POST["approve"];
		$user = $_POST["user"];
		$queryInsert = "UPDATE orders SET
		status = '$appr'
		WHERE id = '$id'";

	$resultInsert = mysqli_query($link,$queryInsert);
	if (!$resultInsert)
	{
		die ("Error: ".mysqli_error($link));
	}		
	else {
		if($appr == 2)
		echo '<script type="text/javascript">
			window.onload = function () 
			{ 
			alert("Status been Updated...");
			open("http://localhost/FoodOrderingSystem/mail.php?status=3&user='.$user.'&id='.$id.'","_top");
			}
			</script>';
		if($appr == 3)
			echo '<script type="text/javascript">
			window.onload = function () 
			{ 
			alert("Status been Updated...");
			open("http://localhost/FoodOrderingSystem/mail.php?status=4&user='.$user.'&id='.$id.'","_top");
			}
			</script>';
	}
?>