<?php //Simepre primero esto en todas las paginas exepto index
      include_once "Plantilla.php";


     	

      if(!isset($_GET['id'])){

      	$_GET['id']= 1;
		$Sentencia = "SELECT * FROM tab_persona WHERE id_persona = ".$_GET['id'];
		$resultado = $Obj_BD->Consultar_Manual($Sentencia);
	}
	else{
		$Sentencia = "SELECT * FROM tab_persona WHERE id_persona = ".$_GET['id'];
		$resultado = $Obj_BD->Consultar_Manual($Sentencia);
	}
		
	if ($resultado->rowCount() >= 0) {
		
											

		foreach ($resultado as $persona) { 
      
?>

<section id="main-content">

	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="icon_check"></i>EVENTOS</h3>
			</div>
			<div id="nav">
				<div id="main-nav" class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="collapse navbar-collapse navbar-center">
							<ul class="nav navbar-nav">
                              <li class="scroll active"><a href="#genereal">General</a></li>
                              <li class="scroll"><a href="#deporte">Deportivos</a></li>      
                          </ul>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</section>

	<section id="genereal">
		<div class="container">
			<div class="panel-body">
				<div class="col-lg-12">
					<section class="panel"> 
			      		<div class="panel-heading" style="background:rgb(42,85,153);" >
							<h2 class="section-title">INFORMACION GENERAL</h2>	
						</div>
					</section>	
				</div>		
			</div>
		</div>		
		<div class="container">
			<div class="panel-body">
				<div class="col-lg-12">
					<section class="panel">
						<div class="panel-heading" style="background:rgb(42,85,153);" >
							<h2 class="section-title">DATOS</h2>
						</div>
						<div class="panel-body">
							<form class="form-horizontal " method="get">
											<div class="form-group">
						                  		<label class="col-sm-2 control-label">LUGAR</label>
						                  		<div class="col-sm-10">
						                  			<input type="text"  class="form-control">
						                  		</div>
					                  		</div>
					                  		<div class="form-group">
					                    		<label class="col-sm-2 control-label">DIRECCION</label>
					                      		<div class="col-sm-10">
					                        		<input type="text"  class="form-control">
					                      		</div>
					                  		</div>
					                  		<div class="form-group">
					                    		<label class="col-sm-2 control-label">CONTACTO</label>
					                    		<div class="col-sm-10">
					                         		<input type="text"  class="form-control">
					                    		</div>     
					                  		</div>
					                  		<div class="form-group">
					                      		<label class="col-sm-2 control-label">FECHA INICIO</label>
					                      		<div class="col-sm-10">
					                          		<input type="date"  class="form-control" style="width: 150px;">
					                      		</div>
					                  		</div>
					                  		<div class="form-group">
					                      		<label class="col-sm-2 control-label">FECHA FIN</label>
					                      		<div class="col-sm-10">
					                          		<input type="date"  class="form-control" style="width: 150px;">
					                      		</div>
					                  		</div> 
					                  		<div class="form-group">
					                      		<div class="col-sm-10">
					                          		<input type="submit" value="Guardar" style="position: relative; top: 0px;left: 675px;">
					                      		</div>
					                  		</div>    
							</form>	
						</div>
					</section>
				</div>
			</div>
		</div>		
	</section>

	<section id="deporte">
    	<div class="container">
    		<div class="panel-body">
				<div class="col-lg-12">
					<section class="panel"> 
			      		<div class="panel-heading" style="background:rgb(42,85,153);" >
			        		<h2 class="section-title">DEPORTIVOS</h2>
			      		</div>
			      	</section>
				</div>
			</div>			      	  	
      	</div>

      	<div class="container">
      		<div class="panel-body">
				<div class="col-lg-12">
					<section class="panel">
						<div class="panel-heading" style="background:rgb(42,85,153);" >
							<h2 class="section-title">DATOS</h2>
						</div>
						<div class="panel-body">
							<form id="carga" class="form-horizontal " method="get"> 
								<div class="form-group">
			                        <label class="col-sm-2 control-label">EVENTO</label>
			                        <div class="col-sm-10">
			                        	<select class="form-control m-bot15" style="width: 200px">
        					                <option>Seleccionar...</option>
        					                <option>Unf-Corre 2017</option>
        					                <option>Maraton Rosa 2017</option>
        					                <option>Nocturna Gasolina 2017</option>   
                                        </select>
			                        </div>
		                      	</div>
								<div class="form-group">
			                        <label class="col-sm-2 control-label">APELLIDO</label>
			                        <div class="col-sm-10">		                        		
			                        	</select>
			                        	<input type="text"  class="form-control" value="<?php echo $persona['nombre']; ?>">
			                        </div>
		                      	</div>
		                      	<div class="form-group">
			                        <label class="col-sm-2 control-label">NOMBRE</label>
			                        <div class="col-sm-10">
			                           <input type="text"  class="form-control" value="<?php echo $persona['apellido']; ?>">
			                        </div>
		                       	</div>
		                       	<div class="form-group">
			                        <label class="col-sm-2 control-label">DIRECCION</label>
			                        <div class="col-sm-10">
			                           <input type="text"  class="form-control">
			                        </div>
		                       	</div>
		                       	<div class="form-group" class="col-lg-12">
		                       		<div class="row"  >
			                        	<label class="col-lg-2 control-label">TELEFONO</label>
				                        <div class="col-lg-2">
				                            <input type="tel"  name="telefono" placeholder="3704" pattern="[0-9]{10}" class="form-control" style="width: 60px; margin-left: -7px " >
				                        </div>
				                        <label style=" margin-left: -607px ;">__</label>
				                        <div class ="col-lg-6">
				                            <input type="tel"  name="telefono" placeholder="628661" pattern="[0-9]{10}" class="form-control" style="width: 80px; margin-left: -62px ;">
				                        </div> 
			                        </div>
		                      	</div>
		                      	<div class="form-group">
			                        <label class="col-sm-2 control-label">CATEGORIA</label>
			                        <div class="col-sm-10">
			                            <input type="number" class="form-control" style="width: 200px;">
			                        </div>
		                      	</div> 
		                      	<div class="form-group">
			                        <label class="col-sm-2 control-label">Nº DE CORREDOR</label>
			                        <div class="col-sm-10">
			                            <input type="number" class="form-control" style="width: 80px;">
			                        </div>
		                      	</div> 

		                      	<div class="form-group">
			                        <label class="col-sm-2 control-label">TALLE</label>
			                        <div class="col-sm-10">
			                            <input type="number" class="form-control" style="width: 80px;">
			                        </div>
		                      	</div> 
		                      	<div class="form-group">
			                        <div class="col-sm-10">
			                          <input type="submit" value="Guardar" style="position: relative; top: 0px;left: 675px;">
			                        </div>
		                      	</div>
							</form>

<?php 
								} 
									}
?>
						</div>
                    </section>
               </div>
            </div>
      	</div>	
    </section>

</section>

	


  