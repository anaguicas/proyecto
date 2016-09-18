@extends('layouts.formularios')
@section('content')

<div align="center">

	<div class="formulario">
	@include('alerts.errors')		
		{{  Form::open(['route'=>'login', 'method'=>'POST']) }} 
			<div class="row row-centered">
				<div class="col-lg-12 col-centered formulario-login">
				
					<div class="form-group col-lg-12 col-centered login-mi-cuenta">
						<img src="../public/media/img/log in/mi cuenta.png">
					</div>


					<div class="display-inline">

						<div class="form-group col-lg-2" id="img-cuenta">
							<img src="../public/media/img/log in/usuario.png">	
						</div>

						<div class="form-group col-lg-10 col-centered">
							{{Form::text('username',null,array('class' => 'form-control input-label', 'placeholder' => 'USER NAME'))}}
						@if($errors->has('username'))
						<p class="text-danger">
							{{ $errors->first('username') }}
						</p>
						@endif
						</div>

					</div>

					<div class="display-inline">
						<div class="form-group col-lg-2" id="img-cuenta">
							<img src="../public/media/img/log in/contraseña.png">	
						</div>

						<div class="form-group col-lg-10">
							{{Form::password('password',['class' => 'form-control input-label', 'placeholder' => 'PASSWORD'])}}
						@if($errors->has('password'))
						<p class="text-danger">
							{{ $errors->first('password') }}
						</p>
						@endif
						</div>
					</div>

					<div class="form-group">
						{{ Form::submit('Log In', array('class' => 'btn boton-login')) }}
					</div>					
				</div>
			</div>		
		</form>
		{{  Form::close()  }}  
	</div>
</div>
@endsection