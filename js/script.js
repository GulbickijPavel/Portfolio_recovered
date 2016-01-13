$(document).ready(function(){
    /*************** cookies **************/
    function cookieLawNotification(){
       days=30;
       myDate = new Date();
       myDate.setTime(myDate.getTime()+(days*24*60*60*1000));
       document.cookie = 'cookieLawNotification=Accepted; expires=' + myDate.toGMTString();
    }
    var cookie = document.cookie.split(';')
        .map(function(x){ return x.trim().split('='); })
        .filter(function(x){ return x[0]==='cookieLawNotification'; })
        .pop();
    if(cookie && cookie[1]==='Accepted') {
        $('.cooke-notification').remove();
        $('body').removeClass('show-cookies-notification');
    }
    else{
        $('.cooke-notification').show();
        $('body').toggleClass('show-cookies-notification');
    }
    $('#cooke-btn').on('click', function(){
        cookieLawNotification();
        $('.cooke-notification').remove();
        $('body').removeClass('show-cookies-notification');
        return false;
    });

    init = {
            skillclickControl : function(){
                 $('.skill-image').click(function(){
                    var id = $(this).attr('id');
                    $('.skill-description.open').removeClass('open');
                    $('.skill-image.active').removeClass('active1');
                    $('article#'+id+'-desc'+'.skill-description').toggleClass('open');
                    $('img#'+id+'.skill-image').toggleClass('active');
                });
            },
            navigationControl : function(){
                $('.menu_item').on('click', function(e) {
                    e.preventDefault();
                    var scrollTarget = $(this).attr('href');
                    $(scrollTarget).velocity('scroll', {
                        duration: 900
                    });
                     $(document).unbind( 'touchmove', touchScroll );
                    $('.navbar-toggle').attr('ria-expanded', 'false');
                    $('#navbar-main').attr('aria-expanded', 'false');
                });
                $('.navbar-toggle').on('click', function(e){
                    $(document).bind( 'touchmove', touchScroll );
                    if($('.navbar-toggle').attr('aria-expanded') == 'true'){
                        $(document).unbind('touchmove', touchScroll);
                    }
                    else if($('.navbar-toggle').attr('aria-expanded') == 'false'){
                        $(document).bind('touchmove', touchScroll);
                    }
                });
                $('[href=#about]').parent().addClass('menu-active');
                var topMenu = $('.navbar'),
                    topMenuHeight = topMenu.outerHeight()+50,
                    menuItems = topMenu.find('.menu_item'),
                    scrollItems = menuItems.map(function(){
                      var item = $($(this).attr('href'));
                      if (item.length) { return item; }
                    });
                $(window).scroll(function(){
                    var fromTop = $(this).scrollTop()+topMenuHeight;
                    var cur = scrollItems.map(function(){
                    if ($(this).offset().top < fromTop)
                       return this;
                    });
                    cur = cur[cur.length-1];
                    var id = cur && cur.length ? cur[0].id : '';
                    menuItems
                     .parent().removeClass('menu-active')
                     .end().filter('[href=#'+id+']').parent().addClass('menu-active');
                });
                 var touchScroll = function( event ) {
                    event.preventDefault();
                };
            },
            validationControl : function(){
                 $.validate({
                    form : '#contact-form',
                    modules : 'security'
                });
                $('#contact-form').submit(function() {
                    var url = 'php/contact.php';
                    $.ajax({
                           type: 'POST',
                           url: url,
                           data: $('#contact-form').serialize(),
                           success: function(data)
                           {
                                $( '.form-submit-mesage' ).remove();
                                $( '.confirmation' ).append(data);
                                if ($('.form-submit-mesage').hasClass('success')) {
                                    $('.cform-submit').attr('disabled', 'disabled');
                                    $(".contact-form-check").removeAttr('checked', 'checked');
                                    $(".contact-form-check").removeAttr('disabled', 'disabled');
                                    setTimeout(function () {
                                        $('#contact-form').each(function() {
                                            $('#contact-form')[0].reset();
                                        });
                                    }, 1000);
                                    setTimeout(function () {
                                        $( '.form-submit-mesage' ).remove();
                                    }, 3000);
                                }
                           }
                         });
                    return false;
                });
            },
            contactFormControl : function(){
                function contact() {
                    $.magnificPopup.open({
                        items: {
                          src: '#contactForm',
                          type: 'inline'
                        }
                    });
                    $('#contactForm').removeClass('hide-me');
                }
                $('[href=#contacts]').on('click', function(){
                    contact();
                });
                $('#cform-cancel').on('click', function(e){
                    $('#contact-form').each(function() {
                        $('#contact-form')[0].reset();
                    });
                    $.magnificPopup.close();
                });
            },
            sliderControl : function(){
                $('.experience-content').removeClass('hide-me');
                $('.projects-content').removeClass('hide-me');
                $('article#slide0-desc.project-description').toggleClass('open');
                 var expSlider = $('#experience .bxslider').bxSlider({
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    adaptiveHeight: false,
                    //preloadImages: 'visible',
                    onSliderLoad: function(){
                        $("#projects .bxslider").css("visibility", "visible");
                        $("#projects .bxslider").css("max-height", "auto");
                    }
                });
                var projSlider = $('#projects .bxslider').bxSlider({
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    adaptiveHeight: false,
                    touchEnabled: true,
                    //preloadImages: 'visible',
                    onSliderLoad: function(){
                        $("#projects .bxslider").css("visibility", "visible");
                        $("#projects .bxslider").css("max-height", "auto");
                    }
                });
            },
            preventScrollMobile : function(){
                var mediaQuery = window.matchMedia('(max-width: 768px)');
                if (mediaQuery.matches){
                    $(document).click(function(e){
                        if( $(e.target).closest('navbar-main').length > 0 ) {
                            return false;
                        }
                        $('#navbar-main').removeClass('in');
                    });
                }
                var mediaQuery = window.matchMedia('(max-width: 768px)');
                if (mediaQuery.matches){
                    $(document).click(function(e){
                        if( $(e.target).closest('.navbar-default').length > 0 ) {

                        }
                        else{
                            $('#navbar-main').removeClass('in');
                            $(document).unbind( 'touchmove', touchScroll );
                        }
                    });
                    $('.image-box a').removeAttr('rel');
                    $('.image-box a').removeAttr('href');
                    $('img').removeClass('center-image');
                }
            }
        }

    init.skillclickControl();
    init.navigationControl();
    init.validationControl();
    init.contactFormControl();
    init.sliderControl();
    init.preventScrollMobile();
});
