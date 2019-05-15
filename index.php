<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery/jquery-2.1.3.min.js" type="text/javascript"></script>
        <script src="jquery/angular.min.js" type="text/javascript"></script>
        <link href="estilos.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/flickity.pkgd.min.js" type="text/javascript"></script>
        <link href="jquery/flickity.css" rel="stylesheet" type="text/css"/>


        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript"></script>

        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    </head>
    <body>
        <A name="Principio"></A>
        <nav class="navbar  navbar-light bg-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ganaderia_Pres</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#contacto">Contacto <span class="sr-only">(current)</span></a></li>
                        <li><a href="productos.php">Productos</a></li>
                    </ul>
                </div>
            </div>    
        </nav>


        <section  class="col-md-12  col-sx-12 seccion_desarrollo ">
            <div class="col-md-6  col-sx-12">
                <div class=" encabezado encabezado_encabezado">
                    <h3 class="lead">Ganaderia de Precisión</h3>
                    <h3>Desarrollando</h3>
                    <p>La ganadería de precisión potencia la producción a partir de tareas de 
                        recopilación de datos y permite planificar procesos productivos ganaderos. 
                    </p>

                </div>

            </div>
            <div class="main-carousel col-md-6  col-sx-12">
                <div class="carousel-cell">   <img src="imagenes/utimas/DS_Imagenes.jpg" alt=""/>  </div>
                <div class="carousel-cell"><img src="imagenes/utimas/PP_Curvas_de_Nivel.jpg" alt=""/> </div>
                <div class="carousel-cell"> <img src="imagenes/utimas/DS_DEM.jpg" alt=""/>   </div>
                <div class="carousel-cell"> <img src="imagenes/utimas/PP_Fisonomia y Receptividad.jpg" alt=""/>   </div>
                <div class="carousel-cell"> <img src="imagenes/utimas/PP_Fisonomia_y_Potreros.jpg" alt=""/>   </div>
                <div class="carousel-cell"> <img src="imagenes/utimas/PP_Vias_Escurrimiento.jpg" alt=""/>   </div> 
            </div>

        </section >

        <section class="col-md-12  col-sx-12 bg-info seccion_desarrollo2 ">
            <div class="col-md-6  col-sx-12 text-center ">
                <div class="encabezado ">

                    <h3>Potencialidad</h3>
                    <p>La adecuada caracterización de los ambientes en cada establecimiento y lote de producción,
                        es la llave para interpretar el potencial productivo de los mismos. 
                    </p>

                </div>

            </div>
            <div class="col-md-6   col-sx-12 seccion_imagen text-center">
                <img  class="col-md-10" src="imagenes/descarga.jpg" alt=""/>
            </div>
        </section>

        <section class="col-md-12 seccion_desarrollo2">

            <div class="col-md-6">
                <div class="encabezado" >
                    <h3>Big data e inteligencia artificial para producir más.</h3>
                    <h4>Investigación y Desarrollo</h4>
                    <p>La ganadería de precisión potencia la producción a partir de tareas de 
                        recopilación de datos y permite planificar procesos productivos ganaderos. 
                    </p>

                </div>

            </div>
            <div class="col-md-6 seccion_imagen text-center">
                <img class="col-md-10 "src="imagenes/ganaderia_0.jpg" alt=""/>
            </div>

        </section >   
        <section class="col-md-12 col-sx-12 contacto">
            <div class="col-md-6  col-sx-12">
                <div class="encabezado" >
                    <h3 >Contacto</h3>
                    <h4>Investigación y Desarrollo</h4>
                    <p ><img width="24px" height="24px" src="imagenes/icons/baseline-gps_fixed-24px.svg"/>Dirección: Bresalovich 232 B° Bernardino Rivadavia. Formosa - Argentina</p>
                    <p ><img width="24px" height="24px" src="imagenes/icons/baseline-phone-24px.svg"/>+54-3703-4855293</p>
                    <p><img width="24px" height="24px" src="imagenes/icons/baseline-email-24px.svg"/> info@ganaderiadeprecision.informaciontecn.com.ar</p>

                </div>

            </div>
            <A name="contacto"></A>
            <div class="col-md-6  col-sx-12 " >
                <form ng-form="fommulario()" role="form" >

                    <div class="form-group col-md-3 col-sx-3">
                        <label for="Fecha">Nombre</label>
                        <input type="text" ng-model="form.nombre" class="form-control col-md-3"  aria-describedby="emailHelp" placeholder="Nombre">
<!--                        <small id="emailHelp" class="form-text text-muted">Fecha mal escrita.</small>-->
                    </div>
                    <div class="form-group col-md-5 col-sx-5">
                        <label for="Titulo">E-mail</label>
                        <input type="email" class="form-control" ng-model="form.email" maxlength="70" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-12 col-sx-12">
                        <label for="Texto">Comentario</label>
                        <textarea class="form-control" ng-model="form.comentario"  rows="10" id="comentario"></textarea>
                        <label class="texto" for="texto">Agregar texto</label>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right col-md-12  col-sx-5" ng-value="enviar">Enviar</button>
                </form>

            </div>

        </section > 
  
        <section class="col-md-12 seccion_desarrollo2">

            <div class="col-md-6">
                <div  >
                    <div id="googleMap" style="width:100%;height:350px;"></div>

                </div>

            </div>
            <div class="col-md-6  text-center" style="padding-top: 15px;">
                <img class="col-md-10" height="350px" src="imagenes/ganaderia_0.jpg" alt=""/>
            </div>
            <h3 class="text-center" > Control Ganadero  </h3>   
        </section >  
        <footer class="col-md-12  col-sx-12 pie">

            <div class="container  " style="padding-top: 40px; height: 150px;">
                <div class="col-md-4  col-sx-12">
                    <ul class="list-unstyled">
                        <li><a href="#Principio"> Inicio</a></li>
                        <li><a href="#contacto">Contacto</a></li>

                    </ul>

                </div>
                <div class="col-md-4  col-sx-12 col-md-offset-2">
                    <ul class="list-unstyled">
                        <li><a href="productos.php">Productos</a></li>



                    </ul>

                </div>



            </div> 
            <div class="footer-copyright text-center pie_contacto"> info@ganaderiadeprecision.informaciontecn.com.ar  <span class="alert">Bresalovich 232 B° Bernardino Rivadavia. Formosa - Argentina </span> </div>
        </footer>
    </body>
</html>
<script>
    $('.main-carousel').flickity({
        // options
        cellAlign: 'right',
        contain: true
    });
</script>
      <script>
     
          var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {lat: -26.178038, lng: -58.421481}, 
             mapTypeId: google.maps.MapTypeId.SATELLITE,
            zoom: 14
        });
         var marker = new google.maps.Marker({
            position: {lat: -26.178038, lng: -58.421481}, 
            map: map,
            title: 'Ganado Cruza'
        });
          var marker1 = new google.maps.Marker({
            position: {lat: -26.177014, lng: -58.419335}, 
            map: map,
            title: 'Ganado Cruza'
        });
    };
        </script>
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Oze_7-1VAaRQncH5roDSaiWoU2VDlpQ&callback=initMap"
async defer></script>