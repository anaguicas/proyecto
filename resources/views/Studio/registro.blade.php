@extends('layouts.formularios')
@section('content')
<div align="center">
	<div class="formulario">		
		{{  Form::open(array('action'=>'StudioController@Register', 'method' => 'post')) }} 
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		<div class="col-lg-12">
			<div class="form-group">
				{{Form::text('studio_name',null,array('class' => 'form-control input-label', 'placeholder' => 'NAME'))}}
				@if($errors->has('studio_name'))
				<p class="text-danger">
					{{ $errors->first('studio_name') }}
				</p>
				@endif
			</div>
			<div class="form-group">
				{{Form::text('description',null,array('class' => 'form-control input-label', 'placeholder' => 'STUDIO DESCRIPTION'))}}
				@if($errors->has('description'))
				<p class="text-danger">
					{{ $errors->first('description') }}
				</p>
				@endif
			</div>					
			<div class="form-group">
				{{Form::text('email',null,array('class' => 'form-control input-label', 'placeholder' => 'EMAIL'))}}
			</div>
			<div class="form-group">
				{{Form::text('password',null,array('class' => 'form-control input-label', 'placeholder' => 'PASSWORD'))}}
				@if($errors->has('password'))
				<p class="text-danger">
					{{ $errors->first('password') }}
				</p>
				@endif
			</div>
			<div class="form-group">
				{{Form::text('password_confirmation',null,array('class' => 'form-control input-label', 'placeholder' => 'PASSWORD CONFIRMATION'))}}
				@if($errors->has('password_confirmation'))
				<p class="text-danger">
					{{ $errors->first('password_confirmation') }}
				</p>
				@endif
			</div>
			<div class="form-group">
				{{Form::text('studio_owner',null,array('class' => 'form-control input-label', 'placeholder' => 'STUDIO OWNER'))}}
				@if($errors->has('studio_owner'))
				<p class="text-danger">
					{{ $errors->first('studio_owner') }}
				</p>
				@endif
			</div>
			<div class="form-group">
				{{Form::text('bank',null,array('class' => 'form-control input-label', 'placeholder' => 'BANK'))}}
				@if($errors->has('bank'))
				<p class="text-danger">
					{{ $errors->first('bank') }}
				</p>
				@endif
			</div>
			<div class="form-group">
				{{Form::text('number',null,array('class' => 'form-control input-label', 'placeholder' => 'BANK ACCOUNT NUMBER'))}}
				@if($errors->has('number'))
				<p class="text-danger">
					{{ $errors->first('number') }}
				</p>
				@endif					
			</div>

			<div class="form-group">
				{{ Form::submit('REGISTRARME', array('class' => 'btn boton-registro')) }}
			</div>					
		</div>		
		{{  Form::close()  }}  
	</div>
</div>
@endsection