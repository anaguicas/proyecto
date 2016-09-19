@extends('layouts.editProfile')
@section('content')
		<div align="center">
			<div class="edit-profile">
				<div class="row col-lg-12">
				<div class="col-lg-5">
					<div class="hexagon">
						<div class="hexagon-in1">
							<div class="hexagon-foto">
								<img src="../../public/media/img/log in/usuario.png">
							</div>
						</div>
					</div>
				</div>
				<div class="formulario-profile col-lg-7">		
					{{  Form::model($studio, array('route' => 'studio.save', 'method' => 'PATCH')) }} 
					<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
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
						{{Form::text('responsible',null,array('class' => 'form-control input-label', 'placeholder' => 'STUDIO OWNER'))}}
						@if($errors->has('studio_owner'))
						<p class="text-danger">
							{{ $errors->first('studio_owner') }}
						</p>
						@endif
					</div>				
					<div class="form-group">
						{{Form::text('email',null,array('class' => 'form-control input-label', 'placeholder' => 'EMAIL'))}}
					</div>
					<div class="form-group">
						{{Form::text('name',null,array('class' => 'form-control input-label', 'placeholder' => 'USERNAME'))}}
						@if($errors->has('name'))
						<p class="text-danger">
							{{ $errors->first('name') }}
						</p>
						@endif
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
						{{Form::text('number',null,array('class' => 'form-control input-label', 'placeholder' => 'BANK ACCOUNT NUMBER'))}}
						@if($errors->has('number'))
						<p class="text-danger">
							{{ $errors->first('number') }}
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
						{{ Form::submit('SAVE', array('class' => 'btn boton-registro')) }}
					</div>	
					{{  Form::close()  }}  
				</div>
			</div>
			</div>
		</div>
	</div>
@stop
