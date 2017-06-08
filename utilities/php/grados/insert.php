<?php
  require "../conexion.php";

  $nombre_grado = $_POST['nombre_grado'];
  $consulta = "INSERT INTO grados(nombre_grado) VALUES ('$nombre_grado')";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); 
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; 
  }else{
    echo "Error";
  }
?>