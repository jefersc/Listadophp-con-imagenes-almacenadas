<!DOCTYPE html>
<html lang="es">
<head>
    <title style="align:center"> lista de empleados </title>
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body style="text-align:center;">
    <h2 aling="center">Listados de Empleados</h2>
    <table border="1" width="500" align="center">
    <tr bgcolor="skyblue">
        <th colspan="6"> Mantenimiento de Empleados</th>
        <th>
            <a href="nuevo.php"> Agregar </a>
        </th>

    </tr>
    <tr bgcolor="pink">
        <th>Codigo</th>
        <th>Nombres</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Sueldo</th>
        <th>Foto</th>
    
    <?php

        try {
            $cn= new PDO('mysql:host=127.0.0.1;dbname=estudiantes','root','');
            echo 'conexion establecida' . '<br>'.'<br>';
            $resultado =$cn -> query('select * from persona');
            echo 'el numero de personas    '.$resultado->rowCount().'<br>'.'<br>';
        
            while ($datos=$resultado->fetch())
            {
            ?>
            <tr>
                <td><?php echo $datos['ID_PERSONA'];?></td>
                <td><?php echo $datos['NOMBRE'];?></td>
                <td><?php echo $datos['APELLIDO'];?></td>
                <td><?php echo $datos['EDAD'];?></td>
                <td><?php echo $datos['sexo'];?></td> 
                <td><?php echo $datos['sueldo'];?></td> 
                <td><img src="fotos/<?php echo $datos['foto']; ?>" width="50" height="50"></td> 
            </tr>

            <?php
            }
            $resultado->closeCursor();
        
             } catch (Exception $e) {
             die ('Error :' .$e->GetMessage());
             }
        
             ?>
    </tr>
    </table>
    <br><br>