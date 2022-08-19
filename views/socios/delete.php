<?php include '../template/header.php' ?>
<?php include '../../model/conectar.php'?>
<section class="content">
    <div>
       
        <br><br>
        <div class="container">
        <?php
        $row= $result->fetch_assoc();?>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="soc_id">ID</th>
                    <td> <?php echo $row ['apl_id'];?></td>
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
                    <th scope="row" id="soc_telefono">Teléfono</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"id="soc_correo">Correo</th>
                    <td></td>
                </tr>
            </tbody>
        </table>

                   
        <button type="button" class="btn btn-danger"> <img src="../../img/lecho.png" ></button>
        </div>
        <form action="" method="post">
          <input type 
        </form>
      

    </div>

</section>
<?php include '../template/footer.php' ?>