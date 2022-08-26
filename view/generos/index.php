<?php include '../template/header.php' ?>
<?php include '../../controller/generos/index.php' ?>
<section class="content">


    <div class='container'>

        <div class="container ">
            <div class="container">
                <div class="row">
                    <div class="col align-self-start">
                        <h3>Generos</h3>
                    </div>
                    <div class="col align-self-center">

                    </div>
                    <div class="col align-self-end">
                        <button type="button" class="btn text-white" style='background-color:#008d62;'>
                            Agregar <img src="../../img/pelicula.png">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="d-flex justify-content-center "></div>
        <div class="col-sm-12 bg-light p-3 border">

            <div class="p-2 w-100" style='background-color:#338b85;'>


                <table class="table text-white">
                    <thead>
                        <tr>
                            <th scope="col"># Numero</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                  
                  $cont = 1;             
                    if ($result->num_rows > 0) {
                      
                      while($row = $result->fetch_assoc()) {
                         
                        echo '<tr>';
                        echo '<th scope="row">'.$cont.'</th>';
                        echo '<th scope="row">'.$row["gen_id"].'</th>';
                        echo '<th scope="row">'.$row["gen_nombre"].'</th>';
                        echo '<th scope="row">
                            <a class="text-success" href="update.php"><button class="border border-0 rounded-top"><img src="../../img/lapiz.png" ></button></a>
                            <a href="view.php"><button class="border border-0 rounded-top"><img src="../../img/buscando.png"></button></a>
                            <a class="text-danger" href="delete.php"><button class="border border-0 rounded-top"><img src="../../img/lecho.png" ></button></a>
                        </th>';
                        $cont ++;
                      }
                        
                      }
                      else {
                      echo "0 results";
                    }
                  ?>
                        <tr>

                            <td> </td>
                            <td> </td>

                            <td>

                             <div>

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