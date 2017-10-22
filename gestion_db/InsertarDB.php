<?php 
	class InsertarBD{

		private $Obj_BD;

		public function __construct(PDO $Obj_BD) {
    	    $this->$Obj_BD = $Obj_BD;
    	}

    	function Persona(string $Nombre, string $Apellido, int $Sexo){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("nombre"		=> $Nombre,
    					  "apellido"	=> $Apellido,
    					  "sexo"		=> $Sexo);
    		return $Obj_BD->Insertar("tab_persona",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Tipo_Dato(string $Tabla, string $Codigo, string $Descripcion){
    		/*ESTA FUNCION SE PUEDE USAR PARA CARGAR LAS SIGUIENTE TABLAS:
    		TAB_TIPO_CONTACTO			TAB_MESA
    		TAB_TIPO_DOCUMENTO			TAB_ESTADO_NFC
    		TAB_TIPO_CLIENTE			TAB_CATEG_UBICACION
    		TAB_TIPO_EVENTO				
			AL TENER LAS 7 TABLAS LAS MISMAS COLUMNAS, SOLO SE ESPIFICICA LA TABLA
    		*/
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("cod"		=> $Codigo,
    					  "descri"	=> $Descripcion);
    		return $Obj_BD->Insertar($Tabla,$data);
    		$Obj_BD->Confirmar();
    	}

    	function Rango(String $Codigo, string $Descripcion, int $Nivel_Importancia){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("cod"					=> $Codigo,
    					  "descri"				=> $Descripcion,
    					  "nivel_importancia"	=> $Nivel_Importancia);
    		return $Obj_BD->Insertar("tab_rango",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Contacto(int $PersonaID, int $TipoID, string $Value){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_persona"	=> $PersonaID,
    					  "rela_tipoc"		=> $TipoID,
    					  "valor"			=> $Value);
    		return $Obj_BD->Insertar("tab_contacto",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Documento(int $PersonaID, int $TipoID, string $Value){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_persona"	=> $PersonaID,
    					  "rela_tipod"		=> $TipoID,
    					  "valor"			=> $Value);
    		return $Obj_BD->Insertar("tab_documento",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Cliente(int $PersonaID, int $TipoID){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_persona"	=> $PersonaID,
    					  "rela_tipocl"		=> $TipoID,
    					  "fecha_registro"	=> date("Y-m-d H:i:s"));
    		return $Obj_BD->Insertar("tab_cliente",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Ubicacion(int $PadreID, int $CateogriaID, string $Descripcion){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_padre"		=> $PadreID,
    					  "rela_categoria"	=> $CategoriaID,
    					  "descri"			=> $Descripcion);
    		return $Obj_BD->Insertar("arb_ubicacion",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Direccion(int $UbicacionID, String $Barrio, string $Calle, int $Altura){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_ubicacion"	=> $UbicacionID,
    					  "barrio"			=> $Barrio,
    					  "calle"			=> $Calle,
    					  "altura"			=> $Altura);
    		return $Obj_BD->Insertar("tab_direccion",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Tarjeta_NFC(int $MAC, int $EstadoID, int $RangoID, int $PersonaID){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("mac"				=> $MAC,
    					  "rela_estado_nfc"	=> $EstadoID,
    					  "rela_rango"		=> $RangoID,
    					  "rela_persona"	=> $PersonaID);
    		return $Obj_BD->Insertar("tab_tarjeta_nfc",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Evento(int $ClienteID, int $TipoID, int $DireccionID, string $Codigo, string $Descripcion, date $fecha_inicial, date $fecha_final){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_cliente"	=> $ClienteID,
    					  "rela_tipoe"		=> $TipoID,
    					  "rela_direccion"	=> $DireccionID,
    					  "cod"				=> $Codigo,
    					  "descri"			=> $Descripcion,
    					  "fecha_inicial"	=> $fecha_inicial,
    					  "fecha_final"		=> $fecha_final);
    		return $Obj_BD->Insertar("tab_evento",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Relacion_Persona_Direccion(int $PersonaID, int $DireccionID){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_persona"	=> $PersonaID,
    					  "rela_direccion"	=> $DireccionID);
    		return $Obj_BD->Insertar("tabinter_pers_direc",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Relacion_Persona_Evento(int $PersonaID, int $EventoID, int $MesaID, int $Asistencia){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_persona"	=> $PersonaID,
    					  "rela_evento"		=> $EventoID,
    					  "rela_mesa"		=> $MesaID,
    					  "asistencia"		=> $Asistencia);
    		return $Obj_BD->Insertar("tabinter_pers_event",$data);
    		$Obj_BD->Confirmar();
    	}

    	function Usuario(int $PersonaID, string $Nickmane, string $Password){
    		$Obj_BD->Abrir_Transaccion();
    		$data = array("rela_persona"	=> $PersonaID,
    					  "nickmane"		=> $Nickmane,
    					  "password" 		=> $Password,
    					  "dispositivo" 	=> NULL);
    		return $Obj_BD->Insertar("tab_usuario",$data);
    		$Obj_BD->Confirmar();
    	}

	}

 ?>