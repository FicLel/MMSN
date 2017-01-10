<?php

  function conectaDB()
  {
    $con = new PDO('mysql:host=localhost;dbname=mmsn','root', '123456');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return($con);
  }
  //Si no sabes por que es eso mereces un golpe xDD
  $name = $_POST['nombre_docen'];

  //Consulta cholera, no me acuerdo como dinamizar esto, pero lo hare mañana
  $consulta = "INSERT INTO docentes (nombre_docen) VALUES ('$name')";

  $db=conectaDB();//Conecta con la base
  $sentencia = $db->prepare($consulta); // Aja xDDD
  if($sentencia->execute($array) > 0)
  {
    echo "Logrado"; //Lo que regresa xD
  }else{
    echo "Error";
  }
?>
