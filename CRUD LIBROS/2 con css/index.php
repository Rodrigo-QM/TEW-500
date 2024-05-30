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
    echo "<pre>";
    print_r ($row);
    echo "</pre>";
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $gestion = $_POST['gestion'];
    $id_libros = $row['id'];
    echo $titulo;
}else if(isset($_POST['Update'])){
    echo "Estoy listo para actualizar";
    //Para actualizar datos U = Update
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $gestion = $_POST['gestion'];
    $id_libros = $_POST['id_libros'];
    $query = "UPDATE libros SET titulo = '$titulo', precio = '$precio', gestion = '$gestion' WHERE id = $id_libros";
    $res = $conn->query($query);
    header("Refresh:0; url=index.php");
}else if(isset($_POST['Delete'])){ 
    echo "Estoy listo para eliminar";
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
    <title>CRUD LIBROS</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div style="width:100%;text-align:center">
        <h1>LIBROS</h1>
        <h2>Sistema de Detalles de Libros</h2>
    </div>
    <form class="form" action="index.php" method="post">
        <input type="hidden" name="id_libros" value="<?php echo (isset($id_libros))?$id_libros:'';?>">

        <div class="w3-cell-row w3-center w3-padding">
        Titulo: <input type="text" name="titulo" value="<?php echo (isset($titulo))?$titulo:'';?>"><br>
        Precio: <input type="text" name="precio" value="<?php echo (isset($precio))?$precio:'';?>"><br>
        Gestion: <input type="date" name="gestion" value="<?php echo (isset($gestion))?$gestion:'';?>"><br>
        </div>
        
        <div class="w3-cell-row w3-center w3-padding"> 
            <input class="w3-btn w3-blue w3-border w3-margin" type="submit" value="Insertar" name="Insert">
            <input class="w3-btn w3-orange w3-border w3-margin" type="submit" value="Actualizar" name="Update">
            <input class="w3-btn w3-red w3-border w3-margin" type="submit" value="Eliminar" name="Delete">
        </div>
    </form>
    <br>
    <?php
        //R = Read
        //Consulta SQL para realizar el listado de la tabla
        $query = "SELECT * FROM libros";
        $res = $conn->query($query);
    ?>
    <table class = "w3-table-all w3-small">
        <tr>
            <th>Id</th>
            <th>TITULO</th>
            <th>PRECIO</th>
            <th>GESTION</th>
            <th>Actualizar/Eliminar</th>
        </tr>
        <?php
            while ($row = $res->fetch_assoc()){
                echo "<tr class='w3-hover-blue' style='cursor:pointer;'>";

                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['titulo']."</td>";
                echo "<td>".$row['precio']."</td>";
                echo "<td>".$row['gestion']."</td>";
                echo "<td><a href='index.php?id_libros=".$row['id']."'>Seleccionar</a></td>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>