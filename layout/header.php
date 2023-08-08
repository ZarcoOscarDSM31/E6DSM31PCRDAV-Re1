<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
        

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
                <div>
                    <div class="dropdown1">
                        <div class="content1">
                            <p>Perfil</p> 
                    </div> 
                    
                    <button type="button"></button>
                        <div class="menu1">
                        <div class="dropdown-divider"></div>
                            <a  href="perfil.php">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <p>Perfil</p>
                            </a>
                            <a>
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <p>Ajustes</p>
                            </a>
                            <a>
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                <p>Actividad</p>
                            </a>
                    <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            <p>Cerrar Sesión</p>
                            </a>
                        </div>
            <div>
            <style>
                
                .dropdown1 {
                    translate: 1 5px;
                    position: relative;
                    cursor: pointer;
                    float:none;
                    z-index: 1;
                }
    
                .dropdown1 > button {
                    width: 150px;
                    height: 50px;
                    border: 0;
                    float:none;
                    border-radius: 6px;
                    font-family: inherit;
                    font-size: 18px;
                    background: #4e73df;
                }
    
                .dropdown1 > .content1 {
                    position: absolute;
                    z-index: 2;
                    top: 0;
                    left: 45px;
                    width: 95%;
                    height: 70px;
                    padding: 0 10px;
                    display: flex;
                    align-items: center;
                    float:none;
                    justify-content: space-between;
                    gap: 10px;
                    color: #fff;
                }
    
                .dropdown1 > .content1::after {
                    
                    bottom: 10px;
                    right: 10%;
                    width: 100%;
                    height: 1px;
                    transform: scaleX(0);
                    background: rgb(255 255 255 / 30%);
                    transition: 0.3s;
                    float:none;
                }
    
                .dropdown1:hover > .content1::after {
                    transform: scaleX(1);
                }
    
                .dropdown1 > .content1 > span:first-child {
                    font-size: 20px;
                }
    
                .dropdown1 > .content1 > span:last-child {
                    margin-left: auto;
                }
    
                .dropdown1 > .content1 > span:last-child {
                    transition: 0.3s;
                }
    
                .dropdown1:hover > .content1 > span:last-child {
                    rotate: -180deg;
                }
    
                .dropdown1 > .menu1 {
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
    
                .dropdown1:hover > .menu1 {
                    visibility: visible;
                    opacity: 1;
                    scale: 1;
                }
    
                .dropdown1 > .menu1 > a {
                    display: flex;
                    align-items: center;
                    gap: 10px;
                    color: #fff;
                    font-size: 14px;
                    padding: 0 24px;
                    float:none;
                }
    
                .dropdown1 > .menu1 > a:hover {
                    background: rgb(255 255 255 / 20%);
                    color: #000;
                    float:none;
                }
    
                .dropdown1 > .menu1 > a > span {
                    font-size: 20px;
                }
            </style>
            </div>
        </li>

    </ul>

</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Quieres salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona "salir" para cerrar sesión.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Salir</a>
                </div>
            </div>
        </div>
    </div>