<?php
//Conectarse
 $usuario = "root";
 $password = "";
 $servidor = "localhost";
 $basededatos ="nicedriver";
 $conexion = mysqli_connect ($servidor,$usuario,"") or die ("No se ha podido conectar con el servidor de Base de datos");
 $db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la Base de datos");

//Recuperar variables
$correo =$_POST['correo'];
//Sentencia SQL

$sql="INSERT INTO emails VALUES('$correo')";

//Ejecutar la Sentencia
$ejecutar = mysql_query($sql);
//Verificar ejecución
if(!$ejecutar){
  echo"No pudo mandarse los datos";
}else{
  echo"Datos guardados";
}
 ?>
