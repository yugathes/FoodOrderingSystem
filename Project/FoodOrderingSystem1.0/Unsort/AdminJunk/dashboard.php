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
  <title>Administrator Panel | Sistem eCuti</title>
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
  <?php
    include "connection.php";
    $terima =0;
    $queryGet = "select * from Cuti order by id";	
    $resultGet = mysqli_query($link,$queryGet);
    if(!$resultGet)
    {
    	die ("Invalid Query - get Items List: ". mysqli_error($link));
    }
    else
    {
        $tClient = mysqli_num_rows($resultGet);
        while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
    	{
    	    if($row['admin']==1 AND $row['management']==1)  {
    	        $terima++;
    	    }
    	}
    	$staff = mysqli_query($link,'select * from users WHERE type_user= "Staff"');
        $staffCount = mysqli_num_rows($staff);
    /*
    
    $xmTL = mysqli_query($link, 'SELECT SUM(xmL) AS xmLot FROM client');
    $xmTLR = mysqli_fetch_assoc($xmTL); 
    $xmLot = $xmTLR['xmLot'];
    
    $axim = mysqli_query($link,'select * from users WHERE aximID != 0');
    $aximCount = mysqli_num_rows($axim);
    $aximTL = mysqli_query($link, 'SELECT SUM(aximL) AS aximLot FROM client');
    $aximTLR = mysqli_fetch_assoc($aximTL); 
    $aximLot = $aximTLR['aximLot'];
    
    $tifia = mysqli_query($link,'select * from users WHERE tifiaID != 0');
    $tifiaCount = mysqli_num_rows($tifia);
    $tifiaTL = mysqli_query($link, 'SELECT SUM(tifiaL) AS tifiaLot FROM client');
    $tifiaTLR = mysqli_fetch_assoc($tifiaTL); 
    $tifiaLot = $tifiaTLR['tifiaLot'];
    
    $fbs = mysqli_query($link,'select * from users WHERE fbsID != 0');
    $fbsCount = mysqli_num_rows($fbs);
    $fbsTL = mysqli_query($link, 'SELECT SUM(fbsL) AS fbsLot FROM client');
    $fbsTLR = mysqli_fetch_assoc($fbsTL); 
    $fbsLot = $fbsTLR['fbsLot'];
    
    $lite = mysqli_query($link,'select * from users WHERE liteID != 0');
    $liteCount = mysqli_num_rows($lite);
    $liteTL = mysqli_query($link, 'SELECT SUM(liteL) AS liteLot FROM client');
    $liteTLR = mysqli_fetch_assoc($liteTL); 
    $liteLot = $liteTLR['liteLot'];
    
    $Sumresult = mysqli_query($link, 'SELECT SUM(tLots) AS value_sum FROM users');
    $Sumrow = mysqli_fetch_assoc($Sumresult); 
    $tLot = $Sumrow['value_sum'];
    
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $today = date("Y-m-d");
    $today = $today . "%";
    $lotsT = mysqli_query($link, "SELECT SUM(priceLot) AS total FROM priceLot where DateTime LIKE '".$today."' && description = 0");
    $lotsTR = mysqli_fetch_assoc($lotsT);
    $lotstdy = $lotsTR['total'];*/
  ?>
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
    <div class="header bg-success">
      <div class="container-fluid">
        <br><br>
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Leave Applications</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $tClient;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Accepted Leaves</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $terima;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Staff Registered</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $staffCount;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Unaccepted Applications</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $tClient-$terima; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
        <!-- LOTS -->
    <div class="header bg-success pb-6">

    </div>
    
    
    <!-- Page content -->
    <div class="container-fluid mt--6 bg-success">
      <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Latest Leave Requests</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See All</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                  </tr>
                </thead>
                <tbody class="list">
    <?php
                	$queryGet = "select * from Cuti order by datetimeReq DESC LIMIT 5";	
                	$resultGet = mysqli_query($link,$queryGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                	$no=0;    
                    while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		{	        
		            $tmp = $row['datetimeReq'];
                    $Dtime = new DateTime($tmp);
                    $date = $Dtime->format('d/m/Y');
                    $time = $Dtime->format('g:i A');
		            $queryPrz = "select * from users where username = '".$row['sUsername']."'";	
                	$resultPrz = mysqli_query($link,$queryPrz);
                	if(!$resultPrz)         {   die ("Invalid Query - get Items List: ". mysqli_error($link));  }
                	else    {   
                	    $rowPrz= mysqli_fetch_array($resultPrz, MYSQLI_BOTH);
                	    $jabatan = $rowPrz['dept'];
                	    $name = $rowPrz['name'];
                	    $no++;
                	}?>  
		            <tr>
		                <td class="budget">
                      <?php echo $name;?>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $jabatan?></span>
                        </div>
                      </div>
                    </th>
                        <td><?php echo $date;?></td>
                      <td class="budget"><?php echo $time;?></td>
                      </div></div>
                    
                    
                        </tr>
                        <?php } }?>
  </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Latest Staff Registrations</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-primary">See All</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
<?php                 $queryIGet = "select * from users order by date ASC LIMIT 5";	
                	$resultIGet = mysqli_query($link,$queryIGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                    while($Irow= mysqli_fetch_array($resultIGet, MYSQLI_BOTH))
		{	        ?>
                  <tr>
                    <th scope="row">
                      <?php echo $Irow['name'];?>
                    </th>
                    <td>
                      <?php echo $Irow['date'];?>
                    </td>
                  </tr>
<?php   }   } ?>
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
<?php
}
}
else{
	header('Location:index.php');
}
?>
