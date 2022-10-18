<?php
session_start();
//session_destroy();

if(isset($_GET['remove'])){
	$key=array_search($_GET['remove'],$_SESSION['cart']);
	if($key!==false)
		unset($_SESSION['cart'][$key]);
	$_SESSION["cart"] = array_values($_SESSION["cart"]);
}
if(isset($_GET['removeAll'])){
	
	unset($_SESSION['cart']);
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body style="background-image: url('../css/bc.jpg');background-position: center;background-size: cover;background-attachment: fixed;">
   <div class="CartContainer">
		<div class="Header">
			<h3 class="Heading">Food Cart</h3>
			<h5 class="Action"><a href="ListCart.php?removeAll">Remove all</a></h5>
		</div>
		<form action="CheckOut.php" method="POST">
<?php
	$subtotal = 0.00;
	$no	= 0;
	if(isset($_SESSION['cart'])){
		foreach ($_SESSION["cart"] as $item){
			include "../Auth/connection.php";
			$queryGetQ = "select * from menu WHERE id='".$item."'";	
			$resultGetQ = mysqli_query($link,$queryGetQ);
			if(!$resultGetQ)
			{
				die ("Invalid Query - get Items List: ". mysqli_error($link));
			}
			else
			{
				while($rows = mysqli_fetch_array($resultGetQ, MYSQLI_BOTH)) {
				$no++;
				$subtotal += $rows['price'];
				?>
				
				<div class="Cart-Items">
					<div class="image-box">
						<img src="../MenuIMG/<?php echo $rows['image'];?>" alt="<?php echo $rows['image'];?>;?>" width="120px" style={{ height="120px" }} />
					</div>
					<div class="about">
						<h1 class="title"><?php echo $rows['name'];?></h1>
						<h3 class="subtitle"><?php 
						if($rows['category']=="1")	echo "Melayu";
						if($rows['category']=="2")	echo "Indian";
						if($rows['category']=="3")	echo "Chinese";
						if($rows['category']=="4")	echo "Western";
						if($rows['category']=="5")	echo "Drinks";
?>					</h3>
					</div>

					<div class="prices">
						<div class="amount">RM<?php echo $rows['price'];?></div>
						<div class="remove"><a href="ListCart.php?remove=<?php echo $item;?>"><u>Remove</u></a></div>
					</div>
				</div>
	<?php		}
			}
		}
	}
	else{?>
   	   <div class="Cart-Items">
			<h1 style="width: 100%;text-align: center;">Empty cart</h1>
	   </div>
	<?php	}?>
   	   
   	 <hr> 
   	<div class="checkout">
		<div class="total">
			<div>
				<div class="Subtotal">Sub-Total</div>
				<div class="items"><?php echo $no;?> items</div>
			</div>
			<div class="total-amount">RM<?php echo $subtotal;?></div>
			<input type="hidden" name="total" value="<?php echo $subtotal;?>">
			<input type="hidden" name="username" value="<?php echo $_SESSION["username"]?>">
		</div>
		
		<input type="submit" value="Checkout" name="checkout" class="button" style="float:right;"></i>
		<button class="button"><a class="button" href="Menu.php">Continue Shopping</a></button>
	</div>
	</form>
   </div>
</body>
</html>

