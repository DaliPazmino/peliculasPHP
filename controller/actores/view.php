<?php
    include '../../model/conectar.php';
    $sql = "SELECT * FROM actores";
    $result = $conn->query($sql);
    //Proceso de creacion de tabla y relleno de datos de la BDD
    include '../../model/desconectar.php';
    
    if(isset($_GET['act_id'])){

        include '../../model/conectar.php';

    $id = $_GET['act_id'];
    $sql = "SELECT act_id, act_nombre FROM actores
            WHERE
            act_id =".$id;
    $result = $conn->query($sql);
    include '../../model/desconectar.php';

    }
?>