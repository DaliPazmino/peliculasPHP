<?php include '../template/header.php' ?>

<section class="content">

    <div class="container p-3">
  
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12 success">
                <label for="inputNombre" class="form-label text-success">Nombre</label>
                <input type="text" class="form-control" id="soc_nombre" name="soc_nombre" placeholder="" required>
                <div class="valid-feedback">
                    Válido!
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail" class="form-label text-success">Cédula</label>

                <input type="number" class="form-control" id="soc_nombre" name="soc_nombre" placeholder="" required>
                <div id="inputEmail" class="invalid-feedback">
                   
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label text-success">Dirección</label>
                <input type="text" class="form-control " id="soc_direccion" name="soc_direccion" placeholder="" required>
                <div  class="invalid-feedback">
                    
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label text-success">Teléfono</label>

                <input type="number" class="form-control" id="soc_telefono" name="soc_telefono" placeholder="" required>
                <div id="inputEmail" class="invalid-feedback">
          
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label text-success">Correo</label>
                <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
            </div>
            
            <div class="col-12">
                
                <button class="btn btn-success" type="submit"><img src="../../img/salvar.png" ></button>
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
<?php include '../template/header.php' ?>

<section class="content ">

    <div class="container p-3">
    <h2>Nuevo Socio</h2>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-12">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="soc_nombre" name="soc_nombre" placeholder="Ingrese su nombre" required>
                <div class="valid-feedback">
                    Válido!
                </div>
            </div>
            
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Cédula</label>

                <input type="number" class="form-control" id="soc_nombre" name="soc_nombre" placeholder="Ingrese un número de cédula." required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un número de cédula.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Dirección</label>
                <input type="text" class="form-control " id="soc_direccion" name="soc_direccion" placeholder="Ingrese su dirección" required>
                <div  class="invalid-feedback">
                    Ingrese una dirección.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Teléfono</label>

                <input type="number" class="form-control" id="soc_telefono" name="soc_telefono" placeholder="Ingrese un número telefónico." required>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese un número telefónico.
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputDireccion" class="form-label">Correo</label>
                <input type="email" class="form-control " id="soc_correo" name="soc_correo" placeholder="Ingrese un correo electrónico" required>
                <div  class="invalid-feedback">
                    Ingrese un correo electrónico.
                </div>
            </div>
            
            <div class="col-12">
                
                <button class="btn btn-success" type="submit"><img src="../../img/save.png" alt="" width="32" height="32" >Grabar</button>
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
