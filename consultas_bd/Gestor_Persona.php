<?php 
	include_once "session.php";

	function Rellenar_Tabla($Obj_BD){
		$Obj_BD->Abrir_Transaccion();

		$Sql = "SELECT apellido, nombre, tab_documento.valor_doc, tab_contacto.valor_cont from tab_persona inner join tab_documento on tab_documento.rela_persona=tab_persona.id_persona inner join tab_contacto on tab_contacto.rela_persona=tab_persona.id_persona;";
    	return $Obj_BD->Consultar_Manual($Sql);
	}
	function Insertar($datos = array(), $Obj_BD){
		$Obj_BD->Abrir_Transaccion(); //INSERTO LA PERSONA
		$insertar = array('ID' => NULL,
						 'APELLIDO'=> $datos['apellido'],
						 'NOMBRE' => $datos['nombre'],
						 'LOCALIDAD' => $datos['localidad'],
						 'TELEFONO' => $datos['telefono'],
						 'EMAIL' => $datos['email'],
						 'SEXO' => $datos['sexo'],
						 'EDAD' => $datos['edad']);
						 
		$Obj_BD->insertar('acreditacion_datos',$insertar);
		$Obj_BD->Confirmar();
	}
	function Eliminar($Obj_BD, $id){

		$Obj_BD->Abrir_Transaccion(); //ELIMINO LA PERSONA
		$borrar = array('where' => array('ID' => $id));
		$OK = $Obj_BD->Borrar('acreditacion_datos',$borrar);
		$Obj_BD->Confirmar();
	}
	function Recuperar_Alumno($Obj_BD, $id){
		$Obj_BD->Abrir_Transaccion();
		$Sentencia = "SELECT * FROM acreditacion_datos where ID = '".$id."'";
		return $Obj_BD->Consultar_Manual($Sentencia);
	}
	function Eliminar_Presente($Obj_BD, $id_asistencia){

		$Obj_BD->Abrir_Transaccion();
		$datos = array('where' => array("tab_asistencia.id_asistencia" => $id_asistencia));
		$OK = $Obj_BD->Borrar("tab_asistencia", $datos);
		$Obj_BD->Confirmar();
	}
	function actualizar($datos = array(), $Obj_BD, $id){

		$Obj_BD->Abrir_Transaccion(); //INSERTO LA PERSONA
		$actualizar = array(
						 'APELLIDO'=> $datos['apellido'],
						 'NOMBRE' => $datos['nombre'],
						 'LOCALIDAD' => $datos['localidad'],
						 'TELEFONO' => $datos['telefono'],
						 'EMAIL' => $datos['email'],
						 'SEXO' => $datos['sexo'],
						 'EDAD' => $datos['edad']);

		$condicion = array('where' => array('ID' => $id));
						 
		$Obj_BD->Actualizar('acreditacion_datos',$actualizar,$condicion);
		$Obj_BD->Confirmar();
	}
	

	// NO TE OLVIDES DE :
	//include_once "session.php";
	//$lista = Recuperar_Presentes($Obj_BD);

	if (isset($_POST['apellido'])){
		$id=$_POST['id'];
		$datos = array('apellido'   => $_POST['apellido'],
					   'nombre' => $_POST['nombre'],
					   'telefono' => $_POST['telefono'],
					   'email' => $_POST['email'],
					   'edad'=> $_POST['edad'],
					   'localidad'=> $_POST['localidad'],
					   'sexo'=> $_POST['sexo']);


		if($_POST['action']=="update"){
			actualizar($datos,$Obj_BD,$id);
			header("location: gestor_persona.php");
		}else{
			Insertar($datos, $Obj_BD);		
			header("location: gestor_persona.php");
		}
			
	}
 ?>