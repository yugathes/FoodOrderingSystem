<?php
//call this function to check if session exists or not
session_start();

//if session exists
if(isset ($_SESSION["username"])) //session userid gets value from text field named userid, shown in user.php
{	include "Header.php";
	/* $v = 0;
	$v = $_POST['show']; */
	if(isset($_GET['show'])){
		$id = $_GET['id'];
		$queryInsert = "UPDATE feedback SET
		main = '1'
		WHERE id = '$id'";

		$resultInsert = mysqli_query($link,$queryInsert);
		if (!$resultInsert)
		{
			die ("Error: ".mysqli_error($link));
		}		
		else {
			echo '<script type="text/javascript">
				window.onload = function () 
				{ 
				alert("Showing to Homepage...");
				open("customer.php","_top");
				}
				</script>';
		}
	}
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>
<body>

<?php
	$queryGet = "select * from feedback";	
	$resultGet = mysqli_query($link,$queryGet);
	if(!$resultGet)
	{
		die ("Invalid Query - get Items List: ". mysqli_error($link));
	}
	else
	{?>
	<h1 align="center"> Customer's Feedback </h1>
	<table id="table" border="1" align="center" style="width:50%">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Star</th>
			<th>Comment</th>
			<th>Show</th>
			<th>Action</th>
		</tr>	 
		<form>
<?php	$no=1;
		while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		{	?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php 
					$check = (int)$row['star'];
					$a = 5 - $check;
					for($b=0;$b<$check;$b++){
						echo '<span class="fa fa-star checked"></span>';
					}
					for($l=0;$l<$a;$l++){
						echo '<span class="fa fa-star"></span>';
					}?>
				</td>
				<td><?php echo $row['comment']; ?></td>
				<form action="customer.php" action="GET">
				<input type="hidden" name="id" value="<?php echo $row['id'];?>">
				<td>
<?php	if($row['main']==0){?>
					<button type="submit" name="show" value="1"> Show</button>
<?php	}else{	?>	<button disabled> Showing</button>		<?php	}?>			
				</td>
				</form>	
				<td>
					<a href="Delete.php?feedbackid=<?php echo $row['id'];?>" onclick="return confirm('Are you sure?')">
					<img border="0" alt="editB" src="../CSS/btn/delB.png" width="25" height="25"></a></a>
				</td>
			</tr>
<?php	$no++;}?>
		
	</table>
	<script>
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});</script>
<?php	}	}	
else	{
	echo "No session exists or session has expired. Please log in again ";
	echo "Page will be redirect in 5 seconds";
	header('Refresh: 5; ../Auth/Login.php');
}
?>
</body>
</html>
