$(document).on("click","#moreinfo",function(){
	var id = $(this).data('id');
	$("modal-content #id").html(id);
	console.log('id');	
});

$(document).on("click","#moreinfo2",function(){
	var id = $(this).data('id');
	$("modal-content #id").html(id);
	console.log('id');	
});

$('#moreinfo').on('show.bs.modal',function(event){
	var button 			= $(event.relatedTarget);
	var name 			= button.data('name');
	var request_date 	= button.data('fechasolicitud');
	var answer_date 	= button.data('fecharespuesta');
	var status 			= button.data('status');
	var type 			= button.data('type');
	var respuesta 		= button.data('resp');

	var modal = $(this)
	modal.find('.modal-title').text(name);
	modal.find('.modal-body #fecha_solicitud').val(request_date);
	modal.find('.modal-body #fecha_respuesta').val(answer_date);
	modal.find('.modal-body #status').val(status);
	modal.find('.modal-body #type').val(type);
	modal.find('.modal-body #respuesta').val(respuesta);
	$('.alert').hide();
});

$('#moreinfo2').on('show.bs.modal',function(event){
	var button 			= $(event.relatedTarget);
	var name 			= button.data('name');
	var request_date 	= button.data('fechasolicitud');
	var answer_date 	= button.data('fecharespuesta');
	var status 			= button.data('status');
	var type 			= button.data('type');

	var modal = $(this)
	modal.find('.modal-title').text(name);
	modal.find('.modal-body #fecha_solicitud').val(request_date);
	modal.find('.modal-body #fecha_respuesta').val(answer_date);
	modal.find('.modal-body #status').val(status);
	modal.find('.modal-body #type').val(type);
	$('.alert').hide();
});