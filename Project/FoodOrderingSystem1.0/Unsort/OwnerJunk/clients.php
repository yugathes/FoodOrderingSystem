<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['1login_intro'])){
    $IB =$_SESSION['1login_intro'];
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Southern Finance | Clients List</title>
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

<body class="bg-info">
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
              <a class="nav-link" href="home.php">
                <i class="ni ni-world text-dark "></i>
                <span class="nav-link-text font-weight-bold text-dark">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clients.php">
                <i class="ni ni-bullet-list-67 text-info"></i>
                <span class="nav-link-text font-weight-bold text-info">Client List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="withdraw.php">
                <i class="ni ni-money-coins text-dark"></i>
                <span class="nav-link-text font-weight-bold text-dark">Withdraw Money</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="leaderboards.php">
                <i class="ni ni-user-run text-dark"></i>
                <span class="nav-link-text font-weight-bold text-dark">Leaderboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="events.php">
                <i class="ni ni-controller text-dark"></i>
                <span class="nav-link-text font-weight-bold text-dark">Events & News</span>
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
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['1login_intro'];?></span>
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
        <div class="header bg-info pb-6">
      <div class="container-fluid">
         <br><h2>Clients List</h2><br><br>
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
    <div class="container-fluid mt--6 bg-info"><br><br>
      <div class="container-fluid mt--6 bg-info">
      <div class="row">
        <div class="col-xl-12">
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Client Lists</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Full Name</th>
                    <th scope="col" class="sort" data-sort="budget">Trader Name</th>
                    <th scope="col" class="sort" data-sort="status">Broker Used</th>
                    <th scope="col" class="sort" data-sort="status">Loyalty Rank</th>
                    <th scope="col" class="sort" data-sort="">Total Prize Lots</th>
                    <th scope="col" class="sort" data-sort="">Items Claimed</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                    include "../admin/connection.php";
                	$queryGet = "select * from users WHERE iName ='".$IB."'";	
                	$resultGet = mysqli_query($link,$queryGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                    while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		{	        $queryPrz = "select priceL from client where cName = '".$row['tName']."'";	
                	$resultPrz = mysqli_query($link,$queryPrz);
                	if(!$resultPrz)         {   die ("Invalid Query - get Items List: ". mysqli_error($link));  }
                	else    {   
                	    $rowPrz= mysqli_fetch_array($resultPrz, MYSQLI_BOTH);
                	    $prizeLot = $rowPrz[0];
                	}?>  
		            <tr>
		                 <td class="budget">
                      <?php echo $row['name']?>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['tName']?></span>
                        </div>
                      </div>
                    </th>
                    <td> <div class="avatar-group">
                        <?php if($row['fbsID']!=0)
                        {?>
                        
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="FBS">
                        <img alt="Image placeholder" src="../assets/img/theme/fbs.jpg">
                        </a>

                        <?php } if ($row['xmID']!=0){?>
                        
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="XM">
                        <img alt="Image placeholder" src="../assets/img/theme/xm.jpg">
                        </a>
                        
                        <?php } if ($row['tifiaID']!=0){ ?>
                        
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Tifia">
                        <img alt="Image placeholder" src="../assets/img/theme/tifia.jpg">
                        </a>
                        
                          <?php } if ($row['liteID']!=0){?>
                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Litefx">
                        <img alt="Image placeholder" src="../assets/img/theme/lite.jpg">
                        </a>
                        
                           <?php } if ($row['aximID']!=0){?>
                           
                                                   
                            <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Aximtrade">
                          <img alt="Image placeholder" src="../assets/img/theme/axim.jpg">
                        </a>
                        
                      </div></div><?php }else {}?>
                    </td>
                    <td>
                      <?php if($row['lytRank']=='Bronze') {?>

                       <i class="ni ni-diamond text-orange"></i>
                        <i class="bg-success"></i>
                        <span class="status h4 text-orange"> Bronze</span>
                      </span>
                    <?php } else if($row['lytRank']=='Silver') {?>
                      
                       <i class="ni ni-diamond text-gray"></i>
                        <i class="bg-success"></i>
                        <span class="status h4 text-gray"> Silver</span>
                      </span>
                    
                    <?php } else if($row['lytRank']=='Gold') {?>
                      
                       <i class="ni ni-diamond text-yellow"></i>
                        <i class="bg-success"></i>
                        <span class="status h4 text-yellow"> Gold</span>
                      </span>
                    
                    <?php } else if($row['lytRank']=='Platinum') {?>
                      
                       <i class="ni ni-diamond text-info"></i>
                        <i class="bg-info"></i>
                        <span class="status h4 text-info"> Platinum</span>
                      </span>
                    
                    <?php } else {} ?>
                    </td>
                    <td>
                        <span class="status"><?php echo $prizeLot;?></span>
                      </span>
                    </td>
                    <td>
<?php 
$queryPrz = "select prize.name from pOrder,prize WHERE pOrder.userName ='".$row['tName']."' && pOrder.przID = prize.prizeID";
$queryPrzC = "select count(prize.name) as PRZCOUNT from pOrder,prize WHERE pOrder.userName ='".$row['tName']."' && pOrder.przID = prize.prizeID";
$resultPrz = mysqli_query($link,$queryPrz);
$resultPrzC = mysqli_query($link,$queryPrzC);
$count = mysqli_num_rows($resultPrz);
if(!$resultPrz){    die ("Invalid Query - get Items List: ". mysqli_error($link));  }
else    {   
    if(!$resultPrzC){    die ("Invalid Query - get Items List: ". mysqli_error($link));  }
    else{
        $rowPrzC= mysqli_fetch_array($resultPrzC, MYSQLI_BOTH);
        $countR = $rowPrzC['PRZCOUNT'];
    while($rowPrz= mysqli_fetch_array($resultPrz, MYSQLI_BOTH)){	       
?>
                        <span class="status"><?php echo $countR; if(isset($count)){echo $rowPrz['name'];echo "<br>";echo $count;}if(empty($countR))echo "No claim";?></span>
                      <?php }   }?>
                    </td>

                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
   
                        
                      </div>
                    </td>
                  </tr>
                  <?php }   }
	}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>

</div>
        
        <!---End--->
        
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