<?php include '../template/header.php' ?>
<?php include '../../controller/socios/delete.php'?>
<section class="content">
    <div>
        <H3>Eliminar socio</H3>
        <br>
        <div class="container">
        <?php
<<<<<<< HEAD:views/socios/delete.php
                $row = $result->fetch_assoc();
            ?>
        <table class="table">
=======
        $row= $result->fetch_assoc();?>
        <table class="table table-success table-striped">
>>>>>>> main:view/socios/delete.php
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Datos</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="soc_id">ID</th>
<<<<<<< HEAD:views/socios/delete.php
                    <td><?php echo $row['soc_id'];?></td>
=======
                    <td> <?php echo $row ['apl_id'];?></td>
>>>>>>> main:view/socios/delete.php
                </tr>
                <tr>
                    <th scope="row" id="soc_nombre">Nombre</th>
                    <td><?php echo $row['soc_nombre'];?></td>
                <tr>
<<<<<<< HEAD:views/socios/delete.php
                    <th scope="row" id="soc_cedula">Cedula</th>
                    <td><?php echo $row['soc_cedula'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_direccion">Direccion</th>
                    <td><?php echo $row['soc_direccion'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_telefono">Telefono</th>
                    <td><?php echo $row['soc_telefono'];?></td>
=======
                    <th scope="row" id="soc_cedula">Cédula</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_direccion">Dirección</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_telefono">Teléfono</th>
                    <td></td>
>>>>>>> main:view/socios/delete.php
                </tr>
                <tr>
                    <th scope="row"id="soc_correo">Correo</th>
                    <td><?php echo $row['soc_correo'];?></td>
                </tr>
            </tbody>
        </table>
<<<<<<< HEAD:views/socios/delete.php
        </div>
        <form action="../../controller/socios/delete.php" method="post">
            <input type="hidden" name="soc_id" value="<?php echo $row['soc_id'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>
=======

                   
        <button type="button" class="btn btn-danger"> <img src="../../img/lecho.png" ></button>
        </div>
        <form action="" method="post">
          <input type 
        </form>
      
>>>>>>> main:view/socios/delete.php

    </div>

</section>
<?php include '../template/footer.php' ?>