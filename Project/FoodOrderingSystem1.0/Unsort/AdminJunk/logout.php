<?php
ob_start();
session_start();
if (isset($_SESSION["1login_user"]))
	{
		session_destroy();
		header('location: index.php');
	}
else
	echo " No session exists or session is expired. Please log in again <a href='index.php'> here </a>";
?>

