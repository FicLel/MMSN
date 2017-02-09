<?php

  function conectaDB()
  {
    $con = new PDO('mysql:host=localhost;dbname=mmsn','decima', 'decima123');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return($con);
  }

  function Ejecucion($consulta , $array)
    {
      $resultado;
      $db=conectaDB();//Conecta con la base
      $sentencia = $db->prepare($consulta);

      if ($sentencia->execute($array)>0)
      {
        $resultado = $sentencia->fetchAll();
      }
      else
      {
        $resultado="Ha ocurrido un error inesperado";
      }
      return $resultado;
    }
?>
