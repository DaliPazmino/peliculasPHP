<?php include '../template/header.php' ?>
<?php include '../../controller/actores/update.php'?>

<section class="content">
<?php $row = $result -> fetch_assoc()?>
    <div class="container p-5  "  >
        <h2> ACTUALIZAR</h2>
    <form class="row g-3 needs-validation" action="../../controller/actores/update.php" method="post" novalidate>
            <div class="col-md-8 success">
                <label for="act_input" class="form-label text-success"></label>
                <div class="input-group mb-3 ">
                <span class="input-group-text text-white  "  id="soc_nombre"  style="background-color:#338b85;"> Nombre</span>
                <input type="text" id="act_nombre" name="act_nombre" class="form-control" placeholder="ingresar nombre" aria-label="Username" aria-describedby="basic-addon1"  value = "<?php echo $row['act_nombre'];?>" required>
                </div>
                <div id="inputEmail" class="invalid-feedback">
                    Ingrese el nombre de un actor/actriz
                </div>
            </div>
            
             
            
            <div class="container">
                    <div class="row">
                         <div class="col-md-6"></div>
                         <div class="col-md-3 offset-md-3">
                         <input type="hidden" name="act_id" value="<?php echo $row['act_id'];?>">
                         <button class="btn btn-success" type="submit"><img src="../../img/salvar.png" ></button>
                        </div>
             </div>
            
        
        </form>
    </div>
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
</section>


    
<?php include '../template/footer.php' ?>





