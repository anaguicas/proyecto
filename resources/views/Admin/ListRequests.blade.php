@extends('layouts.admin')
@section('content')
@include('Admin/Moreinfo')
<div class="col-md-12 container-performer">
	<div class="tittle-font" align="center">
		<h1><span>REQUESTS</span></h1>
	</div>	
	@foreach($pqrs as $pqr)
	<div class="col-md-6 content-1">
		<div class="col-md-12">
			<div class="col-md-4 imagen">
				<div class="row circle" align="center">
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
						<!-- <tr>
							<td>ANSWER DATE: </td>
							<td>{{$pqr->fecha_respuesta}}</td>
						</tr> -->
						<tr>
							<td>STATUS: </td>
							<td>{{$pqr->estado}}</td>
						</tr>
						<tr>
							<td>TYPE: </td>
							<td>{{$pqr->type}}</td>
						</tr>							
					</table> 
					<table class="row campos" id="opciones">
						<tr>
							<td class="plus">
								<a href="#" data-toggle="modal" data-target="#moreinfo">
									<span class="glyphicon glyphicon-search"></span>
								</a>
							</td>
							<td class="edicion"><a href="" data-toggle="modal" data-target="#moreinfo2" data-name="{{$pqr->perfor_name}}" data-fechasolicitud="{{$pqr->fecha_solicitud}}" data-fecharespuesta="{{$pqr->fecha_respuesta}}" data-status="{{$pqr->estado}}" data-type="{{$pqr->type}}"><p>SEE MORE</p></a></td>
						</tr>
						<tr>
							<td class="ok">
								<a href="#">
									<span class="glyphicon glyphicon-ok"></span>
								</a>
							</td>
							<td class="edicion"><a href="{{route('admin.approverequest',['id' => $pqr->id])}}"><p>APPROVE</p></a></td>
						</tr>
						<tr>
							<td class="delete">
								<a href="#">
									<span class="glyphicon glyphicon-remove"></span>
								</a>
							</td>
							<td class="edicion"><a href=""><p>REJECT</p></a></td>
						</tr>
					</table> 
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>  
@endsection