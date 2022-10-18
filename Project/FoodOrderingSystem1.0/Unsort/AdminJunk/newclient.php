<?php 
ob_start();
include "AddClientBE.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Register akaun untuk join program Trade And Claim oleh Southern Finance">
  <meta name="author" content="Creative Tim">
  <title>SF New Client Registration</title>
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
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-success pb-6">
      <div class="container-fluid">
        <br><br>
        <div class="header-body">
            <center><img src="https://thesouthernfinance.com/tradeandclaim//assets/img/brand/white.png" width="200px"></center><br><br>
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
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Prize lot programme</h6>
                  <h5 class="h2 text-white mb-0">Client Registration</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                
                  </ul>
                </div>
              </div>
            </div>
                <!-- Chart wrapper -->
                <div class="card-body">
                    <?php include('errors.php'); 
                    $id = $_GET['time'];
                    include "connection.php";
                	$queryGet = "select iName from introducer WHERE usrID = '".$id."'";	
                	$resultGet = mysqli_query($link,$queryGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{  
                	    while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH)){
                	        $iname = $row['iName'];
                	    }}?>
                <form method="POST">
                    
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Full Name *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Syakir Zufairy Bin Noor Azwan">
  </div>

  <div class="row">

  <div class="col-xl-6">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Phone No. *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="number" placeholder="0178795624">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Password </label>
    <input type="password" class="form-control" id="exampleFormControlInput1" name="password" placeholder="Password">
  </div>

</div>

<div class="col-xl-6">

    <?php if (isset($iname)){?>  <input type="hidden" class="form-control text-dark" id="exampleFormControlInput1" name="iName" value="<?php echo $iname;?>" disabled>
    <?php   }else{?>
        <input type="hidden" class="form-control text-dark" id="exampleFormControlInput1" name="iName" value="Along"><?php  }?>


  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Email *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="email" placeholder="zufairyk@gmail.com">
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Trader Name *</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="tName" placeholder="along7t">
  </div>
  

</div>
</div>

<div class="row">
<div class="col-xl">
<div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >FBS ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="fbsID"  placeholder="Jika tiada, kosongkan">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >XM ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="xmID" placeholder="Jika tiada, kosongkan">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Tifia ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="tifiaID" placeholder="Jika tiada, kosongkan">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Liteforex ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="liteID" placeholder="Jika tiada, kosongkan">
  </div>
</div>

<div class="col-xl">
  <div class="form-group">
    <label for="exampleFormControlInput1" class="h5 text-white mb-2" >Axim ID</label>
    <input type="text" class="form-control text-dark" id="exampleFormControlInput1" name="aximID" placeholder="Jika tiada, kosongkan">
  </div>
</div>
</div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1" class="h5 text-white mb-2" >Address *</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="3"></textarea>
  </div>
    <p class="h4 text-white mb-2">Sila double check data yang anda type sebelum register.</p><br>
    <input class="btn btn-primary" type="submit" name="AddClient" value="AddClient">
</form>

    
  </div>

          </div>
        </div>
        
     
     <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Cara register</h6>
                  <h5 class="h3 mb-0">How to Register</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
             <p>To register to the Trade & Claim programme, please make sure you entered the Broker MT4 ID which is
             registered with Southern Finance. If you havent registered, please choose your preferred broker and register
             with our provided links. </p>
            

 <p>Untuk daftar ke program Trade & Claim, pastikan anda masukkan MT4 ID broker anda yang telah diregisterkan bersama kami.
 Jika anda belum register, sila pilih broker pilihan anda dibawah dan register menggunakan link yang telah disediakan dibawah.</p>
             <a href="https://clicks.pipaffiliates.com/c?c=545327&l=en&p=1"><h3 class="text-red">XM (New Account)</h3></a>

<a href="https://fbs.com/?ppk=tradenclaim"><h3 class="text-green">FBS (New Account)</h3></a>

<a href="http://www.aximtrade.com/member-signup/gtsrc4yy"><h3 class="text-blue">Aximtrade (New Account)</h3></a>

<a href="https://tifia.com/?uid=3821130272&camp=tradenclaim"><h3 class="text-red">Tifia (New Account)</h3></a>

<a href="https://www.liteforex.com/?uid=297113929&cid=107976"><h3 class="text-brown">Liteforex (New Account)</h3></a>

<br>
<p>Jika anda perlukan pertolongan atau anda telah register under broker yang anda minat, sila whatsapp admin kami di <a href="https://southernfinance.wasap.my/">017-8795624</a> atau telegram <a href="https://t.me/dinsouthernfinance">@dinsouthernfinance</p></a>
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
