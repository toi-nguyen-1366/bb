<div class="o419 col-md-3 {{-- matchHeight --}} {{-- hidden-xs --}}">
  {{-- <h3 class="o420 tieu-de-h3">Bài viết liên quan</h3> --}}
  <form id="widget-search-form-sidebar" action="/tim-kiem" method="get" class="o421 form-inline" style="margin-bottom: 12px;">
    <div class="o422 input-group">
      <input type="text" aria-required="true" name="keyword" value="{!!$searchKeyword or ''!!}" class="o423 form-control widget-search-form" placeholder="@lang('Gõ để tìm kiếm')" style="    padding: 9px 19px;">
      <span class="o424 input-group-btn">
        <button type="submit" id="widget-widget-search-form-button" class="o425 btn btn-default"><i class="o426 fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <div class="o427 post-thumbnail-list">
   @foreach($category as $p) @if($p['parent']==2) 
   <div class="o428 sb1">
    <a href="{{((Request::is('/')) ? '#c'.$p['id'] : $p['link'])}}" title="{!!$p['title']!!}" class="o429 scroll-to sb2">
      <p class="o430 sb3">{!!$p['title'] or ''!!}</p>
      <div class="o431 sb5">
        <img class="o432 sb4" alt="{!!$p['title']!!}" src="{!!$p['img_thumb']!!}" width="132" height="92">
        <p class="o433 "  >
          {!!(isset($p['desc'])) ? strip_tags($p['desc']) : ''!!} 
          <span class="o434 sb6">Xem thêm <i class="o435 fa fa-angle-double-right"></i></span>
        </p>
        </div>
      </a>
      {{-- <span class="o436 post-category"><b class="o437 "  >{!!$p['categoryInfo']['title']!!}</b> | {{Helper::datevn($s['created_at'])}}</span> --}}
    </div>
    @endif @endforeach
  </div>
  <h3 class="o438 tieu-de-h3 text-center uppercase">Các dịch vụ</h3>

  <div class="o439 post-thumbnail-list">
   @foreach($post as $p) @if(in_array(19, $p['categoryParent'])) 
   <div class="o440 post-thumbnail-entry">
     <a class="o441 "   href="{!!$p['link']!!}" title="{!!$p['title']!!}">
      <img class="o442 img-responsive img-rounded img-thumbnail" alt="{!!$p['title']!!}" src="{!!$p['img_thumb']!!}" width="100" height="65">
     <div class="o443 post-thumbnail-content">
      <p class="o444 "  >{!!$p['title']!!}</p>
      <p class="o445 "  >{!!strip_tags($p['desc'])!!}</p>
    </a>
      {{-- <span class="o446 post-category"><b class="o447 "  >{!!$p['categoryInfo']['title']!!}</b> | {{Helper::datevn($s['created_at'])}}</span> --}}
    </div>
  </div>
  @endif @endforeach
</div>

      {{-- <div class="o448 pinBox" id="datphong" style="height: 100%">
        @include('module.datphong')
      </div> --}}
    </div>