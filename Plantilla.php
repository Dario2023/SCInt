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
	    <!-- Bootstrap CSS -->    
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- bootstrap theme -->
	    <link href="css/bootstrap-theme.css" rel="stylesheet">
	    <!--external css-->
	    <!-- font icon -->
	    <link href="css/elegant-icons-style.css" rel="stylesheet" />
	    <link href="css/font-awesome.min.css" rel="stylesheet" />    
	    <!-- full calendar css-->
	    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
		<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
	    <link rel="stylesheet" href="css/fullcalendar.css">
		<link href="css/widgets.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	    <!-- CSS para el degradado -->
	    <link href="css/style-responsive.css" rel="stylesheet" />
		<link href="css/xcharts.min.css" rel=" stylesheet">	
		<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	</section>
	<!-- CSS end -->
  </head>

  <body>
  	<!-- container section start -->
	
	<!--header start-->
  	<section id="container">
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
	                                <a href="#"><i class="icon_profile.jpg"></i>Perfil</a>
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
		<!-- <script src="js/jquery-ui-1.10.4.min.js"></script> -->
	    <!-- bootstrap -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- nice scroll -->
	    <script src="js/jquery.scrollTo.min.js"></script>
	    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
	    <!-- charts scripts -->
	    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
	    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
	    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
	    <script src="js/owl.carousel.js" ></script>
	    <!-- jQuery full calendar -->
	    <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
		<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
	    <!--script for this page only-->
	    <script src="js/calendar-custom.js"></script>
		<script src="js/jquery.rateit.min.js"></script>
	    <!-- custom select -->
	    <script src="js/jquery.customSelect.min.js" ></script>
		<script src="assets/chart-master/Chart.js"></script>
	   
	    <!--custome script for all page-->
	    <script src="js/scripts.js"></script>
	    <!-- custom script for this page-->
	    <script src="js/sparkline-chart.js"></script>
	    <script src="js/easy-pie-chart.js"></script>
		<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="js/jquery-jvectormap-world-mill-en.js"></script>
		<script src="js/xcharts.min.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/gdp-data.js"></script>	
		<script src="js/morris.min.js"></script>
		<script src="js/sparklines.js"></script>	
		<script src="js/charts.js"></script>
		<script src="js/jquery.slimscroll.min.js"></script>
	 
		<!-- Grafico de torta start-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="js_graficos/highcharts.js"></script>
		<script src="js_graficos/modules/exporting.js"></script>
		<!-- Grafico de torta end-->
	</section>
	<!-- container javascripts end-->
	 
	  
	  
  </body>
</html>

