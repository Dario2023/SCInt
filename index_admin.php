<?php //Simepre primero esto en todas las paginas exepto index
      include_once "Plantilla.php";
      
?>

	<section id="main-content">
        <section class="wrapper">            
	    	<div class="row">
	    		<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text"></i>ASISTENCIA</h3>
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
                                      <label class="col-sm-2 control-label">EVENTO</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly" style="width: 200px;">
                                     </div>     
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">MESA</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly" style="width: 200px;">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">INVITADOS</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" readonly="readonly">
                                      </div>
                                  </div>                               
                              </form>
                          </div>
                      </section>
                                            
                  </div>
            </div>
            <div class="row">
                    
                        <div class="col-lg-12">
                        	<table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Apellido</th>
                                 <th><i class="icon_profile"></i> Nombre</th>
                                 <th><i class="icon_datareport_alt"></i> Evento</th>
                              </tr>
                                                               
                           </tbody>
                        </table>
                     	</div>
                    
                </div>     
		</div>
		</section>
	</section>