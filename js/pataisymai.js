$(document).on("ready", function() {
  
    $('.cform-submit').attr('disabled', 'disabled');
    // $('.contact-form-check').on('check', function() {
    //     $('.contact-form-submit').removeAttr('disabled', 'disabled');
    // });
    $('.im-not-a-robot').on("click", function(){
        $('.contact-form-wait').removeClass('hide-me');
        setTimeout(function () {
            $(".contact-form-check").removeClass('hide-me');
            $(".contact-form-check").attr('checked', 'checked');
            $(".contact-form-check").attr('disabled', 'disabled');
            $('.contact-form-wait').toggleClass('hide-me');
            $('.cform-submit').removeAttr('disabled', 'disabled');
        }, 5000);
    });
    $(".contact-form-check").on('change', function() {
        if(this.checked) {
            $('.contact-form-wait').removeClass('hide-me');
            $(".contact-form-check").attr('disabled', 'disabled');
            setTimeout(function () {
                $(".contact-form-check").removeClass('hide-me');
                $(".contact-form-check").attr('checked', 'checked');
                $('.contact-form-wait').toggleClass('hide-me');
                $('.cform-submit').removeAttr('disabled', 'disabled');
            }, 3500);
            $('.contact-form-submit').removeAttr('disabled', 'disabled');
        }
        else {
            $('.contact-form-submit').attr('disabled', 'disabled');
        }
    });
    // $('#contact-form').on("submit", function() {
    //     $('#contact-form').each(function() {
    //         $('#contact-form')[0].reset();
    //     });
    //     console.log('submited');
    //     console.log(this);
    // });
});
