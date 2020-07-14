<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ASADI</title>
        <link rel="shortcut icon" href="/style/images/logo.ico" />
        <!--
Proyecto ASADI

-->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Tooplate" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <link rel="stylesheet" href="/style/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/style/css/font-awesome.min.css" />
        <link rel="stylesheet" href="/style/css/animate.css" />
        <link rel="stylesheet" href="/style/css/owl.carousel.css" />
        <link rel="stylesheet" href="/style/css/owl.theme.default.min.css" />

        <!--  -->
        <link rel="stylesheet" href="/style/css/tooplate-style.css" />
    </head>
    <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>
            </div>
        </section>

        <!-- HEADER  INFORMACION DE ASADI-->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-5">
                        <p>Bienvenido a nuestra página web</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                        <span class="phone-icon"><i class="fa fa-phone"></i> 2245-0205</span>
                        <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 12:00 MD </span>
                        <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">elsalvador.asadi@gmail.com</a></span>
                    </div>
                </div>
            </div>
        </header>

        <!-- MENU -->
        <section class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO -->
                    <img src="/style/images/logo.png" alt="" title="" /> <a href="index.html" class="navbar-brand">Asociación Salvadoreña de Diabetes </a>
                </div>

                <!-- MENU -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#top" class="smoothScroll">Inicio</a></li>
                        <li><a href="#about" class="smoothScroll">Historia</a></li>
                        <li ><a class="smoothScroll" href="{{ route('quehacemos')}}">@lang('¿Quiénes Somos?') </a></li>
                        <li><a href="#google-map" class="smoothScroll">Contactos</a></li>
                        <li class="appointment-btn"><a href="enviar_mensaje.php">Enviar mensaje</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- BANNERS -->
        <section id="home" class="slider" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="item item-first">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>¡AL SERVICIO DE TU SALUD!</h3>
                                    <h1>Asociación Salvadoreña de Diabetes</h1>
                                    <a href="#about" class="section-btn btn btn-default smoothScroll">Leer más</a>
                                </div>
                            </div>
                        </div>

                        <div class="item item-second">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>Acata las medidas necesarias para enfrentar el COVID-19</h3>
                                    <h1>¡Quédate en casa!</h1>
                                    <a href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="section-btn btn btn-default btn-gray smoothScroll">leer más</a>
                                </div>
                            </div>
                        </div>

                        <div class="item item-third">
                            <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                    <h3>Puedes seguir nuestra cuenta de Facebook para mirar todos nuestros videos educativos</h3>
                                    <h1>¡Síguenos en nuestra cuenta de Facebook!</h1>
                                    <a href="https://es-la.facebook.com/combatamosladiabetesconeducacion/" class="section-btn btn btn-default btn-blue smoothScroll">Ver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- NUESTRA HISTORIA -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="wow fadeInUp" data-wow-delay="0.6s">Nuestra Historia</h2>
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <p>
                                    Fundada, en octubre de 1988, por el Dr. Roberto W. Cerritos, con el propósito de que las personas con Diabetes de El Salvador, aprendieran a hacerle frente a esta enfermedad, evitando o retrasando en lo
                                    posible, sus complicaciones.
                                </p>
                            </div>
                            <img src="/style/images/historia.PNG" />
                            <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                <img src="/style/images/drRobertoW.png" class="img-responsive" alt="" />
                                <figcaption>
                                    <br />
                                    <br />
                                    <h3>Dr. Roberto W. Cerritos</h3>
                                    <p>Fundador</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="news2" data-stellar-background-ratio="2.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                            <h2>¿Quiénes Somos?</h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- NEWS THUMB -->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <a href="news-detail.html">
                                <img src="/style/images/news-image1.jpg" class="img-responsive" alt="" />
                            </a>
                            <div class="news-info">
                                <h3><a href="news-detail.html"></a></h3>
                                <p>
                                    Somos una Organización No Gubernamental sin fines de lucro y de utilidad pública.
                                    <br />
                                    <br />
                                    <br />
                                    ASADI se constituyó en la ciudad de San Salvador, el 19 de octubre de 1988 con el propósito de educar y asistir a la mayor parte de los pacientes con diabetes en todas las modalidades conocidas en el
                                    terrotorio nacional.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- QUIENES SOMOS-->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <a href="news-detail.html">
                                <img src="/style/images/news-image2.jpg" class="img-responsive" alt="" />
                            </a>
                            <div class="news-info">
                                <h3>MISIÓN</h3>
                                <p>
                                    Educar a las personas con Diabetes en El Salvador con el propósito que aprendan a convivir con ella, así como a su grupo familiar para enseñarles a prevenirla y juntos alcanzar una mejor calidad de vida.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                            <a href="news-detail.html">
                                <img src="/style/images/news-image3.jpg" class="img-responsive" alt="" />
                            </a>
                            <div class="news-info">
                                <h3>VISIÓN</h3>
                                <p>Ser una institución superavitaria, líder en educación diabetológica, dirigida a la población de pacientes diabéticos en El Salvador.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="news" data-stellar-background-ratio="2.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!-- MÁS INFO -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.1s"></div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- NEWS THUMB -->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <a href="credenciales.html">
                                <img src="/style/images/vacuna.jpg" class="img-responsive" alt="" />
                            </a>
                            <div class="news-info">
                                <h3><a href="credenciales.html">Nuestras credenciales</a></h3>
                                <h3><a href="credenciales.html"></a></h3>
                                <p>En este espacio puedes leer más acerca de nuestras credenciales.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- NEWS THUMB -->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <a href="filiales.html">
                                <img src="/style/images/credencial.jpg" class="img-responsive" alt="" />
                            </a>
                            <div class="news-info">
                                <h3><a href="filiales.html">Nuestras filiales</a></h3>
                                <p>En este espacio puedes leer más acerca de las filiales de ASADI en todo el país.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <!-- NEWS THUMB -->
                        <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                            <a href="quehacemos.html">
                                <img src="/style/images/doctora.jpg" class="img-responsive" alt="" />
                            </a>
                            <div class="news-info">
                                <h3><a href="quehacemos.html">¿Qué hacemos?</a></h3>
                                <p>En este espacio te darás cuenta más a detalle la función de ASADI.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GOOGLE MAP -->
        <section id="google-map">
            <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.5592721149887!2d-89.22032313538062!3d13.700812469437281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63305cc624a9c7%3A0x630e484bd0c5ad3b!2sAsociacion%20Salvadore%C3%B1a%20De%20Diabeticos%20%C2%ABASADI%C2%BB!5e0!3m2!1ses-419!2ssv!4v1593881741677!5m2!1ses-419!2ssv"
                width="100%"
                height="350"
                frameborder="0"
                style="border: 0;"
                allowfullscreen
            ></iframe>
        </section>

        <!-- FOOTER -->
        <footer data-stellar-background-ratio="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-thumb">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Información de contacto</h4>
                            <p>Puedes entrar en contacto con nosotros a través de nuestro número telefónico o nuestro correo electrónico.</p>

                            <div class="contact-info">
                                <p><i class="fa fa-phone"></i> 2245-0205</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="#">elsalvador.asadi@gmail.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="footer-thumb">
                            <div class="opening-hours">
                                <h4 class="wow fadeInUp" data-wow-delay="0.4s">Estamos abiertos</h4>
                                <p>Lunes - Viernes <span>08:00 AM - 12:00 MD</span></p>
                            </div>

                            <ul class="social-icon">
                                <li><a href="https://es-la.facebook.com/pg/combatamosladiabetesconeducacion/about/?ref=page_internal" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                <li><a href="https://twitter.com/ASADI_sv?s=20" class="fa fa-twitter"></a></li>
                                <li><a href="https://www.instagram.com/asadi_elsalvador/?igshid=198qch2v8ytp2" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- SCRIPTS -->
        <script src="/style/js/jquery.js"></script>
        <script src="/style/js/bootstrap.min.js"></script>
        <script src="/style/js/jquery.sticky.js"></script>
        <script src="/style/js/jquery.stellar.min.js"></script>
        <script src="/style/js/wow.min.js"></script>
        <script src="/style/js/smoothscroll.js"></script>
        <script src="/style/js/owl.carousel.min.js"></script>
        <script src="/style/js/custom.js"></script>
    </body>
</html>
