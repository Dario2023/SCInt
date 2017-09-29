<?php //Simepre primero estos dos en todas las paginas exepto index
      include_once "session.php";
      include_once "db_funciones.php";
      Comprobar_Login_User($Obj_BD);
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SCInt - Admin</title>
    <!-- CSS start -->
    <section id="container">
	    <link href="css/bootstrap-theme.css" rel="stylesheet">
	    <link href="css/elegant-icons-style.css" rel="stylesheet" />
	    <link href="css/style.css" rel="stylesheet">
	</section>
	<!-- CSS end -->
  </head>
  <body>
  	<!-- container section start -->
	
	<!--header start-->
  	<section id="container" class="">
	    <header class="header dark-bg">
	            <div class="toggle-nav">
	                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
	            </div>

	            <!--logo start-->
	            <a href="index_admin.php" class="logo">SCInt <span class="lite">Admin</span></a>
	            <!--logo end-->

	            <!-- user login dropdown start -->
	            <div class="top-nav notification-row">                
	                <ul class="nav pull-right top-menu">
	                  <li class="dropdown">
	                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
	                            <span class="profile-ava">
	                                <img alt="" src="img/avatar1_small.jpg">
	                            </span>
	                            <span class="username"><?php echo $_SESSION['user_name']; ?></span>
	                            <b class="caret"></b>
	                        </a>
	                        <ul class="dropdown-menu extended logout">
	                            <div class="log-arrow-up"></div>
	                            <li class="eborder-top">
	                                <a href="#"><i class="icon_profile"></i>Perfil</a>
	                            </li>
	                            <li>
	                                <a href="logout.php"><i class="icon_key_alt"></i>Salir</a>
	                            </li>
	                        </ul>
	                    </li>
	                </ul>
	            </div>
	            <!-- user login dropdown end -->
	    </header>      
	</section>
	<!--header end-->

	<!--sidebar(barra lateral) start-->
 	<section id="container">                 
	    <aside>
	        <!-- sidebar menu start-->
	        <div id="sidebar"  class="nav-collapse ">
	              <ul class="sidebar-menu">                
	                  <li class="sub-menu">
	                      <a class="" href="index_admin.php">
	                          <i class="icon_house_alt"></i>
	                          <span>Inicio</span>
	                      </a>
	                  </li>          
	                  <li class="sub-menu">
	                        <a class="" href="gestor_persona.php">
	                          <i class="icon_table"></i>
	                          <span>Gestor de Persona</span>
	                        </a>
	                   </li>
	               </ul>
	        </div>
	        <!-- sidebar menu end-->
	    </aside>
	</section> 
	    <!--sidebar end-->
  	<!-- container section end -->
  
	<!-- container javascripts start-->
  	<section id="container">
	    <script src="js/jquery.js"></script>
		<script src="js/jquery-1.8.3.min.js"></script>
	    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
	    <!-- bootstrap -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- nice scroll -->
	    <script src="js/jquery.scrollTo.min.js"></script>
	    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	    <!--custome script for all page-->
    	<script src="js/scripts.js"></script>	   
	</section>
	         
	<!-- container javascripts end-->
	 
	  
	  
  </body>
</html>

