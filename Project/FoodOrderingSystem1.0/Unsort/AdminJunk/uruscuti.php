<?php //include('AddClientBE.php');
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
  <title>Manage Leave | Sistem eCuti</title>
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
  <script>
        function showUser(str) {
          if (str=="") {
            document.getElementById("txtHint").innerHTML="";
            return;
          }
          var xmlhttp=new XMLHttpRequest();
          xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
              document.getElementById("txtHint").innerHTML=this.responseText;
            }
          }
          xmlhttp.open("GET","cutiuser.php?q="+str,true);
          xmlhttp.send();
        }
</script>
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
      <div class="row">

        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Sistem eCuti</h6>
                  <h5 class="h2 text-white mb-0">Manage Leaves</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                
                  </ul>
                </div>
              </div>
            </div>
                <!-- Chart wrapper -->
                <div class="card-body">
                <form action="uruscuti.php" method="POST">
  <?php include "Errors.php";
   include "connection.php";

  if (isset($_GET['userID'])) {

$id = $_GET['userID'];
//ECHO 'EXIST';
$sqlquery= "select * from jenisCuti where usrID='$id' ";
//echo 	$sqlquery;
 $rsltquery= mysqli_query($link,$sqlquery);
 if(!$rsltquery)
 {
   die ("Invalid Query - get Items List: ". mysqli_error($link));
 }
 else
 {
  $row= mysqli_fetch_array($rsltquery, MYSQLI_BOTH);

}
  }
  ?>
  <div class="row">

<div class="col-xl-12">
  <div class="card" >
  <div class="card-body">
    <h3 class="card-title">Modify Staff Leave Amount</h3>
    <h5 class="card-subtitle mb-2 text-muted">Select a staff and choose the respective type of leave. This allows staff leave amount to vary according to their types.</h5>
    <br>
    <?php
   
   
?>  
    <div class="form-group">
    <h4 >Staff Name</h4>
    <select class="form-control text-dark" id="staff_name" name="staff_name" required>
    <option value="">Please select user</option>

  

<?php 
  if (isset($_GET['userID'])) {

$id = $_GET['userID'];

$JqueryGet = "select * from users ";	
 $JresultGet = mysqli_query($link,$JqueryGet);
 if(!$JresultGet)
 {
   die ("Invalid Query - get Items List: ". mysqli_error($link));
 }
 else
 {
    while($Jrow= mysqli_fetch_array($JresultGet, MYSQLI_BOTH))
	{
    if( $Jrow['usrID'] == $id )
    {
      ?>
        <option value="<?php echo $Jrow['usrID'];?>"selected><?php echo $Jrow['name'];?></option>
      <?php
    }
    else{
      ?>

<option value="<?php echo $Jrow['usrID'];?>"><?php echo $Jrow['name'];?></option>
      <?php

    }
?>   
   
      <?php	}
}
  }else
  {
    ?>

<?php
 $JqueryGet = "select * from users";	
 $JresultGet = mysqli_query($link,$JqueryGet);
 if(!$JresultGet)
 {
   die ("Invalid Query - get Items List: ". mysqli_error($link));
 }
 else
 {
    while($Jrow= mysqli_fetch_array($JresultGet, MYSQLI_BOTH))
	{
   
?>   
     <option value="<?php echo $Jrow['usrID'];?>"><?php echo $Jrow['name'];?></option>
      <?php	}
}

    
  }
  ?>
    </select>
  </div>

  </div>
</div> 
</div>
</div>


  <div class="row">
  <div class="col-md-8">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Annual Leave" disabled>
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Maternity Leave" disabled>
  </div>
  
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Paternity Leave" disabled>
  </div>
  
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Compassionate Leave" disabled>
  </div>
  
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Medical Leave" disabled>
  </div>

  
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Replacement Leave" disabled>
  </div>
  


  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Carry Forward Leave" disabled>
  </div>
  
  
  <!--  <div class="form-group">-->
  <!--  <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Type</label>-->
  <!--  <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number" value="Emergency Leave" disabled>-->
  <!--</div>-->
  

  
  
</div>
<?php
  // include "connection.php";
	// $queryGet = "select * from jenisCuti where usrID='12'";	
	// $resultGet = mysqli_query($link,$queryGet);
	// if(!$resultGet)
	// {
	// 	die ("Invalid Query - get Items List: ". mysqli_error($link));
	// }
	// else
	// {
  //   while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
  //   {
      ?>
<div class="col-md-4">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="aL" name="aL" value="<?php echo $row['Annual']?>">
  </div>

 <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="mtL" name="mtL" value="<?php echo $row['Maternity']?>">
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="pL" name="pL" value="<?php echo $row['Paternity']?>">
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="cL" name="cL" value="<?php echo $row['Compassionate']?>">
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="mL" name="mL" value="<?php echo $row['Medical']?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="rL" name="rL" value="<?php echo $row['Replacement']?>">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>
    <input type="number" class="form-control text-dark" id="cfL" name="cfL" value="<?php echo $row['CarryForward']?>">
  </div>
  
  <!-- <div class="form-group">-->
  <!--  <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Amount</label>-->
  <!--  <input type="number" class="form-control text-dark" id="eL" name="eL" value="<?php echo $row['Emergency']?>">-->
  <!--</div>-->
  <?php
//  }   }
 
 ?>


  
</div>
</div>

<div class="row">

</div>


    <input class="btn btn-primary" type="submit" name="jenisCuti" value="Save">
</form>
<?php
if (isset($_POST['jenisCuti'])) {
    // initializing variables
    $aL = "";
    $mtL = "";
    $pL = "";
    $cL = "";
    $mL = "";
    // $eL = "";
    $cfL = "";

   // $errors = array(); 
    
    // connect to the database
    //$ds = mysqli_connect('localhost', 'globalel_cuti', 'Sz3759779', 'globalel_cuti');
    include "connection.php";
    // REGISTER USER
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
    else
    {
        // receive all input values from the form
        $aL = mysqli_real_escape_string($link, $_POST['aL']);
        $mtL = mysqli_real_escape_string($link, $_POST['mtL']);
        $pL = mysqli_real_escape_string($link, $_POST['pL']);
        $cL = mysqli_real_escape_string($link, $_POST['cL']);
        $mL = mysqli_real_escape_string($link, $_POST['mL']);
        // $eL = mysqli_real_escape_string($link, $_POST['eL']);
        $cfL = mysqli_real_escape_string($link, $_POST['cfL']);
        $rL = mysqli_real_escape_string($link, $_POST['rL']);
        $userID = mysqli_real_escape_string($link, $_POST['staff_name']);

        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        // if (empty($aL)) { array_push($errors, "Annual Leave is required"); }
        // if (empty($mtL)) { array_push($errors, "Maternity Leave is required"); }
        // if (empty($pL)) {array_push($errors, "Paternity Leave is required");}
        // if (empty($cL)) { array_push($errors, "Compassionate Leave is required"); }
        // if (empty($mL)) { array_push($errors, "Medical Leave is required"); }
        // if (empty($eL)) { array_push($errors, "Emergency Leave is required"); }

        // Finally, register user if there are no errors in the form
        // if (count($errors) == 0) {

          //select previous annual leave + carryforward
          // $cfL
          // $sqlquery="SELECT FROM jenisCuti WHERE usrID='".$userID."'  ";
          // $results = mysqli_query($link, $sqlquery);
          // $rows= mysqli_fetch_array($results, MYSQLI_BOTH);


          $annual=$aL +  $cfL ;

          // 
           
            $query = "UPDATE jenisCuti SET
            Annual = '".$annual."', 
    				Maternity = '".$mtL."', 
    				Paternity = '".$pL."',
    				Compassionate = '".$cL."', 
    				Medical = '".$mL."',
            Replacement = '".$rL."'
            WHERE usrID='".$userID."'
            ";
      	    $result = mysqli_query($link, $query);
          	if (!$result)
        	{
        	    
        	    $fail = "Please Check Form.";
                echo "<script type='text/javascript'>alert('$fail');
        	    document.location='uruscuti.php';
        	    </script>";
        	}
        	else
        	{
        	   
        	    $sucess = "Update Sucessful.";
        	    echo "<script type='text/javascript'>alert('$sucess');
        	    document.location='uruscuti.php?userID=$userID ';
        	    </script>";
        	    
            }
        // }else
        // {
        //   $fail = "Please Check Form.";
        //   echo "<script type='text/javascript'>alert('$fail');
        // document.location='uruscuti.php';
        // </script>";




        // }
        
    }
}
?>
    
  </div>

          </div>
          

        </div>
       <div class="col-xl-4">

          <!-- <div class="card" >
  <div class="card-body">
    <h3 class="card-title">Modify Staff Leave Amount</h3>
    <h5 class="card-subtitle mb-2 text-muted">Select a staff and choose the respective type of leave. This allows staff leave amount to vary according to their types.</h5>
    <br>
  <?php
    include "connection.php";
    $JqueryGet = "select * from users";	
	$JresultGet = mysqli_query($link,$JqueryGet);
	if(!$JresultGet)
	{
		die ("Invalid Query - get Items List: ". mysqli_error($link));
	}
	else
	{
?>  
    <div class="form-group">
    <h4 >Staff Name</h4>
    <select class="form-control text-dark" id="exampleFormControlSelect1" name="name" onchange="showUser(this.value)">
        <option value="">Please select user</option>
<?php
    while($Jrow= mysqli_fetch_array($JresultGet, MYSQLI_BOTH))
	{
?>   
     <option value="<?php echo $Jrow['usrID'];?>"><?php echo $Jrow['name'];?></option>
      <?php	}
}
  ?>
    </select>
  </div>
  <br>
     <div class="form-group">
    <div id="txtHint"><b>Person info will be listed here.</b></div>
  </div>
  <br>
  <input class="btn btn-primary" type="submit" name="append" value="<< Append">
  
  </div>
</div> -->


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

   <!-- Page level custom scripts -->
   <script>
       $(function() {
         //Initialize Select2 Elements
         $('.select2').select2()

       })


       $(document).ready(function() {


         $("#staff_name").change(function() {
          

           var staff_id = $(this).val();
          

           if (staff_id != "") {
             $.ajax({
               url: "get_leave_amount.php",
               data: {
                staff_id: staff_id
               },
               type: 'POST',
               dataType: "json",
               success: function(data) {

                 $("#aL").val(data.Annual);
                 $("#mtL").val(data.Maternity);
                 $("#pL").val(data.Paternity);
                 $("#cL").val(data.Compassionate);
                 $("#mL").val(data.Medical);
                 $("#eL").val(data.Emergency);
                 $("#cfL").val(data.CarryForward);
                 $("#rL").val(data.Replacement);

               }
             });
           }

         });
       });
       </script>
       
</html>
<?php   }
else{   header('Location:index.php');}
?>
