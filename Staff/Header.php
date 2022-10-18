<head>
<?php 	include "../Auth/connection.php";
		$direct = dirname($_SERVER['PHP_SELF']); $newD = explode("/", $direct);?>

    <title><?php echo end($newD);?> System</title>
    <link rel="stylesheet" type="text/css" href="../CSS/topNav.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body {font-family: "Lato", sans-serif;}

	.sidebar {
	  height: 100%;
	  width: 12%;
	  position: fixed;
	  z-index: 1;
	  top: 0;
	  left: 0;
	  background-color: #1D96D1;
	  overflow-x: hidden;
	  padding-top: 50px;
	}

	.sidebar a {
		padding: 14px 16px;
		color: aliceblue;
		text-decoration: none;
		border-width: thin;
		border-color: black;
		border-style: outset;
		font-size: 17px;
		display: block;
	}

	.sidebar a:hover {
	  color: darkgrey;
	}
	
	.sidebar a.active {
		background-color: #6F7378;
		color: white;
	}
	.main {
	  margin-left: 12%; /* Same as the width of the sidenav */
	  padding: 0px 10px;
	  margin-top:-30px;
	}

	@media screen and (max-height: 450px) {
	  .sidebar {padding-top: 15px;}
	  .sidebar a {font-size: 18px;}
	}
	</style>
	<div class="sidebar">
        <a <?php if (basename($_SERVER['PHP_SELF']) == "home.php") echo "class='active'"?> href="home.php">
			<i class="fa fa-fw fa-home"></i>Menu
		</a>
		<a <?php if (basename($_SERVER['PHP_SELF']) == "Menu.php") echo "class='active'"?> href="Menu.php">
			<i class="fa fa-fw fa-cutlery"></i>Food Menu</a>
		<a <?php if (basename($_SERVER['PHP_SELF']) == "Orders.php") echo "class='active'"?> href="Orders.php">
			<i class="fa fa-fw fa-shopping-cart"></i>Orders
		</a>
	</div>
	<div class="topnav">
		<img src="../css/logo2.png" alt="" style="float: left;width:50;height:50px;">
		<h1 style="float: left;display:block;color: aliceblue;text-align: center;padding: 14px 16px;font-family: Times New Roman;font-size: 22px;padding-bottom: 10px;margin-top: 0px;margin-bottom: 0px;">
			APU Cafeteria Ordering Website
		</h1>
	<div class="auth">
<?php if(isset ($_SESSION["username"])) //session userid gets value from text field named userid, shown in user.php
    {?>
	    <a style="background-color:#6f7378;" href="../Auth/Logout.php"> Logout </a>
<?php	
	}
	else
	{
	?>
	    <a style="background-color:#6f7378;" href="../Auth/Login.php"> Login </a>
<?php
	}?>
		</div>
	</div>
</head>
<h3 style="color:white;margin-left: 250px;position: relative;">Hi <?php echo $_SESSION["username"];?>, Welcome</h3>
<div class="left-sidebar">
<?php //include 'count.php';?>
</div>
