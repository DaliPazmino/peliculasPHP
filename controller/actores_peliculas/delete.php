<?php

if(isset($_GET['apl_id']))
{
    include '../..model/conectar.php';
    $id=$_GET['apl_id'];
    $sql ="SELECT ap.apl id,a.act nombre,p.pel_ nombre, ap.apl_ papel
            FROM actor_peliculas ap,actores a, peliculas p
            WHERE ap.pel id = p.pel id
            AND ap.act id = a.act id
            AND ap.apl_id=".$id;
    $result = $conn->query($sql);
    
    include '../..model/desconectar.php';

}

if (isset($_POST['apl_id']))
{
include '../..model/conectar.php';
 $id=$_POST['apl_id'];
 $sql ="DELETE FROM actor_peliculas 
    WHERE apl_id =".$id;
 $result = $conn->query($sql);
 
 include '../..model/desconectar.php';
 header('');

}

?>

