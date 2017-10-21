<?php 
	include_once "session.php";

	function contar_sexo($Obj_BD,$sexo){
	
		$Sentencia = "SELECT COUNT(SEXO) FROM `acreditacion_datos` WHERE SEXO =".$sexo.";";
    	return $Obj_BD->Consultar_Manual($Sentencia);
	}
	function contar_localidad($Obj_BD){
	
		$Sentencia = "select LOCALIDAD, count(LOCALIDAD) from acreditacion_datos group by LOCALIDAD having count(LOCALIDAD)>0;";
    	return $Obj_BD->Consultar_Manual($Sentencia);
	}
	function contar_edad($Obj_BD){
	 
		$Sentencia = "select EDAD, count(EDAD) from acreditacion_datos group by EDAD having count(EDAD)>0";
    	return $Obj_BD->Consultar_Manual($Sentencia);
	}
	?>