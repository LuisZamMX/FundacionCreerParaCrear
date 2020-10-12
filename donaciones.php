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

	<!-- ¨SEO -->
	<title>Fundación creer para crear - Nosotros</title>
	<meta name="description" content="Conoce la historia, misión, visión, valores y equipo de Fundación creer para crear." />

</head>

<body class="d-flex flex-column h-100">

	<!-- Navbar -->
	<header>
		<?php
		include('includes/header-noscroll.html');
		?>
	</header>

	<!-- Contenido principal -->
	<main role="main" class="flex-shrink-0">

		<div class="container no-scroll">

        <h1 class="h1 text-center mb-5">Donaciones (PDF)</h1>

            <iframe class="w-100" src="mostrarArchivos.php?Archivo=donativo.pdf"  height="900px" style="border: none;"></iframe>

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

		function gtag() {
			dataLayer.push(arguments);
		}
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