<?php 
	class EliminarBD{

		private $Obj_BD;

		public function __construct(PDO $Obj_BD) {
    	    $this->$Obj_BD = $Obj_BD;
    	}


    	function Persona(int $PersonaID){
    		$Obj_BD->Abrir_Transaccion();
    		$tablas = array("tab_usuario","tab_tarjeta_nfc", "tabinter_pers_event", "tabinter_pers_direc", "tab_documento", "tab_contacto", "tab_cliente");
    		$conditions = array('where' => array('rela_persona' => ´$PersonaID));

    		foreach ($tablas as $tabla_actual) {
    			$Obj_BD->Borrar($tabla_actual,$conditions);
    		}
    		$Obj_BD->Confirmar();
    	}

    	function Tipo_Dato(string $Tabla, int $TipoID){
    		/*ESTA FUNCION SE PUEDE USAR PARA ELIMINAR LAS SIGUIENTE TABLAS:
    		TAB_TIPO_CONTACTO			TAB_MESA
    		TAB_TIPO_DOCUMENTO			TAB_ESTADO_NFC
    		TAB_TIPO_CLIENTE			TAB_CATEG_UBICACION
    		TAB_TIPO_EVENTO				TAB_RANGO
			AL TENER LAS 8 TABLAS INDEPENDENCIA DE RELACIONES, SOLO SE ESPIFICICA LA TABLA
    		*/
    		$Tabla = strtoupper($Tabla);
    		$id = "";
    		switch ($Tabla) {
    			case 'TAB_TIPO_CONTACTO':
    				$id = "id_tipoc";
    				break;

    			case 'TAB_TIPO_DOCUMENTO':
    				$id = "id_tipod";
    				break;

    			case 'TAB_TIPO_CLIENTE':
    				$id = "id_tipocl";
    				break;

    			case 'TAB_TIPO_EVENTO':
    				$id = "id_tipoe";
    				break;

    			case 'TAB_MESA':
    				$id = "id_mesa";
    				break;

    			case 'TAB_ESTADO_NFC':
    				$id = "id_estado_nfc";
    				break;

    			case 'TAB_CATEG_UBICACION':
    				$id = "id_categoria";
    				break;

    			case 'TAB_RANGO':
    				$id = "id_rango";
    				break;
    			
    			default:
    				return "La funcion no adminte la tabla ingresada."
    				exit;
    				break;
    		}
    		
    		$Obj_BD->Abrir_Transaccion();
    		$conditions = array('where' => array( "'".$id."'" => $tipoID));
    		$Obj_BD->Borrar($Tabla,$conditions);
    		$Obj_BD->Confirmar();
    	}

    	function Contacto(int $SelectID, bool $Todos){
    		$Obj_BD->Abrir_Transaccion();

    		if ($Todos == true){
    			$conditions = array('where' => array('rela_persona' => $SelectID));
    			$Obj_BD->Borrar("tab_contacto",$conditions);
    		}
    		else {
    			$conditions = array('where' => array('id_contacto' => $SelectID));
    			$Obj_BD->Borrar("tab_contacto",$conditions);
    		}
    		$Obj_BD->Confirmar();
    	}

    	function Documento(int $SelectID, bool $Todos){
    		$Obj_BD->Abrir_Transaccion();

    		if ($Todos == true){
    			$conditions = array('where' => array('rela_persona' => $SelectID));
    			$Obj_BD->Borrar("tab_documento",$conditions);
    		}
    		else {
    			$conditions = array('where' => array('id_documento' => $SelectID));
    			$Obj_BD->Borrar("tab_documento",$conditions);
    		}
    		$Obj_BD->Confirmar();
    	}

    	function Cliente(int $PersonaID){
    		$Obj_BD->Abrir_Transaccion();
    			$conditions = array('where' => array('rela_persona' => $PersonaID));
    			$Obj_BD->Borrar("tab_cliente",$conditions);
    		$Obj_BD->Confirmar();
    	}

    	function Tarjeta_NFC(int $nfcID){
    		$Obj_BD->Abrir_Transaccion();
    			$conditions = array('where' => array('id' => $nfcID));
    			$Obj_BD->Borrar("tab_tarjeta_nfc",$conditions);
    		$Obj_BD->Confirmar();
    	}

    }

 ?>