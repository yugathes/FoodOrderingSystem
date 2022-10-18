<?php
//call this function to check if session exists or not
session_start();

//if session exists
if(isset ($_SESSION["username"])) //session userid gets value from text field named userid, shown in user.php
{	include "Header.php";
	$errors = array(); 
	?>
<!DOCTYPE html>
<html>
<head>
<style>
.mid{
	margin: auto;
	width: 50%;
	padding: 10px;
	
}
.content2 {
	margin: auto;
	width: 100%;
	padding: 20px;
	border: 1px solid #483235;
	background: white;
	border-radius: 10px 10px 10px 10px;
}
.input-group2 {
  margin: 10px 0px 10px 0px;
}
.input-group2 label {
	display: inline-flex;  
    margin-bottom: 10px;
	text-align: left;
	margin: 3px;
}
.input-group2 input {
	display: inline;
	float: right;
	height: 30px;
	width: 50%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.input-group2 select {
	display: inline;
	float: right;
	width: 50%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.content button{
	display: block;
	float: right;
	
}
.sort{
	position: relative;
	float:right;
	display: inline;
    width: 100%;
    margin-top: -25px;
	font: black;
}
</style>
</head>
<body>
	<div class="main">
	<div class="sort">
		<a href="Users.php?sort=Owner" style="background-color: darkturquoise;" class="button button2">Owner</a>
		<a href="Users.php?sort=User" style="background-color: palevioletred;" class="button button2">User</a>
	</div>
	<h1 align="center"> Users List </h1>
	
<?php
	if(isset($_GET['sort']))
	{
		if($_GET['sort']=="User"){
			$queryGet = "select * from users WHERE type_user = 'User'";	
			$resultGet = mysqli_query($link,$queryGet);
		}
		if($_GET['sort']=="Owner"){
			$queryGet = "select * from users WHERE type_user = 'Owner'";	
			$resultGet = mysqli_query($link,$queryGet);
		}
	}
	else{
		$queryGet = "select * from users ORDER BY type_user DESC";	
		$resultGet = mysqli_query($link,$queryGet);
	}
	if(!$resultGet)
	{
		die ("Invalid Query - get Items List: ". mysqli_error($link));
	}
	else
	{?>
	<table id="table" border="1" align="center">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Name</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Type User</th>
			<th>Shop Category</th>
			<th>Action</th>
		</tr>	 
		<form>
<?php	$no=1;
		while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		{
			
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['Hp']; ?></td>
				<td><?php echo $row['type_user']; ?></td>
				<td><?php 
						if($row['ownerCategory']=="1")	echo "Melayu";
						if($row['ownerCategory']=="2")	echo "Indian";
						if($row['ownerCategory']=="3")	echo "Chinese";
						if($row['ownerCategory']=="4")	echo "Western";
						if($row['ownerCategory']=="5")	echo "Drinks";
?>	</td>
				<td><a href="UsersEdit.php?id=<?php echo $row['username'];?>">
					<img border="0" alt="editB" src="../CSS/btn/editB.png" width="25" height="25"></a>
					<a href="Delete.php?sid=<?php echo $row['username'];?>" onclick="return confirm('Are you sure?')">
					<img border="0" alt="editB" src="../CSS/btn/delB.png" width="25" height="25"></a></a>
				</td>
			</tr>
<?php	$no++;}?>
		</form>	
	</table>
<?php	}?>	
	<div class="mid">
			<form class="content2" action="Users.php" method="POST">
				<h1 class="header">Owner Registration</h1>
					<div class="input-group2">
						<?php include('Errors.php');?><br>
						<label>Username</label>
						<input type="text" name="username"><br><br>
						<label>Full Name</label>
						<input type="text" name="name"><br><br>
						<label>Email</label>
						<input type="email" name="email"><br><br>
						<label>Password</label>
						<input type="password" name="password"><br><br>
						<label>Contact Number</label>
						<input type="text" name="Hp" placeholder="0123456789"><br><br>
						<label>Shop Category</label>
						<select name="category">
							<option value="0">Choose One</option>
							<option value="1">Melayu</option>
							<option value="2">Indian</option>
							<option value="3">Chinese</option>
							<option value="4">Western</option>
							<option value="5">Drinks</option>
						</select><br><br>
					</div> 	
					<br><br>
					<button type="submit" class="btn" style="margin-top: 25px;" name="register">Register</button>	
			</form>
	</div>
	<br><br><br><br>
<?php
	
	if(isset($_POST["register"])){
		$username = mysqli_real_escape_string($link, $_POST['username']);
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$password = mysqli_real_escape_string($link, $_POST['password']);
		$type_user = "Owner";
		$Hp = $_POST['Hp'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
		if (empty($Hp)) { array_push($errors, "Contact Number is required"); }
		
		$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
		$result = mysqli_query($link, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { // if user exists
			if ($user['username'] === $username) {
			  array_push($errors, "Username already exists");
			}

			if ($user['email'] === $email) {
			  array_push($errors, "email already exists");
			}
		}
		if (count($errors) == 0) {
			//encrypt the password before saving in the database$password = md5($password)
			$query = "INSERT INTO users (username, password, name, email,  Hp, type_user, ownerCategory) 
				  VALUES('$username', '$password', '$name', '$email', '$Hp', '$type_user', '$category')";
			$resultInsert = mysqli_query($link, $query);
			if (!$resultInsert)
			{
				die ("Error: ".mysqli_error($link));
			}		
			else {
				echo '<script type="text/javascript">
					window.onload = function () 
					{ 
					alert("Owner Profile been Registered...");
					open("Users.php","_top");
					}
					</script>';
			}	
		}
	}
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
