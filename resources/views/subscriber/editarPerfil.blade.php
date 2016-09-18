<html>
<head>
	<title>Pandora</title>
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/bootstrap.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/landing.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/layout.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/pagina.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/studio.css">
	<link media="all" type="text/css" rel="stylesheet" href="../../public/media/css/datepicker.css">
	<!--link media="all" type="text/css" rel="stylesheet" href="{{env('MEDIA_URL')}}/css/bootstrap.css"-->
	<link media="all" type="text/css" rel="stylesheet" href="">
	@yield('styles')

</head>
<body>
	<div class="col-lg-12">
		<div class="row">
			<div align="center">
				<div class="col-lg-12">
					<div class="row pandora">
						<h1>
							<a href="inicio">
								<img src="../../public/media/img/Usuario/Índice/pandora.png">
							</a>
						</h1>       
					</div>
				</div>
			</div>
		</div>
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
					{{  Form::open(array('action'=>'StudioController@Register', 'method' => 'post')) }} 
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
						{{Form::text('studio_owner',null,array('class' => 'form-control input-label', 'placeholder' => 'STUDIO OWNER'))}}
						@if($errors->has('studio_owner'))
						<p class="text-danger">
							{{ $errors->first('studio_owner') }}
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
</body>
</html>
