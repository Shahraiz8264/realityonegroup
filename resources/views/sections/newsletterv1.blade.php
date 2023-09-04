<div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="subscribe-form-sec">
              <form class="newsletter-form" method="POST">
                <h5>{{ trans('messages.newsletter')}}:</h5>
                <div class="input-text-field">
                  
                  <div class="contact-success"></div>
                  <div class="contact-error"></div>
                  <input type="email" placeholder="Your Email" class="form-control newsletter-email">
                  <div class="error-email errors"></div>
                  <button type="submit" class="btn btn-primary">{{ trans('lang.subscribe')}}</button>
                </div>
              </form>
            </div>
          </div>
        </div>