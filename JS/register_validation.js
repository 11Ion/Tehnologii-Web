if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
	
    $(function(){
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
              
         function check_fname() {
          var pattern = /^[a-zA-Z]*$/;
          var fname = $("#fname").val();
          if (pattern.test(fname) && fname !== '') {
             $("#fname_error_message").hide();
             $("#fname").css("border-bottom","2px solid #34F458");
          } else {
             $("#fname_error_message").html("*Ar trebui să conțină un caracter");
             $("#fname_error_message").show();
             $("#fname").css("border-bottom","2px solid #F90A0A");
             error_fname = true;
          }
       }
    
       function check_sname() {
          var pattern = /^[a-zA-Z]*$/;
          var sname = $("#sname").val()
          if (pattern.test(sname) && sname !== '') {
             $("#sname_error_message").hide();
             $("#sname").css("border-bottom","2px solid #34F458");
          } else {
             $("#sname_error_message").html("*Ar trebui să conțină un caracter");
             $("#sname_error_message").show();
             $("#sname").css("border-bottom","2px solid #F90A0A");
             error_sname = true;
          }
       }
    
     function check_email(){
          var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
          var email = $("#email").val();
          if(pattern.test(email) && email !== ''){
              $("#email_error_message2").hide();
              $("#email").css("border-bottom", "2px solid #34F458");
          }else{
              $("#email_error_message2").html("*Email Greșit");
              $("#email_error_message2").show();
              $("#email").css("border-bottom", "2px solid #F90A0A");
              error_email = true;
          }
      }
    
      function check_password() {
       var password_length = $("#password").val().length;
       if (password_length < 8) {
          $("#password_error_message").html("*Ar trebui să conțină 8 caractere");
          $("#password_error_message").show();
          $("#password").css("border-bottom","2px solid #F90A0A");
          error_password = true;
       } else {
          $("#password_error_message").hide();
          $("#password").css("border-bottom","2px solid #34F458");
       }
    }
    
    function check_retype_password() {
       var password = $("#password").val();
       var retype_password = $("#password2").val();
       if (password !== retype_password) {
          $("#password_error_message2").html("*Parolele nu s-au potrivit");
          $("#password_error_message2").show();
          $("#password2").css("border-bottom","2px solid #F90A0A");
          error_retype_password = true;
       } else {
          $("#password_error_message2").hide();
          $("#password2").css("border-bottom","2px solid #34F458");
       }
    }
    
         $("#form").submit(function() {
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
               alert("Inregistrare reusita");
               return true;
            } else {
               alert("Vă rugăm să completați corect formularul");
               return false;
            }
         });
        });