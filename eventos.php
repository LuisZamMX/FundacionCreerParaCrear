<!doctype html>
<html lang="en" class="h-100">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href=  "css/bootstrap.min.css">

  <!-- Mi estilo -->
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="img/logo_fundacion.ico">

  <!-- SEO -->
  <title>Fundación creer para crear - Eventos</title>
  <meta name="description" content="Galería de fotos de los eventos que organiza Fundación Creer para Crear"/>

</head>
<body class="d-flex flex-column h-100">

  <header>

    <?php 
    include ('includes/header.html');
    ?>

  </header>
  
  <!-- Contenido -->
  <main role="main" class="flex-shrink-0">
    <div class="container">

      <div class="contenido">
        <h2 class="text-center">Eventos</h2>

        <!-- Collapse -->
        <div class="accordion mar-top" id="accordionExample">

          <!-- Primera sección -->
          <div class="card">
            <!-- Header -->
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h4 class="text-decoration-none text-dark">Visita a bimbo</h4>
                </button>
              </h2>
            </div>
            <!-- Contenido -->
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">

                  <!-- Primera imagen -->
                  <div class="col-12 col-md-3">
                    <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/bimbo1.jpeg" alt="Beneficiarios en instalaciones de bimbo">
                  </div>

                  <!-- Segunda imagen -->
                  <div class="col-12 col-md-3">
                    <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/bimbo2.jpeg" alt="Instalaciones de bimbo">
                  </div>

                  <!-- Tercera imagen -->
                  <div class="col-12 col-md-3">
                    <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/bimbo3.jpeg" alt="Camión de beneficiarios llegando a instalaciones de bimbo">
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- Segunda sección -->
          <div class="card">
            <!-- Header -->
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4 class="text-decoration-none text-dark">Teatro en familia</h4>
                </button>
              </h2>
            </div>
            <!-- Contenido -->
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                <div class="row">

                 <!-- Primera imagen -->
                 <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/teatro1.jpeg" alt="">
                </div>

                <!-- Segunda imagen -->
                <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/teatro2.jpeg" alt="Equipo de Fundación Creer para Crear en evento de Teatro en familia">
                </div>

                <!-- Tercera imagen -->
                <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/teatro3.jpeg" alt='Beneficiarios en evento de Teatro en Familia'>
                </div>

                <!-- Cuarta imagen -->
                <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/teatro4.jpeg" alt='Obra de teatro "El Libro de la Selva"'>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Tercera sección-->
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h4 class="text-decoration-none text-dark">Visita Parque Tezomoc</h4>
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">

                <!-- Primera imagen -->
                <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/tarjeta1.jpeg" alt="Beneficiarios en Visita al Parque Tezomoc">
                </div>

                <!-- Segunda imagen -->
                <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/parque2.jpeg" alt="Niño corriendo alegre en Visita a Parque Tezomoc">
                </div>

                <!-- Tercera imagen -->
                <div class="col-12 col-md-3">
                  <img class="img-fluid escalar rounded mx-auto d-block shadow-lg mar-top" src="img/parque3.jpeg" alt="Actividad realizada en Visita a Parque Tezomoc">
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="seccion">

    </div>

  </div>
</main>

<?php
  include('includes/footer.html');
?>

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
<script src="js/bootstrap.min.js"></script>
<script src="js/estilo.js"></script>
</body>
</html>