$(function(){
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
       
    function checkname(){
      var pattern = /^[a-zA-Z-' ]*$/;
      var name = $("#name").val();
      if(pattern.test(name) && name !== ''){
          $("#name_error_message").hide();
          $("#name").css("border-bottom", "2px solid #34F458");
      }else{
          $("#name_error_message").html("*Ar trebui să conțină un caracter");
          $("#name_error_message").show();
          $("#name").css("border-bottom", "2px solid #F90A0A");
          error_name = true;
      }
      }

      function check_email(){
    
        var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $("#email").val();
        if(pattern.test(email) && email !== ''){
            $("#email_error_message").hide();
            $("#email").css("border-bottom", "2px solid #34F458");
        }else{
            $("#email_error_message").html("*Email nevalid");
            $("#email_error_message").show();
            $("#email").css("border-bottom", "2px solid #F90A0A");
            error_email = true;
        }
    }

    $("#form").submit(function(){
    
        error_name = false;
        error_email = false;
    
      checkname();
      check_email();
    
      if(error_name === false && error_email === false){
       alert("Mesaj trasmis cu succes");
          return true;
      }else{
        alert("Vă rugăm să completați corect formularul");
          return false;
      }
    
    });
  });