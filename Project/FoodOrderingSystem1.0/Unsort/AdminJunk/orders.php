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
  <title>Southern Finance | Prize Orders</title>
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
                <span class="nav-link-text font-weight-bold text-dark">Add Client</span>
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
                <span class="nav-link-text font-weight-bold text-success">Prize Orders</span>
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
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Prize Orders</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                      
                    <th scope="col" class="sort" data-sort="status">Order ID</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="name">Trader Name</th>
                    <th scope="col" class="sort" data-sort="status">Phone No.</th>
                    <th scope="col" class="sort" data-sort="status">Time</th>
                    <th scope="col" class="sort" data-sort="status">Date</th>
                    <th scope="col" class="sort" data-sort="completion">Item</th>
                    <th scope="col" class="sort" data-sort=""></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                include "connection.php";
            	$queryGet = "select * from pOrder order by datetime desc";	
            	$resultGet = mysqli_query($link,$queryGet);
            	if(!$resultGet)
            	{
            		die ("Invalid Query - get Items List: ". mysqli_error($link));
            	}
            	else
            	{
                while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH)){             $tmp = $row['datetime'];
                        
                $time = new DateTime($tmp);
                $date = $time->format('d/m/Y');
                $time = $time->format('g:i A');
//-------------------------------------------------------------------                
                $prizID = $row['przID'];
                $queryPro = "select name from prize WHERE prizeID = '".$prizID."'";	
                $resultPro = mysqli_query($link,$queryPro);
                if(!$resultPro){die ("Invalid Query - get Items List: ". mysqli_error($link));}
                else{   $prizeN = mysqli_fetch_array($resultPro);
//-------------------------------------------------------------------
                $name = $row['userName'];
                $queryHP = "select Hp from users WHERE tName = '".$name."'";	
                $resultHP = mysqli_query($link,$queryHP);
                if(!$resultHP){die ("Invalid Query - get Items List: ". mysqli_error($link));}
                else{   $userHP = mysqli_fetch_array($resultHP);
                ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['ordID'];?></span>
                        </div>
                      </div>
                    </th>
                    <td><span class="status"><?php echo $row['status'];?></span></td>
                    <td class="budget"><?php echo $name;?></td>
                    <td><span class="status"><?php echo $userHP[0];?></span></td>
                    <td><span class="status"><?php echo $date;?></span></td>
                    <td><span class="status"><?php echo $time;?></span></td>
                    <td><span class="status"><?php echo $prizeN[0];?></span></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="editorders.php?id=<?php echo $row['ordID'];?>">Edit</a>
                          <a class="dropdown-item" href="delete.php?ordID=<?php echo $row['ordID'];?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                   <?php }  }   } 
	}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        </div>
        
        <!-----START OF WITHDRAWAL PART------>
        
        <div class="col-xl-12">
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Introducer Withdrawal</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                      
                    <th scope="col" class="sort" data-sort="status">Withdrawal ID</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="name">Introducer Name</th>
                    <th scope="col" class="sort" data-sort="status">Phone No.</th>
                    <th scope="col" class="sort" data-sort="status">Time</th>
                    <th scope="col" class="sort" data-sort="status">Date</th>
                    <th scope="col" class="sort" data-sort="completion">Amount</th>
                    <th scope="col" class="sort" data-sort=""></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                include "connection.php";
            	$queryGet = "select * from priceLot Where description IN (1, 2, 3, 4) order by datetime desc";	
            	$resultGet = mysqli_query($link,$queryGet);
            	if(!$resultGet)
            	{
            		die ("Invalid Query - get Items List: ". mysqli_error($link));
            	}
            	else
            	{
                while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH)){             
                    $tmp = $row['datetime'];
                    $time = new DateTime($tmp);
                    $date = $time->format('d/m/Y');
                    $time = $time->format('g:i A');
                    $desc = $row['description'];
                    if($desc == 1)  $description = "Pending";
                    if($desc == 2)  $description = "Approved";
                    if($desc == 3)  $description = "Payment Cleared";
                    if($desc == 4)  $description = "Rejected";

//-------------------------------------------------------------------
                $name = $row['usrName'];
                $queryHP = "select Hp from introducer WHERE iName = '".$name."'";	
                $resultHP = mysqli_query($link,$queryHP);
                if(!$resultHP){die ("Invalid Query - get Items List: ". mysqli_error($link));}
                else{   $userHP = mysqli_fetch_array($resultHP);
                ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['logID'];?></span>
                        </div>
                      </div>
                    </th>
                    <td><span class="status"><?php echo $description;?></span></td>
                    <td class="budget"><?php echo $row['usrName'];?></td>
                    <td><span class="status"><?php echo $userHP[0];?></span></td>
                    <td><span class="status"><?php echo $date;?></span></td>
                    <td><span class="status"><?php echo $time;?></span></td>
                    <td><span class="status"><?php echo $row['priceLot'];?></span></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="editwithdrawal.php?id=<?php echo $row['logID'];?>">Edit</a>
                          <a class="dropdown-item" href="delete.php?ordID=<?php echo $row['logID'];?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                   <?php }     } 
	}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>

      
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
<?php   }
else{   header('Location:index.php');}
?>