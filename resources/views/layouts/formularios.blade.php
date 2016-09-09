<?php  
/**
* layout (vista plantilla)
*
* Segmento de vista que se utiliza en la construccion de todas las vistas
*
* @author Angelica Aguirre
* @copyright
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pandora</title>
	<link media="all" type="text/css" rel="stylesheet" href="../public/media/css/bootstrap.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="../public/media/css/landing.css">
	<link media="all" type="text/css" rel="stylesheet" href="../public/media/css/layout.css">
	<link media="all" type="text/css" rel="stylesheet" href="../public/media/css/performer.css">
	<!--link media="all" type="text/css" rel="stylesheet" href="{{env('MEDIA_URL')}}/css/bootstrap.css"-->
	<link media="all" type="text/css" rel="stylesheet" href="">
	@yield('styles')
	
</head>
<body>
	<div class="container">
		<!--Header -->
		<section class="encabezado">
			<h2>Pandora</h2>
		</section>
		<div>
			@yield('content')
		</div>
		<!-- footer-->
		Footer
	</div>
	
	<script type="text/javascript" src="../public/media/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../public/media/js/bootstrap.min.js"></script>


	@yield('scripts')
</body>
</html>