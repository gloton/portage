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
        	$( ".vFlotante").css("left","494px");
        	//expander pestaña
            $(this).css("left","317px");
            //mostrar submenu
            $("#seccion2 .contenedor .wrap_ring > .col2 ul#menuring .vFlotante ul").css("display","block");
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
		<div class="wrap_ring">
			<div class="col1">
				<div id="anillos">
					<img id="areasring" name="areasring" src="images/home/ring/anillo-verde.png" alt="Anillo"  width="318" height="332" border="0" usemap="#arearingseleccionable">
					<map name="arearingseleccionable">
						<area shape="poly" coords="163,41,131,28,118,25,104,25,95,25,87,27,75,30,64,35,52,42,44,49,34,58,27,69,21,81,16,96,13,110,13,121,13,143,15,160,17,168,19,178,33,212,49,239,66,259,94,282,123,298,140,303,147,304,174,306,190,302,212,292,222,283,232,272,239,261,246,248,251,235,253,220,254,201,253,186,252,195,249,203,248,211,245,222,238,234,221,252,215,256,205,260,195,264,177,265,170,265,160,262,151,260,141,256,132,252,124,248,117,243,108,235,99,226,90,216,83,206,76,197,70,184,62,169,59,155,57,141,56,129,56,117,56,111,57,98,61,88,62,81,68,71,74,62,82,55,91,47,99,43,110,38,124,36" href="http://www.kenya.cl" target="_blank" alt="tab1" />
						<area shape="poly" coords="179,64,158,55,147,53,139,53,129,55,117,59,106,65,96,74,91,81,85,93,82,104,81,112,80,130,81,137,83,147,85,154,89,164,93,174,98,184,104,193,110,201,117,209,129,219,147,229,165,236,193,237,217,224,228,212,235,199,238,189,240,177,239,159,236,177,233,184,230,190,223,198,216,205,204,210,195,212,186,212,175,210,163,206,156,203,147,196,137,188,130,179,124,170,117,158,113,148,110,136,109,124,109,113,110,106,113,95,116,86,122,77,131,69,141,64,149,62,159,61" href="http://www.plataformagroup.cl" target="_blank" alt="tab2" />
						<area shape="poly" coords="195,80,190,78,184,76,177,74,166,74,157,77,147,83,141,90,136,97,134,104,134,110,133,117,134,129,136,139,139,147,145,159,151,167,160,176,168,182,174,185,183,189,190,190,200,190,207,189,213,187,220,181,225,175,230,168,233,160,234,152,233,141,230,156,226,163,219,170,210,173,198,174,189,173,181,169,174,164,168,158,162,151,157,142,153,134,151,124,150,112,151,104,154,96,158,90,163,85,169,81,175,79" href="http://www.heavenward.cl" target="_blank" alt="tab3" />
						<area shape="poly" coords="205,95,198,92,189,92,181,96,175,103,173,110,173,120,175,128,179,136,185,143,191,148,200,152,211,153,218,150,223,144,227,135,226,126,224,135,218,141,209,144,201,142,194,137,189,132,185,124,183,116,183,110,185,103,189,98,194,95" href="http://www.odite.cl" target="_self" alt="tab4" />
					</map>				
					
					<!-- 
					<img src="images/home/ring/anillo-verde.png" alt="Anillo verde" />
					 -->
				</div>
			</div>
			<div class="col2">
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
			</div>
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