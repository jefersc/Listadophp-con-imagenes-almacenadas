<?php

try {
    $cn= new PDO('mysql:host=127.0.0.1;dbname=estudiantes','root','');
    echo 'conexion establecida' . '<br>'.'<br>';

    $resultado = $cn -> query('select * from PERSONA');
    echo 'el numero de personas    '.$resultado -> rowCount().'<br>'.'<br>';

    while ($datos = $resultado -> fetch()){
        ?>
            <p>
                Apellido: <?php echo $datos['apellido']?>;
                Nombre: <?php echo $datos['nombre']?>;
            </p>
        <?php
    }
    $resultado->closeCursor();

} catch (Exception $e) {
    die ('Error :' .$e->GetMessage());
}

?>