@extends('layouts.home-layout')

@section('content')
		<!-- START CONTENT -->

<div  id="content" class="site-content container zanaya-section-group z-np "  data-post-layout="-rows-2" data-pagination="splent_pagination" data-zanaya-content="Content">

	<div class="zanaya-row-group"  data-class-marker=&quot;classMark_row_hpupuo&quot;  data-row-layout=&quot;1|1&quot;  >
			
		<div id="primary" class="content-area zanaya-col-group col-lg-12 col-md-12 col-sm-12 col-xs-12 zanaya-np" data-zanaya-content="Post"  >
			<main id="main" class="site-main">
							<div id="primary-content-wrapper">							<article id="post-14468" class="post-14468 page type-page status-publish hentry">
							
							<header class="entry-header hidden">
								<div class="entry-title"><h1 class="z-mt-0 zanaya-style-exclude">Retro Home</h1></div>							</header><!-- .entry-header -->
							
							<!-- featured image -->
														
<div class="entry-content">




	<div class="container zanaya-section text-lg-center classMark_section_XMwRJH animate-plus" id="div_XMwRJH" data-style-captured="true" data-class-marker="classMark_section_XMwRJH" data-animation-when-visible="true" data-animation-repeat="false" data-animation-reset-offscreen="false" data-animations="scaleOut" data-animation-duration="2s" data-animation-delay="0s" data-animation-group="_0" style="">


{{-- Start slider --}}
@include('fontend.slider') 
{{-- End slider --}}



{{-- Start services --}}
@include('fontend.services') 
{{-- End services --}}






{{-- Start about --}}
@include('fontend.about') 
{{-- End about --}}



<!-- ======================Portfolio Section= =========================-->
   

  @include('fontend.portfolio') 


<!-- #portfolio -->





{{-- Start count --}}
	@include('fontend.count') 
{{-- End count --}}


{{-- Start count --}}
	@include('fontend.team') 
{{-- End count --}}

{{-- Start project --}}
@include('fontend.project') 
{{-- End project --}}


</div>
	<!-- .entry-content -->

</article><!-- #post-## -->

<div class="pagination-wrap ">
</div>
</div> <!-- //primary-content-wrapper -->						
</main><!-- #main -->

</div><!-- #primary -->

					 

										
										
</div><!-- zanaya-row -->

														
</div><!-- #content-->
		<!-- END CONTENT -->

@endsection


{{-- Api Token:011e04b3df78a0aa71c26d124e3868b9

JWT Token:
eyJhbGciOiJIUzUxMiJ9.eyJkYXRhIjp7InRva2VuIjoiMDExZTA0YjNkZjc4YTBhYTcxYzI2ZDEyNGUzODY4YjkifX0.TremlqETC1FEE2866Wi-PeSron4i-3yCWU4t1A2EtGfarum6_917mj7nGH17Ix5Jw3zfUL7KfIotGGNX3GnQ3g --}}