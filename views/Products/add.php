<?php
include ("./../../layout/menu.php");
include ("./../../layout/header.php");
/* include ("./../../test.php"); */
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
        <div class="row">
        <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">INGRESA LOS DATOS DEL PRODUCTO</h6>
    </div>
    <div class="card-body">
        <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <label for="">Ingresa Nombre:</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="col">
                    <label for="">Ingresa Costo:</label>
                    <input class="form-control" type="text" name="" id="">
                </div>  
                <div class="col">
                    <label for="">Ingresa Cantidas:</label>
                    <input class="form-control" type="text" name="" id="">
                </div>   
            </div>
            <div class="row">
                <div class="col py-3">
                    <select class="form-control" name="" id="">
                        <option value="">SELECCIONA Categoria</option>
                        <option value="">c 1</option>
                        <option value="">c 2</option>
                        <option value=""><!--  --> 3</option>
                    </select>
                </div> 
                <div class="col py-3">
                    <select class="form-control" name="" id="">
                        <option value="">SELECCIONA ALMACEN</option>
                        <option value="">TIENDA 1</option>
                        <option value="">TIENDA 2</option>
                        <option value="">TIENDA 3</option>
                    </select>
                </div>

            </div>
            <button class="btn btn-success" type="submit">Guardar</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
        </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php
include ("./../../layout/footer.php");
?>