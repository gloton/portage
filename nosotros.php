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
	<script src="js/fonts/DINCond-Medium_500.font.js" type="text/javascript"></script>
	<script src="js/fonts/DINCond-Regular_500.font.js" type="text/javascript"></script>
	<script src="js/fonts/Helvetica_Neue_400-Helvetica_Neue_700-Helvetica_Neue_italic_400-Helvetica_Neue_italic_700.font.js" type="text/javascript"></script>
	<script src="js/jquery-timer/jquery-timer.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace(".menu, .menu_topright, #seccion4",{fontFamily:"DIN Alternate","font-weight":700});
		Cufon.replace(".boxarticulo p",{fontFamily:"DIN"});
		Cufon.replace(".boxarticulo h5,ul.menu_rightbelow a",{fontFamily:"DIN Alternate","font-weight":700});
		Cufon.replace(".vFlotante ul li h5",{fontFamily:"DIN Alternate Medium"});
		Cufon.replace(".vFlotante .titu_menuring",{fontFamily:"DIN Alternate Medium"});
		Cufon.replace(".vFlotante .subtitu_menuring,#seccion4",{fontFamily:"DIN Alternate Light"});
		Cufon.replace(".text_tab, #titudescr",{fontFamily:"DINCond-Medium"});
		Cufon.replace(".parrafodesc",{fontFamily:"Helvetica Neue"})
		Cufon.replace("#wrap_component_nosotros h5,#wrap_component_nosotros p",{fontFamily:"Helvetica Neue","font-weight":700});
		//Cufon.replace(".frase",{fontFamily:"DINCond-Regular"});
	</script>
	<script type="text/javascript">
	$(document).ready( function (){
		
        //expander pestaña actualmente cliqueada y contraer los demas
        $( ".vFlotante").click(function (event){
            
            //contraer pestañas
        	$( ".vFlotante").css({'left' : '494px', 'backgroundColor' : "transparent"});
        	$(".vFlotante").removeClass("active");
        	
        	//esconder submenus
        	$(".vFlotante ul").css("display","none");
        	
        	//expander pestaña
            $(this).css("left","317px");
            var id_tab = $(this).attr("id");

            switch (id_tab) {
	            case "item2_ring":
	            	$("#areasring").attr("src","images/home/ring/anillo-naranjo.png");
	            	arriba = "-74px";
	            	colorfondo = "#FA653D";
					break;
	            case "item3_ring":
	            	$("#areasring").attr("src","images/home/ring/anillo-amarillo.png");
	            	colorfondo = "#FCC62B";
	            	arriba = "-158px";
					break;
	            case "item4_ring":
	            	$("#areasring").attr("src","images/home/ring/anillo-todos-colores.png");
	            	colorfondo = "#57B3D4";
	            	arriba = "-252px";
					break;
	            default:
	            	$("#areasring").attr("src","images/home/ring/anillo-verde.png");
	            	colorfondo = "#009142";
	            	arriba = "30px";
        	}

        	//expander pestaña
            $(this).css({'left' : '317px', 'backgroundColor' : colorfondo});
            $(this).addClass("active");
            //mostrar submenu solo del tab seleccionado
            id_tab_elegido = $(this).attr("id");
            $("#"+id_tab_elegido+".vFlotante ul").css({'display' : 'block', 'top' : arriba});

            event.preventDefault();
      	});

		/*TRABAJAR CON GRAFICO ANILLO*/
        //abre pestaña por defecto
        $( '#item1_ring' ).trigger('click' );
        
        //trabajar con areas del grafico anillo
        $("#areatab1").click(function() {
			$( '#item1_ring' ).trigger('click' );
		});
        $("#areatab2").click(function() {
			$( '#item2_ring' ).trigger('click' );
		});
        $("#areatab3").click(function() {
			$( '#item3_ring' ).trigger('click' );
		});
        $("#areatab4").click(function() {
			$( '#item4_ring' ).trigger('click' );
		});

        //abrir en cada cierto tiempo un tab
		nro_tab = 1;	
		$.timer(15000, function(temporizador){
			   id_item_ring = "#item" + nro_tab + "_ring";
			   $(id_item_ring).trigger('click' );
			   nro_tab++;
			   if (nro_tab == 5) {
				   nro_tab = 1;
				   temporizador.reset(15000);
			   }
		});  

		//click para ir a enlaces en submenus ring
		$("#portage_pfc").click(function (event) {
			//alert("Ir al enlace de portage pfc");
			location.href="http://www.yahoo.com"
			event.preventDefault();
		});   
		$("#portage_parc").click(function (event) {
			alert("Ir al enlace de portage_parc");
			event.preventDefault();
		});   
		$("#portage_aware").click(function (event) {
			alert("Ir al enlace de portage_aware");
			event.preventDefault();
		});   
		$("#portage_aware_insight").click(function (event) {
			alert("Ir al enlace de portage_aware_insight");
			event.preventDefault();
		});   
		$("#portage_ffp").click(function (event) {
			alert("Ir al enlace de portage_aware_insight");
			event.preventDefault();
		});   

		/*TRABAJO CON MENU SECCION 1*/
		$("#seccion1 header .col2 ul.menu li").click(function(event){
			$("ul",this).css("display","block");
			event.preventDefault();
		});

		$(".menu li:not(.active)").click( function(event) {
			$("#seccion1 header .col2 ul.menu li > ul").css("display","none");
			event.stopPropagation();
		});		
		
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
	<style type="text/css">
		#seccion2 .contenedor .wrap_ring > .col1 {
			float: left;
			height: 376px;
			overflow: hidden;
			width: 534px;
		}
		#seccion2 .contenedor .wrap_ring > .col2 {
			float: left;
			height: 376px;
			overflow: hidden;
			width: 426px;
		}	
	</style>
</head>
<body>
<div id="seccion1" class="clearfix">
	<div class="contenedor">
		<header>
			<div class="col1">
				<img src="images/logo-portage.png" alt="Logo Portage Tech" />
			</div>
			<div class="col2">
				<ul class="menu">
					<li class="parent current active">
						<a href="#">NOSOTROS</a>
						<ul>
							<li class="active"><a href="#">COMPAÑÍA</a></li>
							<li><a href="#">VISIÓN Y VALORES</a></li>
							<li><a href="#">PORTAGE EN EL MUNDO</a></li>
							<li><a href="#">RSE</a></li>
							<li><a href="#">ALIANZAS</a></li>
						</ul>
						<div class="clearfix"></div>
					</li>
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
			<div class="col1" style="width: 400px;">
				<div id="wrap_grafico_nosotros" style="padding-left: 8px; padding-top: 22px;">
					<img src="images/nosotros/trabajador.png" alt="Trabajador" />
				</div>
			</div>
			<div class="col2" style="width: 560px; background: none;">
				<div id="wrap_descripcion_nosotros">
					<div id="fila1" style="height: 450px; text-align: center; margin-top: 50px;">
						<p id="titudescr" style="font-size: 30px; color: #6EAAE2; width: 320px; margin-bottom: 30px;">Solutions in Optimization <br />for Mineral Processing Plants</p>
						<p class="parrafodesc">PORTAGE is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since 
						the 1500s, when an unknown printer took a galley of type and scrambled
						it to make a type specimen book. It has survived not only five centuries.
						</p>
						<p class="parrafodesc">It was popularised in the 1960s with the release of Letraset sheets and 
						more recently with desktop publishing software like Aldus PageMaker 
						including versions of Lorem Ipsum.
						</p>
					</div>
					<div id="fila2"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div id="seccion3">
	<div class="contenedor">
		<div id="contenido">
			<div id="wrap_component_nosotros">
				<div class="col1" style="float: left; padding-top: 30px; padding-left: 30px; width: 330px;">
					<h5 style="margin-bottom: 6px;">There are many variations</h5>
					<p style="width: 305px">Of passages of Lorem Ipsum available, but the 
					majority have suffered alteration in some form, 
					by injected humour, or randomised words which
					don't look even slightly believable.</p>
				</div>
				<div class="col2" style="float: left; width: 560px; padding-top: 30px; padding-left: 40px;">
					<h5 style="margin-bottom: 3px;">All the Lorem Ipsum generators</h5>
					<p style="width: 464px">On the Internet tend to repeat predefined chunks as necessary, making
					this the first true generator on the Internet. It uses a dictionary of over 200
					Latin words, combined with a handful of model sentence structures, to 
					generate Lorem Ipsum which looks reasonable.
					</p>			
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
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