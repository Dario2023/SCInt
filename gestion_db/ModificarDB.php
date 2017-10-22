<?php 
	class ModificarBD{

		private $Obj_BD;

		public function __construct(PDO $Obj_BD) {
    	    $this->$Obj_BD = $Obj_BD;
    	}

    	function Dato_Especifico(int $Tabla, int $DatoID, array $Datos){
    		/*ESTA FUNCION SE PUEDE USAR PARA MODIFICAR CUALQUIER TABLA,
    		YA QUE LA CANTIDAD DE VARIABLES SE REDUCE TODO A UNA MATRIZ
    		DEFINIDA POR EL PROGRAMADOR AL CONSULTAR A LA FUNCION
    		*/
    		$Tabla = strtoupper($Tabla);
    		$id = "";
    		switch ($Tabla) {
    			case 'TAB_PERSONA':
    				$id = "id_persona";
    				break;

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

    			case 'TAB_CONTACTO':
    				$id = "id_contacto";

    			case 'TAB_DOCUMENTO': //10
    				$id = "id_documento";
    				break;

    			case 'TAB_CLIENTE':
    				$id = "id_cliente";
    				break;

    			case 'ARB_UBICACION':
    				$id = "id_ubicacion";
    				break;

    			case 'TAB_DIRECCION':
    				$id = "id_direccion";
    				break;

    			case 'TAB_TARJETA_NFC':
    				$id = "id_nfc";
    				break;

    			case 'TAB_EVENTO':
    				$id = "id_evento";

    			case 'TAB_RANGO':
    				$id = "id_rango";

    			case 'TABINTER_PERS_DIREC':
    				$id = "id_pers_direc";
    				break;

    			case 'TABINTER_PERS_EVENT':
    				$id = "id_pers_event";
    				break;

    			case 'TAB_USUARIO':
    				$id = "id_usuario";
    				break;
    			
    			default:
    				return "La funcion no adminte la tabla ingresada."
    				exit;
    				break;
    		}
    		$Obj_BD->Abrir_Transaccion();
    			$conditions = array('where' => array("'".$id."'" => $DatoID));
    			$Obj_BD->Actualizar($Tabla,$Datos,$conditions);
    		$Obj_BD->Confirmar();
    	}
    }

 ?>