(function($) {
    "use strict";

    /*--------------------------------------------------------------
    ## Scripts initialization
    --------------------------------------------------------------*/

  $(function(){
    var windowH = $(window).height();
    var wrapperH = $('.home #content').height();
    if(windowH > wrapperH) {                            
        $('.home #content').css({'height':($(window).height())+'px'});
    }                                                                               
    $(window).resize(function(){
        var windowH = $(window).height();
        var wrapperH = $('.home #content').height();
        var differenceH = windowH - wrapperH;
        var newH = wrapperH + differenceH;
        var truecontentH = $('#truecontent').height();
        if(windowH > truecontentH) {
            $('.home #content').css('height', (newH)+'px');
        }

    })          
});


})(jQuery); // End of use strict