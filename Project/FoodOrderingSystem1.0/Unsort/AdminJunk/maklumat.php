<?php //include('AddClientBE.php');
ob_start();
session_start();?>
<!DOCTYPE html>
<?php

if(isset($_SESSION['1login_user'])){
// if(isset( $_GET['cutiID'])){
    $cuti = $_GET['cutiID'];
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Maklumat Permintaan | Sistem eCuti</title>
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
        
        
            <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Sistem eCuti</h6>
                  <h5 class="h2 text-white mb-0">Application Information</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                
                  </ul>
                </div>
              </div>
            </div> 
              </div> 
                </div> 
                  </div> 
        
        
        
        
        
      <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
           
                <!-- Chart wrapper -->
                <div class="card-body">
                    <!--maklumat.php-->
                <form action="" method="POST">
                    <?php include('Errors.php'); ?>
<?php
        include "connection.php";
    	$queryGet = "select * from Cuti WHERE id='".$cuti."'";	
    	$resultGet = mysqli_query($link,$queryGet);
    	if(!$resultGet)
    	{   die ("Invalid Query - get Items List: ". mysqli_error($link));  }
    	else
    	{
        while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
        {	        
        $queryPrz = "select * from users where username = '".$row['sUsername']."'";	
    	$resultPrz = mysqli_query($link,$queryPrz);
    	if(!$resultPrz)         {   die ("Invalid Query - get Items List: ". mysqli_error($link));  }
    	else    {   
    	    while($rowPrz= mysqli_fetch_array($resultPrz, MYSQLI_BOTH))
{  
  $usrID=$rowPrz['usrID'];
$leave_type=$row['LType'];
$leave_time=$row['Ltime'];
?>  

<div class="row">
     <div class="col-xl-12">
        <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Full Name </label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="name" placeholder="" value="<?php echo $rowPrz['name'];?>" disabled>
  </div>
  </div>
  
  <div class="col-xl-12">
       <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Department </label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $rowPrz['dept'];?>" disabled>
  </div>
  </div>
  
  <div class="col-xl-12">
   <div class="form-group">
  <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Date Apply </label>
   <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $row['datetimeReq'];?>" disabled>
  </div>
  </div>
  
  
  </div>
  
  <div class="row">
  <input type="hidden" class="form-control text-dark" id="exampleFormControlInput1" name="user_id"  value="<?php echo $rowPrz['usrID'];?>">
  
  <div class="col-xl-6">
       
   <div class="form-group">
   <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Type of Leave</label>
    <!-- <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="leave_type"  placeholder="" value="<?php echo $row['LType'];?>" readonly> -->
    
    <select type="text" name="leave_type"  class="select2-single form-control" readonly >		
													<?php

                            $queryGet = "select * from leave_type where id='$leave_type' ";        
                            $rsltGet = mysqli_query($link,$queryGet);
														while ($rows= mysqli_fetch_array($rsltGet, MYSQLI_BOTH)) {
															if ($leave_type == $rows['id']) {

																?>
																<option value="<?php echo $rows['id']; ?>" <?php echo 'selected'; ?>><?php echo $rows['leave_name']; ?></option>
															<?php
															} else {
																?>
																<option value="<?php echo  $rows['id']; ?>"><?php echo $rows['leave_name']; ?></option>
															<?php
															}
														}


														?>
													</select>
  
    </div>
  
  
    <div class="form-group">
        
        <?php
        if($leave_time ==1|| $leave_time ==2)
        {
            ?>
              <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave Date </label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $row['date'];?>" disabled>
            <?php
            
        }else
        {
            
            ?>
             <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave From </label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $row['Sdate'];?>" disabled>
    <!--<br>-->
    <!-- <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave To </label>-->
    <!--  <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $row['Edate'];?>" disabled>-->
            <?php
        }
        
        
        ?>
   
  </div>
  <?php 
    $resultMa = mysqli_query($link,"SELECT name FROM users WHERE dept='".$rowPrz['dept']."' AND type_user='Manager'");
    $manager = mysqli_fetch_array($resultMa, MYSQLI_BOTH);
    $man = $manager['name'];
?>
<div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Manager Name</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="username" placeholder="" value="<?php echo $man;?>" disabled>
  </div>
</div>

<div class="col-xl-6">
    

    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >No of days</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="number_day" value="<?php echo $row['number_days'];?>" readonly>
    </div>
    
    
    <div class="form-group">
        
        <?php
        if($leave_time ==1|| $leave_time ==2)
        {
            ?>
              
            <?php
            
        }else
        {
            
            ?>
             
     <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Leave To </label>
      <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $row['Edate'];?>" disabled>
            <?php
        }
        
        
        ?>
   
  </div>
  
  
    <div class="form-group">
    <label for="exampleFormControlSelect1" class="h5 text-white mb-2" >Status *</label>
    <select class="form-control text-dark" id="exampleFormControlSelect1" name="status">
    <option value="2" <?php if($row['admin']=='2') echo "selected";?>>Rejected</option>
        <option value="1" <?php if($row['admin']=='1') echo "selected";?>>Approved</option>
        <option value="0" <?php if($row['admin']=='0') echo "selected";?>>Processing</option>
    </select>
  </div>

</div>

<div class="col-xl-6">
 
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Reason</label>
    <textarea rows="5" class="form-control text-dark" id="exampleFormControlInput1" name="email" placeholder="" disabled><?php echo $row['sebab'];?></textarea>
  </div>
  
   <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Supporting Documents </label><br>
<?php   if($row['doku']!=0) {?>
   <a href="../client/dokumen/<?php echo $row['doku'];?>" target="_blank" class="btn bg-success"><i class="fa fa-folder"></i></a>
<?php   }   else{?>
    <button class="btn bg-success" disabled><i class="fa fa-folder"></i></button>No Supporting Documents
<?php   }?>    
  </div>
  
   


  
   <input type="hidden" name="cutiID" value="<?php echo $row['id'];?>">
    <input class="btn btn-primary" type="submit" name="update" value="Save">
    
</div>

    <!--<input type="hidden" name="cutiID" value="<?php echo $row['id'];?>">-->
    <!--<input class="btn btn-primary" type="submit" name="update" value="Save">-->
    <?php }  }   }   }?>
</form>
<?php
if (isset($_POST['update'])) {

    // initializing variables
    $cutiID = "";
    $admin = "";
    $errors = array(); 
    
    // connect to the database
     $ds = mysqli_connect('localhost', 'globalel_cuti', 'Sz3759779', 'globalel_cuti');
    
 
    // REGISTER USER
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
    else{
        // receive all input values from the form
      $status = mysqli_real_escape_string($ds, $_POST['status']);
      
      $cutiID = mysqli_real_escape_string($ds, $_POST['cutiID']);
      
      $userid = mysqli_real_escape_string($ds, $_POST['user_id']);

      $leave_type = mysqli_real_escape_string($ds, $_POST['leave_type']);

      $number_day = mysqli_real_escape_string($ds, $_POST['number_day']);

      

    	
        $query = "UPDATE Cuti SET admin = '".$status."', status='2' WHERE id ='".$cutiID."'";
      //  echo  $query ;

       

        $result = mysqli_query($ds, $query);
        if (!$result)
        {
        	$fail = "Please Check Registeration.";
            echo "<script type='text/javascript'>alert('$fail');
    	    document.location='staff.php';
	        </script>";    
	    }
    	else
    	{
        // 
            if(	$status==1)
            {
            // echo 'if approved';
             //if approve deduct balance
             //get leave balance 
            $queryGet = "select * from jenisCuti WHERE usrID='".$userid."'";	
            // echo  $queryGet;
             $resultGet = mysqli_query( $ds,$queryGet);
             if(!$resultGet)
                {   die ("Invalid Query : ". mysqli_error( $ds));  }
                else
                {
                 $row= mysqli_fetch_array($resultGet, MYSQLI_BOTH);

                 $annual=$row['Annual'];
                 $maternity=$row['Maternity'];
                $paternity=$row['Paternity'];
                 $compassionate=$row['Compassionate'];
                $medical=$row['Medical'];
                //  $emergency=$row['Emergency'];
                $replacement=$row['Replacement'];

           
                 }


          
          if($leave_type==1)
          {
            //annual leave 
           
            $newbal= $annual- $number_day;
         
            $sqlquery = "UPDATE jenisCuti SET Annual = '".$newbal."'WHERE usrID='".$userid."'";
           
          }
          if($leave_type==2)
          {
            //MATERNITY leave 
            $newbal=$maternity- $number_day;
            $sqlquery = "UPDATE jenisCuti SET Maternity = '".$newbal."'WHERE usrID='".$cutiID."'";
            
          }
          if($leave_type==3)
          {
            //Paternity leave 
            $newbal=$paternity- $number_day;
            $sqlquery = "UPDATE jenisCuti SET Paternity = '".$newbal."'WHERE usrID='".$cutiID."'";
           
          }
          if($leave_type==4)
          {
            //compassionate leave 
            $new_bal=$compassionate- $number_day;
            $sqlquery = "UPDATE jenisCuti SET Compassionate = '".$newbal."'WHERE usrID='".$cutiID."'";
            
          }
          if($leave_type==5)
          {
            //annual leave 
            $new_bal=$medical- $number_day;
            $sqlquery = "UPDATE jenisCuti SET annual = '".$newbal."'WHERE usrID='".$cutiID."'";
            
          }
     
          if($leave_type==7)
          {
            //replacement leave 
            $new_bal=$replacement- $number_day;
            $sqlquery = "UPDATE jenisCuti SET Replacement = '".$newbal."'WHERE usrID='".$cutiID."'";
           
          }
          
        // echo  ' $sqlquery'.$sqlquery;

          $result_query= mysqli_query($ds,$sqlquery);
           
             if(!$result_query)
                {   die ("Invalid Query : ". mysqli_error( $ds));  }

        }
        // 


    	    $sucess = "Update Sucessful.";
    	    echo "<script type='text/javascript'>alert('$sucess');
    	    document.location='senarai.php';
    	    </script>";
        }
    }
}
?>
    
  </div>

          </div>
        </div>
       
</div>
     
        <!--column-->
   <div class="col-xl-4">
          <div class="card bg-default">
                  
    <div class="card-body">
                       

  <?php

$usrName= $row['sUsername'];
$resultAmount = mysqli_query($link,"SELECT LType,COUNT(*) AS Total FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' GROUP BY LType");
$result = mysqli_query($link,"SELECT * FROM jenisCuti");
$jenisC = mysqli_fetch_array($result, MYSQLI_BOTH);
$al=0;$mtl=0;$pl=0;$cl=0;$ml=0;$el=0;$rl=0;
while($rowCu= mysqli_fetch_array($resultAmount, MYSQLI_BOTH))
{
    if($rowCu['LType']=="1")    { 
        $resultTime = mysqli_query($link,"SELECT * FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' AND LType = '".$rowCu['LType']."'");
        while($rowTime= mysqli_fetch_array($resultTime, MYSQLI_BOTH)){
            if($rowTime['Ltime']==1)   $al+=0.5; 
            if($rowTime['Ltime']==2) $al+=1;
            if($rowTime['Ltime']==3){
                $date1 = $rowTime['Sdate'];
                $date2 = $rowTime['Edate'];
                $diff = abs(strtotime($date2) - strtotime($date1));
                $days = floor($diff /86400);
                $al += $days;
            }
        }
    }
    // if($rowCu['LType']=="Maternity Leave") {     
     if($rowCu['LType']=="2") {     
        $resultTime = mysqli_query($link,"SELECT * FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' AND LType = '".$rowCu['LType']."'");
        while($rowTime= mysqli_fetch_array($resultTime, MYSQLI_BOTH)){
            if($rowTime['Ltime']==1)   $mtl+=0.5; 
            if($rowTime['Ltime']==2) $mtl+=1;
            if($rowTime['Ltime']==3){
                $date1 = $rowTime['Sdate'];
                $date2 = $rowTime['Edate'];
                $diff = abs(strtotime($date2) - strtotime($date1));
                $days = floor($diff /86400);
                $mtl += $days;
            }
        }
    }
    if($rowCu['LType']=="3") {     
        $resultTime = mysqli_query($link,"SELECT * FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' AND LType = '".$rowCu['LType']."'");
        while($rowTime= mysqli_fetch_array($resultTime, MYSQLI_BOTH)){
            if($rowTime['Ltime']==1)   $pl+=0.5; 
            if($rowTime['Ltime']==2) $pl+=1;
            if($rowTime['Ltime']==3){
                $date1 = $rowTime['Sdate'];
                $date2 = $rowTime['Edate'];
                $diff = abs(strtotime($date2) - strtotime($date1));
                $days = floor($diff /86400);
                $pl += $days;
            }
        }
    }
    if($rowCu['LType']=="4"){     
        $resultTime = mysqli_query($link,"SELECT * FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' AND LType = '".$rowCu['LType']."'");
        while($rowTime= mysqli_fetch_array($resultTime, MYSQLI_BOTH)){
            if($rowTime['Ltime']==1)   $cl+=0.5; 
            if($rowTime['Ltime']==2) $cl+=1;
            if($rowTime['Ltime']==3){
                $date1 = $rowTime['Sdate'];
                $date2 = $rowTime['Edate'];
                $diff = abs(strtotime($date2) - strtotime($date1));
                $days = floor($diff /86400);
                $cl += $days;
            }
        }
    } 
    if($rowCu['LType']=="5")    {     
        $resultTime = mysqli_query($link,"SELECT * FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' AND LType = '".$rowCu['LType']."'");
        while($rowTime= mysqli_fetch_array($resultTime, MYSQLI_BOTH)){
            if($rowTime['Ltime']==1)   $ml+=0.5; 
            if($rowTime['Ltime']==2) $ml+=1;
            if($rowTime['Ltime']==3){
                $date1 = $rowTime['Sdate'];
                $date2 = $rowTime['Edate'];
                $diff = abs(strtotime($date2) - strtotime($date1));
                $days = floor($diff /86400);
                $ml += $days;
            }
        }
    }
    if($rowCu['LType']=="6")  {
        $resultTime = mysqli_query($link,"SELECT * FROM Cuti WHERE admin=1 AND management=1 AND sUsername='".$usrName."' AND LType = '".$rowCu['LType']."'");
        while($rowTime= mysqli_fetch_array($resultTime, MYSQLI_BOTH)){
            if($rowTime['Ltime']==1)   $el+=0.5; 
            if($rowTime['Ltime']==2) $el+=1;
            if($rowTime['Ltime']==3){
                $date1 = $rowTime['Sdate'];
                $date2 = $rowTime['Edate'];
                $diff = abs(strtotime($date2) - strtotime($date1));
                $days = floor($diff /86400);
                $el += $days;
            }
        } 
    }
    if($rowCu['LType']=="7")     $rl=$rowCu['Total'];   
}?> 
  <?php 


$sqlquery= "select * from jenisCuti where usrID='$usrID' ";
// echo 	$sqlquery;
 $rsltquery= mysqli_query($link,$sqlquery);
 if(!$rsltquery)
 {
   die ("Invalid Query - get Items List: ". mysqli_error($link));
 }
 else
 {
  $rows= mysqli_fetch_array($rsltquery, MYSQLI_BOTH);
  
   $aL = $rows['Annual'];
    $mtL = $rows['Maternity'];
    $pL = $rows['Paternity'];
    $cL = $rows['Compassionate'];
    $mL = $rows['Medical'];
    // $eL =$rows['Emergency'];;

}
  
  ?>
   

    <label for="exampleFormControlInput1" class="h5 text-white mb-2">Leave Amount</label>
      <table class="table table-dark table-responsive">
                 
  <thead>
    <tr>
      <th scope="col">Type of Leave</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Annual </th>
      <td> <?php echo $al;?> of <?php echo $aL;?></td>
    </tr>
    <tr>
      <th scope="row">Maternity</th>
      <td> <?php echo $mtl;?> of <?php echo $mtL;?></td>
    </tr>
    <tr>
      <th scope="row">Paternity Leave</th>
      <td> <?php echo $pl;?> of <?php echo $pL ;?></td>
    </tr>
    <tr>
      <th scope="row">Compassionate Leave</th>
      <td> <?php echo $cl;?> of <?php echo $cL ;?></td>
    </tr>
    <tr>
      <th scope="row">Medical Leave </th>
      <td><?php echo $ml;?> of <?php echo  $mL ;?></td>
    </tr>
    <tr>
      <th scope="row">Replacement Leave </th>
      <td><?php echo $rl;?></td>
    </tr>
    </tbody>

    </table>
  
</div>
          </div>
                        </div>
                        <!--column-->
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
