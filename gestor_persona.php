<?php //Simepre primero esto en todas las paginas exepto index
      include_once "Plantilla.php";

?>
	
	
	<section id="main-content">
        <section class="wrapper">            
	    	<div class="row">
	    		<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>PERSONA</h3>
				</div>
            	<div class="panel-body">
                    <div class="form-group">
                        <div class="col-lg-12">
                        	<div class="row">
                        		<div class="col-lg-4">
        						           <select class="form-control m-bot15" style="width: 98%">
        						                <option>Selecionar...</option>
        						                <option>DNI</option>
        						                <option>Apellido</option>
        						                <option>Nombre</option>
        						                <option>Celular</option>
        						                <option>Direccion</option>
        						           </select>
                            </div>
                            <div class="col-lg-4">
                             	<form class="navbar-form">
                            		<input class="form-control" placeholder="Buscar" type="text" style="width: 125%; height: 33px">
                        			</form>
                    				</div>
                            <div class="col-lg-2">
                             <input type="submit" value="Buscar" style="position: relative; top: 3px;left: 40px;height: 29px">
                            </div>       
                            </div>
                     	</div>
                    </div>
                </div>       
                        
            
							
			<div class="row">
                  <div class="col-lg-12" style="    padding-left: 15px;padding-right: 35px;">
                      <section class="panel">
                          <header class="panel-heading">
                             DATOS
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                                            
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">APELLIDO</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">NOMBRE</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">DNI</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly" style="width: 200px;">
                                     </div>     
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">TELEFONO</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly" style="width: 200px;">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">DIRECCION</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nº DE CORREDOR</label>
                                      <div class="col-sm-10">
                                          <input type="number" name="pechera" class="form-control" writeonly="writeonly" style="width: 100px;">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-sm-10">
                                          <input type="submit" value="Enviar" style="position: relative; top: 0px;left: 768px;">
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
		

