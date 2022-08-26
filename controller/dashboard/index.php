<?php
    include '../../model/conectar.php';
    //Numérico de películas
    $sql = "SELECT count(pel_id) as total_peliculas
            FROM peliculas "; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_peliculas = $row['total_peliculas'];


    $sql = "SELECT count(soc_id) as total_socios
            FROM socios "; 
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_socios = $row['total_socios']

    //NUMERICO DE SOCIOS

    
    include '../../model/desconectar.php';
?>