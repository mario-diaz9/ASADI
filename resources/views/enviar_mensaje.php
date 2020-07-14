<!DOCTYPE html>
<html lang="en">
<head>

     <title>Formulario ASADI</title>
<link rel="shortcut icon" href="images/logo.ico">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER INFO ASADI-->
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
                    
                    <!-- lOGO TEXT HERE -->
                    <img src="images/logo.png" alt="" title=""> <a href="index.html" class="navbar-brand">Asociación Salvadoreña 
                    de Diabetes
                        </a>
               </div>

               <!-- MENU -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                         <li class="appointment-btn"><a href="index.html">Inicio</a></li>
                    </ul>
               </div>

          </div>
     </section>

 <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACTO FORMULARIO -->
                        <section id="contact-page">
        <div class="container">
        <form action="" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nombre</label>
      </div>
      <div class="col-75">
        <input style=" border-radius: 9px 9px 9px 9px; border-color: gainsboro; width: 500px;" type="text" id="fname" name="fname" placeholder="Tu nombre...">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label  for="email">Email</label>
      </div>
      <div class="col-75">
        <input  style=" border-radius: 9px 9px 9px 9px; border-color: gainsboro; width: 500px;" type="text" id="email" name="email" placeholder="Tu email...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Mensaje</label>
      </div>
      <div class="col-75">
        <textarea  style=" border-radius: 9px 9px 9px 9px; width: 500px;" id="mensaje" name="mensaje" placeholder="Tu mensaje..."></textarea>
      </div>
    </div>
    <div class="row">
      <input style="background-color: yellowgreen; color: white; border-color: white; border-radius: 9px 9px 9px 9px; width: 200px;" type="submit" name="submit" value="Submit">
    </div>
	<?php if (isset($_POST['submit'])) {
     $name = $_POST['fname'];
     $from = $_POST['email'];
     $message = $_POST['mensaje'];

     $subject = "Correo recibido de '$name'";
     $to = "elsalvador.asadi@gmail.com";

     $headers = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
     //direccin del remitente
     $headers .= "From: $name <$from>\r\n";

     //Enviamos el mensaje a tu_direccin_email
     $bool = mail($to, $subject, $message, $headers);
     if ($bool) { ?>
			
<script type="text/javascript">

swal(
  'Good job!',
  'Gracias por comunicarse con nosotros!',
  'success'
);

</script>
<?php } else {echo "<h1>Mensaje no enviado</h1>";}
 } ?>



  </form>
        </div>
    </section>
                    </div>

               </div>
          </div>
     </section>

     
   
     <!-- GOOGLE MAP -->
     <section id="google-map">
   

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.5592721149887!2d-89.22032313538062!3d13.700812469437281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63305cc624a9c7%3A0x630e484bd0c5ad3b!2sAsociacion%20Salvadore%C3%B1a%20De%20Diabeticos%20%C2%ABASADI%C2%BB!5e0!3m2!1ses-419!2ssv!4v1593881741677!5m2!1ses-419!2ssv" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Estamos abiertos </h4>
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
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>