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
  <title>Southern Finance | Edit Client</title>
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
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-success "></i>
                <span class="nav-link-text font-weight-bold text-dark">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addclient.php">
                <i class="ni ni-single-02 text-success"></i>
                <span class="nav-link-text font-weight-bold text-success">Add Client</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clients.php">
                <i class="ni ni-collection text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Client List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orders.php">
                <i class="ni ni-bag-17 text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Prize Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="prizelist.php">
                <i class="ni ni-shop text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Prizes List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loyaltyprogram.php">
                <i class="ni ni-diamond text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Loyalty Programmes</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="eventsmanagement.php">
                <i class="ni ni-world text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Events Management</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addintroducer.php">
                <i class="ni ni-badge text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Add Introducers</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="introducers.php">
                <i class="ni ni-folder-17 text-success"></i>
                <span class="nav-link-text font-weight-bold text-dark">Introducers List</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            
            <li class="nav-item">
              <a class="nav-link active active-pro" href="along.php">
                <i class="ni ni-trophy text-dark"></i>
                <span class="nav-link-text">Developed By Along7t</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
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
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Prize lot programme</h6>
                  <h5 class="h2 text-white mb-0">Edit Client</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
            <?php
                    include "connection.php";
                    $client= $_GET['id'];
                	$queryGet = "select * from users WHERE usrID = '".$client."'";	
                	$resultGet = mysqli_query($link,$queryGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                  while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
                  {
                    $tmp = $row['datetime'];
                    $Dtime = new DateTime($tmp);
                    $date = $Dtime->format('d/m/Y');
                    $time = $Dtime->format('g:i A');
                    $tName = $row['tName'];?>
                <!-- Chart wrapper -->
                
                
                     
		<form method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Full Name *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $row['name'];?>">
  </div>

  <div class="row">

  <div class="col-xl-6">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Phone No. *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="number" value="<?php echo $row['Hp'];?>">
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Email *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $row['email'];?>">
  </div>
</div>

<div class="col-xl-6">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Introducer Username</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="iName" value="<?php echo $row['iName'];?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1" class="h5 text-white mb-2" >Loyalty Rank *</label>
    <select class="form-control" id="exampleFormControlSelect1" name="lytRank">
      <option <?php if($row['lytRank']=="Bronze") echo "selected"; ?> >Bronze</option>
      <option <?php if($row['lytRank']=="Silver") echo "selected"; ?>>Silver</option>
      <option <?php if($row['lytRank']=="Gold") echo "selected"; ?>>Gold</option>
      <option <?php if($row['lytRank']=="Platinum") echo "selected"; ?>>Platinum</option>
    </select>
  </div>
</div>
</div>

<div class="row">
<div class="col-xl">
<div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >FBS ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1"name="fbsID"  value="<?php echo $row['fbsID'];?>">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >XM ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="xmID" value="<?php echo $row['xmID'];?>">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Tifia ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="tifiaID" value="<?php echo $row['tifiaID'];?>">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Liteforex ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="liteID" value="<?php echo $row['liteID'];?>">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Axim ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="aximID" value="<?php echo $row['aximID'];?>">
  </div>
</div>
<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlSelect1" class="h5 text-white mb-2" >Status*</label>
    <select class="form-control" id="exampleFormControlSelect1" name="status">
      <option <?php if($row['status']=="0") echo "selected"; ?> value="0" >Pending Verification</option>
      <option <?php if($row['status']=="1") echo "selected"; ?> value="1" >Verified</option>
      <option <?php if($row['status']=="2") echo "selected"; ?> value="2">No IB</option>
    </select>
  </div>
</div>
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="h5 text-white mb-2" >Address *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"><?php echo $row['address'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="h5 text-white mb-2" >Date & Time *</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="date" value="<?php echo $date;?>" disabled>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="time" value="<?php echo $time;?>" disabled>
  </div>
    <p class="h4 text-white mb-2">* Must be required.</p><br>
    <p class="h4 text-white mb-2">Please make sure the information is correct before submitting the form.</p><br>
    <input class="btn btn-primary" type="submit" name="editClient" value="Edit Client">
</form>
<?php }
	}?>
    
  </div>

          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-xl-8">
         
        </div>

      </div>
      <?php
    if (isset($_POST['editClient'])) {
$ds = mysqli_connect('localhost', 'thesouth_yuga', '~6C^h8K3W+k1', 'thesouth_prizelot');
  // receive all input values from the form
	$name = mysqli_real_escape_string($ds, $_POST['name']);
	$email = mysqli_real_escape_string($ds, $_POST['email']);
	$number = mysqli_real_escape_string($ds, $_POST['number']);
	$iname = mysqli_real_escape_string($ds, $_POST['iName']);
	$lytrank = mysqli_real_escape_string($ds, $_POST['lytRank']);
	$fbsid    = mysqli_real_escape_string($ds, $_POST['fbsID']);
	$xmid    = mysqli_real_escape_string($ds, $_POST['xmID']);
	$tifiaid    = mysqli_real_escape_string($ds, $_POST['tifiaID']);
	$liteid    = mysqli_real_escape_string($ds, $_POST['liteID']);
	$aximid    = mysqli_real_escape_string($ds, $_POST['aximID']);
	$address = mysqli_real_escape_string($ds, $_POST['address']);
	$stats = mysqli_real_escape_string($ds, $_POST['status']);
	
	$userUpdate = "UPDATE users SET
				name = '".$name."', 
				Hp = '".$number."', 
				email = '".$email."', 
				iName = '".$iname."', 
				lytRank = '".$lytrank."', 
				fbsID = '".$fbsid."', 
				xmID = '".$xmid."',
				tifiaID = '".$tifiaid."',
				liteID = '".$liteid."',
				status = '".$stats."',
				aximID = '".$aximid."',
				address = '".$address."' WHERE tName ='".$tName."'";
				
	$resultUpdate = mysqli_query($link,$userUpdate);
	if (!$resultUpdate)
	{
		die ("Error: ".mysqli_error($link));
	}		
	else {
	echo '<script type="text/javascript">
			window.onload = function () 
			{ 
			alert("Client Data Been Edited...");
			open("clients.php","_top");
			}
			</script>';
	}
}?>
      
      <!-- Footer -->
      <footer class="footer pt-0 bg-success">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-dark">
              &copy; 2020 <a href="https://thesouthernfinance.com/" class="font-weight-bold ml-1" target="_blank">The Southern Finance</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end text-dark"> 
              <li class="nav-item text-dark">
                <a href="https://www.zulabs.com.my" class="nav-link" target="_blank">Zulabs Digital</a>
              </li>
              <li class="nav-item text-dark">
                <a href="https://thesouthernfinance.com/official-partners/" class="nav-link" target="_blank">Official Partners</a>
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
<?php  }  
else{   header('Location:index.php');}
?>
