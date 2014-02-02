$(function() {
  
    // Setup form validation on the #register-form element
    $("#signupform").validate({
    
        // Specify the validation rules
        rules: {
            namesu: "required",
            emailsu: {
                required: true,
                email: true
            },
            keysu: {
                required: true,
                minlength: 5
            },
            agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
            namesu: "Please enter your name",
            keysu: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            emailsu: "Please enter a valid email address",
            agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

});


$(function() {
  
    // Setup form validation on the #register-form element
    $("#signinform").validate({
    
        // Specify the validation rules
        rules: {
            emailsi: {
                required: true,
                email: true
            },
            keysi: {
                required: true,
                minlength: 5
            },
            agree: "required"
        },
        
        // Specify the validation error messages
        messages: {
            keysi: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            emailsi: "Please enter a valid email address",
            agree: "Please accept our policy"
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

});