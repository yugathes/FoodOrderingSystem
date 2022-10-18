<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['1login_intro'])){
    $user = $_SESSION['1login_intro'];
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Application Status | Sistem eCuti</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  
    <!-- sweetalert -->
    <link rel="stylesheet" href="../assets/sweetalert2/sweetalert2.css">
  <script src="../assets/sweetalert2/sweetalert2.js"></script>
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
              <h3 class="text-white mb-0">Leave Application Status</h3>
            </div>
            <div class="table-responsive">
                
              <table class="table align-items-center table-dark table-flush">
                <form action="status.php" method="POST">
                <thead class="thead-dark">
                  <tr>
                      
                    <th scope="col" class="sort" data-sort="status">No.</th>
                    <th scope="col" class="sort" data-sort="status">Application ID</th>
                    <th scope="col" class="sort" data-sort="status">Status</th>
                    <th scope="col" class="sort" data-sort="name">Type of Leave</th>
                    <th scope="col" class="sort" data-sort="name">Date</th>
                    <th scope="col" class="sort" data-sort="name">Time</th>
                    <th scope="col" class="sort" data-sort="status">Action</th>
                    
                  </tr>
                </thead>
                <tbody class="list">
                    
                 <?php
                    include "../admin/connection.php";
                	$queryGet = "select * from Cuti where sUsername = '".$user."' and status='0' ";	
                	$resultGet = mysqli_query($link,$queryGet);
                	$var=1;$varh=1;$varr=1;$vart=1;
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                	    $count = 0;
                	    if(mysqli_num_rows($resultGet)>0){
                  while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		{   $count++;?>  
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $count;?></span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      <h4 class="text-yellow"><strong>000<?php echo $row['id'];?></strong></h4>
                      <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    </td>
                    <td>
                        <span class="status">
                             <div class="row"><h5 class="text-white"> <?php if($row['admin']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else if($row['admin']==2) echo "&nbsp;<h5 class='text-danger'> Rejected</h5>";else echo "<h5 class='text-warning'> Processing";?></h5></span>
                       </div>
                       <!--<span class="status"><div class="row"><h5 class="text-white"> Manager : <?php if($row['management']==1) echo "&nbsp;<h5 class='text-success'> Approved</h5>";else echo "<h5 class='text-warning'> Processing";?></h5></span>-->
                          
                        
                        
                        </div>
                    </td>
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
                                  if($row['LType'] ==6) 
                                  {
                                    echo "Replacement";
                                  }

                                    
                                    
                                    
                                    
                                    ?>
                    </td>
                    <td class="budget">
                      <?php echo $row['date'];?>
                    </td>
                   <td>
                        <span class="status"><?php  if($row['Ltime']==1) echo "Half Day";
                                                    if($row['Ltime']==2) echo "Full Day";
                                                    if($row['Ltime']==3) echo "More than 1 day";?></span>
                    </td>
                    <td>
                        <span class="status">
                            <!--<a class="btn btn-success btn-sm" href="status.php?id=<?php echo $row['id'];?>">Approve</a>-->
                             <a class="btn  btn-info btn-sm" id="delete_application" data-id="<?php echo $row['id'];?>" href="javascript:void(0)"> &nbsp;Cancel</a>
                             
                             <a class="btn btn-primary btn-sm" target="_blank" href="../admin/report.php?cutiID=<?php echo $row['id'];?>">Print Report</a>
                            
                        </span>
                    </td>
                      
                    
                  </tr>
                  <?php	}   }else   {?>
                <tr><td colspan="7"><center>No Applications</center></td></tr>	  
                  <?php }}?>  
                </tbody>
                </form>
              </table>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
<?php
    include "../admin/connection.php";
    $cutiID = "";
    $manage = '1';
    if(isset( $_GET['id']))
    {
        $cutiID = $_GET['id'];
          $query = "UPDATE Cuti SET
    				management = '1'
    				WHERE id ='".$cutiID."'";
  	    $result = mysqli_query($link, $query);
      	if (!$result)
    	{
    	    $fail = "Please Check Update.";
            echo "<script type='text/javascript'>alert('$cutiID');
    	    document.location='status.php';
    	    </script>";
    	}
    	else
    	{
    	   
    	    $sucess = "Staff Approved Sucessful.";
    	    echo "<script type='text/javascript'>alert('$sucess');
        	document.location='status.php';
        	</script>";
        	    
       }
    }
?>
      
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
     <script>
$(document).on('click', '#delete_application', function(e) {

var leave_id = $(this).data('id');
Swaldelete(leave_id);
e.preventDefault();
});

function Swaldelete(leave_id) {

Swal.fire({
    title: 'Are you sure?',
    text: "Leave application will be Cancelled!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes',
    cancelButtonText: 'No',
    showLoaderOnConfirm: true,


    preConfirm: function() {
        return new Promise(function(resolve) {
           
            $.ajax({
                    url: '../cancel_application.php',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                       
                      leave_id: leave_id
                    },
                })
                .done(function(response) {

                    Swal.fire(response.title, response.message, response.status).then(function() {
                        location.reload();

                    });

                })
                .fail(function() {
                    Swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
                });
        });
    },
    allowOutsideClick: false,


})
};
  </script>
</body>
</html>
<?php   }
else{   header('Location:index.php');}
?>