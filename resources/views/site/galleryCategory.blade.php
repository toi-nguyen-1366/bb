@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="">
  <div class="container">
    <div class="heading heading-center m-b-60">
      <h2 class="m-b-20 uppercase">{!!$s['title']!!}</h2>
      <p class="lead">{!!$s['desc']!!}</p>
    </div>
    <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">
      @foreach($post as $p) @if(in_array(14, $p['category']))
      <div class="portfolio-item img-zoom">
        <div class="portfolio-item-wrap">
          <div class="portfolio-image">
            <a href="{!!$p['link']!!}"><img src="{!!$p['img_thumb']!!}" alt="{!!$p['title']!!}"></a>
          </div>
          <div class="portfolio-description">
            <a href="{!!$p['link']!!}">
              <h3>{!!$p['title']!!}</h3>
            </a>
          </div>
        </div>
      </div>
      @endif @endforeach
    </div>
  </div>
</section>
@endsection