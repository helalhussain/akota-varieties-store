 <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#" class="logo d-flex align-items-center">

            <img src="{{ uploaded_file($logoIcon->logo) }}" alt="">
          </a>
          <p>
            {{ __('footer.footer_about') }}</p>
          <div class="mt-4 social-links d-flex">

          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>{{ __('footer.page') }}</h4>
          <ul>
            <li><a href="{{ route('home.page') }}">{{ __('header.home') }}</a></li>
            <li><a href="{{ route('about.index') }}">{{ __('header.aboutus') }}</a></li>

            <li><a href="{{ route('contact.index') }}">{{ __('header.contactus') }}</a></li>

          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
            <h4>{{ __('footer.items') }}</h4>
          <ul>
            <li><a href="#">wholesalling</a></li>
            <li><a href="#">Retail</a></li>
            <li><a href="#">Electronics</a></li>

          </ul>
        </div>

        <div class="text-center col-lg-3 col-md-12 footer-contact text-md-start">
          <h4>{{ __('footer.contactus') }}</h4>
          <p></p>

          <p><strong>{{ __('footer.address') }}:</strong> <span>{{ $setting->address }}</span></p>
          <p><strong>{{ __('footer.phone') }}:</strong> <span>{{ $setting->contact_no }}</span></p>
          <p><strong>{{ __('footer.email') }}:</strong> <span>{{ $setting->email }}</span></p>
        </div>

      </div>
    </div>

    <div class="container mt-4 text-center copyright">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $setting->site_name }}</strong> <span>All Rights Reserved</span></p>
      <div class="credits">

        Developed by <a href="https://helalhussain.pro/" class="text-light"><strong>Helal Hussain</strong></a>
      </div>
    </div>

  </footer>


