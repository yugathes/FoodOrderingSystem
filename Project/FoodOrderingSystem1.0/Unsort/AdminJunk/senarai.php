<?php
ob_start();
session_start(); ?>
<!DOCTYPE html>
<?php

if (isset($_SESSION['1login_user'])) {
  ?>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Leave Application List | Sistem eCuti</title>
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
    <?php include('sidebar.php'); ?>
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
                      <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['1login_user']; ?></span>
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
                    <h3 class="text-white mb-0">Leave Application List</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col" class="sort" data-sort="name">Name</th>
                          <!--<th scope="col" class="sort" data-sort="">Phone No.</th>-->
                          <!--<th scope="col" class="sort" data-sort="status">Department</th>-->
                          <th scope="col" class="sort" data-sort=""> Status Approval</th>
                          <th scope="col" class="sort" data-sort="status">Date Of Application</th>
                          <th scope="col" class="sort" data-sort="status">Type of Leave</th>
                          <th scope="col" class="sort" data-sort="">Status</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody class="list">
                        <?php
                        include "connection.php";
                        $queryGet = "select * from Cuti order by datetimeReq DESC";
                        $resultGet = mysqli_query($link, $queryGet);
                        if (!$resultGet) {
                          die("Invalid Query - get Items List: " . mysqli_error($link));
                        } else {
                          while ($row = mysqli_fetch_array($resultGet, MYSQLI_BOTH)) {
                            $queryPrz = "select * from users where username = '" . $row['sUsername'] . "'";
                            $resultPrz = mysqli_query($link, $queryPrz);
                            if (!$resultPrz) {
                              die("Invalid Query - get Items List: " . mysqli_error($link));
                            } else {
                              while ($rowPrz = mysqli_fetch_array($resultPrz, MYSQLI_BOTH)) {

                                ?>
                                <tr>
                                  <td class="budget">
                                    <?php echo $rowPrz['name'] ?>
                                  </td>
                                  <!--<td>-->
                                  <!--  <span class="status"><?php echo $rowPrz['Hp']; ?></span>-->
                                  <!--</td>-->
                                  <!--<td>-->
                                  <!--  <span class="status"><?php echo $rowPrz['dept']; ?></span>-->
                                  <!--</td>-->
                                  <th scope="row">
                                     <span class="status"><div class="row"><h5 class="text-white"> Manager : <?php if($row['management']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else echo "&nbsp;<h5 class='text-warning'> Processing";?></h5></span>
                        </div>
                      <span class="status">
                            <div class="row"><h5 class="text-white"> Admin : <?php if($row['admin']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else echo "&nbsp;<h5 class='text-warning'> Processing";?></h5></span>
                       </div>
                                  </th>
                                  <th scope="row">
                                    <div class="media align-items-center">
                                      <div class="media-body">
                                        <span class="name mb-0 text-sm"><?php echo $row['datetimeReq'] ?></span>
                                      </div>
                                    </div>
                                  </th>

                                  <td>
                                    <span class="status"><?php 
                                    
                                    // echo $row['LType']; 
                                    
                                  if($row['LType'] ==1) 
                                  {
                                    echo "Annual";
                                  }
                                  if($row['LType'] ==2) 
                                  {
                                    echo "Maternity";
                                  }
                                  if($row['LType'] ==3) 
                                  {
                                    echo "Paternity ";
                                  }
                                  if($row['LType'] ==4) 
                                  {
                                    echo "Compassionate";
                                  }
                                  if($row['LType'] ==5) 
                                  {
                                    echo "Medical";
                                  }
                                  if($row['LType'] ==6) 
                                  {
                                    echo "Replacement";
                                  }
                                    
                                    
                                    
                                    ?></span>
                                  </td>
                                  <td>
                                      
                                       <span class="status"><div class="row"><h5 class="text-white"> <?php if($row['status']==0) echo "&nbsp;<h5 class='text-warning'> Pending</h5>";else if($row['status']==1) echo "&nbsp;<h5 class='text-info'> Processing</h5>";else if($row['status']==2) echo "&nbsp;<h5 class='text-success'>Complete</h5>";else echo "&nbsp;<h5 class='text-warning'> Cancel";?></h5></span></div>
                                    
                                  </td>

                                  <td>
                                    <a class="btn btn-primary btn-sm" href="report.php?cutiID=<?php echo $row['id']; ?>">Print</a>
                                    <a class="btn btn-success btn-sm" href="view_detail.php?cutiID=<?php echo $row['id']; ?>">Full Details</a>
                                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                  </td>
                                </tr>
                              <?php }
                            }
                          }
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-body">
                <h2 class="card-title">Staff Monthly Leave Report</h2>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Please choose a staff name and select a month to get PDF document.</p>

                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">
                      <form method="POST" action="monthreport.php"  target="_blank" >


                        <?php
                        include "connection.php";
                        $JqueryGet = "select * from users";
                        $JresultGet = mysqli_query($link, $JqueryGet);
                        if (!$JresultGet) {
                          die("Invalid Query - get Items List: " . mysqli_error($link));
                        } else {   ?>
                          <div class="form-group">
                            <label for="exampleFormControlSelect1" class="h5 text-dark mb-2">Staff Name</label>
                            <select class="form-control text-dark" id="exampleFormControlSelect1" name="usrID">
                              <option value="all">All Staff</option>
                              <?php
                              while ($Jrow = mysqli_fetch_array($JresultGet, MYSQLI_BOTH)) {
                                ?>
                                <option value="<?php echo $Jrow['usrID']; ?>"><?php echo $Jrow['name']; ?></option>
                              <?php  }
                            } ?>
                          </select>
                        </div>
                    </div>

                  </div>

                </div>

                <div class="row">

                  <div class="col-md-6">
                    <div class="form-group">

                      <div class="form-group">
                        <label for="exampleFormControlSelect1" class="h5 text-dark mb-2">Report Year</label>
                        <select id="year" name="year" class="form-control text-dark" id="exampleFormControlSelect1" style="width: 100%;">
                          <!-- <option value="">Please select year </option> -->
                          <?php
                          $starting_year  = date('Y',strtotime('-5 year'));
                          $ending_year = date('Y', strtotime('+10 year'));
                        
                       
                          for ($starting_year; $starting_year <= $ending_year; $starting_year++) {

                            if (date('Y') == $starting_year) { //is the loop currently processing this year?

                                $selected = 'selected'; //if so, save the word "selected" into a variable
                            }  else {
                                $selected = ''; //otherwise, ensure the variable is empty
                              }


                       
                            //then include the variable inside the option element
                            echo '<option ' . $selected . ' value="' . $starting_year . '">' . $starting_year . '</option>';
                    

                          }



                          ?>
                        </select>
                      </div>


                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="form-group">

                      <div class="form-group">
                        <label for="exampleFormControlSelect1" class="h5 text-dark mb-2">Report Month</label>
                        <select class="form-control text-dark" id="exampleFormControlSelect1" name="month">
                          <?php
                          for ($iM = 1; $iM <= 12; $iM++) {
                            $month = date("m", strtotime("$iM/12/10"));
                            $month1 = date("M", strtotime("$iM/12/10")); ?>
                            <option value="<?php echo $month; ?>"><?php echo $month1; ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <input class="btn btn-primary" type="submit" name="PDF" value="Generate">
                      </form>
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
<?php   } else {
  header('Location:index.php');
}
?>