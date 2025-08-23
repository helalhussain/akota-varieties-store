            <header id="header_main" class="header_1 js-header">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div class="relative wrap-box">
                                    <div id="site-logo" class="clearfix">
                                        <div id="site-logo-inner">
                                            <a href="/" rel="home" class="main-logo">
                                                <img id="logo_header"
                                                    src="{{ asset('frontend') }}/assets/images/logo/logo.png"
                                                    alt="img" width="169" height="42">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            {{-- <li class="menu-item menu-item-has-children current-menu-item">
                                                <a href="index.html">Home</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item current-item"><a href="index.html">Home 01</a>
                                                    </li>
                                                    <li class="menu-item"><a href="home2.html">Home 02</a></li>
                                                    <li class="menu-item"><a href="home3.html">Home 03</a></li>
                                                </ul>
                                            </li> --}}
                                            <!-- menu-item-has-children -->
                                            <li class="menu-item current-menu-item">
                                                <a href="/">Home </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ route('product.index') }}">Product </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ route('about.index') }}">About Us </a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="{{ route('contact.index') }}">Contact </a>
                                            </li>

                                        </ul>
                                    </nav><!-- /#main-nav -->
                                    {{-- <div class="flex flat-button-top">
                                        <div class="flex header-search flat-show-search" id="s1">
                                            <a href="#" class="show-search header-search-trigger">
                                                <span class="icon-Vector"><i class="far fa-search"></i></span>
                                            </a>
                                            <div class="cart-box">
                                                <a href="#" class="cart"><i class="fas fa-shopping-basket"></i>
                                                </a>
                                                <a href="#" class="cart-contents"><span>2</span> </a>
                                            </div>
                                            <a href="#" class=""><i class="fas fa-user"></i></a>
                                            <div class="top-search">
                                                <form action="#" method="get" role="search" class="search-form">
                                                    <input type="search" id="s" class="search-field"
                                                        placeholder="Search..." value="" name="s"
                                                        title="Search for" required="">
                                                    <button class="search search-submit" type="submit"
                                                        title="Search">
                                                        <i class="far fa-search"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="sc-btn-top" id="site-header">
                                            <div class="buttons">
                                                <a class="blob-btn btn-style" href="contact.html">
                                                    Get A Quote
                                                    <span class="blob-btn__inner">
                                                        <span class="blob-btn__blobs">
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <br />
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
