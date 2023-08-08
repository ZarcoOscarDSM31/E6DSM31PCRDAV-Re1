<?php
include "layout/menu.php";
include "layout/header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="h3 text-gray>
        <h1 class="h3 mb-0 text-gray-800">AVERIAS Y DAÑOS EN VEHICULOS AUTOMOTRICES</h1>
    </div>

    <div>
        <style>
            .h3 {
            margin-bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transform: translate(0%, -7%);
            }
        </style>
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
    </div>
</div>
<div>
        <div id="carousel">
            <figure id="spinner">
                <img src="./styles/img/imagenes1/meca1.jpg" alt>
                <img src="./styles/img/imagenes1/meca2.jpg" alt>
                <img src="./styles/img/imagenes1/meca3.jpg" alt>
                <img src="./styles/img/imagenes1/meca4.jpg" alt>
                <img src="./styles/img/imagenes1/meca5.jpg" alt>
                <img src="./styles/img/imagenes1/meca6.jpg" alt>
                <img src="./styles/img/imagenes1/meca7.jpg" alt>
                <img src="./styles/img/imagenes1/meca8.jpg" alt>

            </figure>
        </div>
            <span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
            <span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
        <div>
            <style>
                div#carousel { 
                    perspective: 1200px; 
                    background: linear-gradient(#4e73df, #a890fe);
                    padding-top: 10%; 
                    font-size:0; 
                    margin-bottom: 2rem; 
                    overflow: hidden; 
                    width: 1100px;
                    border-radius: 40px;
                    transform: translate(1%, 5%);
                }
                figure#spinner { 
                    transform-style: preserve-3d; 
                    height: 300px; 
                    transform-origin: 50% 50% -500px; 
                    transition: 0.5s; 
                } 
                figure#spinner img { 
                    width: 40%; max-width: 425px; 
                    position: absolute; left: 30%;
                    transform-origin: 50% 50% -500px;
                    outline:1px solid transparent; 
                }
                figure#spinner img:nth-child(1) { transform:rotateY(0deg); }
                figure#spinner img:nth-child(2) { transform: rotateY(-45deg); }
                figure#spinner img:nth-child(3) { transform: rotateY(-90deg); }
                figure#spinner img:nth-child(4) { transform: rotateY(-135deg); }
                figure#spinner img:nth-child(5){ transform: rotateY(-180deg); }
                figure#spinner img:nth-child(6){ transform: rotateY(-225deg); }
                figure#spinner img:nth-child(7){ transform: rotateY(-270deg); }
                figure#spinner img:nth-child(8){ transform: rotateY(-315deg); }
                div#carousel ~ span { 
                    color: #fff; 
                    margin: 5%; 
                    display: inline-block; 
                    text-decoration:none; 
                    font-size: 4rem; 
                    transition: 0.5s color; 
                    position: relative; 
                    margin-top: -15rem; 
                    border-bottom: none;
                    line-height: 0; }
                div#carousel ~ span:hover { color: #000; cursor: pointer; }
            </style>
        </div>
        <div>
            <script>
                var angle = 0;
                function galleryspin(sign) { 
                spinner = document.querySelector("#spinner");
                if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
                spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
                }
            </script>
        </div>
</div>

    <div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>
</div>