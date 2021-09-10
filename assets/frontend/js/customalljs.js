var siteurl = window.location.origin + '/ci';
$(document).ready(function(){

	$("#getcallback").click(function(){

		var imgsrc = $('#callbackimag').attr('src'); 
 		$("#enq_image").html('<img  class="img-fluid" src="' + imgsrc+ '" />');  
			$('#getcallbackModal').modal('show');
	});

	$("#submitcallbackenq").click(function(){

		var callbackname = $("#callbackname").html();
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var message = $("#message").val();
		var enqurl      = window.location.href;
			if(callbackname!='' && phone!=''){
		$.ajax({
		      url: siteurl + "/frontend/home/callbackenq",
		      type: "POST",
 		      data: {
		        name: name,
		        email: email,
		        phone: phone,
		        message: message,
		        item_name: callbackname,
		        url: enqurl,
		       },
		      success: function (res) {
		       if(res ==='success'){
		       	$("#callbackenqres").html(`<div class="alert alert-success" role="alert">
																	  Thank you, We will call you shortly!
																	</div>`);
		       	  setTimeout(function() {
       location.reload();
      }, 2000);
		       }else{

       			$("#callbackenqres").html(`<div class="alert alert-danger" role="alert">
																	Oops! Something went wrong.
																	</div>`);
		       }
		      }
    });
	}else{
		$("#callbackenqres").html(`<div class="alert alert-danger" role="alert">
																	Empty fields, I can't proceed.
																	</div>`);
	}

	});
});