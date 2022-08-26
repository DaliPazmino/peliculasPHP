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

            <form action="../../controller/actores/delete.php" method="post">
            <input type="hidden" name="act_id" value="<?php echo $row['act_id'];?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form>


        </div>



</section>
<?php include '../template/footer.php' ?>