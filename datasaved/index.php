<?php  session_start();
//conexión para el formulario de login
include 'conexionlocalhost.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<!-- bootstrap css -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
<!-- CSS personalizado -->
<link rel="stylesheet" href="main.css">

<!-- DataTables CSS basico -->
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
<!-- datatables estilo bootstrap 4 CSS -->
<link rel="stylesheet" type="text/css" href="datatables/DataTables-1.13.4/css/dataTables.bootstrap4.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>

<script src="../Alert/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../Alert/sweetalert.css">

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


<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

 <!-- ESTILO CURSOS DE PROGRAMACION -->
 <link rel="stylesheet" href="../css/style_cp.css">

<title>Login usuarios</title>
</head>
<body style="background-color:#D6F2FA;">

<style>

.btn{
        background-color: #F0E7FC;
        border: 2px solid #9960E9;
        color: #000;
        padding: 8px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;
}

.btn:hover {
  background-color: #9960E9;
  color: white;
}

.btnT1{
        background-color: #FBDFE4;
        border: 2px solid #E82D4B;
        color: #000;
        padding: 8px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;

}
.btnT1:hover {
        background-color: #E82D4B;
  color: white;

}

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
        padding: 8px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;

}
.btnT3:hover {
        background-color: #3D5386;
  color: white;

}

.btnT4{
        background-color: #D2FDF7;
        border: 2px solid #34D3BE;
        color: #000;
        padding: 8px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 12px;

}
.btnT4:hover {
        background-color: #34D3BE;
  color: white;

}


</style>

<?php 
//login///////////////////////////

if (!isset($_SESSION["name"])){$_SESSION["name"] = '';}
if ($_SESSION["name"] == ''){
  if(!empty($_POST))
  {

    

    if(trim($_POST["nombre"]) != "" && trim($_POST["contraseña"]) != ""){


$nombre = $_POST["nombre"];
$pass = $_POST["contraseña"];
$password = md5($pass);

$result = mysqli_query($conexion,"SELECT usuario, contraseña FROM login_users WHERE usuario = '$nombre'");
if($row = mysqli_fetch_array($result)){
   
    if($row["contraseña"] == $password){
        $_SESSION["name"] = $row['usuario'];
        $_SESSION["contraseña"] = $row['contraseña'];
        echo "<div class='alert alert-success alert-dismissable fade show'>Ha ingresado correctamente <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";

    }else{
     echo "<div class='alert alert-danger alert-dismissable fade show' role='alert'>Contraseña incorrecta <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";     
    }
}else{
 echo "<div class='alert alert-danger alert-dismissable fade show' role='alert'>El usuario no existe <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close' style='background-color: #ffc4c4; border: none; justify-content: right;'><span aria-hidden='true'>&times;</span></button></div>";
}
mysqli_free_result($result);
}else{
echo "<div class='alert alert-warning alert-dismissable fade show' role='alert'>Usuario o contraseña incompletos <button type='button' class='close' data-bs-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
}


}
}

?>


<div class="container" style="justify-content: center; margin: 0 auto;">


<?php 

  if(!empty($_SESSION))
  {
   
  if ( $_SESSION["name"] == "" OR !isset($_SESSION['name']) ) {
//    echo 'Sin sesión'; 
?>
  
  <div class="card mi_card" style="background-color:#D6F2FA;  border: none;">
<div class="mb-4">
  <p style="font-weight: bold; color: #0F6BB7; font-size: 45px; text-align: center;">Login de CodeCastle</p>
</div>
<form class="row g-3 needs-validation" action="index.php" method="POST" novalidate>
<input type="hidden" name="dato" value="insertar" >
  <div class="col-md-6">
    <br>
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" name="nombre"  required>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su nombre.
      </div>
  </div>
  <div class="col-md-6">
  <br>
    <label for="validationCustom04" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="validationCustom04" name="contraseña"  required>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su contraseña.
      </div>
  </div>
  <div class="col-12" style="text-align: center;">
  <br>
  <br>
    <button class="btnT2" type="submit">Login</button>
  </div>
 <!-- <a href="index.php"><p>Registrar usuario</p></a> -->
</form>
</div>
  </div>

<?php
 }else{
  
  //  echo 'Sesión OK';
  $result_query = mysqli_query($conexion,"SELECT usuario FROM login_users WHERE usuario = '".$_SESSION["name"]."' ");
 if($row_query = mysqli_fetch_array($result_query)){}
 ?>


<div class="card mi_card" style="background-color: #044943; margin: 0, padding: 0;"> <!-- width: 77rem; -->
<div class="mb-4" >
<p style="font-weight: bold; color: #C8F3FC; font-size: 35px; text-align: center;"><img src="img/logo_cc.png" style="width: 85px; height: 85px;"/>&ensp;
  Nos alegra tenerte de nuevo con nosotros <?php echo $row_query["usuario"]; ?></p>
</div>
  <div class="col-12">
  <center>
  <a class="btnT3" href="../index.php" type="submit">Volver a CodeCastle</a>
  <a class="btnT4" href="registro.php" type="submit">Registrar Usuario</a>
  <a class="btnT1" href="cerrarsesion.php" type="submit">Cerrar sessión</a>
 </center>
 <br>
  </div>
</div>

<!-- Datatable -->
<?php


include_once 'conexion2.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM regdatos_formulario";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data = $resultado->fetchALl(PDO::FETCH_ASSOC);


?>

<br>
<br>
 </div>
<div class="container" style="justify-content: center; margin: 0 auto; position: relative;">
<div class="container" >
        <div class="row">
            <div class="col-lg-12">
                <div title>
                <center><b><font face="Copperplate" style="font-weight: bold; color: #27295B; font-size: 50px; text-align: center;">Tabla de registro de datos del formulario</font></b></center>
                </div>
                <div class="table-responsive">
                    <br>
                    <br>
                    <table id="mainTable" class="table table-striped table-bordered table-condensed" style="width:100%;">
                    <thead class="text-center" style="background-color:#96D0DD">
                        <tr>
                            <th>ID registro</th>
                            <th>Ref</th>
                            <th>Nombre completo</th>
                            <th>Correo Electrónico</th>
                            <th>Número de Whatsapp</th>
                            <th>Servicio interes</th>
                            <th>Posee empresa</th>
                            <th>Nombre de la empresa</th>
                            <th>Link</th>
                            <th>Definición de la empresa</th>
                            <th>Fecha de ingreso datos</th>
                        </tr>
                    </thead>
                    <tbody style="background-color:#FFFFFF">
                        <tr>
                        <?php
                        foreach($data as $dat) {

                        ?>
                            <td><?php echo $dat['ID_registro'] ?></td>
                            <td><?php echo $dat['ref'] ?></td>
                            <td><?php echo $dat['Nombre_completo'] ?></td>
                            <td><?php echo $dat['Correo_electronico'] ?></td>
                            <td><?php echo $dat['N_whatsapp'] ?></td>
                            <td><?php echo $dat['Servicio_interes'] ?></td>
                            <td><?php echo $dat['Posee_empresa_o_emprendimiento'] ?></td>
                            <td><?php echo $dat['Nombre_empresa_emprendimiento'] ?></td>
                            <td><?php echo $dat['Link'] ?></td>
                            <td><?php echo $dat['Definicion_acercade_empresa'] ?></td>
                            <td><?php echo $dat['Fecha_ingresoDatos'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<!-- -->
 
<?php

  }
}
?>


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







<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>

<!--JQuery, Popper.js, Bootstrap JS -->
<script src="jquery/jquery-3.6.4.min.js"></script>
<script src="popper/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- datatables JS -->
<script type="text/javascript" src="datatables/datatables.min.js"></script>
<script type="text/javascript" src="main.js"></script>

</html>


