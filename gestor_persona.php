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
    					                <option>Apellido</option>
    					                <option>Nombre</option>
    					                <option>DNI</option>   
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
                            <div class="col-lg-2">
                             <input type="submit" value="Agregar Persona"  onclick="location.href='gestor_persona_cargar_persona.php'" style="position: relative; top: 3px;left: 40px;height: 29px">
                            </div>         
                            </div>
                     	</div>

                        <!-- aca va la tabla -->
                        <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Apellido</th>
                                 <th><i class="icon_profile"></i> Nombre</th>
                                 <th><i class="icon_contacts"></i> Direccion</th>
                                 <th><i class="icon_mobile"></i> Telefono</th>
                                  <th><i class="icon_cog"></i> Accion</th>
                                 
                                 
                              </tr>
                              
                                    <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href= 
                                         title = "Modificar"><i class="icon_plus_alt2"></i></a>
                                      
                                      <a class="btn btn-danger" href= 
                                         title = "Eliminar"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                                  
                                  
                                          
                           </tbody>
                        </table>

                    </div>
                </div>       
                        
            
							
			
		</div>
		</section>
	</section>		
		

