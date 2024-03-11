@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="">
  <div class="container">
    <div class="heading heading-center m-b-60">
      <h2 class="m-b-20 uppercase">{!!$s['title']!!}</h2>
      <p class="lead">{!!$s['desc']!!}</p>
    </div>
  </div>
  <div class="grid-layout grid-5-columns" data-margin=2 data-item="grid-item" data-lightbox="gallery">
    @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img)
    <div class="grid-item">
      <a class="image-hover-zoom" href="{!!$img[0]!!}" data-lightbox="gallery-item"><img src="{!!str_replace('/upload/', '/thumbs/', $img[0])!!}"></a>
    </div>
    @endforeach @endif
  </div>
</section>
@endsection