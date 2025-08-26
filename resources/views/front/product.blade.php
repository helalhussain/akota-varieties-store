@extends('layouts.frontend.app')
@section('content')
    <!-- title page -->
    <section class="flat-title-page inner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading center">
                        <h2 class="heading">Products</h2>
                        <div class="title-inner link-style-3">
                            <h5 class=""><a class="home fw-4" href="/">Home</a><span>Products</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Item and products--->
    <section class="tf-section flat-category page2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-section center">
                        {{-- <h5>Organic Products</h5> --}}
                        <h2> Products</h2>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="flex wrap-category ">
                        @foreach ($products as $product)
                            <div class="box" style="padding: 1px">
                                <div class="images">
                                    <img src="{{ uploaded_file($product->image) }}" alt="images">
                                </div>
                                <div class="content">
                                    <div class="title link-style-5">
                                        <h4>{{ $product->name }}</h4>
                                    </div>
                                    <p class="" style="margin-bottom: 10px!important;">{{ $product->brand }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
