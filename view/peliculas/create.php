<?php include '../template/header.php' ?>
<?php include '../../model/conectar.php'?>

<section class="content">
 
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
                    <span class="input-group-text text-white" id="pel_costo" style="background-color:#338b85;">costo</span>
                    <input type="text" class="form-control" placeholder="ingrese cedula" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
            </div>
            <div class="col-md-8 success">
                <label for="inputDireccion" class="form-label text-success"></label>
                
                <div class="input-group mb-3">
                <span class="input-group-text text-white" id="pel_fecha_estreno" style="background-color:#338b85;">Fecha estreno</span>
                <input type="text" class="form-control" id="pel_fecha_estreno" name="pel_fecha_estreno" placeholder="ingrese direccion" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                    
               
            </div>
           
             
            
            <div class="container">
                    <div class="row">
                         <div class="col-md-6"></div>
                         <div class="col-md-3 offset-md-3">
                         <button class="btn btn-success" type="submit"><img src="../../img/salvar.png" ></button>
                        </div>
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





