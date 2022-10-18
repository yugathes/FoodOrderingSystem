<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['1login_intro'])){
    $cuti = $_GET['cutiID'];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Application Information | Sistem eCuti</title>

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
    <div class="header bg-info pb-6">
      <div class="container-fluid">
        <br>
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
            <!--<div class="card-header bg-transparent">-->
            <!--  <div class="row align-items-center">-->
            <!--    <div class="col">-->
            <!--      <h6 class="text-light text-uppercase ls-1 mb-1">Sistem eCuti</h6>-->
            <!--      <h5 class="h2 text-white mb-0">Application Information</h5>-->
            <!--    </div>-->
            <!--    <div class="col">-->
            <!--      <ul class="nav nav-pills justify-content-end">-->
                
            <!--      </ul>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
                <!-- Chart wrapper -->
                <div class="card-body">
                <form  method="POST">
                    <?php include('Errors.php'); ?>
<?php
        include "../admin/connection.php";
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
  <!--      <div class="form-group">-->
  <!--  <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Full Name </label>-->
  <!--  <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="name" placeholder="" value="<?php echo $rowPrz['name'];?>" disabled>-->
  <!--</div>-->
  
  
  
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
    
  <!--  <div class="form-group">-->
  <!--  <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Department </label>-->
  <!--  <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $rowPrz['dept'];?>" disabled>-->
  <!--</div>-->

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
 
  <!-- <div class="form-group">-->
  <!--<label for="exampleFormControlInput1" class="h5 text-white mb-2" >Date Apply </label>-->
  <!-- <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="pswd1" placeholder="" value="<?php echo $row['datetimeReq'];?>" disabled>-->
  <!--</div>-->
  
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
   

  <!--  <div class="form-group">-->
  <!--  <label for="exampleFormControlInput1" class="h5 text-white mb-2">Leave Amount</label>-->
  <!--    <table class="table table-dark table-responsive">-->
                 
  <!--<thead>-->
  <!--  <tr>-->
  <!--    <th scope="col">Type of Leave</th>-->
  <!--    <th scope="col">Amount</th>-->
  <!--  </tr>-->
  <!--</thead>-->
  <!--<tbody>-->
  <!--<tr>-->
  <!--    <th scope="row">Annual </th>-->
  <!--    <td> <?php echo $al;?> of <?php echo $aL;?></td>-->
  <!--  </tr>-->
  <!--  <tr>-->
  <!--    <th scope="row">Maternity</th>-->
  <!--    <td> <?php echo $mtl;?> of <?php echo $mtL;?></td>-->
  <!--  </tr>-->
  <!--  <tr>-->
  <!--    <th scope="row">Paternity Leave</th>-->
  <!--    <td> <?php echo $pl;?> of <?php echo $pL ;?></td>-->
  <!--  </tr>-->
  <!--  <tr>-->
  <!--    <th scope="row">Compassionate Leave</th>-->
  <!--    <td> <?php echo $cl;?> of <?php echo $cL ;?></td>-->
  <!--  </tr>-->
  <!--  <tr>-->
  <!--    <th scope="row">Medical Leave </th>-->
  <!--    <td><?php echo $ml;?> of <?php echo  $mL ;?></td>-->
  <!--  </tr>-->
  <!--  <tr>-->
  <!--    <th scope="row">Replacement Leave </th>-->
  <!--    <td><?php echo $rl;?></td>-->
  <!--  </tr>-->
  <!--  </tbody>-->

  <!--  </table>-->
  <!--</div>-->
  
   <input type="hidden" name="cutiID" value="<?php echo $row['id'];?>">
    <input class="btn btn-primary" type="submit" name="update" value="Save">
    
</div>

   
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
    	
        $query = "UPDATE Cuti SET
    				management = '".$status."' , status='1'
    				WHERE id ='".$cutiID."'";
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
               
               
              
            
            
            
            
  </div>
  <!--row-->
  
  
  
  
  
  
  
</div></div>

 
      
  </div>
</div>
        </div></div>
     
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
<?php    }
else{   header('Location:index.php');}
?>