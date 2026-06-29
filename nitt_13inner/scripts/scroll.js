window.onload = function(){
    if(navigator.appVersion.indexOf("MSIE 7.")) {
    var cbpAnimatedHeader = (function() {
    var docElem = document.documentElement,
        header = document.querySelector( '.cbp-af-header' ),
        didScroll = false,
        changeHeaderOn = 125;
 
    function init() {
	        window.addEventListener( 'scroll', function( event ) {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 100 );
            }
	    }, false );
    }
 
    function scrollPage() {
	var scrollHiddenDiv = document.getElementById("scroll_hidden_div");
	var mainNav = document.getElementById("main-nav");
        var sy = scrollY();
        if ( sy >= changeHeaderOn ) {
		if(header.className.indexOf('cbp-af-header-shrink') == -1){
			header.className+=" cbp-af-header-shrink";
			scrollHiddenDiv.style.display = "block";
			mainNav.style.display = "none";
		}
        }
        else {
		header.className=header.className.replace('cbp-af-header-shrink','');
		scrollHiddenDiv.style.display = "none";
		mainNav.style.display = "block";
        }
        didScroll = false;
    }
 
    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }
 
    init();
	  
	})();}}
    