<?php include '../template/header.php' ?>
<<<<<<< HEAD:views/socios/view.php
<?php include '../../controller/socios/view.php'?>
<section class="content">
    <div>
        <H3>Datos de socio</H3>
        <br>
        <div class="container">
        <?php
                $row = $result->fetch_assoc();
            ?>
=======

<section class="content">
    <div>
        <H3>Datos de socio</H3>
        <br><br>
        <div class="container">
>>>>>>> main:view/socios/view.php
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Datos</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="soc_id">ID</th>
<<<<<<< HEAD:views/socios/view.php
                    <td><?php echo $row['soc_id'];?></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_nombre">Nombre</th>
                    <td><?php echo $row['soc_nombre'];?></td>
                <tr>
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
                </tr>
                <tr>
                    <th scope="row"id="soc_correo">Correo</th>
                    <td><?php echo $row['soc_correo'];?></td>
=======
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_nombre">Nombre</th>
                    <td></td>
                <tr>
                    <th scope="row" id="soc_cedula">Cédula</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_direccion">Dirección</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="soc_telefono">Télefono</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"id="soc_correo">Correo</th>
                    <td></td>
>>>>>>> main:view/socios/view.php
                </tr>
            </tbody>
        </table>
        </div>
<<<<<<< HEAD:views/socios/view.php
        <form action="../../controller/socios/view.php" method="post">
            <input type="hidden" name="soc_id" value="<?php echo $row['soc_id'];?>">
        </form>
=======

>>>>>>> main:view/socios/view.php
    </div>

</section>
<?php include '../template/footer.php' ?>