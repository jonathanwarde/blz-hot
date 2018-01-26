/* Written by Erik Terwan - MIT license - https://github.com/terwanerik */
!function(t,e){"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&module.exports?module.exports=e():t.ScrollTrigger=e()}(this,function(){"use strict";return function(t,e,n){function i(){var t=h.bindElement.scrollTop?h.bindElement.scrollTop:document.documentElement.scrollTop,e=h.bindElement.scrollLeft?h.bindElement.scrollLeft:document.documentElement.scrollLeft;a.left==e&&a.top==t||h.scrollDidChange(),r.length>0||c.length>0?(u=!0,d(i)):u=!1}function l(t,e){var n=e.split("("),i=n[0];if(n.length>1?(n=n[1].split(")")[0],n=n.indexOf("', '")>-1?n.split("', '"):n.indexOf("','")>-1?n.split("','"):n.indexOf('", "')>-1?n.split('", "'):n.indexOf('","')>-1?n.split('","'):[n]):n=[],n=n.map(function(t){return s(t)}),"function"==typeof h.callScope[i])try{h.callScope[i].apply(t.element,n)}catch(l){try{h.callScope[i].apply(null,n)}catch(l){}}}function s(t){return t+="",'"'==t[0]&&(t=t.substr(1)),"'"==t[0]&&(t=t.substr(1)),'"'==t[t.length-1]&&(t=t.substr(0,t.length-1)),"'"==t[t.length-1]&&(t=t.substr(0,t.length-1)),t}var o=function(t,e){this.element=e,this.defaultOptions=t,this.showCallback=null,this.hideCallback=null,this.visibleClass="visible",this.hiddenClass="invisible",this.addWidth=!1,this.addHeight=!1,this.once=!1;var n=0,i=0;this.left=function(t){return function(){return t.element.getBoundingClientRect().left}}(this),this.top=function(t){return function(){return t.element.getBoundingClientRect().top}}(this),this.xOffset=function(t){return function(e){var i=n;return t.addWidth&&!e?i+=t.width():e&&!t.addWidth&&(i-=t.width()),i}}(this),this.yOffset=function(t){return function(e){var n=i;return t.addHeight&&!e?n+=t.height():e&&!t.addHeight&&(n-=t.height()),n}}(this),this.width=function(t){return function(){return t.element.offsetWidth}}(this),this.height=function(t){return function(){return t.element.offsetHeight}}(this),this.reset=function(t){return function(){t.removeClass(t.visibleClass),t.removeClass(t.hiddenClass)}}(this),this.addClass=function(t){var e=function(e,n){t.element.classList.contains(e)||(t.element.classList.add(e),"function"==typeof n&&n())},n=function(e,n){e=e.trim();var i=new RegExp("(?:^|\\s)"+e+"(?:(\\s\\w)|$)","ig"),l=t.element.className;i.test(l)||(t.element.className+=" "+e,"function"==typeof n&&n())};return t.element.classList?e:n}(this),this.removeClass=function(t){var e=function(e,n){t.element.classList.contains(e)&&(t.element.classList.remove(e),"function"==typeof n&&n())},n=function(e,n){e=e.trim();var i=new RegExp("(?:^|\\s)"+e+"(?:(\\s\\w)|$)","ig"),l=t.element.className;i.test(l)&&(t.element.className=l.replace(i,"$1").trim(),"function"==typeof n&&n())};return t.element.classList?e:n}(this),this.init=function(t){return function(){var e=t.defaultOptions,l=t.element.getAttribute("data-scroll");e&&(e.toggle&&e.toggle.visible&&(t.visibleClass=e.toggle.visible),e.toggle&&e.toggle.hidden&&(t.hiddenClass=e.toggle.hidden),e.showCallback&&(t.showCallback=e.showCallback),e.hideCallback&&(t.hideCallback=e.hideCallback),e.centerHorizontal===!0&&(n=t.element.offsetWidth/2),e.centerVertical===!0&&(i=t.element.offsetHeight/2),e.offset&&e.offset.x&&(n+=e.offset.x),e.offset&&e.offset.y&&(i+=e.offset.y),e.addWidth&&(t.addWidth=e.addWidth),e.addHeight&&(t.addHeight=e.addHeight),e.once&&(t.once=e.once));var s=l.indexOf("addWidth")>-1,o=l.indexOf("addHeight")>-1,r=l.indexOf("once")>-1;t.addWidth===!1&&s===!0&&(t.addWidth=s),t.addHeight===!1&&o===!0&&(t.addHeight=o),t.once===!1&&r===!0&&(t.once=r),t.showCallback=t.element.hasAttribute("data-scroll-showCallback")?t.element.getAttribute("data-scroll-showCallback"):t.showCallback,t.hideCallback=t.element.hasAttribute("data-scroll-hideCallback")?t.element.getAttribute("data-scroll-hideCallback"):t.hideCallback;var c=l.split("toggle(");if(c.length>1){var a=c[1].split(")")[0].split(",");String.prototype.trim||(String.prototype.trim=function(){return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"")}),t.visibleClass=a[0].trim().replace(".",""),t.hiddenClass=a[1].trim().replace(".","")}l.indexOf("centerHorizontal")>-1&&(n=t.element.offsetWidth/2),l.indexOf("centerVertical")>-1&&(i=t.element.offsetHeight/2);var d=l.split("offset(");if(d.length>1){var u=d[1].split(")")[0].split(",");n+=parseInt(u[0].replace("px","")),i+=parseInt(u[1].replace("px",""))}return t}}(this)};this.scrollElement=window,this.bindElement=document.body,this.callScope=window;var r=[],c=[],a={left:-1,top:-1},d=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame||function(t){setTimeout(t,1e3/60)},u=!1,f=function(t){return function(e,n,i){return void 0!=n&&null!=n?t.bindElement=n:t.bindElement=document.body,void 0!=i&&null!=i?t.scrollElement=i:t.scrollElement=window,t.bind(t.bindElement.querySelectorAll("[data-scroll]")),t}}(this);this.bind=function(e){return function(n){n instanceof HTMLElement&&(n=[n]);var l=[].slice.call(n);return l=l.map(function(e){var n=new o(t,e);return n.init()}),r=r.concat(l),r.length>0&&0==u?(u=!0,i()):u=!1,e}}(this),this.triggerFor=function(){return function(t){var e=null;return r.each(function(n){n.element==t&&(e=n)}),e}}(this),this.destroy=function(t){return function(e){return r.each(function(t,n){t.element==e&&r.splice(n,1)}),t}}(this),this.destroyAll=function(t){return function(){return r=[],t}}(this),this.reset=function(t){return function(e){var n=t.triggerFor(e);if(null!=n){n.reset();var i=r.indexOf(n);i>-1&&r.splice(i,1)}return t}}(this),this.resetAll=function(t){return function(){return r.each(function(t){t.reset()}),r=[],t}}(this),this.attach=function(t){return function(e){return c.push(e),u||(u=!0,i()),t}}(this),this.detach=function(t){return function(e){var n=c.indexOf(e);return n>-1&&c.splice(n,1),t}}(this);var h=this;return this.scrollDidChange=function(t){return function(){var e=t.scrollElement.innerWidth||t.scrollElement.offsetWidth,n=t.scrollElement.innerHeight||t.scrollElement.offsetHeight,i=t.bindElement.scrollTop?t.bindElement.scrollTop:document.documentElement.scrollTop,s=t.bindElement.scrollLeft?t.bindElement.scrollLeft:document.documentElement.scrollLeft,o=[];r.each(function(t){var r=t.left(),c=t.top();a.left>s?r-=t.xOffset(!0):a.left<s&&(r+=t.xOffset(!1)),a.top>i?c-=t.yOffset(!0):a.top<i&&(c+=t.yOffset(!1)),e>r&&r>=0&&n>c&&c>=0?(t.addClass(t.visibleClass,function(){t.showCallback&&l(t,t.showCallback)}),t.removeClass(t.hiddenClass),t.once&&o.push(t)):(t.addClass(t.hiddenClass),t.removeClass(t.visibleClass,function(){t.hideCallback&&l(t,t.hideCallback)}))}),c.each(function(l){l.call(t,s,i,e,n)}),o.each(function(t){var e=r.indexOf(t);e>-1&&r.splice(e,1)}),a.left=s,a.top=i}}(this),Array.prototype.each=function(t){for(var e=this.length,n=0;e>n;n++){var i=this[n];i&&t(i,n)}},f(t,e,n)}});


/*!
  hey, [be]Lazy.js - v1.8.2 - 2016.10.25
  A fast, small and dependency free lazy load script (https://github.com/dinbror/blazy)
  (c) Bjoern Klinggaard - @bklinggaard - http://dinbror.dk/blazy
*/
  (function(q,m){"function"===typeof define&&define.amd?define(m):"object"===typeof exports?module.exports=m():q.Blazy=m()})(this,function(){function q(b){var c=b._util;c.elements=E(b.options);c.count=c.elements.length;c.destroyed&&(c.destroyed=!1,b.options.container&&l(b.options.container,function(a){n(a,"scroll",c.validateT)}),n(window,"resize",c.saveViewportOffsetT),n(window,"resize",c.validateT),n(window,"scroll",c.validateT));m(b)}function m(b){for(var c=b._util,a=0;a<c.count;a++){var d=c.elements[a],e;a:{var g=d;e=b.options;var p=g.getBoundingClientRect();if(e.container&&y&&(g=g.closest(e.containerClass))){g=g.getBoundingClientRect();e=r(g,f)?r(p,{top:g.top-e.offset,right:g.right+e.offset,bottom:g.bottom+e.offset,left:g.left-e.offset}):!1;break a}e=r(p,f)}if(e||t(d,b.options.successClass))b.load(d),c.elements.splice(a,1),c.count--,a--}0===c.count&&b.destroy()}function r(b,c){return b.right>=c.left&&b.bottom>=c.top&&b.left<=c.right&&b.top<=c.bottom}function z(b,c,a){if(!t(b,a.successClass)&&(c||a.loadInvisible||0<b.offsetWidth&&0<b.offsetHeight))if(c=b.getAttribute(u)||b.getAttribute(a.src)){c=c.split(a.separator);var d=c[A&&1<c.length?1:0],e=b.getAttribute(a.srcset),g="img"===b.nodeName.toLowerCase(),p=(c=b.parentNode)&&"picture"===c.nodeName.toLowerCase();if(g||void 0===b.src){var h=new Image,w=function(){a.error&&a.error(b,"invalid");v(b,a.errorClass);k(h,"error",w);k(h,"load",f)},f=function(){g?p||B(b,d,e):b.style.backgroundImage='url("'+d+'")';x(b,a);k(h,"load",f);k(h,"error",w)};p&&(h=b,l(c.getElementsByTagName("source"),function(b){var c=a.srcset,e=b.getAttribute(c);e&&(b.setAttribute("srcset",e),b.removeAttribute(c))}));n(h,"error",w);n(h,"load",f);B(h,d,e)}else b.src=d,x(b,a)}else"video"===b.nodeName.toLowerCase()?(l(b.getElementsByTagName("source"),function(b){var c=a.src,e=b.getAttribute(c);e&&(b.setAttribute("src",e),b.removeAttribute(c))}),b.load(),x(b,a)):(a.error&&a.error(b,"missing"),v(b,a.errorClass))}function x(b,c){v(b,c.successClass);c.success&&c.success(b);b.removeAttribute(c.src);b.removeAttribute(c.srcset);l(c.breakpoints,function(a){b.removeAttribute(a.src)})}function B(b,c,a){a&&b.setAttribute("srcset",a);b.src=c}function t(b,c){return-1!==(" "+b.className+" ").indexOf(" "+c+" ")}function v(b,c){t(b,c)||(b.className+=" "+c)}function E(b){var c=[];b=b.root.querySelectorAll(b.selector);for(var a=b.length;a--;c.unshift(b[a]));return c}function C(b){f.bottom=(window.innerHeight||document.documentElement.clientHeight)+b;f.right=(window.innerWidth||document.documentElement.clientWidth)+b}function n(b,c,a){b.attachEvent?b.attachEvent&&b.attachEvent("on"+c,a):b.addEventListener(c,a,{capture:!1,passive:!0})}function k(b,c,a){b.detachEvent?b.detachEvent&&b.detachEvent("on"+c,a):b.removeEventListener(c,a,{capture:!1,passive:!0})}function l(b,c){if(b&&c)for(var a=b.length,d=0;d<a&&!1!==c(b[d],d);d++);}function D(b,c,a){var d=0;return function(){var e=+new Date;e-d<c||(d=e,b.apply(a,arguments))}}var u,f,A,y;return function(b){if(!document.querySelectorAll){var c=document.createStyleSheet();document.querySelectorAll=function(a,b,d,h,f){f=document.all;b=[];a=a.replace(/\[for\b/gi,"[htmlFor").split(",");for(d=a.length;d--;){c.addRule(a[d],"k:v");for(h=f.length;h--;)f[h].currentStyle.k&&b.push(f[h]);c.removeRule(0)}return b}}var a=this,d=a._util={};d.elements=[];d.destroyed=!0;a.options=b||{};a.options.error=a.options.error||!1;a.options.offset=a.options.offset||100;a.options.root=a.options.root||document;a.options.success=a.options.success||!1;a.options.selector=a.options.selector||".b-lazy";a.options.separator=a.options.separator||"|";a.options.containerClass=a.options.container;a.options.container=a.options.containerClass?document.querySelectorAll(a.options.containerClass):!1;a.options.errorClass=a.options.errorClass||"b-error";a.options.breakpoints=a.options.breakpoints||!1;a.options.loadInvisible=a.options.loadInvisible||!1;a.options.successClass=a.options.successClass||"b-loaded";a.options.validateDelay=a.options.validateDelay||25;a.options.saveViewportOffsetDelay=a.options.saveViewportOffsetDelay||50;a.options.srcset=a.options.srcset||"data-srcset";a.options.src=u=a.options.src||"data-src";y=Element.prototype.closest;A=1<window.devicePixelRatio;f={};f.top=0-a.options.offset;f.left=0-a.options.offset;a.revalidate=function(){q(a)};a.load=function(a,b){var c=this.options;void 0===a.length?z(a,b,c):l(a,function(a){z(a,b,c)})};a.destroy=function(){var a=this._util;this.options.container&&l(this.options.container,function(b){k(b,"scroll",a.validateT)});k(window,"scroll",a.validateT);k(window,"resize",a.validateT);k(window,"resize",a.saveViewportOffsetT);a.count=0;a.elements.length=0;a.destroyed=!0};d.validateT=D(function(){m(a)},a.options.validateDelay,a);d.saveViewportOffsetT=D(function(){C(a.options.offset)},a.options.saveViewportOffsetDelay,a);C(a.options.offset);l(a.options.breakpoints,function(a){if(a.width>=window.screen.width)return u=a.src,!1});setTimeout(function(){q(a)})}});


jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });


jQuery(document).ready(function(){
  jQuery('.slick-testimonials').slick({
    slidesToShow: 1,
    slidesToScroll:1,
    dots: true,
    centerMode: false,
    focusOnSelect: true,
    arrows:false,
    autoplay:true
    /*responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true
        //dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]*/
  });
});



   jQuery("#related-posts").stick_in_parent();




window.onload = function() {
    jQuery('body').addClass('loaded');
  };


jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 100) {
        jQuery("#top-bar-menu").addClass("white-nav-bar");
    } else
    {
      jQuery("#top-bar-menu").removeClass("white-nav-bar");
    }
}); //missing );




});

(function(g,d){"function"===typeof define&&define.amd?define([],d):"object"===typeof module&&module.exports?module.exports=d():g.Rellax=d()})(this,function(){var g=function(d,l){var b=Object.create(g.prototype),h=0,p=0,k=0,q=0,f=[],t=!1,y=window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.msRequestAnimationFrame||window.oRequestAnimationFrame||function(a){setTimeout(a,1E3/60)},z=window.transformProp||function(){var a=document.createElement("div");if(null==a.style.transform){var c=["Webkit","Moz","ms"],b;for(b in c)if(void 0!==a.style[c[b]+"Transform"])return c[b]+"Transform"}return"transform"}(),r=function(a,b,e){return a<=b?b:a>=e?e:a};b.options={speed:-2,center:!1,round:!0,vertical:!0,horizontal:!1,callback:function(){}};l&&Object.keys(l).forEach(function(a){b.options[a]=l[a]});b.options.speed=r(b.options.speed,-10,10);d||(d=".rellax");var u=document.querySelectorAll(d);if(0<u.length)b.elems=u;else throw Error("The elements you're trying to select don't exist.");var A=function(a){var c=a.getAttribute("data-rellax-percentage"),e=a.getAttribute("data-rellax-speed"),f=a.getAttribute("data-rellax-zindex")||0,d=b.options.vertical?c||b.options.center?window.pageYOffset||document.documentElement.scrollTop||document.body.scrollTop:0:0,m=b.options.horizontal?c||b.options.center?window.pageXOffset||document.documentElement.scrollLeft||document.body.scrollLeft:0:0,g=d+a.getBoundingClientRect().top,h=a.clientHeight||a.offsetHeight||a.scrollHeight,k=m+a.getBoundingClientRect().left, l=a.clientWidth||a.offsetWidth||a.scrollWidth;d=c?c:(d-g+p)/(h+p);var n=c?c:(m-k+q)/(l+q);b.options.center&&(d=n=.5);m=e?r(e,-10,10):b.options.speed;if(c||b.options.center)m=r(e||b.options.speed,-5,5);c=v(n,d,m);a=a.style.cssText;e="";0<=a.indexOf("transform")&&(e=a.indexOf("transform"),e=a.slice(e),e=(d=e.indexOf(";"))?" "+e.slice(11,d).replace(/\s/g,""):" "+e.slice(11).replace(/\s/g,""));return{baseX:c.x,baseY:c.y,top:g,left:k,height:h,width:l,speed:m,style:a,transform:e,zindex:f}},w=function(){var a= h,c=k;h=void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop;k=void 0!==window.pageXOffset?window.pageXOffset:(document.documentElement||document.body.parentNode||document.body).scrollLeft;return a!=h&&b.options.vertical||c!=k&&b.options.horizontal?!0:!1},v=function(a,c,e){var d={};a=100*e*(1-a);c=100*e*(1-c);d.x=b.options.round?Math.round(a):Math.round(100*a)/100;d.y=b.options.round?Math.round(c):Math.round(100*c)/100;return d}, x=function(){w()&&!1===t&&n();y(x)},n=function(){for(var a=0;a<b.elems.length;a++){var c=v((k-f[a].left+q)/(f[a].width+q),(h-f[a].top+p)/(f[a].height+p),f[a].speed),e=c.y-f[a].baseY,d=c.x-f[a].baseX;b.elems[a].style[z]="translate3d("+(b.options.horizontal?d:"0")+"px,"+(b.options.vertical?e:"0")+"px,"+f[a].zindex+"px) "+f[a].transform}b.options.callback(c)};b.destroy=function(){for(var a=0;a<b.elems.length;a++)b.elems[a].style.cssText=f[a].style;t=!0};(function(){p=window.innerHeight;q=window.innerWidth;w();for(var a=0;a<b.elems.length;a++){var c=A(b.elems[a]);f.push(c)}window.addEventListener("resize",function(){n()});x();n()})();return b};return g});
// Also can pass in optional settings block
  var rellax = new Rellax('.rellax', {
    speed: -3,
    center: false,
    round: true,
    vertical: true,
    horizontal: false
  });
