<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="{!! (empty($lang)) ? 'vi' : $lang !!}">
<head>
  @include('module.head')
  <script type='text/javascript'>
    window.ladi_viewport = function() {
      var screen_width = window.ladi_screen_width || window.screen.width;
      var width = window.outerWidth > 0 ? window.outerWidth : screen_width;
      var widthDevice = width;
      var is_desktop = width >= 768;
      var content = "";
      if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
        window.ladi_is_desktop = is_desktop;
    }
    if (!is_desktop) {
        widthDevice = 420;
    } else {
        widthDevice = 960;
    }
    content = "width=" + widthDevice + ", user-scalable=no";
    var scale = 1;
    if (!is_desktop && widthDevice != screen_width && screen_width > 0) {
        scale = screen_width / widthDevice;
    }
    if (scale != 1) {
        content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" + scale;
    }
    var docViewport = document.getElementById("viewport");
    if (!docViewport) {
        docViewport = document.createElement("meta");
        docViewport.setAttribute("id", "viewport");
        docViewport.setAttribute("name", "viewport");
        document.head.appendChild(docViewport);
    }
    docViewport.setAttribute("content", content);
};
window.ladi_viewport();
window.ladi_fbq_data = [];
window.ladi_fbq = function(track_name, conversion_name, data, event_data) {
  window.ladi_fbq_data.push([track_name, conversion_name, data, event_data]);
};
</script>
<link rel="preload" href="https://fonts.googleapis.com/css?family=Philosopher:bold,regular|Dancing%20Script:bold,regular|Dosis:bold,regular|Montserrat:bold,regular|Quicksand:bold,regular&amp;display=swap" as="style" onload="this.onload = null; this.rel = 'stylesheet';">
<link rel="preload" href="/public/frontend/w.ladicdn.com/v2/source/ladipage.vi.minc678.js?v=16715109565456" as="script">
<style id="style_ladi" type="text/css">
    a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,button,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,input,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,select,small,span,strike,strong,sub,summary,sup,table,tbody,td,textarea,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;outline:0;font-size:100%;font:inherit;vertical-align:baseline;box-sizing:border-box;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
    article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}
    body{line-height:1}
    a{text-decoration:none}
    ol,ul{list-style:none}
    blockquote,q{quotes:none}
    blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}
    table{border-collapse:collapse;border-spacing:0}
    body{font-size:12px;-ms-text-size-adjust:none;-moz-text-size-adjust:none;-o-text-size-adjust:none;-webkit-text-size-adjust:none;background-color:#fff}
    .ladi-loading{z-index:900000000000;position:fixed;width:100%;height:100%;top:0;left:0;background-color:rgba(0,0,0,.1)}
    .ladi-loading .loading{width:80px;height:80px;top:0;left:0;bottom:0;right:0;margin:auto;overflow:hidden;position:absolute}
    .ladi-loading .loading div{position:absolute;width:6px;height:6px;background:#fff;border-radius:50%;animation:ladi-loading 1.2s linear infinite}
    .ladi-loading .loading div:nth-child(1){animation-delay:0;top:37px;left:66px}
    .ladi-loading .loading div:nth-child(2){animation-delay:-.1s;top:22px;left:62px}
    .ladi-loading .loading div:nth-child(3){animation-delay:-.2s;top:11px;left:52px}
    .ladi-loading .loading div:nth-child(4){animation-delay:-.3s;top:7px;left:37px}
    .ladi-loading .loading div:nth-child(5){animation-delay:-.4s;top:11px;left:22px}
    .ladi-loading .loading div:nth-child(6){animation-delay:-.5s;top:22px;left:11px}
    .ladi-loading .loading div:nth-child(7){animation-delay:-.6s;top:37px;left:7px}
    .ladi-loading .loading div:nth-child(8){animation-delay:-.7s;top:52px;left:11px}
    .ladi-loading .loading div:nth-child(9){animation-delay:-.8s;top:62px;left:22px}
    .ladi-loading .loading div:nth-child(10){animation-delay:-.9s;top:66px;left:37px}
    .ladi-loading .loading div:nth-child(11){animation-delay:-1s;top:62px;left:52px}
    .ladi-loading .loading div:nth-child(12){animation-delay:-1.1s;top:52px;left:62px}
    @keyframes ladi-loading {
      0%,100%,20%,80%{transform:scale(1)}
      50%{transform:scale(1.5)}
  }
  .overflow-hidden{overflow:hidden}
  .ladi-transition{transition:all 150ms linear 0}
  .opacity-0{opacity:0}
  .height-0{height:0!important}
  .transition-readmore{transition:height 350ms linear 0}
  .transition-collapse{transition:height 150ms linear 0}
  .transition-parent-collapse-height{transition:height 150ms linear 0}
  .transition-parent-collapse-top{transition:top 150ms linear 0}
  .pointer-events-none{pointer-events:none}
  .ladi-google-recaptcha-checkbox{position:absolute;display:inline-block;transform:translateY(-100%);margin-top:-5px;z-index:90000010}
  .ladipage-message{position:fixed;width:100%;height:100%;top:0;left:0;z-index:10000000000;background:rgba(0,0,0,.3)}
  .ladipage-message .ladipage-message-box{width:400px;max-width:calc(100% - 50px);height:160px;border:1px solid rgba(0,0,0,.3);background-color:#fff;position:fixed;top:calc(50% - 155px);left:0;right:0;margin:auto;border-radius:10px}
  .ladipage-message .ladipage-message-box span{display:block;background-color:rgba(6,21,40,.05);color:#000;padding:12px 15px;font-weight:600;font-size:16px;line-height:16px;border-top-left-radius:10px;border-top-right-radius:10px}
  .ladipage-message .ladipage-message-box .ladipage-message-text{display:-webkit-box;font-size:14px;padding:0 20px;margin-top:10px;line-height:18px;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis}
  .ladipage-message .ladipage-message-box .ladipage-message-close{display:block;position:absolute;right:15px;bottom:10px;margin:0 auto;padding:10px 0;border:none;width:80px;text-transform:uppercase;text-align:center;color:#000;background-color:#e6e6e6;border-radius:5px;text-decoration:none;font-size:14px;line-height:14px;font-weight:600;cursor:pointer}
  .ladi-wraper{width:100%;min-height:100%;overflow:hidden}
  .ladi-section{margin:0 auto;position:relative}
  .ladi-section[data-tab-id]{display:none}
  .ladi-section.selected[data-tab-id]{display:block}
  .ladi-section .ladi-section-arrow-down{position:absolute;bottom:0;right:0;left:0;margin:auto;cursor:pointer;z-index:90000040}
  .ladi-section .ladi-section-close{position:absolute;top:0;right:0;cursor:pointer;z-index:90000040}
  .ladi-section .ladi-section-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none;overflow:hidden}
  .ladi-container{position:relative;margin:0 auto;height:100%}
  .ladi-element{position:absolute}
  .ladi-overlay{position:absolute;top:0;left:0;height:100%;width:100%;pointer-events:none}
  .ladi-survey{width:100%;display:flex;flex-wrap:wrap}
  .ladi-form .ladi-survey{text-transform:inherit;text-decoration:inherit;letter-spacing:inherit;color:inherit}
  .ladi-survey .ladi-survey-option{cursor:pointer;position:relative;display:inline-block;text-decoration-line:inherit;-webkit-text-decoration-line:inherit;transition:inherit;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-survey .ladi-survey-option-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none;transition:inherit}
  .ladi-survey .ladi-survey-option-label{display:block;text-decoration-line:inherit;-webkit-text-decoration-line:inherit;position:relative}
  .ladi-survey .ladi-survey-option-image{background-size:cover;background-position:center center;pointer-events:none;vertical-align:middle;border-radius:inherit;position:relative;margin:0 auto}
  .ladi-survey .ladi-survey-button-next{display:block}
  .ladi-survey .ladi-survey-button-next.empty{display:none}
  .ladi-survey .ladi-survey-button-next.no-select{display:none}
  .ladi-survey .ladi-survey-button-next button{background-color:#fff;border:1px solid #eee;padding:5px 10px;cursor:pointer;border-radius:2px}
  .ladi-survey .ladi-survey-button-next button:active{transform:translateY(2px);transition:transform .2s linear}
  .ladi-carousel{position:absolute;width:100%;height:100%;overflow:hidden;touch-action:pan-y}
  .ladi-carousel .ladi-carousel-content{position:absolute;width:100%;height:100%;left:0;transition:left 350ms ease-in-out}
  .ladi-carousel .ladi-carousel-arrow{position:absolute;top:calc(50% - (33px)/ 2);cursor:pointer;z-index:90000040}
  .ladi-carousel .ladi-carousel-arrow-left{left:5px;transform:rotateY(180deg);-webkit-transform:rotateY(180deg)}
  .ladi-carousel .ladi-carousel-arrow-right{right:5px}
  .ladi-gallery{position:absolute;width:100%;height:100%}
  .ladi-gallery .ladi-gallery-view{position:absolute;overflow:hidden;touch-action:pan-y}
  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item{background-size:cover;background-repeat:no-repeat;background-position:center center;width:100%;height:100%;position:relative;display:none;transition:transform .5s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}
  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video{cursor:pointer}
  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video:after{content:'';position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:60px;height:60px;background:url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;background-size:contain;pointer-events:none;cursor:pointer}
  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.right{left:0;transform:translate3d(100%,0,0)}
  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.left{left:0;transform:translate3d(-100%,0,0)}
  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next.left,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev.right,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected{left:0;transform:translate3d(0,0,0)}
  .ladi-gallery .ladi-gallery-view>.next,.ladi-gallery .ladi-gallery-view>.prev,.ladi-gallery .ladi-gallery-view>.selected{display:block}
  .ladi-gallery .ladi-gallery-view>.selected{left:0}
  .ladi-gallery .ladi-gallery-view>.next,.ladi-gallery .ladi-gallery-view>.prev{position:absolute;top:0;width:100%}
  .ladi-gallery .ladi-gallery-view>.next{left:100%}
  .ladi-gallery .ladi-gallery-view>.prev{left:-100%}
  .ladi-gallery .ladi-gallery-view>.next.left,.ladi-gallery .ladi-gallery-view>.prev.right{left:0}
  .ladi-gallery .ladi-gallery-view>.selected.left{left:-100%}
  .ladi-gallery .ladi-gallery-view>.selected.right{left:100%}
  .ladi-gallery .ladi-gallery-control{position:absolute;overflow:hidden;touch-action:pan-y}
  .ladi-gallery.ladi-gallery-top .ladi-gallery-view{width:100%}
  .ladi-gallery.ladi-gallery-top .ladi-gallery-control{top:0;width:100%}
  .ladi-gallery.ladi-gallery-bottom .ladi-gallery-view{top:0;width:100%}
  .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control{width:100%;bottom:0}
  .ladi-gallery.ladi-gallery-left .ladi-gallery-view{height:100%}
  .ladi-gallery.ladi-gallery-left .ladi-gallery-control{height:100%}
  .ladi-gallery.ladi-gallery-right .ladi-gallery-view{height:100%}
  .ladi-gallery.ladi-gallery-right .ladi-gallery-control{height:100%;right:0}
  .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow{position:absolute;top:calc(50% - (33px)/ 2);cursor:pointer;z-index:90000040}
  .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left{left:5px;transform:rotateY(180deg);-webkit-transform:rotateY(180deg)}
  .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right{right:5px}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow{position:absolute;cursor:pointer;z-index:90000040}
  .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow,.ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow{top:calc(50% - (33px)/ 2)}
  .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-left{left:0;transform:rotateY(180deg) scale(.6);-webkit-transform:rotateY(180deg) scale(.6)}
  .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-right{right:0;transform:scale(.6);-webkit-transform:scale(.6)}
  .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left{left:0;transform:rotateY(180deg) scale(.6);-webkit-transform:rotateY(180deg) scale(.6)}
  .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right{right:0;transform:scale(.6);-webkit-transform:scale(.6)}
  .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow,.ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow{left:calc(50% - (33px)/ 2)}
  .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-left{top:0;transform:scale(.6) rotate(270deg);-webkit-transform:scale(.6) rotate(270deg)}
  .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-right{bottom:0;transform:scale(.6) rotate(90deg);-webkit-transform:scale(.6) rotate(90deg)}
  .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-left{top:0;transform:scale(.6) rotate(270deg);-webkit-transform:scale(.6) rotate(270deg)}
  .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-right{bottom:0;transform:scale(.6) rotate(90deg);-webkit-transform:scale(.6) rotate(90deg)}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box{position:relative}
  .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-box{display:-webkit-inline-flex;display:inline-flex;left:0;transition:left 150ms ease-in-out}
  .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box{display:-webkit-inline-flex;display:inline-flex;left:0;transition:left 150ms ease-in-out}
  .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-box{display:inline-grid;top:0;transition:top 150ms ease-in-out}
  .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-box{display:inline-grid;top:0;transition:top 150ms ease-in-out}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item{background-size:cover;background-repeat:no-repeat;background-position:center center;float:left;position:relative;cursor:pointer;filter:invert(15%)}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after{content:'';position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:30px;height:30px;background:url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;background-size:contain;pointer-events:none;cursor:pointer}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover{filter:none}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected{filter:none}
  .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child{margin-right:0!important;margin-bottom:0!important}
  .ladi-table{position:absolute;width:100%;height:100%;overflow:auto}
  .ladi-table table{width:100%}
  .ladi-table table td{vertical-align:middle}
  .ladi-table tbody td{word-break:break-word}
  .ladi-table table td img{cursor:pointer;width:100%}
  .ladi-box{position:absolute;width:100%;height:100%;overflow:hidden}
  .ladi-tabs{position:absolute;width:100%;height:100%}
  .ladi-tabs .ladi-tabs-background{height:100%;width:100%;pointer-events:none}
  .ladi-tabs>.ladi-element[data-index]{display:none}
  .ladi-tabs>.ladi-element.selected[data-index]{display:block}
  .ladi-frame{position:absolute;width:100%;height:100%;overflow:hidden}
  .ladi-frame .ladi-frame-background{height:100%;width:100%;pointer-events:none;transition:inherit}
  .ladi-banner{position:absolute;width:100%;height:100%;overflow:hidden}
  .ladi-banner .ladi-banner-background{height:100%;width:100%;pointer-events:none}
  #SECTION_POPUP .ladi-container{z-index:90000070}
  #SECTION_POPUP .ladi-container>.ladi-element{z-index:90000070;position:fixed;display:none}
  #SECTION_POPUP .ladi-container>.ladi-element[data-fixed-close=true]{position:relative!important}
  #SECTION_POPUP .ladi-container>.ladi-element.hide-visibility{display:block!important;visibility:hidden!important}
  #SECTION_POPUP .popup-close{position:absolute;right:0;top:0;z-index:9000000080;cursor:pointer}
  .ladi-popup{position:absolute;width:100%;height:100%}
  .ladi-popup .ladi-popup-background{height:100%;width:100%;pointer-events:none}
  .ladi-countdown{position:absolute;width:100%;height:100%}
  .ladi-countdown .ladi-countdown-background{position:absolute;width:100%;height:100%;top:0;left:0;background-size:inherit;background-attachment:inherit;background-origin:inherit;display:table;pointer-events:none}
  .ladi-countdown .ladi-countdown-text{position:absolute;width:100%;height:100%;text-decoration:inherit;display:table;pointer-events:none}
  .ladi-countdown .ladi-countdown-text span{display:table-cell;vertical-align:middle}
  .ladi-countdown>.ladi-element{text-decoration:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit;position:relative;display:inline-block}
  .ladi-countdown>.ladi-element:last-child{margin-right:0!important}
  .ladi-button{position:absolute;width:100%;height:100%;overflow:hidden}
  .ladi-button:active{transform:translateY(2px);transition:transform .2s linear}
  .ladi-button .ladi-button-background{height:100%;width:100%;pointer-events:none;transition:inherit}
  .ladi-button>.ladi-button-headline,.ladi-button>.ladi-button-shape{width:100%!important;height:100%!important;top:0!important;left:0!important;display:table;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-button>.ladi-button-shape .ladi-shape{margin:auto;top:0;bottom:0}
  .ladi-button>.ladi-button-headline .ladi-headline{display:table-cell;vertical-align:middle}
  .ladi-collection{position:absolute;width:100%;height:100%}
  .ladi-collection.carousel{overflow:hidden}
  .ladi-collection .ladi-collection-content{position:absolute;width:100%;height:100%;left:0;transition:left 350ms ease-in-out}
  .ladi-collection .ladi-collection-content .ladi-collection-item{display:block;position:relative;float:left;overflow:hidden}
  .ladi-collection .ladi-collection-content .ladi-collection-item:before{content:'';position:absolute;pointer-events:none;top:0;left:0;width:100%;height:100%}
  .ladi-collection .ladi-collection-content .ladi-collection-page{float:left}
  .ladi-collection .ladi-collection-arrow{position:absolute;top:calc(50% - (33px)/ 2);cursor:pointer;z-index:90000040}
  .ladi-collection .ladi-collection-arrow-left{left:5px;transform:rotateY(180deg);-webkit-transform:rotateY(180deg)}
  .ladi-collection .ladi-collection-arrow-right{right:5px}
  .ladi-collection .ladi-collection-button-next{position:absolute;bottom:-40px;right:0;left:0;margin:auto;cursor:pointer;z-index:90000040;transform:rotate(90deg);-webkit-transform:rotate(90deg)}
  .ladi-form{position:absolute;width:100%;height:100%}
  .ladi-form>.ladi-element{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form .ladi-button>.ladi-button-headline{color:initial;font-size:initial;font-weight:initial;text-transform:initial;text-decoration:initial;font-style:initial;text-align:initial;letter-spacing:initial;line-height:initial}
  .ladi-form>.ladi-element .ladi-form-item-container{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form>[data-quantity=true] .ladi-form-item-container{overflow:hidden}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item-background{background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-size:9px 6px!important;background-position:right .5rem center;background-repeat:no-repeat;padding-right:24px}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2{width:calc(100% / 2 - 5px);max-width:calc(100% / 2 - 5px);min-width:calc(100% / 2 - 5px)}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2:nth-child(3){margin-left:7.5px}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3{width:calc(100% / 3 - 5px);max-width:calc(100% / 3 - 5px);min-width:calc(100% / 3 - 5px)}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3){margin-left:7.5px}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4){margin-left:7.5px}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option{color:initial}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select){text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select{text-transform:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]){text-decoration:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit;vertical-align:middle}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-box-item{display:inline-block;width:fit-content}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span{user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=true]{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=false]{text-transform:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-form .ladi-form-item-container{position:absolute;width:100%;height:100%}
  .ladi-form .ladi-form-item-title-value{font-weight:700;word-break:break-word}
  .ladi-form .ladi-form-label-container{position:relative;width:100%}
  .ladi-form .ladi-form-label-container .ladi-form-label-item{display:inline-block;cursor:pointer;position:relative;border-radius:0!important;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.image{background-size:cover;background-repeat:no-repeat;background-position:center}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.no-value{display:none!important}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.text.disabled{opacity:.35}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.image.disabled{opacity:.2}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.color.disabled{opacity:.15}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:before{content:'';width:0;height:0;bottom:-1px;right:-1px;position:absolute;border-width:0 0 15px 15px;border-color:transparent;border-style:solid}
  .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:after{content:'';background-image:url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 12 12' viewBox='0 0 12 12' x='0' fill='%23fff' y='0'%3E%3Cg%3E%3Cpath d='m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");background-repeat:no-repeat;background-position:bottom right;width:7px;height:7px;bottom:0;right:0;position:absolute}
  .ladi-form .ladi-form-item{width:100%;height:100%;position:absolute}
  .ladi-form .ladi-form-item-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}
  .ladi-form .ladi-form-item.ladi-form-checkbox{height:auto}
  .ladi-form .ladi-form-item .ladi-form-control{background-color:transparent;min-width:100%;min-height:100%;max-width:100%;max-height:100%;width:100%;height:100%;padding:0 5px;color:inherit;font-size:inherit;border:none}
  .ladi-form .ladi-form-item.ladi-form-checkbox{padding:0 5px}
  .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item{margin-top:0!important;margin-left:0!important;margin-right:0!important;display:table;border:none}
  .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item{margin-top:0!important;margin-left:0!important;margin-right:10px!important;display:inline-block;border:none;position:relative}
  .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input{vertical-align:middle;width:13px;height:13px;display:table-cell;margin-right:5px}
  .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span{display:table-cell;cursor:default;vertical-align:middle;word-break:break-word}
  .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item input{position:absolute;top:4px}
  .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item span{padding-left:18px}
  .ladi-form .ladi-form-item textarea.ladi-form-control{resize:none;padding:5px}
  .ladi-form .ladi-button{cursor:pointer}
  .ladi-form .ladi-button .ladi-headline{cursor:pointer;user-select:none}
  .ladi-form .ladi-element .ladi-form-otp::-webkit-inner-spin-button,.ladi-form .ladi-element .ladi-form-otp::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}
  .ladi-form .ladi-element .ladi-form-item .button-get-code{display:none;position:absolute;right:0;top:0;bottom:0;margin:auto 0;line-height:initial;padding:5px 10px;height:max-content;cursor:pointer;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-form .ladi-element .ladi-form-item .button-get-code.hide-visibility{display:block!important;visibility:hidden!important}
  .ladi-form .ladi-form-item.otp-resend .button-get-code{display:block}
  .ladi-form .ladi-form-item.otp-countdown:before{content:attr(data-countdown-time) "s";position:absolute;top:0;bottom:0;margin:auto 0;height:max-content;line-height:initial}
  .ladi-combobox{position:absolute;width:100%;height:100%}
  .ladi-combobox .ladi-combobox-item-container{position:absolute;width:100%;height:100%;text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none;background-size:inherit;background-attachment:inherit;background-origin:inherit}
  .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item{width:100%;height:100%;position:absolute;text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit}
  .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control option{color:initial}
  .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control{background-color:transparent;min-width:100%;min-height:100%;max-width:100%;max-height:100%;width:100%;height:100%;padding:0 5px;font-size:inherit;border:none;text-transform:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-attachment:inherit;background-origin:inherit;-webkit-appearance:none;-moz-appearance:none;appearance:none;background-size:9px 6px!important;background-position:right .5rem center;background-repeat:no-repeat;padding-right:24px}
  .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control:not([data-selected=""]){text-decoration:inherit}
  .ladi-cart{position:absolute;width:100%;font-size:12px}
  .ladi-cart .ladi-cart-row{position:relative;display:inline-table;width:100%}
  .ladi-cart .ladi-cart-row:after{content:'';position:absolute;left:0;bottom:0;height:1px;width:100%;background:#dcdcdc}
  .ladi-cart .ladi-cart-no-product{text-align:center;font-size:16px;vertical-align:middle}
  .ladi-cart .ladi-cart-image{width:16%;vertical-align:middle;position:relative;text-align:center}
  .ladi-cart .ladi-cart-image img{max-width:100%}
  .ladi-cart .ladi-cart-title{vertical-align:middle;padding:0 5px;word-break:break-all}
  .ladi-cart .ladi-cart-title .ladi-cart-title-name{display:block;margin-bottom:5px;word-break:break-word}
  .ladi-cart .ladi-cart-title .ladi-cart-title-variant{font-weight:700;display:block;word-break:break-word}
  .ladi-cart .ladi-cart-image .ladi-cart-image-quantity{position:absolute;top:-3px;right:-5px;background:rgba(150,149,149,.9);width:20px;height:20px;border-radius:50%;text-align:center;color:#fff;line-height:20px}
  .ladi-cart .ladi-cart-quantity{width:70px;vertical-align:middle;text-align:center}
  .ladi-cart .ladi-cart-quantity-content{display:-webkit-inline-flex;display:inline-flex}
  .ladi-cart .ladi-cart-quantity input{width:24px;text-align:center;height:22px;pointer-events:none;-moz-appearance:textfield;border-left:none;border-right:none;border-top:1px solid #dcdcdc;border-bottom:1px solid #dcdcdc;border-radius:0}
  .ladi-cart .ladi-cart-quantity input::-webkit-inner-spin-button,.ladi-cart .ladi-cart-quantity input::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}
  .ladi-cart .ladi-cart-quantity .button{border:1px solid #dcdcdc;cursor:pointer;text-align:center;width:21px;height:22px;position:relative;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-cart .ladi-cart-quantity .button:active{transform:translateY(2px);transition:transform .2s linear}
  .ladi-cart .ladi-cart-quantity .button span{font-size:18px;position:relative;left:.5px}
  .ladi-cart .ladi-cart-quantity .button:first-child span{top:-1.2px}
  .ladi-cart .ladi-cart-price{width:100px;vertical-align:middle;text-align:right;padding:0 10px 0 5px}
  .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span{text-decoration:line-through;display:block;margin-bottom:3px}
  .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span.price-compare{text-decoration:none;color:#e85d04;font-weight:700;margin-bottom:0}
  .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-title span.promotion-name{margin-top:5px;display:block;word-break:break-word}
  .ladi-cart .ladi-cart-action{width:28px;vertical-align:middle;text-align:center}
  .ladi-cart .ladi-cart-action .button{border:1px solid #dcdcdc;display:table;cursor:pointer;text-align:center;width:25px;height:22px;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-cart .ladi-cart-action .button:active{transform:translateY(2px);transition:transform .2s linear}
  .ladi-cart .ladi-cart-action .button span{font-size:13px;position:relative;top:.5px;display:table-cell;vertical-align:middle}
  .ladi-video{position:absolute;width:100%;height:100%;cursor:pointer;overflow:hidden}
  .ladi-video .ladi-video-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}
  .ladi-group{position:absolute;width:100%;height:100%}
  .ladi-accordion{position:absolute;width:100%;height:100%}
  .ladi-accordion .ladi-accordion-shape{width:100%!important;height:100%!important;top:0!important;left:0!important;display:table;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-button-group{position:absolute;width:100%;height:100%}
  .ladi-button-group>.ladi-element{transition:inherit}
  .ladi-button-group>.ladi-element>.ladi-button{transition:inherit}
  .ladi-shape{position:absolute;width:100%;height:100%;pointer-events:none}
  .ladi-html-code{position:absolute;width:100%;height:100%}
  .ladi-image{position:absolute;width:100%;height:100%;overflow:hidden;pointer-events:none}
  .ladi-image .ladi-image-background{background-repeat:no-repeat;background-position:left top;background-size:cover;background-attachment:scroll;background-origin:content-box;position:absolute;margin:0 auto;width:100%;height:100%;pointer-events:none}
  .ladi-headline{width:100%;display:inline-block;word-break:break-word;background-size:cover;background-position:center center}
  .ladi-headline a{text-decoration:underline}
  .ladi-paragraph{width:100%;display:inline-block;word-break:break-word}
  .ladi-paragraph a{text-decoration:underline}
  .ladi-list-paragraph{width:100%;display:inline-block}
  .ladi-list-paragraph a{text-decoration:underline}
  .ladi-list-paragraph ul li{position:relative;counter-increment:linum}
  .ladi-list-paragraph ul li:before{position:absolute;background-repeat:no-repeat;background-size:100% 100%;left:0}
  .ladi-list-paragraph ul li:last-child{padding-bottom:0!important}
  .ladi-line{position:relative}
  .ladi-line .ladi-line-container{border-bottom:0!important;border-right:0!important;width:100%;height:100%}
  a[data-action]{user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;cursor:pointer}
  a:visited{color:inherit}
  a:link{color:inherit}
  .button-unmute{cursor:pointer;position:absolute;width:100%;height:100%;top:0;left:0;right:0;bottom:0;margin:auto}
  .button-unmute div{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2036%2036%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22m%2021.48%2C17.98%20c%200%2C-1.77%20-1.02%2C-3.29%20-2.5%2C-4.03%20v%202.21%20l%202.45%2C2.45%20c%20.03%2C-0.2%20.05%2C-0.41%20.05%2C-0.63%20z%20m%202.5%2C0%20c%200%2C.94%20-0.2%2C1.82%20-0.54%2C2.64%20l%201.51%2C1.51%20c%20.66%2C-1.24%201.03%2C-2.65%201.03%2C-4.15%200%2C-4.28%20-2.99%2C-7.86%20-7%2C-8.76%20v%202.05%20c%202.89%2C.86%205%2C3.54%205%2C6.71%20z%20M%209.25%2C8.98%20l%20-1.27%2C1.26%204.72%2C4.73%20H%207.98%20v%206%20H%2011.98%20l%205%2C5%20v%20-6.73%20l%204.25%2C4.25%20c%20-0.67%2C.52%20-1.42%2C.93%20-2.25%2C1.18%20v%202.06%20c%201.38%2C-0.31%202.63%2C-0.95%203.69%2C-1.81%20l%202.04%2C2.05%201.27%2C-1.27%20-9%2C-9%20-7.72%2C-7.72%20z%20m%207.72%2C.99%20-2.09%2C2.08%202.09%2C2.09%20V%209.98%20z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");width:60px;height:60px;position:absolute;top:0;left:0;bottom:0;right:0;margin:auto;background-color:rgba(0,0,0,.5);border-radius:100%;background-size:90%;background-repeat:no-repeat;background-position:center center}
  [data-opacity="0"]{opacity:0}
  [data-hidden=true]{display:none}
  [data-action=true]{cursor:pointer}
  .is-2nd-click{cursor:pointer}
  .element-click-selected{cursor:pointer}
  .ladi-accordion-shape.is-2nd-click,.ladi-button-shape.is-2nd-click{z-index:1}
  .ladi-hidden{display:none}
  .backdrop-popup{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:90000060}
  .backdrop-dropbox{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:90000040}
  .lightbox-screen{display:none;position:fixed;width:100%;height:100%;top:0;left:0;bottom:0;right:0;margin:auto;z-index:9000000080;background:rgba(0,0,0,.5)}
  .lightbox-screen .lightbox-close{position:absolute;z-index:9000000090;cursor:pointer}
  .lightbox-screen .lightbox-hidden{display:none}
  .ladi-animation-hidden{visibility:hidden!important}
  .ladi-lazyload{background-image:none!important}
  .ladi-list-paragraph ul li.ladi-lazyload:before{background-image:none!important}
  .ladi-cart-number{position:absolute;top:-2px;right:-7px;background:#f36e36;text-align:center;width:18px;height:18px;line-height:18px;font-size:12px;font-weight:700;color:#fff;border-radius:100%}
  .ladi-form-quantity{display:-webkit-inline-flex;display:inline-flex;border-color:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity .ladi-form-control{text-align:center;pointer-events:none;-moz-appearance:textfield;width:calc(100% - 45px);padding:0;min-width:24px;border-left:none;border-right:none;border-top:1px hidden;border-bottom:1px hidden;border-color:inherit}
  .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-inner-spin-button,.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}
  .ladi-form-quantity .button{display:table;cursor:pointer;text-align:center;width:30px;height:100%;position:relative;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}
  .ladi-form-quantity .button span{font-size:18px;position:relative;display:table-cell;vertical-align:middle}
  .ladi-form-quantity .button:first-child span{top:-.5px}
  .ladi-form-quantity input{pointer-events:none}
  .ladi-form [data-variant=true] select option[disabled]{background:#fff;color:#b8b8b8!important}
  .ladi-story-page-progress-bar{width:100%;height:25px;position:fixed;top:0;left:0}
  .ladi-story-page-progress-bar-item{height:100%;width:100%;display:block;float:left;margin:0 5px;position:relative;cursor:pointer}
  .ladi-story-page-progress-bar-item:before{content:'';position:absolute;background:rgba(255,255,255,.4);border-radius:10px;width:100%;height:4px;margin:auto;top:0;bottom:0;left:0;right:0}
  .ladi-story-page-progress-bar-item.active:before{background:#fff}
  .ladi-story-page-progress-bar-item span{background:#fff;border-radius:10px;height:4px;display:block;margin:auto 0;top:0;bottom:0;position:absolute;transition:width .3s linear;width:0}
  .ladi-carousel .ladi-carousel-arrow,.ladi-collection .ladi-collection-arrow,.ladi-collection .ladi-collection-button-next,.ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow,.ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow,.ladi-section .ladi-section-arrow-down{width:33px;height:33px;background-repeat:no-repeat;background-position:center center;background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M7.00015%200.585938L18.4144%2012.0002L7.00015%2023.4144L5.58594%2022.0002L15.5859%2012.0002L5.58594%202.00015L7.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
  #SECTION_POPUP .popup-close,.ladi-section .ladi-section-close{width:16px;height:16px;margin:10px;background-repeat:no-repeat;background-position:center center;background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23000%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
  .lightbox-screen .lightbox-close{width:16px;height:16px;margin:10px;background-repeat:no-repeat;background-position:center center;background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
  #BODY_BACKGROUND{position:fixed;pointer-events:none;top:0;left:0;right:0;margin:0 auto;height:100vh!important}
  .ladi-html strong{font-weight:700}
  .ladi-html em{font-style:italic}
  .ladi-html a{text-decoration:underline}
  .ladi-html img{max-width:100%}
  .ladi-html .ladi-headline p,.ladi-html .ladi-paragraph p{margin:revert}
  @media (min-width:768px) {
      .ladi-fullwidth{width:100vw!important;left:calc(-50vw + 50%)!important;box-sizing:border-box!important;transform:none!important}
      .ladi-fullwidth .ladi-gallery-view-item{transition-duration:1.5s}
  }
  @media (max-width:767px) {
      .ladi-element.ladi-auto-scroll{overflow-x:auto;overflow-y:hidden;width:100%!important;left:0!important;-webkit-overflow-scrolling:touch}
      .ladi-section.ladi-auto-scroll{overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch}
      .ladi-carousel .ladi-carousel-content{transition:left .3s ease-in-out}
      .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item{transition:transform .3s ease-in-out}
      .ladi-html img{height:auto!important}
  }
  .ladi-notify-transition{transition:top .5s ease-in-out,bottom .5s ease-in-out,opacity .5s ease-in-out}
  .ladi-notify{padding:5px;box-shadow:0 0 1px rgba(64,64,64,.3),0 8px 50px rgba(64,64,64,.05);border-radius:40px;line-height:1.6;width:100%;height:100%;font-size:13px}
  .ladi-notify .ladi-notify-image img{float:left;margin-right:13px;border-radius:50%;width:53px;height:53px;pointer-events:none}
  .ladi-notify .ladi-notify-title{font-size:100%;height:17px;overflow:hidden;font-weight:700;overflow-wrap:break-word;text-overflow:ellipsis;white-space:nowrap;line-height:1}
  .ladi-notify .ladi-notify-content{font-size:92.308%;height:17px;overflow:hidden;overflow-wrap:break-word;text-overflow:ellipsis;white-space:nowrap;line-height:1;padding-top:2px}
  .ladi-notify .ladi-notify-time{line-height:1.6;font-size:84.615%;display:inline-block;overflow-wrap:break-word;text-overflow:ellipsis;white-space:nowrap;max-width:calc(100% - 155px);overflow:hidden}
  .ladi-notify .ladi-notify-copyright{font-size:76.9231%;margin-left:2px;position:relative;padding:0 5px;cursor:pointer;opacity:.6;display:inline-block;top:-4px}
  .ladi-notify .ladi-notify-copyright svg{vertical-align:middle}
  .ladi-notify .ladi-notify-copyright svg:not(:root){overflow:hidden}
  .ladi-notify .ladi-notify-copyright div{text-decoration:none;color:rgba(64,64,64,1);display:inline}
  .ladi-notify .ladi-notify-copyright strong{font-weight:700}
  .builder-container .ladi-notify{transition:unset}
  .ladi-spin-lucky{width:100%;height:100%;border-radius:100%;box-shadow:0 0 7px 0 rgba(64,64,64,.6),0 8px 50px rgba(64,64,64,.3);background-repeat:no-repeat;background-size:cover}
  .ladi-spin-lucky .ladi-spin-lucky-start{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:20%;height:20%;cursor:pointer;background-size:contain;background-position:center center;background-repeat:no-repeat;transition:transform .3s ease-in-out;-webkit-transition:transform .3s ease-in-out}
  .ladi-spin-lucky .ladi-spin-lucky-start:hover{transform:scale(1.1)}
  .ladi-spin-lucky .ladi-spin-lucky-screen{width:100%;height:100%;border-radius:100%;transition:transform 7s cubic-bezier(.25,.1,0,1);-webkit-transition:transform 7s cubic-bezier(.25,.1,0,1);text-decoration-line:inherit;-webkit-text-decoration-line:inherit;text-transform:inherit}
  .ladi-spin-lucky .ladi-spin-lucky-screen:before{background-size:cover;background-position:center center;background-repeat:no-repeat;content:'';position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}
  .ladi-spin-lucky .ladi-spin-lucky-label{position:absolute;top:50%;left:50%;overflow:hidden;width:42%;padding-left:12%;transform-origin:0 0;-webkit-transform-origin:0 0;text-decoration-line:inherit;-webkit-text-decoration-line:inherit;text-transform:inherit;line-height:1.6;text-shadow:rgba(0,0,0,.5) 1px 0 2px}
</style>
<style type="text/css" id="style_animation">
    @media (min-width: 768px) {
      #GROUP1266{opacity:0!important;pointer-events:none!important}
      #GROUP1271{opacity:0!important;pointer-events:none!important}
  }
  @media (max-width: 767px) {
      #GROUP1266{opacity:0!important;pointer-events:none!important}
      #GROUP1271{opacity:0!important;pointer-events:none!important}
  }
</style>
<style id="style_page" type="text/css">
    @media (min-width: 768px) {
      .ladi-section .ladi-container{width:960px}
  }
  @media (max-width: 767px) {
      .ladi-section .ladi-container{width:420px}
  }
  body{font-family:Philosopher,sans-serif}
</style>
<style id="style_element" type="text/css">
    @media (min-width: 768px) {
      #SECTION_POPUP{height:0}
      #SECTION_POPUP .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SECTION24{height:522px}
      #SECTION24 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION24 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SECTION191{height:1033px}
      #SECTION191 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION191 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SECTION126{height:886.5px}
      #SECTION126 > .ladi-overlay{background-color:rgba(255,255,255,0.4)}
      #SECTION126 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION126 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE27{width:575px;top:74px;left:545px}
      #HEADLINE27 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:30px;text-align:left;line-height:1}
      #PARAGRAPH28{width:526px;top:154px;left:545px}
      #PARAGRAPH28 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:16px;text-align:justify;line-height:1.4}
      #LINE29{width:100px;top:122px;left:545px}
      #LINE29 > .ladi-line > .ladi-line-container{border-top:2px solid rgb(255,87,34);border-right:2px solid rgb(255,87,34);border-bottom:2px solid rgb(255,87,34);border-left:0!important}
      #LINE29 > .ladi-line{width:100%;padding:8px 0}
      #LINE192{width:111px;top:122px;left:425.5px}
      #LINE192 > .ladi-line > .ladi-line-container{border-top:2px solid rgb(255,87,34);border-right:2px solid rgb(255,87,34);border-bottom:2px solid rgb(255,87,34);border-left:0!important}
      #LINE192 > .ladi-line{width:100%;padding:8px 0}
      #HEADLINE193{width:614px;top:64px;left:174px}
      #HEADLINE193 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(33,33,33);font-size:40px;font-weight:700;text-align:center;line-height:1}
      #BOX195{width:307.944px;height:201.231px;top:163.5px;left:0}
      #BOX195 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-1'] or ''!!}');anh-so-1;background-position:center top;background-repeat:repeat}
      #BOX196{width:307.944px;height:201.231px;top:588.679px;left:0}
      #BOX196 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-2'] or ''!!}');anh-so-2;background-position:center top;background-repeat:repeat}
      #BOX198{width:307.944px;height:201.231px;top:801.269px;left:326.028px}
      #BOX198 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-3'] or ''!!}');anh-so-3;background-position:center top;background-repeat:repeat}
      #BOX200{width:307.944px;height:201.231px;top:163.5px;left:326.028px}
      #BOX200 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-4'] or ''!!}');anh-so-4;background-position:center top;background-repeat:repeat}
      #BOX197{width:307.944px;height:201.231px;top:376.09px;left:652.056px}
      #BOX197 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-5'] or ''!!}');anh-so-5;background-position:center top;background-repeat:repeat}
      #HEADLINE311{width:430px;top:0;left:76.252px}
      #HEADLINE311 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:30px;font-weight:700;text-align:center;line-height:1}
      #COUNTDOWN322{width:430px;height:90px;top:38.75px;left:76.252px}
      #COUNTDOWN322 > .ladi-countdown{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:46px;font-weight:700;text-align:center}
      #COUNTDOWN322 > .ladi-countdown > .ladi-element{width:calc((100% - 10px * 3) / 4);margin-right:10px;height:100%}
      #COUNTDOWN322 > .ladi-countdown .ladi-countdown-background{background:#ff9966;background:-webkit-linear-gradient(180deg,#ff9966,#ff5e62);background:linear-gradient(180deg,#ff9966,#ff5e62);border-style:solid;border-color:rgb(255,255,255);border-width:2px;border-radius:5px;box-shadow:0 2px 10px 0 rgba(0,0,0,0.3);-webkit-box-shadow:0 2px 10px 0 rgba(0,0,0,0.3)}
      #HEADLINE323{width:54px;top:131.774px;left:96.693px}
      #HEADLINE323 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:20px;font-weight:700;text-align:center;line-height:1.2}
      #HEADLINE324{width:54px;top:131.774px;left:208.943px}
      #HEADLINE324 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:20px;font-weight:700;text-align:center;line-height:1.2}
      #HEADLINE325{width:54px;top:131.774px;left:317.252px}
      #HEADLINE325 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:20px;font-weight:700;text-align:center;line-height:1.2}
      #HEADLINE326{width:54px;top:131.774px;left:433.252px}
      #HEADLINE326 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:20px;font-weight:700;text-align:center;line-height:1.2}
      #BOX370{width:960px;height:636px;top:31.5px;left:0}
      #BOX370 > .ladi-box{background:#ffecd2;background:-webkit-linear-gradient(180deg,#ffecd2,#fcb69f);background:linear-gradient(180deg,#ffecd2,#fcb69f);box-shadow:0 0 10px 0 rgba(0,0,0,0.2);-webkit-box-shadow:0 0 10px 0 rgba(0,0,0,0.2);border-color:rgb(189,189,189);border-width:1px;border-radius:10px}
      #HEADLINE371{width:454px;top:93.5px;left:50px}
      #HEADLINE371 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:32px;font-weight:700;line-height:1.6}
      #HEADLINE372{width:360px;top:0;left:0}
      #HEADLINE372 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:20px;font-weight:700;line-height:1.6}
      #PARAGRAPH373{width:504px;top:32px;left:0}
      #PARAGRAPH373 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:16px;line-height:1.6}
      #HEADLINE374{width:360px;top:0;left:0}
      #HEADLINE374 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:20px;font-weight:700;line-height:1.6}
      #PARAGRAPH375{width:438px;top:32px;left:0}
      #PARAGRAPH375 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:16px;line-height:1.6}
      #SECTION417{height:2837.81px}
      #SECTION417 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION417 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE418{width:1180px;top:55.628px;left:-101px}
      #HEADLINE418 > .ladi-headline{font-family:"Dancing Script",cursive;color:rgb(255,61,1);font-size:60px;font-weight:700;text-align:center;line-height:1}
      #BOX561{width:357px;height:543px;top:70.5px;left:569px}
      #BOX561 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-position:center top;background-repeat:repeat;border-style:solid;border-color:rgba(255,61,1,0.7);border-width:2px;border-radius:12px}
      #SHAPE662{width:582.503px;height:83.1225px;top:83.213px;left:0}
      #SHAPE662 svg:last-child{fill:url(#SHAPE662_desktop_gradient)}
      #GROUP664{width:582.503px;height:166.335px;top:695.75px;left:188.748px}
      #IMAGE734{width:132.935px;height:132.935px;top:41.758px;left:176.033px}
      #IMAGE734 > .ladi-image > .ladi-image-background{width:132.935px;height:132.935px;top:0;left:0;background-image:url('{!!$site['anh-so-6'] or ''!!}');anh-so-6;}
      #BUTTON_TEXT739{width:314px;top:9px;left:0}
      #BUTTON_TEXT739 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON739{width:543px;height:50px;top:650.5px;left:-192px}
      #BUTTON739 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON739 > .ladi-button{box-shadow:0 5px 10px 0 rgba(0,0,0,0.6);-webkit-box-shadow:0 5px 10px 0 rgba(0,0,0,0.6);border-color:rgb(0,0,0);border-width:0;border-radius:10px}
      #HEADLINE559{width:97px;top:507.251px;left:218.716px}
      #HEADLINE559 > .ladi-headline{color:rgb(255,174,19);font-size:30px;text-align:left;line-height:1.4}
      #HEADLINE558{width:389px;top:415.539px;left:-182.677px}
      #HEADLINE558 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,174,19);font-size:135px;font-weight:700;letter-spacing:0;line-height:1}
      #HEADLINE556{width:534px;top:333.25px;left:-182.677px}
      #HEADLINE556 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,174,18);font-size:41px;font-weight:700;text-align:left;letter-spacing:0;line-height:1}
      #HEADLINE15{width:171px;top:2.013px;left:49.4029px}
      #HEADLINE15 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:18px;text-align:left;line-height:1.4}
      #HEADLINE17{width:94px;top:2.013px;left:49.7939px}
      #HEADLINE17 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:18px;text-align:left;line-height:1.4}
      #HEADLINE11{width:101px;top:2.013px;left:48.5139px}
      #HEADLINE11 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:18px;text-align:left;line-height:1.4}
      #SECTION3{height:742.5px}
      #SECTION3 > .ladi-overlay{background-color:rgba(79,17,145,0.7)}
      #SECTION3 > .ladi-section-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-7'] or ''!!}');anh-so-7;background-position:center top;background-repeat:no-repeat}
      #SECTION3 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #BOX742{width:307.944px;height:201.231px;top:163.5px;left:652.056px}
      #BOX742 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-8'] or ''!!}');anh-so-8;background-position:center top;background-repeat:repeat}
      #BOX743{width:307.944px;height:201.231px;top:376.09px;left:0}
      #BOX743 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-9'] or ''!!}');anh-so-9;background-position:center top;background-repeat:repeat}
      #BOX745{width:307.944px;height:201.231px;top:588.679px;left:652.056px}
      #BOX745 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-10'] or ''!!}');anh-so-10;background-position:center top;background-repeat:repeat}
      #POPUP817{width:526px;height:611px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP817 > .ladi-popup > .ladi-overlay{border-radius:10px}
      #POPUP817 > .ladi-popup > .ladi-popup-background{background:#dce35b;background:-webkit-linear-gradient(180deg,#dce35b,#45b649);background:linear-gradient(180deg,#dce35b,#45b649);border-radius:10px}
      #POPUP817 > .ladi-popup{border-radius:10px}
      #POPUP817 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #POPUP851{width:400px;height:291px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP851 > .ladi-popup > .ladi-popup-background{background-color:rgb(255,255,255)}
      #POPUP851 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #IMAGE852{width:400px;height:282px;top:0;left:0}
      #IMAGE852 > .ladi-image > .ladi-image-background{width:432px;height:400px;top:0;left:-32px;background-image:url('{!!$site['anh-so-11'] or ''!!}');anh-so-11;}
      #HEADLINE856{width:250px;top:111px;left:75px}
      #HEADLINE856 > .ladi-headline{color:rgb(255,255,255);font-size:50px;text-align:center;line-height:1.2}
      #LINE870{width:108px;top:500.161px;left:474.604px}
      #LINE870 > .ladi-line > .ladi-line-container{border-top:2px solid rgb(255,255,255);border-right:2px solid rgb(255,255,255);border-bottom:2px solid rgb(255,255,255);border-left:0!important}
      #LINE870 > .ladi-line{width:100%;padding:8px 0}
      #PARAGRAPH677{width:258px;top:0;left:23.966px}
      #PARAGRAPH677 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:16px;font-weight:700;text-align:justify;line-height:1.2}
      #PARAGRAPH676{width:253px;top:0;left:24.466px}
      #PARAGRAPH676 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(255,61,1);font-size:16px;font-weight:700;text-align:justify;line-height:1.2}
      #GROUP578{width:279.5px;height:123.5px;top:428.5px;left:607px}
      #PARAGRAPH567{width:260px;top:94.5px;left:10px}
      #PARAGRAPH567 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:24px;font-weight:700;font-style:italic;text-align:center;line-height:1.2}
      #GROUP413{width:13px;height:13px;top:1.007px;left:0}
      #BOX415{width:7px;height:7px;top:3px;left:3px}
      #BOX415 > .ladi-box{background-color:rgb(255,61,1);border-radius:1000px}
      #BOX414{width:13px;height:13px;top:0;left:0}
      #BOX414 > .ladi-box{background-color:rgba(255,61,1,0.3);border-radius:1000px}
      #GROUP409{width:13px;height:13px;top:2.51px;left:0}
      #BOX403{width:7px;height:7px;top:3px;left:3px}
      #BOX403 > .ladi-box{background-color:rgb(255,61,1);border-radius:1000px}
      #BOX402{width:13px;height:13px;top:0;left:0}
      #BOX402 > .ladi-box{background-color:rgba(255,61,1,0.3);border-radius:1000px}
      #PARAGRAPH388{width:260px;top:67px;left:10px}
      #PARAGRAPH388 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:18px;font-style:italic;text-align:center;line-height:1.2}
      #BUTTON_TEXT387{width:280px;top:9px;left:0}
      #BUTTON_TEXT387 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON387{width:279.5px;height:49.2516px;top:0;left:0}
      #BUTTON387 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON387 > .ladi-button{border-radius:10px}
      #PARAGRAPH376{width:277px;top:109.5px;left:605.767px}
      #PARAGRAPH376 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:22px;font-weight:700;text-align:center;line-height:1.2}
      #PARAGRAPH673{width:253px;top:0;left:24.466px}
      #PARAGRAPH673 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(255,61,1);font-size:16px;font-weight:700;text-align:justify;line-height:1.2}
      #BOX873{width:13px;height:13px;top:0;left:0}
      #BOX873 > .ladi-box{background-color:rgba(255,61,1,0.3);border-radius:1000px}
      #BOX874{width:7px;height:7px;top:3px;left:3px}
      #BOX874 > .ladi-box{background-color:rgb(255,61,1);border-radius:1000px}
      #GROUP872{width:13px;height:13px;top:2px;left:0}
      #GROUP879{width:277.466px;height:38px;top:203px;left:605.767px}
      #GROUP880{width:277.466px;height:57px;top:248.498px;left:605.767px}
      #GROUP882{width:281.966px;height:38px;top:312.495px;left:605.767px}
      #BUTTON_TEXT919{width:253px;top:9px;left:0}
      #BUTTON_TEXT919 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON919{width:289px;height:55px;top:437.125px;left:664px}
      #BUTTON919 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON919 > .ladi-button{border-radius:10px}
      #IMAGE925{width:307.944px;height:201.231px;top:588.679px;left:326.028px}
      #IMAGE925 > .ladi-image > .ladi-image-background{width:307.944px;height:346.269px;top:-131.105px;left:0;background-image:url('{!!$site['anh-so-12'] or ''!!}');anh-so-12;}
      #IMAGE928{width:307.944px;height:201.231px;top:801.269px;left:0}
      #IMAGE928 > .ladi-image > .ladi-image-background{width:307.944px;height:230.958px;top:-10.1632px;left:0;background-image:url('{!!$site['anh-so-13'] or ''!!}');anh-so-13;}
      #BOX9{width:30.1269px;height:28.922px;top:0;left:0}
      #BOX9 > .ladi-box{border-style:solid;border-color:rgb(255,255,255);border-width:1px;border-radius:220px}
      #SHAPE10{width:16.2685px;height:16.2685px;top:6.32668px;left:6.92919px}
      #SHAPE10 svg:last-child{fill:rgb(255,255,255)}
      #BOX18{width:30.1269px;height:28.922px;top:0;left:0}
      #BOX18 > .ladi-box{border-style:solid;border-color:rgb(255,255,255);border-width:1px;border-radius:220px}
      #SHAPE19{width:16.2685px;height:16.2685px;top:6.32668px;left:6.92919px}
      #SHAPE19 svg:last-child{fill:rgb(255,255,255)}
      #BOX13{width:30.1269px;height:28.922px;top:0;left:0}
      #BOX13 > .ladi-box{border-style:solid;border-color:rgb(255,255,255);border-width:1px;border-radius:220px}
      #SHAPE14{width:16.2685px;height:16.2685px;top:6.32668px;left:6.92919px}
      #SHAPE14 svg:last-child{fill:rgb(255,255,255)}
      #GROUP351{width:30.1269px;height:28.922px;top:0;left:0}
      #GROUP352{width:30.1269px;height:28.922px;top:0;left:0}
      #GROUP354{width:30.1269px;height:28.922px;top:0;left:0}
      #IMAGE933{width:793px;height:522px;top:0;left:-317px}
      #IMAGE933 > .ladi-image > .ladi-image-background{width:793px;height:522px;top:0;left:0;background-image:url('{!!$site['anh-so-14'] or ''!!}');anh-so-14;}
      #GROUP934{width:504px;height:232px;top:220.5px;left:50px}
      #GROUP935{width:438px;height:132px;top:453.5px;left:50px}
      #POPUP944{width:377px;height:359px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP944 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #GROUP945{width:376px;height:358px;top:0;left:0}
      #BOX946{width:376px;height:358px;top:0;left:0}
      #BOX946 > .ladi-box{box-shadow:0 5px 9px 0 rgba(59,59,59,0.29);-webkit-box-shadow:0 5px 9px 0 rgba(59,59,59,0.29);background-color:rgb(24,202,49);border-radius:20px}
      #IMAGE947{width:182.875px;height:94px;top:56px;left:96.5625px}
      #IMAGE947 > .ladi-image > .ladi-image-background{width:182.875px;height:94px;top:0;left:0;background-image:url('{!!$site['anh-so-15'] or ''!!}');anh-so-15;}
      #HEADLINE948{width:331px;top:182px;left:22.5px}
      #HEADLINE948 > .ladi-headline{color:rgb(255,255,255);font-size:30px;text-align:center;line-height:1}
      #PARAGRAPH949{width:287px;top:236px;left:44.5px}
      #PARAGRAPH949 > .ladi-paragraph{font-family:"Montserrat",sans-serif;color:rgb(255,255,255);font-size:14px;text-align:center;line-height:1.4}
      #FORM821{width:429.189px;height:154px;top:87.75px;left:4.72905px}
      #FORM821 > .ladi-form{color:rgb(132,132,132);font-size:14px;letter-spacing:0;line-height:1.6}
      #FORM821 .ladi-form-item .ladi-form-control::placeholder,#FORM821 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"]{color:rgba(132,132,132,1.0)}
      #FORM821 .ladi-form-item{padding-left:8px;padding-right:8px}
      #FORM821 .ladi-form-item.otp-countdown:before{right:13px}
      #FORM821 .ladi-form-item.ladi-form-checkbox{padding-left:13px;padding-right:13px}
      #FORM821 .ladi-form-item-container .ladi-form-item .ladi-form-control-select{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgb(132%2C%20132%2C%20132)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E")}
      #FORM821 .ladi-survey-option{text-align:left}
      #FORM821 .ladi-form-item-container,#FORM821 .ladi-form-label-container .ladi-form-label-item{border-color:rgb(10,103,233);border-width:1px;border-radius:0}
      #FORM821 .ladi-form-item-container .ladi-form-item.ladi-form-quantity{width:calc(100% + 1px)}
      #FORM821 .ladi-form-item-container .ladi-form-quantity .button{background-color:rgb(10,103,233)}
      #FORM821 .ladi-form-item-background{background-color:rgb(255,255,255)}
      #BUTTON822{width:429px;height:53px;top:101px;left:.189px}
      #BUTTON822 > .ladi-button > .ladi-button-background{background-color:rgb(24,204,49)}
      #BUTTON822 > .ladi-button{border-radius:0}
      #BUTTON_TEXT822{width:429px;top:9px;left:0}
      #BUTTON_TEXT822 > .ladi-headline{color:rgb(255,255,255);font-size:25px;font-weight:700;text-align:center;line-height:1.6}
      #FORM_ITEM824{width:427.756px;height:35px;top:0;left:0}
      #FORM_ITEM826{width:197px;height:35px;top:46px;left:.189px}
      #HEADLINE830{width:436px;top:0;left:0}
      #HEADLINE830 > .ladi-headline{color:rgb(255,255,255);font-size:29px;font-weight:700;text-align:center;line-height:1.2;text-shadow:rgba(0,0,0,0.5) 0 1px 2px}
      #GROUP818{width:436px;height:241.75px;top:309.389px;left:45px}
      #IMAGE950{width:1606.05px;height:742.5px;top:0;left:-325px}
      #IMAGE950 > .ladi-image > .ladi-image-background{width:1606.05px;height:742.5px;top:0;left:0;background-image:url('{!!$site['anh-so-16'] or ''!!}');anh-so-16;}
      #IMAGE952{width:137.882px;height:137.882px;top:0;left:10.559px}
      #IMAGE952 > .ladi-image > .ladi-image-background{width:137.882px;height:137.882px;top:0;left:0;background-image:url('{!!$site['anh-so-17'] or ''!!}');anh-so-17;}
      #HEADLINE954{width:491px;top:115.5px;left:-162.677px}
      #HEADLINE954 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,255,255);font-size:70px;font-weight:700;text-align:center;line-height:1.6}
      #HEADLINE955{width:810px;top:201.041px;left:-317px}
      #HEADLINE955 > .ladi-headline{font-family:"Dancing Script",cursive;color:rgb(255,255,255);font-size:60px;font-weight:700;text-align:center;line-height:1.6}
      #LINE956{width:299px;top:297.041px;left:-66.677px}
      #LINE956 > .ladi-line > .ladi-line-container{border-top:1px solid rgb(255,255,255);border-right:1px solid rgb(255,255,255);border-bottom:1px solid rgb(255,255,255);border-left:0!important}
      #LINE956 > .ladi-line{width:100%;padding:8px 0}
      #IMAGE963{width:307.944px;height:201.231px;top:376.09px;left:326.028px}
      #IMAGE963 > .ladi-image > .ladi-image-background{width:307.944px;height:230.958px;top:-29.7273px;left:0;background-image:url('{!!$site['anh-so-18'] or ''!!}');anh-so-18;}
      #IMAGE964{width:307.944px;height:201.231px;top:801.269px;left:652.056px}
      #IMAGE964 > .ladi-image > .ladi-image-background{width:307.944px;height:230.958px;top:-9.14686px;left:0;background-image:url('{!!$site['anh-so-19'] or ''!!}');anh-so-19;}
      #IMAGE966{width:923.412px;height:599.3px;top:0;left:160.195px}
      #IMAGE966 > .ladi-image > .ladi-image-background{width:923.412px;height:609.554px;top:0;left:0;background-image:url('{!!$site['anh-so-20'] or ''!!}');anh-so-20;}
      #SHAPE967{width:60px;height:60px;top:141px;left:262.557px}
      #SHAPE967 svg:last-child{fill:rgba(0,0,0,0.5)}
      #VIDEO967{width:585.113px;height:342px;top:74.3px;left:331.195px}
      #VIDEO967 > .ladi-video > .ladi-video-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-21'] or ''!!}');anh-so-21;background-position:center center;background-repeat:no-repeat}
      #SECTION969{height:799.086px}
      #SECTION969 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE979{width:580px;top:1425.1px;left:188px}
      #HEADLINE979 > .ladi-headline{color:rgb(0,0,0);font-size:40px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #IMAGE980{width:1053.76px;height:490px;top:1479.1px;left:-48.88px}
      #IMAGE980 > .ladi-image > .ladi-image-background{width:1053.76px;height:490px;top:0;left:0;background-image:url('{!!$site['anh-so-22'] or ''!!}');anh-so-22;}
      #IMAGE980 > .ladi-image{border-radius:10px}
      #HEADLINE983{width:580px;top:761.1px;left:186px}
      #HEADLINE983 > .ladi-headline{color:rgb(0,0,0);font-size:40px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #IMAGE984{width:1053.76px;height:571px;top:813.6px;left:-48.88px}
      #IMAGE984 > .ladi-image > .ladi-image-background{width:1053.76px;height:571px;top:0;left:0;background-image:url('{!!$site['anh-so-23'] or ''!!}');anh-so-23;}
      #IMAGE984 > .ladi-image{border-radius:10px}
      #HEADLINE985{width:580px;top:2140.1px;left:190px}
      #HEADLINE985 > .ladi-headline{color:rgb(0,0,0);font-size:40px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #BOX987{width:320px;height:565px;top:0;left:0}
      #BOX987 > .ladi-box{box-shadow:0 0 15px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.1);background-color:rgb(255,255,255);border-color:rgb(0,0,0);border-width:1px;border-radius:10px}
      #PARAGRAPH988{width:260px;top:204px;left:30px}
      #PARAGRAPH988 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:center;line-height:1.6}
      #PARAGRAPH989{width:247px;top:175px;left:36.5px}
      #PARAGRAPH989 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:center;line-height:1.6}
      #PARAGRAPH990{width:260px;top:244px;left:30px}
      #PARAGRAPH990 > .ladi-paragraph{font-family:"Quicksand",sans-serif;color:rgba(0,0,0,0.7);font-size:15px;text-align:justify;line-height:1.4}
      #BOX992{width:105px;height:105px;top:0;left:0}
      #BOX992 > .ladi-box{background-color:rgba(255,164,41,0.5);border-radius:1000px}
      #IMAGE993{width:90px;height:90px;top:7.5px;left:7.5px}
      #IMAGE993 > .ladi-image > .ladi-image-background{width:106px;height:106px;top:0;left:0;background-image:url('{!!$site['anh-so-24'] or ''!!}');anh-so-24;}
      #IMAGE993 > .ladi-image{box-shadow:inset 0 0 10px 0 #000;-webkit-box-shadow:inset 0 0 10px 0 #000;border-color:rgb(255,255,255);border-width:2px;border-radius:100px}
      #GROUP991{width:105px;height:105px;top:54.004px;left:107.5px}
      #BOX995{width:320px;height:565px;top:0;left:0}
      #BOX995 > .ladi-box{box-shadow:0 0 15px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.1);background-color:rgb(255,255,255);border-radius:10px}
      #PARAGRAPH996{width:228px;top:175px;left:46px}
      #PARAGRAPH996 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:center;line-height:1.6}
      #PARAGRAPH997{width:260px;top:244px;left:30px}
      #PARAGRAPH997 > .ladi-paragraph{font-family:"Quicksand",sans-serif;color:rgba(0,0,0,0.7);font-size:15px;text-align:justify;line-height:1.4}
      #PARAGRAPH998{width:260px;top:204px;left:30px}
      #PARAGRAPH998 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:center;line-height:1.6}
      #BOX1000{width:104px;height:104px;top:0;left:0}
      #BOX1000 > .ladi-box{background-color:rgba(213,1,1,0.5);border-radius:1000px}
      #IMAGE1001{width:90px;height:90px;top:7px;left:7px}
      #IMAGE1001 > .ladi-image > .ladi-image-background{width:90px;height:90px;top:0;left:0;background-image:url('{!!$site['anh-so-25'] or ''!!}');anh-so-25;}
      #IMAGE1001 > .ladi-image{box-shadow:inset 0 -15px 20px -20px #000;-webkit-box-shadow:inset 0 -15px 20px -20px #000;border-color:rgb(255,255,255);border-width:2px;border-radius:100px}
      #GROUP999{width:104px;height:104px;top:54.508px;left:108px}
      #BOX1003{width:320px;height:565px;top:0;left:0}
      #BOX1003 > .ladi-box{box-shadow:0 0 15px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.1);background-color:rgb(255,255,255);border-radius:10px}
      #PARAGRAPH1004{width:228px;top:175px;left:46px}
      #PARAGRAPH1004 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:center;line-height:1.6}
      #PARAGRAPH1005{width:260px;top:244px;left:30px}
      #PARAGRAPH1005 > .ladi-paragraph{font-family:"Quicksand",sans-serif;color:rgba(0,0,0,0.7);font-size:15px;text-align:justify;line-height:1.4}
      #PARAGRAPH1006{width:260px;top:204px;left:30px}
      #PARAGRAPH1006 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:center;line-height:1.6}
      #BOX1008{width:104px;height:104px;top:0;left:0}
      #BOX1008 > .ladi-box{background-color:rgba(255,164,41,0.3);border-radius:1000px}
      #IMAGE1009{width:90px;height:90px;top:7px;left:7px}
      #IMAGE1009 > .ladi-image > .ladi-image-background{width:681px;height:681px;top:-337px;left:-285px;background-image:url('{!!$site['anh-so-26'] or ''!!}');anh-so-26;}
      #IMAGE1009 > .ladi-image{box-shadow:inset 0 -15px 20px -20px #000;-webkit-box-shadow:inset 0 -15px 20px -20px #000;border-color:rgb(255,255,255);border-width:2px;border-radius:100px}
      #GROUP1007{width:104px;height:104px;top:54px;left:108px}
      #BUTTON_TEXT1011{width:364px;top:11.4765px;left:0}
      #BUTTON_TEXT1011 > .ladi-headline{color:rgb(255,255,255);font-size:30px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1011{width:510.067px;height:76.5101px;top:317.49px;left:0}
      #BUTTON1011 > .ladi-button > .ladi-button-background{background-color:rgb(24,203,49)}
      #BUTTON1011 > .ladi-button{box-shadow:0 2px 10px -5px #000;-webkit-box-shadow:0 2px 10px -5px #000;border-radius:5px}
      #FORM_ITEM1013{width:510.067px;height:48.7584px;top:0;left:0}
      #FORM_ITEM1015{width:510.067px;height:46.7584px;top:55.069px;left:0}
      #FORM_ITEM1016{width:510.067px;height:102.758px;top:160.621px;left:0}
      #FORM1010{width:510.067px;height:394px;top:172.37px;left:216.466px}
      #FORM1010 > .ladi-form{color:rgba(0,0,0,0.5);font-size:18px;text-align:center;line-height:1.6}
      #FORM1010 .ladi-form-item .ladi-form-control::placeholder,#FORM1010 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"]{color:rgba(0,0,0,0.5)}
      #FORM1010 .ladi-form-item-container .ladi-form-item .ladi-form-control-select{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgba(0%2C%200%2C%200%2C%200.5)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E")}
      #FORM1010 .ladi-form-item .ladi-form-control-select{text-align-last:center}
      #FORM1010 .ladi-survey-option{text-align:center}
      #FORM1010 .ladi-form-item-container,#FORM1010 .ladi-form-label-container .ladi-form-label-item{border-style:solid;border-color:rgb(238,238,238);border-width:0;border-radius:5px;box-shadow:0 2px 10px -5px #000;-webkit-box-shadow:0 2px 10px -5px #000}
      #FORM1010 .ladi-form-item-container .ladi-form-quantity .button{background-color:rgb(238,238,238)}
      #FORM1010 .ladi-form-item-background{background-color:rgb(255,255,255);border-radius:5px}
      #SECTION1017{height:658.9px}
      #SECTION1017 > .ladi-overlay{background-color:rgba(34,34,34,0.7)}
      #SECTION1017 > .ladi-section-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-27'] or ''!!}');anh-so-27;background-position:center top;background-repeat:repeat}
      #SECTION1017 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE1031{width:580px;top:64.37px;left:181.5px}
      #HEADLINE1031 > .ladi-headline{color:rgb(255,255,255);font-size:60px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #BUTTON_TEXT1052{width:157px;top:9px;left:0}
      #BUTTON_TEXT1052 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1052{width:279.5px;height:49.2516px;top:585.6px;left:340.25px}
      #BUTTON1052 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON1052 > .ladi-button{border-radius:10px}
      #BUTTON_TEXT1054{width:157px;top:9px;left:0}
      #BUTTON_TEXT1054 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1054{width:279.5px;height:49.2516px;top:2003.6px;left:340.25px}
      #BUTTON1054 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON1054 > .ladi-button{border-radius:10px}
      #GROUP1056{width:320px;height:565px;top:2227.6px;left:-40px}
      #GROUP1057{width:320px;height:565px;top:2227.6px;left:663px}
      #GROUP1058{width:320px;height:565px;top:2227.6px;left:311.5px}
      #HEADLINE1071{width:1188px;top:130.628px;left:-100px}
      #HEADLINE1071 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,61,1);font-size:63px;font-weight:700;text-align:center;line-height:1}
      #IMAGE1059{width:927.74px;height:461.6px;top:9.493px;left:12.13px}
      #IMAGE1059 > .ladi-image > .ladi-image-background{width:931.473px;height:461.6px;top:0;left:0;background-image:url('{!!$site['anh-so-28'] or ''!!}');anh-so-28;}
      #SHAPE1072{width:222.003px;height:17.1971px;top:225.1px;left:368.998px}
      #SHAPE1072 svg:last-child{fill:rgb(189,189,189)}
      #BOX1073{width:952px;height:480.586px;top:0;left:0}
      #BOX1073 > .ladi-box{box-shadow:0 0 20px -5px rgba(0,0,0,0.4);-webkit-box-shadow:0 0 20px -5px rgba(0,0,0,0.4);background-color:rgba(189,189,189,0.2)}
      #SHAPE1076{width:1251.15px;height:330.08px;top:166.22px;left:0}
      #SHAPE1076 > .ladi-shape{transform:rotate(-13deg);-webkit-transform:rotate(-13deg)}
      #SHAPE1076 svg:last-child{fill:url(#SHAPE1076_desktop_gradient)}
      #HTML_CODE1084{width:446px;height:360.593px;top:41.758px;left:514px}
      #GROUP1112{width:952px;height:480.586px;top:279.993px;left:4px}
      #GROUP1113{width:1251.15px;height:599.3px;top:-13.7px;left:-141.901px}
      #HEADLINE1116{width:505px;top:455.604px;left:227.5px}
      #HEADLINE1116 > .ladi-headline{color:rgb(255,255,255);font-size:16px;font-weight:700;text-align:center;line-height:1.6}
      #SECTION1222{height:498px}
      #SECTION1222 > .ladi-overlay{background-color:rgba(255,255,255,0.6)}
      #SECTION1222 > .ladi-section-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-29'] or ''!!}');anh-so-29;background-position:left top;background-repeat:no-repeat}
      #SECTION1222 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #LINE1223{width:960px;top:432.693px;left:0}
      #LINE1223 > .ladi-line > .ladi-line-container{border-top:1px solid rgba(7,58,145,0.2);border-right:1px solid rgba(7,58,145,0.2);border-bottom:1px solid rgba(7,58,145,0.2);border-left:0!important}
      #LINE1223 > .ladi-line{width:100%;padding:8px 0}
      #HEADLINE1225{width:485px;top:166.193px;left:.0005px}
      #HEADLINE1225 > .ladi-headline{color:rgb(5,31,77);font-size:18px;font-weight:700;text-align:left;line-height:1.4}
      #GROUP1229{width:169px;height:28.092px;top:402.351px;left:0}
      #SHAPE1230{width:22.5469px;height:28.092px;top:0;left:0}
      #SHAPE1230 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1231{width:136px;top:1.62373px;left:33px}
      #HEADLINE1231 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1232{width:226px;height:28.0918px;top:354.012px;left:.0005px}
      #SHAPE1233{width:22.5469px;height:28.0918px;top:0;left:0}
      #SHAPE1233 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1234{width:193px;top:5.30371px;left:33px}
      #HEADLINE1234 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1235{width:437px;height:44.6314px;top:218.361px;left:.0005px}
      #SHAPE1236{width:22.5469px;height:28.0918px;top:0;left:0}
      #SHAPE1236 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1237{width:404px;top:4.98372px;left:33px}
      #HEADLINE1237 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #BOX1264{width:60px;height:60px;top:0;left:0}
      #BOX1264 > .ladi-box{box-shadow:0 0 10px -5px #000;-webkit-box-shadow:0 0 10px -5px #000;background-color:rgb(255,255,255);border-radius:1000px}
      #IMAGE1265{width:42px;height:40px;top:9.779px;left:10.375px}
      #IMAGE1265 > .ladi-image > .ladi-image-background{width:42px;height:40.443px;top:0;left:0;background-image:url('{!!$site['anh-so-30'] or ''!!}');anh-so-30;}
      #GROUP1266{width:60px;height:60px;top:auto;left:auto;right:20px;bottom:20px;position:fixed;z-index:90000050}
      #GROUP1266.ladi-animation > .ladi-group{animation-name:swing;-webkit-animation-name:swing;animation-delay:3s;-webkit-animation-delay:3s;animation-duration:1s;-webkit-animation-duration:1s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}
      #BOX1268{width:60px;height:60px;top:0;left:0}
      #BOX1268 > .ladi-box{box-shadow:0 0 10px -5px #000;-webkit-box-shadow:0 0 10px -5px #000;background-color:rgb(255,255,255);border-radius:1000px}
      #SHAPE1270{width:38.4153px;height:51.732px;top:4.134px;left:11px}
      #SHAPE1270 svg:last-child{fill:rgb(255,15,1)}
      #GROUP1271{width:60px;height:60px;top:auto;left:20px;right:auto;bottom:20px;position:fixed;z-index:90000050}
      #GROUP1271.ladi-animation > .ladi-group{animation-name:tada;-webkit-animation-name:tada;animation-delay:3s;-webkit-animation-delay:3s;animation-duration:1s;-webkit-animation-duration:1s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}
      #IMAGE1272{width:427.786px;height:269.389px;top:40px;left:50.1195px}
      #IMAGE1272 > .ladi-image > .ladi-image-background{width:427.786px;height:328.494px;top:-59.1045px;left:0;background-image:url('{!!$site['anh-so-31'] or ''!!}');anh-so-31;}
      #IMAGE1272 > .ladi-image{box-shadow:0 0 15px -10px #000;-webkit-box-shadow:0 0 15px -10px #000;border-radius:0}
      #GROUP1273{width:149.514px;height:28.922px;top:382.617px;left:-182.677px}
      #GROUP1274{width:220.403px;height:28.922px;top:382.617px;left:-18.6865px}
      #GROUP1275{width:143.794px;height:28.922px;top:382.617px;left:207.529px}
      #FORM_ITEM1321{width:220.299px;height:35px;top:46px;left:208.89px}
      #FORM_ITEM1323{width:510.067px;height:46.6894px;top:108.069px;left:0}
      #BUTTON_TEXT1327{width:429px;top:9px;left:0}
      #BUTTON_TEXT1327 > .ladi-headline{color:rgb(255,255,255);font-size:25px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1327{width:429px;height:53px;top:101px;left:.189px}
      #BUTTON1327 > .ladi-button > .ladi-button-background{background-color:rgb(24,204,49)}
      #BUTTON1327 > .ladi-button{border-radius:0}
      #FORM_ITEM1329{width:427.756px;height:35px;top:0;left:0}
      #FORM_ITEM1330{width:197px;height:35px;top:46px;left:.189px}
      #FORM_ITEM1331{width:220.299px;height:35px;top:46px;left:208.89px}
      #FORM1326{width:429.189px;height:154px;top:87.75px;left:4.72905px}
      #FORM1326 > .ladi-form{color:rgb(132,132,132);font-size:14px;letter-spacing:0;line-height:1.6}
      #FORM1326 .ladi-form-item .ladi-form-control::placeholder,#FORM1326 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"]{color:rgba(132,132,132,1.0)}
      #FORM1326 .ladi-form-item{padding-left:8px;padding-right:8px}
      #FORM1326 .ladi-form-item.otp-countdown:before{right:13px}
      #FORM1326 .ladi-form-item.ladi-form-checkbox{padding-left:13px;padding-right:13px}
      #FORM1326 .ladi-form-item-container .ladi-form-item .ladi-form-control-select{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgb(132%2C%20132%2C%20132)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E")}
      #FORM1326 .ladi-survey-option{text-align:left}
      #FORM1326 .ladi-form-item-container,#FORM1326 .ladi-form-label-container .ladi-form-label-item{border-color:rgb(10,103,233);border-width:1px;border-radius:0}
      #FORM1326 .ladi-form-item-container .ladi-form-item.ladi-form-quantity{width:calc(100% + 1px)}
      #FORM1326 .ladi-form-item-container .ladi-form-quantity .button{background-color:rgb(10,103,233)}
      #FORM1326 .ladi-form-item-background{background-color:rgb(255,255,255)}
      #HEADLINE1332{width:436px;top:0;left:0}
      #HEADLINE1332 > .ladi-headline{color:rgb(255,255,255);font-size:29px;font-weight:700;text-align:center;line-height:1.2;text-shadow:rgba(0,0,0,0.5) 0 1px 2px}
      #GROUP1325{width:436px;height:241.75px;top:318.125px;left:45px}
      #IMAGE1333{width:427.786px;height:269.389px;top:40px;left:50.1195px}
      #IMAGE1333 > .ladi-image > .ladi-image-background{width:427.786px;height:328.494px;top:-59.1045px;left:0;background-image:url('{!!$site['anh-so-32'] or ''!!}');anh-so-32;}
      #IMAGE1333 > .ladi-image{box-shadow:0 0 15px -10px #000;-webkit-box-shadow:0 0 15px -10px #000;border-radius:0}
      #POPUP1324{width:526px;height:611px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP1324 > .ladi-popup > .ladi-overlay{border-radius:10px}
      #POPUP1324 > .ladi-popup > .ladi-popup-background{background:#dce35b;background:-webkit-linear-gradient(180deg,#dce35b,#45b649);background:linear-gradient(180deg,#dce35b,#45b649);border-radius:10px}
      #POPUP1324 > .ladi-popup{border-radius:10px}
      #POPUP1324 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SHAPE1335{width:22.5469px;height:26.9244px;top:0;left:0}
      #SHAPE1335 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1336{width:393px;top:4.77661px;left:33px}
      #HEADLINE1336 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1334{width:426px;height:43.7766px;top:264.148px;left:0}
      #SHAPE1338{width:22.5469px;height:26.9244px;top:0;left:0}
      #SHAPE1338 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1339{width:388px;top:4.77661px;left:33px}
      #HEADLINE1339 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1337{width:421px;height:43.7766px;top:309.08px;left:0}
  }
  @media (max-width: 767px) {
      #SECTION_POPUP{height:0}
      #SECTION_POPUP .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SECTION24{height:676.304px}
      #SECTION24 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION24 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SECTION191{height:902.46px}
      #SECTION191 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION191 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SECTION126{height:1236.33px}
      #SECTION126 > .ladi-overlay{background-color:rgba(255,255,255,0.4)}
      #SECTION126 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION126 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE27{width:384px;top:275.304px;left:16.2306px}
      #HEADLINE27 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:20px;text-align:left;line-height:1}
      #PARAGRAPH28{width:383px;top:318.304px;left:17.2306px}
      #PARAGRAPH28 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:justify;line-height:1.4}
      #LINE29{width:72px;top:297.304px;left:16.2306px}
      #LINE29 > .ladi-line > .ladi-line-container{border-top:2px solid rgb(255,87,34);border-right:2px solid rgb(255,87,34);border-bottom:2px solid rgb(255,87,34);border-left:0!important}
      #LINE29 > .ladi-line{width:100%;padding:8px 0}
      #LINE192{width:72px;top:60px;left:174px}
      #LINE192 > .ladi-line > .ladi-line-container{border-top:2px solid rgb(255,87,34);border-right:2px solid rgb(255,87,34);border-bottom:2px solid rgb(255,87,34);border-left:0!important}
      #LINE192 > .ladi-line{width:100%;padding:8px 0}
      #HEADLINE193{width:420px;top:22px;left:0}
      #HEADLINE193 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(33,33,33);font-size:32px;font-weight:700;text-align:center;line-height:1}
      #BOX195{width:191.288px;height:125px;top:97px;left:16.2306px}
      #BOX195 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-33'] or ''!!}');anh-so-33;background-position:center top;background-repeat:repeat}
      #BOX196{width:191.288px;height:125px;top:97px;left:213.231px}
      #BOX196 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-34'] or ''!!}');anh-so-34;background-position:center top;background-repeat:repeat}
      #BOX198{width:191.288px;height:125px;top:750.42px;left:213.231px}
      #BOX198 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-35'] or ''!!}');anh-so-35;background-position:center top;background-repeat:repeat}
      #BOX200{width:191.288px;height:125px;top:358.368px;left:16.2306px}
      #BOX200 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-36'] or ''!!}');anh-so-36;background-position:center top;background-repeat:repeat}
      #BOX197{width:191.288px;height:125px;top:489.052px;left:16.2306px}
      #BOX197 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-37'] or ''!!}');anh-so-37;background-position:center top;background-repeat:repeat}
      #HEADLINE311{width:345px;top:0;left:13.375px}
      #HEADLINE311 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:26px;font-weight:700;text-align:center;line-height:1}
      #COUNTDOWN322{width:291.669px;height:56.6513px;top:42.8418px;left:40.04px}
      #COUNTDOWN322 > .ladi-countdown{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:35px;font-weight:700;text-align:center}
      #COUNTDOWN322 > .ladi-countdown > .ladi-element{width:calc((100% - 10px * 3) / 4);margin-right:10px;height:100%}
      #COUNTDOWN322 > .ladi-countdown .ladi-countdown-background{background:#ff9966;background:-webkit-linear-gradient(180deg,#ff9966,#ff5e62);background:linear-gradient(180deg,#ff9966,#ff5e62);border-style:solid;border-color:rgb(255,255,255);border-width:2px;border-radius:5px;box-shadow:0 2px 10px 0 rgba(0,0,0,0.3);-webkit-box-shadow:0 2px 10px 0 rgba(0,0,0,0.3)}
      #HEADLINE323{width:39px;top:107.124px;left:53.9514px}
      #HEADLINE323 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:18px;font-weight:700;text-align:center;line-height:1.2}
      #HEADLINE324{width:39px;top:107.124px;left:130.834px}
      #HEADLINE324 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:18px;font-weight:700;text-align:center;line-height:1.2}
      #HEADLINE325{width:39px;top:107.124px;left:206.84px}
      #HEADLINE325 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:18px;font-weight:700;text-align:center;line-height:1.2}
      #HEADLINE326{width:39px;top:107.124px;left:282.459px}
      #HEADLINE326 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(5,31,77);font-size:18px;font-weight:700;text-align:center;line-height:1.2}
      #BOX370{width:400px;height:952px;top:10px;left:10px}
      #BOX370 > .ladi-box{background:#ffecd2;background:-webkit-linear-gradient(180deg,#ffecd2,#fcb69f);background:linear-gradient(180deg,#ffecd2,#fcb69f);box-shadow:0 0 10px 0 rgba(0,0,0,0.2);-webkit-box-shadow:0 0 10px 0 rgba(0,0,0,0.2);border-color:rgb(189,189,189);border-width:1px;border-radius:10px}
      #HEADLINE371{width:337px;top:49px;left:38px}
      #HEADLINE371 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:24px;font-weight:700;text-align:left;line-height:1.4}
      #HEADLINE372{width:328px;top:0;left:0}
      #HEADLINE372 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;line-height:1.6}
      #PARAGRAPH373{width:333px;top:28px;left:0}
      #PARAGRAPH373 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:justify;line-height:1.6}
      #HEADLINE374{width:171px;top:0;left:0}
      #HEADLINE374 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;line-height:1.6}
      #PARAGRAPH375{width:343px;top:32px;left:0}
      #PARAGRAPH375 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:justify;line-height:1.6}
      #SECTION417{height:2293.03px}
      #SECTION417 > .ladi-section-background{background-color:rgb(255,255,255)}
      #SECTION417 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE418{width:385px;top:11px;left:17px}
      #HEADLINE418 > .ladi-headline{font-family:"Dancing Script",cursive;color:rgb(255,61,1);font-size:35px;font-weight:700;text-align:center;line-height:1}
      #BOX561{width:340px;height:405px;top:521.99px;left:38px}
      #BOX561 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-position:center top;background-repeat:repeat;border-style:solid;border-color:rgba(255,61,1,0.7);border-width:2px;border-radius:12px}
      #SHAPE662{width:371.749px;height:60.6345px;top:81.7005px;left:0}
      #SHAPE662 svg:last-child{fill:url(#SHAPE662_desktop_gradient)}
      #GROUP664{width:371.749px;height:142.335px;top:1034.99px;left:24.1255px}
      #IMAGE734{width:149px;height:149px;top:10px;left:135.5px}
      #IMAGE734 > .ladi-image > .ladi-image-background{width:149px;height:149px;top:0;left:0;background-image:url('{!!$site['anh-so-38'] or ''!!}');anh-so-38;}
      #BUTTON_TEXT739{width:314px;top:5.86154px;left:0}
      #BUTTON_TEXT739 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON739{width:313.674px;height:50.5641px;top:668.591px;left:58.63px}
      #BUTTON739 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON739 > .ladi-button{box-shadow:0 5px 10px 0 rgba(0,0,0,0.6);-webkit-box-shadow:0 5px 10px 0 rgba(0,0,0,0.6);border-color:rgb(0,0,0);border-width:0;border-radius:10px}
      #HEADLINE559{width:63px;top:634.848px;left:312.967px}
      #HEADLINE559 > .ladi-headline{color:rgb(255,174,19);font-size:18px;text-align:left;line-height:1.4}
      #HEADLINE558{width:253px;top:579.848px;left:56.1432px}
      #HEADLINE558 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,174,19);font-size:80px;font-weight:700;letter-spacing:0;line-height:1}
      #HEADLINE556{width:320px;top:451.746px;left:49.8176px}
      #HEADLINE556 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,174,18);font-size:24px;font-weight:700;text-align:center;letter-spacing:0;line-height:1}
      #HEADLINE15{width:152px;top:0;left:32.1753px}
      #HEADLINE15 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:18px;text-align:left;line-height:1.4}
      #HEADLINE17{width:99px;top:0;left:32.4299px}
      #HEADLINE17 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:18px;text-align:left;line-height:1.4}
      #HEADLINE11{width:102px;top:0;left:31.5963px}
      #HEADLINE11 > .ladi-headline{font-family:"Philosopher",sans-serif;color:rgb(255,255,255);font-size:18px;text-align:left;line-height:1.4}
      #SECTION3{height:792.037px}
      #SECTION3 > .ladi-overlay{background-color:rgba(79,17,145,0.7)}
      #SECTION3 > .ladi-section-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-39'] or ''!!}');anh-so-39;background-position:center top;background-repeat:no-repeat}
      #SECTION3 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #BOX742{width:191.288px;height:125px;top:227.684px;left:16.2306px}
      #BOX742 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-40'] or ''!!}');anh-so-40;background-position:center top;background-repeat:repeat}
      #BOX743{width:191.288px;height:125px;top:227.684px;left:213.231px}
      #BOX743 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-41'] or ''!!}');anh-so-41;background-position:center top;background-repeat:repeat}
      #BOX745{width:191.288px;height:125px;top:619.736px;left:213.231px}
      #BOX745 > .ladi-box{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-42'] or ''!!}');anh-so-42;background-position:center top;background-repeat:repeat}
      #POPUP817{width:349px;height:494px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP817 > .ladi-popup > .ladi-overlay{border-radius:10px}
      #POPUP817 > .ladi-popup > .ladi-popup-background{background:#dce35b;background:-webkit-linear-gradient(180deg,#dce35b,#45b649);background:linear-gradient(180deg,#dce35b,#45b649);border-radius:10px}
      #POPUP817 > .ladi-popup{border-radius:10px}
      #POPUP817 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #POPUP851{width:400px;height:400px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP851 > .ladi-popup > .ladi-popup-background{background-color:rgb(255,255,255)}
      #POPUP851 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #IMAGE852{width:200px;height:400px;top:0;left:200px}
      #IMAGE852 > .ladi-image > .ladi-image-background{width:266.667px;height:400px;top:0;left:-32px;background-image:url('{!!$site['anh-so-43'] or ''!!}');anh-so-43;}
      #HEADLINE856{width:250px;top:75px;left:35px}
      #HEADLINE856 > .ladi-headline{color:rgb(255,255,255);font-size:30px;line-height:1.2}
      #LINE870{width:122px;top:619.848px;left:484px}
      #LINE870 > .ladi-line > .ladi-line-container{border-top:2px solid rgb(255,255,255);border-right:2px solid rgb(255,255,255);border-bottom:2px solid rgb(255,255,255);border-left:0!important}
      #LINE870 > .ladi-line{width:100%;padding:8px 0}
      #PARAGRAPH677{width:275px;top:0;left:23.3062px}
      #PARAGRAPH677 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:14px;font-weight:700;text-align:justify;line-height:1.2}
      #PARAGRAPH676{width:275px;top:0;left:23.9878px}
      #PARAGRAPH676 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(255,61,1);font-size:14px;font-weight:700;text-align:justify;line-height:1.2}
      #GROUP578{width:279.5px;height:122.5px;top:771.49px;left:69.75px}
      #PARAGRAPH567{width:260px;top:94.5px;left:10px}
      #PARAGRAPH567 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:24px;font-weight:700;font-style:italic;text-align:center;line-height:1.2}
      #GROUP413{width:12.6421px;height:13px;top:1.007px;left:0}
      #BOX415{width:6.80729px;height:7px;top:3px;left:2.91741px}
      #BOX415 > .ladi-box{background-color:rgb(255,61,1);border-radius:1000px}
      #BOX414{width:12.6421px;height:13px;top:0;left:0}
      #BOX414 > .ladi-box{background-color:rgba(255,61,1,0.3);border-radius:1000px}
      #GROUP409{width:12.7459px;height:13px;top:2.51px;left:0}
      #BOX403{width:6.86318px;height:7px;top:3px;left:2.94136px}
      #BOX403 > .ladi-box{background-color:rgb(255,61,1);border-radius:1000px}
      #BOX402{width:12.7459px;height:13px;top:0;left:0}
      #BOX402 > .ladi-box{background-color:rgba(255,61,1,0.3);border-radius:1000px}
      #PARAGRAPH388{width:260px;top:67px;left:10px}
      #PARAGRAPH388 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:18px;font-style:italic;text-align:center;line-height:1.2}
      #BUTTON_TEXT387{width:280px;top:9px;left:0}
      #BUTTON_TEXT387 > .ladi-headline{color:rgb(255,255,255);font-size:28px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON387{width:279.5px;height:49.2516px;top:0;left:0}
      #BUTTON387 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON387 > .ladi-button{border-radius:10px}
      #PARAGRAPH376{width:305px;top:538.507px;left:53px}
      #PARAGRAPH376 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:left;line-height:1.2}
      #PARAGRAPH673{width:274px;top:0;left:23.9878px}
      #PARAGRAPH673 > .ladi-paragraph{font-family:"Philosopher",sans-serif;color:rgb(255,61,1);font-size:14px;font-weight:700;text-align:justify;line-height:1.2}
      #BOX873{width:12.7459px;height:13px;top:0;left:0}
      #BOX873 > .ladi-box{background-color:rgba(255,61,1,0.3);border-radius:1000px}
      #BOX874{width:6.86318px;height:7px;top:3px;left:2.94136px}
      #BOX874 > .ladi-box{background-color:rgb(255,61,1);border-radius:1000px}
      #GROUP872{width:12.7459px;height:13px;top:2px;left:0}
      #GROUP879{width:297.534px;height:32px;top:595.007px;left:53px}
      #GROUP880{width:298.515px;height:32px;top:636.005px;left:53px}
      #GROUP882{width:298.515px;height:32px;top:679.002px;left:53px}
      #BUTTON_TEXT919{width:253px;top:9px;left:0}
      #BUTTON_TEXT919 > .ladi-headline{color:rgb(255,255,255);font-size:25px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON919{width:253.37px;height:49px;top:593.304px;left:81.5456px}
      #BUTTON919 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON919 > .ladi-button{border-radius:10px}
      #IMAGE925{width:191.288px;height:125px;top:619.736px;left:16.2306px}
      #IMAGE925 > .ladi-image > .ladi-image-background{width:191.288px;height:211.475px;top:-80.0693px;left:0;background-image:url('{!!$site['anh-so-44'] or ''!!}');anh-so-44;}
      #IMAGE928{width:191.288px;height:125px;top:750.42px;left:16.2306px}
      #IMAGE928 > .ladi-image > .ladi-image-background{width:191.288px;height:130.423px;top:-5.42343px;left:0;background-image:url('{!!$site['anh-so-45'] or ''!!}');anh-so-45;}
      #BOX9{width:19.6211px;height:18.8364px;top:0;left:0}
      #BOX9 > .ladi-box{border-style:solid;border-color:rgb(255,255,255);border-width:1px;border-radius:220px}
      #SHAPE10{width:10.5954px;height:10.5954px;top:4.12046px;left:4.51285px}
      #SHAPE10 svg:last-child{fill:rgb(255,255,255)}
      #BOX18{width:19.6211px;height:18.8364px;top:0;left:0}
      #BOX18 > .ladi-box{border-style:solid;border-color:rgb(255,255,255);border-width:1px;border-radius:220px}
      #SHAPE19{width:10.5954px;height:10.5954px;top:4.12046px;left:4.51285px}
      #SHAPE19 svg:last-child{fill:rgb(255,255,255)}
      #BOX13{width:19.6212px;height:18.8364px;top:0;left:0}
      #BOX13 > .ladi-box{border-style:solid;border-color:rgb(255,255,255);border-width:1px;border-radius:220px}
      #SHAPE14{width:10.5954px;height:10.5954px;top:4.12046px;left:4.51288px}
      #SHAPE14 svg:last-child{fill:rgb(255,255,255)}
      #GROUP351{width:19.6211px;height:18.8364px;top:3.0818px;left:0}
      #GROUP352{width:19.6211px;height:18.8364px;top:3.0818px;left:0}
      #GROUP354{width:19.6212px;height:18.8364px;top:3.0818px;left:0}
      #IMAGE933{width:385.174px;height:245.646px;top:12.6583px;left:17.2306px}
      #IMAGE933 > .ladi-image > .ladi-image-background{width:385.174px;height:245.646px;top:0;left:0;background-image:url('{!!$site['anh-so-46'] or ''!!}');anh-so-46;}
      #GROUP934{width:333px;height:252px;top:135.493px;left:38px}
      #GROUP935{width:343px;height:98px;top:397.493px;left:38px}
      #POPUP944{width:360px;height:303px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP944 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #GROUP945{width:360.5px;height:301px;top:0;left:0}
      #BOX946{width:360.5px;height:301px;top:0;left:0}
      #BOX946 > .ladi-box{box-shadow:0 5px 9px 0 rgba(59,59,59,0.29);-webkit-box-shadow:0 5px 9px 0 rgba(59,59,59,0.29);background-color:rgb(24,202,49);border-radius:20px}
      #IMAGE947{width:189.708px;height:98px;top:26px;left:85.396px}
      #IMAGE947 > .ladi-image > .ladi-image-background{width:189.708px;height:98.4199px;top:0;left:0;background-image:url('{!!$site['anh-so-47'] or ''!!}');anh-so-47;}
      #HEADLINE948{width:336px;top:142.5px;left:12.25px}
      #HEADLINE948 > .ladi-headline{color:rgb(255,255,255);font-size:30px;text-align:center;line-height:1}
      #PARAGRAPH949{width:291px;top:197px;left:34.75px}
      #PARAGRAPH949 > .ladi-paragraph{font-family:"Montserrat",sans-serif;color:rgb(255,255,255);font-size:14px;text-align:center;line-height:1.4}
      #FORM821{width:280.07px;height:172.5px;top:60.25px;left:5.8255px}
      #FORM821 > .ladi-form{color:rgb(132,132,132);font-size:14px;letter-spacing:0;line-height:1.6}
      #FORM821 .ladi-form-item .ladi-form-control::placeholder,#FORM821 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"]{color:rgba(132,132,132,1.0)}
      #FORM821 .ladi-form-item{padding-left:8px;padding-right:8px}
      #FORM821 .ladi-form-item.otp-countdown:before{right:13px}
      #FORM821 .ladi-form-item.ladi-form-checkbox{padding-left:13px;padding-right:13px}
      #FORM821 .ladi-form-item-container .ladi-form-item .ladi-form-control-select{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgb(132%2C%20132%2C%20132)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E")}
      #FORM821 .ladi-survey-option{text-align:left}
      #FORM821 .ladi-form-item-container,#FORM821 .ladi-form-label-container .ladi-form-label-item{border-color:rgb(10,103,233);border-width:1px;border-radius:0}
      #FORM821 .ladi-form-item-container .ladi-form-item.ladi-form-quantity{width:calc(100% + 1px)}
      #FORM821 .ladi-form-item-container .ladi-form-quantity .button{background-color:rgb(10,103,233)}
      #FORM821 .ladi-form-item-background{background-color:rgb(255,255,255)}
      #BUTTON822{width:279.279px;height:40px;top:132.5px;left:0}
      #BUTTON822 > .ladi-button > .ladi-button-background{background-color:rgb(24,204,49)}
      #BUTTON822 > .ladi-button{border-radius:0}
      #BUTTON_TEXT822{width:279px;top:9px;left:0}
      #BUTTON_TEXT822 > .ladi-headline{color:rgb(255,255,255);font-size:20px;font-weight:700;text-align:center;line-height:1.6}
      #FORM_ITEM824{width:279.573px;height:35px;top:0;left:0}
      #FORM_ITEM826{width:280px;height:35px;top:39.5px;left:.070157px}
      #HEADLINE830{width:295px;top:0;left:0}
      #HEADLINE830 > .ladi-headline{color:rgb(255,255,255);font-size:19px;font-weight:700;text-align:center;line-height:1.2;text-shadow:rgba(0,0,0,0.5) 0 1px 2px}
      #GROUP818{width:295px;height:232.75px;top:232.25px;left:24.413px}
      #IMAGE950{width:420px;height:294.762px;top:-12.678px;left:0}
      #IMAGE950 > .ladi-image > .ladi-image-background{width:643.603px;height:294.764px;top:0;left:-222.66px;background-image:url('{!!$site['anh-so-48'] or ''!!}');anh-so-48;}
      #IMAGE952{width:76.882px;height:76.882px;top:-2.916px;left:171.559px}
      #IMAGE952 > .ladi-image > .ladi-image-background{width:76.882px;height:76.882px;top:0;left:0;background-image:url('{!!$site['anh-so-49'] or ''!!}');anh-so-49;}
      #HEADLINE954{width:320px;top:315.746px;left:50px}
      #HEADLINE954 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,255,255);font-size:39px;font-weight:700;text-align:center;line-height:1.6}
      #HEADLINE955{width:385px;top:366.2px;left:17.5px}
      #HEADLINE955 > .ladi-headline{font-family:"Dancing Script",cursive;color:rgb(255,255,255);font-size:35px;font-weight:700;text-align:center;line-height:1.6}
      #LINE956{width:195px;top:427.2px;left:117.967px}
      #LINE956 > .ladi-line > .ladi-line-container{border-top:1px solid rgb(255,255,255);border-right:1px solid rgb(255,255,255);border-bottom:1px solid rgb(255,255,255);border-left:0!important}
      #LINE956 > .ladi-line{width:100%;padding:8px 0}
      #IMAGE963{width:191.288px;height:125px;top:358.368px;left:213.231px}
      #IMAGE963 > .ladi-image > .ladi-image-background{width:191.288px;height:143.466px;top:-18.4659px;left:0;background-image:url('{!!$site['anh-so-50'] or ''!!}');anh-so-50;}
      #IMAGE964{width:191.288px;height:125px;top:489.052px;left:213.231px}
      #IMAGE964 > .ladi-image > .ladi-image-background{width:191.288px;height:143.466px;top:-5.68182px;left:0;background-image:url('{!!$site['anh-so-51'] or ''!!}');anh-so-51;}
      #IMAGE966{width:371.799px;height:241.3px;top:0;left:13.356px}
      #IMAGE966 > .ladi-image > .ladi-image-background{width:371.799px;height:245.429px;top:0;left:0;background-image:url('{!!$site['anh-so-52'] or ''!!}');anh-so-52;}
      #SHAPE967{width:60px;height:60px;top:38.851px;left:87.7935px}
      #SHAPE967 svg:last-child{fill:rgba(0,0,0,0.5)}
      #VIDEO967{width:235.587px;height:137.702px;top:29.9159px;left:82.2065px}
      #VIDEO967 > .ladi-video > .ladi-video-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-53'] or ''!!}');anh-so-53;background-position:center center;background-repeat:no-repeat}
      #SECTION969{height:410.783px}
      #SECTION969 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE979{width:315px;top:622.474px;left:52.5px}
      #HEADLINE979 > .ladi-headline{color:rgb(0,0,0);font-size:20px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #IMAGE980{width:420px;height:195.301px;top:654.474px;left:0}
      #IMAGE980 > .ladi-image > .ladi-image-background{width:420px;height:195.301px;top:0;left:0;background-image:url('{!!$site['anh-so-54'] or ''!!}');anh-so-54;}
      #IMAGE980 > .ladi-image{border-radius:10px}
      #HEADLINE983{width:315px;top:327.08px;left:52.5px}
      #HEADLINE983 > .ladi-headline{color:rgb(0,0,0);font-size:20px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #IMAGE984{width:420px;height:231.394px;top:361.08px;left:0}
      #IMAGE984 > .ladi-image > .ladi-image-background{width:420px;height:231.394px;top:0;left:0;background-image:url('{!!$site['anh-so-55'] or ''!!}');anh-so-55;}
      #IMAGE984 > .ladi-image{border-radius:10px}
      #HEADLINE985{width:400px;top:933.026px;left:10px}
      #HEADLINE985 > .ladi-headline{color:rgb(0,0,0);font-size:20px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #BOX987{width:371px;height:410px;top:0;left:0}
      #BOX987 > .ladi-box{box-shadow:0 0 15px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.1);background-color:rgb(255,255,255);border-color:rgb(0,0,0);border-width:1px;border-radius:10px}
      #PARAGRAPH988{width:260px;top:191px;left:55.5px}
      #PARAGRAPH988 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:center;line-height:1.6}
      #PARAGRAPH989{width:247px;top:162px;left:62px}
      #PARAGRAPH989 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:center;line-height:1.6}
      #PARAGRAPH990{width:318px;top:231.001px;left:26.5px}
      #PARAGRAPH990 > .ladi-paragraph{font-family:"Quicksand",sans-serif;color:rgba(0,0,0,0.7);font-size:14px;text-align:justify;line-height:1.2}
      #BOX992{width:105px;height:105px;top:0;left:0}
      #BOX992 > .ladi-box{background-color:rgba(255,164,41,0.5);border-radius:1000px}
      #IMAGE993{width:90px;height:90px;top:7.5px;left:7.5px}
      #IMAGE993 > .ladi-image > .ladi-image-background{width:106px;height:106px;top:0;left:0;background-image:url('{!!$site['anh-so-56'] or ''!!}');anh-so-56;}
      #IMAGE993 > .ladi-image{box-shadow:inset 0 0 10px 0 #000;-webkit-box-shadow:inset 0 0 10px 0 #000;border-color:rgb(255,255,255);border-width:2px;border-radius:100px}
      #GROUP991{width:105px;height:105px;top:36.001px;left:133px}
      #BOX995{width:371px;height:395px;top:0;left:0}
      #BOX995 > .ladi-box{box-shadow:0 0 15px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.1);background-color:rgb(255,255,255);border-radius:10px}
      #PARAGRAPH996{width:228px;top:161px;left:71.5px}
      #PARAGRAPH996 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:center;line-height:1.6}
      #PARAGRAPH997{width:318px;top:230px;left:26.5px}
      #PARAGRAPH997 > .ladi-paragraph{font-family:"Quicksand",sans-serif;color:rgba(0,0,0,0.7);font-size:14px;text-align:justify;line-height:1.4}
      #PARAGRAPH998{width:260px;top:190px;left:55.5px}
      #PARAGRAPH998 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:center;line-height:1.6}
      #BOX1000{width:104px;height:104px;top:0;left:0}
      #BOX1000 > .ladi-box{background-color:rgba(213,1,1,0.5);border-radius:1000px}
      #IMAGE1001{width:90px;height:90px;top:7px;left:7px}
      #IMAGE1001 > .ladi-image > .ladi-image-background{width:90px;height:90px;top:0;left:0;background-image:url('{!!$site['anh-so-57'] or ''!!}');anh-so-57;}
      #IMAGE1001 > .ladi-image{box-shadow:inset 0 -15px 20px -20px #000;-webkit-box-shadow:inset 0 -15px 20px -20px #000;border-color:rgb(255,255,255);border-width:2px;border-radius:100px}
      #GROUP999{width:104px;height:104px;top:40.51px;left:133.5px}
      #BOX1003{width:371px;height:401px;top:0;left:0}
      #BOX1003 > .ladi-box{box-shadow:0 0 15px 0 rgba(0,0,0,0.1);-webkit-box-shadow:0 0 15px 0 rgba(0,0,0,0.1);background-color:rgb(255,255,255);border-radius:10px}
      #PARAGRAPH1004{width:228px;top:157px;left:71.5px}
      #PARAGRAPH1004 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:18px;font-weight:700;text-align:center;line-height:1.6}
      #PARAGRAPH1005{width:318px;top:226px;left:26.5px}
      #PARAGRAPH1005 > .ladi-paragraph{font-family:"Quicksand",sans-serif;color:rgba(0,0,0,0.7);font-size:14px;text-align:justify;line-height:1.2}
      #PARAGRAPH1006{width:260px;top:186px;left:55.5px}
      #PARAGRAPH1006 > .ladi-paragraph{font-family:"Dosis",sans-serif;color:rgb(0,0,0);font-size:14px;text-align:center;line-height:1.6}
      #BOX1008{width:104px;height:104px;top:0;left:0}
      #BOX1008 > .ladi-box{background-color:rgba(255,164,41,0.3);border-radius:1000px}
      #IMAGE1009{width:90px;height:90px;top:7px;left:7px}
      #IMAGE1009 > .ladi-image > .ladi-image-background{width:90px;height:90px;top:0;left:0;background-image:url('{!!$site['anh-so-58'] or ''!!}');anh-so-58;}
      #IMAGE1009 > .ladi-image{box-shadow:inset 0 -15px 20px -20px #000;-webkit-box-shadow:inset 0 -15px 20px -20px #000;border-color:rgb(255,255,255);border-width:2px;border-radius:100px}
      #GROUP1007{width:104px;height:104px;top:36px;left:133.5px}
      #BUTTON_TEXT1011{width:364px;top:11.4765px;left:0}
      #BUTTON_TEXT1011 > .ladi-headline{color:rgb(255,255,255);font-size:30px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1011{width:364px;height:60px;top:293.289px;left:0}
      #BUTTON1011 > .ladi-button > .ladi-button-background{background-color:rgb(24,203,49)}
      #BUTTON1011 > .ladi-button{box-shadow:0 2px 10px -5px #000;-webkit-box-shadow:0 2px 10px -5px #000;border-radius:5px}
      #FORM_ITEM1013{width:360px;height:50px;top:0;left:4.933px}
      #FORM_ITEM1015{width:360px;height:50px;top:57.1343px;left:4.933px}
      #FORM_ITEM1016{width:364px;height:50px;top:171.403px;left:2.933px}
      #FORM1010{width:366.933px;height:353.289px;top:111px;left:28px}
      #FORM1010 > .ladi-form{color:rgba(0,0,0,0.5);font-size:16px;text-align:center;line-height:1.6}
      #FORM1010 .ladi-form-item .ladi-form-control::placeholder,#FORM1010 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"]{color:rgba(0,0,0,0.5)}
      #FORM1010 .ladi-form-item-container .ladi-form-item .ladi-form-control-select{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgba(0%2C%200%2C%200%2C%200.5)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E")}
      #FORM1010 .ladi-form-item .ladi-form-control-select{text-align-last:center}
      #FORM1010 .ladi-survey-option{text-align:center}
      #FORM1010 .ladi-form-item-container,#FORM1010 .ladi-form-label-container .ladi-form-label-item{border-style:solid;border-color:rgb(238,238,238);border-width:0;border-radius:5px;box-shadow:0 2px 10px -5px #000;-webkit-box-shadow:0 2px 10px -5px #000}
      #FORM1010 .ladi-form-item-container .ladi-form-quantity .button{background-color:rgb(238,238,238)}
      #FORM1010 .ladi-form-item-background{background-color:rgb(255,255,255);border-radius:5px}
      #SECTION1017{height:559.324px}
      #SECTION1017 > .ladi-overlay{background-color:rgba(34,34,34,0.7)}
      #SECTION1017 > .ladi-section-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-59'] or ''!!}');anh-so-59;background-position:center top;background-repeat:repeat}
      #SECTION1017 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #HEADLINE1031{width:400px;top:53px;left:10px}
      #HEADLINE1031 > .ladi-headline{color:rgb(255,255,255);font-size:31px;font-weight:700;text-align:center;letter-spacing:0;line-height:1.4}
      #BUTTON_TEXT1052{width:157px;top:9px;left:0}
      #BUTTON_TEXT1052 > .ladi-headline{color:rgb(255,255,255);font-size:16px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1052{width:156.627px;height:37px;top:247.828px;left:137.431px}
      #BUTTON1052 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON1052 > .ladi-button{border-radius:10px}
      #BUTTON_TEXT1054{width:157px;top:9px;left:0}
      #BUTTON_TEXT1054 > .ladi-headline{color:rgb(255,255,255);font-size:16px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1054{width:156.627px;height:37px;top:866.775px;left:131.687px}
      #BUTTON1054 > .ladi-button > .ladi-button-background{background-color:rgb(255,61,1)}
      #BUTTON1054 > .ladi-button{border-radius:10px}
      #GROUP1056{width:371px;height:410px;top:974.026px;left:23px}
      #GROUP1057{width:371px;height:401px;top:1411.03px;left:23px}
      #GROUP1058{width:371px;height:395px;top:1840.03px;left:23px}
      #HEADLINE1071{width:348px;top:86px;left:35.4998px}
      #HEADLINE1071 > .ladi-headline{font-family:"Dosis",sans-serif;color:rgb(255,61,1);font-size:27px;font-weight:700;text-align:center;line-height:1.2}
      #IMAGE1059{width:395.654px;height:196.859px;top:4.04849px;left:5.17309px}
      #IMAGE1059 > .ladi-image > .ladi-image-background{width:397.246px;height:196.859px;top:0;left:0;background-image:url('{!!$site['anh-so-60'] or ''!!}');anh-so-60;}
      #SHAPE1072{width:92.9097px;height:7.1971px;top:166px;left:163.045px}
      #SHAPE1072 svg:last-child{fill:rgb(189,189,189)}
      #BOX1073{width:406px;height:204.956px;top:0;left:0}
      #BOX1073 > .ladi-box{box-shadow:0 0 20px -5px rgba(0,0,0,0.4);-webkit-box-shadow:0 0 20px -5px rgba(0,0,0,0.4);background-color:rgba(189,189,189,0.2)}
      #SHAPE1076{width:400px;height:105.529px;top:72.3px;left:0}
      #SHAPE1076 > .ladi-shape{transform:rotate(-13deg);-webkit-transform:rotate(-13deg)}
      #SHAPE1076 svg:last-child{fill:url(#SHAPE1076_desktop_gradient)}
      #HTML_CODE1084{width:347px;height:223px;top:494.5px;left:29.5px}
      #GROUP1112{width:406px;height:204.956px;top:186.827px;left:7px}
      #GROUP1113{width:400px;height:241.3px;top:0;left:15.7445px}
      #HEADLINE1116{width:349px;top:344.289px;left:35.5px}
      #HEADLINE1116 > .ladi-headline{color:rgb(255,255,255);font-size:16px;font-weight:700;text-align:center;line-height:1.6}
      #SECTION1222{height:766.5px}
      #SECTION1222 > .ladi-overlay{background-color:rgba(255,255,255,0.6)}
      #SECTION1222 > .ladi-section-background{background-size:cover;background-attachment:scroll;background-origin:content-box;background-image:url('{!!$site['anh-so-61'] or ''!!}');anh-so-61;background-position:left top;background-repeat:no-repeat}
      #SECTION1222 .ladi-section-arrow-down{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%205.58594L12.0002%2015.5859L22.0002%205.58594L23.4144%207.00015L12.0002%2018.4144L0.585938%207.00015L2.00015%205.58594Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #LINE1223{width:346px;top:717.5px;left:34px}
      #LINE1223 > .ladi-line > .ladi-line-container{border-top:1px solid rgba(7,58,145,0.2);border-right:1px solid rgba(7,58,145,0.2);border-bottom:1px solid rgba(7,58,145,0.2);border-left:0!important}
      #LINE1223 > .ladi-line{width:100%;padding:8px 0}
      #HEADLINE1225{width:339px;top:145px;left:33.5px}
      #HEADLINE1225 > .ladi-headline{color:rgb(5,31,77);font-size:18px;font-weight:700;text-align:left;line-height:1.4}
      #GROUP1229{width:325px;height:32.5933px;top:407.24px;left:33.5px}
      #SHAPE1230{width:22.5469px;height:32.5933px;top:0;left:0}
      #SHAPE1230 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1231{width:292px;top:6.00902px;left:33px}
      #HEADLINE1231 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1232{width:325px;height:32.5933px;top:364.524px;left:33.5px}
      #SHAPE1233{width:22.5469px;height:32.5933px;top:0;left:0}
      #SHAPE1233 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1234{width:292px;top:6.67288px;left:33px}
      #HEADLINE1234 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1235{width:343px;height:46px;top:206.156px;left:33.5px}
      #SHAPE1236{width:22.5469px;height:32.5933px;top:0;left:0}
      #SHAPE1236 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1237{width:310px;top:7px;left:33px}
      #HEADLINE1237 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #BOX1264{width:60px;height:60px;top:0;left:0}
      #BOX1264 > .ladi-box{box-shadow:0 0 10px -5px #000;-webkit-box-shadow:0 0 10px -5px #000;background-color:rgb(255,255,255);border-radius:1000px}
      #IMAGE1265{width:42px;height:40px;top:9.779px;left:10.375px}
      #IMAGE1265 > .ladi-image > .ladi-image-background{width:42px;height:40.443px;top:0;left:0;background-image:url('{!!$site['anh-so-62'] or ''!!}');anh-so-62;}
      #GROUP1266{width:60px;height:60px;top:auto;left:auto;right:20px;bottom:20px;position:fixed;z-index:90000050}
      #GROUP1266.ladi-animation > .ladi-group{animation-name:tada;-webkit-animation-name:tada;animation-delay:3s;-webkit-animation-delay:3s;animation-duration:1s;-webkit-animation-duration:1s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}
      #BOX1268{width:60px;height:60px;top:0;left:0}
      #BOX1268 > .ladi-box{box-shadow:0 0 10px -5px #000;-webkit-box-shadow:0 0 10px -5px #000;background-color:rgb(255,255,255);border-radius:1000px}
      #SHAPE1270{width:38.4153px;height:51.732px;top:4.134px;left:11px}
      #SHAPE1270 svg:last-child{fill:rgb(255,15,1)}
      #GROUP1271{width:60px;height:60px;top:auto;left:20px;right:auto;bottom:20px;position:fixed;z-index:90000050}
      #GROUP1271.ladi-animation > .ladi-group{animation-name:tada;-webkit-animation-name:tada;animation-delay:3s;-webkit-animation-delay:3s;animation-duration:1s;-webkit-animation-duration:1s;animation-iteration-count:infinite;-webkit-animation-iteration-count:infinite}
      #IMAGE1272{width:277.108px;height:176.389px;top:37px;left:33.359px}
      #IMAGE1272 > .ladi-image > .ladi-image-background{width:277.108px;height:215.09px;top:-38.7001px;left:0;background-image:url('{!!$site['anh-so-63'] or ''!!}');anh-so-63;}
      #IMAGE1272 > .ladi-image{box-shadow:0 0 15px -10px #000;-webkit-box-shadow:0 0 15px -10px #000;border-radius:0}
      #GROUP1273{width:133.596px;height:25px;top:488.246px;left:56.1432px}
      #GROUP1274{width:184.175px;height:25px;top:521.612px;left:56.1432px}
      #GROUP1275{width:131.43px;height:25px;top:556.591px;left:56.1432px}
      #FORM_ITEM1321{width:280px;height:35px;top:80px;left:.070157px}
      #FORM_ITEM1323{width:364px;height:50px;top:114.269px;left:2.933px}
      #BUTTON_TEXT1327{width:279px;top:9px;left:0}
      #BUTTON_TEXT1327 > .ladi-headline{color:rgb(255,255,255);font-size:20px;font-weight:700;text-align:center;line-height:1.6}
      #BUTTON1327{width:279.279px;height:40px;top:132.5px;left:0}
      #BUTTON1327 > .ladi-button > .ladi-button-background{background-color:rgb(24,204,49)}
      #BUTTON1327 > .ladi-button{border-radius:0}
      #FORM_ITEM1329{width:279.573px;height:35px;top:0;left:0}
      #FORM_ITEM1330{width:280px;height:35px;top:39.5px;left:.070157px}
      #FORM_ITEM1331{width:280px;height:35px;top:80px;left:.070157px}
      #FORM1326{width:280.07px;height:172.5px;top:60.25px;left:5.8255px}
      #FORM1326 > .ladi-form{color:rgb(132,132,132);font-size:14px;letter-spacing:0;line-height:1.6}
      #FORM1326 .ladi-form-item .ladi-form-control::placeholder,#FORM1326 .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span[data-checked="false"]{color:rgba(132,132,132,1.0)}
      #FORM1326 .ladi-form-item{padding-left:8px;padding-right:8px}
      #FORM1326 .ladi-form-item.otp-countdown:before{right:13px}
      #FORM1326 .ladi-form-item.ladi-form-checkbox{padding-left:13px;padding-right:13px}
      #FORM1326 .ladi-form-item-container .ladi-form-item .ladi-form-control-select{background-image:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%20width%3D%2232%22%20height%3D%2224%22%20viewBox%3D%220%200%2032%2024%22%3E%3Cpolygon%20points%3D%220%2C0%2032%2C0%2016%2C24%22%20style%3D%22fill%3A%20rgb(132%2C%20132%2C%20132)%22%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E")}
      #FORM1326 .ladi-survey-option{text-align:left}
      #FORM1326 .ladi-form-item-container,#FORM1326 .ladi-form-label-container .ladi-form-label-item{border-color:rgb(10,103,233);border-width:1px;border-radius:0}
      #FORM1326 .ladi-form-item-container .ladi-form-item.ladi-form-quantity{width:calc(100% + 1px)}
      #FORM1326 .ladi-form-item-container .ladi-form-quantity .button{background-color:rgb(10,103,233)}
      #FORM1326 .ladi-form-item-background{background-color:rgb(255,255,255)}
      #HEADLINE1332{width:295px;top:0;left:0}
      #HEADLINE1332 > .ladi-headline{color:rgb(255,255,255);font-size:19px;font-weight:700;text-align:center;line-height:1.2;text-shadow:rgba(0,0,0,0.5) 0 1px 2px}
      #GROUP1325{width:295px;height:232.75px;top:232.25px;left:24.413px}
      #IMAGE1333{width:277.108px;height:176.389px;top:37px;left:33.359px}
      #IMAGE1333 > .ladi-image > .ladi-image-background{width:277.108px;height:215.09px;top:-38.7001px;left:0;background-image:url('{!!$site['anh-so-64'] or ''!!}');anh-so-64;}
      #IMAGE1333 > .ladi-image{box-shadow:0 0 15px -10px #000;-webkit-box-shadow:0 0 15px -10px #000;border-radius:0}
      #POPUP1324{width:349px;height:494px;top:0;left:0;right:0;bottom:0;margin:auto}
      #POPUP1324 > .ladi-popup > .ladi-overlay{border-radius:10px}
      #POPUP1324 > .ladi-popup > .ladi-popup-background{background:#dce35b;background:-webkit-linear-gradient(180deg,#dce35b,#45b649);background:linear-gradient(180deg,#dce35b,#45b649);border-radius:10px}
      #POPUP1324 > .ladi-popup{border-radius:10px}
      #POPUP1324 .popup-close{background-image:url("data:image/svg+xml;utf8,%3Csvg%20width%3D%2224%22%20height%3D%2224%22%20viewBox%3D%220%200%2024%2024%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20fill%3D%22%23fff%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M23.4144%202.00015L2.00015%2023.4144L0.585938%2022.0002L22.0002%200.585938L23.4144%202.00015Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M2.00015%200.585938L23.4144%2022.0002L22.0002%2023.4144L0.585938%202.00015L2.00015%200.585938Z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")}
      #SHAPE1335{width:22.5469px;height:22.5469px;top:0;left:0}
      #SHAPE1335 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1336{width:308px;top:2px;left:33px}
      #HEADLINE1336 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1334{width:341px;height:41px;top:262.279px;left:34px}
      #SHAPE1338{width:25.1226px;height:22.5469px;top:0;left:0}
      #SHAPE1338 svg:last-child{fill:rgb(5,31,77)}
      #HEADLINE1339{width:314px;top:2px;left:36.7699px}
      #HEADLINE1339 > .ladi-headline{color:rgb(5,31,77);font-size:14px;text-align:left;line-height:1.4}
      #GROUP1337{width:350.77px;height:41px;top:313.401px;left:34px}
  }
</style>
<style id="style_lazyload" type="text/css">.ladi-section-background,.ladi-image-background,.ladi-button-background,.ladi-headline,.ladi-video-background,.ladi-countdown-background,.ladi-box,.ladi-frame-background,.ladi-tabs-background,.ladi-survey-option-background,.ladi-survey-option-image,.ladi-banner,.ladi-form-item-background,.ladi-gallery-view-item,.ladi-gallery-control-item,.ladi-spin-lucky-screen,.ladi-spin-lucky-start,.ladi-form-label-container .ladi-form-label-item.image,.ladi-list-paragraph ul li:before{background-image:none!important}</style>
</head>
<body>
  <div class="ladi-wraper">
    <div id="SECTION3" class='ladi-section'>
      <div class='ladi-section-background'></div>
      <div class="ladi-overlay"></div>
      <div class="ladi-container">
        <div  id="IMAGE950" class='ladi-element'>
          <div class='ladi-image'>
            <div class="ladi-image-background"></div>
        </div>
    </div>
    <div id="LINE870" class='ladi-element'>
      <div class='ladi-line'>
        <div class="ladi-line-container"></div>
    </div>
</div>
<div data-action="true" id="BUTTON739" class='ladi-element'>
  <div class='ladi-button'>
    <div class="ladi-button-background"></div>
    <div  id="BUTTON_TEXT739" class='ladi-element ladi-button-headline'>
      <p class='ladi-headline tieu-de-so-65'>{!!$site['tieu-de-so-65'] or ''!!}</p>
  </div>
</div>
</div>
<div  id="HEADLINE954" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-66'>{!!$site['tieu-de-so-66'] or ''!!}</h3>
</div>
<div  id="HEADLINE955" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-67'>{!!$site['tieu-de-so-67'] or ''!!}</h3>
</div>
<div id="LINE956" class='ladi-element'>
  <div class='ladi-line'>
    <div class="ladi-line-container"></div>
</div>
</div>
<div  id="HEADLINE556" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-68'>{!!$site['tieu-de-so-68'] or ''!!}<br></h1>
</div>
<div  id="HEADLINE558" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-69'>{!!$site['tieu-de-so-69'] or ''!!}<br></h1>
</div>
<div  id="HEADLINE559" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-70'>{!!$site['tieu-de-so-70'] or ''!!}<br></h1>
</div>
<div  id="IMAGE952" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div  id="GROUP1273" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="GROUP351" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX9" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="SHAPE10" class='ladi-element'>
          <div class='ladi-shape'>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 96" enable-background="new 0 0 100 96" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgba(255,255,255,1)">
              <path d="M62,24h38c0,0-17-24-40-24S20,24,20,24h38v48H23.708L2.684,61.5L0,66.867l20,9.988V96h6V78h32v18h4V78h32v18h6V78v-6H62V24z
              "></path>
          </svg>
      </div>
  </div>
</div>
</div>
<div  id="HEADLINE11" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-71'>{!!$site['tieu-de-so-71'] or ''!!}</h1>
</div>
</div>
</div>
<div  id="GROUP1274" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="GROUP354" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX13" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="SHAPE14" class='ladi-element'>
          <div class='ladi-shape'>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgba(255,255,255,1)">
              <g>
                <path d="M93.919,18.204c2.277-5.531,0.529-8.918-1.339-10.786c-1.606-1.605-3.584-2.419-5.88-2.419   c-5.957,0-12.464,5.617-15.811,8.967l-5.988,5.987L19.847,10.3c-0.48-0.102-0.981,0.046-1.329,0.395l-6.548,6.545   c-0.341,0.343-0.491,0.832-0.396,1.308c0.094,0.477,0.418,0.872,0.865,1.059l37.566,15.653   c-7.848,8.443-17.228,19.251-21.731,27.134l-14.992-2.998c-0.475-0.095-0.967,0.054-1.312,0.396l-6.545,6.548   c-0.355,0.354-0.502,0.87-0.387,1.359s0.477,0.885,0.954,1.043l18.95,6.316l6.316,18.95c0.158,0.478,0.553,0.839,1.043,0.954   C32.412,94.988,32.524,95,32.636,95c0.381,0,0.751-0.148,1.025-0.425l6.547-6.546c0.343-0.343,0.492-0.835,0.396-1.311   l-2.998-14.993c7.876-4.499,18.686-13.883,27.133-21.735l15.654,37.57c0.187,0.447,0.582,0.771,1.059,0.865   c0.094,0.019,0.188,0.028,0.282,0.028c0.38,0,0.75-0.15,1.025-0.425l6.545-6.548c0.35-0.348,0.497-0.848,0.395-1.329l-9.655-45.054   l5.989-5.989C88.666,26.479,92.171,22.451,93.919,18.204z M15.556,17.76l4.456-4.455l42.443,9.095l-1.387,1.387   c-1.889,1.886-5.146,5.186-8.943,9.211L15.556,17.76z M86.694,79.987l-4.455,4.456L67.002,47.872   c4.024-3.797,7.324-7.053,9.211-8.941l1.387-1.387L86.694,79.987z M74.161,36.877C68.11,42.93,47.431,63.179,35.289,69.69   c-0.563,0.303-0.863,0.938-0.737,1.563l3.055,15.271l-4.337,4.337L27.467,73.45c-0.145-0.432-0.485-0.772-0.918-0.917L9.138,66.73   l4.337-4.338l15.271,3.055c0.634,0.127,1.261-0.175,1.563-0.737c6.522-12.159,26.763-32.827,32.813-38.872l9.819-9.819   C78.099,10.86,83.113,7.902,86.7,7.902c1.52,0,2.771,0.513,3.827,1.568c1.834,1.834,2.064,4.329,0.707,7.628   c-1.238,3.009-3.747,6.452-7.254,9.959L74.161,36.877z"></path>
            </g>
        </svg>
    </div>
</div>
</div>
</div>
<div  id="HEADLINE15" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-72'>{!!$site['tieu-de-so-72'] or ''!!}<br></h1>
</div>
</div>
</div>
<div  id="GROUP1275" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="GROUP352" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX18" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="SHAPE19" class='ladi-element'>
          <div class='ladi-shape'>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" preserveAspectRatio="none" width="100%" height="100%" class="" fill="rgba(255,255,255,1)">
              <g>
                <path d="M38.088,44.227l8.521,9.155l3.808-3.81l-9.128-8.479c2.49-3.969,1.679-9.599-1.884-13.174   c-1.123-1.127-16.256-13.053-16.256-13.053l-1.21,1.21c0,0,12.873,11.999,12.881,12.007c0.562,0.562,0.663,1.535,0.102,2.097   c-0.562,0.561-1.659,0.333-2.222-0.229C32.695,29.947,20.06,17.954,20.06,17.954l-1.201,1.201c0,0,12.005,12.867,12.013,12.875   c0.561,0.562,0.674,1.524,0.113,2.085c-0.562,0.562-1.562,0.412-2.125-0.15c-0.003-0.003-12.627-12.184-12.627-12.184l-1.18,1.18   c0,0,11.864,13.008,11.873,13.016c0.561,0.561,0.776,1.421,0.214,1.983c-0.561,0.561-1.547,0.221-2.109-0.342   c-0.003-0.003-11.819-12.817-11.819-12.817l-1.189,1.189c0,0,11.844,15.178,12.96,16.283   C28.543,45.802,34.128,46.664,38.088,44.227z"></path>
                <path d="M56.666,53.211C56.733,53.182,56.809,53,56.896,53h0.207l0.187,0.326c1.03,1.031,2.308,1.657,3.693,1.657   c1.521,0,3.049-0.615,4.304-1.804c0.012-0.015,0.822-0.871,18.668-20.179c3.293-3.294,4-7.081,4.022-9.695   c0.026-3.209-0.94-5.514-1.464-6.038c-0.349-0.349-0.679-0.516-1.007-0.516c-0.684,0-1.47,0.696-2.379,1.5l-0.495,0.533   l-60.179,60.18l5.446,5.446L56.565,53.26L56.666,53.211z"></path>
                <polygon points="52.241,59.436 76.158,85.134 82.199,79.093 56.293,55.032  "></polygon>
            </g>
        </svg>
    </div>
</div>
</div>
</div>
<div  id="HEADLINE17" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-73'>{!!$site['tieu-de-so-73'] or ''!!}<br></h1>
</div>
</div>
</div>
</div>
</div>
<div id="SECTION24" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-container">
    <div  id="HEADLINE27" class='ladi-element'>
      <h1 class='ladi-headline tieu-de-so-74'>{!!$site['tieu-de-so-74'] or ''!!}</h1>
  </div>
  <div  id="PARAGRAPH28" class='ladi-element'>
      <div class='ladi-paragraph  doan-so-75'>{!!$site['doan-so-75'] or ''!!}</div>
  </div>
  <div id="LINE29" class='ladi-element'>
      <div class='ladi-line'>
        <div class="ladi-line-container"></div>
    </div>
</div>
<div data-action="true" id="BUTTON919" class='ladi-element'>
  <div class='ladi-button'>
    <div class="ladi-button-background"></div>
    <div  id="BUTTON_TEXT919" class='ladi-element ladi-button-headline'>
      <p class='ladi-headline tieu-de-so-76'>{!!$site['tieu-de-so-76'] or ''!!}</p>
  </div>
</div>
</div>
<div  id="IMAGE933" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
</div>
</div>
<div id="SECTION191" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-container">
    <div  id="BOX195" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="BOX196" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="BOX198" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="BOX200" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="BOX197" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div id="LINE192" class='ladi-element'>
      <div class='ladi-line'>
        <div class="ladi-line-container"></div>
    </div>
</div>
<div  id="HEADLINE193" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-77'>{!!$site['tieu-de-so-77'] or ''!!}</h1>
</div>
<div  id="BOX742" class='ladi-element'>
  <div class='ladi-box'></div>
</div>
<div  id="BOX743" class='ladi-element'>
  <div class='ladi-box'></div>
</div>
<div  id="BOX745" class='ladi-element'>
  <div class='ladi-box'></div>
</div>
<div  id="IMAGE925" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div  id="IMAGE928" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div  id="IMAGE963" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div  id="IMAGE964" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
</div>
</div>
<div id="SECTION126" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-overlay"></div>
  <div class="ladi-container">
    <div  id="BOX370" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="HEADLINE371" class='ladi-element'>
      <h3 class='ladi-headline tieu-de-so-78'>{!!$site['tieu-de-so-78'] or ''!!}<br></h3>
  </div>
  <div  id="GROUP664" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="SHAPE662" class='ladi-element'>
          <div class='ladi-shape'>
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 416.07 97.96" class="" fill="url(&quot;#SHAPE662_desktop_gradient&quot;)">
              <defs id="SHAPE662_defs">
                <linearGradient id="SHAPE662_desktop_gradient" gradientTransform="rotate(0)">
                  <stop offset="0%" stop-color="#ffe259"></stop>
                  <stop offset="100%" stop-color="#ffa751"></stop>
              </linearGradient>
          </defs>
          <path d="M415.93,69.33c-8.52,0-18.6.57-28,.57,0-1,2.1-2.42,2.87-3,1.16-.85,3.13-.63,4.56-3.17.44-.77-1.24-1.84,0-3.23.74-.84,2-1,2.56-1.48.74-.61,7.84-4.58,2-4.58.39-2.15,7.7-1,7.44-3-.08-.65-19.25-1-21.17-1,0-2.35,5.1,0,5.72-1.14.83-1.52-7.66-1.12-8.57-1.91.82-2.44.88.25-.62-2.46,5.08-4.78,11.85-2.2,17.75-5.61-1.82-1.61-8.17.68-10.5.82-4.22.26-13.52,1.43-16.36-1.42,1.42-1.48,9.88-.82,10.19-1.63.73-1.91-10.36.43-10.77-2.1.89.27,1.44-1.74.81-2.28.77.66-4.6,0-4.25-1.15.93.41,1.5.22,1.74-.56,0-1.2-6.2-1.73-6.89-1.73,0-3,12.9-4.62,14.82-4.87,3.53-.44,8.16-1.21,11.51-1.42,1.6-.11,4-.51,5.15-.58,2.11-.12,4,.2,5.79-.45,1-.36-.2-1.26-.64-1.26,0-.68,4.94-3.21,5.72-3.44,2.43-.7,6.7.53,8.51-1.39-1-1.1-10.83-.83-12.38-.9-4.3-.19-8.14-.07-12.08-.57-7.41-.94-14.46-1.16-21.82-2.29-12.21-1.87-24.64-4.48-37.49-5.72C317,5,302,3.93,287.31,3.09,271,2.15,253.49.31,236.68.09,213-.23,190.44.39,167.56.66c-14.71.17-31.73-.19-46.35,1.71-28,3.65-57.48,3-85.56,8-4.31.77-27.23,6.23-18.34,12,1.34.87,4,.65,4.9,1.43.68.58,2.71,4.31,2.58,5.43-.21,1.85,1,.89-.67,2.87-.43.52-3.82-.58-4.2,0-1.48,2.29,4.52,1.15,5.72,1.15,0,2.69-5.88.59-6.78,2.49-.11.25,13-1.16,11.72,2.43-.73,2.1-6-1.26-7.13,1-.17.34,5.7,1.1,6.2,1-.07.43-10.8,1.15-12,1.15-.25.82,1.77,1.47,2.3,1.91-.3,3.19-8.21-1.11-5.61,3.81,1.79,3.38,6,1.51,8.46,3.16-1.94,2.67-1.87.74-1.49,4.28.18,1.64,3.44.37.55,2.87-1.38,1.19-7.46,1.19-9.65,1.14-3.48-.08-7.22-1-10,.84a12.6,12.6,0,0,0-2,2c-.34.67-.23,4,.57,4.58,1.1.85,3.37-.19,4.29.57,2.25,1.84-.16,3.44.88,5.15.55.89,3.59,3.73,4.27,4.58.52.64,1.88,1.87,2.6,2.91,1,1.43.62,2.44,1.89,3.56,2.24,2,5.66,2.22,8.12,4.14,1.86,1.45,2.29,2.41,4.5,4,2.76,1.95-.82,2,4.43,2.48,0,0,.82-1.06,1-1,2.33.2,13.82,2.29,13.57,2.56.65.87,2.27.06,2.27-.85,2.81,0,5.37,1.4,8.29,1.72,1.28.14,2.28-.36,4,.58.81-.92,5.69.54,7.11.56,2.77,0,20.54.82,20,.85,2.29-.15,10.53-1,11.12.31,1.52-1.44,11.37-1.44,13.78-1.73,3.7-.45,7.47-.13,10.3-.58,5-.77,9.58,0,13.73.58,2.6.33,143.42-.78,168.09-1.72,10.88-.42,25.81,0,36.28,0,3.54,0,34,1.06,34,0,0-.48-7.66-1.17-8.11-1.15a24.85,24.85,0,0,1-5.85.09,51.74,51.74,0,0,0-7.23-.37,35.42,35.42,0,0,1-4.83.29,26.57,26.57,0,0,1-2.8-1.06c-1-.21-1.16,1.34-2.1,1.06a.9.9,0,0,0-.57-1.15c.43-2.17,24.68-.6,26.33-.57,1.29,0,2.64-.5,4.22-.5a66.55,66.55,0,0,1,6.67.2,164.81,164.81,0,0,0,18.55-.27c1,0,19.52-4.74,16-7.44h-4.28C411.35,82.05,416.34,69.33,415.93,69.33Z"></path>
      </svg>
  </div>
</div>
<div id="COUNTDOWN322" class='ladi-element'>
  <div class='ladi-countdown'>
    <div id="COUNTDOWN_ITEM89" class='ladi-element'>
      <div class="ladi-countdown-background"></div>
      <div class='ladi-countdown-text'><span>00</span></div>
  </div>
  <div id="COUNTDOWN_ITEM90" class='ladi-element'>
      <div class="ladi-countdown-background"></div>
      <div class='ladi-countdown-text'><span>00</span></div>
  </div>
  <div id="COUNTDOWN_ITEM91" class='ladi-element'>
      <div class="ladi-countdown-background"></div>
      <div class='ladi-countdown-text'><span>00</span></div>
  </div>
  <div id="COUNTDOWN_ITEM92" class='ladi-element'>
      <div class="ladi-countdown-background"></div>
      <div class='ladi-countdown-text'><span>00</span></div>
  </div>
</div>
</div>
<div  id="HEADLINE323" class='ladi-element'>
  <h1 class='ladi-headline'>ngày</h1>
</div>
<div  id="HEADLINE324" class='ladi-element'>
  <h1 class='ladi-headline'>giờ</h1>
</div>
<div  id="HEADLINE325" class='ladi-element'>
  <h1 class='ladi-headline'>phút</h1>
</div>
<div  id="HEADLINE326" class='ladi-element'>
  <h1 class='ladi-headline'>giây</h1>
</div>
<div  id="HEADLINE311" class='ladi-element'>
  <h1 class='ladi-headline tieu-de-so-79'>{!!$site['tieu-de-so-79'] or ''!!}</h1>
</div>
</div>
</div>
<div  id="GROUP935" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="HEADLINE374" class='ladi-element'>
      <h3 class='ladi-headline tieu-de-so-80'>{!!$site['tieu-de-so-80'] or ''!!}</h3>
  </div>
  <div  id="PARAGRAPH375" class='ladi-element'>
      <div class='ladi-paragraph doan-so-81'>{!!$site['doan-so-81'] or ''!!}<br></div>
  </div>
</div>
</div>
<div  id="GROUP934" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="HEADLINE372" class='ladi-element'>
      <h3 class='ladi-headline tieu-de-so-82'>{!!$site['tieu-de-so-82'] or ''!!}<br></h3>
  </div>
  <div  id="PARAGRAPH373" class='ladi-element'>
      <div class='ladi-paragraph doan-so-83'>{!!$site['doan-so-83'] or ''!!}</div>
  </div>
</div>
</div>
<div  id="BOX561" class='ladi-element'>
  <div class='ladi-box'></div>
</div>
<div  id="GROUP578" class='ladi-element'>
  <div class='ladi-group'>
    <div data-action="true" id="BUTTON387" class='ladi-element'>
      <div class='ladi-button'>
        <div class="ladi-button-background"></div>
        <div  id="BUTTON_TEXT387" class='ladi-element ladi-button-headline'>
          <p class='ladi-headline tieu-de-so-84'>{!!$site['tieu-de-so-84'] or ''!!}</p>
      </div>
  </div>
</div>
<div  id="PARAGRAPH388" class='ladi-element'>
  <div class='ladi-paragraph tieu-de-so-85'>{!!$site['tieu-de-so-85'] or ''!!}<br></div>
</div>
<div  id="PARAGRAPH567" class='ladi-element'>
  <div class='ladi-paragraph tieu-de-so-86'>{!!$site['tieu-de-so-86'] or ''!!}<br></div>
</div>
</div>
</div>
<div  id="PARAGRAPH376" class='ladi-element'>
  <div class='ladi-paragraph tieu-de-so-87'>{!!$site['tieu-de-so-87'] or ''!!}<br></div>
</div>
<div  id="GROUP880" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="GROUP409" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX402" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="BOX403" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
  </div>
</div>
<div  id="PARAGRAPH676" class='ladi-element'>
  <div class='ladi-paragraph tieu-de-so-88'>{!!$site['tieu-de-so-88'] or ''!!}<br></div>
</div>
</div>
</div>
<div  id="GROUP882" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="GROUP413" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX414" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="BOX415" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
  </div>
</div>
<div  id="PARAGRAPH677" class='ladi-element'>
  <div class='ladi-paragraph tieu-de-so-89'>{!!$site['tieu-de-so-89'] or ''!!}<br></div>
</div>
</div>
</div>
<div  id="GROUP879" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="PARAGRAPH673" class='ladi-element'>
      <div class='ladi-paragraph tieu-de-so-90'>{!!$site['tieu-de-so-90'] or ''!!}<br></div>
  </div>
  <div  id="GROUP872" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX873" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="BOX874" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div id="SECTION969" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-container">
    <div  id="HEADLINE418" class='ladi-element'>
      <h3 class='ladi-headline'>{!!$site['tieu-de-so-123'] or ''!!}<br></h3>
  </div>
  <div  id="GROUP1112" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX1073" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="IMAGE1059" class='ladi-element'>
          <div class='ladi-image'>
            <div class="ladi-image-background"></div>
        </div>
    </div>
</div>
</div>
<div  id="HEADLINE1071" class='ladi-element'>
  <h3 class='ladi-headline'>{!!$site['tieu-de-so-124'] or ''!!}<br></h3>
</div>
<div  id="SHAPE1072" class='ladi-element'>
  <div class='ladi-shape'>
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 431.56 33.43" class="" fill="rgba(189, 189, 189, 1.0)">
      <path d="M429.72,8.47C295.35-11.42,4.92,9.92,2,10.14a2.17,2.17,0,0,0,.32,4.32c.4,0,6-.45,15.76-1.09C73.81,9.69,265-1.57,387.89,8.23,313.1,8.08,156,8.84,76.64,17.32c-7.46.8-14.29,1.66-20.24,2.6a2.17,2.17,0,0,0-1.82,2.36,2.11,2.11,0,0,0,2.27,1.94c.85,0,32.67-1.71,75.76-3.12,53.15-1.75,123.45-3.13,174-.65-39.73,0-96.34.52-135.93,3.21-19,1.29-34.1,3.08-41.5,5.55a2.17,2.17,0,0,0,.68,4.22l.26,0c.72-.09,73.16-8.67,133.94-1.28a2.17,2.17,0,0,0,.52-4.3c-9.35-1.14-19-1.9-28.59-2.37,57.57-1.17,116.4-.41,117.46-.39a2.13,2.13,0,0,0,2.19-1.95,2.17,2.17,0,0,0-1.75-2.34c-35.58-6.8-115.86-6.7-184-5.07,114.45-4.37,257.5-3,259.51-2.94h0a2.16,2.16,0,0,0,.32-4.3Z"></path>
  </svg>
</div>
</div>
</div>
</div>
<div id="SECTION417" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-container">
    <div  id="HEADLINE979" class='ladi-element'>
      <h3 class='ladi-headline tieu-de-so-91'>{!!$site['tieu-de-so-91'] or ''!!}<br></h3>
  </div>
  <div  id="IMAGE980" class='ladi-element'>
      <div class='ladi-image'>
        <div class="ladi-image-background"></div>
    </div>
</div>
<div  id="HEADLINE983" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-92'>{!!$site['tieu-de-so-92'] or ''!!}<br></h3>
</div>
<div  id="IMAGE984" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div  id="HEADLINE985" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-93'>{!!$site['tieu-de-so-93'] or ''!!}<br></h3>
</div>
<div data-action="true" id="BUTTON1052" class='ladi-element'>
  <div class='ladi-button'>
    <div class="ladi-button-background"></div>
    <div  id="BUTTON_TEXT1052" class='ladi-element ladi-button-headline'>
      <p class='ladi-headline tieu-de-so-94'>{!!$site['tieu-de-so-94'] or ''!!}</p>
  </div>
</div>
</div>
<div data-action="true" id="BUTTON1054" class='ladi-element'>
  <div class='ladi-button'>
    <div class="ladi-button-background"></div>
    <div  id="BUTTON_TEXT1054" class='ladi-element ladi-button-headline'>
      <p class='ladi-headline tieu-de-so-95'>{!!$site['tieu-de-so-95'] or ''!!}</p>
  </div>
</div>
</div>
<div  id="GROUP1056" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX987" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="PARAGRAPH988" class='ladi-element'>
      <div class='ladi-paragraph tieu-de-so-96'>{!!$site['tieu-de-so-96'] or ''!!} <br></div>
  </div>
  <div  id="PARAGRAPH989" class='ladi-element'>
      <div class='ladi-paragraph tieu-de-so-97'>{!!$site['tieu-de-so-97'] or ''!!}<br></div>
  </div>
  <div  id="PARAGRAPH990" class='ladi-element'>
      <div class='ladi-paragraph'>{!!$site['mo-ta-so-98'] or ''!!}<br></div>
  </div>
  <div  id="GROUP991" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX992" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="IMAGE993" class='ladi-element'>
          <div class='ladi-image'>
            <div class="ladi-image-background"></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<div  id="GROUP1057" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX1003" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="PARAGRAPH1004" class='ladi-element'>
      <div class='ladi-paragraph tieu-de-so-99'>{!!$site['tieu-de-so-99'] or ''!!}<br></div>
  </div>
  <div  id="PARAGRAPH1005" class='ladi-element'>
      <div class='ladi-paragraph'>{!!$site['mo-ta-so-100'] or ''!!}
        <br>
    </div>
</div>
<div  id="PARAGRAPH1006" class='ladi-element'>
  <div class='ladi-paragraph tieu-de-so-101'>{!!$site['tieu-de-so-101'] or ''!!}<br></div>
</div>
<div  id="GROUP1007" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX1008" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="IMAGE1009" class='ladi-element'>
      <div class='ladi-image'>
        <div class="ladi-image-background"></div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div  id="GROUP1058" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX995" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="PARAGRAPH996" class='ladi-element'>
      <div class='ladi-paragraph tieu-de-so-102'>{!!$site['tieu-de-so-102'] or ''!!}<br></div>
  </div>
  <div  id="PARAGRAPH997" class='ladi-element'>
      <div class='ladi-paragraph'>{!!$site['mo-ta-so-103'] or ''!!}<br></div>
  </div>
  <div  id="PARAGRAPH998" class='ladi-element'>
      <div class='ladi-paragraph tieu-de-so-104'>{!!$site['tieu-de-so-104'] or ''!!}
        <br>
    </div>
</div>
<div  id="GROUP999" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX1000" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="IMAGE1001" class='ladi-element'>
      <div class='ladi-image'>
        <div class="ladi-image-background"></div>
    </div>
</div>
</div>
</div>
</div>
</div>
<div  id="GROUP1113" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="SHAPE1076" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 416.07 97.96" class="" fill="url(&quot;#SHAPE1076_desktop_gradient&quot;)">
          <defs id="SHAPE1076_defs">
            <linearGradient id="SHAPE1076_desktop_gradient" gradientTransform="rotate(90)">
              <stop offset="0%" stop-color="#ff7e5f"></stop>
              <stop offset="100%" stop-color="#feb47b"></stop>
          </linearGradient>
      </defs>
      <path d="M415.93,69.33c-8.52,0-18.6.57-28,.57,0-1,2.1-2.42,2.87-3,1.16-.85,3.13-.63,4.56-3.17.44-.77-1.24-1.84,0-3.23.74-.84,2-1,2.56-1.48.74-.61,7.84-4.58,2-4.58.39-2.15,7.7-1,7.44-3-.08-.65-19.25-1-21.17-1,0-2.35,5.1,0,5.72-1.14.83-1.52-7.66-1.12-8.57-1.91.82-2.44.88.25-.62-2.46,5.08-4.78,11.85-2.2,17.75-5.61-1.82-1.61-8.17.68-10.5.82-4.22.26-13.52,1.43-16.36-1.42,1.42-1.48,9.88-.82,10.19-1.63.73-1.91-10.36.43-10.77-2.1.89.27,1.44-1.74.81-2.28.77.66-4.6,0-4.25-1.15.93.41,1.5.22,1.74-.56,0-1.2-6.2-1.73-6.89-1.73,0-3,12.9-4.62,14.82-4.87,3.53-.44,8.16-1.21,11.51-1.42,1.6-.11,4-.51,5.15-.58,2.11-.12,4,.2,5.79-.45,1-.36-.2-1.26-.64-1.26,0-.68,4.94-3.21,5.72-3.44,2.43-.7,6.7.53,8.51-1.39-1-1.1-10.83-.83-12.38-.9-4.3-.19-8.14-.07-12.08-.57-7.41-.94-14.46-1.16-21.82-2.29-12.21-1.87-24.64-4.48-37.49-5.72C317,5,302,3.93,287.31,3.09,271,2.15,253.49.31,236.68.09,213-.23,190.44.39,167.56.66c-14.71.17-31.73-.19-46.35,1.71-28,3.65-57.48,3-85.56,8-4.31.77-27.23,6.23-18.34,12,1.34.87,4,.65,4.9,1.43.68.58,2.71,4.31,2.58,5.43-.21,1.85,1,.89-.67,2.87-.43.52-3.82-.58-4.2,0-1.48,2.29,4.52,1.15,5.72,1.15,0,2.69-5.88.59-6.78,2.49-.11.25,13-1.16,11.72,2.43-.73,2.1-6-1.26-7.13,1-.17.34,5.7,1.1,6.2,1-.07.43-10.8,1.15-12,1.15-.25.82,1.77,1.47,2.3,1.91-.3,3.19-8.21-1.11-5.61,3.81,1.79,3.38,6,1.51,8.46,3.16-1.94,2.67-1.87.74-1.49,4.28.18,1.64,3.44.37.55,2.87-1.38,1.19-7.46,1.19-9.65,1.14-3.48-.08-7.22-1-10,.84a12.6,12.6,0,0,0-2,2c-.34.67-.23,4,.57,4.58,1.1.85,3.37-.19,4.29.57,2.25,1.84-.16,3.44.88,5.15.55.89,3.59,3.73,4.27,4.58.52.64,1.88,1.87,2.6,2.91,1,1.43.62,2.44,1.89,3.56,2.24,2,5.66,2.22,8.12,4.14,1.86,1.45,2.29,2.41,4.5,4,2.76,1.95-.82,2,4.43,2.48,0,0,.82-1.06,1-1,2.33.2,13.82,2.29,13.57,2.56.65.87,2.27.06,2.27-.85,2.81,0,5.37,1.4,8.29,1.72,1.28.14,2.28-.36,4,.58.81-.92,5.69.54,7.11.56,2.77,0,20.54.82,20,.85,2.29-.15,10.53-1,11.12.31,1.52-1.44,11.37-1.44,13.78-1.73,3.7-.45,7.47-.13,10.3-.58,5-.77,9.58,0,13.73.58,2.6.33,143.42-.78,168.09-1.72,10.88-.42,25.81,0,36.28,0,3.54,0,34,1.06,34,0,0-.48-7.66-1.17-8.11-1.15a24.85,24.85,0,0,1-5.85.09,51.74,51.74,0,0,0-7.23-.37,35.42,35.42,0,0,1-4.83.29,26.57,26.57,0,0,1-2.8-1.06c-1-.21-1.16,1.34-2.1,1.06a.9.9,0,0,0-.57-1.15c.43-2.17,24.68-.6,26.33-.57,1.29,0,2.64-.5,4.22-.5a66.55,66.55,0,0,1,6.67.2,164.81,164.81,0,0,0,18.55-.27c1,0,19.52-4.74,16-7.44h-4.28C411.35,82.05,416.34,69.33,415.93,69.33Z"></path>
  </svg>
</div>
</div>
<div  id="IMAGE966" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div id="VIDEO967" class='ladi-element'>
  <div class='ladi-video'>
    <div class="ladi-video-background"></div>
    <div  id="SHAPE967" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 408.7 408.7" fill="rgba(0, 0, 0, 0.5)">
          <polygon fill="#fff" points="163.5 296.3 286.1 204.3 163.5 112.4 163.5 296.3"></polygon>
          <path d="M204.3,0C91.5,0,0,91.5,0,204.3S91.5,408.7,204.3,408.7s204.3-91.5,204.3-204.3S316.7,0,204.3,0ZM163.5,296.3V112.4l122.6,91.9Z" transform="translate(0 0)"></path>
      </svg>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="SECTION1017" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-overlay"></div>
  <div class="ladi-container">
    <div id="FORM1010" data-config-id="5f9a34485e45a60fdaea0fd5" class='ladi-element'>
      <form autocomplete="off" method="post" class='ladi-form'>
        <div  id="BUTTON1011" class='ladi-element btn-send-mail'>
          <div class='ladi-button'>
            <div class="ladi-button-background"></div>
            <div  id="BUTTON_TEXT1011" class='ladi-element ladi-button-headline'>
              <p class='ladi-headline tieu-de-so-105'>{!!$site['tieu-de-so-105'] or ''!!}</p>
          </div>
      </div>
  </div>
  <div id="FORM_ITEM1013" class='ladi-element'>
      <div class="ladi-form-item-container">
        <div class="ladi-form-item-background"></div>
        <div class='ladi-form-item'><input autocomplete="off" tabindex="1" name="name" required class="ladi-form-control" type="text" placeholder="{!!$site['tieu-de-so-126'] or ''!!}"   value="" /></div>
    </div>
</div>
<div id="FORM_ITEM1015" class='ladi-element'>
  <div class="ladi-form-item-container">
    <div class="ladi-form-item-background"></div>
    <div class='ladi-form-item'><input autocomplete="off" tabindex="2" name="phone" required class="ladi-form-control" type="tel" placeholder="{!!$site['tieu-de-so-127'] or ''!!}"  pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}"  value="" /></div>
</div>
</div>
<div id="FORM_ITEM1016" class='ladi-element'>
  <div class="ladi-form-item-container">
    <div class="ladi-form-item-background"></div>
    <div class='ladi-form-item'><input autocomplete="off" tabindex="4" name="{!!$site['tieu-de-so-128'] or ''!!}"  class="ladi-form-control" type="text" placeholder="{!!$site['tieu-de-so-128'] or ''!!}"   value="" /></div>
</div>
</div>
<div id="FORM_ITEM1323" class='ladi-element'>
  <div class="ladi-form-item-container">
    <div class="ladi-form-item-background"></div>
    <div class='ladi-form-item'><input autocomplete="off" tabindex="3" name="{!!$site['tieu-de-so-129'] or ''!!}"  class="ladi-form-control" type="tel" placeholder="{!!$site['tieu-de-so-129'] or ''!!}"   value="" /></div>
</div>
</div>
<button type="submit" class="ladi-hidden"></button>
</form>
</div>
<div  id="HEADLINE1031" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-106'>{!!$site['tieu-de-so-106'] or ''!!}</h3>
</div>
<div  id="HEADLINE1116" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-107'>{!!$site['tieu-de-so-107'] or ''!!}</h3>
</div>
</div>
</div>
<div id="SECTION1222" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-overlay"></div>
  <div class="ladi-container">
    <div id="LINE1223" class='ladi-element'>
      <div class='ladi-line'>
        <div class="ladi-line-container"></div>
    </div>
</div>
<div  id="IMAGE734" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
<div id="HTML_CODE1084" class='ladi-element'>
  <div class='ladi-html-code'>{!!$site['ma-nhung-ban-do-google-maps'] or ''!!}</div>
</div>
<a href="http://m.me/happyvivu.gw" target="_blank" rel="nofollow" id="GROUP1266" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX1264" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="IMAGE1265" class='ladi-element'>
      <div class='ladi-image'>
        <div class="ladi-image-background"></div>
    </div>
</div>
</div>
</a>
<a href="tel:{!!$site['so-hotline'] or ''!!}" id="GROUP1271" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="BOX1268" class='ladi-element'>
      <div class='ladi-box'></div>
  </div>
  <div  id="SHAPE1270" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1408 1896.0833" class="" fill="rgba(255, 15, 1, 1.0)">
          <path d="M1408 1240q0 27-10 70.5t-21 68.5q-21 50-122 106-94 51-186 51-27 0-52.5-3.5T959 1520t-47.5-14.5T856 1485t-49-18q-98-35-175-83-128-79-264.5-215.5T152 904q-48-77-83-175-3-9-18-49t-20.5-55.5T16 577 3.5 519.5 0 467q0-92 51-186 56-101 106-122 25-11 68.5-21t70.5-10q14 0 21 3 18 6 53 76 11 19 30 54t35 63.5 31 53.5q3 4 17.5 25t21.5 35.5 7 28.5q0 20-28.5 50t-62 55-62 53-28.5 46q0 9 5 22.5t8.5 20.5 14 24 11.5 19q76 137 174 235t235 174q2 1 19 11.5t24 14 20.5 8.5 22.5 5q18 0 46-28.5t53-62 55-62 50-28.5q14 0 28.5 7t35.5 21.5 25 17.5q25 15 53.5 31t63.5 35 54 30q70 35 76 53 3 7 3 21z"></path>
      </svg>
  </div>
</div>
</div>
</a>
<div  id="GROUP1334" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="SHAPE1335" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(5, 31, 77, 1.0)">
          <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
      </svg>
  </div>
</div>
<div  id="HEADLINE1336" class='ladi-element'>
  <p class='ladi-headline tieu-de-so-108'>{!!$site['tieu-de-so-108'] or ''!!}<br></p>
</div>
</div>
</div>
<div  id="HEADLINE1225" class='ladi-element'>
  <h4 class='ladi-headline tieu-de-so-109'>{!!$site['tieu-de-so-109'] or ''!!}</h4>
</div>
<div  id="GROUP1229" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="SHAPE1230" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(5, 31, 77, 1.0)">
          <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z"></path>
      </svg>
  </div>
</div>
<div  id="HEADLINE1231" class='ladi-element'>
  <p class='ladi-headline tieu-de-so-110'>{!!$site['tieu-de-so-110'] or ''!!}</p>
</div>
</div>
</div>
<div  id="GROUP1232" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="SHAPE1233" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(5, 31, 77, 1.0)">
          <path d="M20,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V8L12,13L20,8V18M20,6L12,11L4,6V6H20V6Z"></path>
      </svg>
  </div>
</div>
<div  id="HEADLINE1234" class='ladi-element'>
  <p class='ladi-headline tieu-de-so-111'>{!!$site['tieu-de-so-111'] or ''!!}</p>
</div>
</div>
</div>
<div  id="GROUP1235" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="SHAPE1236" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(5, 31, 77, 1.0)">
          <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
      </svg>
  </div>
</div>
<div  id="HEADLINE1237" class='ladi-element'>
  <p class='ladi-headline tieu-de-so-112'>{!!$site['tieu-de-so-112'] or ''!!}<br></p>
</div>
</div>
</div>
<div  id="GROUP1337" class='ladi-element'>
  <div class='ladi-group'>
    <div  id="SHAPE1338" class='ladi-element'>
      <div class='ladi-shape'>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(5, 31, 77, 1.0)">
          <path d="M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z"></path>
      </svg>
  </div>
</div>
<div  id="HEADLINE1339" class='ladi-element'>
  <p class='ladi-headline tieu-de-so-113'>{!!$site['tieu-de-so-113'] or ''!!}<br></p>
</div>
</div>
</div>
</div>
</div>
<div id="SECTION_POPUP" class='ladi-section'>
  <div class='ladi-section-background'></div>
  <div class="ladi-container">
    <div id="POPUP817" class='ladi-element'>
      <div class='ladi-popup'>
        <div class="ladi-popup-background"></div>
        <div class="ladi-overlay"></div>
        <div  id="GROUP818" class='ladi-element'>
          <div class='ladi-group'>
            <div id="FORM821" data-config-id="5f9a34485e45a60fdaea0fd5" class='ladi-element'>
              <form autocomplete="off" method="post" class='ladi-form'>
                <div  id="BUTTON822" class='ladi-element'>
                  <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div  id="BUTTON_TEXT822" class='ladi-element ladi-button-headline'>
                      <p class='ladi-headline tieu-de-so-114'>{!!$site['tieu-de-so-114'] or ''!!}</p>
                  </div>
              </div>
          </div>
          <div id="FORM_ITEM824" class='ladi-element'>
              <div class="ladi-form-item-container">
                <div class="ladi-form-item-background"></div>
                <div class='ladi-form-item'><input autocomplete="off" tabindex="1" name="name" required class="ladi-form-control" type="text" placeholder="Họ và tên"   value="" /></div>
            </div>
        </div>
        <div id="FORM_ITEM826" class='ladi-element'>
          <div class="ladi-form-item-container">
            <div class="ladi-form-item-background"></div>
            <div class='ladi-form-item'><input autocomplete="off" tabindex="2" name="phone" required class="ladi-form-control" type="tel" placeholder="Số điện thoại"  pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}"  value="" /></div>
        </div>
    </div>
    <div id="FORM_ITEM1321" class='ladi-element'>
      <div class="ladi-form-item-container">
        <div class="ladi-form-item-background"></div>
        <div class='ladi-form-item'><input autocomplete="off" tabindex="3" name="form_item1321" required class="ladi-form-control" type="tel" placeholder="Xác nhận lại số điện thoại"   value="" /></div>
    </div>
</div>
<button type="submit" class="ladi-hidden"></button>
</form>
</div>
<div  id="HEADLINE830" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-115'>{!!$site['tieu-de-so-115'] or ''!!} <br><span style="text-decoration-line: underline;">{!!$site['tieu-de-so-116'] or ''!!}</span></h3>
</div>
</div>
</div>
<div  id="IMAGE1272" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
</div>
</div>
<div id="POPUP851" class='ladi-element'>
  <div class='ladi-popup'>
    <div class="ladi-popup-background"></div>
    <div  id="IMAGE852" class='ladi-element'>
      <div class='ladi-image'>
        <div class="ladi-image-background"></div>
    </div>
</div>
<div  id="HEADLINE856" class='ladi-element'>
  <h3 class='ladi-headline'><span style="font-weight: bold;">{!!$site['tieu-de-so-117'] or ''!!}</span><br></h3>
</div>
</div>
</div>
<div id="POPUP944" class='ladi-element'>
  <div class='ladi-popup'>
    <div class="ladi-popup-background"></div>
    <div  id="GROUP945" class='ladi-element'>
      <div class='ladi-group'>
        <div  id="BOX946" class='ladi-element'>
          <div class='ladi-box'></div>
      </div>
      <div  id="IMAGE947" class='ladi-element'>
          <div class='ladi-image'>
            <div class="ladi-image-background"></div>
        </div>
    </div>
    <div  id="HEADLINE948" class='ladi-element'>
      <h2 class='ladi-headline tieu-de-so-118'>{!!$site['tieu-de-so-118'] or ''!!}</h2>
  </div>
  <div  id="PARAGRAPH949" class='ladi-element'>
      <div class='ladi-paragraph doan-so-119'>{!!$site['doan-so-119'] or ''!!}</div>
  </div>
</div>
</div>
</div>
</div>
<div id="POPUP1324" class='ladi-element'>
  <div class='ladi-popup'>
    <div class="ladi-popup-background"></div>
    <div class="ladi-overlay"></div>
    <div  id="GROUP1325" class='ladi-element'>
      <div class='ladi-group'>
        <div id="FORM1326" data-config-id="5f9a34485e45a60fdaea0fd5" class='ladi-element'>
          <form autocomplete="off" method="post" class='ladi-form'>
            <div  id="BUTTON1327" class='ladi-element btn-send-mail'>
              <div class='ladi-button'>
                <div class="ladi-button-background"></div>
                <div  id="BUTTON_TEXT1327" class='ladi-element ladi-button-headline'>
                  <p class='ladi-headline tieu-de-so-120'>{!!$site['tieu-de-so-120'] or ''!!}</p>
              </div>
          </div>
      </div>
      <div id="FORM_ITEM1329" class='ladi-element'>
          <div class="ladi-form-item-container">
            <div class="ladi-form-item-background"></div>
            <div class='ladi-form-item'><input autocomplete="off" tabindex="1" name="name" required class="ladi-form-control" type="text" placeholder="{!!$site['tieu-de-so-130'] or ''!!}"   value="" /></div>
        </div>
    </div>
    <div id="FORM_ITEM1330" class='ladi-element'>
      <div class="ladi-form-item-container">
        <div class="ladi-form-item-background"></div>
        <div class='ladi-form-item'><input autocomplete="off" tabindex="2" name="phone" required class="ladi-form-control" type="tel" placeholder="{!!$site['tieu-de-so-131'] or ''!!}"  pattern="(\+84|0){1}(9|8|7|5|3){1}[0-9]{8}"  value="" /></div>
    </div>
</div>
<div id="FORM_ITEM1331" class='ladi-element'>
  <div class="ladi-form-item-container">
    <div class="ladi-form-item-background"></div>
    <div class='ladi-form-item'><input autocomplete="off" tabindex="3" name="{!!$site['tieu-de-so-132'] or ''!!}" required class="ladi-form-control" type="tel" placeholder="{!!$site['tieu-de-so-132'] or ''!!}"   value="" /></div>
</div>
</div>
<button type="submit" class="ladi-hidden"></button>
</form>
</div>
<div  id="HEADLINE1332" class='ladi-element'>
  <h3 class='ladi-headline tieu-de-so-121'>{!!$site['tieu-de-so-121'] or ''!!} <br><span style="text-decoration-line: underline;">{!!$site['tieu-de-so-122'] or ''!!}</span></h3>
</div>
</div>
</div>
<div  id="IMAGE1333" class='ladi-element'>
  <div class='ladi-image'>
    <div class="ladi-image-background"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="backdrop-popup" class="backdrop-popup"></div>
<div id="backdrop-dropbox" class="backdrop-dropbox"></div>
<div id="lightbox-screen" class="lightbox-screen"></div>
<script id="script_lazyload" type="text/javascript">
    (function() {
      var style_lazyload = document.getElementById('style_lazyload');
      var docEventScroll = window;
      var list_element_lazyload = document.querySelectorAll('.ladi-section-background, .ladi-image-background, .ladi-button-background, .ladi-headline, .ladi-video-background, .ladi-countdown-background, .ladi-box, .ladi-frame-background, .ladi-tabs-background, .ladi-survey-option-background, .ladi-survey-option-image, .ladi-banner, .ladi-form-item-background, .ladi-gallery-view-item, .ladi-gallery-control-item, .ladi-spin-lucky-screen, .ladi-spin-lucky-start, .ladi-form-label-container .ladi-form-label-item.image, .ladi-list-paragraph ul li');
      for (var i = 0; i < list_element_lazyload.length; i++) {
        var rect = list_element_lazyload[i].getBoundingClientRect();
        if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {
          rect.x = rect.left;
          rect.y = rect.top;
      }
      var offset_top = rect.y + window.scrollY;
      if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight) {
          list_element_lazyload[i].classList.add('ladi-lazyload');
      }
  }
  if (typeof style_lazyload != "undefined" && style_lazyload != undefined) {
    style_lazyload.parentElement.removeChild(style_lazyload);
}
var currentScrollY = window.scrollY;
var stopLazyload = function(event) {
    if (event.type == "scroll" && window.scrollY == currentScrollY) {
      currentScrollY = -1;
      return;
  }
  docEventScroll.removeEventListener('scroll', stopLazyload);
  list_element_lazyload = document.getElementsByClassName('ladi-lazyload');
  while (list_element_lazyload.length > 0) {
      list_element_lazyload[0].classList.remove('ladi-lazyload');
  }
};
var scrollEventPassive = null;
try {
    var opts = Object.defineProperty({}, 'passive', {
      get: function() {
        scrollEventPassive = {
          passive: true
      };
  }
});
    window.addEventListener('testPassive', null, opts);
    window.removeEventListener('testPassive', null, opts);
} catch (e) {}
docEventScroll.addEventListener('scroll', stopLazyload, scrollEventPassive);
})();
</script>
<!--[if lt IE 9]><script src="https://w.ladicdn.com/v2/source/html5shiv.min.js?v=1671510956545"></script><script src="https://w.ladicdn.com/v2/source/respond.min.js?v=1671510956545"></script><![endif]-->
<link href="https://fonts.googleapis.com/css?family=Philosopher:bold,regular|Dancing%20Script:bold,regular|Dosis:bold,regular|Montserrat:bold,regular|Quicksand:bold,regular&amp;display=swap" rel="stylesheet" type="text/css">
<link href="/public/frontend/w.ladicdn.com/v2/source/ladipage.minc678.css?v=1671510956545" rel="stylesheet" type="text/css">
<script src="/public/frontend/w.ladicdn.com/v2/source/ladipage.vi.minc678.js?v=16715109565456" type="text/javascript"></script>
<script id="script_event_data" type="application/json">
    {
      "COUNTDOWN_ITEM89": {
      "type": "countdown_item",
      "option.countdown_item_type": "day"
  },
  "COUNTDOWN_ITEM90": {
  "type": "countdown_item",
  "option.countdown_item_type": "hour"
},
"COUNTDOWN_ITEM91": {
"type": "countdown_item",
"option.countdown_item_type": "minute"
},
"COUNTDOWN_ITEM92": {
"type": "countdown_item",
"option.countdown_item_type": "seconds"
},
"COUNTDOWN322": {
"type": "countdown",
"option.countdown_type": "countdown",
"option.countdown_minute": 1500
},
"BUTTON739": {
"type": "button",
"option.data_event": [{
"type": "popup",
"action": "POPUP1324",
"action_type": "action"
}]
},
"POPUP817": {
"type": "popup",
"desktop.option.popup_position": "default",
"desktop.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);",
"mobile.option.popup_position": "default",
"mobile.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);"
},
"POPUP851": {
"type": "popup",
"desktop.option.popup_position": "default",
"desktop.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);",
"mobile.option.popup_position": "default",
"mobile.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);"
},
"BUTTON387": {
"type": "button",
"option.data_event": [{
"type": "popup",
"action": "POPUP1324",
"action_type": "action"
}]
},
"BUTTON919": {
"type": "button",
"option.data_event": [{
"type": "popup",
"action": "POPUP1324",
"action_type": "action"
}]
},
"POPUP944": {
"type": "popup",
"desktop.option.popup_position": "default",
"desktop.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);",
"mobile.option.popup_position": "default",
"mobile.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);"
},
"FORM821": {
"type": "form",
"option.form_config_id": "5f9a34485e45a60fdaea0fd5",
"option.form_send_ladipage": true,
"option.thankyou_type": "popup",
"option.thankyou_value": "POPUP944",
"option.form_conversion_name": "CompleteRegistration",
"option.form_google_ads_conversion": "963098511",
"option.form_google_ads_label": "uWYqCKuRn-wBEI_vnssD",
"option.form_auto_funnel": true,
"option.form_captcha": true,
"option.form_auto_complete": true
},
"FORM_ITEM824": {
"type": "form_item",
"option.input_type": "text",
"option.input_tabindex": 1
},
"FORM_ITEM826": {
"type": "form_item",
"option.input_type": "tel",
"option.input_tabindex": 2
},
"VIDEO967": {
"type": "video",
"option.video_value": "{!!$site['link-so-125'] or ''!!}",
"option.video_type": "youtube",
"option.video_control": true
},
"FORM_ITEM1013": {
"type": "form_item",
"option.input_type": "text",
"option.input_tabindex": 1
},
"FORM_ITEM1015": {
"type": "form_item",
"option.input_type": "tel",
"option.input_tabindex": 2
},
"FORM_ITEM1016": {
"type": "form_item",
"option.input_type": "text",
"option.input_tabindex": 4
},
"FORM1010": {
"type": "form",
"option.form_config_id": "5f9a34485e45a60fdaea0fd5",
"option.form_send_ladipage": true,
"option.thankyou_type": "popup",
"option.thankyou_value": "POPUP944",
"option.form_conversion_name": "CompleteRegistration",
"option.form_google_ads_conversion": "963098511",
"option.form_google_ads_label": "U6lpCKeu84UYEI_vnssD",
"option.form_auto_funnel": true,
"option.form_captcha": true,
"option.form_auto_complete": true
},
"BUTTON1052": {
"type": "button",
"option.data_event": [{
"type": "popup",
"action": "POPUP1324",
"action_type": "action"
}]
},
"BUTTON1054": {
"type": "button",
"option.data_event": [{
"type": "popup",
"action": "POPUP1324",
"action_type": "action"
}]
},
"GROUP1266": {
"type": "group",
"option.data_event": [{
"type": "link",
"action": "http://m.me/happyvivu.gw",
"nofollow": true,
"action_type": "action"
}],
"option.conversion_name": "VinOasis03_mess",
"option.google_ads_conversion": "963098511",
"option.google_ads_label": "ka7tCK2u84UYEI_vnssD",
"desktop.option.sticky": true,
"desktop.option.sticky_position": "bottom_right",
"desktop.option.sticky_position_top": "0px",
"desktop.option.sticky_position_left": "0px",
"desktop.option.sticky_position_bottom": "20px",
"desktop.option.sticky_position_right": "20px",
"desktop.style.animation-name": "swing",
"desktop.style.animation-delay": "3s",
"mobile.option.sticky": true,
"mobile.option.sticky_position": "bottom_right",
"mobile.option.sticky_position_top": "0px",
"mobile.option.sticky_position_left": "0px",
"mobile.option.sticky_position_bottom": "20px",
"mobile.option.sticky_position_right": "20px",
"mobile.style.animation-name": "tada",
"mobile.style.animation-delay": "3s"
},
"GROUP1271": {
"type": "group",
"option.data_event": [{
"type": "phone",
"action": "090 158 0771",
"action_type": "action"
}],
"option.google_ads_conversion": "963098511",
"option.google_ads_label": "cKHjCKqu84UYEI_vnssD",
"desktop.option.sticky": true,
"desktop.option.sticky_position": "bottom_left",
"desktop.option.sticky_position_top": "0px",
"desktop.option.sticky_position_left": "20px",
"desktop.option.sticky_position_bottom": "20px",
"desktop.option.sticky_position_right": "0px",
"desktop.style.animation-name": "tada",
"desktop.style.animation-delay": "3s",
"mobile.option.sticky": true,
"mobile.option.sticky_position": "bottom_left",
"mobile.option.sticky_position_top": "0px",
"mobile.option.sticky_position_left": "20px",
"mobile.option.sticky_position_bottom": "20px",
"mobile.option.sticky_position_right": "0px",
"mobile.style.animation-name": "tada",
"mobile.style.animation-delay": "3s"
},
"FORM_ITEM1321": {
"type": "form_item",
"option.input_type": "tel",
"option.input_tabindex": 3
},
"FORM_ITEM1323": {
"type": "form_item",
"option.input_type": "tel",
"option.input_tabindex": 3
},
"FORM_ITEM1329": {
"type": "form_item",
"option.input_type": "text",
"option.input_tabindex": 1
},
"FORM_ITEM1330": {
"type": "form_item",
"option.input_type": "tel",
"option.input_tabindex": 2
},
"FORM_ITEM1331": {
"type": "form_item",
"option.input_type": "tel",
"option.input_tabindex": 3
},
"FORM1326": {
"type": "form",
"option.form_config_id": "5f9a34485e45a60fdaea0fd5",
"option.form_send_ladipage": true,
"option.thankyou_type": "popup",
"option.thankyou_value": "POPUP944",
"option.form_conversion_name": "CompleteRegistration",
"option.form_google_ads_conversion": "963098511",
"option.form_google_ads_label": "uWYqCKuRn-wBEI_vnssD",
"option.form_auto_funnel": true,
"option.form_captcha": true,
"option.form_auto_complete": true
},
"POPUP1324": {
"type": "popup",
"option.show_popup_welcome_page": true,
"option.delay_popup_welcome_page": 10,
"desktop.option.popup_position": "default",
"desktop.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);",
"mobile.option.popup_position": "default",
"mobile.option.popup_backdrop": "background-color: rgba(0, 0, 0, 0.5);"
}
}
</script>
<script id="script_ladipage_run" type="text/javascript">
  (function() {
    var run = function() {
      if (typeof window.LadiPageScript == "undefined" || window.LadiPageScript == undefined || typeof window.ladi == "undefined" || window.ladi == undefined) {
        setTimeout(run, 100);
        return;
    }
    window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();
    window.LadiPageScript.runtime.ladipage_id = '5f9cddb30cea7207fdaf1483';
    window.LadiPageScript.runtime.publish_platform = 'LADIPAGEDNS';
    window.LadiPageScript.runtime.is_mobile_only = false;
    window.LadiPageScript.runtime.version = '1671510956545';
    window.LadiPageScript.runtime.cdn_url = 'https://w.ladicdn.com/v2/source/';
    window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = ["happyvivu.com"];
    window.LadiPageScript.runtime.DOMAIN_FREE = ["ldp.page"];
    window.LadiPageScript.runtime.bodyFontSize = 12;
    window.LadiPageScript.runtime.store_id = "5d47e1a9daa0960ae023d600";
    window.LadiPageScript.runtime.time_zone = 7;
    window.LadiPageScript.runtime.currency = "VND";
    window.LadiPageScript.runtime.convert_replace_str = true;
    window.LadiPageScript.runtime.desktop_width = 960;
    window.LadiPageScript.runtime.mobile_width = 420;
    window.LadiPageScript.runtime.tracking_button_click = true;
    window.LadiPageScript.run(true);
    window.LadiPageScript.runEventScroll();
};
run();
})();
</script>
<script src=/public/frontend/js/jquery-3.6.0.min.js></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('form').on('click', '.btn-send-mail', function(event) {
      event.preventDefault();
      var form = $(this).parents('form');
      var name=form.find('.name').val();
      var phone=form.find('.phone').val();
      var email=form.find('.email').val();
      var element = form.data('element');
      var data = form.serializeArray();
      var json_data = JSON.stringify(data);
      var device = (isMobile())?'Điện thoại':'Máy tính';
      var utm = getUrlParameter('utm_source');
      var action = $(this).data('action');
      var currenturl = window.location.href;

      $.ajax({
          dataType: "html",
          type: "POST",
          evalScripts: true,
          url: "/ds-add.php",
          data: ({device:device, utm:utm, action:action, json_data:json_data, currenturl:currenturl}),
          success: function(){},
          error: function (xhr, ajaxOptions, thrownError) {
            //alert(xhr.responseText);
            alert(thrownError);
        }
    });

      $.ajax({
          dataType: "html",
          type: "POST",
          evalScripts: true,
          url: "//api.ihappy.vn/sendMail",
          data: ({to:'{!!$site['dia-chi-email-nhan-thong-bao'] or ''!!}',url:window.location.hostname,json_data:json_data}),
          success: function(){
              $('#POPUP1324').hide();
              $('#POPUP944').show();
          },
          error: function (xhr, ajaxOptions, thrownError) {
            //alert(xhr.responseText);
            alert(thrownError);
        }
    });
      $('#POPUP1324').hide();
      $('#POPUP944').show();
  });
});
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined ? true : sParameterName[1];
    }
}
};

function isMobile() {
    return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
}

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function isPhone(phone) {
    var isnum = /^\d+$/.test(phone);
    if(isnum){
      return (phone.match(/\d/g).length===10 || phone.match(/\d/g).length===11);
  }
  return false;
}
</script>
</body>
</html>