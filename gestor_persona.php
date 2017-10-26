<?php //Simepre primero esto en todas las paginas exepto index
      include_once "Plantilla.php";

?>
	
	
<section id="main-content">

  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-file-text-o"></i>PERSONA</h3>
      </div>
      <div id="nav">
        <div id="main-nav" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="collapse navbar-collapse navbar-center">
              <ul class="nav navbar-nav">
                <li class="scroll active"><a href="#genereal">General</a></li>
                <li class="scroll"><a href="#buscar">Busuqeda</a></li>      
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </section>

  <section id="genereal">
    <div class="container" id="titulo">
      <div class="panel-body">
        <div class="col-lg-12">
          <section class="panel"> 
            <div class="panel-heading" style="background:rgb(42,85,153);" >
              <h2 class="section-title">Informacion Generales</h2>  
            </div>
          </section>  
        </div>    
      </div>
    </div>
    <div class="container" id="subtitulo">
      <div class="panel-body">
        <div class="col-lg-12">
          <section class="panel"> 
            <div class="panel-heading" style="background:rgb(42,85,153);" >
              <h2 class="section-title">Agregar</h2>
            </div>
            <div class="panel-body"><!-- aca va la tabla -->
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
                      <label class="col-sm-2 control-label">DNI</label>
                      <div class="col-sm-10">
                          <input type="text"  class="form-control" style="width: 200px;">
                      </div>     
                  </div>
                   <div class="form-group">
                      <label class="col-sm-2 control-label">CUIL</label>
                      <div class="col-sm-10">
                          <input type="text"  class="form-control" style="width: 200px;">
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
                      <label class="col-sm-2 control-label">SEXO</label>
                      <div class="col-sm-10">
                           <input type="text"  class="form-control" style="width: 60px; ">
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
              
  <section id="buscar">
    <div class="container" id="subtitulo">
      <div class="panel-body">
        <div class="col-lg-12">
          <section class="panel"> 
            <div class="panel-heading" style="background:rgb(42,85,153);" >
              <h2 class="section-title">BUSQUEDA</h2>
            </div>
            <div class="panel-body">
              <form class="na                                                                        vbar-form">
                <div class="form-group">
                    <div class="row"  >
                      <div class="col-sm-4">
                        <input class="form-control" autofocus="true" placeholder="Buscar" type="text" name="busqueda" id="busqueda" style="width: 200px; height: 33px; ">  
                      </div>
                      <label class="col-sm-4 control-label" style="margin: 0px -70px 0px 18px;">TIPO DE EVENTO</label>
                      <div class="col-sm-3"> 
                        <select class="form-control" style="width: 150px;">
                          <option>Seleccionar...</option>
                          <option>Cumpleaños</option>
                          <option>Casamineto</option>
                          <option>Deportivo</option>   
                        </select>  
                      </div> 
                    </div>
                </div>        
                <div class="form-group">
                </div>
              </form>
                  <div class="col-lg-12">
                      <section id="tabla_resultado" style="margin: 20px 0px 0px 10px;">
                        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
                      </section>
                  </div>
            </div>
          </section>
        </div>
      </div>          
    </div>  
  </section>
   
          
            
              
      
                                 
                                 
                              
                                  
                                  
                                          

		
  
