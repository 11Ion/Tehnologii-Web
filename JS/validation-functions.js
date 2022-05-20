
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
            $("#email_error_message").hide();
            $("#email").css("border-bottom", "2px solid #34F458");
        }else{
            $("#email_error_message").html("Email nevalid");
            $("#email_error_message").show();
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
           $("#phone_error_message").html("Telefon nevalid");
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
           $("#address_error_message").html("Adresă nevalidă");
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
           $("#donation_sum_error_message").html("Sumă invalidă");
           $("#donation_sum_error_message").show();
           $("#donation_sum").css("border-bottom","2px solid #F90A0A");
           error_donation_sum = true;
        }
     }

     function check_password() {
        var password_length = $("#password").val().length;
        if (password_length < 8) {
           $("#password_error_message").html("Parola trebuie să conțină 8 caractere");
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
           $("#password_error_message2").html("Parolele nu coincid");
           $("#password_error_message2").show();
           $("#password2").css("border-bottom","2px solid #F90A0A");
           error_retype_password = true;
        } else {
           $("#password_error_message2").hide();
           $("#password2").css("border-bottom","2px solid #34F458");
        }
     }
