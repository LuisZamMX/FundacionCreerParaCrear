<!doctype html>
<html lang="en" class="h-100">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- Required meta tags -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href=  "css/bootstrap.min.css">

  <!-- Mi estilo -->
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="img/logo_fundacion.ico">
  
  <!-- SEO -->
  <title>Fundación creer para crear - Contacto</title>
  <meta name="description" content="Nuestro domicilio, teléfono de contacto, correo electrónico y formulario de contacto."/>

</head>

<body class="d-flex flex-column h-100">

  <header>
    <?php 
    include ('includes/header.html');
    ?>
  </header>
  
  <!-- Principal -->
  <main role="main" class="flex-shrink-0">

    <div class="container">
      
      <!-- Contenido -->
      <div class="contenido">
        
        <!-- Domicilio -->
        <div class="row">
          
          <!-- Mapa -->
          <div class="col-12 col-md-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.562283271394!2d-99.12235568455138!3d19.388096786909607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe8a6664f545%3A0x2258db08dd1a8978!2sCentenario%205%2C%20Santa%20Cruz%2C%20Iztacalco%2C%2008910%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1579203570926!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" class="mapa" style="border:0;" allowfullscreen=""></iframe>
          </div>
          
          <!-- Dirección -->
          <div class="col-12 col-md-5">

            <h3>Fundación Creer para Crear</h3>
            
            <!-- Dirección -->
            <p class="font-weight-light">Centenario 5, Colonia Santa Cruz, Alcaldía Iztacalco, C.P. 08910, Ciudad de México, CDMX.</p>

            <!-- Teléfono local -->
            <p><span class="icon-old-phone contacto-icon"></span><a href="tel:5565848624"> 55 6584 8624 </a> (Local)</p>

            <!-- Teléfono celular -->
            <p><span class="icon-old-mobile contacto-icon"></span><a href="tel:5577352317"> 55 7735 2317 </a> (Celular)</p>
            
            <!-- Correo electrónico -->
            <p><span class="icon-mail contacto-icon"></span><a href="mailto:informacion@fundacioncreerparacrear.org">informacion@fundacioncreerparacrear.org </a></p>
          </div>

        </div>
        
        <!-- Formulario -->
        <div class="contact-form">

          <h3 class="text-center">Contáctanos</h3>
          
          <p class="font-weight-light text-center">¿Tienes alguna duda?<br> Déjanos un mensaje</p>
          
          <form id="formContacto" method="post" action="altcorreo.php">

            <!-- Nombre -->
            <div class="input-group mar-top">
              <div class="input-group-prepend">
                <span class="input-group-text"><span class="icon-user"></span></span>
              </div>
              <input type="text" name="nombre" class="form-control" id="correo-nombre" placeholder="Nombre" required>
            </div>

            <!-- Correo -->
            <div class="input-group mar-top">
              <div class="input-group-prepend">
                <span class="input-group-text"><span class="icon-mail"></span></span>
              </div>
              <input type="text" name="correo" class="form-control" id="correo-correo" placeholder="Correo electrónico" required>
            </div>

            <span id="correo-respuesta"></span>

            <!-- Mensaje -->
            <div class="input-group mar-top">
              <div class="input-group-prepend">
                <span class="input-group-text"><span class="icon-pencil"></span></span>
              </div>
              <textarea type="text" name="mensaje" class="form-control" id="correo-mensaje" placeholder="Mensaje" required></textarea>
            </div>

            <!-- Submit -->
            <button type="button" id="enviar" class="btn btn-primary mar-top"><span class="icon-chevron-with-circle-right contacto-icon"></span>Enviar</button>

          </form>

          <div class="text-center mar-top" id="respuesta"></div>

        </div>


      </div>
    </div>

  </div>

</main>

<footer>
  <?php
  include('includes/footer.html');
  ?>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147948653-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147948653-1');
</script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/estilo.js"></script>
</body>
</html>