@extends('layouts.formularios')
@section('content')
<div align="center">
	<div class="formulario">
		<form methos="POST" action="" >
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="col-lg-12">
				<div class="form-group col-lg-5">				
					<input type="text" class="input-label" name="name" value="" placeholder="NNAME">
				</div>
				<div class="form-group col-lg-7">
					<input type="text" class="input-label" name="last_name" value="" placeholder="LAST NAME">
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
					<input type="text" class="datepicker" name="due_date" value="" placeholder="DUE DATE">
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
	@if(\Session::has('errors'))
	<div class="alert alert-danger col-xs-12" style="margin-top:5px;">
		Existen errores en el formulario:
		<ul>
			@foreach (\Session::get('errors')->all() as $message)
			<li>
				{{$message}}
			</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>
@endsection