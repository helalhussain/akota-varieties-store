{{-- @include('layouts.frontend.partials.style') --}}

    <!-- Begin page -->


   {{-- @include('layouts.frontend.partials.sidebar') --}}

{{-- @yield('content') --}}

{{-- @include('layouts.frontend.partials.footer') --}}
        <!-- end main content-->

    {{-- </div> --}}
    <!-- END layout-wrapper -->

    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    {{-- <div class="rightbar-overlay"></div> --}}

{{-- @include('layouts.frontend.partials.script') --}}


@include('layouts.frontend.partials.style')

  @include('layouts.frontend.partials.header')

  <main class="main">
@yield('content')
    <!-- Hero Section -->
   

  </main>
@include('layouts.frontend.partials.footer')


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

@include('layouts.frontend.partials.script')
