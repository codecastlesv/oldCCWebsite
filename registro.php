
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
$user = "CCBD2023";
$pass = "root";
$host = "localhost";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$nombre = $_POST["customer-name"] ;
$email = $_POST["customer-email"] ;
$numero = $_POST["customer-phone"] ;
$servicio = $_POST["customer-want-service"] ;
$qcompania = $_POST["customer-has-company"] ;
$comname = $_POST["customer-company-name"] ;
$comlink = $_POST["customer-company-link"] ;
$comdes = $_POST["customer-company-description"] ;
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$password = "";
for($i=0;$i<5;$i++) 
  {
    $password .= substr($str,rand(0,64),1);
  }
$ref = $password;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
        //indicamos el nombre de la base datos
        $datab = "codecastle_datosformulario";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la tabla de registro de datos";
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO regdatos_formulario (ref, Nombre_completo, Correo_electronico, N_whatsapp, Servicio_interes, Posee_empresa_o_emprendimiento, Nombre_empresa_emprendimiento, Link, Definicion_acercade_empresa)
                             VALUES ('$ref','$nombre','$email','$numero','$servicio','$qcompania','$comname','$comlink','$comdes')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM tabla_form";
        
$result = mysqli_query($connection,$consulta);


mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.php"> Volver Atrás</a>';

   header("Location: ".$_SERVER['HTTP_REFERER']."");
?>

