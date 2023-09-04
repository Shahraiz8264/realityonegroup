@extends('layouts.layoutv1')

@section('content')
@include('sections.bannerv1',[
    'heading' => trans('messages.banner_heading1'),
    'sub_heading' => trans('messages.banner_subheading1'),
    'image' => [
        'display' => false,
        'src' => '',
    ],
    'video' => [
        'display' => true,
        'src' => asset(config('site_config.assets.images').'banner-animation.mp4'),
    ], 
    'link' => [
            'display' => false,
            'link' => '',
    ]
])
<!-- VIDEO BANNER SECTION END -->
<!-- BUY SELL SECTION BEGIN -->
@include('sections.property.buy-sell',[
    'heading'  => __('messages.properties.sec-heading'),
    'subheading' => __('messages.properties.sec-subheading'),
    'Properties' => null, 
])
<!-- BUY SELL SECTION END -->
<!-- ULTIMATE INVESTMENT SECTION BEGIN -->
@include('sections.projects.project-sec',[
    'heading'  => __('messages.projects.sec-heading'),
    'subheading' => __('messages.projects.sec-subheading'), 
])
<!-- ULTIMATE INVESTMENT SECTION END -->
<!-- OUR PROJECT SECTION BEGIN -->

<!-- OUR PROJECT SECTION END -->
<!-- REAL ESTATE SECTION BEGIN -->

@include('sections.about-us',[
    'heading'  => __('messages.about-us.sec-heading'),
    'description' => __('messages.about-us.sec-subheading'),
    'video' => "https://youtu.be/fpOYeuNYQGs",
    'image' => asset(config('site_config.assets.images').'home.jpg'),
    'links' => [
        [
            'href' => route('site-pages','about-us'),
            'text'  => __('lang.about_us'),
        ],
        [
            'href' => route('site-pages','contact-us'),
            'text'  => __('lang.contact'),
        ]
    ]
])
<!-- REAL ESTATE SECTION END --> 
<!-- OUR SERVICES SECTION BEGIN -->
@include('sections.our-services',[
    'heading'  => __('messages.services.sec-heading'),
    'subheading' => __('messages.services.sec-subheading'),
])
<!-- OUR SERVICES SECTION END -->
<!-- COUNTER SECTION BEGIN -->
@include('sections.counters')
<!-- COUNTER SECTION END -->
<!-- PURCHASE PROPERTY SECTION BEGIN -->
@include('sections.how-to-purchase')
<!-- PURCHASE PROPERTY SECTION END -->
<!-- OUR CLIENTS SECTION BEGIN -->
<section class="our-clients-sec">
   <div class="container-fluid">
      <div class="row">
         @include('sections.testimonials')
         @include('sections.contact-form',[
            'heading' => __('messages.contact.sec-heading')
            ])
      </div>
   </div>
</section>
<!-- OUR CLIENTS SECTION END -->
    
@endsection
@section('scripts')
<script>
          /*PROPERTY SLIDER SCRIPT BEGIN*/
          $('.responsive').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        nextArrow:"<img src='images/right-arrow.png' class='a-right'>",
        prevArrow:"<img src='images/left-arrow.png' class='a-left'>",
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
        ]
      });
      /*PROPERTY SLIDER SCRIPT END*/
      /*PROJECT SLIDER SCRIPT BEGIN*/
      $('.responsive2').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        nextArrow:"<img src='images/right-arrow.png' class='a-right'>",
        prevArrow:"<img src='images/left-arrow.png' class='a-left'>",
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
      /*PROJECT SLIDER SCRIPT END*/
      /*COUNTER SCRIPT BEGIN*/
      $(document).ready(function() {
        checkDisplay();
      $(window).on('resize scroll', function() {
        checkDisplay();
        });
      });
      function checkDisplay(){
        $('.prg-count').each(function() {
            var $this = $(this);
            if ($this.isOnScreen()) {
              var countTo = $this.attr('data-count');
              $({
                countNum: $this.text()
              }).animate({
                countNum: countTo
              }, {
                duration: 4000,
                easing: 'linear',
                step: function() {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  $this.text(this.countNum);
                  //alert('finished');
                }
              });
            }
          });
      }
      /*COUNTER SCRIPT END*/
      /*OUR CLIENTS SLIDER SCRIPT BEGIN*/
      $('.responsive3').slick({
          dots: false,
          arrows: true,
          infinite: true,
          autoplay: true,
          nextArrow:"<img src='images/slider-down.png' class='a-right'>",
          prevArrow:"<img src='images/slider-up.png' class='a-left'>",
          vertical: true,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
       /*OUR CLIENTS SLIDER SCRIPT END*/

       $(document).on('click','.search_filter',function(e){
          e.preventDefault();
          $('#category').val($(this).data('value'));
          $('.filter-form').submit();
      });

      /*MOBILE PROPERTY SLIDER BEGIN*/
      $('.responsive-mob-prop').slick({
          dots: false,
          arrows: true,
          infinite: true,
          autoplay: true,
          nextArrow:"<img src='images/slider-down.png' class='a-right'>",
          prevArrow:"<img src='images/slider-up.png' class='a-left'>",
          vertical: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
          ]
        });
      /*MOBILE PROPERTY SLIDER END*/
</script>
@endsection