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
        <nav class="navbar navbar-light " style="background-color: #e3f2fd;">
            <span class="navbar-brand mb-0 h1 text-primary">GanPres</span>
        </nav>
        <section class="col-md-12  col-sx-12 ">
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
                <div class="carousel-cell">   <img src="imagenes/DS_Imagenes.jpg" alt=""/>  </div>
                <div class="carousel-cell"><img src="imagenes/DS_DEM.jpg" alt=""/> </div>



                <div class="carousel-cell"> <img src="imagenes/PP_Curvas_de_Nivel.jpg" alt=""/>   </div>


            </div>

        </section >

        <section class="col-md-12  col-sx-12 bg-info seccion_desarrollo ">
            <div class="col-md-6  col-sx-12 text-center ">
                <div class="encabezado ">

                    <h3>Potencialidad</h3>
                    <p>La adecuada caracterización de los ambientes en cada establecimiento y lote de producción,
                        es la llave para interpretar el potencial productivo de los mismos. 
                    </p>

                </div>

            </div>
            <div class="col-md-6   col-sx-12 seccion_imagen">
                <img  class="col-md-10" src="imagenes/descarga.jpg" alt=""/>
            </div>
        </section><!--
        <section class="col-md-12 seccion_desarrollo">
            <div class="col-md-6">
                <div class="encabezado" >
                    <h3>Genómica, big data e inteligencia artificial para producir más.</h3>
                    <h4>Investigación y Desarrollo</h4>
                    <p>La ganadería de precisión potencia la producción a partir de tareas de 
                        recopilación de datos y permite planificar procesos productivos ganaderos. 
                    </p>

                </div>

            </div>
            <div class="col-md-6 seccion_imagen">
                <img class="col-md-10 "src="imagenes/ganaderia_0.jpg" alt=""/>
            </div>

        </section >   -->
<!--        <section class="col-md-12 contacto">
            <div class="col-md-6  col-sx-12">
                <div class="encabezado" >
                    <h3 >Contacto</h3>
                    <h4>Investigación y Desarrollo</h4>
                    <p ><img width="24px" height="24px" src="imagenes/icons/baseline-gps_fixed-24px.svg"/>Dirección: Bresalovich 232 B° Bernardino Rivadavia. Formosa - Argentina</p>
                    <p ><img width="24px" height="24px" src="imagenes/icons/baseline-phone-24px.svg"/>+54-3703-4855293</p>
                    <p><img width="24px" height="24px" src="imagenes/icons/baseline-email-24px.svg"/> info@ganaderiadeprecision.informaciontecn.com.ar</p>

                </div>

            </div>
            <div class="col-md-6  col-sx-12 seccion_imagen">
                <form ng-form="fommulario()" role="form" >
                   
                    <div class="form-group col-md-3">
                        <label for="Fecha">Nombre</label>
                        <input type="text" ng-model="form.nombre" class="form-control col-md-3"  aria-describedby="emailHelp" placeholder="Nombre">
                        <small id="emailHelp" class="form-text text-muted">Fecha mal escrita.</small>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="Titulo">E-mail</label>
                        <input type="email" class="form-control" ng-model="form.email" maxlength="70" id="email" placeholder="E-mail">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="Texto">Comentario</label>
                        <textarea class="form-control" ng-model="form.comentario"  rows="10" id="comentario"></textarea>
                        <label class="texto" for="texto">Agregar texto</label>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right col-md-12" ng-value="enviar">Enviar</button>
                </form>

            </div>

        </section > -->






        <!--        <footer class="col-md-12  col-sx-12 pie">
                    <div class="container text-center">
                        <div class="col-md-4  col-sx-12">
                            <ul class="list-unstyled">
                                <li>Inicio</li>
                                <li>Contacto</li>
                                <li>Mapa del sitio</li>
                                <li>Términos y Condiciones</li>
                            </ul>
        
                        </div>
                        <div class="col-md-4  col-sx-12 col-md-offset-2">
                            <ul class="list-unstyled">
                                <li>Nosotros</li>
                                <li>Actualidad</li>
                                <li>Agronegocios</li>
                                <li>Columnistas</li>
                            </ul>
        
                        </div>
        
        
                    </div>  / .container 
                </footer>-->
    </body>
</html>
<script>
    $('.main-carousel').flickity({
        // options
        cellAlign: 'right',
        contain: true
    });
</script>