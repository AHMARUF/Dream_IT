<!DOCTYPE html>
<html lang="en" style="visibility: hidden; opacity: 0; overflow-y: hidden" class="zanaya-hidden-load">
<head>
  {{-- meta teg --}}
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  {{-- title  --}}
  <title>{{ config('app.name') }} | {{$tite}}</title>
  <!-- Favicons -->
  <link rel="icon" href="{{ asset('asset/favicon.ico') }}" type="image/gif" sizes="32x32">
  {{-- File Link --}}
 
<link rel='stylesheet' href="{{asset ('asset/fontend/assets/css/css.css')}}" type='text/css' media='all' />
<link rel='stylesheet' href="{{asset ('asset/fontend/assets/css/headlines.min.css')}}" type='text/css' media='all' />
<link rel='stylesheet'  href="{{asset ('asset/fontend/assets/css/zanaya-text-anime.min.css')}}" type='text/css' media='all' />

<link rel='stylesheet'  href="{{asset ('asset/fontend/assets/css/style.min.css') }}" type='text/css' media='all' />
<link rel='stylesheet' href='{{asset ('asset/fontend/assets/css/psnsa.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset ('asset/fontend/assets/css/etn.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{ asset('asset/fontend/assets/css/style.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('asset/fontend/assets/css/bootstrap.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset ('asset/fontend/assets/css/simple-line-icons.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet'   href='{{ asset('asset/fontend/assets/css/genericons.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset ('asset/fontend/assets/css/splent.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{ asset('asset/fontend/assets/css/linea-basic.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet'   href='{{ asset('asset/fontend/assets/css/animations.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet'  href='{{ asset('asset/fontend/assets/css/hover.min.css') }}' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('asset/fontend/assets/css/toastr.min.css') }}' type='text/css' media='all' />

{{--  page css --}}
<link rel='stylesheet' href='{{ asset('asset/fontend/assets/css/page.css') }}' type='text/css' media='all' />

{{-- font-awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>

{{-- Google font --}}
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='stylesheet'  href='https://fonts.googleapis.com/css?family=Rozha+One%3A400%7CArimo%3A400%2C700%7CHind+Madurai%3A400&#038;display=swap&#038;ver=1.0.6' type='text/css' media='all' />


</head>
<body class="home page-template-default page page-id-14468 zanaya-page custom-cursor">
<div id="page" class="site"> 

<!-- START HEADER --> 
<header id="masthead" class="container zanaya-section-group nav-on-top z-pt-0 z-pb-0" data-zanaya-content="Menu">  
<div class="zanaya-row zanaya-np clearfix container-fluid" data-row-layout="1|1">
  <nav class="zanaya-multi-nav navbar  fullscreen shape-transition zanaya-nm bordered-links classMark_nav_CACNPm affix-top collapse-md " data-zanaya-element="nav" data-zanaya-element-theme="zanaya-multi-nav" data-zanaya-transitions="true" data-class-marker="classMark_nav_CACNPm" data-sticky-nav="true" data-affix-effect="slidedown">
    <div class="navbar-inner "> 
      <div class="navbar-header navbar-left">
        <button class="navbar-toggle mobile-search " type="button">
          <span class="sr-only">Mobile Search</span>
          <i class="fa fa-search zanaya-style-exclude mobile-search"></i>
        </button>
        <button class="navbar-toggle zanaya-navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars zanaya-navbar-toggle"></i>
        </button>
        <a class="zanaya-multi-nav-logo navbar-brand zanaya-nav-brand-img" href="{{url('/')}}" rel="home">
            <img class="zanaya-keep-src img-responsive zanaya-style-exclude zanaya-nav-logo-img reg-nav-logo-img" data-zanaya-element="nav-logo-image" src="{{ asset('asset/favicon.ico') }}" alt="Logo">
            <img class="zanaya-keep-src img-responsive zanaya-style-exclude zanaya-nav-logo-img affix-nav-logo-img" data-zanaya-element="nav-logo-image" src="{{ asset('asset/favicon.ico') }}" alt="Logo"> 
        </a>
        <form class="nav-search-form-mobile" role="search">
            <div>
              <input type="text" class="form-control pull-right nav-search-input-mobile nav-search-input-color nav-search-placeholder-color" placeholder="TYPE &amp; HIT ENTER...">
            </div>
        </form>
      </div>
      <div class="collapse navbar-collapse">
        <div id="nav-links-wrap">
          <ul class="nav navbar-nav navbar-left bordered-links"></ul>
          <ul class="nav navbar-nav navbar-center bordered-links"></ul>
          <ul id="menu-splent-retro-demo-menu" class="nav navbar-nav navbar-right bordered-links">
            <li id="menu-item-14474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-14468 current_page_item active menu-item-14474 ">
              <a href="{{ url('/') }}" @if($tite=="Home") class=" active" @endif>
                <i class=" z-mr-5"></i>Home
              </a>
            </li>
            <li id="menu-item-14433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14433 ">
              <a href="{{ url('/about') }}" @if($tite=="About") class=" active" @endif>
                <i class=" z-mr-5"></i>About
              </a>
            </li>
            <li id="menu-item-14434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14434 ">
              <a href="{{ url('/Pricing') }}" @if($tite=="Pricing") class=" active" @endif>
                <i class=" z-mr-5"></i>Pricing
              </a>
            </li>             
            <li id="menu-item-14435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14435 ">
              <a href="{{ url('/Contact') }}" @if($tite=="Contact") class=" active" @endif>
                <i class=" z-mr-5"></i>Contact
              </a>
            </li>                
            <li id="btn-search" class="zanaya-nav-search ">
              <a class="navbar-icons">
                <span class="zanaya-nav-search-icon fa fa-search zanaya-style-exclude"></span> 
              </a> 
            </li>
          </ul>
        </div>                    
        <form class="nav-search-form" autocomplete="off" role="search" method="" action="">
          <div class="input-group-null"> 
            <input type="text" class="form-control pull-right nav-search-input" name="s" placeholder="TYPE &amp; HIT ENTER...">
          </div>
        </form>
      </div> 
      <!-- search transition -->
      <div class="open-search-wrap opacity-0"></div>
      <div id="transition-search" class="search__container" >
        <div class="search__inner search__inner--up">
          <form class="search__form" action="">
            <label class="sr-only" for="search__input">Search</label>
              <input id="search__input" class="search__input" name="s" type="search" placeholder="Search" autocomplete="off" autocapitalize="off" spellcheck="false" />
              <span class="search__info">Hit enter to search or ESC to <span class="search__close">close</span></span>
          </form>
        </div>
        <div class="search__inner search__inner--down" data-search-get-post-id="true">
          <div id="section_DtJxhO" class="container zanaya-section zanaya-background first-section classMark_section_DtJxhO" data-class-marker="classMark_section_DtJxhO">
            <div id="row_8kjBtY" class="zanaya-row clearfix container classMark_row_8kjBtY zanaya-vertical-horizontal-align" data-row-layout="1|1" data-class-marker="classMark_row_8kjBtY">
              <div id="column_v6K15j" class="zanaya-col col-lg-12 classMark_column_v6K15j text-lg-center col-md-12 col-sm-12 col-xs-12" data-class-marker="classMark_column_v6K15j">
                <div class="clearfix" data-zanaya-element="text-block">
                  <h2 id="h2_r5BwkP" class="classMark_h2_r5BwkP" data-class-marker="classMark_h2_r5BwkP" data-style-captured="true">DREAM-IT</h2>
                </div>
                <div class="clearfix" data-zanaya-element="text-block">
                  <h2 id="h2_dmEim0" class="classMark_h2_dmEim0" data-class-marker="classMark_h2_dmEim0"></h2>
                </div>
              </div>
              <div id="column_VTn1Vg" class="zanaya-col col-lg-12 classMark_column_VTn1Vg col-md-12 col-sm-12 col-xs-12" data-class-marker="classMark_column_VTn1Vg">
                <button id="button_uTK6xX" class="btn zanaya-btn button-size-large button-text-small clearfix center-block-lg button-color-inverse button-shape-sharp classMark_button_uTK6xX" data-zanaya-element="button" data-class-marker="classMark_button_uTK6xX" data-btn-href="">purchase</button>
              </div>
            </div>
        </div>
      </div>              
      </div>
      <!-- /search -->
    </div> 
  </nav>
</div>
</header><!-- #masthead -->
<!-- END HEADER -->

<!-- START CONTENT -->
<!-- START CONTENT -->

        <div id="content" class="site-content container zanaya-section-group z-np "  data-post-layout="-rows-2" data-pagination="splent_pagination" data-zanaya-content="Content">

                <div class="zanaya-row-group"  data-class-marker=&quot;classMark_row_hpupuo&quot;  data-row-layout=&quot;1|1&quot;  >

          
                    <div id="primary" class="content-area zanaya-col-group col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-np" data-zanaya-content="Post"  >
            <main id="main" class="site-main">
              <div id="primary-content-wrapper">              <article id="post-14468" class="post-14468 page type-page status-publish hentry">
              
              <header class="entry-header hidden">
                <div class="entry-title"><h1 class="z-mt-0 zanaya-style-exclude">Retro Home</h1></div>              </header><!-- .entry-header -->
              
              <!-- featured image -->
                            
              <div class="entry-content">



              





<!-- END CONTENT -->
@yield('content')
<!-- END CONTENT -->









              
  
              </div><!-- .entry-content -->

                        </article><!-- #post-## -->

                  <div class="pagination-wrap ">
                </div>
      </div> <!-- //primary-content-wrapper -->           </main><!-- #main -->
          </div><!-- #primary -->

           

                    
                    
        </div><!-- zanaya-row -->

                            
    </div><!-- #content-->
    

{{--START Footer --}}
<div id="pre-footer" class="pre-footer  zanaya-footer-reveal  " data-zanaya-content="Pre Footer">
  <div class="container zanaya-section classMark_section_NPSplh" id="section_NPSplh" data-class-marker="classMark_section_NPSplh">
    <div class="zanaya-row clearfix container classMark_row_T9nkb4 text-lg-center" data-row-layout="1|3" id="row_T9nkb4" data-class-marker="classMark_row_T9nkb4">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 zanaya-col">
      <div data-zanaya-element="text-block" class="clearfix">
        <h5 class="classMark_h5_9kFbh6" data-class-marker="classMark_h5_9kFbh6" id="h5_9kFbh6"><b>Important Link</b></h5>
      </div>
      <div data-zanaya-element="text-block" class="clearfix">
        <p class="zanaya-p classMark_p_UO7lP4" data-class-marker="classMark_p_UO7lP4" id="p_UO7lP4">About Us</p>
      </div>
      <div data-zanaya-element="text-block" class="clearfix">
        <p class="zanaya-p classMark_p_2Jq64G" id="p_2Jq64G" data-class-marker="classMark_p_2Jq64G">FAQ</p>
      </div>
      <div data-zanaya-element="text-block" class="clearfix">
        <p class="zanaya-p classMark_p_uMkbqm" id="p_uMkbqm" data-class-marker="classMark_p_uMkbqm">Privacy Policy</p>
      </div>
      <div data-zanaya-element="text-block" class="clearfix">
        <p class="zanaya-p classMark_p_7z0XjH" id="p_7z0XjH" data-class-marker="classMark_p_7z0XjH">Contact Info</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 zanaya-col">
      <div data-zanaya-element="text-block" class="clearfix">
      <h5 class="classMark_h5_0eVTHy" data-class-marker="classMark_h5_0eVTHy" id="h5_0eVTHy">
        <b>Subscribe</b>
      </h5>
    </div>
    <form name="form_3ACqTx" method="post" class="clearfix row-eq zanaya-nested-row zanaya-form paper-form-theme classMark_form_WksF9m" data-row-layout="1|1" data-zanaya-element="form" data-zanaya-element-theme="paper-form-theme" data-class-marker="classMark_form_WksF9m" id="form_WksF9m">
    <div class="col-md-6 col-sm-12 col-xs-12 zanaya-nested-col col-lg-12">
      <div class="zanaya-form-sortable" data-form-element="email">
        <div class="form-group form-group-lg required">
            <label for="form-email" class="control-label sr-only">Email address</label>
            <input type="email" class="form-control zanaya-form-element classMark_input_form-email" id="form-email" name="form-email" placeholder="Your Email address" required="" data-class-marker="classMark_input_form-email">
            <span class="help-block zanaya-form-element hidden">email help</span>  
          </div>
      </div> 
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12 zanaya-nested-col col-lg-12 classMark_nested-column_4cYzr6" id="nested-column_4cYzr6" data-class-marker="classMark_nested-column_4cYzr6"> 
      <div class="zanaya-form-sortable" data-form-element="button">    
        <button value="subscribe" class="btn zanaya-btn button-size-large button-color-inverse button-text-small classMark_button_xhm8aW left-block-lg" data-zanaya-element="button" data-inherit="true" id="button_xhm8aW" data-class-marker="classMark_button_xhm8aW" data-zanaya-submit="submit">Subscribe</button>
      </div> 
    </div>
    </form> 
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 zanaya-col">
    <div data-zanaya-element="text-block" class="clearfix">
      <h5 class="classMark_h5_mKGvOB" data-class-marker="classMark_h5_mKGvOB" id="h5_mKGvOB">
        <b>Contact Us</b>
      </h5>
    </div>
    <div data-zanaya-element="text-block" class="clearfix">
      <p class="zanaya-p classMark_p_PfTTyF" id="p_PfTTyF" data-class-marker="classMark_p_PfTTyF">academy Rood
      <br class="zanaya-br">Feni Sodor, Feni. 3900
      <br class="zanaya-br">Chittagong<br class="zanaya-br">Bangladesh</p>
    </div>
  </div>
</div>
  </div>
</div>
{{--End Footer --}}
<!-- colophon -->
<div id="colophon" class="colophon  zanaya-footer-reveal site-footer zanaya-section-group z-pt-0 z-pb-0"  role="contentinfo" data-zanaya-content="Colophon">
  <div class="container zanaya-row" data-layout="2|3-1|3">   
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-left text-xs-center zanaya-col">
      <p>© Copyright 2019   |  All Rights Reserved  by 
        <a class="copyright-by" href="{{ url('/') }}">  DREAM-IT</a>         
      </p>
    </div>    
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-right text-xs-center zanaya-col">
      <a class="colophon-social-links first" href="#" title="Facebook" target="_blank">
        <i data-zanaya-element="icon" class="fab fa-facebook-f"></i>
      </a>
      <a class="colophon-social-links" href="#" title="Twitter" target="_blank">
        <i data-zanaya-element="icon" class="fab fa-twitter"></i>
      </a>
      <a class="colophon-social-links" href="#" title="Behance" target="_blank">
        <i data-zanaya-element="icon" class="fab fa-behance"></i>
      </a>
      <a class="colophon-social-links" href="#" title="Dribbble" target="_blank">
        <i data-zanaya-element="icon" class="fab fa-dribbble"></i>
      </a>
      <a class="colophon-social-links" href="#" title="LinkedIn" target="_blank">
        <i data-zanaya-element="icon" class="fab fa-linkedin"></i>
      </a>
      <a class="colophon-social-links last" href="#" title="Google Plus" target="_blank">
        <i data-zanaya-element="icon" class="fab fa-google-plus"></i>
      </a>
    </div>
  </div> 
</div>  
<!-- .colophon -->



<div class="zanaya-scroll-top-wrap zanaya-scrolltop right" data-zanaya-element="scroll-to-top" data-inherit="true">
  <div class="zanaya-scroll">
    <i class="zanaya-icon fa fa-angle-up square-border clearfix zanaya-primary-color"></i>
  </div>
</div>


<!-- Menu transition -->
 <div class="transition-wrap ">
  <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
  <defs>
    <lineargradient id="gradient1" x1="0%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%"></stop>
      <stop offset="100%"></stop>
    </lineargradient>
    <lineargradient id="gradient2" x1="0%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%"></stop>
      <stop offset="100%"></stop>
    </lineargradient>
    <lineargradient id="gradient3" x1="0%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%"></stop>
      <stop offset="100%"></stop>
    </lineargradient>
  </defs>
  <path class="shape-overlays__path" d="M 0 0C 5.555555555555555 0 5.555555555555555 0 11.11111111111111 0 C 16.666666666666664 0 16.666666666666664 0 22.22222222222222 0 C 27.77777777777777 0 27.77777777777777 0 33.33333333333333 0 C 38.888888888888886 0 38.888888888888886 0 44.44444444444444 0 C 50 0 50 0 55.55555555555556 0 C 61.1111111111111 0 61.1111111111111 0 66.66666666666666 0 C 72.22222222222223 0 72.22222222222223 0 77.77777777777779 0 C 83.33333333333333 0 83.33333333333333 0 88.88888888888889 0 C 94.44444444444444 0 94.44444444444444 0 100 0 V 0 H 0"></path>
  <path class="shape-overlays__path" d="M 0 0C 5.555555555555555 0 5.555555555555555 0 11.11111111111111 0 C 16.666666666666664 0 16.666666666666664 0 22.22222222222222 0 C 27.77777777777777 0 27.77777777777777 0 33.33333333333333 0 C 38.888888888888886 0 38.888888888888886 0 44.44444444444444 0 C 50 0 50 0 55.55555555555556 0 C 61.1111111111111 0 61.1111111111111 0 66.66666666666666 0 C 72.22222222222223 0 72.22222222222223 0 77.77777777777779 0 C 83.33333333333333 0 83.33333333333333 0 88.88888888888889 0 C 94.44444444444444 0 94.44444444444444 0 100 0 V 0 H 0"></path>
  <path class="shape-overlays__path" d="M 0 0C 5.555555555555555 0 5.555555555555555 0 11.11111111111111 0 C 16.666666666666664 0 16.666666666666664 0 22.22222222222222 0 C 27.77777777777777 0 27.77777777777777 0 33.33333333333333 0 C 38.888888888888886 0 38.888888888888886 0 44.44444444444444 0 C 50 0 50 0 55.55555555555556 0 C 61.1111111111111 0 61.1111111111111 0 66.66666666666666 0 C 72.22222222222223 0 72.22222222222223 0 77.77777777777779 0 C 83.33333333333333 0 83.33333333333333 0 88.88888888888889 0 C 94.44444444444444 0 94.44444444444444 0 100 0 V 0 H 0"></path>
   </svg>
</div>



{{-- File JS --}}
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/page.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/jquery.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/jquery-migrate.min.js') }}'></script>
<!--<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/psnsa.min.js') }}'></script>-->
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/etn.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/jquery.waypoints.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/jquery.inview.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/packery.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/isotope.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/imagesLoaded.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/countup.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/animate-plus.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/reveal.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/parallax.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/TweenMax.2.1.2.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/parallax_background.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/multicarousel.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/flipbox.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/parallax-scroll.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/responsive-tables.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/responsive-pagination.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/anime.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/lazyload.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/base.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/zanaya-utility.min.js') }}'></script>

<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/toastr.min.js') }}'></script>
{{--
<script type='text/javascript' src='{{ asset('asset/fontend/assets/js/google-analytics.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/wp-embed.min.js') }}'></script>--}}
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/lightbox.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/headlines.min.js') }}'></script>
<script type='text/javascript' src='{{asset ('asset/fontend/assets/js/zanaya-text-anime.min.js')}}'></script>
</div>
</body>
</html>
