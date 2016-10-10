@extends('layouts.admin')
@section('content')
<div class="col-md-12 container-performer">
	<div class="tittle-font" align="center">
		<h1><span>LIST</span></h1>
	</div>	
	<div class="col-md-12 buttons">
		<button class="btn boton-toggle" data-toggle="collapse" data-parent="#accordion" href="#studios" aria-expanded="false" aria-controls="studios">
			STUDIOS
		</button>
		<button class="btn boton-toggle" data-toggle="collapse" data-parent="#accordion" href="#performers" aria-expanded="false" aria-controls="performers">
			PERFORMERS
		</button>
	</div>
	<div class="col-md-12">
		<div id="studios" aria-expanded="true" class="panel-collapse collapse">
			@foreach($studios as $studio)
			<div class="col-md-6 content-1">
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="row circle ">
							<img align="middle" class= "fotico" src="">
						</div>
						<div class="row name">
							{{$studio->studio_name}}
						</div>
					</div>
					<div class="col-md-8 info">
						<div class="col-md-12">
							<table class="row campos">
								<tr>
									<td>RESPONSIBLE: </td>
									<td>{{$studio->responsible}}</td>
								</tr>
									<!-- <tr>
										<td>ANSWER DATE: </td>
										<td>{{$studio->fecha_respuesta}}</td>
									</tr>
									<tr>
										<td>STATUS: </td>
										<td>{{$studio->estado}}</td>
									</tr>
									<tr>
										<td>TYPE: </td>
										<td>{{$studio->type}}</td>
									</tr> -->							
								</table> 
								<table class="row campos" id="opciones">
									<tr>
										<td class="plus">
											<a href="#">
												<span class="glyphicon glyphicon-plus"></span>
											</a>
										</td>
										<td class="edicion"><a href=""><p>SEE MORE</p></a></td>						
										<td class="delete">
											<a href="#">
												<span class="glyphicon glyphicon-remove"></span>
											</a>
										</td>
										<td class="edicion"><a href=""><p>DELETE</p></a></td>
									</tr>
								</table> 
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="col-md-12">
			<div id="performers" aria-expanded="true" class="panel-collapse collapse">
				@foreach($performers as $performer)
				<div class="col-md-6 content-1">
					<div class="col-md-12">
						<div class="col-md-4">
							<div class="row circle ">
								<img align="middle" class= "fotico" src="">
							</div>
							<div class="row name">
								{{$performer->perfor_name}}
							</div>
						</div>
						<div class="col-md-8 info">
							<div class="col-md-12">
								<table class="row campos">
									<tr>
										<td>RESPONSIBLE: </td>
										<td>{{$performer->last_name}}</td>
									</tr>
									<!-- <tr>
										<td>ANSWER DATE: </td>
										<td>{{$studio->fecha_respuesta}}</td>
									</tr>
									<tr>
										<td>STATUS: </td>
										<td>{{$studio->estado}}</td>
									</tr>
									<tr>
										<td>TYPE: </td>
										<td>{{$studio->type}}</td>
									</tr> -->							
								</table> 
								<table class="row campos" id="opciones">
									<tr>
										<td class="plus">
											<a href="#">
												<span class="glyphicon glyphicon-plus"></span>
											</a>
										</td>
										<td class="edicion"><a href=""><p>SEE MORE</p></a></td>						
										<td class="delete">
											<a href="#">
												<span class="glyphicon glyphicon-remove"></span>
											</a>
										</td>
										<td class="edicion"><a href=""><p>DELETE</p></a></td>
									</tr>
								</table> 
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	@endsection