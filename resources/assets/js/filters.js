function highlightBold(){
    // Completar
}

function htmlSafe($sce){
    return function(value){
        return $sce.trustAsHtml(value);
    };
}

angular.module('filters', [])
    .filter('highlightBold', highlightBold)
    .filter('htmlSafe', htmlSafe);
