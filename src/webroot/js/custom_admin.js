var selected_textarea;
function setactiveId(id) {
    selected_textarea = id;
}
$(document).on('click','.remove-options button',function(){
	if(!selected_textarea)
	{
		alert('Please select option first');
	}
	else
	{
		if( $('.options .form-group textarea').length==1)
		{
			alert('You have to submit one option at least');
			return;
		}
		$(selected_textarea).parents('div.form-group').remove();
		selected_textarea = null;
	}
	
})
$(document).on('click','.add-options button',function(){
	$(".form-group:last").clone().insertAfter(".form-group:last");
	//$(selected_textarea).remove();
})
$(document).on('click','.questions .actions a.view',function(e){
	$('#myModal').modal('show').find('.modal-body').html('<i class="fa fa-spin fa-refresh"></i>');
	e.preventDefault();
	$('#myModal').modal('show').find('.modal-body').load($(this).attr('href'));
})

