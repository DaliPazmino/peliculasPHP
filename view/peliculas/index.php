
<?php include '../template/header.php' ?>

<?php include '../../controller/peliculas/index.php' ?>
<section class="content" >
   

<div class='container'  >

<div class="container ">
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      <h3>Pelicula </h3>
    </div>
    <div class="col align-self-center">
      
    </div>
    <div class="col align-self-end">
      <button type="button" class="btn text-white"   style='background-color:#008d62;'>
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
                        <th scope="col">Genero</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Costo</th>
                        <th scope="col">Estreno</th>
                        <th scope="col" >Opciones</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  //Proceso de creacion de tabla y relleno de datos de la BDD
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<th scope="row">'.$row["pel_id"].'</th>';
                        echo '<th scope="row">'.$row["gen_nombre"].'</th>';
                        echo '<th scope="row">'.$row["pel_nombre"].'</th>';
                        echo '<th scope="row">'.$row["pel_costo"].'</th>';
                        echo '<th scope="row">'.$row["pel_fecha_estreno"].'</th>';
                        echo '<th scope="row">
                            <a class="text-success" href="update.php?pel_id='.$row["pel_id"].'"><button class="border border-0 rounded-top"><img src="../../img/lapiz.png" ></button></a>
                            <a href="view.php?pel_id='.$row["pel_id"].' "><button class="border border-0 rounded-top"><img src="../../img/buscando.png"></button></a></a>
                            <a class="text-danger" href="delete.php?pel_id='.$row["pel_id"].'"><button class="border border-0 rounded-top"><img src="../../img/lecho.png" ></a>
                            </th>';
                      }
                    } else {
                      echo "0 results";
                    }
                  ?>
                    <tr>
                        
                        <td> </td>
                        <td> </td>

                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

            </div>
        </div>
    </div>
<script src="https://kit.fontawesome.com/94ae563b14.js" crossorigin="anonymous"></script>
<?php include '../template/footer.php' ?>
