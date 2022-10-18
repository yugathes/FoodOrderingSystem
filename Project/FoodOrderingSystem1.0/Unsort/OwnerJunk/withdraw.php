<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['1login_intro'])){
    $login = $_SESSION['1login_intro'];
    include "../admin/connection.php";
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Southern Finance | Withdraw Money</title>
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
                <i class="ni ni-bullet-list-67 text-dark"></i>
                <span class="nav-link-text font-weight-bold text-dark">Client List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="withdraw.php">
                <i class="ni ni-money-coins text-info"></i>
                <span class="nav-link-text font-weight-bold text-info">Withdraw Money</span>
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
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $login;?></span>
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
        <br><h2>Withdraw Money</h2><br><br><br><br>
        <div class="header-body">
    
    <?php
        $ueryGet = "select * from introducer WHERE iName = '".$login."'";	
        $esultGet = mysqli_query($link,$ueryGet);
        if(!$esultGet) {   die ("Invalid Query - Introducer: ". mysqli_error($link));  }
        else{
            while($Irow= mysqli_fetch_array($esultGet, MYSQLI_BOTH))
            {   
                $available = number_format(abs($Irow['withdraw']-$Irow['tEarn']), 2);
    ?>
    
    
    <!-- Page content -->
    <div class="container-fluid mt--6 bg-info">
         <div class="row">
        <div class="col-xl-3 col-md-6">
              <div class="card card-stats bg-dark">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-white mb-0">Available Withdrawal</h5>
                      <span class="h2 font-weight-bold mb-0 text-red"><?php echo $available;?>USD</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card card-stats bg-dark">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-white mb-0">Total Commission</h5>
                      <span class="h2 font-weight-bold mb-0 text-info"><?php echo $Irow['tEarn'];?>USD</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
            
      </div>
    </div>
    
    <div class="card card-stats bg-dark">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-white mb-0">Conversion Rate</h5>
                      <span class="h2 font-weight-bold mb-0 text-green">1 USD = 4.15 MYR</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
            
      </div></div>
    </div>
    <div class="col-xl-9 col-md-6">
        
        <div class="row">
  <div class="col-xl">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Commission withdrawal</h3>
        <p class="card-text">Please enter an amount equal or lower than your available withdrawal.</p>
        <form method="POST">
            <div class="form-group">
    <label for="exampleInputEmail1">Withdraw</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="amount" min="0.00" max="<?php   echo $Irow['tEarn']; ?>" step="0.5" placeholder="Enter amount in USD">
    <small id="emailHelp" class="form-text text-muted">We'll whatsapp or call you for confirmation.</small><br>
    <input type="submit" class="btn btn-primary" name="withdraw" value="Request">
  </div>
        </form>
    <?php   
    $amount =$_POST['amount'];
    
    if(isset($_POST['withdraw'])) {
        date_default_timezone_set('Asia/Kuala_Lumpur');
  	    $datetime = date('Y-m-d G:i:s ', time());
  	    $PqueryInsert = "INSERT INTO priceLot (logID, usrName, description, priceLot, DateTime)
	                    VALUES ('', '$login', '1', '$amount', '$datetime')";
        $PresultInsert = mysqli_query($link,$PqueryInsert);
        if (!$PresultInsert)
    	{
    		die ("Error: ".mysqli_error($link));
    	}
    	else
    	{
    	    /*$QueryGet = "select * from priceLot Where description = 1 order by datetime desc";	
        	$ResultGet = mysqli_query($link,$QueryGet);
        	if(!$ResultGet)
        	{
        		die ("Invalid Query - get Items List: ". mysqli_error($link));
        	}
        	else
        	{
                while($Row= mysqli_fetch_array($ResultGet, MYSQLI_BOTH)){
                   $ID = $Row['logID'];                 
                }
    	    $OrdqueryInsert = "INSERT INTO pOrder (ordID, przID, userName, datetime, status)
	                    VALUES ('', '$ID', '$login', '$datetime', '$status')";
            $OrdresultInsert = mysqli_query($link,$queryOrdInsert); */
        
    	    $sucess = "Your request been submit.";
    	    echo "<script type='text/javascript'>alert('$sucess');
    	    document.location='withdraw.php';
    	    </script>";
    	}
    }
    
    ?>
      </div>
    </div>
  </div>
  
    </div>
    
      
</div>


                    <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="status">No.</th>
                    <th scope="col" class="sort" data-sort="status">Date</th>
                    <th scope="col" class="sort" data-sort="status">Time</th>
                    <th scope="col" class="sort" data-sort="status">Amount</th>
                    <th scope="col" class="sort" data-sort="name">Status</th>
                  </tr>
                </thead>
                <tbody class="list">
<?php   
    }   }
    $queryGet = "select * from priceLot WHERE usrName = '".$login."'";	
    $resultGet = mysqli_query($link,$queryGet);
    if(!$resultGet) {   die ("Invalid Query - get Items List: ". mysqli_error($link));  }
    else{
        $rowcount=mysqli_num_rows($resultGet);
        if($rowcount>0){
        while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
        {   
            $desc = $row['description'];
            if($desc == 1)  $description = "Pending";
            if($desc == 2)  $description = "Approved";
            if($desc == 3)  $description = "Payment Cleared";
            if($desc == 4)  $description = "Rejected";
            $tmp = $row['DateTime'];
            $time = new DateTime($tmp);
            $date = $time->format('d/m/Y');
            $time = $time->format('g:i A');
            $count++;
    ?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $count;?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                        <span class="status"><?php echo $date;?></span>
                    </td>
                    <td>
                        <span class="status"><?php echo $time;?></span>
                    </td>
                    <td class="budget">
                      <?php echo $row['priceLot'];?>
                    </td>
                    <td>
                        <span class="status"><?php echo $description;?></span>
                    </td>
                  </tr>
                  </tbody>
                  <tbody>
                  <?php }   }   
                  else  { ?>
                    <tr><td colspan="5" style="text-align:center">No Withdrawal History</td></tr>
                 <?php }    ?>
                 </tbody><?php
                 }?>
                
              </table>
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