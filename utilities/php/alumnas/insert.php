<?php

  function conectaDB()
  {
    $con = new PDO('mysql:host=localhost;dbname=mmsn','root', '123456');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return($con);
  }
    $nomb_alum = $_POST['nombre_alum'];
    $fecha_nac = $_POST['datetimepicker'];
    $grado_ingreso = $_POST['grad_ingr'];
    $escuela_procedencia = $_POST['escuela_pro'];
    $nomb_padre = $_POST['nomb_padr'];
    $dui_padre = $_POST['dui_padr'];    
    $profesion_padre = $_POST['prof_padr'];
    $nomb_madre = $_POST['nomb_madr'];
    $dui_madre = $_POST['dui_mdr'];
    $profesion_madre = $_POST['prof_madr'];
    $matrimonio = $_POST['matrimonio'];
    $direccion_alum = $_POST['direccion_alum'];
    $direccion_padr = $_POST['direccion_padr'];
    $tel_hab = $_POST['tel_hab'];
    $tel_cel = $_POST['tel_cel'];
    $tel_ofi_pad = $_POST['tel_trab'];
    $tel_ofi_mad = $_POST['tel_trab_mama'];
    $religion = $_POST['religion'];
    $bautismo = $_POST['bautismo'];
    $primera_comunion = $_POST['comunion'];
    $confirma = $_POST['confirma'];
    $responsable = $_POST['responsable'];
    $nombre_responsable = $_POST['nomb_resp'];
    $enfermedad = $_POST['enfermedad'];
    $medicamento $_POST['medicamento'];
    
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