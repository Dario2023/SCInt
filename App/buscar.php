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

	$salida="";

	if ($resultado->rowCount() > 0) {
		
		$salida.='<table class="tabla_datos" >
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

		foreach ($resultado as $fila) {
			$salida.= '<tr>
					   	<td>
						   <a href="gestor_eventos.php?id='.$fila['id_persona'].'">'.$fila['id_persona'].'</a>
						   </td>
						   <td>
						   <a href="eventos_recepcion.php?surname='.$fila['apellido'].'">'.$fila['apellido'].'</a>
						   </td>
						   <td>
						   <a href="eventos_recepcion.php?name='.$fila['nombre'].'">'.$fila['nombre'].'</a>
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