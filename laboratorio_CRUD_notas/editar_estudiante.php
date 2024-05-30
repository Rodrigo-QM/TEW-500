<?php
include_once "conexion.php";
include_once "Estudiante.php";
include_once "encabezado.php";
$estudiante = Estudiante::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Estudiante</h1>
        <form action="actualizar_estudiante.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET["id"]?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $estudiante->nombre?>">
            </div>
            <div class="form-group">
            <label for="grupo">Grupo</label>
            <input class="form-control" type="text" name="grupo" id="grupo" placeholder="Grupo" value="<?php echo $estudiante->grupo?>">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>

