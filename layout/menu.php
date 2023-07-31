<!DOCTYPE html>
<html lang="en">

<head>
<!-- RECORDEMOS QUE ESTO ES TODO LO DE LA PARTE IZQUIERDA INCLUYENDO EL TITULO DE LA PAGINA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FixcarDigital</title>
    <link rel="icon" href="imagenes1/icono.jpg">
    
<!-- FONT AWESOME ICONS -->
<script src="https://kit.fontawesome.com/07b3caf175.js" crossorigin="anonymous"></script>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/E6DSM31PCRDAV-Re1%20-%20copia//styles/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!--Revisar tu perfil-->
        
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FixcarDigital</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
    
            <!-- Heading -->
            <div class="sidebar-heading">
                Crudes
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/E6DSM31PCRDAV-Re1%20-%20copia/#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ingreso</span></a>
            </li>

        <?php
        include ("./../../test.php");

        ?>
            <!-- Nav Item - Productos -->
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/views/products/index.php'?>">Products BUR
<!--                 <a class="nav-link" href="./views/products/index.php">
 -->                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Productos</span></a>
            </li>

            <!-- Nav Item - Descripción -->
            <li class="nav-item">
            <a class="nav-link" href="<?=$h->get['base_url'].'/views/clients/index.php'?>">Clientes BUR
                    <i class="fas fa-fw fa-table"></i>
                    <span>Clientes</span></a>
            </li>
            <!-- Nav Item - Costos -->
            <li class="nav-item">
                <a class="nav-link" href="costos.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Costos</span></a>
            </li>
            <!--Reportes-->
            </li>
            <!-- Nav Item - Reportes -->
            <li class="nav-item">
                <a class="nav-link" href="reportes.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reportes</span></a>
            </li>
            <!--PERFIL
            <li class="nav-item">
                <a class="nav-link" href="perfil.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>perfil</span></a>
            </li>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">