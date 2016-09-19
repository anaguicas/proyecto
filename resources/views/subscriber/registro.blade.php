@extends('layouts.formularios')
@section('content')
<div align="center">
	<div class="formulario">		
		{{  Form::open(array('action'=>'SubscriberController@Register', 'method' => 'post')) }} 
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
		<div class="col-lg-12">
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
			<div class="form-group col-lg-5">		
				{{Form::text('subs_name',null,array('class' => 'form-control input-label', 'placeholder' => 'NAME'))}}								
				@if($errors->has('subs_name'))
				<p class="text-danger">
					{{ $errors->first('subs_name') }}
				</p>
				@endif
			</div>
			<div class="form-group col-lg-7">
				{{Form::text('last_name',null,array('class' => 'form-control input-label', 'placeholder' => 'LAST NAME'))}}
				@if($errors->has('last_name'))
				<p class="text-danger">
					{{ $errors->first('last_name') }}
				</p>
				@endif
			</div>
			<div class="form-group">
				{{Form::text('identification',null,array('class' => 'form-control input-label', 'placeholder' => 'IDENTIFICATION'))}}
				@if($errors->has('identification'))
				<p class="text-danger">
					{{ $errors->first('identification') }}
				</p>
				@endif
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
				{{Form::email('email',null,array('class' => 'form-control input-label', 'placeholder' => 'EMAIL'))}}
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
				{{Form::password('password_confirmation',['class' => 'form-control input-label', 'placeholder' => 'PASSWORD CONFIRMATION'])}}
				@if($errors->has('password:confirmatio'))
				<p class="text-danger">
					{{ $errors->first('password_confirmation') }}
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
				<!-- <div class="form-group">
					{{Form::text('city',null,array('class' => 'form-control input-label', 'placeholder' => 'CITY'))}}
				@if($errors->has('city'))
				<p class="text-danger">
					{{ $errors->first('city') }}
				</p>
				@endif
			</div>	 -->			
				<!-- <div class="form-group">					
					<img class="col-lg-3 control-label" src="../public/media/img/Usuario/Tienda2/vencimien.png">
					<div class="col-lg-5 date">
						<div class="input-group input-append date" id="datePicker">
							<input type="text" class="form-control input-label-2" name="due_date" />
							<span class="input-group-addon add-on">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					</div>
				</div> -->
				<!-- <div class="form-group">
					{{Form::text('security_code',null,array('class' => 'form-control input-label', 'placeholder' => 'CREDIT CARD SECURITY CODE'))}}
				@if($errors->has('security_code'))
				<p class="text-danger">
					{{ $errors->first('security_code') }}
				</p>
				@endif
			</div> -->

			<div class="form-group">
				{{ Form::submit('REGISTRARME', array('class' => 'btn boton-registro')) }}
			</div>					
		</div>				
	</form>
	{{  Form::close()  }}  
</div>
</div>
@endsection