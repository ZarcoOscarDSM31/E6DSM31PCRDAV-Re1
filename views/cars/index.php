<?php
include ("./../../layout/menu.php");
include ("./../../layout/header.php");

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Productos</h1>
        <a href="add.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Agregar Producto</a>
    </div>

     
    <!-- Content Row -->

   
    
    <!-- Content Row -->
        <div class="row">
        <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>placa</th>
                        <th>km</th>
                        <th>operaciones</th>
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>Placa</th>
                        <th>km</th>
                        <th>operaciones</th>
                   
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    //conecionpro
                    include('./../../databases/conexionpro.php');
                    $sql = $conn->query("select * from autos ");
                        while($resultado = $sql->fetch_assoc()){

                        
                    ?>
                    <tr>
                        <td><?php echo $resultado['id']?></td>
                        <td><?php echo $resultado['placa']?></td>
                        <td><?php echo $resultado['kilometraje']?></td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-success">ver</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-warning">Editar</button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger">eliminar</button>
                                </div>
                            </div>
                        </td>
                        
                    </tr>
                 <?php
                        }
                 ?>
                </tbody>
            </table>
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