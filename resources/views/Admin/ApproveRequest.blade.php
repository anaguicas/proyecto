@extends('layouts.admin')
@section('content')
		<div align="center">
			<div class="edit-profile">
				<div class="row col-lg-12">
				<div class="col-lg-5">
					<div class="row circle-perfil">
						<img align="middle" class= "fotico" src="../../../public/media/img/upload/<?php echo $performer['photo_identification'];?>">
					</div>
				</div>
				<div class="formulario-profile col-lg-7">		
					{{  Form::model($performer,array('route'=>array('performer.save', $id), 'method' => 'PUT')) }} 					
					
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
						{{Form::text('request_date',null,array('class' => 'form-control input-label', 'placeholder' => 'REQUEST DATE'))}}
						@if($errors->has('request_date'))
						<p class="text-danger">
							{{ $errors->first('perfor_name') }}
						</p>
						@endif
					</div>
					<div class="form-group">
						{{Form::text('status',null,array('class' => 'form-control input-label', 'placeholder' => 'STATUS'))}}
						@if($errors->has('status'))
						<p class="text-danger">
							{{ $errors->first('last_name') }}
						</p>
						@endif
					</div>					
					<div class="form-group">
						{{Form::text('type',null,array('class' => 'form-control input-label', 'placeholder' => 'TYPE'))}}
						@if($errors->has('type'))
						<p class="text-danger">
							{{ $errors->first('type') }}
						</p>
						@endif
					</div>
					<div class="form-group">
						{{Form::textarea('description',null,array('class' => 'form-control input-label', 'placeholder' => 'DESCRIPTION'))}}
						@if($errors->has('description'))
						<p class="text-danger">
							{{ $errors->first('description') }}
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
