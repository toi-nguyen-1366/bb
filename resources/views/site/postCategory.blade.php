@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="o1127 productCategory p-b-10 p-t-10">
  <div class="o1128 container">
    <div class="o1129 heading m-b-0">
      <h1 class="o1130 m-b-0 text-left">{!!$s['title']!!}</h1>
      {{-- <p class="o1131 text-left m-b-0">{!!$s['desc']!!}</p> --}}
    </div>
  </div>
</section>
<hr class="o1132 p-0 m-0">
<section id="page-content" class="o1133 sidebar-right">
  <div class="o1134 container">
    <div class="o1135 row">
      <div class="o1136 col-md-9 matchHeight">
        <div id="blog" class="o1137 post-thumbnails">
         @if(empty($postList))
         <blockquote class="o1138 blockquote-color text-light"><p class="o1139 " >Hiện chưa có bài viết nào!</p></blockquote>
         @endif
         @foreach($postList as $p)
         <div class="o1140 post-item">
          <div class="o1141 post-item-wrap">
            <div class="o1142 post-image">
              <a class="o1143 "  href="{!!$p['link']!!}">
                <img class="o1144 img-responsive img-rounded img-thumbnail" alt="{!!$p['title']!!}" src="{!!$p['img_thumb']!!}">
              </a>
              {{-- <span class="o1145 post-meta-category"><a class="o1146 "  href="{!!$p['categoryInfo']['link']!!}">{!!$p['categoryInfo']['title']!!}</a></span> --}}
            </div>
            <div class="o1147 post-item-description">
              {{-- <span class="o1148 post-meta-date"><i class="o1149 fa fa-calendar-o"></i>{!!Helper::datevn($p['created_at'])!!}</span> --}}
              <h2 class="o1150 m-b-10"><a class="o1151 "  href="{!!$p['link']!!}">{!!$p['title']!!}
              </a></h2>
              <p class="o1152 m-b-5" style="text-align: justify;">{!!(!empty($p['desc']))?$p['desc']:Helper::readMore($p['desc_full'])!!}</p>
              <a href="{!!$p['link']!!}" class="o1153 item-link">Xem chi tiết <i class="o1154 fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      @include('module.paging')
     @include('module.allvilla')
    </div>
        @include('module.postSidebar')
    {{-- <div class="o1155 col-md-4 matchHeight">
      <div class="o1156 pinBox" id="datphong" style="height: 100%">
        @include('module.datphong')
      </div>
    </div> --}}
  </div>
  {{-- @include('module.postSidebar') --}}
</div>
</section>
@endsection