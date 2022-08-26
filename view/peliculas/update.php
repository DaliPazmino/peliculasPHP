<?php include '../template/header.php' ?>
<?php include '../../controller/peliculas/update.php'?>
<section class="content">
<<<<<<< HEAD:views/peliculas/update.php
    <?php $row1 = $result1->fetch_assoc() ?>
    <div class="container p-3">
    <h2>Actualizar Película</h2>
        <form class="row g-3 needs-validation" action="../../controller/peliculas/update.php" method="post" novalidate>
            <div class="col-md-12">
            <select class="form-select form-control" id="gen_id" name="gen_id" required>
                    <option selected disabled value="">Elija un género</option>
                    <?php
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                            if($row1["gen_id"]==$row["gen_id"]){
                                echo '<option selected disable name="gen_id" value="'.$row["gen_id"].'">'.$row["gen_nombre"].'</option>';
                            }else{
                                echo '<option name="gen_id" value="'.$row["gen_id"].'">'.$row["gen_nombre"].'</option>';
                            }
                            
                        }
                    }
                    ?>
=======
 
    <div class="container p-5 "  >
        <h2> Pelicula </h2>
  
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-8 success">
                <label for="inputNombre" class="form-label text-success"></label>
                <div class="input-group mb-3 ">
                <span class="input-group-text text-white  "  id="pel_nombre"  style="background-color:#338b85;">Nombre</span>
                <input type="text" class="form-control" placeholder="ingresar nombre" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            
            <div class="col-md-8 success">
                <label for="inputEmail" class="form-label text-success"></label>

                <div class="input-group mb-3">
                    <span class="input-group-text text-white" id="pel_costo" style="background-color:#338b85;">Costo</span>
                    <input type="text" class="form-control" placeholder="ingrese cedula" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
            </div>
            <div class="col-md-8 success">
                <label for="inputDireccion" class="form-label text-success"></label>
                
                <div class="input-group mb-3">
                <span class="input-group-text text-white" id="pel_fecha_estreno" style="background-color:#338b85;">Fecha estreno</span>
                <input type="text" class="form-control" placeholder="ingrese direccion" aria-label="Username" aria-describedby="basic-addon1">
                </div>
>>>>>>> main:view/peliculas/update.php
                    
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="pel_nombre" name="pel_nombre" placeholder="Ingrese el nombre de la película" value="<?php echo $row1["pel_nombre"]?>" required>
                <div class="valid-feedback">
                    Válido!
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Costo</label>

                <input type="number" class="form-control" id="pel_costo" name="pel_costo" placeholder="Ingrese una cantidad numérica" value='<?php echo $row1["pel_costo"]?>'required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese una cantidad numérica.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Fecha de estreno</label>
                <input type="date" class="form-control " id="pel_fecha_estreno" name="pel_fecha_estreno" placeholder="Ingrese una fecha" value="<?php echo $row1["pel_fecha_estreno"]?>" required>
                <div  class="invalid-feedback">
                    Ingrese una fecha.
                </div>
            </div>
            
            
            <div class="col-12">
            <input type="hidden" name="pel_id" value="<?php echo $row1['pel_id'];?>">
            <br><button class="btn btn-primary" type="submit"><i class="fa-solid fa-pen p-1"></i>Actualizar</button>
            </div>
        </form>
    </div>
</section>
<script>
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<?php include '../template/footer.php' ?>