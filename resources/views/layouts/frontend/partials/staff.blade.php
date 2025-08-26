    <!-- Team Section -->
    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Staff</h2>
        {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">



   @foreach ($staffs as $staff)
   <div class="mx-auto col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
    <div class="shadow-lg member">
      <img src="{{ uploaded_file($staff->image) }}" style=" width:100%; margin: -1px -1px 22px -1px;" class="p-2 img-fluid img-thumbnai" alt="">
      <div class="member-content">
        <h4 class="">{{ $staff->name }}</h4>
        <h5 class="">{{ $staff->designation }}</h5>
        {{-- <p>
          Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
        </p> --}}
        {{-- <div class="social">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div> --}}
      </div>
    </div>
  </div><!-- End Team Member -->


   @endforeach

        </div>

      </div>

    </section><!-- /Team Section -->
