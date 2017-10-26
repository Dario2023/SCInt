<?php 
     //$_GET['name']
    //$_GET['surname'];
    //Resto de campos...
	include_once "personas.dat";

	$listaPersona = array ();

	//Valido la llegada
	if (!isset($_GET['id'])) {
		//die('Por favor seleccione un Alumno desde la Planilla de Asistencia. <a href="index.php"><b>Volver</b></a>');
		$listaPersona = $personas;
	} else {

		$idPersona = $_GET['id'];

		//Valido el Valor
		if ($idPersona == "" or $idPersona == 0) {
			die('Por favor seleccione una Persona válido.<a href="gestor_persona.php"><b>Volver</b></a>');
		}

		$indice = array_search($idPersona , array_column($personas, 'id'));

		if ( $indice === FALSE  ) {
			die('LA Persona seleccionado no existe. Por favor seleccione una Persona válida. <a href="gestor_eventos"><b>Volver</b></a>');
		}
		//var_dump(array_search($idAlumno , array_column($alumnos, 'id')));
		$listaPersona = array($personas[$indice]);
	}

	foreach ($listaPersona as $persona) { ?>		
			
			<form id="get" class="form-horizontal " method="POST" action="">
				<div class="form-group">
					<label class="col-sm-2 control-label">APELLIDO</label>
					<div class="col-sm-10">
							 <input type="text" autocomplete="family-name" class="form-control" value="<?php echo $persona['apellido']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">NOMBRE</label>
					<div class="col-sm-10">
						<input type="text" autocomplete="navbar-collapse" class="form-control" value="<?php echo $persona['nombre']; ?>">
					</div>
				</div>
    			<!-- Resto de campos !-->
			</form>
<?php 
	} 

?>


   