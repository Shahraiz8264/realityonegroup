    <!-- FOOTER SECTION BEGIN -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            @include('sections.footer-logo')
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            @include('sections.footer-linksv1')
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            @include('sections.footer-links2')
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="footer-links-address">
              <h5>{{ __('lang.contact') }}</h5>
              @php 
                $Contacts = config('site_config.contacts');
            @endphp
            <ul>
                     <li><a href="tel:{{ $Contacts['phone'][0] }}"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{ $Contacts['phone'][0] }}</a></li>
                     <li><a href="mailto:{{ $Contacts['email'][0] }}"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $Contacts['email'][0] }}</a></li>
                  </ul>
            </div>
            <div class="social-icons-links">
              @include('sections.social-icons')
           </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER SECTION END -->
    <!-- COPY RIGHT SECTION BEGIN -->
    <section class="copy-right-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <p>Copyright © 2022 — All Rights Reserved by Reality One Group</p>
          </div>
        </div>
      </div>
    </section>
    <!-- COPY RIGHT SECTION END -->