<?php
  /**
  * Inicio del sistema
  *
  * @package    ModeloAulafrontino
  * @license    http://www.gnu.org/licenses/gpl.txt  GNU GPL 3.0
  * @author     Equipo de desarrollo Aula Frontino <aulafrontino@gmail.com>
  * @link       https://github.com/EquipoAulaFrontino
  * @version    v1.0
  */
    session_start(); //inicia la session, la cual permite trabajar con la variable $_SESSION
    $msj=(isset($_SESSION['msj']))?$_SESSION['msj']:"";
    $vista=(isset($_GET['vista']))?$_GET['vista']:"";//toma el valor que se guarda en la variable vista que está en la URL.
    if($msj) //verifica si existe algún texto en el arreglo msj de la variable $_SESSION
    {
        echo '<script>alert("'.$msj.'");</script>'; // si existia un mensaje este lo imprime mediante un alert!
        unset($_SESSION['msj']); //borra lo que habia en la variable.
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Universidad Nacional Experimental de la Seguridad</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Cesar Armas">
    
    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/misc.css">
    <link rel="stylesheet" href="css/blue-scheme.css">
    
    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <link rel="shortcut icon" href="#" type="image/x-icon" />

</head>
<body>

    <div class="responsive_menu">

        <ul class="main_menu">
           <li><a href="#">Universidad</a>
                <ul>
                    <li><a href='vista/Historia.php'>Historia de la Uness</a></li>

                    <li><a href='vista/Mision-y-Vision.php'>Mision y Vision</a></li>

                    <li><a href='vista/Consejo-Universitario.php'>Organigrama Universitario</a></li>
                                        
                </ul>
                                
            </li>
                                
                                

             <li><a href='vista/Ubicacion.php'>Ubicacion</a></li>

             <li><a href="vista/login.php">Login</a></li>
             
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->
 

    <header  class="site-header clearfix">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="pull-left logo">
                        <a href=""# >
                            <img src="images/logo.png" width="150px">
                        </a>
                    </div>  <!-- /.logo -->
                    

                    <div class="main-navigation pull-right">
                        <nav class="main-nav visible-md visible-lg">
                            <ul class="sf-menu">


                                <li class="active"><a href="#">Inicio</a></li>
                                <li><a href="#">Universidad</a>
                                    <ul>
                                        <li><a href='vista/Historia.php'>Historia de la Uness</a></li>

                                        <li><a href='vista/Mision-y-Vision.php'>Mision y Vision</a></li>

                                        <li><a href='vista/Consejo-Universitario.php'>Organigrama Universitario</a></li>

                                                                               
                                    </ul>
                                </li>                               

                                <li><a href='vista/Ubicacion.php'>Ubicacion</a></li>
                                <li><a href='vista/Iniciar.php'>Ingresar</a></li>



                          </ul> <!-- /.sf-menu -->


                    </nav> <!-- /.main-nav -->

                       
                        <!-- This one in here is responsive menu for tablet and mobiles -->
                        <div class="responsive-navigation visible-sm visible-xs">
                            <a href="" class="menu-toggle-btn">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> <!-- /responsive_navigation -->
                        

                    </div> <!-- /.main-navigation -->

                </div> <!-- /.col-md-12 -->

             <div class="row">
            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </header> <!-- /.site-header -->

    <section id="homeIntro" class="parallax first-widget">
        <div class="parallax-overlay">
            <div class="container home-intro-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Universas Nacional Experimental de la Seguridad </h2>
                       
                        
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </section> <!-- /#homeIntro -->

   
    <section class="light-content services">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-suitcase fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Plan Naciona de Formacion en:</h3>
                            <p>Bomberil en Ciencias del Fuego y Seguridad Contra Incendios.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-suitcase fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Plan Naciona de Formacion en:</h3>
                            <p>
                                Servicio Policial.
                            </p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-suitcase fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Plan Naciona de Formacion en:</h3>
                            <p>Investigacion Policial.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

            </div>

            <div class="row">
                
                

                <div class="col-md-4 col-sm-4" >
                    <div class="service-box-wrap">
                        <div class="service-icon-wrap">
                            <i class="fa fa-suitcase fa-2x"></i>
                        </div> <!-- /.service-icon-wrap -->
                        <div class="service-cnt-wrap">
                            <h3 class="service-title">Plan Naciona de Formacion en:</h3>
                            <p>Criminalistica.</p>
                        </div> <!-- /.service-cnt-wrap -->
                    </div> <!-- /.service-box-wrap -->
                </div> <!-- /.col-md-4 -->

                

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.services -->


        <section class="testimonials-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bxslider">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Hugo Rafael Chavez Frias</span>
                                <p class="testimonial-description">"Es mentira que Venezuela sea el país que más gasta en armas. Es al réves, somo de los que menos compra".</p>
                            </div> 
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Hugo Rafael Chavez Frias</span>
                                <p class="testimonial-description">"El socialismo tiene mucho humanismo, de amor de solidaridad; el socialismo es inclusión social".</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Hugo Rafael Chavez Frias</span>
                                <p class="testimonial-description">"No haremos el futuro grande que estamos buscando si no conocemos el pasado grande que tuvismo".</p>
                            </div>
                        </div>
                    </div> <!-- /.bxslider -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.testimonials-widget -->


    <section class="dark-content portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Enlaces de Interes</h2>
                        
                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        


        <div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                               
                                <h3 class="portfolio-title"><a href="http://www.unes.edu.ve/index.php/calendario-academico/">Calendario Academico</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/includes/project1.png" title="Calendario Academico">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="images/includes/project1.png" alt="Calendario Academico">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                
                                <h3 class="portfolio-title"><a href="http://intranet.unes.edu.ve/recursos/pdf/lineasdeinvestigacion.pdf">Lineas de Investigacion</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/includes/project2.jpg" title="Lineas de Investigacion">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="images/includes/project2.jpg" alt="Lineas de Investigacion">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                <h3 class="portfolio-title"><a href="http://www.unes.edu.ve/index.php/medios-digitales-2/">Medios Digitales</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/includes/project3.jpg" title="Awesome Theme">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="images/includes/project3.jpg" alt="Awesome Theme">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                                
                                <h3 class="portfolio-title"><a href="http://intranet.unes.edu.ve/recursos/pdf/listadopnfa.pdf">Listado</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/includes/project4.jpg" title="Volton Personal Site">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="images/includes/project4.jpg" alt="Volton Personal Site">
                </div>
            </div> <!-- /.item -->
            <div class="item">
                <div class="thumb-post">
                    <div class="overlay">
                        <div class="overlay-inner">
                            <div class="portfolio-infos">
                             
                                <h3 class="portfolio-title"><a href="http://www.unes.edu.ve/">Escuchanos</a></h3>
                            </div>
                            <div class="portfolio-expand">
                                <a class="fancybox" href="images/includes/project5.jpg" title="Rectangle Design">
                                    <i class="fa fa-expand"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <img src="images/includes/project5.jpg" alt="Rectangle Design">
                </div>
            </div> <!-- /.item -->
           
        </div> <!-- /#owl-demo -->
    </section> <!-- /.portfolio-holder -->

  
    

    <footer class="site-footer">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright-text" >

                    Universidad Nacional Experimental de la Seguridad 
                    <br>
                    RIF: G-20009211-4
                    <br>
                     </p>
                     <p style="text-align: center; ,font-size: 8px ">
                    Licencia Creative Commons Esta obra está bajo una Licencia Creative Commons </br>Distribución-NoComercial-CompartirIgual 4.0 Internacional.
                    <br>
                    <img src="Images/cc.png">
                    </p>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->


    <!-- Scripts -->
    <script src="js/min/plugins.min.js"></script>
    <script src="js/min/medigo-custom.min.js"></script>

</body>
</html>