<?php //Simepre primero esto en todas las paginas exepto index
      include_once "Plantilla.php";

?>
	
	
	<section id="main-content">
        <section class="wrapper">            
	    <div class="row">
	    	<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i>PERSONAS</h3>
				
			</div>
            <div class="panel-body">
                <form class="form-horizontal " method="get">
                    <div class="form-group">
                        
                            <div class="row">
                                <div class="col-lg-6">
						           <select class="form-control m-bot15">
						                <option>Selecionar...</option>
						                <option>DNI</option>
						                <option>Apellido</option>
						                <option>Nombre</option>
						                <option>Celular</option>
						                <option>Direccion</option>
						           </select>
                                </div>
                            
                        </div>
                    </div>
                </form>
            </div>
							<div class="row">
                                <div class="col-lg-6">
                                	<ul class="nav top-menu">                    
                                		<li>
                        					<form class="navbar-form">
                            					<input class="form-control" placeholder="Buscar" type="text">
                        					</form>
                    					</li>                    
                					</ul>  
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
                                      <label class="col-sm-2 control-label">Default</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Help text</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                          <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
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
                      <section class="panel">
                          <div class="panel-body">
                              <form class="form-horizontal " method="get">
                                  <div class="form-group has-success">
                                      <label class="control-label col-lg-2" for="inputSuccess">Input with success</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputSuccess">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="control-label col-lg-2" for="inputWarning">Input with warning</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputWarning">
                                      </div>
                                  </div>
                                  <div class="form-group has-error">
                                      <label class="control-label col-lg-2" for="inputError">Input with error</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputError">
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
		

