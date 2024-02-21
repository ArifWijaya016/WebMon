<!DOCTYPE html>
<style>
    header nav ul li:first-child a {
      font-weight: bold;
    }
  </style>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="SISTEM MONITORING WIRELESS SENSOR">
        <meta name="author" content="arifwijaya"/>
        <title>SISTEM MONITORING WIRELESS SENSOR</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" /> -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="assets/ug.png" />
        <!-- <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>


    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
            <!-- Sidenav Toggle Button-->
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 me-2 ms-lg-2 me-lg-0" id="sidebarToggle"><i data-feather="menu"></i></button>
            <!-- Navbar Brand-->
            <!-- * * Tip * * You can use text or an image for your navbar brand.-->
            <!-- * * * * * * When using an image, we recommend the SVG format.-->
            <!-- * * * * * * Dimensions: Maximum height: 32px, maximum width: 240px-->
            <a class="navbar-brand pe-3 ps-4 ps-lg-2" href="index.php">SISTEM MONITORING WIRELESS SENSOR</a>
            <!-- Navbar Search Input-->
            <!-- Navbar Items-->
            <ul class="navbar-nav align-items-center ms-auto">
            
          
<!-- Navbar Brand-->
                <li class="nav-item dropdown no-caret dropdown-user me-3 me-lg-4">
                    <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" 
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="assets/ug.png" /></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="assets/ug.png">
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">Halo, User</div>
                                <div class="dropdown-user-details-email">user@example.com</div>
                            </div>
                        </h6>
                       
                </li>
            </ul>
            
        </nav>
        
                <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <!-- Sidenav Menu Heading (Account)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <div class="sidenav-menu-heading d-sm-none">Account</div>
                            <!-- Sidenav Link (Alerts)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                                Alerts
                                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
                            </a>
                            <!-- Sidenav Link (Messages)-->
                            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                                Messages
                                <span class="badge bg-success-soft text-success ms-auto">2 New!</span>
                            </a>
                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Menu</div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link collapsed" href="index.php">
                                <div class="nav-link-icon"><i class=" fas fa-home"></i></div>
                                Home
                            </a>
    
            <!-- Menu Log Data -->
                            <div class="sidenav-menu-heading">Log Data</div>
                            <!-- Dropdown Menu -->
                         <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownIrigasi" role="button" data-toggle="dropdown" aria-expanded="false">
                      <div class="nav-link-icon"><i class="fas fa-leaf"></i></div>
                      Irigasi
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownIrigasi">
                    <li><a class="dropdown-item" href="logirigasi.php"><i class="fas fa-graph"></i> Data Logger</a></li>
                    <li><a class="dropdown-item" href="grafikirigasi.php"><i class="fas fa-chart-line"></i> Grafik</a></li>
                    </ul>
                     </li>

                     <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownIrigasi" role="button" data-toggle="dropdown" aria-expanded="false">
                      <div class="nav-link-icon"><i class="fas fa-cow"></i></div>
                      Biodigester
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownIrigasi">
                      <li><a class="dropdown-item" href="logbio.php"><i class="fas fa-water"></i> Data Logger</a></li>
                    <li><a class="dropdown-item" href="grafikbio.php"><i class="fas fa-chart-line"></i> Grafik</a></li>
                    </ul>
                     </li>

                     <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownIrigasi" role="button" data-toggle="dropdown" aria-expanded="false">
                      <div class="nav-link-icon"><i class="fas fa-water"></i></div>
                      Hidroponik
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownIrigasi">
                      <li><a class="dropdown-item" href="loghidro.php"><i class="fas fa-water"></i> Data Logger</a></li>
                    <li><a class="dropdown-item" href="grafikhidro.php"><i class="fas fa-chart-line"></i> Grafik</a></li>
                    </ul>
                     </li>

                               
                            
                        <!-- Menu What Is -->
                            <div class="sidenav-menu-heading">What Is ?</div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            <a class="nav-link collapsed" href="landingpageirigasi.php">
                                <div class="nav-link-icon"><i class="fas fa-water"></i></div>
                                Irigation
                            
                            </a>
                             <a class="nav-link collapsed" href="landingpagebio.php">
                                <div class="nav-link-icon"><i class="fa fa-recycle"></i></div>
                                Biodigester
                            
                            </a>
                            <a class="nav-link collapsed" href="landingpagehidro.php">
                                <div class="nav-link-icon"><i class="fas fa-industry"></i></div>
                                Hidroponik
                            
                            </a>
                            </div>
                        </div>
                    <!-- Sidenav Footer-->
                    
                </nav>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
