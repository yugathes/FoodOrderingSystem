<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
 
 <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  align-items-center">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                    </a>
                </div>
                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Nav items -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">
                                    <i class="ni ni-tv-2 text-success "></i>
                                    <span class="nav-link-text font-weight-bold text-dark">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="jabatan.php">
                                    <i class="ni ni-single-02 text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="jabatan") {echo "text-success"; } else  {echo "text-dark";}?>">Manage Department</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cuti_umum.php">
                                    <i class="ni ni ni-calendar-grid-58 text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="cuti_umum") {echo "text-success"; } else  {echo "text-dark";}?>">Manage Public Holiday</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="tambah.php">
                                    <i class="ni ni-shop text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="tambah") {echo "text-success"; } else  {echo "text-dark";}?>">Add Staff</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="staff.php">
                                    <i class="ni ni-bag-17 text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="staff") {echo "text-success"; } else  {echo "text-dark";}?>">Manage Staff</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="uruscuti.php">
                                    <i class="ni ni-laptop text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="uruscuti") {echo "text-success"; } else  {echo "text-dark";}?>">Manage Leave</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="pending_approval.php">
                                    <i class="ni ni-collection text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="pending_approval" || $activePage=="maklumat") {echo "text-success"; } else  {echo "text-dark";}?>">Leave Application Approval</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="senarai.php">
                                    <i class="ni ni-collection text-success"></i>
                                    <span class="nav-link-text font-weight-bold <?php if ($activePage=="senarai" || $activePage=="view_detail") {echo "text-success"; } else  {echo "text-dark";}?>">Leave Application List</span>
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
                                    <span class="nav-link-text">Sistem eCuti</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
