$(document).ready(function(){
    $('.web-page-only-control').hide();
    $('.cms-page-only-control').hide();
    $('.main-web-page-control').hide();
    $('.control').hide();
    function activeTab(tab){
        $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    };
    function CKupdate(){
        for (var instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
    function guid() {
      function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
          .toString(16)
          .substring(1);
      }
      return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
        s4() + '-' + s4() + s4() + s4();
    };
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
                var
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
        $('#fname').text(page);
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
            processData: false,
            contentType: false
        })
        .success(function(data) {
            var itemId = $("#item-id").val();
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert"> '+data+'</div>';
            $('#message-box-div').prepend(successMsg);
        });
        setTimeout(function() {
            angular.element('#wrapper').scope().go(page, 0);
        }, 60);
        setTimeout(function() {
          try {
              CKEDITOR.replaceAll('ckeditor');
          } catch (e) {
            //  console.log(e);
          } finally {

          }
        }, 1000);
        setTimeout(function () {
            $('#edit').children().remove('.alert-success');
        }, 3000);
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
            $('#message-box-div').prepend(successMsg);
            angular.element('#wrapper').scope().go(page, 0);
        });
        setTimeout(function () {
            $('.alert-success').remove();
            $( '#new-tem-form' ).each(function(){
                this.reset();
            });
            angular.element('#wrapper').scope().go(page, 0);
        }, 3000);
        setTimeout(function(){
          try {
              CKEDITOR.replaceAll('ckeditor');
          } catch (e) {
              //console.log(e);
          } finally {

          }
        }, 3500);
    });
    $(document).on("click", ".skill-image", function(){
        var id = $(this).attr('id');
        $('.skill-description.open').removeClass("open");
        $('.skill-image.active').removeClass("active-skill");
        $('article#'+id+'-desc'+'.skill-description').toggleClass('open');
        $('img#'+id+'.skill-image').toggleClass('active-skill');
    });
    $(document).on("change", "#item-id", function(){
        var itemId = $('#item-id').val();
        // angular.element('#wrapper').scope().go(page, itemId-1);
        // setTimeout(function () {
        //     CKEDITOR.replaceAll('ckeditor');
        // }, 45);
        var ckIds = $(".editor-test").map(function(i){
            var dataToPass = $('#'+this.id+'').val(),
                name = this.id;
            setTimeout(function(){
                $('.alert-success').remove();
                try {
                    CKEDITOR.instances[name].setData(dataToPass);
                } catch (e) {
                  //  console.log(e);
                } finally {

                }
            }, 45);
        });
        ckIds.get();
    });
    $(document).on("change", ".image-path", function(){
        var tmppath = URL.createObjectURL(event.target.files[0]),
            id = this.id,
            table = $('#table-field').val(),
            filename = $('#'+id+'').val().replace(/^.*[\\\/]/, ''),
            imagePath = '';
            if (table != "" && table !=" ") {
                imagePath = '/images/'+table.substr(0, table.length-4)+'/'+filename+'';
            }
            else {
                imagePath = '/images/'+filename+'';
            }
        $('#'+id+'-image').val(imagePath);
        $('#example-'+id+'').fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
    });
    $(document).on("click", "#item-del-button", function(){
        var itemId = $("#item-id").val(),
            table = (page).substr(0, page.length-4),
            itemKey = $("#selected-item").attr("name");
        request = $.ajax({
            url: "php/save.php",
            type: "post",
            data: { sectionname: "delete", key: itemKey, table: table, itemid: itemId }
        });
        request.success(function(data) {
            angular.element('#wrapper').scope().go(page, 0);
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
            $('#message-box-div').prepend(successMsg);
        });
        setTimeout(function () {
            $('.alert-success').remove();
            try {
                CKEDITOR.replaceAll('ckeditor');
            } catch (e) {
            //  console.log(e);
            } finally {

            }

        }, 1000);
    });
    $(document).on("click", ".cms", function(){
        $('.cms-page-only-control').show();
        $('.control').show();
        $('.main-web-page-control').hide();
        $('.web-page-only-control').hide();
        $("#fileName").text("");
        $('#fname').text("Vertimai");
        $("#view").empty();
        $("#table-field").empty();
        $("#new-item-table-field").empty();
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
        activeTab('translations');
    });
    $(document).on("click", ".translation-save", function(){
        var id = this.id,

            ru = $('#'+"ru"+id+'').val(),
            en = $('#'+"en"+id+'').val(),
            lt = $('#'+"lt"+id+'').val();
            request = $.ajax({
                method: "POST",
                url:"php/save.php?sectionname=translations-save",
                data: $("#tr-form-"+id).serialize()
            });
            request.success(function(data) {
                $('#okimg'+ id +'').show();
                (function (el) {
                    setTimeout(function () {
                       $('#okimg'+ id +'').hide();
                    }, 3000);
                }($('#okimg'+ id +'').show()));
            });
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
        $("#fileName").text(ref);
        $('#fname').text(page);
     });
    $('.ckeditor-rr').on("click", function(e){
      try {
          CKEDITOR.replaceAll('ckeditor');
      } catch (e) {
          //console.log(e);
      } finally {

      }
    });
    $(document).on("click", "#h-f-control", function(){
        $('.cms-page-only-control').hide();
        $('.control').show();
        $('.main-web-page-control').show();
        $('.web-page-only-control').hide();
        $("#fileName").text("");
        $('#fname').text("Meniu valdymas");
        $("#view").empty();
        $("#table-field").empty();
        $("#new-item-table-field").empty();
        $('.language-select').removeClass('hide-me');
        $('.language-select').toggleClass('hide-me');
        activeTab('menu-control');
    });

    $(document).on("click", ".menu-checkbox", function(){
        var id = this.id,
            checkboxmy = $('#'+id).val();
        if (checkboxmy == '1') {
            $('#'+id).val('0');
        }
        else if (checkboxmy == '0') {
            $('#'+id).val('1');
        }
    });
    $(document).on("click", ".meniu-control-save", function(){
        var id = this.id.substring(7),
            secName = $('#secName'+id+'').val(),
            secTable = $('#secTable'+id+'').val(),
            secShow = $('#secShow'+id+'').val(),
            secOrder = $('#secOrder'+id+'').val(),
            request =$.ajax({
            method: "POST",
            url:"php/save.php",
            data: { sectionname: 'meniu-save',  secId: id, section: secName, usingTable: secTable, shown: secShow, sectionOrder:  secOrder}
        });
        request.success(function(data) {
            (function (el) {
                setTimeout(function () {
                   $('#okimg'+ id +'').hide();
                   angular.element('#wrapper').scope().meniuControl();
                }, 2000);
            }($('#okimg'+ id +'').show()));
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
    $(document).on("click", ".section-controll-btn", function(url, title, w, h){
        $.magnificPopup.open({
            items: {
              src: '#control-section-form228',
              type: 'inline'
            }
        });
        $('.control-section-form-container').removeClass('hide-me');
    });
    $(document).on("submit", "#control-section-form228", function(){
        var request = $.ajax({
            url: "php/createSection.php",
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false
        });
    });
    $(document).on("submit", "#new-section-form228", function(){
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
            $('#message-box-div').prepend(successMsg);
            angular.element('#wrapper').scope().fileNav();
            $('.section-add-btn').fadeOut("fast");
            $('.section-controll-btn').fadeOut("fast");
        });
        setTimeout(function () {
            $('.alert-success').remove();
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
        $('#message-box-div').prepend(successMsg);
      });
      setTimeout(function () {
          $('.alert-success').remove();
      }, 3000);
    });
    $(document).on("click", ".lang-control-btn", function(){
      $.magnificPopup.open({
        items: {
          src: '#lang-control-container',
          type: 'inline'
        }
      });
      $(".mfp-container .edit-lang-form").show();
      setTimeout(function () {
          $('.disabled-input-my').attr('disabled','disabled');
      }, 10);
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
          angular.element('#wrapper').scope().go(page, 0);
          $('.alert-success').remove();
          var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
          $('#message-box-div').prepend(successMsg);
        });
        setTimeout(function () {
          try {
              CKEDITOR.replaceAll('ckeditor');
          } catch (e) {
              //console.log(e);
          } finally {

          }
        }, 1000);
        setTimeout(function() {
            $('.alert-success').remove();
        }, 3000);
    });
    $(document).on("click", ".to-do-show", function(e) {
        $('.todo-list ul').removeClass('hide-me');
    });
    $(document).on("click", ".to-do-hide", function(e) {
        $('.todo-list ul').toggleClass('hide-me');
    });
    $(document).on("click", ".sections-list-a", function(e) {
      if ($('.section-list').is(':visible')) {
          $('.section-list').slideUp("slow");
          $('.section-add-btn').fadeOut("fast");
          $('.section-controll-btn').fadeOut("fast");
      }else {
          $('.section-list').slideDown("slow");
          $('.section-add-btn').fadeIn("slow");
          $('.section-controll-btn').fadeIn("slow");
      }
    });
    $.validate({
        form : '#login-form-my',
        modules : 'security'
    });
    $.validate({
      modules : 'location, date, security, file',
    });
    $(document).on("submit", "#login-form-my", function(e) {
      request = $.ajax({
        method: "POST",
        url:'login.php',
        data: new FormData(this),
        processData: false,
        contentType: false
      });
      request.success(function(data) {
          var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
          $('#login-form-my').prepend(successMsg);
      });
      request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed: " + textStatus );
      });
    });
    $(document).on("click", "#section-del-button", function(e){
        var sid = $("#sectionid2225").val(),
            table = "sections",
            itemKey = "sectionid";
          request = $.ajax({
              url: "php/save.php",
              type: "post",
              data: { sectionname: "full-section-remove", key: itemKey, table: table, itemid: sid }
          });
          request.success(function(data) {
              $('.alert-success').remove();
              var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
              $('#message-box-div').prepend(successMsg);
              angular.element('#wrapper').scope().sectionControl();
              angular.element('#wrapper').scope().fileNav();
              $('.section-add-btn').fadeOut("fast");
              $('.section-controll-btn').fadeOut("fast");
              $('.web-page-only-control').hide();
              $('.cms-page-only-control').hide();
              $('.main-web-page-control').hide();
              $('#fname').empty();
              $('#view').removeClass('active in');
              $('#edit').removeClass('active in');
              $('#new-item').removeClass('active in');
              $('.control').hide();
          });
          setTimeout(function () {
              $('.alert-success').remove();
          }, 3000);
    });
    $(document).on("submit", "#lang-control-form", function(e){
        request = $.ajax({
          method: "POST",
          url:'php/langUpdate.php',
          data: new FormData(this),
          processData: false,
          contentType: false
        });
        request.success(function(data) {
            $('.alert-success').remove();
            var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
            $('#message-box-div').prepend(successMsg);
        });
        request.fail(function( jqXHR, textStatus ) {
            alert( "Request failed: " + textStatus );
        });

        setTimeout(function () {
            angular.element('#wrapper').scope().langControl();
        }, 1000);
        setTimeout(function () {
            $('.disabled-input-my').attr('disabled','disabled');
        }, 1100);
        setTimeout(function () {
            $('.alert-success').remove();
        }, 3000);
    });
    $(document).on("click", "#lang-del-button", function(e){
      var table = "languages",
          itemKey = "languageId",
          itemId = $('#lang-control-id').val();
      request = $.ajax({
          url: "php/save.php",
          type: "post",
          data: { sectionname: "delete", key: itemKey, table: table, itemid: itemId }
      });
      request.success(function(data) {
          $('.alert-success').remove();
          var successMsg = '<div class="alert alert-success" role="alert">'+data+'</div>';
          $('#message-box-div').prepend(successMsg);
          angular.element('#wrapper').scope().langControl();
      });
      setTimeout(function () {
          $('.disabled-input-my').attr('disabled','disabled');
      }, 100);
      setTimeout(function () {
          $('.alert-success').remove();
      }, 3000);
    });
    $(document).on("click", "form .btn-default", function(e){
        var idToReset = $('form .btn-default').closest("form").attr("id");
        $( '#'+idToReset+'' ).each(function(){
            $('#'+idToReset+'')[0].reset();

        });
        var magnificPopup = $.magnificPopup.instance;
        magnificPopup.close();
    });
    $(document).on("change", "#lang-control-id", function(e){
        $("input").removeAttr('disabled');
    });
});
