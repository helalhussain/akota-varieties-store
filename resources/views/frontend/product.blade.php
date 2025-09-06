


 @extends('layouts.frontend.app')

@section('content')

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Products</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

            @foreach ($products as $product)
          <div class="col-lg-2 col-md-6" style="padding:7px;" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative"
            style="padding:5px!important; border-radius:22px;">

              <img style="width:95%; height:55%" src="{{ uploaded_file($product->image) }}" alt="">
              <h5>{{ $product->name }}</h5>
              <p style="color:black">{{ $product->brand }}</p>
            </div>
          </div><!-- End Service Item -->
            @endforeach
<!-- Items--->

<!--End Item -->


        </div>

      </div>

    </section><!-- /Services Section -->





  @endsection
