
$(function() {

	'use strict';

	// Form

	var contactForm = function() {

		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
						minlength: 5
					}
				},
				messages: {
					name: "Please enter your name",
					email: "Please enter a valid email address",
					message: "Please enter a message"
				},
				/* submit via ajax */
				submitHandler: function(form) {		
					var $submit = $('.submitting'),
						waitText = 'Submitting...';

					$.ajax({   	
				      type: "POST",
				      url: "php/send-email.php",
				      data: $(form).serialize(),

				      beforeSend: function() { 
				      	$submit.css('display', 'block').text(waitText);
				      },
				      success: function(msg) {
		               if (msg == 'OK') {
		               	$('#form-message-warning').hide();
				            setTimeout(function(){
		               		$('#contactForm').fadeOut();
		               	}, 1000);
				            setTimeout(function(){
				               $('#form-message-success').fadeIn();   
		               	}, 1400);
			               
			            } else {
			               $('#form-message-warning').html(msg);
				            $('#form-message-warning').fadeIn();
				            $submit.css('display', 'none');
			            }
				      },
				      error: function() {
				      	$('#form-message-warning').html("Something went wrong. Please try again.");
				         $('#form-message-warning').fadeIn();
				         $submit.css('display', 'none');
				      }
			      });    		
		  		}
				
			} );
		}
	};
	contactForm();

});

/* FORM VALIDATION */
jQuery("#frm").validate({

	rules:{
		name:"required",
		email:{
		   required:true,
		   email:true
		},
		number:{
			required:true,
			minlength:11,
	
		}
	   
	
	},
	message:{
		name:"please enter your name",
		email:{
			required:"please enter  email",
			email:"please enter your valid email",
		}
		,
		number:{
			required:"please enter number",
			minlength:"number must be valid",
		},
	},
	
	
	
	});


/* 
function con()
{
	var name=document.getElementById("nameid").value;
	var email=document.getElementById("emailid").value;
	var number=document.getElementById("numberid").value;
	var message=document.getElementById("messid").value;



	if(name=="" | email=="" | number=="" )
	{
		alert("every field is required ");
	}
	 else
	{
		alert("Your Message Has Been Send ")
	}

} */
/* SCROOL TO TOP BUTTON*/
var myButton = document.getElementById("scroll-btn");
window.onscroll=function(){scrollFunction};
function scrollFunction() {
    if (document.body.scrollTop < 20 || document.documentElement.scrollTop < 20){
      myButton.style.display="block";
    }
    else{
        myButton.style.display="none";
    }
}
function scrollBtn() {
    document.body.scrollTop=0;
    document.documentElement.scrollTop=0;
}

