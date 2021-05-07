
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link rel='stylesheet' id='wp-block-library-css'  href=" {{ asset('css/style.min.css') }}"  media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href=" {{ asset('css/theme.min.css') }}"  media='all' />
<link rel='stylesheet' id='wc-block-vendors-style-css'  href=" {{ asset('css/vendors-style.css') }}"  media='all' />
<link rel='stylesheet' id='wc-block-style-css'  href=" {{ asset('css/style.css') }}"  media='all' />
<link rel='stylesheet' id='pmpro_frontend-css'  href=" {{ asset('css/frontend.css') }}"  media='screen' />
<link rel='stylesheet' id='pmpro_print-css'  href=" {{ asset('css/print.css') }}"  media='print' />
<link rel='stylesheet' id='tutor-icon-css'  href=" {{ asset('css/tutor-icon.css') }}"  media='all' />
<link rel='stylesheet' id='tutor-plyr-css'  href=" {{ asset('css/plyr.css') }}"  media='all' />
<link rel='stylesheet' id='tutor-frontend-css'  href=" {{ asset('css/tutor-front.min.css') }}"  media='all' />
<style id='tutor-frontend-inline-css'>
:root{}
</style>

<link rel='stylesheet' id='tutor-pro-front-css'  href=" {{ asset('css/front.css') }}"  media='all' />
<style id='woocommerce-inline-inline-css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='perfect-scrollbar-css'  href=" {{ asset('css/perfect-scrollbar.min.css' ) }}" media='all' />
<link rel='stylesheet' id='perfect-scrollbar-wpc-css'  href=" {{ asset('css/custom-theme.css') }}"  media='all' />
<link rel='stylesheet' id='wooscp-frontend-css'  href=" {{ asset('css/frontend.css') }}"  media='all' />
<link rel='stylesheet' id='woosw-frontend-css'  href=" {{ asset('css/frontend.css') }}"  media='all' />
<style id='woosw-frontend-inline-css'>
.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-notice { background-color: #5fbd74; } 
.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner .woosw-page a:hover, 
.woosw-area .woosw-inner .woosw-content .woosw-content-bot .woosw-content-bot-inner
 .woosw-continue:hover { color: #5fbd74; } 
</style>
<link rel='stylesheet' id='font-gordita-css'  href=" {{ asset('css/font-gordita.min.css') }}"  media='all' />
<link rel='stylesheet' id='font-awesome-pro-css'  href=" {{ asset('css/fontawesome-all.min.css') }}"  media='all' />
<link rel='stylesheet' id='swiper-css'  href=" {{ asset('css/swiper.min.css') }}"  media='all' />
<link rel='stylesheet' id='lightgallery-css'  href=" {{ asset('css/lightgallery.min.css') }}"  media='all' />
<link rel='stylesheet' id='edumall-style-css'  href=" {{ asset('css/style.css') }}"  media='all' />



<style id='edumall-style-inline-css'>
    :root {
                    --edumall-typography-body-font-family: Gordita;
                    --edumall-typography-body-font-size: 14px;
                    --edumall-typography-body-font-weight: 400;
                    --edumall-typography-body-line-height: 1.86;
                    --edumall-typography-body-letter-spacing: 0em;
                    --edumall-typography-headings-font-family: inherit;
                    --edumall-typography-headings-font-weight: 500;
                    --edumall-typography-headings-line-height: 1.3;
                    --edumall-typography-headings-letter-spacing: 0em;
                    --edumall-color-primary: #0071dc;
                    --edumall-color-primary-rgb: 0, 113, 220;
                    --edumall-color-secondary: #ffc221;
                    --edumall-color-third: #031f42;
                    --edumall-color-text: #696969;
                    --edumall-color-text-bit-lighten: #7e7e7e;
                    --edumall-color-text-lighten: #ababab;
                    --edumall-color-heading: #252525;
                    --edumall-color-link: #696969;
                    --edumall-color-link-hover: #0071dc;
                    --edumall-color-box-white-background: #fff;
                    --edumall-color-box-white-border: #ededed;
                    --edumall-color-box-grey-background: #f8f8f8;
                    --edumall-color-box-light-grey-background: #f9f9fb;
                    --edumall-color-box-fill-separator: #eee;
                    --edumall-color-box-border: #eee;
                    --edumall-color-box-border-lighten: #ededed;
                    --edumall-color-form-text: #252525;
                    --edumall-color-form-border: #f8f8f8;
                    --edumall-color-form-background: #f8f8f8;
                    --edumall-color-form-focus-text: #252525;
                    --edumall-color-form-focus-border: #0071dc;
                    --edumall-color-form-focus-background: #fff;
                    --edumall-color-sub-menu-border: #ededed;
                    --edumall-color-sub-menu-background: #fff;
                }
  </style>
    <link rel='stylesheet' id='perfect-scrollbar-woosw-css'  href=" {{ asset('css/custom-theme.css') }}" media='all' />
    <link rel='stylesheet' id='growl-css'  href=" {{ asset('css/jquery.growl.min.css') }}" media='all' />
    <link rel='stylesheet' id='edumall-woocommerce-css'  href=" {{ asset('css/woocommerce.css') }}" media='all' />
    <link rel='stylesheet' id='edumall-zoom-meetings-css'  href=" {{ asset('css/video-conferencing-zoom.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-icons-css'  href=" {{ asset('css/elementor-icons.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-animations-css'  href=" {{ asset('css/animations.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-frontend-legacy-css'  href=" {{ asset('css/frontend-legacy.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'  href=" {{ asset('css/frontend.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-post-47-css'  href=" {{ asset('css/post-47.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-pro-css'  href=" {{ asset('css/frontend.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-post-437-css'  href=" {{ asset('css/post-437.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-post-541-css'  href=" {{ asset('css/post-541.css') }}" media='all' />
    <link rel='stylesheet' id='isw-frontend-css'  href=" {{ asset('css/style.css') }}" media='all' />
    <link rel='stylesheet' id='edumall-tutor-css'  href=" {{ asset('css/tutor-lms.css') }}" media='all' />
    <link rel='stylesheet' id='edumall-child-demo-style-css'  href=" {{ asset('css/style.css') }}" media='all' />
    <link rel='stylesheet' id='edumall-events-manager-css'  href=" {{ asset('css/events-manager.css') }}" media='all' />
    <link rel='stylesheet' id='video-conferencing-with-zoom-api-css'  href=" {{ asset('css/style.min.css') }}" media='all' />
    <script src="{{ asset('js/jquery.min.js') }}"  id='jquery-core-js'></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}" id='jquery-migrate-js'></script>



        		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-463342436"></script>
	

</head>
{{-- <body> --}}


    <body class="home page-template-default page page-id-437 wp-embed-responsive 
    theme-edumall pmpro-body-has-access woocommerce-no-js desktop desktop-menu
     edumall-light-scheme mobile-menu-push-to-left woocommerce header-sticky-both 
     wide page-has-no-sidebar title-bar-none elementor-default elementor-kit-47 
     elementor-page elementor-page-437"  data-site-width="1200px" data-content-width="1200" 
     data-font="Gordita Helvetica, Arial, sans-serif" data-header-sticky-height="80">







    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>










    <script>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel='stylesheet' id='elementor-post-2387-css'  href="{{ asset('css/post-2387.css') }}" media='all' />
<script src="{{ asset('js/intersection-observer.min.js') }}" id='intersection-observer-js'></script>
<script id='quicktags-js-extra'>
/* <![CDATA[ */
var quicktagsL10n = {"closeAllOpenTags":"Close all open tags","closeTags":"close tags","enterURL":"Enter the URL","enterImageURL":"Enter the URL of the image","enterImageDescription":"Enter a description of the image","textdirection":"text direction","toggleTextdirection":"Toggle Editor Text Direction","dfw":"Distraction-free writing mode","strong":"Bold","strongClose":"Close bold tag","em":"Italic","emClose":"Close italic tag","link":"Insert link","blockquote":"Blockquote","blockquoteClose":"Close blockquote tag","del":"Deleted text (strikethrough)","delClose":"Close deleted text tag","ins":"Inserted text","insClose":"Close inserted text tag","image":"Insert image","ul":"Bulleted list","ulClose":"Close bulleted list tag","ol":"Numbered list","olClose":"Close numbered list tag","li":"List item","liClose":"Close list item tag","code":"Code","codeClose":"Close code tag","more":"Insert Read More tag"};
/* ]]> */
</script>
<script src="{{ asset('js/quicktags.min.js') }}" id='quicktags-js'></script>
<script src="{{ asset('js/core.min.js') }}" id='jquery-ui-core-js'></script>
<script src="{{ asset('js/mouse.min.js') }}" id='jquery-ui-mouse-js'></script>
<script src="{{ asset('js/sortable.min.js') }}" id='jquery-ui-sortable-js'></script>
<script src="{{ asset('js/plyr.polyfilled.min.js') }}" id='tutor-plyr-js'></script>
<script src="{{ asset('js/tutor.js') }}" id='tutor-main-js'></script>
<script id='tutor-frontend-js-extra'>
/* <![CDATA[ */
var _tutorobject = {"ajaxurl":"https:\/\/live-edumall.thememove.com\/wp-admin\/admin-ajax.php","tutor_url":"https:\/\/live-edumall.thememove.com\/wp-content\/plugins\/tutor\/","nonce_key":"_tutor_nonce","_tutor_nonce":"fad1b7689a","placeholder_img_src":"https:\/\/live-edumall.thememove.com\/wp-content\/plugins\/tutor\/assets\/images\/placeholder.jpg","enable_lesson_classic_editor":"","text":{"assignment_text_validation_msg":"Assignment answer can not be empty"}};
/* ]]> */
</script>
<script src="{{ asset('js/tutor-front.js') }}" id='tutor-frontend-js'></script>
<script src="{{ asset('js/jquery.blockUI.min.js') }}" id='jquery-blockui-js'></script>
<script id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/live-edumall.thememove.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script src="{{ asset('js/add-to-cart.min.js') }}" id='wc-add-to-cart-js'></script>
<script src="{{ asset('js/js.cookie.min.js') }}" id='js-cookie-js'></script>
<script id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script src="{{ asset('js/woocommerce.min.js') }}" id='woocommerce-js'></script>

<script src="{{ asset('js/cart-fragments.min.js') }}" id='wc-cart-fragments-js'></script>
<script src="{{ asset('js/underscore.min.js') }}" id='underscore-js'></script>
<script id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script src="{{ asset('js/wp-util.min.js') }}" id='wp-util-js'></script>
<script src="{{ asset('js/backbone.min.js') }}" id='backbone-js'></script>
<script src="{{ asset('js/drag-arrange.js') }}" id='dragarrange-js'></script>
<script src="{{ asset('js/table-head-fixer.js') }}" id='table-head-fixer-js'></script>
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}" id='perfect-scrollbar-js'></script>
<script id='wooscp-frontend-js-extra'>
/* <![CDATA[ */
var wooscpVars = {"ajaxurl":"https:\/\/live-edumall.thememove.com\/wp-admin\/admin-ajax.php","user_id":"5d683352529913f1f848a4c9e3f5b2b8","page_url":"","open_button":"","open_button_action":"open_popup","menu_action":"open_popup","open_table":"yes","open_bar":"no","bar_bubble":"no","click_again":"no","remove_all":"Do you want to remove all products from the compare?","hide_empty":"no","click_outside":"yes","freeze_column":"yes","freeze_row":"yes","limit":"100","limit_notice":"You can add a maximum of {limit} products to the compare table.","button_text":"Compare","button_text_added":"Compare","button_text_change":"yes","nonce":"46c65ee2d9"};
/* ]]> */
</script>
<script src="{{ asset('js/frontend.js') }}" id='wooscp-frontend-js'></script>
<script id='woosw-frontend-js-extra'>
/* <![CDATA[ */
var woosw_vars = {"ajax_url":"https:\/\/live-edumall.thememove.com\/wp-admin\/admin-ajax.php","menu_action":"open_page","copied_text":"Copied the wishlist link:","menu_text":"Wishlist","wishlist_url":"https:\/\/live-edumall.thememove.com\/wishlist\/","button_text":"Add to wishlist","button_action":"list","button_text_added":"Browse wishlist","button_action_added":"popup"};
/* ]]> */
</script>
<script src="{{ asset('js/frontend.js') }}" id='woosw-frontend-js'></script>
<script src="{{ asset('js/headroom.min.js') }}" id='headroom-js'></script>
<script src="{{ asset('js/SmoothScroll.min.js') }}" id='smooth-scroll-js'></script>
<script src="{{ asset('js/lightgallery-all.min.js') }}" id='lightgallery-js'></script>
<script src="{{ asset('js/waypoints.min.js') }}" id='elementor-waypoints-js'></script>
<script src="{{ asset('js/jquery.powertip.min.js') }}" id='powertip-js'></script>
<script src="{{ asset('js/jquery.smooth-scroll.min.js') }}" id='jquery-smooth-scroll-js'></script>
<script src="{{ asset('js/imagesloaded.min.js') }}" id='imagesloaded-js'></script>
<script src="{{ asset('js/swiper.min.js') }}" id='swiper-js'></script>
<script id='edumall-swiper-wrapper-js-extra'>
/* <![CDATA[ */
var $edumallSwiper = {"fractionPrefixText":"Show","prevText":"Prev","nextText":"Next"};
var $edumallSwiper = {"fractionPrefixText":"Show","prevText":"Prev","nextText":"Next"};
var $edumallSwiper = {"fractionPrefixText":"Show","prevText":"Prev","nextText":"Next"};
/* ]]> */
</script>
<script src="{{ asset('js/swiper-wrapper.min.js') }}" id='edumall-swiper-wrapper-js'></script>
<script src="{{ asset('js/jquery.matchHeight-min.js') }}" id='matchheight-js'></script>
<script src="{{ asset('js/isotope.pkgd.js') }}" id='isotope-masonry-js'></script>
<script src="{{ asset('js/packery-mode.pkgd.js') }}" id='isotope-packery-js'></script>
<script src="{{ asset('js/grid-layout.min.js') }}" id='edumall-grid-layout-js'></script>
<script src="{{ asset('js/jquery.smartmenus.min.js') }}" id='smartmenus-js'></script>
<script src="{{ asset('js/jquery.growl.min.js') }}" id='growl-js'></script>
<script src="{{ asset('js/nice-select.min.js') }}" id='edumall-nice-select-js'></script>
<script id='edumall-script-js-extra'>
/* <![CDATA[ */
var $edumall = {"ajaxurl":"https:\/\/live-edumall.thememove.com\/wp-admin\/admin-ajax.php","header_sticky_enable":"1","header_sticky_height":"80","scroll_top_enable":"1","light_gallery_auto_play":"0","light_gallery_download":"1","light_gallery_full_screen":"1","light_gallery_zoom":"1","light_gallery_thumbnail":"1","light_gallery_share":"1","mobile_menu_breakpoint":"1199","isRTL":"","isProduct":"","productFeatureStyle":"slider","noticeCookieEnable":"0","noticeCookieConfirm":"no","noticeCookieMessages":"We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.<a id=\"tm-button-cookie-notice-ok\" class=\"tm-button tm-button-xs tm-button-full-wide style-flat\">Ok, got it!<\/a>","noticeCartUrl":"https:\/\/live-edumall.thememove.com\/cart\/","noticeCartText":"View Cart","noticeAddedCartText":"added to cart!","countdownDaysText":"Days","countdownHoursText":"Hours","countdownMinutesText":"Mins","countdownSecondsText":"Secs"};
/* ]]> */
</script>
<script src="{{ asset('js/main.min.js') }}" id='edumall-script-js'></script>
<script src="{{ asset('js/general.min.js') }}" id='edumall-woo-general-js'></script>
<script id='isw-frontend-js-extra'>
/* <![CDATA[ */
var isw_vars = {"ajax":"https:\/\/live-edumall.thememove.com\/wp-admin\/admin-ajax.php","product_selector":".product","price_selector":".price","localization":{"add_to_cart_text":"Add to cart","read_more_text":"Read more","select_options_text":"Select options"}};
/* ]]> */
</script>
<script src="{{ asset('js/scripts.js') }}" id='isw-frontend-js'></script>
<script src="{{ asset('js/jquery.validate.min.js') }}" id='validate-js'></script>
<script id='edumall-login-js-extra'>
/* <![CDATA[ */
var $edumallLogin = {"validatorMessages":{"required":"This field is required","remote":"Please fix this field","email":"A valid email address is required","url":"Please enter a valid URL","date":"Please enter a valid date","dateISO":"Please enter a valid date (ISO)","number":"Please enter a valid number.","digits":"Please enter only digits.","creditcard":"Please enter a valid credit card number","equalTo":"Please enter the same value again","accept":"Please enter a value with a valid extension","maxlength":"Please enter no more than {0} characters","minlength":"Please enter at least {0} characters","rangelength":"Please enter a value between {0} and {1} characters long","range":"Please enter a value between {0} and {1}","max":"Please enter a value less than or equal to {0}","min":"Please enter a value greater than or equal to {0}"}};
/* ]]> */
</script>
<script src="{{ asset('js/login.min.js') }}" id='edumall-login-js'></script>
<script id='edumall-course-general-js-extra'>
/* <![CDATA[ */
var $edumallCourseWishlist = {"addedText":"Remove from wishlist","addText":"Add to wishlist"};
/* ]]> */
</script>
<script src="{{ asset('js/general.min.js') }}" id='edumall-course-general-js'></script>
<script src="{{ asset('js/vivus.min.js') }}" id='vivus-js'></script>
<script src="{{ asset('js/widget-icon-box.js') }}" id='edumall-widget-icon-box-js'></script>
<script src="{{ asset('js/group-widget-grid.js') }}" id='edumall-group-widget-grid-js'></script>
<script src="{{ asset('js/tab-panel.min.js') }}" id='edumall-tab-panel-js'></script>
<script src="{{ asset('js/webpack.runtime.min.js') }}" id='elementor-webpack-runtime-js'></script>
<script src="{{ asset('js/frontend-modules.min.js') }}" id='elementor-frontend-modules-js'></script>
<script src="{{ asset('js/dialog.min.js') }}" id='elementor-dialog-js'></script>
<script src="{{ asset('js/share-link.min.js') }}" id='share-link-js'></script>
<script id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false,"isImprovedAssetsLoading":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.1.4","is_static":false,"experimentalFeatures":{"form-submissions":true},"urls":{"assets":"https:\/\/live-edumall.thememove.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":437,"title":"Main%20%E2%80%93%20Online%20Learning%20and%20Education%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>
<script src="{{ asset('js/frontend.min.js') }}" id='elementor-frontend-js'></script>
<script src="{{ asset('js/grid-query.js') }}" id='edumall-grid-query-js'></script>
<script src="{{ asset('js/widget-course-tabs.js') }}" id='edumall-widget-course-tabs-js'></script>
<script src="{{ asset('js/group-widget-carousel.js') }}" id='edumall-group-widget-carousel-js'></script>
<script src="{{ asset('js/webpack-pro.runtime.min.js') }}" id='elementor-pro-webpack-runtime-js'></script>
<script src="{{ asset('js/jquery.sticky.min.js') }}" id='elementor-sticky-js'></script>
<script id='elementor-pro-frontend-js-before'>
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/live-edumall.thememove.com\/wp-admin\/admin-ajax.php","nonce":"7c070fbf0c","urls":{"assets":"https:\/\/live-edumall.thememove.com\/wp-content\/plugins\/elementor-pro\/assets\/"},"i18n":{"toc_no_headings_found":"No headings were found on this page."},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"google":{"title":"Google+","has_counter":true},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},
"menu_cart":{"cart_page_url":"https:\/\/live-edumall.thememove.com\/cart\/","checkout_page_url":"https:\/\/live-edumall.thememove.com\/checkout\/"},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/live-edumall.thememove.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src="{{ asset('js/frontend.min.js') }}" id='elementor-pro-frontend-js'></script>
<script src="{{ asset('js/preloaded-elements-handlers.min.js') }}" id='pro-preloaded-elements-handlers-js'></script>
<script src="{{ asset('js/preloaded-elements-handlers.min.js') }}" id='preloaded-elements-handlers-js'></script>
</body>
</html>
