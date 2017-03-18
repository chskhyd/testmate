/*
 *  Document   : formsValidation.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Validation page
 */

var questionValidation = function() {

    return {
        init: function() {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#questionValidation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                     
                },
                rules: {
                    ques: {
                        required: true,
                        minlength: 3
                    },
                    opt1: {
                        required: true,
                    },
                    opt2: {
                        required: true,
                    },
                    opt3: {
                        required: true,
                    },
                    opt4: {
                        required: true,
                    },
                    
                    ans:{
                        required: true,                       
                    }
                    
                    
                },
                messages: {
                    ques: {
                        required: 'Please enter Question',
                        
                    },
                    'opt1': 'Please enter  option 1 ',
                    'opt2': 'Please enter  option 2 ',
                    'opt3': 'Please enter  option 3 ',
                    'opt4': 'Please enter  option 4 ',
                    'ans':  'Please choose answer'
                   
                }
            });

            
        }
    };
}();