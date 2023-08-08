<?php
include ("./../../layout/menu.php");
include ("./../../layout/header.php");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
       
    </div>

     
    <!-- Content Row -->

   
    
    <!-- Content Row -->
        <div class="row">
        <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Agregar Auto</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <form action="./../../app/controllers/autosController.php" method="post">
            <div class="row">
                <div class="col m-3">
                    <label for="">placa</label>
                    <input class="form-control" name="placa" type="text">
                </div>
                <div class="col m-3">
                    <label for="">KIlometraje</label>
                    <input class="form-control" name="kilometraje" type="text">
                    </div>
            </div>
            <button class="btn btn-primary" type="submit">Guardar</button>
</form>

</div>
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