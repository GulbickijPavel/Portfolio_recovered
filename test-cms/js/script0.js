$(document).ready(function(){
    $('.web-page-only-control').hide();
    $('.cms-page-only-control').hide();
    $('.main-web-page-control').hide();
    $('.control').hide();
    function activeTab(tab){
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    };
//    $('#view').hide();
//    $('#source').hide();
    function CKupdate(){
        for (var instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }

    $(document).on("click", "#load-tr-button", function(){
      // console.log('clicked');
      // var ckIds = $(".editor-test").map(function(i){
      //     var dataToPass = $('#'+this.id+'').val(),
      //         name = this.id;
      //     //    CKEDITOR.instances[name].setData(dataToPass);
      //     // setTimeout(function(){
      //     //
      //     // }, 0);
      // });
      // ckIds.get();

    });
    $(document).on("click", ".wiev-rr-button-my", function(){
        var fileToReload = $('#fileName').text();
        request = $.ajax({
            url: "php/showDocumentView.php",
            type: "post",
            data: { page: page, link: fileToReload, langToShow: $("#langDropDown").val() }
        });
        request.success(function(data) {
            $("#view").empty();
            $("#view").append(data);
               var expSlider = $('#experience .bxslider').bxSlider({
                infiniteLoop: false,
                hideControlOnEnd: true,
                adaptiveHeight: false,
                preloadImages: 'visible',
                onSliderLoad: function(){
                    $("#experience .bxslider").css("visibility", "visible");
                    $("#experience .bxslider").css("max-height", "auto");
                }
            });
            var projSlider = $('#projects .bxslider').bxSlider({
                infiniteLoop: false,
                hideControlOnEnd: true,
                adaptiveHeight: false,
                touchEnabled: true,
                preloadImages: 'visible',
                onSliderLoad: function(){
                    $("#projects .bxslider").css("visibility", "visible");
                    $("#projects .bxslider").css("max-height", "auto");
                }
            });
            var getScript = jQuery.getScript;
            jQuery.getScript = function( resources, callback ) {
                var // reference declaration & localization
                length = resources.length,
                handler = function() { counter++; },
                deferreds = [],
                counter = 0,
                idx = 0;
                for ( ; idx < length; idx++ ) {
                    deferreds.push(
                        getScript( resources[ idx ], handler )
                    );
                }
                jQuery.when.apply( null, deferreds ).then(function() {
                    callback && callback();
                });
            };
        });
    });
    $(document).on("click", "#edit-tab", function(){
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
    });
    $(document).on("click", "#view-tab-li", function(){
        $('.language-select').removeClass('hide-me');
    });
    $(document).on("click", "#new-item-tab", function(){
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
    });
    $(document).on("click", "#translations-tab", function(){
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
    });
    $(document).on("click", "#header-control-tab", function(){
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
    });
    $(document).on("click", "#footer-control-tab", function(){
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
    });
    $(document).on("click", "#meniu-control-tab", function(){
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
    });
    $(document).on("click", ".section-controll", function(){
        $('.cms-page-only-control').hide();
        $('.main-web-page-control').hide();
        $('.web-page-only-control').show();
        $('.language-select').removeClass('hide-me');
        $('.control').show();
        activeTab('view');
        ref = $(this).attr("ref");
        page = (ref.split("/").pop()).slice(0, ref.length - 4);
        $("#table-field").val(page);
        $("#new-item-table-field").val(page);
        $("#fileName").text(ref);
        request = $.ajax({
            url: "php/showDocumentView.php",
            type: "post",
            data: { page: page, link: $(this).attr("ref"), langToShow: "en" }
        });
        request.success(function(data) {
            $("#view").empty();
            $("#view").append(data);
            var expSlider = $('#experience .bxslider').bxSlider({
                infiniteLoop: false,
                hideControlOnEnd: true,
                adaptiveHeight: false,
                preloadImages: 'visible',
                onSliderLoad: function(){
                    $("#experience .bxslider").css("visibility", "visible");
                    $("#experience .bxslider").css("max-height", "auto");
                }
            });
            var projSlider = $('#projects .bxslider').bxSlider({
                infiniteLoop: false,
                hideControlOnEnd: true,
                adaptiveHeight: false,
                touchEnabled: true,
                preloadImages: 'visible',
                onSliderLoad: function(){
                    $("#projects .bxslider").css("visibility", "visible");
                    $("#projects .bxslider").css("max-height", "auto");
                }
            });
            var getScript = jQuery.getScript;
            jQuery.getScript = function( resources, callback ) {

                var // reference declaration & localization
                length = resources.length,
                handler = function() { counter++; },
                deferreds = [],
                counter = 0,
                idx = 0;
                for ( ; idx < length; idx++ ) {
                    deferreds.push(
                        getScript( resources[ idx ], handler )
                    );
                }
                jQuery.when.apply( null, deferreds ).then(function() {
                    callback && callback();
                });
            };
             CKEDITOR.replaceAll( 'ckeditor' );
        });
    });
    $(document).on("submit", "#control-form", function(){
        CKupdate();
        var itemId = $("#item-id").val();
        angular.element('#wrapper').scope().go(page, itemId-1);
        formsubmit = $.ajax({
            url: "testSave.php",
            type: "post",
            data: new FormData(this),
           // data: $('#control-form').serialize()
            processData: false,
            contentType: false
        })
        .success(function(data) {
            // console.log(page);
            var itemId = $("#item-id").val();
          //  angular.element('#wrapper').scope().go(page, 0);
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert"> '+data+'</div>';
            $('#edit').prepend(successMsg);
        });
        setTimeout(function () {
            $('#edit').children().remove('.alert-success');
            angular.element('#wrapper').scope().go(page, itemId-1);
        }, 3000);
        setTimeout(function(){
            CKEDITOR.replaceAll('ckeditor');
        }, 3500);
    });
    $(document).on("submit", "#new-tem-form", function(){
        CKupdate();
        formsubmit = $.ajax({
            url: "testSave2.php",
            type: "post",
       //  data: $('#new-tem-form').serialize()
            data: new FormData(this),
            processData: false,
            contentType: false
        })
        .success(function(data) {
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert"> '+data+'</div>';
            $('#new-item').prepend(successMsg);
            angular.element('#wrapper').scope().go(page, 0);
        });
        setTimeout(function () {
            $('#new-item').children().remove('.alert-success');
            $( '#new-tem-form' ).each(function(){
                this.reset();
            });
            for (var instance in CKEDITOR.instances )
            {
                CKEDITOR.instances[instance].setData('');
            }
            angular.element('#wrapper').scope().go(page, 0);
            //angular.element('#wrapper').scope().go(page, 0);
        }, 3000);
        setTimeout(function(){
            CKEDITOR.replaceAll('ckeditor');
        }, 3500);
//        setTimeout(function(){
//            CKEDITOR.replaceAll('ckeditor');
//        }, 3050);
    });
    $(document).on("click", ".skill-image", function(){
        var id = $(this).attr('id');
        $('.skill-description.open').removeClass("open");
        $('.skill-image.active').removeClass("active-skill");
        $('article#'+id+'-desc'+'.skill-description').toggleClass('open');
        $('img#'+id+'.skill-image').toggleClass('active-skill');
    });
    $(document).on("change", "#item-id", function(){
        var ckIds = $(".editor-test").map(function(i){
            var dataToPass = $('#'+this.id+'').val(),
                name = this.id;
            setTimeout(function(){
              CKEDITOR.instances[name].setData(dataToPass);
            }, 0);
        });
        ckIds.get();
    });
    $(document).on("change", ".image-path", function(){
        // console.log(this.id);
        var tmppath = URL.createObjectURL(event.target.files[0]),
            id = this.id,
            table = $('#table-field').val(),
            filename = $('#'+id+'').val().replace(/^.*[\\\/]/, ''),
            imagePath = '/images/'+table.substr(0, table.length-4)+'/'+filename+'';
        $('#'+id+'-image').val(imagePath);
        $('#example-'+id+'').fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
    });
    $(document).on("click", "#item-del-button", function(){
        var itemId = $("#item-id").val(),
            table = (page).substr(0, page.length-4),
            itemKey = $("#selected-item").attr("name");
        // console.log(itemId);
        // console.log((page).substr(0, page.length-4));
        // console.log($("#selected-item").attr("name"));
        request = $.ajax({
            url: "php/save.php",
            type: "post",
            data: { sectionname: "delete", key: itemKey, table: table, itemid: itemId }
        });
        request.success(function(data) {
            angular.element('#wrapper').scope().go(page, 0);
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
            $('#control-form').prepend(successMsg);
        });
        setTimeout(function () {
            $('#control-form').children().remove('.alert-success');
            CKEDITOR.replaceAll('ckeditor');
        }, 3000);
    });
    $(document).on("click", ".cms", function(){
        $('.cms-page-only-control').show();
        $('.control').show();
        $('.main-web-page-control').hide();
        $('.web-page-only-control').hide();
        $("#fileName").text("");
        $("#view").empty();
        $("#table-field").empty();
        $("#new-item-table-field").empty();
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
//        $('#file-content').empty();
        //$('.cms-page-control [href="#translations"]').tab('show');
        activeTab('translations');
    });
    $(document).on("click", ".translation-save", function(){
        var id = this.id,

            ru = $('#'+"ru"+id+'').val(),
            en = $('#'+"en"+id+'').val(),
            lt = $('#'+"lt"+id+'').val();
          //  console.log($("#tr-form-"+id).serialize());
            request = $.ajax({
                method: "POST",
                url:"php/save.php?sectionname=translations-save",
                data: $("#tr-form-"+id).serialize()
            });
            request.success(function(data) {
                // console.log(data);
                $('#okimg'+ id +'').show();
              //  $('#okimg').delay(5000).hide();
                (function (el) {
                    setTimeout(function () {
                       $('#okimg'+ id +'').hide();
                    }, 3000);
                }($('#okimg'+ id +'').show()));
              //  angular.element('#wrapper').scope().translation();
            });
        //     request =$.ajax({
        //     method: "POST",
        //     url:"php/save.php",
        //     data: { sectionname: "translations-save",  trid: id, langru: ru, langen: en, langlt: lt }
        // });
        // request.success(function(data) {
        //     $('#okimg'+ id +'').show();
        //   //  $('#okimg').delay(5000).hide();
        //     (function (el) {
        //         setTimeout(function () {
        //            $('#okimg'+ id +'').hide();
        //         }, 3000);
        //     }($('#okimg'+ id +'').show()));
        //     angular.element('#wrapper').scope().translation();
        // });
        // request.fail(function( jqXHR, textStatus ) {
        //   alert( "Request failed: " + textStatus );
        // });
    });
    $("#new-translation").click(function(event){
        var ru = $('#new-ru').val(),
            en = $('#new-en').val(),
            lt = $('#new-lt').val(),
            request =$.ajax({
            method: "POST",
            url:"php/save.php",
            data: { sectionname: "translations-new", langru: ru, langen: en, langlt: lt }
        });
        request.success(function(data) {
            (function (el) {
                setTimeout(function () {
                   $('#save-success').hide();
                }, 3000);
            }($('#save-success').show()));
            angular.element('#wrapper').scope().translation();
        });
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
    });
    $(document).on("click", ".translation-delete", function(){
        var id = (this.id).substr(3),
            ru = $('#'+"ru"+id+'').val(),
            en = $('#'+"en"+id+'').val(),
            lt = $('#'+"lt"+id+'').val();

        request =$.ajax({
            method: "POST",
            url:"php/save.php",
            data: { sectionname: "delete", key: "translationid", table: "translations",  itemid: id}
        });
        request.success(function(data) {

            $('#okimg'+ id +'').show();
          //  $('#okimg').delay(5000).hide();
            (function (el) {
                setTimeout(function () {
                   $('#okimg'+ id +'').hide();
                }, 3000);
            }($('#okimg'+ id +'').show()));
            angular.element('#wrapper').scope().translation();
        });
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
     });
     $(document).on("click", ".main-controll", function(){
        $('.cms-page-only-control').hide();
        $('.main-web-page-control').show();
        $('.web-page-only-control').hide();
        $('.control').show();
        ref = $(this).attr("ref");
        page = (ref.split("/").pop()).slice(0, ref.length - 4);
        //$("#fileName").text($(this).attr("ref"));
        $("#fileName").text(ref);
//        $.get(ref, function (data) {
//            $('#file-content').text(data);
//        });
     });
    $('.ckeditor-rr').on("click", function(e){
        CKEDITOR.replaceAll('ckeditor');
    });
    $(document).on("click", "#h-f-control", function(){
        $('.cms-page-only-control').hide();
        $('.main-web-page-control').show();
        $('.web-page-only-control').hide();
        $('.control').show();
        activeTab('header-control');
    });
    $(document).on("click", ".meniu-control-save", function(){
        var id = this.id.substring(7),
            secName = $('#secName'+id+'').val(),
            secTable = $('#secTable'+id+'').val(),
            secShow = $('#secShow'+id+'').val(),
            secOrder = $('#secOrder'+id+'').val(),
//            console.log(secName);
//            console.log(secTable);
//            console.log(secShow);
//            console.log(secOrder);
            request =$.ajax({
            method: "POST",
            url:"php/save.php",
            data: { sectionname: 'meniu-save',  secId: id, section: secName, usingTable: secTable, shown: secShow, sectionOrder:  secOrder}
        });
        request.success(function(data) {
            // console.log(data);
        //$('#okimg'+ id +'').show();
        //  $('#okimg').delay(5000).hide();
            (function (el) {
                setTimeout(function () {
                   $('#okimg'+ id +'').hide();
                }, 3000);
            }($('#okimg'+ id +'').show()));
//            angular.element('#wrapper').scope().translation();
        });
        request.fail(function( jqXHR, textStatus ) {
          alert( "Request failed: " + textStatus );
        });
    });
    $(document).on("click", ".section-add-btn", function(url, title, w, h){
        $.magnificPopup.open({
            items: {
              src: '#new-section-form228',
              type: 'inline'
            }
        });
        $('.new-section-form-container').removeClass('hide-me');
    });
    $(document).on("submit", "#new-section-form228", function(){
        // console.log("clicked");
        var request = $.ajax({
            url: "php/createSection.php",
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false
        });
        request.success(function(data){
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
            $('#new-section-form228').prepend(successMsg);
        });
        setTimeout(function () {
            $('#new-section-form228').children().remove('.alert-success');
        }, 3000);
    });
     $(document).on("click", ".lang-add-btn", function(){
      $.magnificPopup.open({
        items: {
          src: '#new-lang-container',
          type: 'inline'
        }
      });
      $(".mfp-container .new-lang-form").show();
    });
    $(document).on("submit", "#new-lang-form", function(){
      request = $.ajax({
        method: "POST",
        url:"php/newLang.php",
        data: new FormData(this),
        processData: false,
        contentType: false
      });
      request.success(function(data) {
        $('.alert-success').remove();
        var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
        $('#new-lang-form').prepend(successMsg);
      });
      setTimeout(function () {
          $('#new-lang-form').children().remove('.alert-success');
      }, 3000);
    });
    $(document).on("click", ".lang-control-btn", function(){
      $.magnificPopup.open({
        items: {
          src: '#lang-control-container',
          type: 'inline'
        }
      });
      $(".mfp-container .new-lang-form").show();
    });
    $(document).on("submit", "#text-translations-form", function(e){
        e.preventDefault();
        CKupdate();
        var itemId = $("#item-id").val();
        var translationid = $("input[name=description]").val();
        request = $.ajax({
          method: "POST",
          url:'php/saveTextTranslations.php?meme='+translationid,
          data: new FormData(this),
          processData: false,
          contentType: false
        });
        request.success(function(data) {
          // $('#control-form').submit();
          $('.alert-success').remove();
          // console.log(page);
          angular.element('#wrapper').scope().go(page, 0);
          var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
          $('#control-form').prepend(successMsg);
        });
        setTimeout(function () {
           $('#control-form').children().remove('.alert-success');
        //   angular.element('#wrapper').scope().go(page, itemId-1);
      }, 3000);
        setTimeout(function(){
            CKEDITOR.replaceAll('ckeditor');
        }, 3500);
    });
    $(document).on("click", ".edit-rr-button", function(e) {
      //  CKEDITOR.replaceAll('ckeditor');
        // console.log("rr clicked");
        angular.element('#wrapper').scope().go(page, 0);
    })
    // $(document).on("click", "#test-form-submit", function(e){
    //     $("#control-form").submit();
    //     $("#text-translations-form").submit();
    // });
      // $(document).on("click", ".selected-languages", function(e) {
      //     $('.translations-control').removeClass('hide-me');
      // });
});
