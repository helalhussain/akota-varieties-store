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
                        @foreach ($products as $product)
                        <div class="box">
                            <div class="images">

                                    <img src="{{ asset('frontend') }}/assets/images/img-box/Category-1.png"
                                        alt="images">

                            </div>
                            <div class="content">
                                <div class="title link-style-6">
                                    <h4>{{ $product->name }}</h4>
                                </div>
                                {{-- <p>9 Product</p> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <br/><br/>
                    <div class="buttons center ">
                        <a class="blob-btn btn-style" href="{{ route('product.index') }}">
                            View More
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
    </section>
