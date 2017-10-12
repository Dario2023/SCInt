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
                        		<div class="col-lg-8">
						           <select class="form-control m-bot15">
						                <option>Selecionar...</option>
						                <option>DNI</option>
						                <option>Apellido</option>
						                <option>Nombre</option>
						                <option>Celular</option>
						                <option>Direccion</option>
						           </select>
                                </div>
                                <div class="col-lg-4">
                                	<ul class="nav top-menu">                    
                                		<li>
                        					<form class="navbar-form">
                            					<input class="form-control" placeholder="Buscar" type="text">
                        					</form>
                    					</li>                    
                					</ul>  
                                </div>
                            </div>
                     	</div>
                    </div>
                </div>       
                        
            
							
			<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Datos
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                                            
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Apellido</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nombre</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Rounder</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Input focus</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Disabled</label>
                                      <div class="col-sm-10">
                                          <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Placeholder</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" placeholder="placeholder">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password"  class="form-control" placeholder="">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Static control</label>
                                      <div class="col-lg-10">
                                          <p class="form-control-static">email@example.com</p>
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
		

