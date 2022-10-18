<?php
//call this function to check if session exists or not
session_start();

//if session exists
if(isset ($_SESSION["username"])) //session userid gets value from text field named userid, shown in user.php
{	include "Header.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
	  box-sizing: border-box;
	}

	/* Float four columns side by side */
	.column {
	  float: left;
	  width: 25%;
	  padding: 0 10px;
	}

	/* Remove extra left and right margins, due to padding */
	.row {margin: 0 20px;color: black;}

	/* Clear floats after the columns */
	.row:after {
	  content: "";
	  display: table;
	  clear: both;
	}

	/* Responsive columns */
	@media screen and (max-width: 600px) {
	  .column {
		width: 100%;
		display: block;
		margin-bottom: 20px;
	  }
	}

	/* Style the counter cards */
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  padding: 16px;
	  text-align: center;
	  background-color: #9ab6c385;
	  color: white;
	  box-shadow: 4px 5px 11px;
	}
	.card p {
		font-size: 25;
		font-weight: bold;
	}
	
</style>
</head>
<body>
<div class="main">
<?php
	date_default_timezone_set('Asia/Kuala_Lumpur');
	$date = date('Y-m-d', time());
	$date = $date.'%';
	
	$ownerQ = "select * from users where type_user='Owner'";	
	$ownerR = mysqli_query($link,$ownerQ);
	$owner = mysqli_num_rows($ownerR);
	
	$customerQ = "select * from users where type_user='User'";	
	$customerR = mysqli_query($link,$customerQ);
	$customers = mysqli_num_rows($customerR);

	$shopQ = "select * from shop";	
	$shopR = mysqli_query($link,$shopQ);
	$shop = mysqli_num_rows($shopR);
	
	$salesQ = "select SUM(total) from orders";	
	$salesR = mysqli_query($link,$salesQ);
	$Crow= mysqli_fetch_array($salesR, MYSQLI_BOTH);
	$sales = $Crow[0];
	
	//Melayu
	$overallM = 0;
	$overallMQ = "select menu from ordersub WHERE category = 1";	
	$overallMR = mysqli_query($link,$overallMQ);
	while($tMrow= mysqli_fetch_array($overallMR, MYSQLI_BOTH)){
		$overallMeQ = "select price from menu WHERE id = '".$tMrow['menu']."'";	
		$overallMeR = mysqli_query($link,$overallMeQ);
		$oMerow= mysqli_fetch_array($overallMeR, MYSQLI_BOTH);
		$overallM += $oMerow[0];
	}
	
	$todayM = 0.00;
	$todayMR = mysqli_query($link,"Select id FROM orders WHERE datetime LIKE '".$date."'");
	
	while($toMrow= mysqli_fetch_array($todayMR, MYSQLI_BOTH)){
		$today2MQ = "select menu from ordersub WHERE category = 1 AND orderID = '".$toMrow['id']."'";	
		$today2MR = mysqli_query($link,$today2MQ);
		while($to2Mrow= mysqli_fetch_array($today2MR, MYSQLI_BOTH)){		
			$todayMeQ = "select price from menu WHERE id = '".$to2Mrow['menu']."'";	
			$todayMeR = mysqli_query($link,$todayMeQ)or die( mysqli_error($link));
			$toMerow= mysqli_fetch_array($todayMeR, MYSQLI_BOTH);
			$todayM += $toMerow[0];
		}
	}
	//Indian
	$overallI = 0;
	$overallIQ = "select menu from ordersub WHERE category = 2";	
	$overallIR = mysqli_query($link,$overallIQ);
	while($tIrow= mysqli_fetch_array($overallIR, MYSQLI_BOTH)){
		$overallInQ = "select price from menu WHERE id = '".$tIrow['menu']."'";	
		$overallInR = mysqli_query($link,$overallInQ);
		$oInrow= mysqli_fetch_array($overallInR, MYSQLI_BOTH);
		$overallI += $oInrow[0];
	}
	
	$todayI = 0.00;
	$todayIR = mysqli_query($link,"Select id FROM orders WHERE datetime LIKE '".$date."'");
	while($toIrow= mysqli_fetch_array($todayIR, MYSQLI_BOTH)){
		$today2IQ = "select menu from ordersub WHERE category = 2 AND orderID = '".$toIrow['id']."'";	
		$today2IR = mysqli_query($link,$today2IQ);
		while($to2Irow= mysqli_fetch_array($today2IR, MYSQLI_BOTH)){
			$todayInQ = "select price from menu WHERE id = '".$to2Irow['menu']."'";	
			$todayInR = mysqli_query($link,$todayInQ)or die( mysqli_error($link));
			$toInrow= mysqli_fetch_array($todayInR, MYSQLI_BOTH);
			$todayI += $toInrow[0];
		}
	}
	//Chinese
	$overallC = 0;
	$overallCQ = "select menu from ordersub WHERE category = 3";	
	$overallCR = mysqli_query($link,$overallCQ);
	while($tCrow= mysqli_fetch_array($overallCR, MYSQLI_BOTH)){
		$overallChQ = "select price from menu WHERE id = '".$tCrow['menu']."'";	
		$overallChR = mysqli_query($link,$overallChQ);
		$oChrow= mysqli_fetch_array($overallChR, MYSQLI_BOTH);
		$overallC += $oChrow[0];
	}
	
	$todayC = 0.00;
	$todayCR = mysqli_query($link,"Select id FROM orders WHERE datetime LIKE '".$date."'");
	while($toCrow= mysqli_fetch_array($todayCR, MYSQLI_BOTH)){
		$today2CQ = "select menu from ordersub WHERE category = 3 AND orderID = '".$toCrow['id']."'";	
		$today2CR = mysqli_query($link,$today2CQ);
		while($to2Crow= mysqli_fetch_array($today2CR, MYSQLI_BOTH)){
			$todayChQ = "select price from menu WHERE id = '".$to2Crow['menu']."'";	
			$todayChR = mysqli_query($link,$todayChQ)or die( mysqli_error($link));
			$toChrow= mysqli_fetch_array($todayChR, MYSQLI_BOTH);
			$todayC += $toChrow[0];
		}
	}
	
	//Western
	$overallW = 0;
	$overallWQ = "select menu from ordersub WHERE category = 4";	
	$overallWR = mysqli_query($link,$overallWQ);
	while($tWrow= mysqli_fetch_array($overallWR, MYSQLI_BOTH)){
		$overallWeQ = "select price from menu WHERE id = '".$tWrow['menu']."'";	
		$overallWeR = mysqli_query($link,$overallWeQ);
		$oWerow= mysqli_fetch_array($overallWeR, MYSQLI_BOTH);
		$overallW += $oWerow[0];
	}
	
	$todayW = 0.00;
	$todayWR = mysqli_query($link,"Select id FROM orders WHERE datetime LIKE '".$date."'");
	
	while($toWrow= mysqli_fetch_array($todayWR, MYSQLI_BOTH)){
		
		$today2WQ = "select menu from ordersub WHERE category = 4 AND orderID = '".$toWrow['id']."'";	
		$today2WR = mysqli_query($link,$today2WQ);
		while($to2Wrow= mysqli_fetch_array($today2WR, MYSQLI_BOTH)){
		
			$todayWeQ = "select price from menu WHERE id = '".$to2Wrow['menu']."'";	
			$todayWeR = mysqli_query($link,$todayWeQ)or die( mysqli_error($link));
			$toWerow= mysqli_fetch_array($todayWeR, MYSQLI_BOTH);
			$todayW += $toWerow[0];
		}
	}
	$overallD = 0;
	$overallDQ = "select menu from ordersub WHERE category = 5";	
	$overallDR = mysqli_query($link,$overallDQ);
	while($tDrow= mysqli_fetch_array($overallDR, MYSQLI_BOTH)){
		$overallDrQ = "select price from menu WHERE id = '".$tDrow['menu']."'";	
		$overallDrR = mysqli_query($link,$overallDrQ);
		$oDrrow= mysqli_fetch_array($overallDrR, MYSQLI_BOTH);
		$overallD += $oDrrow[0];
	}
	$todayD = 0.00;
	$todayDR = mysqli_query($link,"Select id FROM orders WHERE datetime LIKE '".$date."'");
	while($toDrow= mysqli_fetch_array($todayDR, MYSQLI_BOTH)){
		
		$today2DQ = "select menu from ordersub WHERE category = 5 AND orderID = '".$toDrow['id']."'";	
		$today2DR = mysqli_query($link,$today2DQ);
		while($to2Drow= mysqli_fetch_array($today2DR, MYSQLI_BOTH)){
		
			$todayDrQ = "select price from menu WHERE id = '".$to2Drow['menu']."'";	
			$todayDrR = mysqli_query($link,$todayDrQ)or die( mysqli_error($link));
			$toDrrow= mysqli_fetch_array($todayDrR, MYSQLI_BOTH);
			$todayD += $toDrrow[0];
		}
	}
	?>
	<h1 align="center"> Statistics </h1>
	<div class="row">
		<div class="column">
			<div class="card">
				<h3>Total Shop Owner</h3>
				<p><?php echo $owner;?></p>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<h3>Total Customer</h3>
				<p><?php echo $customers;?></p>
			</div>
		</div>
  
		<div class="column">
			<div class="card">
				<h3>Total Shop</h3>
				<p><?php echo $shop;?></p>
			</div>
		</div>
  
		<div class="column">
			<div class="card">
				<h3>Overall Sales</h3>
				<p>RM<?php echo $sales;?></p>
			</div>
		</div>
	</div>
	<h1 align="center"> Sales of Each Shop</h1>
	<div class="row">
		<div class="column">
			<div class="card" style="background-color: #31af2e;">
				<h3>Today Sales Melayu </h3>
				<p>RM<?php echo $todayM;?></p>
			</div>
		</div>
		<div class="column">
			<div class="card" style="background-color: #31af2e;">
				<h3>Overall Sales Melayu</h3>
				<p>RM<?php echo $overallM;?></p>
			</div>
		</div>
  
		<div class="column">
			<div class="card" style="background-color: #ebb142;">
				<h3>Today Sales Indian </h3>
				<p>RM<?php echo $todayI;?></p>
			</div>
		</div>
  
		<div class="column">
			<div class="card" style="background-color: #ebb142;">
				<h3>Overall Sales Indian</h3>
				<p>RM<?php echo $overallI;?></p>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="column">
			<div class="card" style="background-color: #b467e5;">
				<h3>Today Sales Chinese </h3>
				<p>RM<?php echo $todayC;?></p>
			</div>
		</div>
		<div class="column">
			<div class="card" style="background-color: #b467e5;">
				<h3>Overall Sales Chinese</h3>
				<p>RM<?php echo $overallC;?></p>
			</div>
		</div>
  
		<div class="column">
			<div class="card" style="background-color: #e9513a;">
				<h3>Today Sales Western </h3>
				<p>RM<?php echo $todayW;?></p>
			</div>
		</div>
  
		<div class="column">
			<div class="card" style="background-color: #e9513a;">
				<h3>Overall Sales Western</h3>
				<p>RM<?php echo $overallW;?></p>
			</div>
		</div>
	</div>
	<br>
	<center>
	<div class="row">
		<div class="column">
			<div class="card" style="background-color: #d7d749;">
				<h3>Today Sales Drinks </h3>
				<p>RM<?php echo $todayD;?></p>
			</div>
		</div>
		<div class="column">
			<div class="card" style="background-color: #d7d749;">
				<h3>Overall Sales Drink</h3>
				<p>RM<?php echo $overallD;?></p>
			</div>
		</div>		
	</div>
	</center>
<?php
}	
else	{
	echo "No session exists or session has expired. Please log in again ";
	echo "Page will be redirect in 5 seconds";
	header('Refresh: 5; ../Auth/Login.php');
}
?>
</div>
</body>
</html>
