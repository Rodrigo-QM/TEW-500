<?php

$hostname = "localhost";
$usuario = "root";
$password = "";
$nombreBD = "labo_crud_qmr";

//Crear conexion 
$conn = mysqli_connect($hostname, $usuario, $password, $nombreBD);

//CRUD
// Insertar un registro
if (isset($_POST['Insert'])) {
    //Para insertar datos C=CREATE
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $gestion = $_POST['gestion'];

    $query = "INSERT INTO libros(titulo, precio, gestion) VALUES ('$titulo','$precio','$gestion')";
    
    $res = $conn->query($query);
    header("Refrech:0");
}else if(isset($_GET['id_libros'])){
    //echo "Estoy aqui con la variable id = ".$_GET['id_estudiante'];
    $query = "SELECT * FROM libros WHERE id = '".$_GET['id_libros']."'";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    //echo "<pre>";
    //print_r ($row);
    // echo "</pre>";
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $gestion = $_POST['gestion'];
    $id_libros = $row['id'];
    echo $titulo
    //echo $nombre;
}else if(isset($_POST['Update'])){
    //echo "Estoy listo para actualizar";
    //Para actualizar datos U = Update
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $gestion = $_POST['gestion'];
    $id_libros = $_POST['id_libros'];
    $query = "UPDATE libro SET titulo = '$titulo', precio = '$precio', gestion = '$gestion' WHERE id = $id_libros";
    $res = $conn->query($query);
    header("Refresh:0; url=index.php");
}else if(isset($_POST['Delete'])){ 
    //echo "Estoy listo para eliminar";
    $id_libros = $_POST['id_libros'];
    $query = "DELETE FROM libros WHERE id = $id_libros";
    $res = $conn->query($query);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBROS CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1 class="display-4 font-weight-bold">CRUD Libros</h1>
        <h2>Sistema de Detalles de Libros</h2>
    </div>
    <div class="container-fluid" style="margin-top:30px;">
        <div class="row">
            <div class="col-sm-4">
            <form class="form" action="index.php" method="post">
                <input type="hidden" name="id_libros" value="<?php echo (isset($id_libros))?$id_libros:'';?>">

                <div class="form-group">
                    <label for="">TITULO</label>
                    <input class="form-control" type="text" name="titulo" value="<?php echo (isset($titulo))?$titulo:'';?>">
                </div>
                <div class="form-group">
                    <label for="">PRECIO</label>
                    <input class="form-control" type="text" name="precio" value="<?php echo (isset($precio))?$precio:'';?>">
                </div>
                <div class="form-group">
                    <label for="">GESTION</label>
                    <input class="form-control" type="date" name="gestion" value="<?php echo (isset($gestion))?$gestion:'';?>">
                </div>
                <div class="form-gruop">
                    <input class="btn btn-primary btn-sm" type="submit" value="Insertar" name="Insert">
                    <input class="btn btn-warning btn-sm" type="submit" value="Actualizar" name="Update">
                    <input class="btn btn-danger btn-sm" type="submit" value="Eliminar" name="Delete">
                </div>
                
            </form>
            </div>
            <div class="col-sm-8">
            <?php
                //R = Read
                //Consulta SQL para realizar el listado de la tabla
                $query = "SELECT * FROM libros";
                $res = $conn->query($query);
            ?>
            <table class="table table-bordered table-hover">
                <tr>
                <th>Id</th>
            <th>TITULO</th>
            <th>PRECIO</th>
            <th>GESTION</th>
            <th>Actualizar/Eliminar</th>
                </tr>
            <?php
                while ($row = $res->fetch_assoc()){
                    echo "<tr>";

                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['titulo']."</td>";
                    echo "<td>".$row['precio']."</td>";
                    echo "<td>".$row['gestion']."</td>";
                    echo "<td><a class='btn-outline-primary' href='index.php?id_libros=".$row['id']."'>Seleccionar</a></td>";

                    echo "</tr>";
                }
            ?>
            </table>
            </div>
        </div>
    </div>
    
    <div class="jumbotron text-right" style="margin-botton:0">
        <p>By RODRIGO <?php echo date('Y');?> </p>
    </div>
    
</body>
</html>