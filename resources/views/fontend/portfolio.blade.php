<link href="asset/fontend/assets/portfolio/lightbox/css/lightbox.min.css" rel="stylesheet"> 

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
<style type="text/css">

  /*--------------------------------------------------------------
# Sections
--------------------------------------------------------------*/
/* Sections Header
--------------------------------*/
.section-header h3 {
  font-size: 32px;
  color: #111;
  text-transform: uppercase;
  text-align: center;
  font-weight: 700;
  position: relative;
  padding-bottom: 15px;
}

.section-header h3::before {
  content: '';
  position: absolute;
  display: block;
  width: 120px;
  height: 1px;
  background: #ddd;
  bottom: 1px;
  left: calc(50% - 60px);
}

.section-header h3::after {
  content: '';
  position: absolute;
  display: block;
  width: 40px;
  height: 3px;
  background: #f6732e;
  bottom: 0;
  left: calc(50% - 20px);
}

.section-header p {
  text-align: center;
  padding-bottom: 30px;
  color: #333;
}

/* Section with background
--------------------------------*/
.section-bg {
  background: #f7f7f7;
}

  
/* Portfolio Section
--------------------------------*/
#portfolio {
  padding: 60px 0;
}

#portfolio #portfolio-flters {
  padding: 0;
  margin: 5px 0 35px 0;
  list-style: none;
  text-align: center;
}

#portfolio #portfolio-flters li {
  cursor: pointer;
  margin: 15px 15px 15px 0;
  display: inline-block;
  padding: 10px 20px;
  font-size: 12px;
  line-height: 20px;
  color: #666666;
  border-radius: 4px;
  text-transform: uppercase;
  background: #fff;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

#portfolio #portfolio-flters li:hover, #portfolio #portfolio-flters li.filter-active {
  background: #f6732e;
  color: #fff;
}

#portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

#portfolio .portfolio-wrap {
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  transition: 0.3s;
}

#portfolio .portfolio-wrap:hover {
  box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.16);
}

#portfolio .portfolio-item {
  position: relative;
  height: 360px;
  overflow: hidden;
}

#portfolio .portfolio-item figure {
  background: #000;
  overflow: hidden;
  height: 240px;
  position: relative;
  border-radius: 4px 4px 0 0;
  margin: 0;
}
#portfolio .portfolio-item figure img{
    height: 100%;
    width: 100%;
}
#portfolio .portfolio-item figure:hover img {
  opacity: 0.4;
  transition: 0.3s;
}

#portfolio .portfolio-item figure .link-preview, #portfolio .portfolio-item figure .link-details {
  position: absolute;
  display: inline-block;
  opacity: 0;
  line-height: 1;
  text-align: center;
  width: 36px;
  height: 36px;
  background: #fff;
  border-radius: 50%;
  transition: 0.2s linear;
}

#portfolio .portfolio-item figure .link-preview i, #portfolio .portfolio-item figure .link-details i {
  padding-top: 6px;
  font-size: 22px;
  color: #333;
}

#portfolio .portfolio-item figure .link-preview:hover, #portfolio .portfolio-item figure .link-details:hover {
  background: #18d26e;
}

#portfolio .portfolio-item figure .link-preview:hover i, #portfolio .portfolio-item figure .link-details:hover i {
  color: #fff;
}

#portfolio .portfolio-item figure .link-preview {
  left: calc(50% - 38px);
  top: calc(50% - 18px);
}

#portfolio .portfolio-item figure .link-details {
  right: calc(50% - 38px);
  top: calc(50% - 18px);
}

#portfolio .portfolio-item figure:hover .link-preview {
  opacity: 1;
  left: calc(50% - 44px);
}

#portfolio .portfolio-item figure:hover .link-details {
  opacity: 1;
  right: calc(50% - 44px);
}

#portfolio .portfolio-item .portfolio-info {
  background: #fff;
  text-align: center;
  padding: 30px;
  height: 90px;
  border-radius: 0 0 3px 3px;
}

#portfolio .portfolio-item .portfolio-info h4 {
  font-size: 18px;
  line-height: 1px;
  font-weight: 700;
  margin-bottom: 18px;
  padding-bottom: 0;
}

#portfolio .portfolio-item .portfolio-info h4 a {
  color: #333;
}

#portfolio .portfolio-item .portfolio-info h4 a:hover {
  color: #18d26e;
}

#portfolio .portfolio-item .portfolio-info p {
  padding: 0;
  margin: 0;
  color: #b8b8b8;
  font-weight: 500;
  font-size: 14px;
  text-transform: uppercase;
}
.clearfix{
    text-align: center;
}
</style>
 



   <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <div data-zanaya-element="text-block" class="clearfix">
				<h2 class="classMark_h2_BwRE4X" data-class-marker="classMark_h2_BwRE4X" id="h2_7WTsWP">Recent&nbsp;
					<span class="texteditor-inline-color classMark_span_lpONZO" id="span_rCpIU7" data-class-marker="classMark_span_lpONZO">Projects</span>
				</h2>
			</div>
			<div data-zanaya-element="text-block" class="clearfix">
				<p class="zanaya-p classMark_p_TGyfX5" id="p_3boy62" data-class-marker="classMark_p_TGyfX5">Some of our projects.<br class="zanaya-br">
				</p>
			</div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @php
              $Category=App\Category::where('publication_status',1)->get();
              @endphp
              @foreach($Category as $Categorys)
              <li data-filter=".{{"cat".$Categorys->id }}">{{ $Categorys->title }}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
        @php
          $Gallery=App\Gallery::where('publication_status',1)->get();
        @endphp
        @foreach($Gallery as $Gallerys)

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 portfolio-item filter-app {{"cat".$Gallerys->cat_id }} fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ URL::to($Gallerys->images) }}" class="img-responsive" alt="">
                <a href="{{ URL::to($Gallerys->images) }}" target="_blank" data-lightbox="portfolio" data-title="{{ $Gallerys->title }}" class="link-preview" title="Preview"><i class="far fa-eye"></i></a>
                <a href="@php echo $Gallerys->description; @endphp" target="_blank" class="link-details" title="More Details"><i class="fas fa-external-link-alt"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="@php echo $Gallerys->description; @endphp" target="_blank">{{ $Gallerys->title }}</a></h4>
                {{--<p>@php echo $Gallerys->description; @endphp</p>--}}
              </div>
            </div>
          </div>
         @endforeach

        </div>

      </div>
    </section><!-- #portfolio -->



   
  




  <!-- JavaScript Libraries -->
  <script src="asset/fontend/assets/portfolio/jquery/jquery.min.js"></script>
  <script src="asset/fontend/assets/portfolio/isotope.pkgd.min.js"></script>
  <script src="asset/fontend/assets/portfolio/lightbox/js/lightbox.min.js"></script>
 

  <!-- Template Main Javascript File -->
  <script>
    jQuery(document).ready(function( $ ) {

  


  // Porfolio isotope and filter
  var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-item',
    layoutMode: 'fitRows'
  });

  $('#portfolio-flters li').on( 'click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    portfolioIsotope.isotope({ filter: $(this).data('filter') });
  });

  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
    }
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

});

  </script>

