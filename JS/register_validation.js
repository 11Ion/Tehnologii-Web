
    $("#fname_error_message").hide();
    $("#sname_error_message").hide();
    $("#email_error_message2").hide();
    $("#password_error_message").hide();
    $("#password_error_message2").hide();
    
    var error_fname = false;
    var error_sname = false;
    var error_email = false;
    var error_password = false;
    var error_retype_password = false;
    
    $("#fname").focusout(function(){
        check_fname();
     });
     $("#sname").focusout(function() {
        check_sname();
     });
     $("#email").focusout(function() {
        check_email();
     });
     $("#password").focusout(function() {
        check_password();
     });
     $("#password2").focusout(function() {
        check_retype_password();
     });
      
function check_validation(){
        error_fname = false;
        error_sname = false;
        error_email = false;
        error_password = false;
        error_retype_password = false;

        check_fname();
        check_sname();
        check_email();
        check_password();
        check_retype_password();

        if (error_fname === false && error_sname === false && error_email === false && error_password === false && error_retype_password === false) {
           return true;
        } else {
         $("#validationText").text("Vă rugăm să completați câmpurile corect!");
           return false;
        }
      }

      $(document).ready(function(){
         $("form").submit(function(event){
         event.preventDefault();
         var fname = $("#fname").val();
         var sname = $("#sname").val();
         var email = $("#email").val();
         var password = $("#password").val();
         var password2 = $("#password2").val();
         if(check_validation() === true){
   
            $.ajax({
                url: "register-validation.php",
                method: "POST",
                data: {
                  fname: fname,
                  sname: sname,
                  email: email,
                  password: password,
                  password2: password2},
                dataType: "JSON",
                success:function(result){
                    $("#validationText").text(result);
                }
            });
            }
         });
         });
  
