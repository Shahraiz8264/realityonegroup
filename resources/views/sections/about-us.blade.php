<section class="real-estate-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            @include('sections.video',[
                'video' => $video,
                'image' => $image,
            ])
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="popup-img-content">
               <h5 class="wow fadeInRight" data-wow-duration="0.7s" data-wow-delay="0.7s">{!! $heading !!}</h5>
               <p class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.8s">{!! $description !!}</p>
               <div class="img-popup-booknow">
                @if(isset($links))
                @foreach($links as $link)
                  <a href="{{ $link['href'] }}" class="btn btn-primary wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.9s">{{ strtoupper($link['text']) }}</a>
                  
                @endforeach
                @endif
                </div>
            </div>
         </div>
      </div>
   </div>
</section>