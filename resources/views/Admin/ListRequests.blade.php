@extends('layouts.admin')
@section('content')
<div class="col-md-12 container-performer">
	<div class="tittle-font" align="center">
		<h1><span>REQUESTS</span></h1>
	</div>	
	@foreach($pqrs as $pqr)
	<div class="col-md-6 content-1">
		<div class="col-md-12">
			<div class="col-md-4 imagen">
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
									<span class="glyphicon glyphicon-plus"></span>
								</a>
							</td>
							<td class="edicion"><a href="" data-toggle="modal" data-target="#moreinfo"><p>SEE MORE</p></a></td>
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
	<div class="modal fade" id="moreinfo" tabindex="-1" role="dialog" aria-labelledby="moreinfolabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="tittle-font" id="moreinfolabel">{{$pqr->perfor_name}}</h4>
				</div>
				<div class="modal-body text-modal">
					<p >Description: {{$pqr->descripcion}}</p>
					<p >Request date: {{$pqr->fecha_solicitud}}</p>
					<p >Type: {{$pqr->type}}</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn boton-modal" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>  
@endsection