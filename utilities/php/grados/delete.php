<?php
  require "../conexion.php";

  
  $consulta = "DELETE FROM grados WHERE id_grado = '".$_POST['id_grado']."'";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); // Aja xDDD
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; //Lo que regresa xD
  }else{
    echo "Error";
  }
?>