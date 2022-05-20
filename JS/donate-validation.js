
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

   function check_validation(){
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
         var phone = $("#phone").val();
         var address = $("#address").val();
         var donation_sum = $("#donation_sum").val();
   
         if(check_validation() === true){
            $.ajax({
                url: "donate-validation.php",
                method: "POST",
                data: {
                  fname: fname,
                  sname: sname,
                  email: email,
                  phone: phone,
                  address: address,
                  donation_sum: donation_sum},
                dataType: "JSON",
                success:function(result){
                    $("#validationText").text(result);
                }
            });
            }
         });
         });
  