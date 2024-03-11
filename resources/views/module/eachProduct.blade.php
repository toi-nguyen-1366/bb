<div href="{!!$p['link'] or ''!!}" class="o449 each-product">
  {{-- <p class="o450 text-center m-b-20">
    <img src="{!!$p['img_thumb'] or ''!!}" class="o451 matchHeight2 hidden-xs">
    <img src="{!!$p['field14'] or $p['img_thumb']!!}" class="o452 visible-xs">
  </p> --}}
  <div class="o453 " >
    @if(!empty($p["img"]))
    <p class="o454 " > 
      {{-- <div class="o455 carousel dots-inside arrows-visible m-b-5" data-items="1" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=false> --}}
        @if(!empty($p['video']) && empty($p['field20']))
        <a data-href="{!!$p['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} {{--  href="{!!$p['video']!!}" data-lightbox="iframe" --}} class="o456 height500 gallery-video ajaxvideo" style="background: url('{!!$p['img_thumb']!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block; padding-top: 0%"><img class="o457 "  src="/public/frontend/image/play.png"  alt="play"></a>
        {{-- <a href="{!!$p['video']!!}" data-lightbox="iframe" class="o458 height500 gallery-video" style="background: url('{!!Helper::youtubeThumb($p['video'])!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block; padding-top: 0%"><img class="o459 "  src="/public/frontend/image/play.png"  alt="play"></a> --}}
        @else
        <a href="{!!$p['link'] or ''!!}?quickView=1&all=2" data-lightbox="ajax" class="o460 height500" style="background: url('{!!$p['img_thumb']!!}');background-size: cover;background-position: contain;background-repeat: no-repeat;display: block;"></a>
        @endif
    {{-- @if(!empty($p['img_other'])) @foreach($p['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
    <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o461 height500" style="background: url('{!!$img[0]!!}');background-size: cover;background-position: contain;background-repeat: no-repeat;display: block;">
    </a>
    @endif @endforeach @endif --}}
  </p>
  @endif
  @if(!empty($p["img"]))
  <div class="o462 anhnho carousel dots-inside arrows-visible m-b-0" data-margin=5 data-items="3" data-items-xxs="3" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=true data-autoplay="true" data-autoplay-timeout="2000">
    @if(!empty($p['video']))
    <a data-href="{!!$p['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} {{-- href="{!!$p['video']!!}" data-lightbox="iframe" --}} class="o463 gallery-video ajaxvideo" style="background: url('{!!Helper::youtubeThumb($p['video'])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img class="o464 "  src="/public/frontend/image/play.png"  alt="play"></a>
    @endif
    {{-- <a href="{!!$p['img_thumb']!!}" data-lightbox="gallery-item" class="o465 " style="background: url('{!!$p['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a> --}}
    @if(!empty($p['img_other'])) @foreach($p['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
    <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o466 " style="background: url('{!!str_replace('/upload/', '/thumbs/', $img[0])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
      {{-- <img class="o467 img-responsive img-rounded img-thumbnail" alt="{!!$img[1]!!}" src="{!!$img[0]!!}"> --}}
    </a>
    @endif @endforeach @endif
  </div>
  @endif
</div>

<div class="o468 " >
  <h3 class="o469 matchHeight3" style="font-size: 16px;text-align: center;line-height: 1.4;margin-bottom: 10px">
    @if(!empty($p['field21']))
    {!!$p['field21'] or ''!!}
    @else
    {!!$p['title'] or ''!!}
    @endif
    <br class="o470 " >{!!$s['sku'] or ''!!}
  </h3>
  <div class="o471 matchHeight4" >
    <p class="o472 visible-xs" style="line-height: 1.3;text-align: justify;font-size: 11px;
    margin-bottom: 5px;
    color: #111;">{!!(isset($p['desc'])) ? strip_tags($p['desc'],'<br class="o473 " ><b class="o474 " ><i class="o475 " ><span class="o476 " ><strong class="o477 " ><em class="o478 " >') : ''!!}</p>
      <p class="o479 visible-xs">Giá: {!!$p['field10'] or ''!!}</p>
      <table class="o480 table hidden-xs matchHeight">
        <tbody class="o481 " >
          <tr class="o482 " >
            <th class="o483 " >@if(!empty($p['field9x'])) {!!$p['field9x']!!} @else Đánh giá @endif</th>
            <td class="o484 " >
              <a class="o485 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field15" data-lightbox="ajax" style="color: #006">
                <?php 
                $diem = preg_replace("/[^0-9]/","",$p['field9']);
                if(!empty($diem)){
                  $st1 = "<i class='fa fa-star'></i>";
                  $st0 = "<i class='fa fa-star-o'></i>";
                  $st12 = "<i class='fa fa-star-half-o'></i>";
                  if($diem <= 10){
                    echo $st12.$st0.$st0.$st0.$st0;
                  }elseif($diem <= 20){
                    echo $st1.$st0.$st0.$st0.$st0;
                  }elseif($diem <= 30){
                    echo $st1.$st12.$st0.$st0.$st0;
                  }elseif($diem <= 40){
                    echo $st1.$st1.$st0.$st0.$st0;
                  }elseif($diem <= 50){
                    echo $st1.$st1.$st12.$st0.$st0;
                  }elseif($diem <= 60){
                    echo $st1.$st1.$st1.$st0.$st0;
                  }elseif($diem <= 70){
                    echo $st1.$st1.$st1.$st12.$st0;
                  }elseif($diem <= 80){
                    echo $st1.$st1.$st1.$st1.$st0;
                  }elseif($diem <= 90){
                    echo $st1.$st1.$st1.$st1.$st12;
                  }elseif($diem <= 100){
                    echo $st1.$st1.$st1.$st1.$st1;
                  }
                }
                ?> 
                {!!$p['field9'] or ''!!}
              </a>
            </td>
          </tr>
          <tr class="o486 " >
            <th class="o487 " >@if(!empty($p['field10x'])) {!!$p['field10x']!!} @else Giá @endif</th>
            <td class="o488 " ><a class="o489 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field16" data-lightbox="ajax">{!!$p['field10'] or ''!!}</a></td>
          </tr>
          <tr class="o490 " >
            <th class="o491 " >@if(!empty($p['field11x'])) {!!$p['field11x']!!} @else Loại villa @endif</th>
            <td class="o492 " ><a class="o493 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field17" data-lightbox="ajax">{!!$p['field11'] or ''!!}</a></td>
          </tr>
          <tr class="o494 " >
            <th class="o495 " >@if(!empty($p['field12x'])) {!!$p['field12x']!!} @else Điểm vượt trội @endif</th>
            <td class="o496 " ><a class="o497 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field18" data-lightbox="ajax">{!! str_replace(['✔','✔ '], '<br class="o498 " ><i class="o499 fa fa-check"></i>', $p['field12']) !!}</a></td>
          </tr>
          {{-- <tr class="o500 " >
            <th class="o501 " >@if(!empty($p['field13x'])) {!!$p['field13x']!!} @else Thông tin cơ bản @endif</th>
            <td class="o502 " ><a class="o503 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field19" data-lightbox="ajax">{!!$p['field13'] or ''!!}</a></td>
          </tr> --}}
        </tbody>
      </table>
    </div>
    <p class="o504 text-center">
      <a href="{!!$p['link'] or ''!!}{{-- ?quickView=1&all=1 --}}"{{--  data-lightbox="ajax" --}} class="o505 btn btn-xs btn-facebook btn-chitiet" data-id="{!!$p['id'] or ''!!}">Chi tiết</a>
      <a href="javascript:void(0)" class="o506 btn btn-xs btn-mua btn-youtube tonho" data-name="{!!$p['categoryInfo']['title'] or ''!!} - {!!$p['title'] or ''!!}" data-link="{!!$p['field8'] or ''!!}">{{-- Book now --}}Tư vấn cho tôi</a>
    </p>
  </div>
  <table class="o507 table table-{!!$p['id'] or ''!!}" style="display: none;">
    <tbody class="o508 " >
      <tr class="o509 " >
        <th class="o510 " >@if(!empty($p['field9x'])) {!!$p['field9x']!!} @else Đánh giá @endif</th>
        <td class="o511 " ><a class="o512 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field15" data-lightbox="ajax">{!!$p['field9'] or ''!!}</a></td>
      </tr>
      <tr class="o513 " >
        <th class="o514 " >@if(!empty($p['field10x'])) {!!$p['field10x']!!} @else Giá @endif</th>
        <td class="o515 " ><a class="o516 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field16" data-lightbox="ajax">{!!$p['field10'] or ''!!}</a></td>
      </tr>
      <tr class="o517 " >
        <th class="o518 " >@if(!empty($p['field11x'])) {!!$p['field11x']!!} @else Loại villa @endif</th>
        <td class="o519 " ><a class="o520 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field17" data-lightbox="ajax">{!!$p['field11'] or ''!!}</a></td>
      </tr>
      <tr class="o521 " >
        <th class="o522 " >@if(!empty($p['field12x'])) {!!$p['field12x']!!} @else Điểm vượt trội @endif</th>
        <td class="o523 " ><a class="o524 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field18" data-lightbox="ajax">{!!$p['field12'] or ''!!}</a></td>
      </tr>
      {{-- <tr class="o525 " >
        <th class="o526 " >@if(!empty($p['field13x'])) {!!$p['field13x']!!} @else Thông tin cơ bản @endif</th>
        <td class="o527 " ><a class="o528 "  href="{!!$p['link'] or ''!!}?quickView=1&field=field19" data-lightbox="ajax">{!!$p['field13'] or ''!!}</a></td>
      </tr> --}}
    </tbody>
  </table>
  <a href="javascript:void(0)" class="o529 visible-xs" onclick="$('.table-{!!$p['id'] or ''!!}').toggle();"><i class="o530 fa fa-angle-down"></i></a>
</div>

<!--a href="{!!$p['link']!!}" title="{!!$p['title']!!}" class="o531 product grid-item each-product">
  <div class="o532 product-image">
    <img class="o533 productImage" alt="{!!$p['title']!!}" src="{!!$p['img_thumb']!!}">
    {{-- <img class="o534 smallLogo" src="{!!$site["anh-logo"]!!}"> --}}
    {{-- <img class="o535 smallLogo2" src="{!!$site["anh-logo"]!!}"> --}}
    <p class="o536 " >{!!$p['title']!!}</p>
  </div>
  <div class="o537 product-description">
    {{-- <div class="o538 product-title text-center">
      <h4 class="o539 matchHeight2">
        {!!$p['title']!!}
      </h4>
    </div> --}}
    <div class="o540 row">
      <div class="o541 col-md-3 col-xs-3">
        <p class="o542 " ><i class="o543 fa fa-users"></i> {!!$p['field1']!!}</p>
      </div>
      <div class="o544 col-md-3 col-xs-3">
        <p class="o545 " ><i class="o546 fa fa-bed"></i> {!!$p['field2']!!}</p>
      </div>
      <div class="o547 col-md-3 col-xs-3">
        <p class="o548 " ><i class="o549 fa fa-bath"></i> {!!$p['field3']!!}</p>
      </div>
      <div class="o550 col-md-3 col-xs-3">
        <p class="o551 " ><i class="o552 fa fa-star"></i> {!!$p['rating']!!}</p>
      </div>
    </div>
    {{-- <div class=product-price>
      @if(empty($p['price_promo']))
      <ins class="o553 " >{!!Helper::money($p['price'])!!}</ins>
      @else
      <ins class="o554 " >{!!Helper::money($p['price_promo'])!!}</ins>
      <del class="o555 " >{!!Helper::money($p['price'])!!}</del>
      @endif
    </div> --}}
{{--     <div class="o556 product-rate">
      <i class="o557 fa fa-star"></i>
      <i class="o558 fa fa-star"></i>
      <i class="o559 fa fa-star"></i>
      <i class="o560 fa fa-star"></i>
      <i class="o561 fa fa-star-half-full"></i>
    </div>
    <button class="o562 btn btn-light btn-xs float-right btn btn-icon-holder" href="{!!$p['link']!!}" data-name="{!!$p['title']!!}">Chi tiết<i class="o563 fa fa-arrow-right"></i></button> --}}
  </div>
</a-->