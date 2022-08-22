<?php

if(isset($_GET['gen_id']))
{
   
    $id=$_GET['gen_id'];
    $sql ="SELECT ap.apl id,a.act nombre,p.pel_ nombre, ap.apl_ papel
            FROM actor_peliculas ap,actores a, peliculas p
            WHERE ap.pel id = p.pel id
            AND ap.act id = a.act id
            AND ap.apl_id=".$id;
    $result = $conn->query($sql);
    

}
?>