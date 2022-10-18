<?php
ob_start();
session_start();

// initializing variables
$uID = "";
$name = "";
$password = "";
$username ="";
$number    = "";
$email    = "";
$type_user = "";
$address = "";
$date = "";
$errors = array(); 

// connect to the database
$ds = mysqli_connect('localhost', 'thesouth_yuga', '~6C^h8K3W+k1', 'thesouth_cuti');

// REGISTER USER
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//if (isset($_POST['AddClient'])) {
else{
    echo "Test etsjs";
  // receive all input values from the form
	$name = mysqli_real_escape_string($ds, $_POST['name']);
	$email = mysqli_real_escape_string($ds, $_POST['email']);
	$password = mysqli_real_escape_string($ds, $_POST['password']);
	$number = mysqli_real_escape_string($ds, $_POST['number']);
	$username = mysqli_real_escape_string($ds, $_POST['username']);
	$jabatan = mysqli_real_escape_string($ds, $_POST['jabatan']);
	$type_user = "Staff";
	date_default_timezone_set('Asia/Kuala_Lumpur');
    $datetime = date('Y-m-d G:i:s ', time());
    $date = new DateTime($datetime);
    
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Full Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) {array_push($errors, "Password is required");}
  if (empty($username)) { array_push($errors, "Trading Name is required"); }
  if (empty($number)) { array_push($errors, "Loyalty Rank is required"); }
  if (empty($jabatan)) { array_push($errors, "Address is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($ds, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['$username'] === $email) {
      array_push($errors, "email already exists");
    }
  }
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO users(usrID, username, name, Hp, dept, date, email, password, type_user) 
  			  VALUES('$uID', '$username', '$name', '$number', '$dept', '$date', '$email', '$password', '$type_user')";
  	$result = mysqli_query($ds, $query);
  	if (!$result)
	{
	    $fail = "Please Check Registeration.";
        echo "<script type='text/javascript'>alert('$fail');
	    document.location='tambah.php';
	    </script>";
	}
	else
	{
	    if (!$resultC)
    	{
            die ("Invalid Query - get Items List: ". mysqli_error($ds));
    	}
	    else
	    {
	     $sucess = "Client Registeration Sucessful.";
	    echo "<script type='text/javascript'>alert('$sucess');
	    document.location='tambah.php';
	    </script>";
	    }
	}
	
  }
  else{
      echo "Failed";
      print_r($errors);
  }
  
}


 // LOGIN USER

if (isset($_POST['loginAdm'])) {
  $username = mysqli_real_escape_string($ds, $_POST['username']);
  $password = mysqli_real_escape_string($ds, $_POST['password']);
  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($ds, $query);
  	if (mysqli_num_rows($results) == TRUE){
  	    $_SESSION['1login_user']= $username;
  	    header('Location:dashboard.php');
  	    die();
  	}
	else {
	    $Lfail = "Wrong username/password combination";
        echo "<script type='text/javascript'>alert('$Lfail');
	    document.location='index.php';
	    </script>";
  		//array_push($errors, "");
  	}
  }
}
ob_end_flush()
?>