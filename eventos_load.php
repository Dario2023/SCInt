<?php 
    include_once "session.php";
    
    if(isset($_GET['id'])){

		$Sentencia = "SELECT * FROM tab_persona WHERE id_persona = ".$_GET['id'];
		$resultado = $Obj_BD->Consultar_Manual($Sentencia);
	}
		
	if ($resultado->rowCount() >= 0) {
		
		

		foreach ($resultado as $persona) { 
?>		
			
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
		}
?>


   