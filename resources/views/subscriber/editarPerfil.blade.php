@extends('layouts.editProfile')
@section('content')
		<div align="center">
			<div class="edit-profile">
				<div class="row col-lg-12">
				<div class="col-lg-5">
					<div class="hexagon">
						<div class="hexagon-in1">
							<div class="hexagon-foto">
								<img src="">
							</div>
						</div>
					</div>
				</div>
				<div class="formulario-profile col-lg-7">		
					{{  Form::model($subs,array('route'=> array('subscriber.save', $id), 'method' => 'PUT')) }} 										
					<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->					
					@if(Session::has('message'))
					<div class="alert alert-success alert-dissmissible col-xs-12">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{{Session::get('message')}}
					</div>
					@endif
					@if(Session::has('error'))
					<div class="alert alert-danger alert-dissmissible col-xs-12">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						{{Session::get('error')}}
					</div>
					@endif
					<div class="form-group">
						{{Form::text('subs_name',null,array('class' => 'form-control input-label', 'placeholder' => 'NAME'))}}
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
						{{Form::label('country', 'COUNTRY', array('class' => 'col-lg-4 control-label'))}}
						<div class="col-lg-5 country">
							{{ Form::select('country', $country, null, array('class'=>'form-control select-label ', 'required' => 'required')) }}
							@if ($errors->has('country'))
							<p class="text-danger">
								{{ $errors->first('country') }}
							</p>
							@endif
						</div>
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
