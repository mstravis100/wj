// // CONSOLIDATING ALL SCROLLEVENTS, GRID, & LAZYLOAD

// functionsJS();
// function functionsJS(){


//   var RRRRwidth = $(window).width();
//   if (RRRRwidth < 896 ) { return; }

// /* JAVASCRIPT
// 	 _                 _                 _  __  __                        _ _
// 	| | __ _ _____   _| | ___   __ _  __| | \ \/ /  _ __   __ _ _ __ __ _| | | __ ___  __
// 	| |/ _` |_  / | | | |/ _ \ / _` |/ _` |  \  /  | '_ \ / _` | '__/ _` | | |/ _` \ \/ /
// 	| | (_| |/ /| |_| | | (_) | (_| | (_| |  /  \  | |_) | (_| | | | (_| | | | (_| |>  <
// 	|_|\__,_/___|\__, |_|\___/ \__,_|\__,_| /_/\_\ | .__/ \__,_|_|  \__,_|_|_|\__,_/_/\_\
// 	             |___/                             |_|
// */

// /* lazyload.js (c) Lorenzo Giuliani
//  * MIT License (http://www.opensource.org/licenses/mit-license.html)
//  */

// !function(window){

//   // DEBOUNCE
//   // Returns a function, that, as long as it continues to be invoked, will not
//   // be triggered. The function will be called after it stops being called for
//   // N milliseconds. If `immediate` is passed, trigger the function on the
//   // leading edge, instead of the trailing.
//   function debounce(func, wait, immediate) {
//   	var timeout;
//   	return function() {
//   		var context = this, args = arguments;
//   		var later = function() {
//   			timeout = null;
//   			if (!immediate) func.apply(context, args);
//   		};
//   		var callNow = immediate && !timeout;
//   		clearTimeout(timeout);
//   		timeout = setTimeout(later, wait);
//   		if (callNow) func.apply(context, args);
//   	};
//   };


//   var $q = function(q, res){
//         if (document.querySelectorAll) {
//           res = document.querySelectorAll(q);
//         } else {
//           var d=document
//             , a=d.styleSheets[0] || d.createStyleSheet();
//           a.addRule(q,'f:b');
//           for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
//             l[b].currentStyle.f && c.push(l[b]);

//           a.removeRule(0);
//           res = c;
//         }
//         return res;
//       }
//     , addEventListener = function(evt, fn){
//         window.addEventListener
//           ? this.addEventListener(evt, fn, false)
//           : (window.attachEvent)
//             ? this.attachEvent('on' + evt, fn)
//             : this['on' + evt] = fn;
//       }
//     , _has = function(obj, key) {
//         return Object.prototype.hasOwnProperty.call(obj, key);
//       }
//     ;

//   function loadImage (el, fn) {
//     var img = new Image() // creates new image
//       , src = el.getAttribute('data-src'); // gets attribute
//     img.onload = function() {
//       if (!! el.parent)
//         el.parent.replaceChild(img, el)
//       else
//         el.src = src;

//       fn? fn() : null;
//     }
//     img.src = src;
//   }

//   function hasClass(element, cls) {
//     return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
//   }

//   function getImgElement(el){
//     var span = el.getElementsByTagName('span')
//       , elemParent = el.parentNode
//       , parentHt = elemParent.clientHeight;

//     if ( hasClass(elemParent, 'outer-content') && parentHt != 0 ) {

//       for (var i = 0; i < span.length; i++) {
//         if (! span[i].hasChildNodes() ){
//           continue;
//           // console.log('noChild');
//         } else {
//           var img = span[i].firstChild;
//           // console.log(img);
//           return img;
//           // console.log('hasChild');
//         }
//       };
//     }
//   }

//   function updateGridHeight (el) {
//     setTimeout(function(){
//   	var elemParent = el.parentNode
//   	  , parentHt = elemParent.clientHeight;

// 	  if ( (hasClass(elemParent, 'outer-content')) && parentHt != 0 && !(hasClass(el, 'loaded')) ) {
// 	  	  var elemGrdpa = elemParent.parentNode
//           , innerCont = elemGrdpa.getElementsByClassName('inner-content');

// 	  	  elemGrdpa.style.height = (parentHt + 'px');
// 	  	  el.className = el.className + " loaded";

//         for (var i = 0; i < innerCont.length; i++) {
//             var lazyImage = innerCont[i].getElementsByClassName('lazyload');

//             for (var i = 0; i < lazyImage.length; i++) {
//               lazyImage[i].setAttribute("data-picture","");
//               window.picturefill();
//             };
//         };
//         return;
// 	  } else { return; }
//     },150);
//   }

//   function elementInViewport(el) {
//     var rect 	= el.getBoundingClientRect()

//     return (
//        rect.bottom    >= 0
//     && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
//     )
//   }

//   function elementAboveViewport(el){
//   	var elemrect = el.getBoundingClientRect()
//       , bodyRect = document.body.getBoundingClientRect()
//       , elemtTop = Math.round (elemrect.top - bodyRect.top)
//       , scrllTop = getScrollPosition ()
//       , winHeight = (window.innerHeight || document.documentElement.clientHeight)
//       , scrllBttm = scrllTop+winHeight;

//     if ( elemtTop < scrllBttm) {
//     	el.className = el.className + " already-visible";

//       return;
//     } else { return; }
//   }

//   // always return 1, except at non-default zoom levels in IE before version 8
//   function getZoomFactor () {
//     var factor = 1;
//     if (document.body.getBoundingClientRect) {
//             // rect is only in physical pixel size in IE before version 8
//         var rect = document.body.getBoundingClientRect ();
//         var physicalW = rect.right - rect.left;
//         var logicalW = document.body.offsetWidth;

//             // the zoom level is always an integer percent value
//         factor = Math.round ((physicalW / logicalW) * 100) / 100;
//     }
//     return factor;
//   }

//   function getScrollPosition () {
//     if ('pageXOffset' in window) {  // all browsers, except IE before version 9
//         var scrollLeft =  window.pageXOffset;
//         var scrollTop = window.pageYOffset;
//     }
//     else {      // Internet Explorer before version 9
//         var zoomFactor = getZoomFactor ();
//         var scrollLeft = Math.round (document.documentElement.scrollLeft / zoomFactor);
//         var scrollTop = Math.round (document.documentElement.scrollTop / zoomFactor);
//     }

//     return scrollTop;
//     // console.log(scrollTop);
//   }

//   function triggerParallax(el) {
//     var rect 	= el.getBoundingClientRect()
//       , bodyRect = document.body.getBoundingClientRect()
//       , fixedNav = document.getElementById("inner-header")
//       , navHt	= 0 //fixedNav.clientHeight
//       , rectTop = Math.round (rect.top - bodyRect.top)
//       , rectTop = (rectTop != 0) ? (rectTop-navHt) : rectTop
//       , rectHt  = el.clientHeight
//       , rectBtm = Math.round (rectTop + rectHt)
//       , scrollTop = getScrollPosition ();

//     if ( scrollTop >= rectTop && scrollTop <= rectBtm ) {
//     	return true;
//     } else {
//     	return false;
//     }
//   }

//   function getScrollSpeeds (el) {
//   	var bodyRect = document.body.getBoundingClientRect()
//   	  , elemRect = el.getBoundingClientRect()
// 	   , fixedNav = document.getElementById("inner-header")
//       , navHt	= 0 //fixedNav.clientHeight
//   	  , elemTop = Math.round (elemRect.top - bodyRect.top)
//   	  , elemYpos = (elemTop != 0) ? (elemTop-navHt) : elemTop
//   	  , scrollTop = getScrollPosition ()
//   	  // SMALLER THE DECIMAL = SLOWER SCROLLING SPEED
// 	  // WHOLE NUMBER = 1 = REGULAR SPEED
// 	  // WHOLE NUMBER = 2 = DOUBLE SPEED
// 	  // ADD "-" and container goes opposite way
//   	  , scrllNorm = (scrollTop-elemYpos)
//   	  , scrllSlow = (scrllNorm*.65)
//   	  , scrllSlwr = (scrllNorm*.35);

//   	  // console.log(el.className + '  ' + scrollTop + '  ' + scrllNorm + '  ' + scrllSlow + '  ' + scrllSlwr );
//   	  return {
//   	  	scrllNorm : scrllNorm,
//   	  	scrllSlow : scrllSlow,
//   	  	scrllSlwr : scrllSlwr
//   	  };
//   }

//   function getParallaxChildren (el) {
//   	var children = el.childNodes
//   	  , child = new Array();

//   	for (var i = 0; i < children.length; i++) {
//   	  if (hasClass(children[i],'px-element')) {
//   	  	child[i] = children[i];
//   	  }
//   	}

//   	//console.log(child);
//   	return child;
//   }

//   function applyParallax (el) {
//   	var scrollSpeed = getScrollSpeeds(el)
// 	  , scrollNorm = scrollSpeed.scrllNorm
// 	  , scrollSlow = scrollSpeed.scrllSlow
// 	  , scrollSlwr = scrollSpeed.scrllSlwr

// 	  , child = getParallaxChildren(el);

// 	  for (var i = 0; i < child.length; i++) {
// 	  	if (undefined == child[i]) continue;

//   		// Set Variables
// 	  	if (hasClass(child[i],'px-Center')) {
//   	    	var x = "-50%"
//   	    	  , h = child[i].clientHeight*.5;
//   	    } else {
//   	    	var x = 0
//   	    	  , h = 0;
//   		};
//   	    if (hasClass(child[i],'scrollSlower')) {
//   	    	var y = Math.round(scrollSlwr-h)
//   	    	  , z = 2;
//   	    } else if (hasClass(child[i],'scrollSlow')) {
//   	    	var y = Math.round(scrollSlow-h)
//   	    	  , z = 1;
//   	    } else {
//   	    	var y = Math.round(scrollNorm-h)
//   	    	  , z = 0;
//   	    };

//   	    child[i].style.transform="translate3d(" + x + "," + y + "px," + z + "px)";
//         child[i].style.webkitTransform="translate3d(" + x + "," + y + "px," + z + "px)";
//   	  }

//     return;
//   }

//   function resetParallax(el) {
//   	var child = getParallaxChildren(el);

//   	for (var i = 0; i < child.length; i++) {
//   		if (undefined == child[i]) continue;

// 		  if (hasClass(child[i],'px-Center')) {
//   	    	var x = "-50%"
//   	    	  , y = "-50%";
//   	    } else {
//   	    	var x = 0
//   	    	  , y = 0;
//   		};

// 		child[i].style.transform="translate3d(" + x + "," + y + ", 0)";
//     child[i].style.webkitTransform="translate3d(" + x + "," + y + ", 0)";
// 	  }

//     return;
//   }

//   function killSwitch(){
//   	var bodyClass = document.body
//   	  , htmlClass = document.documentElement;

//   	if (
//   		hasClass(htmlClass,'ie9')
//   	||	hasClass(htmlClass,'lt-ie9')
//   	||	hasClass(bodyClass,'handheld')
//   	||	hasClass(bodyClass,'logged-in')
//   	    )
//   	  return true;
//   	else
//   	  return false;
//   }

//     var images = new Array()
//       , query = $q('.lazyload')
//       , lazyloadScroll = function(){
//           for (var i = 0; i < images.length; i++) {
//             if ( elementInViewport(images[i]) && !(images[i].hasAttribute('data-picture')) ) {

//     		  images[i].setAttribute("data-picture","");
//     		  window.picturefill();

//           images[i].className = images[i].className + " fadeIn";

//     		  // updateGridHeight(images[i]);
//               // loadImage(images[i], function () {
//               //   images.splice(i, i);
//               // });
//             }
//           }; // console.log('lazyloadScroll');
//         }
//       , checkLoadedGrid = function(){
//           for (var i = 0; i < images.length; i++) {
//             var imgs = images[i]
//               , img = getImgElement(images[i]);
//               // console.log(img);
//             if ( img != undefined ){
//               // console.log(images[i]);
//               img.onload = updateGridHeight(imgs);//function(){
//                 // updateGridHeight(imgs);
//                 // setTimeout(function(){updateGridHeight(imgs)},200);
//               // };
//             }
//           };
//         }
// 	  , an_array = new Array()
// 	  , an_query = $q('.animated')
// 	  , animatedLoaded = function(){
// 	  	  setTimeout(function(){
// 	  	    for (var an = 0; an < an_array.length; an++) {
// 	  	      elementAboveViewport(an_array[an]);
// 	  	    }; // console.log('animatedLoaded');
// 	  	  }, 500);
// 	    }
// 	  , animateScroll = function(){
// 	  	  if ( killSwitch() ) return;

// 		  for (var an = 0; an < an_array.length; an++) {
// 			if ( elementInViewport(an_array[an]) && !(hasClass(an_array[an],'animate')) && !(hasClass(an_array[an],'already-visible')) ) {

// 			  an_array[an].className = an_array[an].className + " animate";
// 			}
// 		  };
// 	    }
// 	  , px_array = new Array()
// 	  , px_query = $q('.px-drawer')
// 	  , parallaxScroll = function(){
// 	  	  if ( killSwitch() ) return;

// 		  for (var px = 0; px < px_array.length; px++) {
// 			if ( elementInViewport(px_array[px]) && triggerParallax(px_array[px]) ) {

// 				applyParallax(px_array[px]);

// 			} else {
// 				resetParallax(px_array[px]);
// 			}
// 		  };
// 	    }
//       ;
//     // Array.prototype.slice.call is not callable under our lovely IE8
//     for (var i = 0; i < query.length; i++) {
//       images.push(query[i]);
//     };
//     for (var an = 0; an < an_query.length; an++) {
//       an_array.push(an_query[an]);
//     };
//     for (var px = 0; px < px_query.length; px++) {
//       px_array.push(px_query[px]);
//     };

//     var debouncedResize = debounce(function() {
// 	  // console.log('debouncedresize');
//       // lazyloadScroll();
//       // checkLoadedGrid();
//       // animateScroll();
//       // window.requestAnimationFrame( function(){
//         parallaxScroll();
//       // } );
//     }, 250);


//     // lazyloadScroll();
//     // animatedLoaded();

//     setTimeout(function(){
//       // lazyloadScroll();
//       // checkLoadedGrid();
//       parallaxScroll();
// 	  }, 750);

//     addEventListener('scroll',function(){
//     	// lazyloadScroll();
//      //  checkLoadedGrid();
//     	// animateScroll();
//     	// window.requestAnimationFrame( function(){
//         parallaxScroll();
//       // } );
//     });
//     addEventListener( 'resize', debouncedResize);

// }(this);

// }


