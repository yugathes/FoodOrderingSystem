<?php
include "../Auth/connection.php";
session_start();
$id = "";
$customer = "";
$user = $_SESSION['username'];
$status = 0;
$total = "";
$menuarr = array();
$errors = array(); 
$newArr = array();
    
if (isset($_POST['checkout'])) {
// receive all input values from the form
	$customer = mysqli_real_escape_string($link, $_POST['username']);
	$total = $_POST['total'];
	$menu = $_SESSION['cart'];
	$menuStr = implode('|',$menu);
	$menuarr = explode("|",$menuStr);
	foreach ($menuarr as $item){
		$resultGetMenu = mysqli_query($link,"SELECT category FROM menu WHERE id = '".$item."'");
		$rowMenu = mysqli_fetch_array($resultGetMenu, MYSQLI_BOTH);
		$newArr[] = $rowMenu['category'];
	}
	$newStr = implode('|',$newArr);
	if (count($errors) == 0) 
	{
		$Cquery = "INSERT INTO orders (id, username, menuID, category, total, status) 
		VALUES (NULL, '$customer', '$menuStr', '$newStr', '$total', '$status')";
		$result= mysqli_query($link, $Cquery);
		if (!$result)
		{
			die("Error:".mysqli_error($link));
			$fail = "Please Check Booking Detail.";
			echo "<script type='text/javascript'>alert('$fail');
			document.location='Menu.php';
			</script>"; 
		}
		else
		{
			$fetchID= mysqli_query($link, "SELECT id FROM orders WHERE total ='".$total."'");
			$row= mysqli_fetch_array($fetchID, MYSQLI_BOTH);
			$ordID = $row['id'];
			for($i = 0; $i < count($menuarr); $i++){
			$query = "INSERT INTO ordersub (id, orderID, menu, category) 
			VALUES (NULL, '$ordID', '$menuarr[$i]', '$newArr[$i]')";
			$result= mysqli_query($link, $query);
			}
			$sucess = "Checkout Added Sucessful.";
			//echo $sucess;
			unset($_SESSION['cart']);
			
			echo "<script type='text/javascript'>alert('$sucess');
			document.location='http://localhost/FoodOrderingSystem/mail.php?status=1&user=".$user."&id=".$ordID."';
			</script>"; 
			
		}
		
    }  
	else
	{   
		$fail = "Please Check Cuti Detaile.";
		echo "<script type='text/javascript'>alert('$fail');
		document.location='status.php';
		</script>"; 
	}
}
?>
