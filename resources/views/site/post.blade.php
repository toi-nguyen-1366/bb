@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section id="page-content" class="o1080 sidebar-right baiviet">
	<div class="o1081 container">
		<div id="blog" class="o1082 single-post">
			<div class="o1083 row">
				<div class="o1084 col-md-9 matchHeight">
					<div class="o1085 post-item">
						<div class="o1086 post-item-wrap">
							{{-- @if(!empty($s["img"]))
							<div class="o1087 carousel dots-inside arrows-visible" data-items="1" data-lightbox="gallery">
								<a class="o1088 "  href="{!!$s["img"]!!}" data-lightbox="gallery-item">
									<img class="o1089 img-responsive img-rounded img-thumbnail" alt="{!!$s["title"]!!}" src="{!!$s["img"]!!}">
								</a>
								@if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
								<a class="o1090 "  href="{!!$img[0]!!}" data-lightbox="gallery-item">
									<img class="o1091 img-responsive img-rounded img-thumbnail" alt="{!!$img[1]!!}" src="{!!$img[0]!!}">
								</a>
								@endif @endforeach @endif
							</div>
							@endif --}}
							<div class="o1092 post-item-description p-t-0">
								<p class="o1093 h1 m-b-0" style="font-size: 23px">{!!$s['title']!!}</p>
								
								{{-- @if(!empty($s["desc"]))<blockquote class="o1080 " ><p class="o1094 " >{!!$s['desc']!!}</p></blockquote>@endif --}}
								<div class="o1095 chi-tiet-bai-viet">
									@if(!empty($s['video'])) <div class="o1096 m-b-20">{!!Helper::youtube($s['video'])!!} </div>@endif
									{!!Helper::youtube($s['desc_full'])!!}
									{{-- <div class="o1097 m-t-20">
										{!!$site['doan-thong-tin-lien-he-duoi-moi-san-pham']!!}
									</div> --}}
								</div>
								<div class="o1098 post-meta">
									{{-- <span class="o1080 post-meta-date"><i class="o1099 fa fa-calendar-o"></i>{{Helper::datevn($s['created_at'])}}</span> --}}
									{{-- <span class="o1080 post-meta-comments"><a class="o1080 "  href=""><i class="o1100 fa fa-comments-o"></i>33 Comments</a></span> --}}
									{{-- <div class="o1101 fb-like" data-href="{{env('APP_URL_REAL').$s['link']}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div> --}}
									<div class="o1102 m-b-10 m-t-10 float-right ">
									  <div class="o1103 fb-like" data-href="https://phamtanvilla.com/{!!$s['link'] or ''!!}" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
									  <div class="o1104 post-meta-share">
									    <a class="o1105 btn btn-xs btn-facebook" target="_blank" href="//www.facebook.com/sharer.php?u=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;t=">
									      <i class="o1106 fa fa-facebook"></i>
									      <span class="o1107 " >Share</span>
									    </a>
									    <a class="o1108 btn btn-xs btn-twitter" target="_blank" href="//twitter.com/share?text=Great!&amp;url=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;hashtags=" data-width="100">
									      <i class="o1109 fa fa-twitter"></i>
									      <span class="o1110 " >Tweet</span>
									    </a>
									    <a class="o1111 btn btn-xs btn-instagram" target="_blank" href="//www.instagram.com/?url=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;t=">
									      <i class="o1112 fa fa-instagram"></i>
									      <span class="o1113 " >Instagram</span>
									    </a>
									    <a class="o1114 btn btn-xs btn-pinterest" target="_blank" href="//pinterest.com/pin/create/button/?url=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;t=">
									      <i class="o1115 fa fa-pinterest"></i>
									      <span class="o1116 " >Pinterest</span>
									    </a>
									  </div>
									</div>
								</div>
								@include('module.comment') 
							</div>
							<h3 class="o1117 tieu-de-h3">Bài viết liên quan</h3>
							<div class="o1118 post-thumbnail-list">
								@php($i=0) @foreach($relatedPost as $p) @if($i++<4)
								<div class="o1119 post-thumbnail-entry matchHeight">
									<a class="o1080 "  href="{!!$p['link']!!}" title="{!!$p['title']!!}"><img class="o1120 img-responsive img-rounded img-thumbnail" alt="{!!$p['title']!!}" src="{!!$p['img_thumb']!!}"></a>
									<div class="o1121 post-thumbnail-content">
										<a class="o1122 matchHeight2" href="{!!$p['link']!!}" title="{!!$p['title']!!}">{!!$p['title']!!}</a>
										<p class="o1123 matchHeight1">{!!(isset($p['desc'])) ? strip_tags($p['desc']) : ''!!}</p>
										{{-- <span class="o1080 post-category"><b class="o1124 " >{!!$p['categoryInfo']['title']!!}</b> | {{Helper::datevn($s['created_at'])}}</span> --}}
									</div>
								</div>
								@endif @endforeach
							</div>
							{{-- <div class="o1125 comments p-0" id="comments">
								<div class="o1126 fb-comments" data-href="{{env('APP_URL_REAL').$s['link']}}" data-width="100%" data-numposts="5"></div>
							</div> --}}
						</div>
					</div>
					{{-- @include('module.postSidebar') --}}
					@include('module.allvilla')
					</div>
        @include('module.postSidebar')
				</div>
			</div>
		</div>
	</section>
	@endsection