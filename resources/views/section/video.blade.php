<section class="p-b-20 background-grey">
  <div class="container">
    <div class="heading heading-center">
      <a href="{!!$category[10]['link'] or ''!!}"><h2>{!!$category[10]['title'] or ''!!}</h2></a>
    </div>
    <div class="carousel testimonial testimonial-box" data-dots=false data-items="3" data-margin=30 data-autoplay="true" data-loop="true" data-autoplay-timeout="3500">
      @php($i=0) @foreach($post as $p) @if(in_array(10, $p['categoryParent']) && $i++<10)
      <div class="portfolio-item no-overlay img-zoom">
        <div class="portfolio-item-wrap">
          <div class="portfolio-image">
            <a data-lightbox="iframe" href="{!!$p["video"]!!}" target="_blank"><img src="{!!$p["img_thumb"]!!}" alt=""></a>
          </div>
          <div class="portfolio-description p-t-20">
            <a data-lightbox="iframe" href="{!!$p["video"]!!}">
              <p><b>{!!$p['title']!!}</b></p>
            </a>
          </div>
        </div>
      </div>
      @endif @endforeach
    </div>
  </div>
</section>