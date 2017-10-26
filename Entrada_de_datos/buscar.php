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
				<tbody>

			<section class='panel'>
              <header class='panel-heading'>DATOS</header>
              <div class='panel-body'>
                <form class='form-horizontal '' method='get'>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>LUGAR</label>
                      <div class='col-sm-10'>
                        <input type='text'  class='form-control'>
                      </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>DIRECCION</label>
                      <div class='col-sm-10'>
                        <input type='text'  class='form-control'>
                      </div>
                  </div>
                  <div class='form-group'>
                    <label class='col-sm-2 control-label'>CONTACTO</label>
                    <div class='col-sm-10'>
                         <input type='text'  class='form-control'>
                    </div>     
                  </div>
                  <div class='form-group'>
                      <label class='col-sm-2 control-label'>FECHA INICIO</label>
                      <div class='col-sm-10'>
                          <input type='date' class='form-control' style='width: 200px;'>
                      </div>
                  </div>
                  <div class='form-group'>
                      <label class='col-sm-2 control-label'>FECHA FIN</label>
                      <div class='col-sm-10'>
                          <input type='date'  class='form-control' style='width: 200px;'>
                      </div>
                  </div> 
                  <div class='form-group'>
                      <div class='col-sm-10'>
                          <input type='submit' value='Guardar' style='position: relative; top: 0px;left: 768px;'>
                      </div>
                  </div>                               
                </form>
              </div>
        	</section>"


				;	

				while ($fila= $resultado->fetch_assoc()) {
				$salida.="	<tr>
								<td>".$fila['apellido']."</td>
								<td>".$fila['nombre']."</td>
								
							</tr>";
				}

				$salida.="</tbody></table>";

	} else{
				$salida.="No hay dato";
		   }
				
				echo $salida;
				$mysqli->close();

?>