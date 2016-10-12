$(document).on("click","#moreinfo",function(){
	var id = $(this).data('id');
	$("modal-content").val(id);
	console.log('id');	
});