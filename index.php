<?php
include "layout/menu.php";
include "layout/header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">REPORTE DE AVERIAS Y DAÑOS EN VEHICULOS AUTOMOTRICES</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>+</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Cambio de Aceite (PRECIO ESTIMADO)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                $3,000
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Afinación Vehícular (PRECIO ESTIMADO)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                $2,500
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--CAMBIO DE BALATAS--->
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Cambio de balatas (PRECIO ESTIMADO)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                $800
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Cambio de amortiguadores (PRECIO ESTIMADO)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                $2,500
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
        
            <!-- AGREGAREMOS LOS CONTAINERS MEDIANTE LINKS ES DECIR DANDOLES FUNCIONALIDAD -->
            <table border="1">
        <tr id="ancho">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Operaciones</th>
        </tr>
        <tr>
            <td><input type="text"></td>
            <td> <input type="gmail" name="" id=""></td>
            <td><input type="password"></td>
            <td class="Operaciones_bot">
                <button class="bott">Visualizar</button>
                <button class="bott">Editar</button>
                <button class="bott">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td><input type="text"></td>
            <td> <input type="gmail" name="" id=""></td>
            <td><input type="password"></td>
            <td class="Operaciones_bot">
                <button class="bott">Visualizar</button>
                <button class="bott">Editar</button>
                <button class="bott">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td><input type="text"></td>
            <td> <input type="gmail" name="" id=""></td>
            <td><input type="password"></td>
            <td class="Operaciones_bot">
                <button class="bott">Visualizar</button>
                <button class="bott">Editar</button>
                <button class="bott">Eliminar</button>
            </td>
        </tr>
    </table>
    <style>
        .ancho {
            width: 500px;
            padding: 10px;
        }

        .Operaciones_bot {
            font-size: 10px;
        }

        .bott {
            color: black;
            border: .5;
            
        }
    </Style>
            </div>
        </div>
    </div>
    </div>

    <div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>
</div>