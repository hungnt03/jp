/**
 * Created by onizukasan on 19/04/2015.
 */
$.validator.setDefaults({
    submitHandler: function() {
        alert("submitted!");
    }
});

$(document).ready(function () {
    $('.jp_login').click(function(){
        console.log('dfg');
        $('.jp_login_wrap').slideToggle("slow");
    });
});
//validate
$('form').validate({
    rules: {
        speak: {
            minlength: 1,
            maxlength: 15,
            required: true
        },
        name: {
            minlength: 1,
            maxlength: 15,
            required: true
        },
        mean_c: {
            minlength: 2,
            maxlength: 100,
            required: true
        },
        mean_v: {
            minlength: 2,
            maxlength: 100,
            required: true
        }
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});