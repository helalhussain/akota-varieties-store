
@extends('layouts.frontend.app')

@section('content')


            <!-- title page -->
            <section class="flat-title-page inner"><div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading center">
                                <h2 class="heading ">About Us</h2>
                                <div class="title-inner link-style-3">
                                    <h5 class=""><a class="home fw-4" href="index.html">Home</a><span>About Us</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <section class="tf-section flat-service-details">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <article class="article">
                                <div class="post">
                                    <div class="mx-auto image-1">
                                        <img src="{{ asset('frontend') }}/assets/images/img-box/service-details-1.jpg" alt="images">
                                    </div>
                                    <div class="title-1 title-36 fw-7">  </div>
                                    <p class="text-1">
                                        {!! $aboutus->about_us !!}
                                         </p>


                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>





                 <!-- flat brand -->
                 {{-- <section class="flat-brand page">
                    <div class="container ">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="brand-slider">
                                    <div class="swiper-container carousel-3">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/brand-1.jpg" alt="images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo active">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/brand-2.jpg" alt="images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/brand-1.jpg" alt="images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/brand-2.jpg" alt="images">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="slogan-logo">
                                                    <a href="#">
                                                        <img src="{{ asset('frontend') }}/assets/images/icon/brand-2.jpg" alt="images">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

  @endsection
