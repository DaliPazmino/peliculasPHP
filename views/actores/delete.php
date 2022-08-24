<?php include '../template/header.php' ?>
<?php include '../../controller/actores/delete.php'?>

<section class="content">
    <div>

        <br><br>
        <div class="container p-5 ">
            <?php
                $row = $result->fetch_assoc();
            ?>
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" >ID</th>
                        <td><?php echo $row['act_id'];?></td>

                    </tr>
                    <tr>
                        <th scope="row" >Nombre</th>
                        <td><?php echo $row['act_nombre'];?></td>

                    <tr>

                </tbody>
            </table>

            <div class="container">

                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-3 offset-md-3">
                        <form action="../../controller/actores/delete.php" method="post">
                            <input type="hidden" name="act_id" value="<?php echo $row['act_id'];?>">
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                    </div>

                </div>

            </div>



        </div>



</section>
<?php include '../template/footer.php' ?>