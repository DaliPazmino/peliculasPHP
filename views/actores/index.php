<?php include '../template/header.php' ?>

<?php include '../../controller/actores/index.php' ?>
<section class="content">
       
            <div class="row">
                <div class="col align-self-start">
                <h2>Actores Registrados</h2>
                </div>
                <div class="col align-self-center">

                </div>
                <div class="col align-self-end">
                    <a href="create.php">  <button type="button" class="btn btn-success">Agregar</button></a>
                </div>
            </div>
        
    

    <br>
    <div class="d-flex justify-content-center"></div>
    <div class="col-sm-9 bg-info p-3 border">

        <div class="p-2 w-100">


            <table class="table " >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
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
                        echo '<th scope="row">'.$row["act_id"].'</th>';
                        echo '<th scope="row">'.$row["act_nombre"].'</th>';
                        echo '<th scope="row">
                            <a class="text-success" href="update.php?act_id='.$row["act_id"].'"><button class="border border-0 rounded-top">
                            <img src="../../img/lapiz.png" ></a>
                            <a href="view.php?act_id='.$row["act_id"].'"><button class="border border-0 rounded-top">
                            <img src="../../img/buscando.png"></a>
                            <a class="text-danger" href="delete.php?act_id='.$row["act_id"].'"><button class="border border-0 rounded-top">
                            <img src="../../img/lecho.png" ></a>
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
</section>
<script src="https://kit.fontawesome.com/94ae563b14.js" crossorigin="anonymous"></script>
<?php include '../template/footer.php' ?>