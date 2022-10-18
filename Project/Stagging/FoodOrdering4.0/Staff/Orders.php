<?php
//call this function to check if session exists or not
session_start();
//if session exists
if(isset ($_SESSION["username"])) //session userid gets value from text field named userid, shown in user.php
{	include "Header.php";
	$category = $_SESSION['ownerCategory'];?>
<!DOCTYPE html>
<html>
<head>
<style>
.sort{
	position: relative;
	float:right;
	display: inline;
    width: 100%;
    margin-top: -25px;
	margin-bottom: 25px;
	font: black;
	
}
</style>
</head>
<body>
	<div class="main">

<?php
		$queryGet = "select * from ordersub WHERE category = '$category'";	
		$resultGet = mysqli_query($link,$queryGet);
		echo "<h1 align='center'>All Orders</h1>";
?>
	<table id="table" border="1" align="center">
		<tr>
			<th>No</th>
			<th>Menu</th>
			<th>Total</th>
			<th>Username</th>
			<th>Date</th>
			<th>Time</th>
			<th>Status</th>
		</tr>	
<?php	$no=1;
		while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		{
			$queryGetOrd = "select * from orders WHERE id = '".$row['orderID']."'";	
			$resultGetOrd = mysqli_query($link,$queryGetOrd);		
			$menuarr = array();
		while($rowOrd= mysqli_fetch_array($resultGetOrd, MYSQLI_BOTH))
		{	
			$tmp = $rowOrd['datetime'];
            $Dtime = new DateTime($tmp);
			$date = $Dtime->format('d/m/Y');
			$time = $Dtime->format('g:i A');
		?>
		<tr>
			<td><?php echo $rowOrd['id'];?></td>
			<td><?php 
				$menuarr = explode("|",$row['menu']);
				foreach ($menuarr as $item){
					$resultGetMenu = mysqli_query($link,"SELECT name FROM menu WHERE id = '".$item."'");
					$rowMenu = mysqli_fetch_array($resultGetMenu, MYSQLI_BOTH);
					echo $rowMenu['name'];
					echo "<br>";
				}?>
			</td>
			<td><?php echo $rowOrd['total'];?></td>
			<td><?php echo $rowOrd['username'];?></td>
			<td><?php echo $date;?></td>
			<td><?php echo $time;?></td>
			<td><?php	
			if($rowOrd['status']=="0")	echo "<p style='color: #ff8d00;'>Waiting For Payment</p>"; 
			if($rowOrd['status']=="1")	echo "<p style='color: #b7b72c;'>Waiting For Approval</p>"; 
			if($rowOrd['status']=="2")	echo "<p style='color: green;'>Approved</p>"; 
			if($rowOrd['status']=="3")	echo "<p style='color: red;'>Declined</p>"; 
			?></td>
		</tr>
		<?php	$no++;	}}?>
	</table>
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
