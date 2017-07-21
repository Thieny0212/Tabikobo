function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
function check_value(){
	//confirm value
	var your_name = document.getElementById("contact_form_text_1").value;
	var mail_address = document.getElementById("contact_form_text_3").value;
	var contents = document.getElementById("contact_form_text_5").value;
	var check_agree = document.getElementById("check_agree");
	if(your_name == ""){
		document.getElementById("check_name").style.display = 'block';
		return false;
	} else{
		document.getElementById("check_name").style.display = 'none';
	}
	if((mail_address == "") || (isEmail(mail_address) == false)){
		document.getElementById("check_email").style.display = 'block';
		return false;
	} else{
		document.getElementById("check_email").style.display = 'none';
	}
	if(contents == ""){
		document.getElementById("check_content").style.display = 'block';
		return false;
	} else{
		document.getElementById("check_content").style.display = 'none';
	}
	if(check_agree.checked){
		document.getElementById("noti_check_agree").style.display = 'none';
	} else{
		document.getElementById("noti_check_agree").style.display = 'block';
		return false;
	}

	return true;
}
// button step confirm
function form_confirm(){
	if(check_value() == true)
	{
		document.getElementById("contact_step_1").style.display = 'none';
		document.getElementById("contact_step_2").style.display = 'block';
		document.getElementById("contact_form").style.display = 'none';
		document.getElementById("btn_confirm").style.display = 'none';
		document.getElementById("note").style.display = 'none';
		document.getElementById("checkbox-agree").style.display = 'none';
		document.getElementById("contact_confirm").style.display = 'block';
		document.getElementById("btn_back").style.display = 'none';
		document.getElementById("contact_send").style.display = 'block';
	}

}
// button step back
function form_back() {
	document.getElementById("contact_step_1").style.display = 'block';
	document.getElementById("contact_step_2").style.display = 'none';
	document.getElementById("contact_form").style.display = 'block';
	document.getElementById("btn_confirm").style.display = 'block';
	document.getElementById("note").style.display = 'block';
	document.getElementById("checkbox-agree").style.display = 'block';
	document.getElementById("contact_confirm").style.display = 'none';
	document.getElementById("btn_back").style.display = 'none';
	document.getElementById("contact_send").style.display = 'none';
}
// button step send
function form_send(){
	document.getElementById("contact_step_2").style.display = 'none';
	document.getElementById("contact_step_3").style.display = 'block';
	document.getElementById("contact_confirm").style.display = 'none';
	document.getElementById("btn_back").style.display = 'none';
	document.getElementById("contact_send").style.display = 'none';
	document.getElementById("contact_complete").style.display = 'block';
	document.getElementById("btn_complete").style.display = 'block';
}
(function($) {
	$(document).ready(function() {
		$('#btn_confirm').click(function() {
			var sender_name = $('#contact_form_text_1').val();
			var sender_company = $('#contact_form_text_2').val();
			var sender_email = $('#contact_form_text_3').val();
			var sender_tel = $('#contact_form_text_4').val();
			var sender_message = $('#contact_form_text_5').val();
			// $('#infor1').html('<i class="fa fa-check" aria-hidden="true"></i> ' + sender_checkbox.join('  <i class="fa fa-check" aria-hidden="true"></i> '));
			$('#infor1').text(sender_name);
			$('#infor2').text(sender_company);
			$('#infor3').text(sender_email);
			$('#infor4').text(sender_tel);
			$('#infor5').text(sender_message);
		});
	});
})(jQuery);