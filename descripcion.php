<?php
include "layout/menu.php";
include "layout/header.php";
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Descripción</h6>
    </div>
    <div class="card-body"> 
        
        <form action="./databases/altadescripcion.php" method="POST">
            <!-- Inician las tablas -->
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Evidencia con Imágenes</th>
                        <th>Reporte de daños</th>
                        <br>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="background-color: #fff; color: #000;">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="subir imagen">
                        </td>
                        <td style="background-color: #4e73df; color: white;">
                            <div class="input">
                                <input class="input__field" id="correo" name="des1"  type="mail" required />
                                <label for="mail" class="input__label">Descripción</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="background-color: #4e73df; color: #fff   ;"> <form action="upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name=" subir imagen"></td>
                        <td style="color:black">
                            <div class="input1">
                                <input class="input1__field" id="correo" name="des2" type="mail" required />
                                <label for="mail" class="input1__label">Descripción</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #fff; color: black;"> <form action="upload.php" method="post" enctype="multipart/form-data">
                            <input type="file" name=" subir imagen"></td>
                        <td style="background-color: #4e73df; color: white;">
                            <div class="input">
                                <input class="input__field" id="correo" name="des3" type="mail" required />
                                <label for="mail" class="input__label">Descripción</label>
                            </div>
                        </td>
                    </tr>
        </tbody>
    </table>
    <button class="boton"" >Guardar</button>
    <!-- Finalizan las tablas -->

        </form>
        
<div>
<style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            height: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            width: 50%;
            text-align: center;
            padding: 10px;
        }

        /* Estilo para filas de la primera celda (amarillo) */
        tr:nth-child(odd) td:first-child {
            background-color: #fff; 
        }

        /* Estilo para filas de la segunda celda (morado) */
        tr:nth-child(odd) td:last-child {
            background-color: #fff; /* Morado */
            color: black;
        }
                
        .input {
            position:relative;
            color: #fff;
        }

        .input__field {
        padding: 50px;
        width: 270px;
        border: none;
        border-radius: 4px;
        font: inherit;
        color: #fff;
        background-color: transparent;
        outline: 2px solid #fff;
        }

        .input__label {
            position: absolute;
            top: 0;
            left: 120px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }

        .input__field:focus-visible ~ .input__label, 
        .input__field:valid ~ .input__label {
            transform: translate(-120px, 0px) scale(1);
            color: #fff;
        }

        .input__field:is(:focus-visible, :valid) {
            outline-color: #fff;
        }

        .input1 {
            position:relative;
            color: #000;
        }

        .input1__field {
        padding: 50px;
        width: 270px;
        border: none;
        border-radius: 4px;
        font: inherit;
        color: #000;
        background-color: transparent;
        outline: 2px solid #000;
        }

        .input1__label {
            position: absolute;
            top: 0;
            left: 120px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }

        .input1__field:focus-visible ~ .input1__label, 
        .input1__field:valid ~ .input1__label {
            transform: translate(-120px, 0px) scale(1);
            color: #000;
        }

        .input1__field:is(:focus-visible, :valid) {
            outline-color: #4e73df;
        }
        .m-0 {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transform: translate(-4%, -7%);
        }

        /* Botón */
        .boton {
            position: relative;
            padding: 10px 10px;
            color: #000;
            left: 900px;            
            text-decoration: none;
            font-size: 20px;
            transform: translate(45%, -7%);
            border-radius: 10px;
            background-color: #fff;
            border-color: 5px, #000;
        }

        .boton:hover{
            background:#4e73df;
            color: #fff;
        }

        /* MEDIA QUERY RESPONSIVE */
        /* LAPTOPS */
        @media screen and (max-width: 1440px) {
            /* Cuadros blancos responsive para laptops 1440px x 900px*/
            .input__field {
            padding: 50px;
            width: 350px;
            border: none;
            border-radius: 4px;
            font: inherit;
            color: #fff;
            background-color: transparent;
            outline: 2px solid #fff;
        }

        .input__label {
            position: absolute;
            top: 0;
            left: 110px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }
            .input__field:focus-visible ~ .input__label, 
        .input__field:valid ~ .input__label {
            transform: translate(-115px, 0px) scale(1);
            color: #fff;
        }
        /* Cuadro negro responsive para laptops 1366px x 768px*/
        .input1__field {
            padding: 50px;
            width: 350px;
            border: none;
            border-radius: 4px;
            font: inherit;
            color: #000;
            background-color: transparent;
            outline: 2px solid #000;
        }

        .input1__label {
            position: absolute;
            top: 0;
            left: 110px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }
        .input1__field:focus-visible ~ .input1__label, 
        .input1__field:valid ~ .input1__label {
            transform: translate(-115px, 0px) scale(1);
            color: #000;
        }
        }

        /* PC */
        @media screen and (max-width: 768px) {
            /* Cuadros blancos responsive para laptops 768px x 1024px*/
            .input__field {
            padding: 50px;
            width: 180px;
            border: none;
            border-radius: 4px;
            font: inherit;
            color: #fff;
            background-color: transparent;
            outline: 2px solid #fff;
        }

        .input__label {
            position: absolute;
            top: 0;
            left: 5px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }
            .input__field:focus-visible ~ .input__label, 
        .input__field:valid ~ .input__label {
            transform: translate(-110px, 45px) scale(1);
            color: #000;
        }
        /* Cuadro negro responsive para laptops 768px x 1024px*/
        .input1__field {
            padding: 50px;
            width: 180px;
            border: none;
            border-radius: 4px;
            font: inherit;
            color: #000;
            background-color: transparent;
            outline: 2px solid #000;
        }

        .input1__label {
            position: absolute;
            top: 0;
            left: 5px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }
        .input1__field:focus-visible ~ .input1__label, 
        .input1__field:valid ~ .input1__label {
            transform: translate(-110px, 45px) scale(1);
            color: #000;
        }
        }

        /* PC */
        @media screen and (max-width: 390px) {
            /* Cuadros blancos responsive para laptops 390px x 844px*/
            .input__field {
            padding: 50px;
            width: 100px;
            border: none;
            border-radius: 4px;
            font: inherit;
            color: #fff;
            background-color: transparent;
            outline: 2px solid #fff;
        }

        .input__label {
            position: absolute;
            top: 0;
            left: -5px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }
            .input__field:focus-visible ~ .input__label, 
        .input__field:valid ~ .input__label {
            transform: translate(-100px, 45px) scale(1);
            color: #000;
        }
        /* Cuadro negro responsive para laptops 390px x 844px*/
        .input1__field {
            padding: 50px;
            width: 100px;
            border: none;
            border-radius: 4px;
            font: inherit;
            color: #000;
            background-color: transparent;
            outline: 2px solid #000;
        }

        .input1__label {
            position: absolute;
            top: 0;
            left: -5px;
            transform: translate(10px, 10px);
            transform-origin: left;
            transition: transform 0.25s;
        }
        .input1__field:focus-visible ~ .input1__label, 
        .input1__field:valid ~ .input1__label {
            transform: translate(-100px, 45px) scale(1);
            color: #000;
        }
        }
    </style>
</div>
    <div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>