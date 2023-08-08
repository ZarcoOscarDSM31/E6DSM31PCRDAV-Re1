<?php
include "layout/menu.php";
include "layout/header.php";
?>

    <table class="permanente">
        <tr class="nom">
            <th class="col1">Nombre del negocio:</th>
            <th class="col">Taller la Flaca S.A. DE C.V.</th>
            <th class="col1">Dirección:</th>
            <th class="col">AV. ORIENTE 6 ESQ. SUR 23, Orizaba Centro, C.P 94300, Orizaba, Veracruz</th>
        </tr>
        <tr class="nom">
            <th class="col1">Nombre del colaborador:</th>
            <th class="col">
                <div>
                    <div class="dropdown">
                        <div class="content">
                            <p>Elige el colaborador</p> 
                            <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></span>
                    </div> 
                    <button type="button"></button>
                        <div class="menu">
                            <a>
                                <p>Juanito Pérez</p>
                            </a>
                            <a>
                                <p>Jesús Mondragón</p>
                            </a>
                            <a>
                                <p>Bartolomé García</p>
                            </a>
                        </div>
        <div>
            <style>
                
            .dropdown {
                translate: 0 5px;
                position: relative;
                cursor: pointer;
            }

            .dropdown > button {
                width: 450px;
                height: 80px;
                border: 0;
                border-radius: 6px;
                font-family: inherit;
                font-size: 15px;
                background: #4e73df;
            }

            .dropdown > .content {
                position: absolute;
                z-index: 2;
                top: 0;
                left: 0;
                width: 95%;
                height: 70px;
                padding: 0 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 10px;
                color: #fff;
            }

            .dropdown > .content::after {
                content: "";
                position: absolute;
                bottom: 10px;
                right: 10%;
                width: 80%;
                height: 1px;
                transform: scaleX(0);
                background: rgb(255 255 255 / 100%);
                transition: 0.3s;
            }

            .dropdown:hover > .content::after {
                transform: scaleX(1);
            }

            .dropdown > .content > span:first-child {
                font-size: 20px;
            }

            .dropdown > .content > span:last-child {
                margin-left: auto;
            }

            .dropdown > .content > span:last-child {
                transition: 0.3s;
            }

            .dropdown:hover > .content > span:last-child {
                rotate: -180deg;
            }

            .dropdown > .menu {
                position: absolute;
                z-index: 1;
                top: -6px;
                left: 50%;
                display: grid;
                width: 105.5%;
                padding: 70px 0 6px;
                border-radius: 6px;
                translate: -50% 0;
                visibility: hidden;
                opacity: 0;
                scale: 0.85;
                background: linear-gradient(#4e73df, #a890fe);
                transition: 0.3s;
                float:none;
            }

            .dropdown:hover > .menu {
                visibility: visible;
                opacity: 1;
                scale: 1;
            }

            .dropdown > .menu > a {
                display: flex;
                align-items: center;
                gap: 10px;
                color: #fff;
                font-size: 14px;
                padding: 0 24px;
            }

            .dropdown > .menu > a:hover {
                background: rgb(255 255 255 / 20%);
                color: #000;
            }

            .dropdown > .menu > a > span {
                font-size: 20px;
            }
        </style>
        </div>
    </div>
                    </th>
                    <th class="col1">Matrícula:</th>
                    <th class="col"></th>
                </tr>
            </table>
    <div>
        <style>
        
        /* DISEÑO DE LA TABLA SUPERIOR */
        .nom, .col, .col1 {
            border: 1px solid #000;
            height: 60px;
            width: 450px;
            text-align: center;
            float: none;
        }

        .col1 {
            font-size: 20px;
            width: 250px;
        }

        .col {
            font-size: 15px;
            background-color: #4e73df;
            color: #fff;
        }
        </style>
    </div>
        <br>


    <div>
        <form action="./databases/conexion.php" method="POST">
             <!-- Inician ls tablas -->
        <table class="datos">
        
        <thead class="fila">
            <th class="colu1"><h4>DATOS DEL CLIENTE</h4></th>
            <th></th>
            <th class="colu1"><h4>DATOS DEL VEHÍCULO</h4></th>
            <th></th>
        </thead>
    
        <tbody>
        <tr class="fila">
            <th class="colu1">Nombre(s):
            <th class="colu1">
                <br>
                <div class="input">
                    <input class="input__field" id="text" name="nombre" type="text" required />
                    <label for="text" class="input__label" >Ingresa el nombre</label>
                </div>
                <br>
        </th>
            </th>
        
            <th class="colu1">Marca:
            <th class="colu1">
            <div class="down">
                    <div class="cont">
                        <p>Elige la  marca</p> 
                        <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></span>
                    </div> 
                    <button type="butt"></button>
                    <div class="men">
                        <a>
                            <p>Nissan</p>
                        </a>
                        <a>
                            <p>Ford Motor</p>
                        </a>
                        <a>
                            <p>Toyota</p>
                        </a>
                        <a>
                            <p>Volkswagen</p>
                        </a>
                        <a>
                            <p>Mazda</p>
                        </a>
                        <a>
                            <p>KIA</p>
                        </a>
                        <a>
                            <p>Honda</p>
                        </a>
                        <a>
                            <p>Suzuky</p>
                        </a>
                        <a>
                            <p>BMW</p>
                        </a>
                        <a>
                            <p>Mercedes-Benz</p>
                        </a>
                    </div>
            </th>
            </th>
        </tr>
        
        <tr class="fila">
            <th class="colu1">Apellidos(s):
            <th class="colu1">
                <br>
                <div class="input">
                    <input class="input__field" id="text" name="app" type="text" required />
                    <label for="text" class="input__label">Ingresa los apellidos</label>
                </div>
                <br>
            </th>
            </th>

            <th class="colu1">Modelo:
            <th class="colu1">
            <div class="down">
                    <div class="cont">
                        <p>Elige el modelo</p> 
                        <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></span>
                    </div> 
                    <button type="butt1"></button>
                    <div class="men">
                        <a>
                            <p>2010</p>
                        </a>
                        <a>
                            <p>2011</p>
                        </a>
                        <a>
                            <p>2012</p>
                        </a>
                        <a>
                            <p>2013</p>
                        </a>
                        <a>
                            <p>2014</p>
                        </a>
                        <a>
                            <p>2015</p>
                        </a>
                        <a>
                            <p>2016</p>
                        </a>
                        <a>
                            <p>2017</p>
                        </a>
                        <a>
                            <p>2018</p>
                        </a>
                        <a>
                            <p>2019</p>
                        </a>
                        <a>
                            <p>2020</p>
                        </a>
                        <a>
                            <p>2021</p>
                        </a>
                        <a>
                            <p>2022</p>
                        </a>
                        <a>
                            <p>2023</p>
                        </a>
                    </div>
            </th>
            </th>
        </tr>

        <tr class="fila">
            <th class="colu1">Correo:
            <th class="colu1">
            <br>
                <div class="input">
                    <input class="input__field" id="text" name="corr" type="text" required />
                    <label for="text" class="input__label">Ingresa el correo electrónico</label>
                </div>
            <br>
            </th>
            </th>

            <th class="colu1">Número de placa:
            <th class="colu1">
            <br>
                <div class="input">
                    <input class="input__field" id="text" class="pla1" name="pla1" type="text" required />
                    <label for="text" class="input__label">Ingresa el número de placa</label>
                </div>
                <br>
            </th>
            </th>
        </tr>

        <tr class="fila">
            <th class="colu1">Teléfono:
            <th class="colu1">
            <br>
                <div class="input">
                    <input class="input__field" id="text" name="tel" type="text" required />
                    <label for="text" class="input__label">Ingresa el número de teléfono</label>
                </div>
                <br>
            </th>
            </th>

            <th class="colu1">Kilometraje:
            <th class="colu1">
            <br>
                <div class="input">
                    <input class="input__field" id="text" name="kil" type="text" required />
                    <label for="text" class="input__label">Ingresa el kilometraje</label>
                </div>
                <br>
            </th>
            </th>
        </tr>

        <tr class="fila">
            <th class="colu1">Dirección:
            <th class="colu1">
            <br>
                <div class="input">
                    <input class="input__field" id="text" name="dir" type="text" required />
                    <label for="text" class="input__label">Ingresa la dirección</label>
                </div>
            <br>    
            </th>
            </th>
            <th class="colu1">Estado en el que ingresa el vehículo:
            <th class="colu1"> 
                    <div class="down">
                    <div class="cont">
                        <p>Elige el estado del vehículo</p> 
                        <span><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></span>
                    </div> 
                    <button type="button"></button>
                    <div class="men">
                        <a>
                            <p>Pérdida total -A-</p>
                        </a>
                        <a>
                            <p>Reparable -S-</p>
                        </a>
                        <a>
                            <p>Daños menores -N-</p>
                        </a>
                    </div>
            </th>
        </tr>
        <!-- Finalizan las tablas -->
        <input type="submit" value="Enviar">
        <!--  Agregamos un boton de Enviar -->

        </form>
       
            <div>
            <style>
        /* DISEÑO DE LOS DROPDOWNS DE LA TABLA */
                .down {
                    translate: 0 5px;
                    position: relative;
                    cursor: pointer;
                    
                }
    
                .down > button {
                    width: 100%;
                    height: 70px;
                    border: 1;
                    border-color: #7f7f7f;
                    z-index: 1;
                    border-radius: 6px;
                    font-family: inherit;
                    font-size: 15px;
                    background: #fff    ;
                }
    
                .down > .cont {
                    position: fixed;
                    z-index: 1;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 70px;
                    padding: 0 15px;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 10px;
                    color: #7f7f7f;
                    float:none;
                }
    
                .down > .cont::after {
                    content: "";
                    position: absolute;
                    float:none;
                    bottom: 10px;
                    right: 12%;
                    width: 100%;
                    height: 1px;
                    transform: scaleX(0);
                    background: rgb(255 255 255 / 30%);
                    transition: 0.3s;
                }
    
                .down:hover > .cont::after {
                    transform: scaleX(1);
                }
    
                .down > .cont > span:first-child {
                    font-size: 20px;
                }
    
                .down > .cont > span:last-child {
                    margin-left: auto;
                }
    
                .down > .cont > span:last-child {
                    transition: 0.3s;
                }
    
                .down:hover > .cont > span:last-child {
                    rotate: -180deg;
                }
    
                .down > .men {
                    position: absolute;
                    z-index: 1;
                    top: -6px;
                    left: -53%;
                    display: grid;
                    width: 105.5%;
                    padding: 70px 0 6px;
                    border-radius: 6px;
                    translate: -50% 0;
                    visibility: hidden;
                    opacity: 0;
                    float:none;
                    scale: 0;
                    background: linear-gradient(#4e73df, #a890fe);
                    transition: 0.3s;
                }
    
                .down:hover > .men {
                    visibility: visible;
                    opacity: 1;
                    scale: 1;
                }
    
                .down > .men > a {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    color: #fff;
                    font-size: 14px;
                    padding: 0 24px;
                    float:none;
                }
    
                .down > .men > a:hover {
                    background: rgb(255 255 255 / 20%);
                    color: #000;
                }
    
                .down > .men > a > span {
                    font-size: 20px;
                }
            
        /* DISEÑO DE LA TABLA */
                .datos {
            border-collapse: collapse;
            position: inherit;
        }
        
        .fila, .colu, .colu1 {
            border: 1px solid #000;
            padding: 15px;
            width: 4500px;
            text-align: center;
        }

        .co {
            border: .5px;
        }


    /* DISEÑO DE LAS ENTRADAS DE TEXTO */
.input {
    position: relative;
}

.input__field {
padding: 10px;
width: 270px;
border: 1px;
border-radius: 4px;
font: inherit;
color: #000;
background-color: transparent;
outline: 2px solid #7f7f7f;
}

.input__label {
    position: absolute;
    top: 0;
    left: 25px;
    transform: translate(10px, 10px);
    transform-origin: left;
    transition: transform 0.25s;
}

.input__field:focus-visible ~ .input__label, 
.input__field:valid ~ .input__label {
    transform: translate(0, -30px) scale(1);
    color: #4e73df;
}

.input__field:is(:focus-visible, :valid) {
    outline-color: #4e73df;
}

.input__icon-wrapper {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    cursor: pointer;
}


.swal {
    display: block;
    padding: 10px 15px;
    color: #000;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 20px;
    border: none;
    background-color: #fff;
}

.swal:hover{
    background:#4e73df;
}
        
            </style>
        </div>
    </div>
            </div>
            </tbody>    
    </table>

<div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>