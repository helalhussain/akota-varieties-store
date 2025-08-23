

 @extends('layouts.frontend.app')
@section('content')


        <!-- title page -->
            <section class="flat-title-page inner"><div class="overlay"></div>
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
                            <div class="flex wrap-category">
                                <div class="box">
                                    <div class="images"><a href="shop-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/img-box/Category-1.png" alt="images"></a></div>
                                    <div class="content">
                                        <div class="title link-style-6"> <a href="shop-left-sidebar.html">Dried Products</a> </div>
                                        <p>9 Product</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="images"><a href="shop-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/img-box/Category-2.png" alt="images"></a></div>
                                    <div class="content">
                                        <div class="title link-style-6"> <a href="shop-left-sidebar.html">Fresh Meal</a> </div>
                                        <p>4 Product</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="images"><a href="shop-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/img-box/Category-3.png" alt="images"></a></div>
                                    <div class="content">
                                        <div class="title link-style-6"> <a href="shop-left-sidebar.html">Juice</a> </div>
                                        <p>4 Product</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="images"><a href="shop-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/img-box/Category-4.png" alt="images"></a></div>
                                    <div class="content">
                                        <div class="title link-style-6"> <a href="shop-left-sidebar.html">Vegetables</a> </div>
                                        <p>6 Product</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="images"><a href="shop-left-sidebar.html"><img src="{{ asset('frontend') }}/assets/images/img-box/Category-5.png" alt="images"></a></div>
                                    <div class="content">
                                        <div class="title link-style-6"> <a href="shop-left-sidebar.html">Beverages</a> </div>
                                        <p>10 Product</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



     
@endsection


