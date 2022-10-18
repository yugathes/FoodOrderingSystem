<?php
include "../Auth/connection.php";
session_start();
$category = $_SESSION['ownerCategory'];
$catarr = array();
$menuarr = array();

/* $queryGet = "select category,id,menuID from orders ";	
$resultGet = mysqli_query($link,$queryGet);

while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
{
	echo $row['id']."=".$row['category']."=".$row['menuID'];
	//$catarr['category'] = explode("|",$row['category']);
	$catarr[] = $row['category'];
	
	$menuarr[] = explode("|",$row['menuID']);
	echo '<br>';
}
for($i = 0; $i < count($catarr); $i++){
	//echo "Menu ID : ".$menuarr[$i]."<br>"."Category ID : ".$catarr[$i]."<br>";
	$noMenu1[$i] = $menuarr[$i];
	$noCategory1[$i] = explode("|",$catarr[$i]);
}		
echo '<pre>' . var_export($menuarr, true) . '</pre>';
echo '<pre>' . var_export(array_unique($catarr), true) . '</pre>';
$pos = array_search('[1,1,1]', $noMenu1);
echo 'Category 1 : ' . $pos;
echo '<pre>' . var_export($noCategory1, true) . '</pre>';
echo '<pre>' . var_export(array_unique($noCategory1), true) . '</pre>'; */


//var_dump($catarr);
//var_dump($menuarr);
$queryGet = "select * from ordersub WHERE category = '$category'";	
$resultGet = mysqli_query($link,$queryGet);
while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
{
	$queryGetOrd = "select * from orders WHERE id = '".$row['orderID']."'";	
	$resultGetOrd = mysqli_query($link,$queryGetOrd);
	while($rowOrd= mysqli_fetch_array($resultGetOrd, MYSQLI_BOTH))
	{
		$tmp = $rowOrd['datetime'];
		$Dtime = new DateTime($tmp);
		$date = $Dtime->format('d/m/Y');
		$time = $Dtime->format('g:i A');
		$menuarr = explode("|",$row['menu']);
		foreach ($menuarr as $item){
			$resultGetMenu = mysqli_query($link,"SELECT name FROM menu WHERE id = '".$item."'");
			$rowMenu = mysqli_fetch_array($resultGetMenu, MYSQLI_BOTH);
			echo $rowMenu['name'];
			echo "<br>";
		}
		echo $rowOrd['total'];
		echo $rowOrd['username'];
		echo $date;
		echo $time;
	}
}
?>