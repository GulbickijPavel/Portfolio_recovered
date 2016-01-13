var CMS = angular.module('CMS', []);


CMS.controller('wrapper', function ($scope, $http, $timeout) {
    $scope.fileNav = function() {
      $http.get('php/getDocumentTree.php?tree=main').success(function(data) {
          $scope.fileList = {};
          $scope.fileList = data;
      });
    }
    $scope.fileNav();
    $http.get('php/getDocumentTree.php?tree=settings').success(function(data) {
        $scope.settings = {};
        $scope.settings = data;
    });
    $scope.go = function($file, $value){
        $http.get('php/generateControlPage.php?item='+$file).success(function(data) {
            $scope.ToEdit = {};
            $scope.ToEdit = data;
        });
        $http.get('php/generateControlPage.php?item=combo&file='+$file).success(function(data) {
            $scope.combo = { comb: data};
            $scope.foo = data[$value];
        });
    };
    $scope.skillCat = [
      {catid:'0', category:'Pasirinkite kategoriją'},
      {catid:'1', category:'Pagrindinės'},
      {catid:'2', category:'Papildomos'},
      {catid:'3', category:'Kitos'}
    ];
    $scope.setSkillCat = $scope.skillCat;
    $http.get('php/getTextTranslations.php?getfields=true').success(function(data) {
          $scope.getTextareas = {};
          $scope.getTextareas = data;
    });
    $scope.translation = function(){
        $http.get('php/getTranslations.php').success(function(data) {
            $scope.translations = data;
        });
        $http.get('php/lang.php').success(function(data) {
            $scope.languages = data;
        });
    };
    $scope.langControl = function() {
        $http.get('php/lang.php?item=languageForm').success(function(data) {
            $scope.langFields = data;
        });
        $http.get('php/lang.php?item=combo').success(function(data) {
          $scope.langCmb = {
              langCombo: data
           };
           $scope.langDefault = $scope.langCmb.langCombo;
        });
    };
    $http.get('php/lang.php?item=combo').success(function(data) {
      $scope.langCmb = {
          langCombo: data
       };
       $scope.langDefault = $scope.langCmb.langCombo;
    });
    $scope.textTranslations = function($value){
      $http.get('php/getTextTranslations.php?translationid='+$value).success(function(data) {
          $scope.textTranslation = data;
      });
    };
    $scope.sectionControl = function($value) {
      $http.get('php/getSection.php?item=combo').success(function(data) {
        $scope.sectionCombo = {combo : data} ;
        $scope.sectionVal = data;
      });
      $http.get('php/getSection.php?item=section').success(function(data) {
          $scope.secToEdit = {};
          $scope.secToEdit = data;
      });
    };
    $scope.checkboxModel = {
        value1 : 1,
        value2 : 0
    };
    $scope.meniuControl = function($value) {
        $http.get('php/generateMenu.php').success(function(data) {
            $scope.menuItems = data;
        });
        $http.get('php/generateMenu.php?item=combo').success(function(data) {
            var secItems = [];
            for (var i = 0; i < data.length; i++) {
              secItems.push({'item': i+1});
            }
            $scope.secItems = {
              combo: secItems
            };
            $scope.myDefaulForCombo = data;
        });
    }
});
CMS.filter('langFilter', function() {
  return function(languages, lang) {
    var items = {
      lang: lang,
      out: []
    };
    angular.forEach(languages, function(value, lang) {
      if (typeof this.lang !== 'undefined') {
          if (this.lang[value.Field] === true) {
              this.out.push(value);
          }
          else {

          }
      }

    }, items);
    return items.out;
  };
});
CMS.controller('metaTags', function ($scope, $http) {
    $http.get('php/getMetaTags.php').success(function(data) {
        $scope.meta = data;
  });
});
CMS.controller('links', function ($scope, $http) {
    $http.get('php/getLinks.php').success(function(data) {
        $scope.links = data;
  });
});
CMS.controller('TranslationList', function ($scope, $http) {

});
// CMS.controller('', function ($scope, $http) {
//
// });
