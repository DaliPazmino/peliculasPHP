<?php include '../template/header.php' ?>

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
                        <th scope="row" id="apl_id">ID</th>
                        <td><?php echo $row['apl_id'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_id">Nombre actor</th>
                        <td><?php echo $row['act_nombre'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="pel_id">Nombre pelicula</th>
                        <td><?php echo $row['pel_nombre'];?></td>
                    </tr>
                    <tr>
                        <th scope="row" id="apl_papel">Papel</th>
                        <td><?php echo $row['apl_papel'];?></td>
                    </tr>
                    
            </tbody>
        </table>

        <div class="container">
            <form action="../../controller/actores_peliculas/delete.php" method="post">
                <input type="hidden" name="apl_id" value = "<?php echo $row['apl_id'];?>">
                <input type = "submit" value = "Eliminar" class = "btn btn-danger">
            </form>
        </div>

     </div>
        
      

    </div>

</section>
<?php include '../template/footer.php' ?>