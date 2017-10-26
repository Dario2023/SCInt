<?php //Simepre primero esto en todas las paginas exepto index
      include_once "../Plantilla.php";
      
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
                              <li class="scroll active"><a href="#genereal">Generales</a></li>
                              <li class="scroll"><a href="#quinceaño">15 Años</a></li>  
                              <li class="scroll"><a href="#casamiento">Casaminetos</a></li>
                              <li class="scroll"><a href="#bautismo">Bautismmos</a></li> 
                              <li class="scroll"><a href="#cumpleaño">Cumpleaños</a></li>
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
			<div class="section-header">
				<h2 class="section-title">Informacion Generales</h2>	
			</div>
			<div class="panel-body">
				<div class="form-group">
					<section class="panel">
						<head class="panel-heading">Datos</head>
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
		                          		<input type="date"  class="form-control" style="width: 200px;">
		                      		</div>
		                  		</div>
		                  		<div class="form-group">
		                      		<label class="col-sm-2 control-label">FECHA FIN</label>
		                      		<div class="col-sm-10">
		                          		<input type="date"  class="form-control" style="width: 200px;">
		                      		</div>
		                  		</div> 
		                  		<div class="form-group">
		                      		<div class="col-sm-10">
		                          		<input type="submit" value="Guardar" style="position: relative; top: 0px;left: 768px;">
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
      		<div class="section-header">
        		<h2 class="section-title">Deportivos</h2>
      		</div>
      		<div>
        		<section id="tabla_resultado">
            		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
        		</section>
      		</div>
	      	<div class="form-group">
	      		<div class="col-sm-4">
	      			<div class="row">
	      				<form class="navbar-form">
	      					<input class="form-control" placeholder="Buscar" type="text" name="busqueda" id="busqueda" style="width: 125%; height: 33px; margin-left: -30px;">
	      				</form>
	      			</div>
	      		</div>
	      	</div>
      	</div>
      	<div class="container">
      		<div class="panel-body">
				<div class="form-group">
					<section class="panel">
						<head class="panel-heading">Datos</head>
						<div class="panel-body">
							<form class="form-horizontal " method="get"> 
								<div class="form-group">
			                        <label class="col-sm-2 control-label">APELLIDO</label>
			                        <div class="col-sm-10">
			                        	<input type="text"  class="form-control">
			                        </div>
		                      	</div>
		                      	<div class="form-group">
			                        <label class="col-sm-2 control-label">NOMBRE</label>
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
		                        	<label class="col-sm-2 control-label">TELEFONO</label>
			                        <div class="col-sm-10">
			                            <input type="tel"  name="telefono" placeholder="3704628661" pattern="[0-9]{10}" class="form-control" style="width: 200px;">
			                        </div>
		                      	</div>
		                      	<div class="form-group">
			                        <label class="col-sm-2 control-label">Nº DE CORREDOR</label>
			                        <div class="col-sm-10">
			                            <input type="number"  class="form-control" style="width: 80px;">
			                        </div>
		                      	</div> 
		                      	<div class="form-group">
			                        <div class="col-sm-10">
			                          <input type="submit" value="Guardar" style="position: relative; top: 0px;left: 768px;">
			                        </div>
		                      	</div>
							</form>
						</div>
                    </section>
               </div>
            </div>
      	</div>	
    </section>
</section>