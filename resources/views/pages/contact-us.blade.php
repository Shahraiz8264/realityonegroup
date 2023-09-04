@extends('layouts.layoutv1')

@section('content')

@include('sections.bannerv1',[
    'heading' => $title,
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => false,
        'src' => asset(config('site_config.assets.images.'.'banner-animation.mp4')),
    ], 
    'link' => [
            'display' => false,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
<!-- GET IN TOUCH SECTION BEGIN -->
<section class="get-in-touch-sec">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="touch-cont">
              <h3 class="wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.7s">{{ __('messages.contact.page-heading') }}</h3>
              <p class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.8s">{{ __('messages.contact.page-desc') }}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-6 col-sm-6 col-12">
            @include('sections.contact-formv1')
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
            <div class="location-contact">
              <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span>
              @php 
                $Contacts = config('site_config.contacts');
              @endphp
              <ul>
                @foreach($Contacts['phone'] as $contact)
                <li><a href="tel:{{ $contact }}">{{ $contact }}</a></li>
                @endforeach
              </ul>
            </div>
            <div class="location-contact">
              <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
              <ul>
                @foreach($Contacts['email'] as $contact)
                <li><a href="mailto:{{ $contact }}">{{ $contact }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- GET IN TOUCH SECTION END -->
    <!-- GOOGLE MAP CONATC SECTION BEGIN -->
    <section class="contact-map-sec wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              @include('sections.mapv1',[
                'url' => config('site_config.contacts.map')  
              ])
          </div>
        </div>
      </div>
    </section>
    <!-- GOOGLE MAP CONATC SECTION END -->
    
@endsection