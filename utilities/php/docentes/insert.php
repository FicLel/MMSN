<?php
  require "../conexion.php";

  
  $consulta = "INSERT INTO docentes (nombre_docen ) VALUES ('".$_POST['nombre_docen']."')";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); 
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; 
  }else{
    echo "Error";
  }
?>
