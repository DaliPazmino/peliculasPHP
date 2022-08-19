<?php include '../template/header.php' ?>
<?php include '../../controller/actores_peliculas/delete.php'?>

<section class="content">
    <div>
       
        <br><br>
        <div class="container p-5 ">
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row" id="act_id">ID</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row" id="act_nombre">Nombre</th>
                    <td></td>
                <tr>
                    
            </tbody>
        </table>

        <div class="container">
                    <div class="row">
                         <div class="col-md-6"></div>
                         <div class="col-md-3 offset-md-3">
                         <button type="button" class="btn btn-danger"> <img src="../../img/lecho.png"></button>
                        </div>
             </div>

        </div>
        
      

    </div>

</section>
<?php include '../template/footer.php' ?>