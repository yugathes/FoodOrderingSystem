<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
           <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php">
                <i class="ni ni-world <?php if ($activePage=="home") {echo "text-info"; } else  {echo "text-dark";}?>" "></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="home") {echo "text-info"; } else  {echo "text-dark";}?>">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="UploadMenu.php">
                <i class="ni ni-bullet-list-67 <?php if ($activePage=="UploadMenu") {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="UploadMenu") {echo "text-info"; } else  {echo "text-dark";}?>"">Upload Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ManageMenu.php">
                <i class="ni ni-money-coins  <?php if ($activePage=="ManageMenu") {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold  <?php if ($activePage=="ManageMenu") {echo "text-info"; } else  {echo "text-dark";}?>"">Manage Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ManageOrders.php">
                <i class="ni ni-cart <?php if ($activePage=="ManageOrders" ) {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="ManageOrders" ) {echo "text-info"; } else  {echo "text-dark";}?>"">Manage Orders</span>
              </a>
            </li>
         
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            
            <li class="nav-item">
              <a class="nav-link active active-pro" href="along.php">
                <i class="ni ni-trophy text-dark"></i>
                <span class="nav-link-text">Food Ordering System</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>