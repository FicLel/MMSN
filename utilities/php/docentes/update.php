<?php
  require "../conexion.php";

  $consulta = "UPDATE docentes SET nombre_docen =  '".$_POST['nombre_docen']."' WHERE id_docen = '".$_POST['id_docen']."'";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); // Aja xDDD
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; //Lo que regresa xD
  }else{
    echo "Error";
  }
?>
