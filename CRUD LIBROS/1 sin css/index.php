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
    $titulo = $row['titulo'];
    $precio = $row['precio'];
    $gestion = $row['gestion'];
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
    <title>LIBRO CRUD</title>
</head>
<body>
    <div>
        <h1>EXAMEN LIBRO CRUD</h1>
        <h2>Sistema de Detalles de Libros</h2>
    </div>
    <form action="index.php" method="post">
        <input type="hidden" name="id_libros" value="<?php echo (isset($id_libros))?$id_libros:'';?>">

        Titulo: <input type="text" name="titulo" value="<?php echo (isset($titulo))?$titulo:'';?>"><br>
        Precio: <input type="text" name="precio" value="<?php echo (isset($precio))?$precio:'';?>"><br>
        Gestion: <input type="date" name="gestion" value="<?php echo (isset($gestion))?$gestion:'';?>"><br>
        
        <input type="submit" value="Insertar" name="Insert">
        <input type="submit" value="Actualizar" name="Update">
        <input type="submit" value="Eliminar" name="Delete">
    </form>
    <br>
    <?php
        //R = Read
        //Consulta SQL para realizar el listado de la tabla
        $query = "SELECT * FROM libros";
        $res = $conn->query($query);
    ?>
    <table border="1">
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
                echo "<td><a href='index.php?id_libros=".$row['id']."'>Seleccionar</a></td>";

                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>