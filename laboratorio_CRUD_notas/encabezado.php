<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Notas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            padding-top:70px;
            padding-bottom:70px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
        <a href="#" class="navbar-brand">Control de Notas</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="mostrar_estudiantes.php" class="nav-link">Estudiantes</a>
                </li>
                <li class="nav-item active">
                    <a href="mostrar_materias.php" class="nav-link">Materias</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Tecnologia Web II - <?php echo date("Y");?></a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="container">

