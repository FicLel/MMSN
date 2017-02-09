<?php
  function conectaDB()
  {
    $con = new PDO('mysql:host=localhost;dbname=mmsn','decima', 'decima123');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return($con);
  }
 ?>
