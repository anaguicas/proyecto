@extends('layouts.formularios')
@section('content')

<div align="center">

	<div class="formulario">
	@include('alerts.errors')		
		{{  Form::open(['route'=>'login', 'method'=>'POST']) }} 
			<div class="col-lg-12">
				<div class="form-group">
					{{Form::text('username',null,array('class' => 'form-control input-label', 'placeholder' => 'NICKNAME'))}}
				@if($errors->has('username'))
				<p class="text-danger">
					{{ $errors->first('username') }}
				</p>
				@endif
				</div>
				<div class="form-group">
					{{Form::password('password',['class' => 'form-control input-label', 'placeholder' => 'PASSWORD'])}}
				@if($errors->has('password'))
				<p class="text-danger">
					{{ $errors->first('password') }}
				</p>
				@endif
				</div>

				<div class="form-group">
					{{ Form::submit('Log In', array('class' => 'btn boton-registro')) }}
				</div>					
			</div>				
		</form>
		{{  Form::close()  }}  
	</div>
</div>
@endsection