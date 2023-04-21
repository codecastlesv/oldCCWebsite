<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD conection</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
//validamos datos del servidor
$user = "root";
$pass = "root";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nombre = $_POST["nombre"] ;
$contraseña = $_POST["password"] ;
$md5pen = md5($contraseña) ; 


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "<div class='alert alert-danger alert-dismissable fade show' role='alert'>No se ha podido conectar con el servidor</div>". mysql_error();
        }
        //indicamos el nombre de la base datos
        $datab = "codecastle_datosformulario";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "<div class='alert alert-danger alert-dismissable fade show' role='alert'>No se ha podido encontrar la tabla de registro de datos</div>";
        }
        
        //verificamos el usuario
        $verificacion = mysqli_query($connection, "SELECT * FROM login_users WHERE usuario = '$nombre'");
        if(mysqli_num_rows($verificacion) > 0)
        {
          echo '<div class="alert alert-danger alert-dismissable fade show" role="alert">Este usuario ya esta registrado, intenta con otro diferente
          <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

          header("Location: ".$_SERVER['HTTP_REFERER']."");
          exit();
        }
        


        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO login_users (Usuario, Contraseña)
                             VALUES ('$nombre','$md5pen')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        echo '<div class="alert alert-success alert-dismissable fade show" role="alert">Usuario registrado exitosamente
          <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';



        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM tabla_form";
        
$result = mysqli_query($connection,$consulta);


mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.php"> Volver Atrás</a>';

   header("Location: ".$_SERVER['HTTP_REFERER']."");
?>