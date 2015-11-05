$(document).ready(function() {
	$("#ajax-contact-form").ajaxForm(function(mes) {
		$('#sendform').html(mes);
	});
});
