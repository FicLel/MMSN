<?php
  require "../conexion.php";

  //Consulta cholera, no me acuerdo como dinamizar esto, pero lo hare mañana
  $consulta = "INSERT INTO docentes (nombre_docen ) VALUES ('".$_POST['nombre_docen']."')";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); // Aja xDDD
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; //Lo que regresa xD
  }else{
    echo "Error";
  }
?>
