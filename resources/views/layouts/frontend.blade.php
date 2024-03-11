<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="o1 "  xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" lang="vi">
<head class="o2 " >
  @include('module.head')
  {{-- <link class="o3 "  href="//fonts.googleapis.com/css?family=Open+Sans" rel=stylesheet type=text/css /> --}}
  {{-- <link class="o4 "  href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet"> --}}
  {{-- <link class="o5 "  href="https://fonts.googleapis.com/css2?family=Open Sans&display=swap" rel="stylesheet"> --}}
  {{-- <link class="o6 "  href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap&subset=latin-ext" rel="stylesheet"> --}}
  {{-- <link class="o7 "  href=/public/frontend/polo/css/plugins.css rel=stylesheet> --}}
  {{-- <link class="o8 "  href=/public/frontend/polo/css/style.min.css rel=stylesheet> --}}
  {{-- <link class="o9 "  href=/public/frontend/polo/css/responsive.min.css rel=stylesheet> --}}
  {{-- <link class="o10 "  href=/public/frontend/polo/css/polofix.css rel=stylesheet> --}}
  <link class="o11 "  href=/public/frontend/polo/css/polo.css rel=stylesheet>
  {{-- <link class="o12 "  href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" /> --}}
  <link class="o13 "  rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link class="o14 "  href=/frontend/custom.css?v=<?php echo time(); ?>  rel=stylesheet>
  <script class="o15 "  src=/public/frontend/polo/js/jquery.js></script>
  <script class="o16 "  src=/public/frontend/js/bootstrap-multiselect.js?1></script>
  <link class="o17 "  rel=stylesheet href=//cdn.ihappy.vn/adminlte/bootstrap-multiselect.css>
  @include('module.datepicker')
  
</head>
<body class="o18 no-page-loader {{((Request::is('/')) ? 'index-page' : 'not-index-page')}}">
  {{-- @include('module.nhiemthu') --}}
  <div class="o19 "  id=wrapper>
    <header id="header" class="o20 {{-- header-fullwidth --}} header-logo-center header-sticky-resposnive{{-- header-no-sticky --}} {{-- header-no-sticky header-transparent header-sticky-resposnive--}} ">
      <div class="o21 "  id="header-wrap">
        <div class="o22 ">
          <div class="o23 "  id="logo">
            <a href="/" class="o24 logo" data-dark-logo="/upload/logow.png">
              <img class="o25 "  src="{!!$site["anh-logo"] or ''!!}" alt="{!!$site["tieu-de-trang"] or ''!!}">
            </a>
          </div>
          <div class="o26 "  id="top-search">
            <form class="o27 "  action="/tim-kiem" method="get">
              <input type="text" name="keyword" class="o28 form-control" value="" placeholder="Gõ từ khóa và bấm enter để tìm kiếm">
            </form>
          </div>
          <div class="o29 container">
            <div class="o30 header-extras visible-xs" style="border: none;">
              <ul class="o31 " >
                <li class="o32 " >
                  <a href="tel:{!!$site["so-hotline"] or ''!!}" class="o33 btn btn-rounded btn-youtube wow pulse" data-wow-iteration="100000" data-wow-duration="0.3s">{!!$site["so-hotline"] or ''!!}</a>
                </li>
              </ul>
            </div>
            <div class="o34 "  id="mainMenu-trigger">
              <button class="o35 lines-button x"> <span class="o36 lines"></span> </button>
            </div>
            <div id="mainMenu" class="o37 light">
              <style class="o38 "  type="text/css">
                #header #mainMenu:not(.menu-overlay) nav > ul:first-child > li > a{padding: 9px {!!$site["khoang-cach-menu-trai"]!!}px;}
                #header #mainMenu:not(.menu-overlay) nav > ul:last-child > li > a{padding: 9px {!!$site["khoang-cach-menu-phai"]!!}px;}
              </style>
              <nav class="o39 " >

                <ul class="o40 " >
                  @foreach($category as $c) @if($c['parent']==21)
                  @if(!$c['hasChild'])
                  <li class="o41 " ><a class="o42 "  href={!!$c['field1'] or ''!!}>{!!$c['title']!!}</a></li>
                  @else
                  <li class="o43 dropdown-submenu"><a class="o44 "  href={!!$c['field1'] or ''!!}>{!!$c['title'] or ''!!} <i class="o45 fa fa-angle-down"></i></a>
                    <ul class=dropdown-menu>
                      @foreach($category as $c2) @if($c2['parent']==$c['id'])
                      @if(!$c2['hasChild'])
                      <li class="o46 " ><a class="o47 "  href={!!$c2['field1'] or ''!!}>{!!$c2['title'] or ''!!}</a></li>
                      @else
                      <li class="o48 dropdown-submenu"><a class="o49 "  href={!!$c2['field1'] or ''!!}>{!!$c2['title'] or ''!!}</a>
                        <ul class=dropdown-menu>
                          @foreach($category as $c3) @if($c3['parent']==$c2['id'])
                          @if(!$c3['hasChild'])
                          <li class="o50 " ><a class="o51 "  href={!!$c3['field1'] or ''!!}>{!!$c3['title'] or ''!!}</a></li>
                          @else
                          <li class="o52 dropdown-submenu"><a class="o53 "  href={!!$c3['field1'] or ''!!}>{!!$c3['title'] or ''!!}</a>
                            <ul class=dropdown-menu>
                              @foreach($category as $c4) @if($c4['parent']==$c3['id'])
                              <li class="o54 " ><a class="o55 "  href={!!$c4['field1'] or ''!!}>{!!$c4['title'] or ''!!}</a></li>
                              @endif @endforeach 
                            </ul>
                          </li>
                          @endif 
                          @endif @endforeach 
                        </ul>
                      </li>
                      @endif 
                      @endif @endforeach 
                    </ul>
                  </li>
                  @endif 
                  @endif @endforeach 
                </ul>
                <ul class="o56 " >
                  @foreach($category as $c) @if($c['parent']==22)
                  @if(!$c['hasChild'])
                  {{-- @if($c['postCount'] > 0)
                  <li class="o57 dropdown-submenu">
                    <a class="o58 "  href={!!$c['field1'] or ''!!}>{!!$c['title']!!} <i class="o59 fa fa-angle-down"></i></a>
                    <ul class=dropdown-menu>
                      @php($i=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && $i++<100)
                      <li class="o60 " ><a class="o61 "  href={!!$p['field1'] or ''!!}>{!!$p['title'] or ''!!}</a></li>
                      @endif @endforeach 
                    </ul>
                  </li>
                  @else --}}
                  <li class="o62 " ><a class="o63 "  href={!!$c['field1'] or ''!!}>{!!$c['title']!!}</a></li>
                  {{-- @endif --}}
                  @else
                  <li class="o64 dropdown-submenu"><a class="o65 "  href={!!$c['field1'] or ''!!}>{!!$c['title'] or ''!!} <i class="o66 fa fa-angle-down"></i></a>
                    <ul class=dropdown-menu>
                      @foreach($category as $c2) @if($c2['parent']==$c['id'])
                      @if(!$c2['hasChild'])
                      <li class="o67 " ><a class="o68 "  href={!!$c2['field1'] or ''!!}>{!!$c2['title'] or ''!!}</a></li>
                      @else
                      <li class="o69 dropdown-submenu"><a class="o70 "  href={!!$c2['field1'] or ''!!}>{!!$c2['title'] or ''!!}</a>
                        <ul class=dropdown-menu>
                          @foreach($category as $c3) @if($c3['parent']==$c2['id'])
                          @if(!$c3['hasChild'])
                          <li class="o71 " ><a class="o72 "  href={!!$c3['field1'] or ''!!}>{!!$c3['title'] or ''!!}</a></li>
                          @else
                          <li class="o73 dropdown-submenu"><a class="o74 "  href={!!$c3['field1'] or ''!!}>{!!$c3['title'] or ''!!}</a>
                            <ul class=dropdown-menu>
                              @foreach($category as $c4) @if($c4['parent']==$c3['id'])
                              <li class="o75 " ><a class="o76 "  href={!!$c4['field1'] or ''!!}>{!!$c4['title'] or ''!!}</a></li>
                              @endif @endforeach 
                            </ul>
                          </li>
                          @endif 
                          @endif @endforeach 
                        </ul>
                      </li>
                      @endif 
                      @endif @endforeach 
                    </ul>
                  </li>
                  @endif 
                  @endif @endforeach 
                </ul>

                {{-- <ul class="o77 " >
                  @if(!empty(trim($site["tieu-de-menu-trai-1"])))<li class="o78 " ><a class="o79 "  href="{!!$site["link-muc-menu-trai-1"]!!}">{!!$site["tieu-de-menu-trai-1"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-2"])))<li class="o80 " ><a class="o81 "  href="{!!$site["link-muc-menu-trai-2"]!!}">{!!$site["tieu-de-menu-trai-2"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-3"])))<li class="o82 " ><a class="o83 "  href="{!!$site["link-muc-menu-trai-3"]!!}">{!!$site["tieu-de-menu-trai-3"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-4"])))<li class="o84 " ><a class="o85 "  href="{!!$site["link-muc-menu-trai-4"]!!}">{!!$site["tieu-de-menu-trai-4"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-5"])))<li class="o86 " ><a class="o87 "  href="{!!$site["link-muc-menu-trai-5"]!!}">{!!$site["tieu-de-menu-trai-5"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-6"])))<li class="o88 " ><a class="o89 "  href="{!!$site["link-muc-menu-trai-6"]!!}">{!!$site["tieu-de-menu-trai-6"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-7"])))<li class="o90 " ><a class="o91 "  href="{!!$site["link-muc-menu-trai-7"]!!}">{!!$site["tieu-de-menu-trai-7"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-8"])))<li class="o92 " ><a class="o93 "  href="{!!$site["link-muc-menu-trai-8"]!!}">{!!$site["tieu-de-menu-trai-8"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-9"])))<li class="o94 " ><a class="o95 "  href="{!!$site["link-muc-menu-trai-9"]!!}">{!!$site["tieu-de-menu-trai-9"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-trai-10"])))<li class="o96 " ><a class="o97 "  href="{!!$site["link-muc-menu-trai-10"]!!}">{!!$site["tieu-de-menu-trai-10"]!!}</a></li>@endif
                </ul>
                <ul class="o98 " >
                  @if(!empty(trim($site["tieu-de-menu-phai-1"])))<li class="o99 " ><a class="o100 "  href="{!!$site["link-muc-menu-phai-1"]!!}">{!!$site["tieu-de-menu-phai-1"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-2"])))<li class="o101 " ><a class="o102 "  href="{!!$site["link-muc-menu-phai-2"]!!}">{!!$site["tieu-de-menu-phai-2"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-3"])))<li class="o103 " ><a class="o104 "  href="{!!$site["link-muc-menu-phai-3"]!!}">{!!$site["tieu-de-menu-phai-3"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-4"])))<li class="o105 " ><a class="o106 "  href="{!!$site["link-muc-menu-phai-4"]!!}">{!!$site["tieu-de-menu-phai-4"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-5"])))<li class="o107 " ><a class="o108 "  href="{!!$site["link-muc-menu-phai-5"]!!}">{!!$site["tieu-de-menu-phai-5"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-6"])))<li class="o109 " ><a class="o110 "  href="{!!$site["link-muc-menu-phai-6"]!!}">{!!$site["tieu-de-menu-phai-6"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-7"])))<li class="o111 " ><a class="o112 "  href="{!!$site["link-muc-menu-phai-7"]!!}">{!!$site["tieu-de-menu-phai-7"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-8"])))<li class="o113 " ><a class="o114 "  href="{!!$site["link-muc-menu-phai-8"]!!}">{!!$site["tieu-de-menu-phai-8"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-9"])))<li class="o115 " ><a class="o116 "  href="{!!$site["link-muc-menu-phai-9"]!!}">{!!$site["tieu-de-menu-phai-9"]!!}</a></li>@endif
                  @if(!empty(trim($site["tieu-de-menu-phai-10"])))<li class="o117 " ><a class="o118 "  href="{!!$site["link-muc-menu-phai-10"]!!}">{!!$site["tieu-de-menu-phai-10"]!!}</a></li>@endif --}}
                  

                  <!--
                  @foreach($category as $c) @if(2 == $c['parent'])
                  <li class="o119 " ><a href="#c{!!$c['id'] or ''!!}" class="o120 scroll-to">{!!$c['field1'] or $c['title']!!}</a></li>
                  {{-- <li class="o121 dropdown hover-active"> <a class="o122 "  href=javascript:>{!!$c['field1'] or $c['title']!!}</a>
                    <ul class=dropdown-menu>
                      @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && empty($p['field5']))
                      <li class="o123 " ><a class="o124 "  href={!!$p['link'] or ''!!}>{!!$p['title'] or ''!!}</a></li>
                      @endif @endforeach 
                    </ul>
                  </li> --}}
                  @endif @endforeach
                  {{-- @if($category[2]['hasChild']) 
                  <li class="o125 dropdown"> <a class="o126 "  href={!!$category[2]['link'] or ''!!}>{!!$category[2]['title'] or '' !!}</a>
                    <ul class=dropdown-menu>
                      @foreach($category as $c) @if($c['parent']==2)
                      @if(!$c['hasChild'])
                      <li class="o127 " ><a class="o128 "  href={!!$c['link'] or ''!!}>{!!$c['field1'] or $c['title']!!}</a></li>
                      @else
                      <li class="o129 dropdown-submenu"><a class="o130 "  href={!!$c['link'] or ''!!}>{!!$c['title'] or ''!!}</a>
                        <ul class=dropdown-menu>
                          @foreach($category as $c2) @if($c2['parent']==$c['id'])
                          @if(!$c2['hasChild'])
                          <li class="o131 " ><a class="o132 "  href={!!$c2['link'] or ''!!}>{!!$c2['title'] or ''!!}</a></li>
                          @else
                          <li class="o133 dropdown-submenu"><a class="o134 "  href={!!$c2['link'] or ''!!}>{!!$c2['title'] or ''!!}</a>
                            <ul class=dropdown-menu>
                              @foreach($category as $c3) @if($c3['parent']==$c2['id'])
                              <li class="o135 " ><a class="o136 "  href={!!$c3['link'] or ''!!}>{!!$c3['title'] or ''!!}</a></li>
                              @endif @endforeach 
                            </ul>
                          </li>
                          @endif 
                          @endif @endforeach 
                        </ul>
                      </li>
                      @endif 
                      @endif @endforeach 
                    </ul>
                  </li>
                  @else
                  <li class=dropdown> <a class="o137 "  href={!!$category[10]['link'] or ''!!}>{!!$category[10]['title'] or '' !!}</a>
                    <ul class=dropdown-menu>
                      @foreach($post as $p) @if(in_array(10, $p['categoryParent']))
                      <li class="o138 " ><a class="o139 "  href={!!$p['link'] or ''!!}>{!!$p['title'] or ''!!}</a></li>
                      @endif @endforeach 
                    </ul>
                  </li>
                  @endif --}}
                  </ul>
                  <ul class="o140 " >
                  {{-- <li class="o141 " ><a class="o142 "  href={!!$post[1]['link'] or ''!!}>{!!$post[1]['title'] or ''!!}</a></li> --}}
                  {{-- <li class="o143 " ><a class="o144 "  href={!!$post[4]['link'] or ''!!}>{!!$post[4]['title'] or ''!!}</a></li> --}}
                  {{-- <li class="o145 " ><a class="o146 "  href={!!$category[10]['link'] or ''!!}>{!!$category[10]['title'] or ''!!}</a></li> --}}
                  @foreach($category as $c4) @if($c4['parent']==17) 
                  @if($c4['hasChild'])
                  <li class="o147 dropdown"> <a class="o148 "  href={!!$c4['link'] or ''!!}>{!!$c4['title'] or '' !!}</a>
                    <ul class=dropdown-menu>
                      @foreach($category as $c) @if($c['parent']==$c4['id'])
                      @if(!$c['hasChild'])
                      <li class="o149 " ><a class="o150 "  href={!!$c['link'] or ''!!}>{!!$c['title'] or ''!!}</a></li>
                      @else
                      <li class="o151 dropdown-submenu"><a class="o152 "  href={!!$c['link'] or ''!!}>{!!$c['title'] or ''!!}</a>
                        <ul class=dropdown-menu>
                          @foreach($category as $c2) @if($c2['parent']==$c['id'])
                          @if(!$c2['hasChild'])
                          <li class="o153 " ><a class="o154 "  href={!!$c2['link'] or ''!!}>{!!$c2['title'] or ''!!}</a></li>
                          @else
                          <li class="o155 dropdown-submenu"><a class="o156 "  href={!!$c2['link'] or ''!!}>{!!$c2['title'] or ''!!}</a>
                            <ul class=dropdown-menu>
                              @foreach($category as $c3) @if($c3['parent']==$c2['id'])
                              <li class="o157 " ><a class="o158 "  href={!!$c3['link'] or ''!!}>{!!$c3['title'] or ''!!}</a></li>
                              @endif @endforeach 
                            </ul>
                          </li>
                          @endif 
                          @endif @endforeach 
                        </ul>
                      </li>
                      @endif 
                      @endif @endforeach 
                    </ul>
                  </li>
                  @else
                  <li class={{-- dropdown --}}> <a class="o159 "  href={!!$c4['link'] or ''!!}>{!!$c4['title'] or '' !!}</a>
                    {{-- <ul class=dropdown-menu>
                      @foreach($post as $p) @if(in_array($c4['id'], $p['categoryParent']))
                      <li class="o160 " ><a class="o161 "  href={!!$p['link'] or ''!!}>{!!$p['title'] or ''!!}</a></li>
                      @endif @endforeach 
                    </ul> --}}
                  </li>
                  @endif
                  @endif @endforeach
                  @php($i=0) @foreach($post as $p) @if(in_array(17, $p['category']) && $i++<100)
                  <li class="o162 " ><a class="o163 "  href={!!$p['link'] or ''!!}>{!!$p['title'] or ''!!}</a></li>
                  @endif @endforeach
                  <li class="o164 " ><a class="o165 "  href={!!$post[2]['link'] or ''!!}>{!!$post[2]['title'] or ''!!}</a></li>
                  {{-- @foreach($post as $p) @if(in_array(11, $p['categoryParent']))
                  <li class="o166 " ><a class="o167 "  href={!!$p['link'] or ''!!}>{!!$p['title'] or ''!!}</a></li>
                  @endif @endforeach --}}
                  {{-- <li class="o168 " ><a class="o169 "  href=http://zalo.me/{!!$site["so-hotline"]!!}{!!$post[2]['link'] or ''!!} target="_blank">{!!$post[2]['title'] or ''!!}</a></li> --}}
                -->
              {{-- </ul> --}}
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section class="o170 " style="    border-top: 1px var(--main-color) solid;
    padding: 5px 0;
    background: #eee;">
    <div class="o171 container">
      <form action="{!!$category[2]['link'] or ''!!}" method="get" class="o172 ">
        <div class="o173 row m-0">
          <div class="o174 col-md-3 p-l-5 p-r-5">
            <div class="o175 form-group">
              <select class="o176 form-control" name="keyword" style="padding: 6px 6px;">
                <option class="o177 "  value="">Tất cả loại Villa</option>
                <option class="o178 "  @if(Request::get('keyword') == '1 phòng ngủ') selected="" @endif value="1 phòng ngủ">Villa 1 phòng ngủ</option>
                <option class="o179 "  @if(Request::get('keyword') == '2 phòng ngủ') selected="" @endif value="2 phòng ngủ">Villa 2 phòng ngủ</option>
                <option class="o180 "  @if(Request::get('keyword') == '3 phòng ngủ') selected="" @endif value="3 phòng ngủ">Villa 3 phòng ngủ</option>
                <option class="o181 "  @if(Request::get('keyword') == '4 phòng ngủ') selected="" @endif value="4 phòng ngủ">Villa 4 phòng ngủ</option>
                <option class="o182 "  @if(Request::get('keyword') == '5 phòng ngủ') selected="" @endif value="5 phòng ngủ">Villa 5 phòng ngủ</option>
                <option class="o183 "  @if(Request::get('keyword') == '6 phòng ngủ') selected="" @endif value="6 phòng ngủ">Villa 6 phòng ngủ</option>
                <option class="o184 "  @if(Request::get('keyword') == '1 giường đôi') selected="" @endif value="6 phòng ngủ">Phòng 1 giường đôi </option>
                <option class="o185 "  @if(Request::get('keyword') == '2 giường đơn') selected="" @endif value="6 phòng ngủ">Phòng 2 giường đơn </option>
                <option class="o186 "  @if(Request::get('keyword') == 'Executive Suite') selected="" @endif value="6 phòng ngủ">Phòng Executive Suite</option>
                {{-- @foreach($category as $c) @if($c['parent']==2)
                <option class="o187 "  @if(Request::get('category') == $c['id']) selected="" @endif value="{!!$c['id'] or ''!!}">{!!$c['title'] or ''!!}</option>
                @endif @endforeach --}}
              </select>
            </div>
          </div>
          <div class="o188 col-md-3 p-l-5 p-r-5">
            <div class="o189 form-group">
              <input type="text" name="from" class="o190 datepickerx form-control" autocomplete="off" value="{!!Request::get('from')!!}" placeholder="Ngày đến" style="padding: 6px 6px;">
            </div>
          </div>
          <div class="o191 col-md-3 p-l-5 p-r-5">
            <div class="o192 form-group">
              <input type="text" name="to" class="o193 datepickerx form-control" autocomplete="off" value="{!!Request::get('to')!!}" placeholder="Ngày về" style="padding: 6px 6px;">
            </div>
          </div>
          <div class="o194 col-md-3 p-l-5 p-r-5">
            <div class="o195 form-group">
              <button type="submit" class="o196 btn btn-primary" style="margin-bottom: 0;width: 100%;padding: 7px 20px;">Tìm villa</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  @yield('content')
  <section class="o197 footer p-b-100 p-t-20">
    <div class="o198 container">
      <div class="o199 row">
          {{-- <div class="o200 col-md-4">
            <h4 class="o201 uppercase"><b class="o202 " >{!!$site["tieu-de-trang"] or ''!!}</b></h4>
            <p class="o203 "  style="text-align: justify;line-height: 24px;">{!!$site["gioi-thieu-trang"] or ''!!}</p>
          </div> --}}
          <div class="o204 col-md-3">
            <h4 class="o205 " >{!!$site["tieu-de-cuoi-trang"]!!}</h4>
            {{-- <img class="o206 m-b-20" src="/upload/logow.png" style="width: 200px" alt="{!!$site["tieu-de-trang"] or ''!!}"> --}}
            {!!$site["doan-thong-tin-lien-he"] or ''!!}
            <h4 class="o207 uppercase">Kết nối với chúng tôi</h4>
            <p class="o208 foot-icon">
              <a class="o209 "  target="_blank" href="{!!$site["link-fanpage-facebook"] or ''!!}"><i class="o210 fa fa-facebook"></i></a>
              <a class="o211 "  target="_blank" href="{!!$site["link-youtube"]!!}"><i class="o212 fa fa-youtube"></i></a>
              <a class="o213 "  target="_blank" href="{!!$site["link-pinterest"]!!}"><img src="/public/frontend/image/tiktok-icon2.png" style="border-radius: 20em;" class="o214 fa" width="19" height="19" alt="play"></i></a>
              <a class="o215 "  target="_blank" href="{!!$site["link-twitter"]!!}"><i class="o216 fa fa-twitter"></i></a>
              <a class="o217 "  target="_blank" href="{!!$site["link-instagram"]!!}"><i class="o218 fa fa-instagram"></i></a>
              <a class="o219 "  target="_blank" href="{!!$site["link-linkedin"]!!}"><i class="o220 fa fa-linkedin"></i></a>
            </p>
          </div>
          <div class="o221 col-md-3">
            <h4 class="o222 uppercase">{!!$category[49]['title'] or ''!!}</h4>
            <ul class="o223 ">
              @foreach($post as $p) @if(in_array(49, $p['categoryParent']))
              <li class="o224 " ><a class="o225 "  href={!!$p['link'] or ''!!}><i class="o226 fa fa-check"></i>{!!$p['title'] or ''!!}</a></li>
              @endif @endforeach 
            </ul>
            {{-- <h4 class="o227 uppercase">Chấp nhận thanh toán</h4>
            <p class="o228 text-center"><img class="o229 "  src="/public/upload/momo.png?2"></p> --}}
          </div>
          <div class="o230 col-md-3">
            <h4 class="o231 uppercase">{!!$category[19]['title'] or ''!!}</h4>
            <ul class="o232 ">
              @foreach($post as $p) @if(in_array(19, $p['categoryParent']) && empty($p['field5']))
              <li class="o233 " ><a class="o234 "  href={!!$p['link'] or ''!!}><i class="o235 fa fa-check"></i>{!!$p['title'] or ''!!}</a></li>
              @endif @endforeach 
            </ul>
          </div>
          {{-- <div class="o236 col-md-6">
            <h4 class="o237 " >Admin</h4>
            <ul class="o238 ">
              <li class="o239 " ><a class="o240 "  href=/chu-nha><i class="o241 fa fa-caret-right"></i>Chủ nhà đăng nhập</a></li>
            </ul>
          </div> --}}
          {{-- <div class="o242 col-md-3">
            <h4 class="o243 uppercase"><b class="o244 " >Facebook</b></h4>
            <div class="o245 fb-page" data-href="{!!$site["link-fanpage-facebook"] or ''!!}" data-tabs="about" data-width="280" data-height="160" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
          </div> --}}
          <div class="o246 col-md-3 dangky timkiem p-t-0">
            <h4 class="o247 uppercase">Nhận khuyến mãi</h4>
            <p class="o248 "  style="text-align: justify; line-height: 24px;">Hãy đăng ký để nhận báo giá mới nhất của chúng tôi</p>
            <form class="o249 " data-element="mail-to-admin">
              <div class="o250 thanhcong" style="display: none;"><p class="o251 text-center">Cảm ơn bạn đã đăng ký thành công!</p></div>
              <div class="o252 form-group m-b-10">
                <input type="text" class="o253 form-control phone" required="" name="Phone" value="" placeholder="Số điện thoại*">
              </div>
              <div class="o254 form-group m-b-10">
                <input type="text" class="o255 form-control email" required="" name="Email" value="" placeholder="Email của bạn*">
              </div>
              <div class="o256 form-group">
                <input class="o257 "  type="hidden" name="mail-to" value="{!!$site['dia-chi-email'] or ''!!}">
                <input class="o258 "  type="hidden" name="subject" value="Đăng ký nhận khuyến mãi">
                <button type="button" class="o259 btn btn-send-mail" data-action="Đăng ký nhận khuyến mãi" style="background: #000066;">Đăng ký</button>
              </div>
            </form>
          </div>
          <div class="o260 col-md-3">
            {{-- <h4 class="o261 "><b class="o262 " >Bản đồ</b></h4> --}}
            {{-- <div class="o263 google-maps" style="padding-bottom: 36%;">{!!$site["ma-nhung-ban-do-google-maps"] or ''!!}</div> --}}
          </div>
        </div>
      </div>
    {{-- <div class="o264 copyright-content">
      <div class="o265 container">
        <div class="o266 copyright-text"><a class="o267 "  href="{{WEB_MAKER_URL}}" target="_blank" title="{{WEB_MAKER_NAME}}">{{WEB_MAKER_NAME}}.</a> All rights reserved. Copyright @2018.<br class="o268 " >Use of this website and the services means you agree to our Terms of Use and Privacy Policy.
        </div>
      </div>
    </div> --}}
  </section>
</div>
<script class="o269 "  src=/public/frontend/polo/js/plugins.js?1></script>
<script class="o270 "  src=/public/frontend/functions.js?6></script>
<script class="o271 "  src=/public/frontend/js/jquery.cookie.min.js></script>
<script class="o272 "  src=/public/frontend/js/jquery.matchHeight-min.js></script>
<script class="o273 "  src=/public/frontend/js/wow.min.js></script>
<script class="o274 "  async src="https://www.tiktok.com/embed.js"></script>

<script class="o275 "  type=text/javascript>
  $(function(){
    setTimeout(function(){
      $(".matchHeight").matchHeight({byRow:true,property:"height",target:null,remove:false})
      $(".matchHeight1").matchHeight({byRow:true,property:"height",target:null,remove:false})
      $(".matchHeight2").matchHeight({byRow:true,property:"height",target:null,remove:false})
      $(".matchHeight3").matchHeight({byRow:true,property:"height",target:null,remove:false})
      $(".matchHeight4").matchHeight({byRow:true,property:"height",target:null,remove:false})
      $(".matchHeight5").matchHeight({byRow:true,property:"height",target:null,remove:false})
      $(".matchHeight6").matchHeight({byRow:true,property:"height",target:null,remove:false})
    },2000)
  });
</script>
{{-- <script class="o276 "  src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script class="o277 "  type=text/javascript>
  $(function(){
    $(".js-example-basic-single").select2({
      placeholder: "Bạn muốn đi đâu?",
      allowClear: true,
      templateResult: function(state) {
        console.log(state);
        if(state.id && state.id.indexOf('t_') != -1) {
          return $('<span class="o278 " ><img class="o279 "  src="/public/upload/place.png" style="margin-right:6px"/><b class="o280 " >' + state.text+'</b><span class="o281 " >');
        }
        return state.text;
      }
    });
  });
</script> --}}
<a href="{!!$site["link-fanpage-facebook"]!!}" target="_blank" class="o282 btn-zalo-noi btn-facebook-noi"><img class="o283 "  src="/public/frontend/image/face.jpg" width="40" height="40" alt="play"></a>
<a href="{!!$site["link-youtube"]!!}" target="_blank" class="o284 btn-zalo-noi btn-youtube-noi"><img class="o285 "  src="/public/frontend/image/play2.png" width="40" height="40" alt="play"></a>
<a href="{!!$site["link-pinterest"]!!}" target="_blank" class="o286 btn-zalo-noi btn-tiktok"><img class="o287 "  src="/public/frontend/image/tiktok-icon2.png" width="40" height="40" alt="play"></a>
@include('module.phonering')
@include('module.hotline')
@include('module.zalo')
{{-- @include('module.leftBar') --}}
@include('module.modalForm')
@include('module.modalSale')
@include('module.adminToolbar')
@include('module.loadFacebook')
{{-- @include('module.fanpageChat') --}}
{{-- @include('module.stopSave') --}}
@include('module.foot')
</body>
</html>
