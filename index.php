<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Home - Portage</title>
	<link href="css/reset.css" type="text/css" media="screen" rel="styleSheet" />
	<link href="css/style.css" type="text/css" media="screen" rel="styleSheet" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
	<script src="js/fonts/cufon-yui.js" type="text/javascript" type="text/javascript"></script>
	<script src="js/fonts/DIN_Alternate_Light_300.font.js" type="text/javascript"></script>
	<script src="js/fonts/DIN_400-DIN_Alternate_700.font.js" type="text/javascript"></script>
	<script src="js/fonts/DIN_Alternate_Medium_500.font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace(".menu, .menu_topright, #seccion4",{fontFamily:"DIN Alternate Light"});
		Cufon.replace(".boxarticulo p",{fontFamily:"DIN"});
		Cufon.replace(".boxarticulo h5",{fontFamily:"DIN Alternate","font-weight":700});
	</script>
	<script type="text/javascript">
	$(document).ready( function (){
        //expander pestaña actualmente cliqueada y contraer los demas
        $( ".vFlotante").click(function (event){
            //contraer pestañas
        	$( ".vFlotante").css("left","920px");
        	//expander pestaña
            $(this).css("left","743px");
            //mostrar submenu
            $("#seccion2 .contenedor .col1 ul#menuring .vFlotante ul").css("display","block");
            event.preventDefault();
      	});

        //
             
	});
	
	</script>
	 <!--[if lt IE 9]>
	<script type="text/javascript">
	   document.createElement("nav");
	   document.createElement("header");
	   document.createElement("footer");
	   document.createElement("section");
	   document.createElement("article");
	   document.createElement("aside");
	   document.createElement("hgroup");
	</script>
	<![endif]-->
</head>
<body>
<div id="seccion1">
	<div class="contenedor">
		<header>
			<div class="col1">
				<img src="images/logo-portage.png" alt="Logo Portage Tech" />
			</div>
			<div class="col2">
				<ul class="menu">
					<li><a href="#">NOSOTROS</a></li>
					<li><a href="#">SOLUCIONES</a></li>
					<li><a href="#">PROYECTOS</a></li>
					<li><a href="#">NOTICIAS</a></li>
				</ul>
			</div>
			<div class="col3">
				<ul class="menu_topright">
					<li><a href="#">ENGLISH</a></li>
					<li class="separador_menu_top">|</li>
					<li id="contact_top"><a href="#">CONTACTO</a></li>	
				</ul>
			</div>
		</header>
	</div>
</div>
<div id="seccion2">
	<div class="contenedor">
		<div class="col1">
			<ul id="menuring">
				<li id="item1_ring" class="vFlotante active parent">
					<a href="#">menu1</a>
					<ul>
						<li><a href="">Submenu 1</a></li>
						<li><a href="">Submenu 2</a></li>
					</ul>
				</li>
				<li id="item2_ring" class="vFlotante"><a href="#">menu2</a></li>
				<li id="item3_ring" class="vFlotante"><a href="#">menu3</a></li>
				<li id="item4_ring" class="vFlotante"><a href="#">menu4</a></li>
			</ul>

			<!-- 
			<img src="images/home/relleno-ring.jpg" alt="relleno" />
			 -->
		</div>
	</div>
</div>
<div id="seccion3">
	<div class="contenedor">
		<div id="contenido">
			<div class="col1">
				<div class="boxarticulo">
					<div class="col1">
						<div id="contentarticulo">
							<h5>Lorem Ipsum is simply</h5>
							<p>Dummy text of the printing and typesetting industry. 
							Lorem Ips has been the industry's standar dummy text ever 
							since the 1500.
							</p>
						</div>
					</div>
					<div class="col2">
						<img src="images/articulos/relleno-articulo_ppal.jpg" alt="relleno" />
						<p><a href="#">MÁS NOTICIAS</a></p>					
					</div>
				</div>
			</div>
			<div class="col2">
				<ul class="menu_rightbelow">
					<li id="item_soporte"><a href="">SOPORTE</a></li>
					<li id="item_foro"><a href="">FORO</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div id="seccion4">
	<div class="contenedor">
		<footer>
			<div class="col1">
				<p>© 2013 Portage Technologies Inc.</p>
			</div>
			<div class="col2">
				<ul id="menu_footer">
					<li><a href="">Términos y Condiciones</a></li>
					<li><a href="">Mapa del Sitio</a></li>
				</ul>	
			</div>
		</footer>
	</div>
</div>
	
</body>
</html>