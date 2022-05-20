
    $("#name_error_message").hide();
    $("#email_error_message").hide();
    
    var error_name = false;
    var error_email = false;
    
    $("#name").focusout(function(){
        checkname();
    });
    $("#email").focusout(function(){
        check_email();
    });
    
function check_validation(){
        error_name = false;
        error_email = false;
    
      checkname();
      check_email();
    
      if(error_name === false && error_email === false){
          return true;
      }else{
        $("#validationText").text("Vă rugăm să completați câmpurile corect!");
          return false;
      }
}

$("form").submit(function(event){
    event.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    if(check_validation() === true){

$.ajax({
    url: "contact-form.php",
    method: "POST",
    data: {name:name, email:email},
    dataType: "JSON",
    success:function(result){
        $("#validationText").text(result);
    }
});
}
    });
