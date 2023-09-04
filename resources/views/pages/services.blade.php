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
            'display' => true,
            'link' => route('site-pages','contact-us'),
            'text' => 'book_now'
    ]
])
<!-- SERVICES ADVISORY SECTION BEGIN -->
<section class="services-advisory-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="services-advisory-flex">
               <div class="services-advisory-boxes wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">
                  <img src="{{ asset(config('site_config.assets.images').'real-estate-marketing.jpg') }}" alt="image" class="img-fluid circle-shape1">
                  <div class="bg-advise">
                     <img src="{{ asset(config('site_config.assets.images').'ad2.png') }}" alt="image" class="img-fluid circle-shape"> 
                     <h5>Real Estate Sales & Marketing</h5>
                     <p>We market the property with value. Moreover, we strongly believe in actions to attract the trust of our ideal customers. Meanwhile, we believe in providing information that is insightful and beneficial for our customers.</p>
                  </div>
               </div>
               <div class="services-advisory-boxes wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.8s">
                  <img src="{{ asset(config('site_config.assets.images').'real-estate-development.jpg') }}" alt="image" class="img-fluid circle-shape1">
                  <div class="bg-advise">
                     <img src="{{ asset(config('site_config.assets.images').'ad2.png') }}" alt="image" class="img-fluid circle-shape"> 
                     <h5>Real Estate Development</h5>
                     <p>We market the property with value. Moreover, we strongly believe in actions to attract the trust of our ideal customers. Meanwhile, we believe in providing information that is insightful and beneficial for our customers.</p>
                  </div>
               </div>
               <div class="services-advisory-boxes wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
                  <img src="{{ asset(config('site_config.assets.images').'merger-and-acquisition.jpg') }}" alt="image" class="img-fluid circle-shape1">
                  <div class="bg-advise">
                     <img src="{{ asset(config('site_config.assets.images').'ad2.png') }}" alt="image" class="img-fluid circle-shape"> 
                     <h5>Real Estate Merger and Acquisition</h5>
                     <p>We merge with mega real estate giants to spark innovations and provide solutions to real estate problems. Further, we also acquire assistance from experts to save costs and spend for the best of our customers.</p>
                  </div>
               </div>
            </div>
            <div class="services-advisory-flex2">
               <div class="services-advisory-boxes wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s">
                  <img src="{{ asset(config('site_config.assets.images').'reits.jpg') }}" alt="image" class="img-fluid circle-shape1">
                  <div class="bg-advise">
                     <img src="{{ asset(config('site_config.assets.images').'ad2.png') }}" alt="image" class="img-fluid circle-shape"> 
                     <h5>REITS</h5>
                     <p>We are a real estate investment trust that invests in most real estate property types, including apartment buildings, cell towers, data centers, hotels, medical facilities, offices, retail centers, and warehouses.</p>
                  </div>
               </div>
             
               <div class="services-advisory-boxes wow fadeInRight" data-wow-duration="1.1s" data-wow-delay="1.1s">
                  <img src="{{ asset(config('site_config.assets.images').'wealth-advisory-services.jpg') }}" alt="image" class="img-fluid circle-shape1">
                  <div class="bg-advise">
                     <img src="{{ asset(config('site_config.assets.images').'ad2.png') }}" alt="image" class="img-fluid circle-shape"> 
                     <h5>Wealth Advisory Services</h5>
                     <p>We are masters of wealth management since through financial services we cater to the needs of our affluent clients. With our tested strategies, clients are likely to extract optimum results.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- SERVICES ADVISORY SECTION END -->
@endsection