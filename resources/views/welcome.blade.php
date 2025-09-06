


 @extends('layouts.frontend.app')

@section('content')
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<span class="text-muted">Our Story</span>
				<h2 class="display-5 fw-bold">About Us</h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p><a class="mt-2 btn btn-primary" href="">Learn more</a>
			</div>
			<div class="col-md-6 offset-md-1">
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
				<p class="lead">Ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el Lorem ipsum dolor sit amet,consectetur adipiscing eli ncididunt ullamco laboris nisi ut a Lorem ipsum dolor sit amet,consectetur adipiscing el.</p>
			</div>
		</div>
	</div>
</section>
@include('layouts.frontend.partials.product')
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">


          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

     @foreach ($galleries as $gallery)
       <div class="col-lg-3 col-md-6 col-sm-6 col-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <a href="{{ uploaded_file($gallery->image) }}"
                style="height: 250px" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="{{ uploaded_file($gallery->image) }}" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="#" title="More Details">{{ $gallery->title }}</a></h4>
                  {{-- <p>Lorem ipsum, dolor sit amet consectetur</p> --}}
                </div>
              </div>
            </div><!-- End Portfolio Item -->

     @endforeach


          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->



@include('layouts.frontend.partials.staff')




  @endsection
