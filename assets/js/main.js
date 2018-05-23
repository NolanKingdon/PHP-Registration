$(document).on('submit', 'form.js-register', function(e){
    e.preventDefault();
    
    var form = $(this);
    var error = $(".js-error", form);
    var data = {
        email: $("input[type='email']", form).val(),
        password: $("input[type='password']", form).val(),
    }

    console.log(data);
    //Add in more validations later maybe.
    if(data.email.length < 6){
        error.text("Please enter a valid email address").show();
        return false;
    } else if (data.password.length < 8) {
        error.text("Password must be at least 8 characters long").show();
        return false;
    }
    
    //if we get this far, we're going to hide the error
    error.hide();
    
    return false;
})