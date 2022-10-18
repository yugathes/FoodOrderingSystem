<?php //include('AddClientBE.php');
ob_start();
session_start();?>
<!DOCTYPE html>
<?php

if(isset($_SESSION['username'])){
    $user = $_GET['usrID'];
?>
<html>

<?php include('topnav.php');?>
 
<body class="bg-info">
<!-- Sidenav -->
  <?php include('sidenav.php');?>
    
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    
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
                  <h6 class="text-light text-uppercase ls-1 mb-1">Food Ordering System</h6>
                  <h5 class="h2 text-white mb-0">Edit Users</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                
                  </ul>
                </div>
              </div>
            </div>
                <!-- Chart wrapper -->
                <div class="card-body">
        <?php
        include "../Auth/connection.php";
        
        $JqueryGet = "select * from users WHERE username = '".$user."'";	
        $JresultGet = mysqli_query($link,$JqueryGet);
        if(!$JresultGet)
        {
            die ("Invalid Query - get Items List: ". mysqli_error($link));
        }
        else
        {
            $row= mysqli_fetch_array($JresultGet, MYSQLI_BOTH);
?>
<form action="edituser.php" method="POST">
	<?php include('Errors.php'); ?>
	<div class="row">
		<div class="col-xl-6">
			<div class="form-group">
				<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Username</label>
				<input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="username" value="<?php echo $row['username'];?>" disabled>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Phone No. *</label>
				<input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="<?php echo $row['Hp'];?>" required>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Password </label>
				<input type="password" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" value="<?php echo $row['password'];?>">
			</div>
		</div>
		<div class="col-xl-6">
			<div class="form-group">
				<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Full Name *</label>
				<input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="name" value="<?php echo $row['name'];?>" required>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Email *</label>
				<input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="email" value="<?php echo $row['email'];?>" required>
			</div>
			<div class="form-group">
				<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Confirm Password</label>
				<input type="password" class="form-control text-dark" id="exampleFormControlInput1" name="pswd2" value="<?php echo $row['password'];?>"  required>
			</div>
<?php     }?>
		</div>
	</div>
    <input type="hidden" name="usrID" value="<?php echo $row['username'];?>">
    <input class="btn btn-primary" type="submit" name="AddClient" value="Edit Staff">
</form>
<?php
if (isset($_POST['AddClient'])) {
	include "../Auth/connection.php";
	$password = $_POST['pswd1'];
	$password1 = $_POST['pswd2'];
	
	if(strcmp($password,$password1)==0)
	{
		// initializing variables
		$name = "";
		$username ="";
		$number    = "";
		$email    = "";
		$errors = array(); 
			
		// receive all input values from the form
		$name = mysqli_real_escape_string($link, $_POST['name']);
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$number = mysqli_real_escape_string($link, $_POST['number']);
		$username = mysqli_real_escape_string($link, $_POST['username']);
		$usrID = mysqli_real_escape_string($link, $_POST['usrID']);
		// Finally, register user if there are no errors in the form
		if (count($errors) == 0) {
		   
			$query = "UPDATE users SET 
					  name = '".$name."',
					  Hp = '".$number."',
					  email = '".$email."',
					  password = '".$password."'
					  WHERE username = '".$usrID."'";
			$result = mysqli_query($link, $query);
			if (!$result)
			{
				
				$fail = "Please Check Registeration.";
				echo "<script type='text/javascript'>alert('$fail');
				document.location='Users.php';
				</script>";
			}
			else
			{
				$sucess = "Client Registeration Sucessful.";
				echo "<script type='text/javascript'>alert('$sucess');
				document.location='Users.php';
				</script>";
				
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
