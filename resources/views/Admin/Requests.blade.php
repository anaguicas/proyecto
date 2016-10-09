<!DOCTYPE html>
<html>
<head>
	<title>Pandora</title>
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/studio.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/pagina.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/admin.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/datepicker.css">
	<!--link media="all" type="text/css" rel="stylesheet" href="{{env('MEDIA_URL')}}/css/bootstrap.css"-->
	<link media="all" type="text/css" rel="stylesheet" href="">
	@yield('styles')
	
</head>
<body>
	<div align="center">
		<div class="col-lg-12">
			<div class="row pandora">
				<h1>
					<a href="{{route('landing')}}">
						<img width= 300px height=80px src="../../public/media/img/Pantalla de inicio png/registro studio performer/pandora.png">
					</a>
				</h1>    	
			</div>
		</div>
	</div>
	<div class="col-md-12 container-performer">
		<div class="tittle-font" align="center">
			<h1><span style="color: #ffcc99; ">REQUESTS</span></h1>
		</div>	
		@foreach($pqrs as $pqr)
		<div class="col-md-6 content-1">
			<div class="col-md-12">
				<div class="col-md-4">
					<div class="row circle ">
						<img align="middle" class= "fotico" src="../../public/media/img/upload/<?php echo $pqr->photo_identification;?>">
					</div>
					<div class="row name">
						{{$pqr->perfor_name}}
					</div>
				</div>
				<div class="col-md-8">
					<div class="col-md-12 info">
						<table class="row campos">
							<tr>
								<td>REQUEST DATE: </td>
								<td>{{$pqr->fecha_solicitud}}</td>
							</tr>
							<tr>
								<td>ANSWER DATE: </td>
								<td>{{$pqr->fecha_respuesta}}</td>
							</tr>
							<tr>
								<td>STATUS: </td>
								<td>{{$pqr->estado}}</td>
							</tr>
							<tr>
								<td>RESUME: </td>
								<td>{{$pqr->descripcion}}</td>
							</tr>							
						</table> 
						<table class="row campos" id="opciones">
                            <tr>
								<td class="edit">
									<a href="#">
										<span class="glyphicon glyphicon-edit"></span>
									</a>
								</td>
								<td><p>EDIT</p></td>
							</tr>
							<tr>
								<td class="delete">
									<a href="#">
										<span class="glyphicon glyphicon-remove"></span>
									</a>
								</td>
								<td><p>DELETE</p></td>
							</tr>
                        </table> 
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>  
	<script type="text/javascript" src="../public/media/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="../public/media/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../public/media/js/bootstrap-datepicker.js"></script>	
	<script type="text/javascript" src="../public/media/js/formularios.js"></script>
	@yield('scripts')	
</body>
</html>