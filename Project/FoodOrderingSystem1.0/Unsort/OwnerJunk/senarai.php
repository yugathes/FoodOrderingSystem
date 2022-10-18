<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['1login_intro'])){
    $user = $_SESSION['1login_intro'];
     $userID = $_SESSION['login_intro'];
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Application List | Sistem eCuti</title>
  <!-- Favicon -->

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
  <?php include('sidenav.php');?>
  <!-- Main content -->
  <div class="main-content" id="panel">
   <!-- Topnav -->
  <?php include('topnav.php');?>
     <!-- Header -->
    <!-- Header -->
    <div class="header bg-info pb-6">
      <div class="container-fluid">
         <br><h2> </h2><br>
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
    <div class="container-fluid mt--6 bg-info">
      <div class="row">
        <div class="col-xl-12">
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Leave Applications by Staff</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                      
                 <th scope="col" class="sort" data-sort="name">Full Name</th>
                   
                    <th scope="col" class="sort" data-sort="status">Type of Leave</th>
                    <th scope="col" class="sort" data-sort="budget">Number of days</th>
                    <th scope="col" class="sort" data-sort="status">Date of Application</th>
                      <th scope="col" class="sort" data-sort="status">Status Approval</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="">Action</th>
                    
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                    include "../admin/connection.php";
                    $staff = mysqli_query($link,"SELECT * FROM users WHERE dept = (SELECT dept FROM users WHERE username = '".$user."')");
                    while($Srow= mysqli_fetch_array($staff, MYSQLI_BOTH))
                    {
                        $staffDept = $Srow['username'];
                    	$queryGet = "select * from Cuti where sUsername = '".$staffDept."' ORDER BY datetimeReq DESC  ";
                    	//echo $queryGet ;
                    	$resultGet = mysqli_query($link,$queryGet);
                    	if(!$resultGet)
                    	{
                    		die ("Invalid Query - get Items List: ". mysqli_error($link));
                    	}
                    	else
                    	{
                    	    $count = 0;
                      while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
    		          {   $count++;?>  
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $Srow['name'];?></span>
                        </div>
                      </div>
                    </th>
                  
                    <td class="budget">
                     <?php 

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
                                  if($row['LType'] ==7) 
                                  {
                                    echo "Replacement";
                                  }

                                    
                                    
                                    
                                    
                                    ?>
                    </td>
                    <td>
                        <span class="status"><?php echo $row['number_days'];?></span>
                    </td>
                    <td>
                        <span class="status"><?php echo $row['datetimeReq'];?></span>
                    </td>
                    <td>
                        
                            <?php
                            if($row['management']==2)
                            {
                                ?>
                                  <span class="status"><div class="row"><h5 class="text-white"> Admin : <?php if($row['management']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else if($row['management']==2) echo "&nbsp;<h5 class='text-danger'> Rejected</h5>";else echo "&nbsp;<h5 class='text-warning'> Processing";?></h5></span></div>
                       
                                <?php
                            }
                            else
                            {
                                ?>
                                
                                  <span class="status"><div class="row"><h5 class="text-white"> Manager : <?php if($row['management']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else if($row['management']==2) echo "&nbsp;<h5 class='text-danger'> Rejected</h5>";else echo "&nbsp;<h5 class='text-warning'> Processing";?></h5></span></div>
                       <span class="status"><div class="row"><h5 class="text-white"> Admin : <?php if($row['admin']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else if($row['admin']==2) echo "&nbsp;<h5 class='text-danger'> Rejected</h5>";else echo "&nbsp;<h5 class='text-warning'> Processing";?></h5></span></div>
                                <?php
                            }
                            ?>
                          
                    </td>
                     <td>
                        <span class="status"><div class="row"><h5 class="text-white"> <?php if($row['status']==0) echo "&nbsp;<h5 class='text-warning'>Pending</h5>";else if($row['status']==1) echo "&nbsp;<h5 class='text-info'> Processing</h5>";else if($row['status']==2) echo "&nbsp;<h5 class='text-success'>Complete</h5>";else echo "&nbsp;<h5 class='text-warning'> Cancel";?></h5></span></div>
                       
                </td>
                     <td>
                      <a class="btn btn-danger btn-sm"  target="_blank" href="../admin/report.php?cutiID=<?php echo $row['id'];?>">Print</a>
<a class="btn btn-success btn-sm" href="view_detail.php?cutiID=<?php echo $row['id'];?>">Full Details</a>
                    </td>
                    <?php	}      ?>
                        <!--<tr><td colspan="7"><center>Tiada Permintaan</center></td></tr>	-->	
                    <?php      }  
                    }
                    ?>    
                    
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer pt-0 bg-info">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-white">
              &copy; 2021 <a href="https://globalelite.com.my/" class="font-weight-bold ml-1 text-white" target="_blank">Global Elite Ventures</a>
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