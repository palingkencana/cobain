

</div>
<?php
require("./funciones/conex.php");
$conex=Conexion();
$noticias=mysqli_query($conex,"SELECT * FROM `noticias` ORDER BY `fecha` DESC LIMIT 4");


?>
<html>
<head>
<title>IMCUFIDEZ  Zinacantepec</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./css/estilo.css">
<link rel="stylesheet" type="text/css" href="./css/actividad.css">
<link rel="stylesheet" type="text/css" href="./css/slider.css">
<link rel="stylesheet" type="text/css" href="./css/noticias.css">
<link rel="stylesheet" href="./css/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!--<style>body{filter:grayscale(1);}</style>-->
</head>
<body>
<header>
<div class="con_log">
<img class="logo" src="./img/incufidez.png">
<!--<img class="barra" src="./img/barra.png" style="width:100%;padding:0;" />-->
</div>
</header>
<div class="contenedorm">
<nav class="navbar navbar-expand-lg navbar-light ">

  <button class="navbar-toggler float-left" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="eventos.php">Eventos y Convocatorias<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Transparencia
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        
          <a class="dropdown-item" href="conac_imcufidez.php">CONAC</a>
          <a class="dropdown-item" href="https://www.secogem.gob.mx/SAM/sit_atn_mex.asp">Sistema de Atención Mexiquense</a>
        </div>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="contacto.php">Contacto <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="noticias.php">Últimas Noticias <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="reglamentos.php">Reglamentos <span class="sr-only">(current)</span></a>
      </li>




    </ul>
  </div>
</nav>
</div> 
</div> 


 <div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <!--<div class="carousel-item active">
      <img src="./img/carrera.jpg" class="d-block w-90 mx-auto slidimg" alt="...">
    </div>
     <div class="carousel-item ">
      <img src="./img/carr.jpg" class="d-block w-90 mx-auto slidimg" alt="...">
    </div>-->
	<div class="carousel-item active">
      <a class="nav-link" href="https://www.facebook.com/permalink.php?story_fbid=608865068359188&id=100077070994157&ref=embed_post" target="_blank"><img src="./img/CAR5K.jpg" class="d-block w-70 mx-auto  slidimg" alt="..." ></a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="https://www.facebook.com/permalink.php?story_fbid=608822085030153&id=100077070994157&ref=embed_post" target="_blank"><img src="./img/LNZ2025.jpg" class="d-block w-70 mx-auto  slidimg" alt="..." ></a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="https://www.facebook.com/permalink.php?story_fbid=608865068359188&id=100077070994157&ref=embed_post" target="_blank"><img src="./img/CAR5K.jpg" class="d-block w-70 mx-auto  slidimg" alt="..." ></a>
    </div>
    <div class="carousel-item">
      <a class="nav-link" href="https://www.facebook.com/permalink.php?story_fbid=608822085030153&id=100077070994157&ref=embed_post" target="_blank"><img src="./img/LNZ2025.jpg" class="d-block w-100 slidimg" alt="..." ></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
 </div>
 <br>

<div class="container">
<h2 class="titulos_centro">Últimas Noticias</h2>

<div class="notas">
  <?php

foreach($noticias as $nuevo_not){


  echo "<a href='nota.php?id=".$nuevo_not["id"]."'><div class='item_notas'><h5>".$nuevo_not["nombre"]."</h5><img src='./img_not/".$nuevo_not["imagen"]."'></div></a>";

}

disconnectDB($conex);
?>


</div>

</div>

<br>
<br>

<div class="Container">
  <h2 class="titulos_principales">Avisos y Convocatorias</h2>
</div>

 <div class=" container actividades">

  <div class="divicion">

    <div class="item_actividad">
      <img src="./img/locura.jpg">
       <div class="titulo">
        <h5>Aventura Deportiva 2</h5>
       </div>
   </div>
   </div>

   <div class="divicion">
    <div class="item_actividad">
      <img src="./img/infc.jpg">
       <div class="titulo">
        <h5>Décima Carrera del Marisco</h5>
       </div>
   </div>
   </div>
   <div class="divicion">
    <div class="item_actividad">
      <img src="./img/sicced.jpg">
       <div class="titulo">
        <h5>Sistema de Capacitación y Certificación para Entrenadores Deportivos</h5>
       </div>
   </div>
   </div>

    

</div>
    

 <br>
 <br>
<br>
<br>
<!--

<div class="container cuadro1 ">

  <div class=" subcuadro" id="conr">
    <div class="row">
      <div class="col-12 col-md-3 col-lg-3 c1 1">
       <a href="eventos.php">EVENTOS DEPORTIVOS</a>
      </div>
      <div class="col-12 col-md-3 col-lg-3  c2">
      <a href="eventos.php">CONVOCATORIAS</a>
      </div>
      <div class="col-12 col-md-3 col-lg-3  c3">
      <a href="noticias.php">ÚLTIMAS NOTICIAS</a>
      </div>
      <div class="col-12 col-md-3 col-lg-3 c4">
      <a href="#">CONTACTO</a>
      </div>





    </div>



  </div>
</div>

-->
<br>
<!--
<div class="Container">
  <h2 class="titulos_principales">Actividades Deportivas</h2>
</div>


<div class="container mt-2 mb-2 position-relative">
<div class="owl-carousel owl-theme">
            <div class="item">
				<div class="card">
					<img src="./img/king.jpg">
					<div class="content">
          <h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div>
            </div>
            <div class="item">
				<div class="card">
					<img src="./img/boxeo.jpg">
					<div class="content">
          <h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div>  


            </div>
            <div class="item">
			<div class="card">
					<img src="./img/karate.jpg">
					<div class="content">
          <h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div>
            </div>
            <div class="item">
              
			<div class="card">
					<img src="./img/tae.jpg">
					<div class="content">
          <h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div>  



            </div>


            <div class="item">
              
              <div class="card">
                  <img src="./img/atle.jpg">
                  <div class="content">
                  <h1>Información:</h1>
					<h3>7229188002</h3>
                  </div>
                 </div>  
        
        
        
                    </div>
                    <div class="item">
              
              <div class="card">
                  <img src="./img/bas.jpg">
                  <div class="content">
                  <h1>Información:</h1>
					<h3>7229188002</h3>
                  </div>
                 </div>  
        
        
        
                    </div>


            <div class="item">
			<div class="card">
					<img src="./img/mma.jpg">
					<div class="content">
          <h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div>  


            </div>
            
            
            <div class="item">
			<div class="card">
					<img src="./img/ciclis.jpg">
					<div class="content">
					<h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div> 
            </div>

            <div class="item">
			<div class="card">
					<img src="./img/fut.jpg">
					<div class="content">
					<h1>Información:</h1>
					<h3>7229188002</h3>
					</div>
			 	</div> 
            </div>
            
            
          </div>
</div>
-->






























<!--

 <div class="container-fluid  ultimas">
        <div class="container p-4  ">
            <h1 class="ultimas_titulo">Últimas Noticias</h1>
            <p class="ultimas_titulo">Conoce las Acciones más sobresalientes que se realizan por el Gobierno Municipal </p>
           <hr>
            
            <div class="row p-3">
                <div class="col-12 col-md-4 subnota">
                <img class="d-block w-100  popular_img" src="./img/juguete.jpg">
                <h3>Obsequio de Juguetes a niñas y niños del centro de educación Preescolar Juan de la Barrera  </h3>
                <p>Era una promesa que había hecho con la comunidad y con gran emoción, acompañado de mi esposa Jessica Rios Lara, tuvimos la bendición de poder obsequiar un pequeño juguete con motivo de los #ReyesMagos a niñas y niños del Centro de Educación Preescolar Juan de la Barrera y para algunos pequeños de la zona en el Barrio de México en donde desafortunadamente existen muchísimas carencias, pero estaremos trabajando arudamente para poder atender sus necesidades.</p>
                </div>
                
                <div class="col-12 col-md-4 subnota">
                    <img class="d-block w-100  popular_img" src="./img/protesta.jpg">
                    <h3>Primera Sesión Extraordinaria de Cabildo del Ayuntamiento 2022-2024 </h3>
                <p>En la Primera Sesión Extraordinaria de Cabildo del Ayuntamiento 2022-2024 se aprobó el nombramiento y Tomé Protesta de Ley a las y los Servidores Públicos que estarán al servicio de Zinacantepec. </p>
                   
                </div>
                <div class="col-12 col-md-4 subnota">
                    <img class="d-block w-100  popular_img" src="./img/mando.jpg">
                    <h3>Cambio de Mando de los cuerpos de Seguridad Pública  </h3>
                <p>Para dar cumplimiento con lo establecido en la Ley Orgánica Municipal del Estado de México y para velar por la seguridad de #Zinacantepec, en los primeros minutos de este 2022 se realizó el Cambio de Mando de los cuerpos de Seguridad Pública.</p>


                </div>




            </div>



        </div>

</div>


-->

<div id="interes" class="container-fluid">
    <h6>ENLACES DE INTERES</h6>
    
    <div class="row">
        <div class="col-6 col-md-2">
            <a href="https://www.gob.mx/conade"><img id="log"src="https://femeteme.com/wp-content/uploads/2020/10/CONADE-LOGO-300x148.jpg"></a>
        </div>
        <div class="col-6 col-md-2">
           <a href="https://culturaydeporte.edomex.gob.mx/"> <img id="log" src="data:image/png;base64,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"></a>
        </div>
        <div class="col-6 col-md-2">
           <a href="https://www.copame.org.mx/"> <img id="log" src="data:image/png;base64,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"></a>
        </div>
        <div class="col-6 col-md-2">
        <a href="https://www.gob.mx/conade"><img id="log"src="https://femeteme.com/wp-content/uploads/2020/10/CONADE-LOGO-300x148.jpg"></a>
        </div>
        <div class="col-6 col-md-2">
            <a href="https://culturaydeporte.edomex.gob.mx/"> <img id="log" src="data:image/png;base64,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"></a>
        </div>
        <div class="col-6 col-md-2">
             <a href="https://www.copame.org.mx/"><img id="log" src="data:image/png;base64,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"></a>
        </div>
    </div>
</div>


<footer>

<!--<img class="barra_pie" src="./img/barra.png" style="width:100%;padding:0;" />-->

<div class="container p-2 pie">
  <div class="row">
    <div class="col-md-3 cuadro">
    <h6>IMCUFIDEZ</h6>
            <ul>
                <li class="fa fa-caret-right"><a href="cabildo.php">Eventos</a></li>
                <li class="fa fa-caret-right"><a href="sesiones.php">Convocatorias</a></li>
                <li class="fa fa-caret-right"><a href="direcciones.php">Resultados de Eventos</a></li>
               
                


            </ul>


    </div>
    <div class="col-md-3 cuadro">
    <h6>Transparencia</h6>
    <ul>
                <li class="fa fa-caret-right"><a href="https://www.ipomex.org.mx/ipo3/lgt/indice/zinacantepec.web">IPOMEX</a></li>
                <li class="fa fa-caret-right"><a href="">CONAC</a></li>
              
                <li class="fa fa-caret-right"><a href="">SISTEMA DE ATENCIÓN MEXIQUENSE</a></li>
                


    </ul>
    </div>
    <div class="col-md-3 cuadro">
    <h6>Otros Enlaces</h6>
    <ul>
                
                <li class="fa fa-caret-right"><a href="">NOTICIAS</a></li>
                <li class="fa fa-caret-right"><a href="">CONTACTO</a></li>
                
            </ul>
    </div>
    <div class="col-md-3">
    <img id="lox"src="./img/iveda.png">
            <ul class="red">
            <i class="fa fa-facebook-square fa-lg "></i>
            <i class="fa fa-twitter-square fa-lg "></i>
            </ul>



    </div>

  </div>
</div>
<div class="soy">
<h6>INSTITUTO MUNICIPAL DE CULTURA FÍSICA Y DEPORTE DE ZINACANTEPEC</h6>
        <p>Vialidad Toluca - Zinacantepec 413, Vista Nevado Plus, 51350 San Miguel Zinacantepec,Méx.</p>
        <p>(722) 9359763,(722)2188241</p>
</div>
<div class="copi">
        
        
        ©Copyright 2022 | IMCUFIDEZ de Zinacantepec
    </div>
    
</footer>
 <div class="burbuja">
 <ul>
<a href="https://www.facebook.com/Imcufidez-Zinacantepec-101073505801077/?ref=page_internal"><i class="fa fa-facebook fa-lg"></i></a>
<a><i class="fa fa-twitter fa-lg"></i></a>
<a><i class="fa fa-instagram fa-lg"></i></a>

</ul>

 </div>

<div class="btn_arriba" id="btn_arriba">
  <i class="fa fa-arrow-up"></i>
</div>
 

<div class="svn" style="position: absolute; left: -9999px; top: -9999px; width: 1px; height: 1px; overflow: hidden;">
    <a href="https://www.butanofacil.com/">slot 1000</a>
    <a href="https://uvt.unju.edu.ar/">togel online</a>
    <a href="https://germanboard.org/">slot toto</a>
    <a href="https://www.transportesmatos.pt/">toto slot</a>
    <a href="https://watervliethousing.org/">mahjong ways</a>
    <a href="https://www.matosmix.pt/">agen gacor</a>
    <a href="https://slot-toto.germanboard.org/">toto slot gacor</a>
    <a href="http://ecwc.gov.et/nit/">agen gacor</a>
    <a href="https://disbangan.pasarjaya.co.id/dist/">situs toto</a>
    <a href="https://www.shoppersdepr.com/">Sv388</a>
    <a href="https://www.speedlinks.com/">slot pulsa</a>
    <a href="https://www.ismaildeliveredtoday.com/">agen slot</a>
    <a href="https://www.federaciobaleardetrot.com/boletines/">apo388</a>
    <a href="https://www.farmaciasdepr.com/">sv388</a>
    <a href="https://www.fprtm.com/">slot toto</a>
    <a href="https://www.universidaddelpedregal.edu.mx/Recorridovirtual">slot deposit 1000</a>
    <a href="https://www.transportesmatos.pt/">slot</a>
<a href="https://gestorescantabria.org/">slot 1000</a>
</div>


</body>
</html>
<script src="./js/jquery.js"></script>
<script src="./js/menu.js"></script>
<script src="./js/inicio.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<script src="./js/owl.carousel.js"></script>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 3,
                loop: true,
                margin: 7,
				nav:true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
				responsive:{
					0:{
						items:1,
						
					},
					600:{
						items:3,
						
					},
					1000:{
						items:3,
					
					}
				}
              });
              $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [1000])
              })
              $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
              })
            })
          </script>    
