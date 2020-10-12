<!doctype html>
<html lang="en" class="h-100">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- GLider.js -->
	<link rel="stylesheet" href="css/glider.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="css/mdb.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

	<!-- Sweet Alert 2 -->
	<link rel="stylesheet" href="css/sweetalert2.min.css">

	<!-- Mi estilo -->
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="shortcut icon" href="img/logo_fundacion.ico">

  <!-- SEO -->
  <title>Fundación creer para crear - Blog</title>
  <meta name="description" content="Artículos educativos publicados por Fundación Creer para Crear."/>

</head>
<body class="d-flex flex-column h-100">

  <header>

    <?php 
    include ('includes/header-noscroll.html');
    ?>

  </header>

  <!-- Contenido -->
  <main role="main" class="flex-shrink-0">

    <div class="container no-scroll">

      <div class="contenido">
        <h2 class="text-center">Publicaciones</h2>

        <div class="row">

          <div class="col-12 col-md-8">
            <!-- Tarjetas -->
            <div class="row">

              <!-- Primera carta -->
              <div class="col-12 col-lg-6">
                <div class="card mar-top">
                  <img src="img/publicacion1.jpg" class="card-img-top" alt="casa-fundacion">
                  <div class="card-body">
                    <h5 class="card-title">El hábito del ahorro en casa</h5>
                    <p class="card-text">El hogar es el lugar donde adquirimos nuestros primeros hábitos, y aquellos que aprendemos para el manejo de nuestras finanzas no son la excepción.</p>
                    <a href="publicacion1.php" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
              </div>
              

              <!-- Segunda carta 
              <div class="col-12 col-lg-6">
                <div class="card mar-top">
                  <img src="img/casa-fundacion.jpeg" class="card-img-top" alt="casa-fundacion">
                  <div class="card-body">
                    <h5 class="card-title">Publicación 1</h5>
                    <p class="card-text">Detalles de la publicación 1.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
              </div>

              Tercera carta 
              <div class="col-12 col-lg-6">
                <div class="card mar-top">
                  <img src="img/casa-fundacion.jpeg" class="card-img-top" alt="casa-fundacion">
                  <div class="card-body">
                    <h5 class="card-title">Publicación 1</h5>
                    <p class="card-text">Detalles de la publicación 1.</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                  </div>
                </div>
              </div> -->
            </div>
          </div>

          <div class="col-12 col-md-4 justify-content-center mar-top"> <!--d-none d-md-block--> 
            <h5>Últimas publicaciones en Facebook:</h5>
            <br>
            <div class="fb-page mar-top" data-href="https://www.facebook.com/Fundaci%C3%B3n-Creer-Para-Crear-AC-312916056035761/" data-tabs="timeline" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Fundaci%C3%B3n-Creer-Para-Crear-AC-312916056035761/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Fundaci%C3%B3n-Creer-Para-Crear-AC-312916056035761/">Fundación Creer Para Crear A.C.</a></blockquote></div>
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

  <!-- Plugins -->

  <!-- Facebook Plugin -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v4.0"></script>
  
  <!-- Google Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147948653-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-147948653-1');
    </script>


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/estilo.js"></script>
</body>
</html>
