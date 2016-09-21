@extends('layouts.editProfile')
@section('content')
		<div align="center">
			<div class="edit-profile">
				<div class="row col-lg-12">
				<div class="col-lg-5">
					<div class="hexagon">
						<div class="hexagon-in1">
							<div class="hexagon-foto" style="background: url('../../public/media/img/upload/<?php echo $perfor['photo_identification'];?>')">								
							</div>
						</div>
					</div>
				</div>
				<div class="formulario-profile col-lg-7">		
					{{  Form::model($perfor,array('route'=>'subscriber.save', 'method' => 'PATCH')) }} 					
					
					<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->					
					<div class="form-group">
						{{Form::text('perfor_name',null,array('class' => 'form-control input-label', 'placeholder' => 'NAME'))}}
						@if($errors->has('subs_name'))
						<p class="text-danger">
							{{ $errors->first('subs_name') }}
						</p>
						@endif
					</div>
					<div class="form-group">
						{{Form::text('last_name',null,array('class' => 'form-control input-label', 'placeholder' => 'LAST NAME'))}}
						@if($errors->has('last_name'))
						<p class="text-danger">
							{{ $errors->first('last_name') }}
						</p>
						@endif
					</div>					
					<div class="form-group">
						{{Form::text('identification',null,array('class' => 'form-control input-label', 'placeholder' => 'IDENTIFICATION'))}}
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
						{{Form::text('email',null,array('class' => 'form-control input-label', 'placeholder' => 'EMAIL'))}}
						@if($errors->has('email'))
						<p class="text-danger">
							{{ $errors->first('email') }}
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
						{{Form::text('country',null,array('class' => 'form-control input-label', 'placeholder' => 'COUNTRY'))}}
						@if($errors->has('country'))
						<p class="text-danger">
							{{ $errors->first('country') }}
						</p>
						@endif
					</div>
					<div class="form-group">
						{{Form::text('city',null,array('class' => 'form-control input-label', 'placeholder' => 'COUNTRY'))}}
						@if($errors->has('city'))
						<p class="text-danger">
							{{ $errors->first('city') }}
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
@endsection
