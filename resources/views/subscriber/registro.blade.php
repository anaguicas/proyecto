@extends('layouts.formularios')
@section('content')
<div align="center">
	<div class="formulario">
		<form methos="POST" action="" >
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="col-lg-12">
				<div class="form-group col-lg-5">		
					<input type="text" class="input-label" name="name" value="" placeholder="NNAME">
					@if ($errors->has('name'))
					<p class="text-danger">
						{{ $errors->first('name') }}
					</p>
					@endif		
				</div>
				<div class="form-group col-lg-7">
					<input type="text" class="input-label" name="last_name" value="" placeholder="LAST NAME">
				</div>
				<div class="form-group">
					<input type="text" class="input-label" name="identification" value="" placeholder="IDENTIFICATION">
				</div>
				<div class="form-group">
					<input type="text" class="input-label" name="username" value="" placeholder="USERNAME">
				</div>
				<div class="form-group">
					<input type="email" class="input-label" name="email" value="" placeholder="EMAIL">
				</div>
				<div class="form-group">
					<input type="text" class="input-label" name="password" value="" placeholder="PASSWORD">
				</div>
				<div class="form-group">
					<label class="col-lg-4 input-label-2 col-lg-3">COUNTRY</label>
					<select class="form-control select-country col-lg-6" >
						<option selected="selected">COUNTRY</option>
						<option>Tarjeta debito</option>
						<option>Tajeta de credito</option>
						<option></option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="input-label" name="CITY" value="" placeholder="CITY">
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
					<input class="input-label" name="numero" value="" placeholder="NÚMERO DE TARJETA">						
				</div>					
				<div class="form-group">					
					<img class="col-lg-3 control-label" src="../public/media/img/Usuario/Tienda2/vencimien.png">
					<div class="col-lg-5 date">
						<div class="input-group input-append date" id="datePicker">
							<input type="text" class="form-control input-label-2" name="date" />
							<span class="input-group-addon add-on">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<input type="number" class="input-label" name="security_code" value="" placeholder="SECURITY CODE">
				</div>

				<div class="form-group">
					<input class="boton-registro btn" type="submit" value="REGISTRARME">
					<a href="{{route('subscriber.register')}}"></a>
				</div>					
			</div>				
		</form>
	</div>
	@if(Session::has('errors'))
	<div class="alert alert-danger alert-dismisable col-xs-12" style="margin-top:5px;">
		Existen errores en el formulario:
		<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
		{{ Session::get('errors') }}
	</div>
	@endif
</div>
@endsection