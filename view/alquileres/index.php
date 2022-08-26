
<?php include '../template/header.php' ?>
<?php include '../../controller/alquileres/index.php' ?>

<section class="content" >
<div class='container'  >

<div class="container ">
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      <h3>Alquileres</h3>
    </div>
    <div class="col align-self-center">
      
    </div>
    <div class="col align-self-end">
      <a href=" create.php">  <button type="button" class="btn text-white"   style='background-color:#008d62;'>
       Agregar   <img src="../../img/pelicula.png" >
      </button>
    </div>
  </div>
</div>
</div>

<br>
<div class="d-flex justify-content-center "  ></div>
<div class="col-sm-12 bg-light p-3 border"   >

  <div class="p-2 w-100"  style='background-color:#338b85;'>

  
<table class="table text-white" >
  <thead>
    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Socio</th>
                        <th scope="col">Pelicula</th>
                        <th scope="col">Fecha_Desde</th>
                        <th scope="col">Fecha_Hasta</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Entrega</th>
                        <th scope="col" >Opciones</th>
      
    </tr>
  </thead>
  <tbody>
    
  <?php
                  //Proceso de creacion de tabla y relleno de datos de la BDD
                    if ($result->num_rows > 0) {
                      
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<th scope="row">'.$row["alq_id"].'</th>';
                        echo '<th scope="row">'.$row["soc_nombre"].'</th>';
                        echo '<th scope="row">'.$row["pel_nombre"].'</th>';
                        echo '<th scope="row">'.$row["alq_fecha_desde"].'</th>';
                        echo '<th scope="row">'.$row["alq_fecha_hasta"].'</th>';
                        echo '<th scope="row">'.$row["alq_valor"].'</th>';
                        echo '<th scope="row">'.$row["alq_fecha_entrega"].'</th>';
                        echo '<th scope="row">
                            <a class="text-success" href="update.php?alq_id='.$row["alq_id"].'"><button class="border border-0 rounded-top">
                            <img src="../../img/lapiz.png" ></a>
                            <a href="view.php?alq_id='.$row["alq_id"].'"><button class="border border-0 rounded-top">
                            <img src="../../img/buscando.png"></a>
                            <a class="text-danger" href="delete.php?alq_id='.$row["alq_id"].'"><button class="border border-0 rounded-top">
                            <img src="../../img/lecho.png" ></a>
                        </th>';
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
    <tr>
      <th scope="row"> </th>
      <td>  </td>
      <td>  </td>

      <td>

      <div>
      
    </div>


      </td>
    </tr>
  </tbody>
</table>
</div>

  </div>
  
</div>
</div>
</div>
</div>
</section>
<?php include '../template/footer.php' ?>
