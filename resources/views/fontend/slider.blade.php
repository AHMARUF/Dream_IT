
<div id="slider_EpkcT9" class="carousel zanaya-carousel zanaya-parallax-slider viewport-height skip-collision-shift theme2 clone-exclude-id zanaya-kb-wrapper classMark_slider_UfyPfa zanaya-elastic" data-ride="carousel" data-interval="5000" data-pause="hover" data-wrap="true" data-zanaya-element="slider" data-zanaya-element-theme="theme2" data-class-marker="classMark_slider_UfyPfa">



<ol class="carousel-indicators bottom center hidden">
 	<li data-target="#slider_EpkcT9" data-slide-to="0" class="zanaya-style-exclude active"></li>
 	<li data-target="#slider_EpkcT9" data-slide-to="1" class="zanaya-style-exclude"></li>
</ol>
<!-- Arrows  -->

<a class="zanaya-carousel-control zanaya-style-exclude hover-view" href="#slider_EpkcT9" data-slide="prev">
<span class="carousel-control-icon center left-side fa fa-chevron-left zanaya-style-exclude" id="i_rm7c06"></span>
</a>

<a class="zanaya-carousel-control zanaya-style-exclude hover-view" href="#slider_EpkcT9" data-slide="next">
<span class="carousel-control-icon center right-side fa fa-chevron-right zanaya-style-exclude" id="i_aNTGxN"></span>
</a>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">

@php
	$Slider = App\Slider::where('publication_status', 1)->get();
@endphp

@foreach($Slider as $key=>$Sliders)
@if(++$key==1)
<div class="carousel-item item active">
@else
<div class="carousel-item item">
@endif
<div class="item-full-screen">


{{-- <div class="carousel-item item">
<div class="item-full-screen"> --}}


                   <!--
<div class="overlay"></div>
-->
<div class="parallax-slide zanaya-parallax zanaya-background zanaya-moving-parallax" data-width="1920" data-height="1275" id="div_odGlsw_{{++$key}}" data-style-captured="true" data-parallax-bg-image="linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(&quot;{{ URL::to($Sliders->images) }}&quot;)"></div>
<div class="container zanaya-row zanaya-vertical-horizontal-align carousel-item-content classMark_row_hpupuo" data-row-layout="1|1" id="row_hpupuo" data-class-marker="classMark_row_hpupuo">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-col">
<div data-zanaya-element="image" class="clearfix">
    <img class="img-responsive pull-center-lg zanaya-keep-src animate-plus classMark_img_fPhrPQ" src="{{ asset('asset/favicon.ico') }}" alt="image description" id="img_fPhrPQ" data-class-marker="classMark_img_fPhrPQ" data-attachment-id="14158" data-animation-when-visible="true" data-animation-repeat="false" data-animation-reset-offscreen="false" data-animations="zoomIn" data-animation-duration="1s" data-animation-delay="0s" data-animation-group="_1" style=""></div>
<button class="btn zanaya-btn button-size-large button-text-small button-color-primary clearfix button-shape-sharp animate-plus classMark_button_0hIPH4" data-zanaya-element="button" id="button_0hIPH4" data-class-marker="classMark_button_0hIPH4" data-animation-when-visible="true" data-animation-repeat="false" data-animation-reset-offscreen="false" data-animations="fadeInUpSmall" data-animation-duration="1s" data-animation-delay="1s" data-animation-group="_2" style="">purchase
</button>

</div>
</div>
</div>
</div>


@endforeach

</div>




</div>

</div>