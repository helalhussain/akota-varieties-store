           <!-- Footer -->
           <footer id="footer" class="clearfix page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="widget widget-logo">
                            <div class="flat-box">
                                <div class="logo-footer style" id="logo-footer">
                                    <a href="index.html">
                                        <img id="logo_footer" src="{{ asset('frontend') }}/assets/images/logo/logo-footer.png" alt="img" width="169" height="42">
                                    </a>
                                </div>
                                <p class="sub-widget-logo lh-28">
                                    We are a trusted grocery store offering fresh, quality
                                     products at fair prices. Our goal is to serve the
                                     community with convenience, care, and satisfaction.
                                  </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-8 col-8">
                        <div class="widget widget-menu style-2 ">
                            <div class="title-widget fw-6">Pages</div>
                            <ul class="box-menu link-style-4">
                                <li><a href="{{ route('home.page') }}">Home</a></li>
                                <li><a href="{{ route('product.index') }}">Product</a></li>
                                <li><a href="{{ route('about.index') }}">About Us</a></li>
                                <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                                        <div class="col-lg-2 col-md-8 col-8">
                        <div class="widget widget-menu style-2 ">
                            <div class="title-widget fw-6">Services</div>
                            <ul class="box-menu link-style-4">
                                <li><a href="#">Retail sell</a></li>
                                <li><a href="#">Wholesale</a></li>
                                <li><a href="#">Electronic</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-2 col-md-3 col-4">
                        <div class="widget widget-menu style-3 ">
                            <ul class="box-menu link-style-4">
                                <li><a href="shop-grid.html"> Shop Grid</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="blog-category.html">Latest News</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="faq.html">Our FAQ</a></li>
                                <li><a href="contact.html">Blog Details</a></li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="widget widget-menu widget-logo style-4">
                            <div class="title-widget fw-6">Contact Us</div>
                           <div class="flat-box">


                                <h6 class="">Address: <span class="fw-4"> {{ $setting->address }} </span> </h6>
                                <h6 class="link-style-4">Email: <a href="info:comapny@hasthemes.com " class="fw-4">{{ $setting->email }}</a> </h6>
                                <h6 class="link-style-4">Call us: <a href="tel:012345678" class="fw-4">{{ $setting->contact_no }}</a> </h6>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div id="scroll-top" class="go-top"><h5 class="text-color-3"><a class=""></a> Go To Top</h5> </div>
            </footer><!-- /#footer -->
