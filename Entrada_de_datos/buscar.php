<?php

	include_once "../session.php";
	
	if(isset($_POST['consulta'])){

		$Sentencia = "SELECT * FROM tab_persona WHERE 
		id_persona LIKE '%".$_POST['consulta']."%' OR 
		nombre LIKE '%".$_POST['consulta']."%' OR 
		apellido LIKE '%".$_POST['consulta']."%'";

		$Obj_BD->Abrir_Transaccion();
		$resultado = $Obj_BD->Consultar_Manual($Sentencia);
	}
	else{
		$Sentencia = "SELECT * FROM tab_persona ORDER By id_persona";
		$Obj_BD->Abrir_Transaccion();
		$resultado = $Obj_BD->Consultar_Manual($Sentencia);
	}

	if(isset($_POST['mac'])){
		$Sentencia = "SELECT nombre,apellido  FROM tab_persona, tab_tarjeta_nfc  WHERE mac=702717645 and id_persona = rela_persona;";

		$Obj_BD->Abrir_Transaccion();
		$resultado2 = $Obj_BD->Consultar_Manual($Sentencia);
	}



	$salida="";

	if ($resultado->rowCount() > 0) {
		
		$salida.='<form class="form-horizontal " method="get">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">APELLIDO</label>
                      <div class="col-sm-10">
                          <label class="col-sm-2 control-label">hol</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">NOMBRE</label>
                      <div class="col-sm-10">
                          <input type="text"  class="form-control">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 control-label">DNI</label>
                      <div class="col-sm-10">
                          <input type="text"  class="form-control" style="width: 200px;">
                      </div>     
                  </div>
                   <div class="form-group">
                      <label class="col-sm-2 control-label">CUIL</label>
                      <div class="col-sm-10">
                          <input type="text"  class="form-control" style="width: 200px;">
                      </div>
                               
              </form>



		<table class="tabla_datos" >
				<thead>
					<tr>
						<th><i class="icon_paperclip"></i> N°</th>
						<th><i class="icon_profile"></i> Apellido</th>
						<th><i class="icon_profile"></i> Nombre</th>
						<th><i class="icon_contacts"></i> Direccion</th>
						<th><i class="icon_mobile"></i> Telefono</th>
						<th><i class="icon_pencil"></i> Asistencia</th>
						
						
					</tr>
				</thead>
				<tbody>';	

		foreach ($resultado2 as $fila) {
			$salida.= '<tr>
					   	<td>
						   <a href="gestor_eventos.php?id='.$fila['id_persona'].'">'.$fila['id_persona'].'</a>
						   </td>
						   <td>
						   '.$fila['apellido'].'
						   </td>
						   <td>
						   	'.$fila['nombre'].'
						</td>
					   
					   </tr>';
		}	
		$salida.="</tbody></table>";
		} 
		
		else{
				$salida.="No hay dato";
			}
				
		echo $salida;

		
?>

<!-- 'if ($fila['asistencia'] = 0) {
			
							'<th><i class="icon_error-circle_alt"></i>'. $fila['asistencia'].'</th>
						}
						else{
							<th><i class="icon_check"></i>'. $fila['asistencia'].'</th>
						} -->