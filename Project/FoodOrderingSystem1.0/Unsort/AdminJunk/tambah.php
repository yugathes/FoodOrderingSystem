<?php //include('AddClientBE.php');
ob_start();
session_start();?>
<!DOCTYPE html>
<?php

if(isset($_SESSION['1login_user'])){
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Add Staff | Sistem eCuti</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>
 
<body>
 <!-- Sidenav -->
 <?php include('sidebar.php');?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-dark border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['1login_user'];?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Assalamualaikum!</h6>
                </div>
                <a href="profile.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="settings.php" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-success pb-6">
      <div class="container-fluid">
        <br><br>
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
             
            </div>
            <div class="col-xl-3 col-md-6">
             
            </div>
            <div class="col-xl-3 col-md-6">
             
            </div>
            <div class="col-xl-3 col-md-6">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6 bg-success">
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Sistem eCuti</h6>
                  <h5 class="h2 text-white mb-0">Add Staff</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                
                  </ul>
                </div>
              </div>
            </div>
                <!-- Chart wrapper -->
                <div class="card-body">
                <form action="tambah.php" method="POST">
                    <?php include('Errors.php'); ?>
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Full Name *</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="name" placeholder="" required>
  </div>

  <div class="row">

  <div class="col-xl-6">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Phone No. *</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" placeholder="" required>
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Email *</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="email" placeholder="" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Password </label>
    <input type="password" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="">
  </div>


</div>

<div class="col-xl-6">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Username</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="username" placeholder="">
  </div>
<?php
    include "connection.php";
    $JqueryGet = "select * from jabatan order by jID";	
	$JresultGet = mysqli_query($link,$JqueryGet);
	if(!$JresultGet)
	{
		die ("Invalid Query - get Items List: ". mysqli_error($link));
	}
	else
	{
?>
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="h5 text-white mb-2" >Department *</label>
    <select class="form-control text-dark" id="exampleFormControlSelect1" name="jabatan">
<?php
    while($Jrow= mysqli_fetch_array($JresultGet, MYSQLI_BOTH))
	{
?>        
      <option value="<?php echo $Jrow['name'];?>"><?php echo $Jrow['name'];?></option>
      <?php
		}
}
  ?>
    </select>
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Confirm Password</label>
    <input type="password" class="form-control text-dark" id="exampleFormControlInput1" name="pswd2" placeholder=""  required>
  </div>  
  <div class="form-group">  
  <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Join Date</label>   
   <input type="date" class="form-control text-dark" id="exampleFormControlInput1" name="date" required>
  </div>
  
  
</div>
</div>

<div class="row">

</div>


    <input class="btn btn-primary" type="submit" name="AddClient" value="Add Staff">
</form>
<?php
if (isset($_POST['AddClient'])) {
    	$password = $_POST['pswd1'];
    	$password1 = $_POST['pswd2'];
    	
    	if(strcmp($password,$password1)==0)
    	{
            // initializing variables
            $uID = "";
            $name = "";
            //$password == $password;
            $username ="";
            $number    = "";
            $email    = "";
            $type_user = "";
            $date = "";
            $dept ="";
            $errors = array(); 
            
            // connect to the database
            $ds = mysqli_connect('localhost', 'globalel_cuti', 'Sz3759779', 'globalel_cuti');
            //$ds = mysqli_connect('localhost', 'root', '', 'globalel_cuti');
            
            // REGISTER USER
            if (mysqli_connect_errno()) {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              exit();
            }
            else{
                
                // receive all input values from the form
            	$name = mysqli_real_escape_string($ds, $_POST['name']);
            	$email = mysqli_real_escape_string($ds, $_POST['email']);
            	$number = mysqli_real_escape_string($ds, $_POST['number']);
            	$username = mysqli_real_escape_string($ds, $_POST['username']);
            	$dept = mysqli_real_escape_string($ds, $_POST['jabatan']);
            	//$pswd1 = mysqli_real_escape_string($ds, $_POST['pswd1']);
            	$type_user = "Staff";
            	date_default_timezone_set('Asia/Kuala_Lumpur');
                //$datetime = date('Y-m-d G:i:s ', time());
                //$date = new DateTime($datetime);
                	$date = $_POST['date'];

                // form validation: ensure that the form is correctly filled ...
                // by adding (array_push()) corresponding error unto $errors array
                if (empty($name)) { array_push($errors, "Full Name is required"); }
                if (empty($email)) { array_push($errors, "Email is required"); }
                if (empty($password)) {array_push($errors, "Password is required");}
                if (empty($username)) { array_push($errors, "Username is required"); }
                if (empty($number)) { array_push($errors, "Phone Number is required"); }
                if (empty($dept)) { array_push($errors, "Jabatan is required"); }
    
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
                    $last_id = $ds->insert_id;

                     //insert into jenisCuti table
                     $sqlquery = "INSERT INTO jenisCuti(usrID) 
                     VALUES('$last_id')";
                     $rslt = mysqli_query($ds, $sqlquery);
 
                	   
                	    $sucess = "Client Registeration Sucessful.";
                	    echo "<script type='text/javascript'>alert('$sucess');
                	    document.location='tambah.php';
                	    </script>";
                	    
    	            }
                }
                
            }
        }
        else{
    	    header("Location: dashboard.php");
    	}
    }
?>
    
  </div>

          </div>
        </div>
       

      </div>
      <!-- Footer -->
      <footer class="footer pt-0 bg-success">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-dark">
              &copy; 2021 <a href="https://globalelite.com.my/" class="font-weight-bold ml-1" target="_blank">Global Elite Ventures</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end text-dark"> 
              <li class="nav-item text-dark">
                <a href="https://globalelite.com.my" class="nav-link" target="_blank">Homepage</a>
              </li>
              
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>
</html>
<?php   }
else{   header('Location:index.php');}
?>
