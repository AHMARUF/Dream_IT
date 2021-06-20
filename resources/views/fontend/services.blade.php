
<div class="container zanaya-section zanaya-background classMark_section_IJCfJZ" id="div_3WgDK3" data-class-marker="classMark_section_IJCfJZ">

<div class="zanaya-row clearfix container classMark_row_wxBYca text-lg-center" data-row-layout="1|3" id="div_i2Dbro" data-class-marker="classMark_row_wxBYca">

@php 
	$Service = App\Service::where('publication_status', 1)->get();
@endphp

@foreach($Service as $Services)

<div class="col-xs-12 zanaya-col classMark_column_FHcQ0A col-lg-4 col-md-4 col-sm-4" id="div_F5EUPV" data-class-marker="classMark_column_FHcQ0A" >
<div class="clearfix zanaya-inner-row" data-row-layout="1|1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-inner-col classMark_inner-column_9xbgAy" id="div_VjySN3" data-class-marker="classMark_inner-column_9xbgAy" >

	<img src="{{ URL::to($Services->images) }}" height="7
	0" width="70" style="border: 1px solid #158752; border-radius: 50%;">

						{{-- <i class="zanaya-icon clearfix zanaya-primary-color icon-basic icon-basic-alarm hidden-border lg classMark_icon_m94dip" data-zanaya-element="icon" id="i_SfciEG" data-class-marker="classMark_icon_m94dip"></i> --}}
</div>
</div>


<div class="clearfix zanaya-inner-row" data-row-layout="1|1">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-inner-col">
<div data-zanaya-element="text-block" class="clearfix">
<h4 id="h4_8V907A" class="classMark_h4_BH2N7E" data-class-marker="classMark_h4_BH2N7E">{{ $Services->title }}</h4>
</div>
<div data-zanaya-element="image" class="clearfix">
							<img class="img-responsive pull-center-lg zanaya-keep-src classMark_img_zKtwuS" src="https://retro.nouvellothemes.com/wp-content/uploads/2020/01/spacer.png" alt="image description" id="img_R6DnKP" data-class-marker="classMark_img_zKtwuS" data-attachment-id="14204"></div>
<div data-zanaya-element="text-block" class="clearfix">
<p class="zanaya-p classMark_p_LVivI8" id="p_dwlgYi" data-class-marker="classMark_p_LVivI8">
	@php
		echo $Services->description;
	@endphp
</p>
</div>
<div data-zanaya-element="text-block" class="clearfix">
<p class="zanaya-p classMark_p_JfpY3y" id="p_UGdARA" data-class-marker="classMark_p_JfpY3y"></p>
</div>
</div>
</div>
</div>

@endforeach

</div>

</div>
