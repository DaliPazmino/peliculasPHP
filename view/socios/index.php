
<?php include '../template/header.php' ?>
<<<<<<< HEAD
<?php include '../../controller/socios/index.php' ?>

=======
<?php include '../../model/conectar.php'?>
<?php include '../../controller/socios/index.php' ?>
>>>>>>> Andrés

<section class="content" >
   

<div class='container'  >

<div class="container ">
<div class="container">
  <div class="row">
    <div class="col align-self-start">
      <h3>Socios Registrados</h3>
    </div>
    <div class="col align-self-center">
      
    </div>
    <div class="col align-self-end">
      <button type="button" class="btn text-white"   style='background-color:#008d62;'>
       Agregar   <img src="../../img/agregar-usuario.png" >
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
      <th scope="col"># Numero</th>
      <th scope="col">ID</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
                  //Proceso de creacion de tabla y relleno de datos de la BDD
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<th scope="row">'.$row["soc_id"].'</th>';
                        echo '<th scope="row">'.$row["soc_cedula"].'</th>';
                        echo '<th scope="row">'.$row["soc_nombre"].'</th>';
                        echo '<th scope="row">'.$row["soc_direccion"].'</th>';
                        echo '<th scope="row">'.$row["soc_telefono"].'</th>';
                        echo '<th scope="row">'.$row["soc_correo"].'</th>';
                        echo '<th scope="row">
                            <a class="text-success" href="update.php"><i class="fa-solid fa-pen"></i></a>
                            <a href="view.php"><i class="fa-solid fa-search"></i></a>
                            <a class="text-danger" href="delete.php"><i class="fa-solid fa-trash-can"></i></a>
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
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>

      <td>

      <div>
      <div class="row row-cols-auto">
        <div class="col">
        <button class="border border-0 rounded-top">
        <img src="../../img/lapiz.png" >
        </button>
        </div>
        <div class="col">
        <button class="border border-0 rounded-top">
        <img src="../../img/buscando.png">
        </button>
        </div>
        <div class="col">
        <button class="border border-0 rounded-top">
        <img src="../../img/lecho.png" >
        </button>
        </div>
        </div>
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