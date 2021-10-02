<script>
function validateContact() {

    var valid = true;	
    // $(".demoInputBox").css('background-color','');
    $(".info").html('');
    if(!$("#demo-name").val()) {
        $("#demo-name-info").html("(Required)");
        // $("#demo-name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#demo-email").val()) {
        $("#demo-email-info").html("(Required)");
        // $("#demo-email").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#demo-email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#demo-email-info").html("(Invalid)");
        // $("#demo-email").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#demo-human").is(":checked"))  {
        $("#demo-human-info").html("(Required)");
        // $("#demo-message").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#demo-message").val()) {
        $("#demo-message-info").html("(Required)");
        // $("#demo-message").css('background-color','#FFFFDF');
        valid = false;
    }
    return valid;
}
</script>