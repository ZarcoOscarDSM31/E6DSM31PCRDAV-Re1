<?php
include "layout/menu.php";
include "layout/header.php";
?>
    <div>
        
        <h2 class="h2">Iniciar sesión</h2>
        <div class="fondo">
            <div class="button">
        <form action="login.php" method="post">
            <br>
            <div class="input">
                <input class="input__field" id="correo" type="mail" required />
                <label for="mail" class="input__label">Correo</label>
            </div>
            <br>
            
            <br>
            <div class="input">
                <input class="input__field" id="password" type="password" required />
                <label for="password" class="input__label">Contraseña</label>
            </div>
            <br>
            

        <div>
            <button class="swal">Iniciar sesión</button>
        </div>
        </form>';
    </div>
    </div>
    </div>
    <div>
        <style>
.input {
    position:relative;
    color: #fff;
}

.input__field {
padding: 10px;
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
    left: 0;
    transform: translate(10px, 10px);
    transform-origin: left;
    transition: transform 0.25s;
}

.input__field:focus-visible ~ .input__label, 
.input__field:valid ~ .input__label {
    transform: translate(0, -30px) scale(1);
    color: #fff;
}

.input__field:is(:focus-visible, :valid) {
    outline-color: #fff;
}

.input__icon-wrapper {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    cursor: pointer;
}


.swal {
    display: flex;
    padding: 10px 15px;
    color: #000;
    align-items: center;
    align-content: center;
    justify-content: center;
    text-decoration: none;
    font-size: 20px;
    border: none;
    transform: translate(45%, -7%);
    border-radius: 10px;
    background-color: #fff;
}

.swal:hover{
    background:#4e73df;
    color: #fff;
}

.fondo {
    background: linear-gradient(#4e73df, #a890fe);
    width: 300px;
    border-radius: 20px;
    position: absolute;
    top: 300px;
    left: 55%;
    transform: translate(-50%, -50%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.h2 {
    margin-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transform: translate(-4%, -7%);
}
        </style>
    </div>
    
<script src="../E6DSM31PCRDAV-Re1 - copia/styles/js/inicio.js"></script>