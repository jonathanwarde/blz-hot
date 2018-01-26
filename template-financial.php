<?php
/*

Template Name: Financial Services Marketing

*/
?>
<?php define('BASE_URL', 'https://blazecommunication.com/wp-content/themes/hot/assets/');?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php global $iwak; $site_title = get_bloginfo('name'); ?>
        <title><?php echo wp_title('|', false, 'right'). $site_title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="<?php //echo BASE_URL;?>css/normalize.css">
        <link rel='stylesheet' id='contact-form-7-css'  href='https://blazecommunication.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.1.1' type='text/css' media='all' />
        <script type='text/javascript' src='https://blazecommunication.com/wp-includes/js/jquery/jquery.js?ver=1.12.4' ></script>
        <script type='text/javascript' src='https://blazecommunication.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1' async></script>
        <!<script type='text/javascript' src='https://blazecommunication.com/wp-content/themes/hot/js/parallax.js?ver=4.7.5'></script>-->

<?php wp_head();?>

        <script>

        if (window.matchMedia("(min-width: 601px)").matches) {

    (function(f,g,h,k){function c(a,b){var d=this;if(typeof b=="object"){delete b.refresh;delete b.render;f.extend(this,b)}this.$element=f(a);if(!this.imageSrc&&this.$element.is("img"))this.imageSrc=this.$element.attr("src");var e=(this.position+"").toLowerCase().match(/\S+/g)||[];e.length<1&&e.push("center");e.length==1&&e.push(e[0]);if(e[0]=="top"||e[0]=="bottom"||e[1]=="left"||e[1]=="right")e=[e[1],e[0]];if(this.positionX!=k)e[0]=this.positionX.toLowerCase();if(this.positionY!=k)e[1]=this.positionY.toLowerCase();
    d.positionX=e[0];d.positionY=e[1];if(this.positionX!="left"&&this.positionX!="right")this.positionX=isNaN(parseInt(this.positionX))?"center":parseInt(this.positionX);if(this.positionY!="top"&&this.positionY!="bottom")this.positionY=isNaN(parseInt(this.positionY))?"center":parseInt(this.positionY);this.position=this.positionX+(isNaN(this.positionX)?"":"px")+" "+this.positionY+(isNaN(this.positionY)?"":"px");if(navigator.userAgent.match(/(iPod|iPhone|iPad)/)){this.iosFix&&!this.$element.is("img")&&
    this.$element.css({backgroundImage:"url("+this.imageSrc+")",backgroundSize:"cover",backgroundPosition:this.position});return this}if(navigator.userAgent.match(/(Android)/)){this.androidFix&&!this.$element.is("img")&&this.$element.css({backgroundImage:"url("+this.imageSrc+")",backgroundSize:"cover",backgroundPosition:this.position});return this}this.$mirror=f("<div ></1>").prependTo("body");this.$slider=f("<img />").prependTo(this.$mirror);this.$mirror.addClass("parallax-mirror").css({visibility:"hidden",
    zIndex:this.zIndex,position:"fixed",top:0,left:0,overflow:"hidden"});this.$slider.addClass("parallax-slider").one("load",function(){if(!d.naturalHeight||!d.naturalWidth){d.naturalHeight=this.naturalHeight||this.height||1;d.naturalWidth=this.naturalWidth||this.width||1}d.aspectRatio=d.naturalWidth/d.naturalHeight;c.isSetup||c.setup();c.sliders.push(d);c.isFresh=false;c.requestRender()});this.$slider[0].src=this.imageSrc;if(this.naturalHeight&&this.naturalWidth||this.$slider[0].complete)this.$slider.trigger("load")}
    (function(){for(var a=0,b=["ms","moz","webkit","o"],d=0;d<b.length&&!g.requestAnimationFrame;++d){g.requestAnimationFrame=g[b[d]+"RequestAnimationFrame"];g.cancelAnimationFrame=g[b[d]+"CancelAnimationFrame"]||g[b[d]+"CancelRequestAnimationFrame"]}if(!g.requestAnimationFrame)g.requestAnimationFrame=function(e){var i=(new Date).getTime(),j=Math.max(0,16-(i-a)),l=g.setTimeout(function(){e(i+j)},j);a=i+j;return l};if(!g.cancelAnimationFrame)g.cancelAnimationFrame=function(e){clearTimeout(e)}})();f.extend(c.prototype,
    {speed:0.2,bleed:0,zIndex:-100,iosFix:true,androidFix:true,position:"center",overScrollFix:false,refresh:function(){this.boxWidth=this.$element.outerWidth();this.boxHeight=this.$element.outerHeight()+this.bleed*2;this.boxOffsetTop=this.$element.offset().top-this.bleed;this.boxOffsetLeft=this.$element.offset().left;this.boxOffsetBottom=this.boxOffsetTop+this.boxHeight;var a=c.winHeight,b=Math.min(this.boxOffsetTop,c.docHeight-a);a=this.boxHeight+(b-Math.max(this.boxOffsetTop+this.boxHeight-a,0))*(1-
    this.speed)|0;b=(this.boxOffsetTop-b)*(1-this.speed)|0;if(a*this.aspectRatio>=this.boxWidth){this.imageWidth=a*this.aspectRatio|0;this.imageHeight=a;this.offsetBaseTop=b;a=this.imageWidth-this.boxWidth;this.offsetLeft=this.positionX=="left"?0:this.positionX=="right"?-a:isNaN(this.positionX)?-a/2|0:Math.max(this.positionX,-a)}else{this.imageWidth=this.boxWidth;this.imageHeight=this.boxWidth/this.aspectRatio|0;this.offsetLeft=0;a=this.imageHeight-a;this.offsetBaseTop=this.positionY=="top"?b:this.positionY==
    "bottom"?b-a:isNaN(this.positionY)?b-a/2|0:b+Math.max(this.positionY,-a)}},render:function(){var a=c.scrollTop,b=c.scrollLeft,d=this.overScrollFix?c.overScroll:0,e=a+c.winHeight;this.visibility=this.boxOffsetBottom>a&&this.boxOffsetTop<e?"visible":"hidden";this.mirrorTop=this.boxOffsetTop-a;this.mirrorLeft=this.boxOffsetLeft-b;this.offsetTop=this.offsetBaseTop-this.mirrorTop*(1-this.speed);this.$mirror.css({transform:"translate3d(0px, 0px, 0px)",visibility:this.visibility,top:this.mirrorTop-d,left:this.mirrorLeft,
    height:this.boxHeight,width:this.boxWidth});this.$slider.css({transform:"translate3d(0px, 0px, 0px)",position:"absolute",top:this.offsetTop,left:this.offsetLeft,height:this.imageHeight,width:this.imageWidth,maxWidth:"none"})}});f.extend(c,{scrollTop:0,scrollLeft:0,winHeight:0,winWidth:0,docHeight:1073741824,docWidth:1073741824,sliders:[],isReady:false,isFresh:false,isBusy:false,setup:function(){if(!this.isReady){var a=f(h),b=f(g);b.on("scroll.px.parallax load.px.parallax",function(){var d=c.docHeight-
    c.winHeight,e=c.docWidth-c.winWidth;c.scrollTop=Math.max(0,Math.min(d,b.scrollTop()));c.scrollLeft=Math.max(0,Math.min(e,b.scrollLeft()));c.overScroll=Math.max(b.scrollTop()-d,Math.min(b.scrollTop(),0));c.requestRender()}).on("resize.px.parallax load.px.parallax",function(){c.winHeight=b.height();c.winWidth=b.width();c.docHeight=a.height();c.docWidth=a.width();c.isFresh=false;c.requestRender()});this.isReady=true}},configure:function(a){if(typeof a=="object"){delete a.refresh;delete a.render;f.extend(this.prototype,
    a)}},refresh:function(){f.each(this.sliders,function(){this.refresh()});this.isFresh=true},render:function(){this.isFresh||this.refresh();f.each(this.sliders,function(){this.render()})},requestRender:function(){var a=this;if(!this.isBusy){this.isBusy=true;g.requestAnimationFrame(function(){a.render();a.isBusy=false})}}});var m=f.fn.parallax;f.fn.parallax=function(a){return this.each(function(){var b=f(this),d=typeof a=="object"&&a;if(this==g||this==h||b.is("body"))c.configure(d);else if(!b.data("px.parallax")){d=
    f.extend({},b.data(),d);b.data("px.parallax",new c(this,d))}if(typeof a=="string")c[a]()})};f.fn.parallax.Constructor=c;f.fn.parallax.noConflict=function(){f.fn.parallax=m;return this};f(h).on("ready.px.parallax.data-api",function(){f('[data-parallax="scroll"]').parallax()})})(jQuery,window,document);

} else {
  /* the viewport is less than 400 pixels wide */
}

        </script>
        
        <style>
*,
*:before,
*:after {
    box-sizing: border-box
}

html {
    color: #222;
    font-size: 1em;
    line-height: 1.4
}

.blaze-financial a {
    text-decoration: none;
    color: initial;
    font-weight: 600
}

.title-box-text {
    font-size: 1.6rem;
    margin: 0;
    font-weight: 600;
    line-height: 1.2
}

.green {
    color: #7E9E33
}

.green-bg {
    background: #7E9E33
}

.text-block.green-bg {
    background: #7E9E33
}
.orange-bg {
    background: #f26122
}

.section-image-container {
    background-size: cover!important;
    padding-bottom: 42%;
    background-position: center center!important
}

.container {
    margin: 0 auto;
    padding: 2rem 4%;
    max-width: 1300px
}

.container-small {
    max-width: 56rem
}

.title-box {
    background: rgba(1, 1, 1, .5);
    width: 80%;
    color: #fff;
    padding: 1rem;
    max-width: 12rem;
    min-height: 7rem
}

.section-content-container {
    background: #fff
}

.section-content-container h2 {
    margin: 0;
    color: #fff;
    font-size: 2rem;
    line-height: 1.2
}

.large-p {
    font-size: 1.275rem
}

.text-block {
    color: #fff;
    padding: 1rem;
    margin-bottom: 1rem
}

.text-block h4 {
    font-size: 1.6rem;
    margin: 0
}

.blaze-financial footer {
    background: #666;
    color: #fff
}

/* start new additions  26/09/17 */

.text-block-4
{
    position: relative;
}
.text-block-4 a
{
    position: absolute;
    bottom: 0;
    left: 0;
    color: #fff;
    background: #666;
    padding: 10px 30px;
}
.dark-bg
{
    background: #272526;
    color:#fff;
}
.dark-bg a
{
    color:#7e9e33;
}

.showcase-portfolio {
    width: 7.5rem;
    background: #666;
    padding: 16px 18px 21px;
    box-sizing: border-box;
    color: #fff;
    position: fixed;
    top: 25.6rem;
    left: 0;
    transition: all .4s linear;
    display: none;
    visibility: hidden;
}
.showcase-panel {
    position: relative;
    margin-bottom: 5px;
    height: 3rem;
}
.showcase-portfolio h4 {
    padding: 0;
    margin: 0 0 1rem;
}
.showcase-portfolio h4 span
{
    display: block;
    color: #7E9E33;
}
.showcase-portfolio img {
    width: 5rem;
    height: auto;
    position: absolute;
    right: 0;
}
.showcase-portfolio .showcase-panel p {
    font-size: .9rem;
    opacity: 0;
    transition:all .4s linear;
    -ms-transform: translatey(-50%);
    transform: translatey(-50%);
    position: relative;
    top: 50%;
    white-space: nowrap;
}
.showcase-portfolio:hover
{
    width:16rem;
}
.showcase-portfolio:hover .showcase-panel p
{
    opacity: 1;
}
.showcase-panel a {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3.57rem;
}
.showcase-panel a::after {
    content: '';
    display: block;
    width: 5rem;
    height: 3.57rem;
    background: rgba(126, 158, 51, .8) url(https://blazecommunication.com/wp-content/themes/hot/assets/svg/download-button.svg) no-repeat center;
    position: absolute;
    right: 0;
    transition:opacity .4s linear;
    opacity: 0;
    background-size: 1.6rem;
}
.snum {
    position: absolute;
    top: 1rem;
    left: -.9rem;
    opacity: .3;
    font-weight: 700;
    line-height: 1;
}
.showcase-portfolio:hover .showcase-panel a::after
{
    opacity: 1;
}

@media only screen and (max-width:600px) {
    .fishing-bg {
        background: url(<?php echo BASE_URL;?>images/fishing-650x800.jpg)
    }
    .camping-bg {
        background: url(<?php echo BASE_URL;?>images/camping-650x800.jpg)
    }
    .people-bg {
        background: url(<?php echo BASE_URL;?>images/people-650x800.jpg)
    }
    .bamboo-bg {
        background: url(<?php echo BASE_URL;?>images/bamboo-650x800.jpg)
    }
    .moving-bg {
        background: url(<?php echo BASE_URL;?>images/moving-650x800.jpg)
    }
    .feet-bg {
        background: url(<?php echo BASE_URL;?>images/feet-650x800.jpg)
    }
}

@media only screen and (min-width:601px) {
    .section-image-container {
        padding-bottom: 22%
    }
    .big-title-outer {
        text-align: center
    }
    .container {
        padding: 3rem 4%
    }
    .title-box {
        position: relative;
        top: 3rem
    }
    .section-image-container .container {
        padding: 0 4%
    }
    .big-title-outer .container {
        padding: 2rem
    }
    .centered {
        text-align: center
    }
    .text-block {
        padding: 1rem;
        display: inline-block;
        width: calc(50% - 1rem);
        vertical-align: top;
        min-height: 24rem
    }
    .text-block.odd {
        margin: 1rem 1rem 1rem 0
    }
    .text-block.even {
        margin: 1rem 0 1rem 1rem
    }
}

@media only screen and (min-width:768px) {
    .container {
        width: 80%
    }
    .section-content-container h2 {
        font-size: 2.475rem
    }
    .showcase-portfolio
    {
        display: block;
        visibility:visible;
    }
}

@media only screen and (min-width:1010px) {
    .section-image-container {
        padding-bottom: 12%
    }
    .section-content-container h2 {
        font-size: 2.6rem
    }
    .blaze-financial p {
        font-size: 1.3rem
    }
    .blaze-financial .large-p {
        font-size: 1.7rem;
        font-weight: 600;
    }
    .text-block {
        padding: 2rem;
        display: inline-block;
        width: calc(50% - 3%);
        vertical-align: top;
        min-height: 29rem
    }
    .text-block.odd {
        margin: 3% 3% 3% 0
    }
    .text-block.even {
        margin: 3% 0 3% 3%
    }
}

@media only screen and (min-width:1200px) {
    .container {
        padding: 4rem 0;
    }
    .section-image-container {
        min-height: 410px
    }
}

.animFadeInRight {
    -webkit-animation-name: fadeinright;
    -webkit-animation-duration: 1s;
    -webkit-animation-delay: .5s;
    -webkit-animation-fill-mode: forwards;
    animation-name: fadeinright;
    animation-duration: 1s;
    animation-delay: .5s;
    animation-fill-mode: forwards;
    opacity: 0
}

@-webkit-keyframes fadeinright {
    0% {
        opacity: 0;
        transform: translatex(-6rem)
    }
    100% {
        opacity: 1;
        transform: translatex(0)
    }
}

@keyframes fadeinright {
    0% {
        opacity: 0;
        transform: translatex(-6rem)
    }
    100% {
        opacity: 1;
        transform: translatex(0)
    }
}


.fadeInRight {
    opacity: 0;
    transform: translatex(3rem);
    transition: all .6s ease
}

.fadeOutRight {
    opacity: 1;
    transform: translatex(0);
    transition: all .6s ease
}

.fadeIn.text-block-2 {
    -webkit-animation-delay: .2s;
    animation-delay: .2s
}

.fadeIn.text-block-3 {
    -webkit-animation-delay: .4s;
    animation-delay: .4s
}

.fadeIn.text-block-4 {
    -webkit-animation-delay: .6s;
    animation-delay: .6s
}

.text-block-2 .fadeOutRight {
    -webkit-transition-delay: .2s;
    transition-delay: .2s
}

.text-block-3 .fadeOutRight {
    -webkit-transition-delay: .4s;
    transition-delay: .4s
}

.text-block-4 .fadeOutRight {
    -webkit-transition-delay: .6s;
    transition-delay: .6s
}

.title-box {
    opacity: 0
}

.title-box.fadeUpOut {
    opacity: 0;
    transform: translatey(-6rem);
    transition: all 1s ease
}

.title-box.fadeDownIn {
    opacity: 1;
    transform: translatey(0);
    transition: all 1s ease
}

.title-box-text span {
    opacity: 0;
    display: block
}

.title-box-text span.fadeOutRight {
    opacity: 0;
    transform: translatex(3rem);
    transition: all 1.2s ease;
    -webkit-transition-delay: .8s;
    transition-delay: .8s
}

.title-box-text span.fadeInRight {
    opacity: 1;
    transform: translatex(0);
    transition: all 1.2s ease;
    -webkit-transition-delay: .8s;
    transition-delay: .8s
}

.blaze-financial .remodal {
    background: #fff url(<?php echo BASE_URL;?>images/fsm-form-bg.jpg) top center no-repeat;
    background-size: contain;
}


.fsm-form {
    text-align: left;
}
.fsm-form p {
    font-size: 1rem;
padding: .2rem 0;
}
.fsm-form .formlabel {
    display: inline-block;
    width: 7rem;
}

.fsm-form .wpcf7-form-control-wrap {
    width: calc(100% - 8rem);
    display: inline-block;
    float: right;
}

.wpcf7-text, .wpcf7-textarea {
    border: none;
    background: rgba(1,1,1,.3);
    width:100%;
    padding: .5rem;
    font-weight: 100;
    font-style: italic;
}
.button-wrap {
    display: block;
    clear: both;
    padding: 2rem 0 0 0;
    text-align: right;
}
input, .wpcf7-textarea {
    transition: all .2s ease;
}

input:focus, .wpcf7-textarea:focus {
    color:#fff;
    background:#4d4b4b;
}

@media only screen and (max-width:480px){
    .fsm-form .wpcf7-form-control-wrap {
    width: 100%;
    display: block;
}
}

        </style>
    </head>
    <body class="blaze-financial">
        <div class="site-wrap" id="top">

            <section class="section-image-container fishing-bg parallax-window" data-parallax="scroll" data-speed="0.8" data-position="centre" data-bleed="80" data-image-src="<?php echo BASE_URL;?>images/fishing-1800x810.jpg">
                <div class="container">
                    <div class="title-box" data-scroll="toggle(.fadeDownIn, .fadeUpOut)">
                        <div class="title-box-text">blaze</div>
                        <h1 class="title-box-text green">financial<br> services<br> marketing</h1>
                    </div><!--end title-box-->
                </div><!--end container-->
            </section>

            <section class="section-content-container">
                <div class="big-title-outer green-bg">
                    <div class="container">
                        <h2>Creative solutions in a complex world</h2>
                    </div>
                </div><!--end big title outer-->
                <div class="container centered">
                    <p class="large-p">Integrated marketing solutions built to maximise your business potential</p>
                </div>
            </section>

            <section class="section-image-container camping-bg parallax-window" data-parallax="scroll" data-speed="0.8" data-position="centre" data-bleed="80" data-image-src="<?php echo BASE_URL;?>images/camping-1800x810.jpg">
                <div class="container">
                    <div class="title-box" data-scroll="toggle(.fadeDownIn, .fadeUpOut)">
                        <h3 class="title-box-text">
                            What’s keeping you<br> <span class="green" data-scroll="toggle(.fadeInRight, .fadeOutRight)">awake at night?</span></p>
                        </h3>
                    </div><!--end title-box-->
                </div><!--end container-->
            </section>

            <section class="section-content-container">
                <div class="container centered container-small">
                    <p>At Blaze FSM, we help financial service organisations reach their customers amidst ongoing regulatory change and disruptive digitisation.</p>
                    <a href="https://blazecommunication.com/is-your-business-ready-for-its-biggest-challenge-yet/"><p class="large-p green">Is your business ready for its biggest challenge yet? ></p></a>
                    <p>Our team has the expertise to meet these challenges, and the creativity to deliver real competitive advantage for your business.</p>
                    <p>Working with robust systems and compliance-ready content, our approach navigates a changing landscape and makes it work for you.</p>
                </div>
            </section>

            <section class="section-image-container people-bg parallax-window" data-parallax="scroll" data-speed="0.8" data-position="centre" data-bleed="80" data-image-src="<?php echo BASE_URL;?>images/people-1800x810.jpg">
                <div class="container">
                    <div class="title-box" data-scroll="toggle(.fadeDownIn, .fadeUpOut)">
                        <h3 class="title-box-text">
                            Is your brand<br> <span class="green" data-scroll="toggle(.fadeInRight, .fadeOutRight)">engaging effectively...</span></p>
                        </h3>
                    </div><!--end title-box-->
                </div><!--end container-->
            </section>

            <section class="section-content-container">
                <div class="container centered">
                    <p class="large-p">…amidst the pressures of regulation?</p>
                    <p>With content-led marketing at the heart of our approach, we know that having robust systems in place to deal with
                    ever increasing regulation is key.
                    </p>
                </div>
            </section>

            <section class="section-content-container dark-bg">
                <div class="container centered">
                    <p class="large-p"><a href="https://blazecommunication.com/whats-gdpr-strategy-9-things-need-know-may-2018/">Are you ready for GDPR?<br>
                        Learn 9 things you need to know about GDPR ></a></p>
                    <p>It’s the biggest shakeup to data management since the Data Protection Act and it’s heading this way.<br>
                    From May 2018, your business must be ready or it could face unprecedented fines.</p>
                    <p>Discover everything you need to know, and make sure your organisation is compliant ready.<br>
                    It will either be a great opportunity or a serious problem; which do you prefer?
                    </p>
                </div>
            </section>

            <section class="section-image-container bamboo-bg parallax-window" data-parallax="scroll" data-speed="0.8" data-position="centre" data-bleed="80" data-image-src="<?php echo BASE_URL;?>images/bamboo-1800x810.jpg">
                <div class="container">
                    <div class="title-box" data-scroll="toggle(.fadeDownIn, .fadeUpOut) once centerVertical">
                        <h3 class="title-box-text">
                            We can help <br>you address<br> <span class="green" data-scroll="toggle(.fadeInRight, .fadeOutRight) once centerVertical">areas such as:</span></p>
                        </h3>
                    </div><!--end title-box-->
                </div><!--end container-->
            </section>

            <section class="section-content-container">
                <div class="container">
                    <div class="text-block orange-bg odd text-block-1">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Content +<br>compliance</h4>
                        <p>What systems do you have in place to deal with new regulations?</p>
                        <p>How are you measuring content effectiveness?</p>
                        <p>Is it working hard or languishing in obscurity?</p>
                    </div><!--
                 --><div class="text-block orange-bg even text-block-2">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Risk +<br>reputation</h4>
                        <p>Are you set up to thrive in the age of digital distress, or are you in danger of being left behind?</p>
                        <p>Is your digital footprint accurate and what does it say about the business?</p>
                        <p>Remember, it isn’t just how you look but how you interact that matters.</p>
                    </div><!--
                 --><div class="text-block orange-bg odd text-block-3">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">FinTech +<br>InTech</h4>
                        <p>Are you on the front foot when it comes to innovation?</p>
                        <p>Whether you are deploying or not deploying, you need a clear position and a strong message that
                        tells its own story.</p>
                        <p>How compelling is your platform?</p>
                        <p>Is your message clear?</p>
                    </div><!--
                 --><div class="text-block orange-bg even text-block-4">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Data +<br>protection</h4>
                        <p>How is your data being stored and who’s ‘owning’ it?</p>
                        <p>Do you know what your marketing company is doing with your data?</p>
                        <p>How are you set up to deal with new data GDPR (General Data Protection Regulation) coming into force in 2018?</p>
                        <a href="https://blazecommunication.com/whats-gdpr-strategy-9-things-need-know-may-2018/" title="What’s your GDPR strategy? 9 things you need to know before May 2018">GDPR blog</a>
                    </div>
                </div><!--end container-->
            </section>

            <section class="section-image-container moving-bg parallax-window" data-parallax="scroll" data-speed="0.8" data-position="centre" data-bleed="80" data-image-src="<?php echo BASE_URL;?>images/moving-1800x810.jpg">
                <div class="container">
                    <div class="title-box" data-scroll="toggle(.fadeDownIn, .fadeUpOut)">
                        <h3 class="title-box-text">
                            Our<br> <span class="green" data-scroll="toggle(.fadeInRight, .fadeOutRight)">specialist skills</span></p>
                        </h3>
                    </div><!--end title-box-->
                </div><!--end container-->
            </section>

            <section class="section-content-container">
                <div class="container">
                    <div class="text-block green-bg odd">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Integrated campaign strategy &amp; execution</h4>
                        <p>Whether you need to launch a new product or drive more inbound enquiries for existing services, everything depends upon the quality of your strategy and execution.</p> 
                        <p>With extensive industry experience we have the tools and resources to build and deploy fully integrated multi-channel marketing campaigns.</p>
                    </div><!--
                 --><div class="text-block green-bg even">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Reputation management</h4>
                        <p>If you aren’t out there engaging with your target audience and showing (not telling!) what it is that sets your business apart, how do you have any control? </p>
                        <p>Our team of bloggers, journalists, data-analysts and digital storytelling experts are on-hand to make sure that your best side is always the most visible one.</p>
                    </div><!--
                 --><div class="text-block green-bg odd">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Brand elevation</h4>
                        <p>Does your brand consistently reflect your business, elevating it across all channels and devices?</p> 
                        <p>Our branding consultants and graphic artists work with leading financial institutions to ensure that their brand is sharp, on-message and effective; wherever it’s seen.</p>
                    </div><!--
                 --><div class="text-block green-bg even">
                        <h4 data-scroll="toggle(.fadeOutRight, .fadeInRight) once centerVertical">Exhibitions and events</h4>
                        <p>When it comes to industry events, do you stand out or blend in with the masses? Exhibitions and Events sit at the very core of what we do.</p> 
                        <p>Our international experience in this field is invaluable, as is our ability to blend the physical with the digital to ensure an integrated experience.</p>
                    </div>
                </div><!--end container-->
            </section>

            <section class="section-image-container feet-bg parallax-window" data-parallax="scroll" data-speed="0.8" data-position="centre" data-bleed="80" data-image-src="<?php echo BASE_URL;?>images/feet-1800x810.jpg">
                <div class="container">
                    <div class="title-box" data-scroll="toggle(.fadeDownIn, .fadeUpOut)">
                        <h3 class="title-box-text">
                            Measuring<br> <span class="green" data-scroll="toggle(.fadeInRight, .fadeOutRight)">your digital footprint</span></p>
                        </h3>
                    </div><!--end title-box-->
                </div><!--end container-->
            </section>

            <section class="section-content-container">
                <div class="container centered">
                    <p>Before we start working work with you, we undertake an audit of your current footprint. Our aim is to build a full and detailed understanding of your digital brand presence.</p> 
                    <p>This provides us with a clear picture of your reach, engagement and presence across critical digital channels.</p> <p>Above all we want to sense check every single stage of your customer journey and ask: is this contributing to or detracting from sales?
                    </p>
                    <p class="large-p" style="padding: 2rem 0;"><a href="#contactus" class="green" style="color: #7E9E33 !important">Contact us to see how we can help ></a></p>
                    <img src="<?php echo BASE_URL;?>images/quality.jpg" alt="UKAS Management Systems" style="width:100px">
                </div>
            </section>

            <footer class="section-content-container">
                <div class="container centered container-small">
                    <p class="large-p">We can help. Contact us for an informal chat</p>
                    <p class="large-p">020 8360 8244 | Nigel Mummery – <a href="mailto:nigel@blazemail.co.uk" style="color: #fff !important">nigel@blazemail.co.uk</a></p>
                    <a href="#top" class="green" style="color:#7E9E33">Back to top</a>
                </div>
            </footer>

            <div class="remodal" data-remodal-id="contactus" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
              <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
              <div>
                <div class="title-box" style="text-align: left;max-width: 7rem;padding: .8rem;min-height: 5rem;opacity:1;background: rgba(1, 1, 1, .5);top:0">
                    <h3 class="title-box-text" style="font-size: 1rem;">
                        blaze<br><span class="green" style="opacity:1">financial services marketing</span>
                    </h3>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="1991" title="FSM"]');?>
              </div>
              <!--<br>
              <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
              <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
            </div>

        </div><!--end site-wrap-->

        <!--<link rel="stylesheet" href="<?php //echo BASE_URL;?>css/remodal.css">
        <link rel="stylesheet" href="<?php //echo BASE_URL;?>css/remodal-default-theme.css">

        
        <script type='text/javascript' src='https://blazecommunication.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js' ></script>
        <script type='text/javascript' src='https://blazecommunication.com/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js'></script>
        <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {"apiSettings":{"root":"https:\/\/blazecommunication.com\/wp-json\/","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
        /* ]]> */
        </script>
        <script type='text/javascript' src='https://blazecommunication.com/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>

        <script src="<?php //echo BASE_URL;?>js/remodal.min.js" ></script>-->
        <script>
             jQuery('[data-remodal-id=contactus]').remodal({
                //modifier: 'with-red-theme'
              });
        </script>

        <script src="<?php echo BASE_URL;?>js/ScrollTrigger.js"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function(){
            var trigger = new ScrollTrigger({
              //toggle: {
                //visible: 'fadeDownIn',
                //hidden: 'fadeUpOut'
              //},
              offset: {
                x: 0,
                y: 0
              },
              addHeight: true,
              once: true
            }, document.body, window);
        });
        </script>

        <script type="text/javascript">

        jQuery(function() {


          jQuery('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
            jQuery('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
            }
           }
         });
            

         });

          window.onload = function() {
                jQuery('body').addClass('loaded');
            };

        </script>



        
    </body>
</html>