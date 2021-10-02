<script >
				$(document).ready(function(evt){
				$("#sendmessage").click(function(evt){
					evt.preventDefault();
					    var valid;	
					    valid = validateContact();
					    if(valid) {
					        jQuery.ajax({.
					            url: "<?php echo site_url('boxing/mail'); ?>",
					            data:'demo-name='+$("name").val()+'&demo-email='+
					            $("email").val()+'&demo-message='+
					            $("message").val(),
					            type: "POST",
					            success:function(data){
					                $("#mail-status").html(data);
					            },
					            error:function (){}
					        });
					    }
					    
					});
				});
				</script>

				<script>
				function validateContact() {

				    var valid = true;
				    $(".info").html('');
				    if(!$("name").val()) {
				        $("name-info").html("(Required)");
				        valid = false;
				    }
				    if(!$("email").val()) {
				        $("email-info").html("(Required)");
				        valid = false;
				    }
				    if(!$("email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
				        $("email-info").html("(Invalid)");
				        valid = false;
				    }
				    if(!$("message").val()) {
				        $("message-info").html("(Required)");
				        // $("message").css('background-color','#FFFFDF');
				        valid = false;
				    }
				    return valid;
				}
				</script>