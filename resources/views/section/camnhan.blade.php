<section class="productCategory">
  <div class=container>
    <div class="heading heading-center">
      <a href="{!!$category[14]['link'] or ''!!}"><h2>{!!$category[14]['title'] or ''!!}</h2></a>
    </div>
    <div class="shop">
      <div class="carousel testimonial testimonial-single testimonial-left" data-dots=false data-items="1" data-margin=30 data-autoplay="true" data-loop="true" data-autoplay-timeout="3500">
        @php($i=0)
        @foreach($post as $p) @if(in_array(14,$p['categoryParent']) && $i++<10)
        <div class="testimonial-item">
          <img src="{!!$p['img_thumb']!!}" alt="">
          <p>{!!strip_tags($p['desc_full'])!!}</p>
          <span>{!!$p['title']!!}</span>
        </div>
        @endif @endforeach
      </div>
    </div>
  </div>
</section>