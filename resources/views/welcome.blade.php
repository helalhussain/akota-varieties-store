@extends('layouts.frontend.app')
@section('content')
    <!-- slider -->
    <section class="slider home">
        <div class="swiper-container mainslider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="flat-slider">
                            <div class="img-slider">
                                <img class="img-item" src="{{ asset('frontend') }}/assets/images/slider/slider-01.jpg"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="content">
                                    <div class="heading">
                                        <div class="sub-title">Wellcome to Vikan</div>
                                        <h1>High Quality Fresh
                                            Organic Products.</h1>
                                        <h3>25 Years of experience in agriculture farming</h3>
                                    </div>
                                    <div class="flat-bt-slider">
                                        <div class="sl-button buttons">
                                            <a class="blob-btn btn-1 btn-style" href="shop-grid.html">
                                                Shop Organic
                                                <span class="blob-btn__inner">
                                                    <span class="blob-btn__blobs">
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="flat-slider">
                            <div class="img-slider">
                                <img class="img-item" src="{{ asset('frontend') }}/assets/images/slider/slider-01.jpg"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="content">
                                    <div class="heading">
                                        <div class="sub-title">Wellcome to Vikan</div>
                                        <h1>High Quality Fresh
                                            Organic Products.</h1>
                                        <h3>25 Years of experience in agriculture farming</h3>
                                    </div>
                                    <div class="flat-bt-slider">
                                        <div class="sl-button buttons">
                                            <a class="blob-btn btn-1 btn-style" href="shop-grid.html">
                                                Shop Organic
                                                <span class="blob-btn__inner">
                                                    <span class="blob-btn__blobs">
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="slider-item">
                        <div class="flat-slider">
                            <div class="img-slider">
                                <img class="img-item" src="{{ asset('frontend') }}/assets/images/slider/slider-01.jpg"
                                    alt="">
                            </div>
                            <div class="container">
                                <div class="content">
                                    <div class="heading">
                                        <div class="sub-title">Wellcome to Vikan</div>
                                        <h1>High Quality Fresh
                                            Organic Products.</h1>
                                        <h3>25 Years of experience in agriculture farming</h3>
                                    </div>
                                    <div class="flat-bt-slider">
                                        <div class="sl-button buttons">
                                            <a class="blob-btn btn-1 btn-style" href="shop-grid.html">
                                                Shop Organic
                                                <span class="blob-btn__inner">
                                                    <span class="blob-btn__blobs">
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                        <span class="blob-btn__blob"></span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination2"> </div>
        <div class="button-custom-slider">
            <div class="swiper-button-next2 button-slide-custom-next">next <i class="far fa-arrow-circle-right"></i></div>
            <div class="swiper-button-prev2 button-slide-custom-prev">prev </div>
        </div>
    </section>

    <!--Item and products--->
    @include('layouts.frontend.partials.product')

    <section class="flat-vegetables page">
        <div class="container">
            <div class="row">
                       <div class="col-lg-12 col-md-12">
                    <div class="heading-section center pt-5">
                        {{-- <h5>Organic Products</h5> --}}
                        <br/><br/>
                        <h2 class="pt-5"> Our Staff</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="wrap-vegetables flex">
                        @foreach ($staffs as $staff)
                            <div class="box box-hv">
                                <div class="images m-5" style="">
                                    <img src="{{ uploaded_file($staff->image) }}" alt="images">
                                </div>
                                <div class="content">

                                    <h3 class="link-style-6"><a href="product-details.html">{{ $staff->name }}</a> </h3>
                                    <div class="money">
                                        <span class="">{{ $staff->designation }}</span>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
