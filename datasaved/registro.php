
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">


<title>Insertar Datos</title>
</head>
<body style="background-color:#D6F2FA;">

<style>

.btnT2{
        background-color: #D2FDF7;
        border: 2px solid #34D3BE;
        color: #000;
        padding: 14px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;

}
.btnT2:hover {
        background-color: #34D3BE;
  color: white;

}

.btnT3{
        background-color: #C8D5F5;
        border: 2px solid #3D5386;
        color: #000;
        padding: 13px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;

}
.btnT3:hover {
        background-color: #3D5386;
  color: white;

}


</style>

<!-- NAVBAR -->
<?php include("../Admin/navbar.php"); ?>
<!-- END NAVBAR -->


<div class="container" style="justify-content: center; margin: 0 auto; position: relative;">

<div class="card mi_card" style="background-color:#D6F2FA; border: none; flex-wrap: wrap;">

<div class="mb-4">
  <p style="font-weight: bold; color: #0F6BB7; font-size: 45px; text-align: center;">Registro de Usuarios</p>
</div>

<form class="row g-3 needs-validation" action="controlador_registro.php" method="POST" id="form" >
<input type="hidden" name="dato" value="insertar" >
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="validationCustom01" name="nombre" style="width: 90%;" required>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su nombre.
      </div>
  </div>
  <div style="width: 50px;">
</div>
  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="validationCustom04" name="password" style="width: 100%;" required>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su teléfono.
      </div>
  </div>

  
<br>
<br>
  <div class="col-12" style="text-align: center;">
    <button class="btnT2" type="submit">Registrar</button>
    <a class="btnT3" href="../datasaved/index.php" type="submit">Volver al menú</a>
  </div>
  

</form>
</div>

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





<script type="text/javascript">
function JSalert(dato){
	swal("ACEPTADO", dato, "success");
}
</script>

<script type="text/javascript">
function JSalert_Error(dato){
  swal("ERROR", dato, "error");   
  }
</script>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>