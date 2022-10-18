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
              <a class="nav-link" href=".php">
                <i class="ni ni-world <?php if ($activePage=="home") {echo "text-info"; } else  {echo "text-dark";}?>" "></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="home") {echo "text-info"; } else  {echo "text-dark";}?>">Panel 1</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Users.php">
                <i class="ni ni-bullet-list-67 <?php if ($activePage=="Users") {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="Users") {echo "text-info"; } else  {echo "text-dark";}?>"">Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".php">
                <i class="ni ni-money-coins  <?php if ($activePage=="status") {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold  <?php if ($activePage=="status") {echo "text-info"; } else  {echo "text-dark";}?>"">Panel 3</span>
              </a>
            </li>
           
                                </a>
            <li class="nav-item">
              <a class="nav-link" href=".php">
                <i class="ni ni-money-coins <?php if ($activePage=="pending_approval" ||$activePage=="maklumat"  ) {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="pending_approval" || $activePage=="maklumat" ) {echo "text-info"; } else  {echo "text-dark";}?>"">Panel 4</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".php">
                <i class="ni ni-user-run <?php if ($activePage=="senarai" || $activePage=="view_detail") {echo "text-info"; } else  {echo "text-dark";}?>"></i>
                <span class="nav-link-text font-weight-bold <?php if ($activePage=="senarai" || $activePage=="view_detail") {echo "text-info"; } else  {echo "text-dark";}?>"">Panel 5</span>
              </a>
            </li>
         
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            
            <li class="nav-item">
              <a class="nav-link active active-pro" href=".php">
                <i class="ni ni-trophy text-dark"></i>
                <span class="nav-link-text">Food Ordering System</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>