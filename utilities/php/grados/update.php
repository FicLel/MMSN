<?php
  require "../conexion.php";

  
  $consulta = "UPDATE grados SET nombre_grado =  '".$_POST['nombre_grado']."' WHERE id_grado = '".$_POST['id_grado']."'";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); // Aja xDDD
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; //Lo que regresa xD
  }else{
    echo "Error";
  }
?>