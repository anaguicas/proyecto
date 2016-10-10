@extends('layouts.admin')
@section('content')
<div class="col-md-12 container-performer">
	<div class="tittle-font" align="center">
		<h1><span>REQUESTS</span></h1>
	</div>	
	@foreach($pqrs as $pqr)
	<div class="col-md-6 content-1">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="row circle ">
					<img align="middle" class= "fotico" src="../../public/media/img/upload/<?php echo $pqr->photo_identification;?>">
				</div>
				<div class="row name">
					{{$pqr->perfor_name}}
				</div>
			</div>
			<div class="col-md-8">
				<div class="col-md-12 info">
					<table class="row campos">
						<tr>
							<td>REQUEST DATE: </td>
							<td>{{$pqr->fecha_solicitud}}</td>
						</tr>
						<tr>
							<td>ANSWER DATE: </td>
							<td>{{$pqr->fecha_respuesta}}</td>
						</tr>
						<tr>
							<td>STATUS: </td>
							<td>{{$pqr->estado}}</td>
						</tr>
						<tr>
							<td>RESUME: </td>
							<td>{{$pqr->descripcion}}</td>
						</tr>							
					</table> 
					<table class="row campos" id="opciones">
						<tr>
							<td class="ok">
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
								</a>
							</td>
							<td><p>APPROVE</p></td>
						</tr>
						<tr>
							<td class="delete">
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
								</a>
							</td>
							<td><p>REJECT</p></td>
						</tr>
					</table> 
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>  
@endsection