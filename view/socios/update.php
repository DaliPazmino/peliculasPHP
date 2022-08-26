<?php include '../template/header.php' ?>
<?php include '../../controller/socios/update.php'?>
<section class="content">
    <?php $row = $result -> fetch_assoc()?>
    <div class="container p-3">
    <h2>Actualizar Socio</h2>
        <form class="row g-3 needs-validation" action="../../controller/socios/update.php" method="post" novalidate>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="soc_nombre" name="soc_nombre" placeholder="Ingrese su nombre" value = "<?php echo $row['soc_nombre'];?>" required>
                <div class="valid-feedback">
                    Válido!
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Cédula</label>

<<<<<<< HEAD:views/socios/update.php
                <input type="number" class="form-control" id="soc_cedula" name="soc_cedula" placeholder="Ingrese un número de cédula." value = "<?php echo $row['soc_cedula'];?>" required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un número de cédula.
=======
                <div class="input-group mb-3">
                    <span class="input-group-text text-white" id="soc_cedula" style="background-color:#338b85;">Cédula</span>
                    <input type="text" class="form-control" placeholder="ingrese cedula" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
            </div>
            <div class="col-md-8 success">
                <label for="inputDireccion" class="form-label text-success"></label>
                
                <div class="input-group mb-3">
                <span class="input-group-text text-white" id="soc_direccion" style="background-color:#338b85;">Dirección</span>
                <input type="text" class="form-control" placeholder="ingrese direccion" aria-label="Username" aria-describedby="basic-addon1">
>>>>>>> main:view/socios/update.php
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control " id="soc_direccion" name="soc_direccion" placeholder="Ingrese su dirección" value = "<?php echo $row['soc_direccion'];?>" required>
                <div  class="invalid-feedback">
                    Ingrese una dirección.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Teléfono</label>

<<<<<<< HEAD:views/socios/update.php
                <input type="number" class="form-control" id="soc_telefono" name="soc_telefono" placeholder="Ingrese un número telefónico." value = "<?php echo $row['soc_telefono'];?>" required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un número telefónico.
                </div>
=======
                <div class="input-group mb-3">
                    <span class="input-group-text text-white" id="soc_telefono" style="background-color:#338b85;">Teléfono</span>
                    <input type="text" class="form-control" placeholder="ingrese telefono" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
>>>>>>> main:view/socios/update.php
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Correo</label>
                <input type="email" class="form-control " id="soc_correo" name="soc_correo" placeholder="Ingrese un correo electrónico" value = "<?php echo $row['soc_correo'];?>" required>
                <div  class="invalid-feedback">
                    Ingrese un correo electrónico.
                </div>
            </div>
            
            <div class="col-12">
            <input type="hidden" name="soc_id" value="<?php echo $row['soc_id'];?>">
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