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
  <title>Leave Application | Sistem eCuti</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">  <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/overcast/jquery-ui.css">  -->
</head>


<body>
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
    <div class="container-fluid mt--6 bg-info">
      <div class="row">
        <div class="col-xl-12">
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">New Leave Application</h3>
            </div>
            <form action="permintaan.php" method="POST" enctype="multipart/form-data">
             <div class="row">
            <div class="col-xl-3">
         
          <div class="card-body">
          <!-- <div class="form-group">
  <label for="sel1" class="h5 text-white mb-2" >Type of Leave</label>
  <select class="form-control" id="sel1" name="jenis">
    <option value="Sila Pilih">Please Choose</option>
    <option value="Annual Leave">Annual Leave</option>
 <option value="Maternity Leave">Maternity Leave</option>
  <option value="Paternity Leave">Paternity Leave</option>
   <option value="Compassionate Leave">Compassionate Leave</option>
    <option value="Medical Leave">Medical Leave</option>
     <option value="Emergency Leave">Emergency Leave</option>
      <option value="Replacement Leave">Replacement Leave</option>
      
  </select>
  
  
</div> -->
<?php
    include "../admin/connection.php";
        $JqueryGet = "select * from leave_type ";	
    	$JresultGet = mysqli_query($link,$JqueryGet);
    	if(!$JresultGet)
    	{
    		die ("Invalid Query - get Items List: ". mysqli_error($link));
    	}
    	else
    	{
?>
<div class="form-group">
  <label for="sel1" class="h5 text-white mb-2" >Type of Leave</label>
  <select class="form-control" id="sel1" name="jenis">
  <option value="Sila Pilih">Please Choose</option>
<?php
    while($Jrow= mysqli_fetch_array($JresultGet, MYSQLI_BOTH))
	{
?>        
      <option value="<?php echo $Jrow['id'];?>"><?php echo $Jrow['leave_name'];?></option>
      <?php
	}   }
      ?>
		
    </select>
  </div>


 <div class="form-group">
  <label for="sel1" class="h5 text-white mb-2" >Period</label>
  <select class="form-control" id="select" onchange="ShowDiv(this.value)" name="tempoh">
      <option value="Sila Pilih">Please Choose</option>
    <option value="1">Half Day</option>
    <option value="2">Full Day</option>
    <option value="3">More than 1 day</option>
  </select>
</div>
 
</div>

<!----Start of js panels------>
<div class="col-xl" id="date">
    <div class="form-group"> <!-- Date input -->
        <label for="date" class="h5 text-white mb-2">Date</label>
        <!-- <input class="form-control" id="leave_date" name="leave_date" placeholder="Please Choose" type="date"/> -->
        <input type="text" class="form-control" id="leave_date" name="leave_date" placeholder="Select Leave Date" style="background-color:white;" readonly>
    </div>
</div>


<!----Start of js panels------>
<div class="col-xl" id="separuh">
    <div class="form-group">
        <label for="sel1" class="h5 text-white mb-2" >Time</label>
            <select class="form-control" id="selectx" onchange="ShowDiv(this.value)" name="timing">
                <option value="Sila Pilih">Please Choose</option>
                <option value="1">Before Lunch Break</option>
                <option value="2">After Lunch Break</option>
            </select>
    </div>
</div>


<!----Start of js panels------>
<div class="col-xl" id="lama">
    <div class="form-group"> <!-- Date input -->
        <label for="date" class="h5 text-white mb-2">Date Start</label>
     
        <input type="text" class="form-control" name="Sdate" id="Sdate" placeholder="Select Start Date" style="background-color:white;" readonly>
    </div>
      
    <div class="form-group"> <!-- Date input -->
        <label for="date" class="h5 text-white mb-2">Date End</label>
      
        <input type="text" class="form-control" name="Edate" id="Edate" placeholder="Select Start Date" style="background-color:white;" readonly>
    </div>

    <div class="form-group"> <!-- Date input -->
        <label for="date" class="h5 text-white mb-2">Days</label>
                                          
       <input type="text" class="form-control" name="number_days" id="day" autocomplete='off' readonly>
                                         
       </div>

    
</div>
    <div class="col-xl" id="document">
        <div class="form-group"> <!-- Date input -->
            <label for="date" class="h5 text-white mb-2">Supporting Documents (Optional)</label>
            <input type="file" id="file" name="uploadedFile">
        </div>
    </div>        
    <div class="col-xl" id="sebab">
        <div class="form-group">
            <label for="exampleFormControlTextarea1" class="h5 text-white mb-2">Reason</label>   
            <textarea class="form-control" id="exampleFormControlTextarea1" name="sebab" rows="7"></textarea>
        </div>
    </div>
      
      </div> </div>
      <div class="col-xl-3">
      <div class="form-group"> <!-- Submit button -->
        
        <input type="hidden" name="username" value="<?php echo $user;?>">
        <input type="hidden" name="userid" value="<?php echo $userID ;?>">
        
        <button class="btn btn-success" name="addCuti" type="submit" style="padding-left:20px;">Submit</button>
      </div></div></div>
</form>
</div>
      
       </div>
        </div>
      </div>
     <!-- Form code ends --> 
<?php
    include "../admin/connection.php";
    $cutiID = "";
    $type = "";
    $tempoh = "";
   // $date    = "";
    $timing    = "";
    $Sdate = "";
    $Edate    = "";
    $sebab = "";
    $username = "";
    $document= "";
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $datetime = date('Y-m-d G:i:s ', time());
    $cunt = new DateTime($datetime);

    $errors = array(); 
    
    if (isset($_POST['addCuti'])) {
        $order = mysqli_query($link,'SELECT max(id) FROM Cuti');
        $orderRes = mysqli_fetch_array($order, MYSQLI_BOTH);
        $orderR = $orderRes[0] + 1;

  // receive all input values from the form
	$type = mysqli_real_escape_string($link, $_POST['jenis']);
	$tempoh = mysqli_real_escape_string($link, $_POST['tempoh']);
  // $date = mysqli_real_escape_string($link, $_POST['date']);
  $leave_date = mysqli_real_escape_string($link, $_POST['leave_date']);
  echo ' $leave_date : ' . $leave_date ;
  $leavedate  = str_replace('/', '-', $leave_date  );
  $date = date("Y-m-d", strtotime($leavedate));

  


  $timing = mysqli_real_escape_string($link, $_POST['timing']);
  

  $Sdate = mysqli_real_escape_string($link, $_POST['Sdate']);
  //echo ' $Sdate ' .$Sdate ;
  $startdate = str_replace('/', '-', $Sdate );
  $date_from = date("Y-m-d", strtotime($startdate));

  $Edate = mysqli_real_escape_string($link, $_POST['Edate']);
  $enddate = str_replace('/', '-', $Edate);
  $date_to = date("Y-m-d", strtotime($enddate));
  //$number_days = mysqli_real_escape_string($link, $_POST['number_days']);

	$sebab = mysqli_real_escape_string($link, $_POST['sebab']);
  $username = mysqli_real_escape_string($link, $_POST['username']);
  $userid = mysqli_real_escape_string($link, $_POST['userid']);
  

 if($tempoh==1)
  {
    $number_days='0.5';
    // $date_from='0000-00-00';
    // $date_to ='0000-00-00';
       $date_from= $date;
    $date_to = $date;

  }else if($tempoh==2)
  {
    $number_days='1';
    // $date_from='0000-00-00';
    // $date_to ='0000-00-00';
      $date_from= $date;
    $date_to = $date;

  }else{
    //take leave more than 1 day
    $date='0000-00-00';
    $countdays = mysqli_real_escape_string($link, $_POST['number_days']);

      //checking if selected date is public holiday date
      $sql = "SELECT  count(ph_date) as noDays FROM cutiumum WHERE ph_date BETWEEN '" . $date_from . "' AND '" . $date_to . "'";
                
      // echo $sql ;
      // echo '<br>';
      $rslt = mysqli_query($link, $sql);

      if(!$rslt)         
      {   die ("Invalid Query : ". mysqli_error($link));  }
  else    { 

    $res = mysqli_fetch_array($rslt);
    $noOfDaysHolidays = $res['noDays'];
    // echo 'noOfDaysHolidays : '.$noOfDaysHolidays;
    // echo '<br>';
     // $number_days = $_POST['number_days'];
    // echo 'number_days from form: '.$number_days;


    if ($noOfDaysHolidays > 0) {
     $number_days = $countdays -  $noOfDaysHolidays;
    // echo 'number_days deduct holiday: '.$number_days;

    } else {

     $number_days = $countdays;
    // echo 'number_days no holiday: '.$number_days;

    }
  }
     
       //end checking


  }


  // $queryPrz = "select * from users where username = '".$row['sUsername']."'";	
  // $resultPrz = mysqli_query($link,$queryPrz);
  // if(!$resultPrz)         {   die ("Invalid Query - get Items List: ". mysqli_error($link));  }
  // else    {   
  //     while($rowPrz= mysqli_fetch_array($resultPrz, MYSQLI_BOTH))
  //     {
  



	if (empty($type)) { array_push($errors, "Full Name is required"); }
    if (empty($tempoh)) { array_push($errors, "Address is required"); }

    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
    {
        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
        $fileName = $_FILES['uploadedFile']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        
        // sanitize file-name
        $newFileName = $orderR . '_' . $username . '.' . $fileExtension ;
 
        // check if file has one of the following extensions
        $allowedfileExtensions = array('jpg', 'gif', 'PNG', 'pdf', 'PDF', 'png');
 
        if (in_array($fileExtension, $allowedfileExtensions))
        {
            $uploadFileDir = 'dokumen/';
            $dest_path = $uploadFileDir . $newFileName;
 
            if(move_uploaded_file($fileTmpPath, $dest_path)) 
            {
            if (count($errors) == 0) {
                echo $type;
                echo $tempoh;
                echo $date;
                echo $timing;
                echo $filename;
              	$Cquery = "INSERT INTO Cuti (id, sUsername,usrID, date, LType, Ltime, admin, management, doku, Sdate, Edate,number_days, sebab, datetimeReq) 
              	VALUES ('$cutiID', '$username','$userid', '$date', '$type', '$tempoh', '', '1', '$newFileName', '$date_from', '$date_to','$number_days', '$sebab','$datetime')";
              	echo $Cquery;
              	$result= mysqli_query($link, $Cquery);
              	
              	if (!$result)
            	{
            	    echo $result;
            	    die("Error:".mysqli_error($link));
            	    $fail = "Please Check Cuti Detaile.";
                    echo "<script type='text/javascript'>alert('$fail');
            	    document.location='status.php';
            	    </script>"; 
            	}
            	else
            	{
	                $sucess = "Cuti Added Sucessful.";
	                echo "<script type='text/javascript'>alert('$sucess');
	                document.location='status.php';
	                </script>";
	            }
            }
            }
        }
    }
else{
        if (count($errors) == 0) {
          	$Cquery = "INSERT INTO Cuti (id, sUsername,usrID, date, LType, Ltime, admin, management, doku, Sdate, Edate,number_days, sebab, datetimeReq) 
          	VALUES ('$cutiID', '$username','$userid', '$date', '$type', '$tempoh', '', '1', '', '$date_from', '$date_to','$number_days', '$sebab','$datetime')";
          	echo $Cquery;
          	$result= mysqli_query($link, $Cquery);
          	
          	if (!$result)
        	{
        	    echo $result;
        	    die("Error:".mysqli_error($link));
        	    $fail = "Please Check Cuti Detaile.";
                echo "<script type='text/javascript'>alert('$fail');
        	    document.location='status.php';
        	    </script>"; 
        	}
        	else
        	{
                $sucess = "Cuti Added Sucessful.";
                echo "<script type='text/javascript'>alert('$sucess');
                document.location='status.php';
                </script>";
            }
        }
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
  <!-- <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script> -->
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <script>
      document.addEventListener("DOMContentLoaded", function(event) {
   document.querySelectorAll('img').forEach(function(img){
  	img.onerror = function(){this.style.display='none';};
   })
});
  </script>
  
  <script>
    window.onload = function() {
        document.getElementById('date').style.display = 'none';
        document.getElementById('separuh').style.display = 'none';
        document.getElementById('lama').style.display = 'none';
        document.getElementById('document').style.display = 'none';
        document.getElementById('sebab').style.display = 'none';
};
  </script>
  
  <script>
      
      $(document).ready(function(){

     $('#select').change(function(){

     if($(this).val()=="1") {
        $("#date").show();
         $("#separuh").show();
          $("#lama").hide();
          $("#document").show();
          $("#sebab").show();

     }
     else if($(this).val()=="2") {
        $("#date").show();
         $("#separuh").hide();
          $("#lama").hide();
          $("#document").show();
          $("#sebab").show();
     }
     else if($(this).val()=="3") {
        $("#date").hide();
         $("#separuh").hide();
          $("#lama").show();
          $("#document").show();
          $("#sebab").show();
     } else {}

  });

});
      
  </script>
  
  <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
<script>
    function checkFile(yourForm){

    var fileVal = yourForm.elements['file'].value;

    //RegEx for valid file name and extensions.
    var pathExpression = "[?:[a-zA-Z0-9-_\.]+(?:.png|.jpeg|.gif)";


    if(fileVal != ""){
        if(!fileVal.toString().match(pathExpression) && confirm("The file is not a valid image. Do you want to continue?")){
            yourForm.submit();
        } else {
            return;
        }
    } else {
        if(confirm("Please make sure you upload your supporting documents.")) {
            yourForm.submit();
        } else {
            return;
        }
    }
}



$(function() {

$('#Sdate').datepicker({
    showOnFocus: false,
    // beforeShowDay: function(d) {
    //     return [!(d.getDay() == 6)]
    // },
    beforeShowDay: function(d) { return [!(d.getDay()==6||d.getDay()==0)] },


    pickerClass: 'noPrevNext',
    numberOfMonths: 1,
    dateFormat: 'dd/mm/yy',
    // minDate: '0',
    maxDate: '+1Y',
    changeMonth: true,
    changeYear: true,

    onSelect: function(dateStr) {
        var min = $(this).datepicker('getDate');
        $('#Edate').datepicker('option', 'minDate', min || '0');
        datepicked();
        
    }
});


$('#Edate').datepicker({
    showOnFocus: false,
    // beforeShowDay: function(d) {
    //     return [!(d.getDay() == 6)]
    // },
    beforeShowDay: function(d) { return [!(d.getDay()==0||d.getDay()==6)] },
    pickerClass: 'noPrevNext',
    numberOfMonths: 1,
    dateFormat: 'dd/mm/yy',
    //   minDate: '0',
    maxDate: '+1Y',
    onSelect: function(dateStr) {
        var max = $(this).datepicker('getDate');
        $('#Sdate').datepicker('option', 'maxDate', max || '+1Y');
        datepicked();
      
    }
});



var datepicked = function() {
            var start_date = $('#Sdate');
            var end_date = $('#Edate');
            var day = $('#day');

            var startDate = start_date.datepicker('getDate')
            var endDate = end_date.datepicker('getDate')
            // Validate input
            if (endDate && startDate) {
                // Calculate days between dates
                var millisecondsPerDay = 86400 * 1000; // Day in milliseconds
                startDate.setHours(0, 0, 0, 1); // Start just after midnight
                endDate.setHours(23, 59, 59, 999); // End just before midnight
                var diff = endDate - startDate; // Milliseconds between datetime objects
                var days = Math.ceil(diff / millisecondsPerDay);

                // Subtract two weekend days for every week in between
                var weeks = Math.floor(days / 7);
                 var days = days - (weeks * 2);
               // var days = days - (weeks * 1);

                // Handle special cases
                var startDay = startDate.getDay();
                var endDay = endDate.getDay()

                // Remove weekend not previously removed.
                if (startDay - endDay > 1)
                    var days = days - 2;

                // Remove start day if span starts on Sunday but ends before Saturday
                 if (startDay == 0 && endDay != 6)
                     var days = days;

                // Remove end day if span ends on Saturday but starts after Sunday
                 if (endDay == 6 && startDay != 0)
                    var days = days;

                day.val(days);
                console.log(days);
            }
        }


           // half day
           $('#leave_date').datepicker({
            showOnFocus: false,
            beforeShowDay: function(d) { return [!(d.getDay()==0||d.getDay()==6)] },

            pickerClass: 'noPrevNext',
            numberOfMonths: 1,
            dateFormat: 'dd/mm/yy',
            //   minDate: '0',
            maxDate: '+1Y'

        });




});
</script>
</body>
</html>
<?php   }
else{   header('Location:index.php');}
?>