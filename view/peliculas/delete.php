<?php include '../template/header.php' ?>
<?php include '../../model/conectar.php'?>
<section class="content">
    <div>
       
        <br><br>
        <div class="container">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="pel_id">ID</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="gen_id">ID Género</th>
                    <td></td>
                <tr>
                <tr>
                    <th scope="row" id="pel_nombre">Nombre</th>
                    <td></td>
                <tr>
                    <th scope="row" id="pel_costo">Costo</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="pel_fecha_estreno">Fecha de estreno</th>
                    <td></td>
                </tr>
               
            </tbody>
        </table>
        <button type="button" class="btn btn-danger"> <img src="../../img/lecho.png" ></button>
        </div>
        
      

    </div>

</section>
<?php include '../template/footer.php' ?>