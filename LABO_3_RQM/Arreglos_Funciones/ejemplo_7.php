<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Completo</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    //Definicion de los arreglos
    $alumnos = getAlumnos();
    $promedios = getPromedios();
    ?>

    <header>
        <h2 id="centrado">Informe de Notas</h2>
        <img src="banner.jpg" width="700" height="350"/>
    </header>

    <section>
        <form action="ejemplo_7.php" method="POST">
            <table border="0" width="700" cellspacing="0" cellpadding="5">
                <tr>
                    <th width="10">N° Orden</th>
                    <th>Alumno</th>
                    <th>Promedio</th>
                </tr>
                <?php
                //Imprimir
                for ($i = 0; $i < getTotal(); $i++) {
                ?>
                    <tr>
                        <td id="centrado"><?php echo $i + 1; ?></td>
                        <td><?php echo $alumnos[$i];?></td>
                        <td id="centrado"><?php echo $promedios[$i];?></td>
                    </tr>   
                <?php } ?>
                <tr>
                    <td colspan="3"><input type="submit" value ="MOSTRAR RESUMEN" name="btnMostrar"></td>
                </tr>
            </table>
        </form>
        <?php
        //Total de aprobados y desaprobados
        list($tAprobados, $tDesaprobados) = totalAprobados_Desaprobados();
        //Condicionar la muestra de los resultados
        if (isset($_POST["btnMostrar"])) {
        ?>   
            <table border="0" width="700" cellspacing="0" cellpadding="5">
                <tr>
                    <th>Total de alumnos</th>
                    <th>Total de aporbados</th>
                    <th>Total de desaprobados</th>
                </tr>
                <tr>
                    <td id="centrado"><?php echo getTotal(); ?></td>
                    <td id="centrado"><?php $tAprobados(); ?>></td>
                    <td id="centrado"><?php $tDesaprobados(); ?>></td>
                </tr>
            </table>
            <?php
            //Obtener el mayor y menos elemento
            list($maximo, $minimo) = valor_maximo_minimo();
            //Obtener el indice del mayor y menor elemento
            list($maIndice, $miIndice) = indice_maximo_minimo();
            ?>
            <br />
            <table border="1" width="700" cellspacing="0" cellpadding="5">
                <tr>
                    <th>Alumno con mayor promedio</th>
                    <th>Alumno con menor promedio</th>
                </tr>
                <tr>
                    <td id="centrado"><?php echo getAlumnos()[$maIndice]; ?></td>
                    <td id="centrado"><?php echo getAlumnos()[$miIndice]; ?></td>
                </tr>
            </table>
        <?php } ?>
    </section>
    <footer>
        <h3 id="centrado">Todos los derechos reservados - By Erick Huallpa </h3>
    </footer>
</body>
</html>

<?php
    //Funcion de implementacion para el arreglo indexado de alumno
    function getAlumnos()
    {
        return array(
            'Luz Lazaro', 'Angela Torres',
            'Fernanda Lazaro', 'Manuel Torres',
            'Lucero Mendoza', 'Alejandra Menor',
            'Victoria Bautista', 'Francisco Malaver',
        );
    }
    //Funcion de implementacion para el arreglo de notas
    function getPromedios()
    {
        return array(17, 18, 20, 19, 14, 16, 12, 11);
    }
    //Funcion que determina el total de alumnos
    function getTotal()
    {
        return count(getAlumnos());
    }
    //Funcion que determine el total de aprobados y desaprobados
    function totalAprobados_desaprobados()
    {
        $tAprobados = 0;
        $tDesaprobados = 0;
        for ($i = 0; $i < getTotal(); $i++) {
            if (getPromedios()[$i] < 13)
                $tDesaprobados++;
            else
                $tAprobados++;
        }
        return array ($tAprobados, $tDesaprobados);
    }
    //Determinar el maximo y menor promedio
    function valor_maximo_minimo()
    {
        $maximo = max(getPromedios());
        $minimo = min(getPromedios());
        return array($maximo, $minimo);
    }
    //Determinar el indice del mayor y menor promedio
    function indice_maximo_minimo()
    {
        list($maximo, $minimo) = valor_maximo_minimo();
        $maIndice = array_search($maximo, getPromedios());
        $miIndice = array_search($minimo, getPromedios());
        return array($maIndice, $miIndice);
    }
?>