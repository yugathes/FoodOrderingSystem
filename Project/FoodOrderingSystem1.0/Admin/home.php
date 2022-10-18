<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['username'])){
    $usrName=$_SESSION['username'];;
?>
<html>
<?php include('topnav.php');?>

<body class="bg-info">
<!-- Sidenav -->
  <?php include('sidenav.php');?>
  <!-- Main content 
  <div class="main-content" id="panel">
    <!-- Topnav -->
  
        <?php
     include "../Auth/connection.php";
    
        ?>

   
  
      </div>
      <!-- Footer -->
   


  </div></div>
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