@extends('layouts.frontend')
@section('content')
<hr class="o288 " >
<section id="" class="o289 p-t-0 p-b-20">
  <div class="o290 container">
    <div class="o291 row">
      <div class="o292 col-md-9 {{-- matchHeight --}}">
        @if(!empty($post[59]))
        <div class="o293 p-20 background-grey">
          <div class="o294 heading m-b-10">
            <h2 class="o295 " >{!!$post[59]['title'] or ''!!} </h2>
          </div>
          <div class="o296 row">
            <div class="o297 col-md-6 m-b-10">
              {{-- <iframe class="o298 "  width="560" height="315" src="https://www.youtube.com/embed/qiaztR7a0mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
              <div class="o299 m-b-5">
                <a {{-- href="{!!str_replace('youtu.be/', 'www.youtube.com/watch?v=', $post[59]['video'])!!}" data-lightbox="iframe" --}} data-href="{!!$post[59]['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} class="o300 ajaxvideo">
                  <div class="o301 gallery-video" style="background-image:url('{!!$post[59]['img_thumb']!!}');background-size: cover;background-position: center;"><img class="o302 "  src="/public/frontend/image/play.png"  alt="play"></div>
                </a>
              </div>
              <div class="o303 bvtt carousel dots-inside arrows-visible m-b-0" data-margin=5 data-items="3" data-items-xxs="4" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=true data-autoplay="true" data-autoplay-timeout="2000">
                @if(!empty($post[59]['video']))
                <a data-href="{!!$post[59]['link'] or ''!!}?quickView=1&all=2" class="o304 gallery-video ajaxvideo" style="background: url('{!!$post[59]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img class="o305 "  src="/public/frontend/image/play.png"  alt="play"></a>
                @endif
                {{-- <a href="{!!$post[59]['img']!!}" data-lightbox="gallery-item" class="o306 " style="background: url('{!!$post[59]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a> --}}
                @if(!empty($post[59]['img_other'])) @foreach($post[59]['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
                <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o307 " style="background: url('{!!str_replace('/upload/', '/thumbs/', $img[0])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
                </a>
                @endif @endforeach @endif
              </div>
              {{-- {!!Helper::youtube($post[59]['video'])!!} --}}
            </div>
            <div class="o308 col-md-6">
              <div class="o309 chi-tiet-bai-viet p-r-20" style="overflow-y: auto; max-height: 288px">
                {!!$post[59]['desc_full'] or ''!!} 
              </div>
            </div>
          </div>
        </div>
        @endif
        @if(!empty($post[58]))
        <div class="o310 p-20">
          <div class="o311 heading m-b-20">
            <h2 class="o312 " >{!!$post[58]['title'] or ''!!} </h2>
            {{-- <div class="o313 text-center">{!!$post[58]['desc'] or ''!!}</div> --}}
          </div>
          <div class="o314 chi-tiet-bai-viet p-r-20 m-b-30" style="overflow-y: auto; max-height: 600px">
            {!!$post[58]['desc_full'] or ''!!} 
          </div>
          {{-- <div class="o315 row"> --}}
            {{-- <div class="o316 col-md-6"> --}}
              <div class="o317 fb-like m-b-20" data-href="https://phamtanvilla.com" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
            {{-- </div> --}}
            {{-- <div class="o318 col-md-6">
              <p class="o319 text-right">
                <b class="o320 m-r-5">Bạn thấy hữu ích?</b>
                <a href="javascript:void(0)" class="o321 btn btn-xs btn-primary" style="">Có</a>
                <a href="javascript:void(0)" class="o322 btn btn-xs btn-default">Không</a>
              </p>
            </div> --}}
          {{-- </div> --}}
        </div>
        @endif
        {{-- <div class="o323 m-b-20 visible-xs">
          @include('module.datphong')
        </div> --}}
        {{-- <div class="o324 p-20 background-grey ">
          <div class="o325 heading m-b-20">
            <h2 class="o326 " >{!!$post[63]['title'] or ''!!} </h2>
            <div class="o327 text-center">{!!$post[63]['desc'] or ''!!}</div>
          </div>
          <div class="o328 chi-tiet-bai-viet p-r-20 m-b-30" style="overflow-y: auto; max-height: 600px">
            {!!$post[63]['desc_full'] or ''!!} 
          </div>
          <div class="o329 fb-like m-b-20" data-href="https://phamtanvilla.com" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
          <p class="o330 " >
            <b class="o331 " >Bạn có thấy nội dung này hữu ích?</b>
            <a href="javascript:void(0)" class="o332 btn btn-xs btn-primary">Có</a>
            <a href="javascript:void(0)" class="o333 btn btn-xs btn-default">Không</a>
          </p>
        </div> --}}
        @php($i=0) @foreach($category as $c) @if($c['parent']==2)
        @php($i++) 
        @if($i < 3)
        <div id="c{!!$c['id'] or ''!!}" class="o334 @if($i%2==1) background-grey @endif p-20 ">
          <div class="o335 heading">
            <a class="o336 "  href="{!!$c['link'] or ''!!}"><h2 class="o337 m-b-0">{!!$c['title'] or ''!!}</h2></a>
            <p class="o338 text-center">{!!(isset($c['desc'])) ? strip_tags($c['desc']) : ''!!}</p>
            </div>
            <div class="o339 "  style="max-height: 1200px;overflow-y: auto;overflow-x: hidden;">
              <div class="o340 row">
                @php($j=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && $j++ < 3)
                <div class="o341 col-md-4">
                  @include('module.eachProduct')
                </div>
                @endif @endforeach
              </div>
              <p class="o342 text-center m-b-0"><a href="{!!$c['link'] or ''!!}" class="o343 btn btn-my">{!!$c['field2'] or 'Xem tất cả'!!}</a></p>
            </div>
          </div>
          {{-- <hr class="o344 m-0"> --}}
          @endif
          @endif @endforeach

          @php($i=0) @foreach($category as $c) @if($c['parent']==2)
          @php($i++) 
          @if($i > 2)
          <div id="c{!!$c['id'] or ''!!}" class="o345 @if($i%2==1) background-grey @endif p-20 visible-xs">
            <div class="o346 heading">
              <a class="o347 "  href="{!!$c['link'] or ''!!}"><h2 class="o348 m-b-0">{!!$c['title'] or ''!!}</h2></a>
              <p class="o349 text-center">{!!(isset($c['desc'])) ? strip_tags($c['desc']) : ''!!}</p>
              </div>
              <div class="o350 "  style="max-height: 1200px;overflow-y: auto;overflow-x: hidden;">
                <div class="o351 row">
                  @php($j=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && $j++ < 3)
                  <div class="o352 col-md-3">
                    @include('module.eachProduct')
                  </div>
                  @endif @endforeach
                </div>
                <p class="o353 text-center m-b-0"><a href="{!!$c['link'] or ''!!}" class="o354 btn btn-my">{!!$c['field2'] or 'Xem tất cả'!!}</a></p>
              </div>
            </div> 
            @endif
            {{-- <hr class="o355 m-0"> --}}
            @endif @endforeach
            @php($i=0) @foreach($category as $c) @if($c['parent']==2)
            @php($i++) 
            @if($i > 2)
            <div id="c{!!$c['id'] or ''!!}" class="o356 @if($i%2==1) background-grey @endif p-20 hidden-xs">
              <div class="o357 heading">
                <h2 class="o358 m-b-0">{!!$c['title'] or ''!!}</h2>
                <p class="o359 text-center">{!!(isset($c['desc'])) ? strip_tags($c['desc']) : ''!!}</p>
                </div>
                <div class="o360 "  style="max-height: 1200px;overflow-y: auto;overflow-x: hidden;">
                  <div class="o361 row">
                    @php($j=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']))
                    <div class="o362 col-md-4">
                      @include('module.eachProduct')
                    </div>
                    @endif @endforeach
                  </div>
                </div>
              </div>
              @endif
              {{-- <hr class="o363 m-0"> --}}
              @endif @endforeach
          </div>
          @include('module.postSidebar')
        </div>

        

          @if(isset($post[60]))
          <div class="o364 p-20">
            <div class="o365 heading m-b-20">
              <h2 class="o366 " >{!!$post[60]['title'] or ''!!} </h2>
            </div>
            <div class="o367 row">
              <div class="o368 col-md-6 m-b-10">
                {{-- <iframe class="o369 "  width="560" height="315" src="https://www.youtube.com/embed/qiaztR7a0mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                <div class="o370 m-b-5">
                  <a {{-- href="{!!str_replace('youtu.be/', 'www.youtube.com/watch?v=', $post[60]['video'])!!}" data-lightbox="iframe" --}}data-href="{!!$post[60]['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} class="o371 ajaxvideo">
                    <div class="o372 gallery-video" style="background-image:url('{!!$post[60]['img_thumb']!!}');background-size: cover;background-position: center;"><img class="o373 "  src="/public/frontend/image/play.png"  alt="play"></div>
                  </a>
                </div>
                <div class="o374  bvtt carousel dots-inside arrows-visible m-b-0" data-margin=5 data-items="3" data-items-xxs="4" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=true data-autoplay="true" data-autoplay-timeout="2000">
                  {{-- @if(!empty($post[60]['video']))
                  <a data-href="{!!$post[60]['link'] or ''!!}?quickView=1&all=2" class="o375 gallery-video ajaxvideo" style="background: url('{!!$post[60]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img class="o376 "  src="/public/frontend/image/play.png"  alt="play"></a>
                  @endif --}}
                  <a href="{!!$post[60]['img']!!}" data-lightbox="gallery-item" class="o377 " style="background: url('{!!$post[60]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a>
                  @if(!empty($post[60]['img_other'])) @foreach($post[60]['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
                  <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o378 " style="background: url('{!!str_replace('/upload/', '/thumbs/', $img[0])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
                  </a>
                  @endif @endforeach @endif
                </div>
                {{-- {!!Helper::youtube($post[59]['video'])!!} --}}
              </div>
              <div class="o379 col-md-6">
                <div class="o380 chi-tiet-bai-viet p-r-20" style="overflow-y: auto; max-height: 288px">
                  {!!$post[60]['desc_full'] or ''!!} 
                </div>
              </div>
            </div>
          </div>
          @endif
          @if(isset($post[61]))
          <div class="o381 p-20 background-grey">
            <div class="o382 heading m-b-20">
              <h2 class="o383 " >{!!$post[61]['title'] or ''!!} </h2>
            </div>
            <div class="o384 row">
              <div class="o385 col-md-6 m-b-10">
                <div class="o386 chi-tiet-bai-viet p-r-20" style="overflow-y: auto; max-height: 288px">
                  {!!$post[61]['desc_full'] or ''!!} 
                </div>
              </div>
              <div class="o387 col-md-6">
                {{-- <iframe class="o388 "  width="560" height="315" src="https://www.youtube.com/embed/qiaztR7a0mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                <div class="o389 m-b-5">
                  <a {{-- href="{!!str_replace('youtu.be/', 'www.youtube.com/watch?v=', $post[61]['video'])!!}" data-lightbox="iframe" --}} data-href="{!!$post[61]['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} class="o390 ajaxvideo">
                    <div class="o391 gallery-video" style="background-image:url('{!!$post[61]['img_thumb']!!}');background-size: cover;background-position: center;"><img class="o392 "  src="/public/frontend/image/play.png" alt="play"></div>
                  </a>
                </div>
                <div class="o393 bvtt carousel dots-inside arrows-visible m-b-0" data-margin=5 data-items="3" data-items-xxs="4" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=true data-autoplay="true" data-autoplay-timeout="2000">
                  {{-- @if(!empty($post[61]['video']))
                  <a data-href="{!!$post[61]['link'] or ''!!}?quickView=1&all=2"  class="o394 gallery-video ajaxvideo" style="background: url('{!!$post[61]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img class="o395 "  src="/public/frontend/image/play.png"  alt="play"></a>
                  @endif --}}
                  <a href="{!!$post[61]['img']!!}" data-lightbox="gallery-item" class="o396 " style="background: url('{!!$post[61]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a>
                  @if(!empty($post[61]['img_other'])) @foreach($post[61]['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
                  <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o397 " style="background: url('{!!str_replace('/upload/', '/thumbs/', $img[0])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
                  </a>
                  @endif @endforeach @endif
                </div>
                {{-- {!!Helper::youtube($post[59]['video'])!!} --}}
              </div>
            </div>
          </div>
          @endif
          @if(isset($post[62]))

          <div class="o398 p-20">
            <div class="o399 heading m-b-20">
              <h2 class="o400 " >{!!$post[62]['title'] or ''!!} </h2>
            </div>
            <div class="o401 row">
              <div class="o402 col-md-6 m-b-10">
               {{-- <iframe class="o403 "  width="560" height="315" src="https://www.youtube.com/embed/qiaztR7a0mg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
               <div class="o404 m-b-5">
                 <a {{-- href="{!!str_replace('youtu.be/', 'www.youtube.com/watch?v=', $post[62]['video'])!!}" data-lightbox="iframe" --}} data-href="{!!$post[62]['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} class="o405 ajaxvideo">
                   <div class="o406 gallery-video" style="background-image:url('{!!$post[62]['img_thumb']!!}');background-size: cover;background-position: center;"><img class="o407 "  src="/public/frontend/image/play.png"  alt="play"></div>
                 </a>
               </div>
               <div class="o408 bvtt carousel dots-inside arrows-visible m-b-0" data-margin=5 data-items="3" data-items-xxs="4" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=true data-autoplay="true" data-autoplay-timeout="2000">
                 @if(!empty($post[62]['video']))
                 <a data-href="{!!$post[62]['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} class="o409 gallery-video ajaxvideo" style="background: url('{!!$post[62]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img class="o410 "  src="/public/frontend/image/play.png"  alt="play"></a>
                 @endif
                 <a href="{!!$post[62]['img']!!}" data-lightbox="gallery-item" class="o411 " style="background: url('{!!$post[62]['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a>
                 @if(!empty($post[62]['img_other'])) @foreach($post[62]['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
                 <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o412 " style="background: url('{!!str_replace('/upload/', '/thumbs/', $img[0])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
                   {{-- <img class="o413 img-responsive img-rounded img-thumbnail" alt="{!!$img[1]!!}" src="{!!$img[0]!!}"> --}}
                 </a>
                 @endif @endforeach @endif
               </div>
               {{-- {!!Helper::youtube($post[59]['video'])!!} --}}
             </div>
             <div class="o414 col-md-6">
              <div class="o415 chi-tiet-bai-viet p-r-20" style="overflow-y: auto; max-height: 288px">
                {!!$post[62]['desc_full'] or ''!!} 
              </div>
            </div>
          </div>
        </div>
        @endif

        <div class="o416 p-20 background-grey" style="min-height: 200px">
          <div class="o417 fb-comments" data-href="{!!'http://'.$_SERVER['HTTP_HOST']!!}" data-width="100%" data-numposts="5"></div>
        </div>


      </div>
    </section>
    <hr class="o418 m-0">
    @endsection