<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link href="../public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../public/media/css/performer.css" rel="stylesheet" type="text/css">
</head>
<body>
	<section class="encabezado">
		<h2>Pandora</h2>
	</section>
	<div align="center">
		<div class="formulario">
			<form methos="POST" action="" >
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="col-lg-12">
					<div class="form-group col-lg-5">				
						<input type="text" class="input-label" name="name" value="" placeholder="NOMBRE">
					</div>
					<div class="form-group col-lg-7">
						<input type="text" class="input-label" name="last_name" value="" placeholder="APELLIDO">
					</div>
					<div class="form-group">
						<input type="text" class="input-label" name="username" value="" placeholder="NOMBRE DE USUARIO">
					</div>
					<div class="form-group">
						<input type="email" class="input-label" name="email" value="" placeholder="CORREO ELETRÓNICO">
					</div>
					<div class="form-group">
						<input type="text" class="input-label" name="password" value="" placeholder="CONTRASEÑA">
					</div>					
					<div class="form-group">
						<select class="form-control select-label" >
							<option selected="selected">TIPO DE TARJETA</option>
							<option>Tarjeta debito</option>
							<option>Tajeta de credito</option>
							<option></option>
						</select>
					</div>
					<div class="form-group">
						<input class="input-label" name="nombre" value="" placeholder="NÚMERO DE TARJETA">						
					</div>
					<div class="form-group">
						<input type="number" class="input-label" name="nombre" value="" placeholder="NÚMERO DE VERIFICACIÓN DE TARJETA">
					</div>
					<div class="form-group">
						<input class="input-label" name="nombre" value="" placeholder="NÚMERO DE VERIFICACIÓN DE TARJETA">
					</div>
					<div class="form-group">
						<input class="boton-registro btn" type="submit" value="REGISTRARME">
						<a href=""></a>
					</div>					
				</div>				
			</form>
		</div>
	</div>
</body>
</html>