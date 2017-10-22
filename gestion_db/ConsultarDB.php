<?php 
	class ConsultarBD{

		private $Obj_BD;

		public function __construct(PDO $Obj_BD) {
    	    $this->$Obj_BD = $Obj_BD;
    	}

    	function Manualmente(string $Sentencia){
    		return $Obj_BD->Consultar_Manual($Sentencia);
    	}

		

    }


 ?>