<?php
include_once "conexion.php";
include_once "Materia.php";
include_once "encabezado.php";
$materia = Materia::obtenerUna($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Materia</h1>
        <form action="actualizar_materia.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $materia->nombre?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>