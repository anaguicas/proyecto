@extends('layouts.tittle')
<!--Header --> 
@section('content')

<div class="col-md-12 container-performer">
	<div class="tittle-font" align="center">
		<h1><span style="color: #ffcc99; ">REQUESTS</span></h1>
	</div>
	@foreach($pqrs as $pqr)
	<div class="col-md-6 content-1"   >
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="row circle ">
					<img align="middle" class= "fotico" src="../../public/media/img/upload/<?php echo $user['photo'];?>">
				</div>
				<div class="row name">
					{{$user["name"]}}
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
							<td>RESUME: </td>
							<td>{{$pqr->descripcion}}</td>
						</tr>
						<tr>
							<td class="edit">
								<a href="#">
									<span class="glyphicon glyphicon-edit"></span>
								</a>
							</td>
							<td><p>EDIT</p></td>
						</tr>
						<tr>
							<td class="delete">
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
								</a>
							</td>
							<td><p>DELETE</p></td>
						</tr>
					</table> 
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>  
@endsection