<?php
    $direccion = "";
    $telefono = "";
    $barrio  = "";
    if(isset($_POST["direccion"])){
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $barrio = $_POST["barrio"];
        $vivienda = new Vivienda("",$direccion, $telefono, $barrio);
        $vivienda -> insertar();
    }
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-3 col-md-0"></div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body text-white bg-primary">
                    <h4>Crear Vivienda</h4>
                </div>
            </div>
            <div class="card-body border">
                <form action="index.php?pid=<?php echo base64_encode("Presentacion/Vivienda/insertarVivienda.php");?>" method="post">
                    <?php if(isset($_POST["direccion"])){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Datos Ingresados
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>                                           
                    <?php } ?>
                    <div class="form-group">
                        <label for="textNombre">Direccion</label>
                        <input name="direccion" type="text" value="<?php echo $direccion ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Cantidad">Telefono</label>
                        <input name="telefono" type="number" min = "1" value="<?php echo $telefono ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="textNombre">Barrio</label>
                        <input name="barrio" type="text" value="<?php echo $barrio ?>" class="form-control" required>
                    </div>
                     <button type="submit" class="btn btn-primary">Crear Vivienda</button>
                </form>
            </div>
    </div>
</div>