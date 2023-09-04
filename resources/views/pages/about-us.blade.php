@extends('layouts.layoutv1')

@section('content')
<!-- VIDEO BANNER SECTION BEGIN -->
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
<!-- VIDEO BANNER SECTION END -->
<!-- CEO SECTION BEGIN -->
<section class="advisory-sec">
   <div class="container-fluid">
      <div class="row advise-row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <img src="{{ asset(config('site_config.assets.images').'ceo.jpg') }}" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="advise-content wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4><span>CEO’s Mission</span></h4>
               <p>The mission of Reality One Group is to be the most successful real estate group of Pakistan. 
For this purpose, Reality One Group integrates professional and proven state of-the-art strategies specializing in the listing, selling, and marketing of new and resale luxury homes, residential communities, condominiums, home sites, undeveloped land and commercial and investment opportunities. Our ultimate golden goal is to benefit the clients with our experience by making ourselves available at the most sensitive decisions of their lives. 
</p>
<p>We vision to make lives worth admiring, comfort worth remembering, professionalism worth pursuing, properties worth owning, and innovation worth celebrating. 
At Reality One Group, we not only strive to grow as a business organization, but work round the clock to meet the needs of our customers. Simply, we vision to become a Group which leads in the creation and delivery of services that enable our clients to find comfort in the busy world and become the first choice of customers when they listen the word “home.”
</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CEO SECTION END -->
<!-- VID BACKGROUND SECTION BEGIN -->
<section class="vid-bg-sec">
   <div class="bg-video-wrap">
      <video src="{{ asset(config('site_config.assets.images').'aboutus-video.mp4') }}" loop muted autoplay></video>
      <div class="overlay"></div>
   </div>
</section>
<!-- VID BACKGROUND SECTION END -->
<!-- REALTY SECTION BEGIN -->
<section class="realty-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="realty-box-sec wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4><span>Story</span></h4>
               <p>Home ownership is a start for a better future. But the process of buying a property is indeed very difficult. People have investments, but what they lack is timely professional guidance. This is where Reality One Group can be a game changer for those who are working day and night to buy home of their dreams, serving the offices to collect amount to make dream living a reality, and looking for the places to secure a plot. We firmly believe in making professional Real Estate Services easily accessible to anyone who looks to build an asset in home, a haven of freedom, and legacy for future generations. Simply, we are here to rewrite the rules of the real estate to transform the lives of the Pakistanis. </p>
               <!-- <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p> -->
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="realty-box-sec wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4><span>Chairman’s Vision </span></h4>
               <p>We vision to make lives worth admiring, comfort worth remembering, professionalism worth pursuing, properties worth owning, and innovation worth celebrating. 
At Reality One Group, we not only strive to grow as a business organization, but work round the clock to meet the needs of our customers. Simply, we vision to become a Group which leads in the creation and delivery of services that enable our clients to find comfort in the busy world and become the first choice of customers when they listen the word “home.”
</p>
               <!-- <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced The standard chunk of Lorem Ipsum used since the 1500s is reproduced</p> -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- REALTY SECTION END -->
<!-- COUNTER SECTION BEGIN -->
<section id="prg-counter" class="aboutus-counter-sec">
   <div class="prg-container row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co1.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="200">0</h3>
         <h4 class="prg-count-title">Team Members</h4>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co2.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="4">0</h3>
         <h4 class="prg-count-title">Branches</h4>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co3.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="9">0</h3>
         <h4 class="prg-count-title">Projects</h4>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-12 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
         <img src="{{ asset(config('site_config.assets.images').'co4.png') }}" alt="image" class="img-fluid">
         <h3 class="prg-count" data-count="10">0</h3>
         <h4 class="prg-count-title">Years Experience</h4>
      </div>
   </div>
</section>
<!-- COUNTER SECTION END -->
<!-- ACCORDIAN SECTION BEGIN -->
<section class="accordian-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="accordian-img">
               <img src="{{ asset(config('site_config.assets.images').'as1.jpg') }}" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <div class="img-accordian-inner">
                  <img src="{{ asset(config('site_config.assets.images').'as2.jpg') }}" alt="image" class="img-fluid wow fadeInLeft" data-wow-duration="1.1s" data-wow-delay="1.1s">
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="accordian-content wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
               <h4><span>Why Only Reality One Group</span></h4>
               <!-- <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p> -->
               <div class="accordian-tabs">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Data Driven Decision
                              </a>
                           </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                           <div class="panel-body">Reality One Group experienced financial and sales team joins their knowledge with latest artificially intelligent technology to select the most compelling real estate properties in high-growth markets across the Pakistan. </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Secured Investment 
                              </a>
                           </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                           <div class="panel-body">Inflation negatively affects everything, but we help you choose an asset whose value increases with the increasing prices of commodities and properties so that you can sell less and earn more. </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Fair Price Policy
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                           <div class="panel-body">We believe that everyone must own a home so we have kept our rates competitive and affordable with zero hidden fees even if you are first time buyer or an owner of exotic villas. </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              	7 days and File is on your way
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">We understand how painful and slow home buying process is for you. But, our technological innovations in the system will get your file in less than a week! Imagine owning a house in just 5 days. </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                           <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                 Guaranteed Profit
                              </a>
                           </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                           <div class="panel-body">Money is hard earned and we know that! We provide you financial assessments to help you invest in the safest asset that ensures long term financial stability. </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ACCORDIAN SECTION END -->
<!-- OUR TEAM SECTION BEGIN -->
<section class="our-project-sec aboutus-team-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="investment-content">
               <h4 class="wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s"><span>Our</span> Team</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="our-project-slider">
               <div class="slider responsive2">
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'sana-rashid.jpg') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Sana Rashid</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>Marketing Head</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'aamir-majid.jpg') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Aamir Majid</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>Chariman</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div>
                     <a href="javascript:void(0)">
                        <div class="box-item-div wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
                           <div class="img-box-img">
                              <img src="{{ asset(config('site_config.assets.images').'bilal-ahmed.png') }}" alt="image" class="img-fluid">
                           </div>
                           <div class="building-img-content">
                              <div class="build-tag">
                                 <p>Bilal Ahmed</p>
                              </div>
                           </div>
                           <div class="designation-box">
                              <h6>MANAGER</h6>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- OUR TEAM SECTION END -->
<!-- GALLERY SECTION BEGIN -->
@php
 $Galleries = config('site_config.galleries');
@endphp
@include('sections.gallery',[
      'Galleries'  => $Galleries,
    ])
<!-- GALLERY SECTION END -->
@endsection
@section('scripts')
<script src="https://rawgit.com/moagrius/isOnScreen/master/jquery.isonscreen.min.js"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/custom.js') }}"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/plugins.js') }}"></script>
<script src="{{ asset(config('site_config.assets.js').'scripts/init.js') }}"></script>
<!-- <script src="js/plugins.js"></script>
    <script src="js/init.js"></script> -->
<!-- <script src="js/custom.js"></script> -->
<script>
          /*PROPERTY SLIDER SCRIPT BEGIN*/
          $('.responsive').slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        nextArrow:"<img src='/images/right-arrow.png' class='a-right'>",
        prevArrow:"<img src='/images/left-arrow.png' class='a-left'>",
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
              slidesToShow: 1,
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
        nextArrow:"<img src='/images/right-arrow.png' class='a-right'>",
        prevArrow:"<img src='/images/left-arrow.png' class='a-left'>",
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
          nextArrow:"<img src='/images/right-arrow.png' class='a-right'>",
          prevArrow:"<img src='/images/left-arrow.png' class='a-left'>",
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
</script>
@endsection