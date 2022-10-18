<?php
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
  <title>Manage Department | Sistem eCuti</title>
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
       <div class="col-xl-12">
      <div class="row">
     
          <div class="col-xl-4">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Sistem eCuti</h6>
                  <h5 class="h2 text-white mb-0">Add Department</h5>
                </div>
              
              </div>
            </div>
                <!-- Chart wrapper -->
                <div class="card-body">
                <form action="jabatan.php" method="POST" enctype='multipart/form-data'>

  <div class="row">

  <div class="col-xl-12">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Department</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="Jabatan" placeholder="Technical Support">
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Description of department</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="This department is in charge of all technological instruments etc..."></textarea>
  </div>
  
</div>
</div>

    <input class="btn btn-primary" type="submit" name="AddJabatan" value="Add Department">
</form>
<?php
    include "connection.php";
    $Jabatan = "";
    $description = "";
    $jID = "";
    
    if (isset($_POST['AddJabatan'])) {

  // receive all input values from the form
	$jabatan = mysqli_real_escape_string($link, $_POST['Jabatan']);
	$description = mysqli_real_escape_string($link, $_POST['description']);
	
	if (empty($jabatan)) { array_push($errors, "Jabatan is required"); }
    if (empty($description)) { array_push($errors, "Description is required"); }
    
    $prize_check_query = "SELECT * FROM jabatan WHERE name ='$jabatan' LIMIT 1";
    $result = mysqli_query($link, $prize_check_query);
    $prize = mysqli_fetch_assoc($result);
    if ($prize) { // if user exists
    if ($prize['name'] === $name) {
      array_push($errors, "Jabatan already exists");
      
    }}
    
  	$query = "INSERT INTO jabatan(jID, name, description) 
  			  VALUES('$jID', '$jabatan', '$description')";
  	$result= mysqli_query($link, $query);
  	if (!$result)
	{
	    die("Error:".mysqli_error($link));
	   $fail = "Please Check Jabatan.";
        echo "<script type='text/javascript'>alert('$fail');
	    document.location='jabatan.php';
	    </script>"; 
	}
	else
	{
	    $sucess = "Jabatan Added Sucessful.";
	    echo "<script type='text/javascript'>alert('$sucess');
	    document.location='jabatan.php';
	    </script>";
	}
            }

?>
  </div></div>
        </div>  <div class="col-xl-8">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Sistem eCuti</h6>
                  <h5 class="h2 text-white mb-0">Manager In Charged</h5>
                </div>
               
              
            </div>
                <!-- Chart wrapper -->
                <div class="card-body">
                <form action="jabatan.php" method="POST" enctype='multipart/form-data'>

  <div class="row">
      <?php
        $staff = mysqli_query($link,'select * from users WHERE type_user= "Staff"');
        $JqueryGet = "select * from jabatan order by jID";	
    	$JresultGet = mysqli_query($link,$JqueryGet);
    	if(!$JresultGet)
    	{
    		die ("Invalid Query - get Items List: ". mysqli_error($link));
    	}
    	else
    	{
?>

<div class="col-xl-12">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Department</label>
    <select class="form-control text-dark" id="exampleFormControlSelect1" name="jabatan">
<?php
    while($Jrow= mysqli_fetch_array($JresultGet, MYSQLI_BOTH))
	{
?>        
      <option value="<?php echo $Jrow['name'];?>"><?php echo $Jrow['name'];?></option>
      <?php
	}   }
      ?>
		
    </select>
  </div>
  </div>
  <div class="col-xl-12">
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Staff Name</label>
   <select class="form-control text-dark" id="staff" name="staff">
<?php   
    $staff = mysqli_query($link,'select * from jabatan');
    while($Staffrow= mysqli_fetch_array($staff, MYSQLI_BOTH)){
    $JSqueryGet = "select * from users where dept = '".$Staffrow['name']."'";	
	$JSresultGet = mysqli_query($link,$JSqueryGet);
	if(!$JSresultGet)
	{
		die ("Invalid Query - get Items List: ". mysqli_error($link));
	}
	else
	{
    while($JSrow= mysqli_fetch_array($JSresultGet, MYSQLI_BOTH))
	{
?>    <option value="<?php echo $JSrow['username'];?>"><?php echo $JSrow['name'];?></option>
<?php   }   }   }
      ?>
    </select>
  </div>
  
  </div>
</div>
</div>

    <input class="btn btn-primary" type="submit" name="manager" value="Change Manager">
</form>
<?php
    include "connection.php";
    $username = "";
    $dept= "";
    $type = "Manager";
    
    if (isset($_POST['manager'])) {

  // receive all input values from the form
	$dept = mysqli_real_escape_string($link, $_POST['jabatan']);
	$username = mysqli_real_escape_string($link, $_POST['staff']);
	
	if (empty($dept)) { array_push($errors, "Jabatan is required"); }
    if (empty($username)) { array_push($errors, "Staff is required"); }
    
    if (count($errors) == 0) {
      	$query = "UPDATE users SET type_user = '".$type."' WHERE username = '".$username."'";
      	$result= mysqli_query($link, $query);
      	if (!$result)
    	{
    	    die("Error:".mysqli_error($link));
    	    $fail = "Manager setting failed.";
            echo "<script type='text/javascript'>alert('$fail');
    	    document.location='jabatan.php';
    	    </script>"; 
    	}
    	else
    	{
    	    $sucess = "Manager Set Sucessful.";
    	    echo "<script type='text/javascript'>alert('$sucess');
    	    document.location='jabatan.php';
    	    </script>";
    	}
    } 
}
?>
  </div></div>
        </div>
        </div>
        
        
      </div>
      
        <div class="col-xl-12">
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">List of Departments</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="status">No.</th>
                    <th scope="col" class="sort" data-sort="name">Department Name</th>
                    <th scope="col" class="sort" data-sort="name">Department Description</th>
                    <th scope="col" class="sort" data-sort="status">Amount of Staff</th>
                    <th scope="col" class="sort" data-sort="status">Manager In Charged</th>
                    <th scope="col" class="sort" data-sort="">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                    include "connection.php";
                    $count = 0;
                	$queryGet = "select * from jabatan order by jID";	
                	$resultGet = mysqli_query($link,$queryGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                	    
                  while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		            {
		                $count++;
		                $jaba = $row['name'];
		                $staff = mysqli_query($link,"select * from users WHERE dept='".$jaba."'");
                        $staffCount = mysqli_num_rows($staff);
                        $mana = mysqli_query($link,"select * from users WHERE dept='".$jaba."' AND type_user = 'Manager'");
                        $Mrow= mysqli_fetch_array($mana, MYSQLI_BOTH);
                        $manager = $Mrow['name'];
?>  
		            <tr>
		                 <td class="budget">
                      <?php echo $count; ?>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['name']?></span>
                        </div>
                      </div>
                    </th>
                     <td>
                        <span class="status"><?php echo $row['description']?></span>
                    </td>
                    <td>
                        <span class="status"><?php echo $staffCount;?></span>
                      </span>
                    </td>
                  
                
                    <td>
                        <span class="status"><?php echo $manager?></span>
                      </span>
                    </td>
                    <td class="text-right">
                    <a class="btn btn-warning btn-sm" href="delete.php?deptID=<?php echo $row['jID'];?>" onclick="return confirm('Are you sure?')">Delete</a>
                     
                    </td>
                  </tr>
                  <?php } 
	}?>
                </tbody>
              </table>
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