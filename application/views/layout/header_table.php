
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Morinna.couture</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/')?>images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="<?=base_url('assets/')?>./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?=base_url('assets/')?>css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="<?=base_url('assets/')?>images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="<?=base_url('assets/')?>./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?=base_url('assets/')?>img/profile/putih.png"style="height:60px; width:120px;" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img  src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" height="100" width="100" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                <ul>
                                        <li>
                                            <a href="<?= site_url('Profil/') ?>"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li><a href="<?= site_url('Auth/logout') ?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">MENU</li>
                    <li>
                        <a href="<?= site_url('Dashboard/') ?>" aria-expanded="false">
                        <i class="fa fa-chart-line"></i><span class="nav-text">LDashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('hijab/') ?>" aria-expanded="false">
                        <i class="fa fa-folder"></i><span class="nav-text">Data Hijab</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('Penjualan/') ?>" aria-expanded="false">
                        <i class="fa fa-folder"></i><span class="nav-text">Penjualan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('Auth/logout') ?>" aria-expanded="false">
                        <i class="fa fa-power-off"></i><span class="nav-text">Log Out</span>
                        </a>
                    </li>
                    </li>  
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
