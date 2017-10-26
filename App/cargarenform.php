<?php
	$mysqli= new mysqli('localhost','root','','scint');

	$salida="";
	$query="SELECT*FROM tab_persona ORDER By id_persona";

	if (isset($_POST['consulta'])) {
		$q=$mysqli->real_escape_string($_POST['consulta']);
		$query="SELECT * FROM tab_persona WHERE 
		nombre LIKE '%".$q."%' OR
		apellido LIKE '%".$q."%' OR
		sexo LIKE '%".$q."%'";
		
	}

	$resultado= $mysqli->query($query);

	if ($resultado->num_rows > 0) {
		
		$salida.=" <table class='tabla_datos'>
				<thead>
					<tr>
						
						<td>Apellidos</td>
						<td>Nombre</td>
						<td>Direccion</td>
						<td>Telefono</td>
						<td>Talle</td>
						
						
					</tr>
				</thead>
				<tbody>";	

				while ($fila= $resultado->fetch_assoc()) {
				$salida.="	<tr>
								<a href=""><td>".$fila['apellido']."</td></a>
								<a href=""><td>".$fila['nombre']."</td></a>
								
							</tr>";
				}

				$salida.="</tbody></table>";

				} 
				else
				{
				$salida.="No hay dato";
				}
				
				echo $salida;
				$mysqli->close();

?>