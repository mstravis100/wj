/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
	window.getComputedStyle = function(el, pseudo) {
		this.el = el;
		this.getPropertyValue = function(prop) {
			var re = /(\-([a-z]){1})/g;
			if (prop === 'float') { prop = 'styleFloat'; }
			if (re.test(prop)) {
				prop = prop.replace(re, function () {
					return arguments[2].toUpperCase();
				});
			}
			return el.currentStyle[prop] ? el.currentStyle[prop] : null;
		};
		return this;
	};

}

// as the page loads, call these scripts =======================================================================================*/
jQuery(document).ready(function($) {

	/*
	Responsive jQuery is a tricky thing.
	There's a bunch of different ways to handle
	it, so be sure to research and find the one
	that works for you best.
	*/

	/* getting viewport width */
	var responsive_viewport = $(window).width();

	/* if is below 481px */
	if (responsive_viewport < 481) {

	} /* end smallest screen */

	/* if is larger than 481px */
	if (responsive_viewport > 481) {

	} /* end larger than 481px */

	/* if is above or equal to 768px */
	if (responsive_viewport >= 768) {

			/* load gravatars */
		$('.comment img[data-gravatar]').each(function(){
		$(this).attr('src',$(this).attr('data-gravatar'));
		});

	}

	/* off the bat large screen actions */
	if (responsive_viewport > 1030) {

	}


	// add all your scripts here


	// add active class to parent of whatever link the page is on
	$(function(){
	    var url = window.location.pathname,
	        urlRegExp = new RegExp(url.replace(/\/$/,'') + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
	        // now grab every link from the navigation
	        $('.sub-menu a').each(function(){
	            // and test its normalized href against the url pathname regexp
	            if(urlRegExp.test(this.href.replace(/\/$/,''))){
	                $(this).parent('li').addClass('active');
	            }
	        });
	});


	// CUSTOM MATCHBOX MENU CODE
	// add class to nav based on page
	$('.nav-btn-wrap a').each(function() {
		if ($(this).prop('href') === window.location.href) {
			$(this).addClass('sidebar-active');
		}
	});
	// function for site menu display toggle
	var showMenu = function() {
		$('body').removeClass("active-sidebar").toggleClass("active-nav");
		$('.sidebar-button').removeClass("active-button");
		$('.menu-button').toggleClass("active-button");
		$('#container').toggleClass('close');
		$('#content, .footer').click(function(e){
			if ( $('body').hasClass("active-nav") ) {
				showMenu();
				return false;
				}
		});};
	$('.menu-button').click(function(e) {
		showMenu();
		e.preventDefault();
	});

	$('.menu-item a[href*=#]:not([href=#])').click(function(e) {
		e.preventDefault();
		
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        // return false;
				      }
				    }
		// $('body').removeClass("active-sidebar").toggleClass("active-nav");
		// $('.sidebar-button').removeClass("active-button");
		// $('.menu-button').toggleClass("active-button");
		// $('#container').toggleClass('close');
		if ( $('body').hasClass("active-nav") ) {
				showMenu();
				return false;
				}


	});
	// END OF MENU CODE



	// SLICK SLIDER

	$('.single-item').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    $('.multiple-items').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false
    });
    $('.no-play').slick({
    	dots: true,
    	arrows: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        fade: false
    });
    $('.variable-width').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
    });
    $('.one-time').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });

   //  $('#slider').slick({
   //      dots: true,
   //      accessibility: true,
   //      pauseOnHover: true,
   //      infinite: true,
   //      speed: 600,
  	// 	//fade: true,
  	// 	//slide: '.slider > div',
  	// 	//cssEase: 'linear',
  	// 	//autoplay: true,
  	// 	autoplaySpeed: 10000,
 		// slidesToShow: 1,
 		// slidesToScroll: 1,
 		// asNavFor: '.slider-one',
   //      prevArrow: '<button type="button" class="slick-prev"><span class="icon-prev icon-prev-dims">Previous</a></button>',
   //      nextArrow: '<button type="button" class="slick-next"><span class="icon-next icon-next-dims">Next</span></button>',

   //  });

 


  $('body').flowtype({
   minimum   : 500,
   maximum   : 1200,
   minFont   : 12,
   maxFont   : 24,
   fontRatio : 30
});



$(".sticky-navigation").sticky();




}); /* end of as page load scripts =======================================================================================*/




/******************************************************************************
ON-MEDIA-QUERY - Basically JS MQs
******************************************************************************/


/* onMediaQuery | http://springload.co.nz/love-the-web/ | Released under the MIT license. | Fri 21 June, 2013 */
// (function(b,a){"function"===typeof define&&define.amd?define(function(){return b.MQ=a(b,b.MQ||{})}):b.MQ=a(b,b.MQ||{})})(this,function(b){b.init=function(a){this.callbacks=[];this.new_context=this.context="";if("undefined"!==typeof a)for(i=0;i<a.length;i++)this.addQuery(a[i]);this.addEvent(window,"resize",b.listenForChange,b);this.listenForChange()};b.listenForChange=function(){var a;document.documentElement.currentStyle&&(a=document.documentElement.currentStyle.fontFamily);window.getComputedStyle&&
// (a=window.getComputedStyle(document.documentElement,null).getPropertyValue("font-family"));null!==a&&(a=a.replace(/['",]/g,""),a!==this.context&&(this.new_context=a,this.triggerCallbacks(this.context,"unmatch"),this.triggerCallbacks(this.new_context,"match")),this.context=this.new_context)};b.addQuery=function(a){if(null!==a&&void 0!==a)return this.callbacks.push(a),"string"==typeof a.context&&(a.context=[a.context]),"boolean"!==typeof a.call_for_each_context&&(a.call_for_each_context=!0),""!==this.context&&
// this._inArray(this.context,a.context)&&a.match(),this.callbacks[this.callbacks.length-1]};b.removeQuery=function(a){if(null!==a&&void 0!==a)for(var e=-1;-1<(e=b._indexOf(a,this.callbacks));)this.callbacks.splice(e,1)};b.triggerCallbacks=function(a,b){var c,d;for(c=0;c<this.callbacks.length;c++)!1===this.callbacks[c].call_for_each_context&&("match"===b&&this._inArray(this.context,this.callbacks[c].context)||"unmatch"===b&&this._inArray(this.new_context,this.callbacks[c].context))||(d=this.callbacks[c][b],
// this._inArray(a,this.callbacks[c].context)&&void 0!==d&&d())};b.addEvent=function(a,b,c,d){null!==a&&void 0!==a&&(a.addEventListener?a.addEventListener(b,function(){c.call(d)},!1):a.attachEvent?a.attachEvent("on"+b,function(){c.call(d)}):a["on"+b]=function(){c.call(d)})};b.getPreviousContext=function(){return this.context};b.getContext=function(){return this.new_context};b._inArray=function(a,b){for(var c=b.length,d=0;d<c;d++)if(b[d]==a)return!0;return!1};b._indexOf=function(a,b,c){var d;if(b){if(b.indexOf)return b.indexOf(a,
// c);d=b.length;for(c=c?0>c?Math.max(0,d+c):c:0;c<d;c++)if(c in b&&b[c]===a)return c}return-1};return b});

// var queries = [	{
// 	context: 'mobile',
// 	match: function() { // Your mobile specific logic can go here.
// 		console.log('entering mobile.');
// 	},
// 	unmatch: function() { // We're leaving mobile.
// 		console.log('leaving mobile.');
// 	}// unmatch
// },
// {
// 	context: 'skinny',
// 	match: function() {
// 		console.log('entering tablet');
// 	},
// 	unmatch: function() {
// 		console.log('leaving tablet');
// 	}// unmatch
// },
// {
// 	context: 'desktop',
// 	match: function() {
// 		console.log('entering desktop');
// 	}
// }
// ];
// // Go!
// MQ.init(queries);




/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
	var doc = w.document;
	if( !doc.querySelector ){ return; }
	var meta = doc.querySelector( "meta[name=viewport]" ),
		initialContent = meta && meta.getAttribute( "content" ),
		disabledZoom = initialContent + ",maximum-scale=1",
		enabledZoom = initialContent + ",maximum-scale=10",
		enabled = true,
		x, y, z, aig;
	if( !meta ){ return; }
	function restoreZoom(){
		meta.setAttribute( "content", enabledZoom );
		enabled = true; }
	function disableZoom(){
		meta.setAttribute( "content", disabledZoom );
		enabled = false; }
	function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
		if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );