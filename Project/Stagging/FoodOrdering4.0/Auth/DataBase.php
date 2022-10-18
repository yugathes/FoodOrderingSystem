<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 
$type_user ="";
$Hp = "";


// connect to the database
$ds = mysqli_connect('localhost', 'root', '', 'ordering_system');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($ds, $_POST['username']);
  $email = mysqli_real_escape_string($ds, $_POST['email']);
  $password = mysqli_real_escape_string($ds, $_POST['password']);
  $type_user = "User";
  $Hp = $_POST['Hp'];
  $name = $_POST['name'];


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($Hp)) { array_push($errors, "Contact Number is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($ds, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//encrypt the password before saving in the database$password = md5($password)

  	$query = "INSERT INTO users (username, password, name, email,  Hp, type_user, ownerCategory) 
  			  VALUES('$username', '$password', '$name', '$email', '$Hp', '$type_user', NULL)";
  	mysqli_query($ds, $query) or die( mysqli_error($ds));
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header('location: ../Customer/Menu.php');
	
  }
}
 // LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($ds, $_POST['username']);
  $password = mysqli_real_escape_string($ds, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	  	//encrypt the password before saving in the database$password = md5($password)
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($ds, $query);
  	if (mysqli_num_rows($results) == TRUE) 
	{
	     while($baris= mysqli_fetch_array($results, MYSQLI_BOTH))
	    {
		    $type_user = $baris['type_user'];
	    
			if ($type_user == "User")
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../Customer/Menu.php');
			}
			else if ($type_user == "Owner")
			{
				$_SESSION['username'] = $username;
				$_SESSION['ownerCategory'] = $baris['ownerCategory'];
				$_SESSION['success'] = "You are now logged in";
				header('location: ../Staff/home.php');
			}
			else
			{
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../Admin/home.php');
			}
		}	
	}			 
  	
	else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>