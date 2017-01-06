<?php

	 $dbName = 'MMSN' ;
	 $dbHost = 'localhost' ;
	 $dbUsername = 'root';
	 $dbUserPassword = '123456';
	 $cont = null;
	//Constructor de la clase
	
	//Una sola conexión para toda la aplicación
			try {
			$cont = new PDO("mysql:host={$dbHost};dbname={$dbName}",$dbUsername,$dbUserPassword);
 			$cont->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} 
			catch(PDOException $e) {
			echo $e->getMessage();
		}
	

	/*include_once 'class/ContactosCRUD.class.php';
	include_once 'class/ActividadesCRUD.class.php';
	$crudCont = new crudCont($cont);
	$crudAct = new crudAct($cont);*/
?>