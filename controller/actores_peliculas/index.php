<?php
include '../..model/conectar.php';
$sql ="SELECT ap.apl id,a.act nombre,p.pel_ nombre, ap.apl_ papel
        FROM actor_peliculas ap,actores a, peliculas p
        WHERE ap.pel id = p.pel id
        AND ap.act id = a.act id";
$result = $conn->query($sql);
include '../..model/desconectar.php';


