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
    
    //When we get this far, we're going to hide the error
    error.hide();
    
    $.ajax({
        type: 'POST',
        url: './ajax/register.php',
        data: data,
        dataType: 'json',
        async: true
    })
    .done(function ajaxDone(data){
        console.log(data.error);
        if (data.redirect !== undefined){
            window.location = data.redirect;
        } else if (data.error !== undefined){
            //Error
            console.log("This email already exists");
            error.text(data.error).show();
        }
    })
    .fail(function ajaxFailed(e) {
        console.log(e);
    })
    .always(function ajaxAlways(data){
        console.log("Always Fires");
    })
    
    return false;
})