<?php include '../template/header.php' ?>
<?php include '../../controller/actores_peliculas/view.php'?>

<section class="content">
    <div>
        <H3>Datos de actor-pelicula</H3>
        <br><br>
        <div class="container">
        <?php
                $row = $result->fetch_assoc();
        ?>
        <table class="table table-success table-striped"">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Datos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                        <th scope="row" id="apl_id">ID</th>
                        <td><?php echo $row['apl_id'];?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="act_id">ID actor</th>
                        <td><?php echo $row['act_nombre'];?></td>

                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="pel_id">ID pelicula</th>
                        <td><?php echo $row['pel_nombre'];?></td>

                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row" id="apl_papel">Papel</th>
                        <td><?php echo $row['apl_papel'];?></td>

                        <td></td>
                    </tr>

                </tbody>
        </table>
        </div>
        <form action="../../controller/actores_peliculas/view.php" method="post">
            <input type="hidden" name="apl_id" value="<?php echo $row['apl_id'];?>">
        </form>
    </div>

</section>
<?php include '../template/footer.php' ?>
