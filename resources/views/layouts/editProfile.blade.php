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
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/pagina.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/studio.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/datepicker.css">
	<!--link media="all" type="text/css" rel="stylesheet" href="{{env('MEDIA_URL')}}/css/bootstrap.css"-->
	<link media="all" type="text/css" rel="stylesheet" href="">
	@yield('styles')
	
</head>
<body>
	<!--Header -->
	<div align="center">
		<div class="col-lg-12">
			<div class="row pandora">
				<h1>
					<a href="{{route('landing')}}">
						<img src="../../public/media/img/Pantalla de inicio png/registro studio performer/pandora.png">
					</a>
				</h1>    	
			</div>
		</div>
	</div>
	<div>
		@yield('content')
	</div>
	<!-- footer-->
	Footer
</div>

<script type="text/javascript" src="../public/media/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="../public/media/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../public/media/js/bootstrap-datepicker.js"></script>	
<script type="text/javascript" src="../public/media/js/formularios.js"></script>
@yield('scripts')	
</body>
</html>