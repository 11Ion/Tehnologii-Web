$(function(){
    $("#fname_error_message").hide();
    $("#sname_error_message").hide();
    $("#email_error_message2").hide();
    $("#phone_error_message").hide();
    $("#address_error_message").hide();
    $("#donation_sum_error_message").hide();
    
    var error_fname = false;
    var error_sname = false;
    var error_email = false;
    var error_phone = false;
    var error_address = false;
    var error_donation_sum = false;
    
    $("#fname").focusout(function(){
        check_fname();
     });
     $("#sname").focusout(function() {
        check_sname();
     });
     $("#email").focusout(function() {
        check_email();
     });
     $("#phone").focusout(function() {
        check_phone();
     });
     $("#address").focusout(function() {
        check_address();
     });
     $("#donation_sum").focusout(function() {
        check_donation_sum();
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
          $("#email_error_message2").html("*Email nevalid");
          $("#email_error_message2").show();
          $("#email").css("border-bottom", "2px solid #F90A0A");
          error_email = true;
      }
  }

  function check_phone() {
      var pattern = /^((373)([0-9]){8})$/;
      var phone = $("#phone").val();
      if (pattern.test(phone) && phone !== '') {
         $("#phone_error_message").hide();
         $("#phone").css("border-bottom","2px solid #34F458");
      } else {
         $("#phone_error_message").html("*Telefon nevalid");
         $("#phone_error_message").show();
         $("#phone").css("border-bottom","2px solid #F90A0A");
         error_phone = true;
      }
   }
  
   function check_address() {
      var address = $("#address").val();
      if (address !== '') {
         $("#address_error_message").hide();
         $("#address").css("border-bottom","2px solid #34F458");
      } else {
         $("#address_error_message").html("*Addresă nevalidă");
         $("#address_error_message").show();
         $("#address").css("border-bottom","2px solid #F90A0A");
         error_address = true;
      }
   }

   function check_donation_sum() { 
      var pattern = /^[1-9]+[0-9]*$/;
      var donation_sum = $("#donation_sum").val();
      if (pattern.test(donation_sum) && donation_sum !== '') {
         $("#donation_sum_error_message").hide();
         $("#donation_sum").css("border-bottom","2px solid #34F458");
      } else {
         $("#donation_sum_error_message").html("*Sumă nevalidă");
         $("#donation_sum_error_message").show();
         $("#donation_sum").css("border-bottom","2px solid #F90A0A");
         error_donation_sum = true;
      }
   }

     $("#form").submit(function() {
        error_fname = false;
        error_sname = false;
        error_email = false;
        error_phone = false;
        error_address = false;
        error_donation_sum = false;

        check_fname();
        check_sname();
        check_email();
        check_phone();
        check_address();
        check_donation_sum();

        if (error_fname === false && error_sname === false && error_email === false && error_phone === false && error_address === false && error_donation_sum === false) {
           alert("Suma a fost donatată cu succes");
           return true;
        } else {
           alert("Vă rog completatați corect formularul");
           return false;
        }
     });
    });