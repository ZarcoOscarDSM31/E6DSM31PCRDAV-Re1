<?php
include "layout/menu.php";
include "layout/header.php";
?>
    <div>
        <link rel="stylesheet" href="../E6DSM31PCRDAV-Re1 - copia/styles/css/inicio.css">
        <h2>Iniciar sesión</h2>
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
    <div>
        <style>
            
        </style>
    </div>
    <div>
<!-- End of Main Content -->
<?php
include "layout/footer.php";
?>
    </div>
</div>
<script src="../E6DSM31PCRDAV-Re1 - copia/styles/js/inicio.js"></script>