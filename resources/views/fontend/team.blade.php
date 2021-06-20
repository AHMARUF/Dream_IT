
<div class="container zanaya-section zanaya-background slr__team-7_div classMark_section_85ybw9" data-width="558" data-height="235" data-parallax-bg-size="contain" id="div_85ybw9" data-class-marker="classMark_section_85ybw9">
<div class="zanaya-row clearfix container" data-row-layout="1|1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-col text-lg-center">
<div data-zanaya-element="text-block" class="clearfix">
<h2 id="h2_4cneZW" class="classMark_h2_wteEtG" data-class-marker="classMark_h2_wteEtG">Team <span class="texteditor-inline-color classMark_span_jihYtz" id="span_lov5xK" data-class-marker="classMark_span_jihYtz">Members</span></h2>
</div>
</div>
</div>
<div class="zanaya-row clearfix container slr__team-7_row z-mb-0 classMark_row_cReWp4" data-row-layout="1|1" id="div_07nel0" data-class-marker="classMark_row_cReWp4">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-col text-lg-center slr__team-7_col classMark_column_Qi7Eiy" id="div_6FYS3t" data-class-marker="classMark_column_Qi7Eiy">
<div data-zanaya-element="text-block" class="clearfix">
<!--<p class="classMark_p_izjpNo" id="p_a3UiVo" data-class-marker="classMark_p_izjpNo">Amet facilisis magna etiam tempor orci eu lobortis elementum <br class="zanaya-br">
nibharcu dictum varius duis at consectetur lorem donec</p>-->


</div>
<div data-zanaya-element="image" class="clearfix">
					<img class="img-responsive pull-center-lg zanaya-keep-src classMark_img_c832kM" src="https://retro.nouvellothemes.com/wp-content/uploads/2020/01/spacer.png" alt="image description" id="img_DiFFeg" data-class-marker="classMark_img_c832kM" data-attachment-id="14204"></div>
</div>
</div>
<div class="zanaya-row clearfix container classMark_row_rPKLm6" data-row-layout="1|4" id="row_rPKLm6" data-class-marker="classMark_row_rPKLm6">

@php 
	$head = App\Teams::where('head', 1)->where('publication_status', 1)->get();
@endphp

@foreach($head as $heads)
<div class="col-lg-3 col-md-3 col-xs-12 zanaya-col slr__team-7_col_2 col-sm-6">
<div data-zanaya-element="gallery" class="clearfix zanaya-hoverable slr__team-7_gallery classMark_gallery_y4U9S6" data-zanaya-element-theme="zanaya-hoverable" data-class-marker="classMark_gallery_y4U9S6" id="div_Eo2e6g">
<div class="zanaya-gallery-item pull-center-lg zanaya-hover-blur classMark_div_b76Ong" id="div_y0u1Rk" data-class-marker="classMark_div_b76Ong">
						<img class="img-responsive pull-center-lg zanaya-keep-src slr__team-7_img classMark_img_7oPTMn" src="{{ URL::to($heads->images) }}" alt="image description" data-width="500" data-height="500" id="img_EYiYVG" data-class-marker="classMark_img_7oPTMn" data-attachment-id="14220" style="height: 150px; width: 150px;">
<div class="zanaya-caption-wrap caption-vertical-center">
<div class="zanaya-caption">
<h3 class="slr__team-7_h3">+</h3>
</div>
</div>
</div>
</div>

<div class="clearfix zanaya-inner-row" data-row-layout="1|1">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-inner-col text-lg-center">
	<div data-zanaya-element="text-block" class="clearfix">
		<h6 class="zanaya-uppercase z-mb-0" data-custom-classes="zanaya-uppercase">{{ $heads->name }}</h6>
	</div>
	<div data-zanaya-element="text-block" class="clearfix">
		<small class="zanaya-primary-color" data-custom-classes="zanaya-primary-color">{{ $heads->skill }}</small>
	</div>
<a href="{{ $heads->facebook }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-facebook-f z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_oq0A10"></i></a>


<a href="{{ $heads->instagram }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-instagram z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_BccvJH"></i></a>
  

<a href="{{ $heads->twitter }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-twitter z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_TAFCF2"></i></a>
  

<a href="mailto:{{$heads->mail }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color far fa-envelope slr__team-7_icon" data-zanaya-element="icon" id="i_5SPSgs"></i></a>

		</div>
	</div>
</div>
@endforeach

@php 
	$head = App\Teams::where('head',NULL)->where('publication_status', 1)->get();
@endphp

@foreach($head as $heads)
<div class="col-lg-3 col-md-3 col-xs-12 zanaya-col slr__team-7_col_2 col-sm-6">
<div data-zanaya-element="gallery" class="clearfix zanaya-hoverable slr__team-7_gallery classMark_gallery_y4U9S6" data-zanaya-element-theme="zanaya-hoverable" data-class-marker="classMark_gallery_y4U9S6" id="div_Eo2e6g">
<div class="zanaya-gallery-item pull-center-lg zanaya-hover-blur classMark_div_b76Ong" id="div_y0u1Rk" data-class-marker="classMark_div_b76Ong">
						<img class="img-responsive pull-center-lg zanaya-keep-src slr__team-7_img classMark_img_7oPTMn" src="{{ URL::to($heads->images) }}" alt="image description" data-width="500" data-height="500" id="img_EYiYVG" data-class-marker="classMark_img_7oPTMn" data-attachment-id="14220" style="height: 150px; width: 150px;">
<div class="zanaya-caption-wrap caption-vertical-center">
<div class="zanaya-caption">
<h3 class="slr__team-7_h3">+</h3>
</div>
</div>
</div>
</div>

<div class="clearfix zanaya-inner-row" data-row-layout="1|1">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-inner-col text-lg-center">
	<div data-zanaya-element="text-block" class="clearfix">
		<h6 class="zanaya-uppercase z-mb-0" data-custom-classes="zanaya-uppercase">{{ $heads->name }}</h6>
	</div>
	<div data-zanaya-element="text-block" class="clearfix">
		<small class="zanaya-primary-color" data-custom-classes="zanaya-primary-color">{{ $heads->skill }}</small>
	</div>
<a href="{{ $heads->facebook }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-facebook-f z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_oq0A10"></i></a>


<a href="{{ $heads->instagram }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-instagram z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_BccvJH"></i></a>
  

<a href="{{ $heads->twitter }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-twitter z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_TAFCF2"></i></a>
  

<a href="mailto:{{$heads->mail }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color far fa-envelope slr__team-7_icon" data-zanaya-element="icon" id="i_5SPSgs"></i></a>

		</div>
	</div>
</div>

@endforeach
@php 
	$head = App\Teams::where('head',0)->where('publication_status', 1)->get();
@endphp

@foreach($head as $heads)
<div class="col-lg-3 col-md-3 col-xs-12 zanaya-col slr__team-7_col_2 col-sm-6">
<div data-zanaya-element="gallery" class="clearfix zanaya-hoverable slr__team-7_gallery classMark_gallery_y4U9S6" data-zanaya-element-theme="zanaya-hoverable" data-class-marker="classMark_gallery_y4U9S6" id="div_Eo2e6g">
<div class="zanaya-gallery-item pull-center-lg zanaya-hover-blur classMark_div_b76Ong" id="div_y0u1Rk" data-class-marker="classMark_div_b76Ong">
						<img class="img-responsive pull-center-lg zanaya-keep-src slr__team-7_img classMark_img_7oPTMn" src="{{ URL::to($heads->images) }}" alt="image description" data-width="500" data-height="500" id="img_EYiYVG" data-class-marker="classMark_img_7oPTMn" data-attachment-id="14220" style="height: 150px; width: 150px;">
<div class="zanaya-caption-wrap caption-vertical-center">
<div class="zanaya-caption">
<h3 class="slr__team-7_h3">+</h3>
</div>
</div>
</div>
</div>

<div class="clearfix zanaya-inner-row" data-row-layout="1|1">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-inner-col text-lg-center">
	<div data-zanaya-element="text-block" class="clearfix">
		<h6 class="zanaya-uppercase z-mb-0" data-custom-classes="zanaya-uppercase">{{ $heads->name }}</h6>
	</div>
	<div data-zanaya-element="text-block" class="clearfix">
		<small class="zanaya-primary-color" data-custom-classes="zanaya-primary-color">{{ $heads->skill }}</small>
	</div>
<a href="{{ $heads->facebook }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-facebook-f z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_oq0A10"></i></a>


<a href="{{ $heads->instagram }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-instagram z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_BccvJH"></i></a>
  

<a href="{{ $heads->twitter }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color fab fa-twitter z-mr-1 slr__team-7_icon" data-zanaya-element="icon" id="i_TAFCF2"></i></a>
  

<a href="mailto:{{$heads->mail }}"><i class="zanaya-icon lg circle-border clearfix zanaya-primary-color far fa-envelope slr__team-7_icon" data-zanaya-element="icon" id="i_5SPSgs"></i></a>

		</div>
	</div>
</div>
@endforeach
</div>
</div>
							
	