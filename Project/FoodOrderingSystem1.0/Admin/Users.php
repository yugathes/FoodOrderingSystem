 <?php
ob_start();
session_start();?>
<!DOCTYPE html>
<?php

if(isset($_SESSION['username'])){
?>
<html>

<?php include('topnav.php');?>

<body class="bg-info">
<!-- Sidenav -->
  <?php include('sidenav.php');?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Page content -->
      <div class="row" style="margin-top: 15px;margin-left: 15px;">
        <div class="col-xl-10">
        <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Users List <a type="button" class="btn btn-primary" href="newuser.php style="float: right;">Add</a></h3>
			  
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Full Name</th>
                    <th scope="col" class="sort" data-sort="status">Phone No.</th>
                    <th scope="col" class="sort" data-sort="budget">Email</th>
                    <th scope="col" class="sort" data-sort="status">Username</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                    include "../Auth/connection.php";
                	$queryGet = "select * from users order by username";	
                	$resultGet = mysqli_query($link,$queryGet);
                	if(!$resultGet)
                	{
                		die ("Invalid Query - get Items List: ". mysqli_error($link));
                	}
                	else
                	{
                    while($row= mysqli_fetch_array($resultGet, MYSQLI_BOTH))
		            {
		            ?>  
		            <tr>
		                 <td class="budget">
                      <?php echo $row['name']?>
                    </td>
                    <td>
                        <span class="status"><?php echo $row['Hp'];?></span>
                    </td>
                     <td>
                        <span class="status"><?php echo $row['email'];?></span>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="name mb-0 text-sm"><?php echo $row['username']?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <a class="btn btn-danger btn-sm" href="delete.php?usrID=<?php echo $row['username'];?>" onclick="return confirm('Are you sure?')">Delete</a>
                      <a class="btn btn-primary btn-sm" href="edituser.php?usrID=<?php echo $row['username'];?>" >Edit user</a>
                    </td>
                    <td>
                  </tr>
                  <?php }
	}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
        </div>

      
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