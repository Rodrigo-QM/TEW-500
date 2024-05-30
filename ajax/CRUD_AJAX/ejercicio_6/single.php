<?php

include('database.php');

if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($connection, $_POST['id']);

  $query = "SELECT * FROM tbl_estudiantes WHERE id = {$id}";
  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('Consulta fallida'. mysqli_error($connection));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'nombre' => $row['nombre'],
      'apellido' => $row['apellido'],
      'email' => $row['email'],
      'fecha_registro' => $row['fecha_registro'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}

?>
