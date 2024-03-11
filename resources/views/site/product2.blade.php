@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<?php
if(!empty(Request::get('priceId'))){
  $priceId = Helper::cleanText(Request::get('priceId'));
  if(!empty($s['nguoi'.$priceId])){
    if(!empty($s['price'.$priceId])){
      $s['price'] = $s['price'.$priceId];
    }
    if(!empty($s['price_cuoituan'.$priceId])){
      $s['price_cuoituan'] = $s['price_cuoituan'.$priceId];
    }
    if(!empty($s['price_ngayle'.$priceId])){
      $s['price_ngayle'] = $s['price_ngayle'.$priceId];
    }
  }
}
?> 
<section class="sidebar-left sanp p-b-20 p-t-0 product-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 matchHeight">
        <div class="product m-b-0">
          {{-- @if(!empty($s["img"]))
          <div class="carousel dots-inside arrows-visible m-b-5" data-items="1" data-lightbox="gallery" data-loop=true data-dots=false>
            @if(!empty($s['video']))
            <a href="{!!$s['video']!!}" data-lightbox="iframe" class="height500 gallery-video" style="background: url('{!!Helper::youtubeThumb($s['video'])!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block; padding-top: 0%"><img src="/public/frontend/image/play.png"></a>
            @endif
            <a href="{!!$s['img']!!}" data-lightbox="gallery-item" class="height500" style="background: url('{!!$s['img']!!}');background-size: cover;background-position: contain;background-repeat: no-repeat;display: block;"></a>
            @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
            <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="height500" style="background: url('{!!$img[0]!!}');background-size: cover;background-position: contain;background-repeat: no-repeat;display: block;">
            </a>
            @endif @endforeach @endif
          </div>
          @endif
          @if(!empty($s["img"]))
          <div class="carousel dots-inside arrows-visible m-b-20" data-margin=5 data-items="6" data-lightbox="gallery" data-loop=true data-dots=false>
            @if(!empty($s['video']))
            <a href="{!!$s['video']!!}" data-lightbox="iframe" class="gallery-video" style="background: url('{!!Helper::youtubeThumb($s['video'])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img src="/public/frontend/image/play.png"></a>
            @endif
            <a href="{!!$s['img']!!}" data-lightbox="gallery-item" class="" style="background: url('{!!$s['img']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a>
            @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
            <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="" style="background: url('{!!$img[0]!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
            </a>
            @endif @endforeach @endif
          </div>
          @endif --}}
          {{-- <div class="text-center m-b-20">{!!$s['desc']!!}</div> --}}
          <div class="heading heading-center row m-b-20">
            <h1>Thông tin {!!$s['title'] or ''!!} @if(!empty($s['field5']) && isset($post[$s['field5']])) - {!!$post[$s['field5']]['title']!!} @endif</h1>
          </div>
          <div class="chi-tiet-bai-viet">

            @php($chiaphong = false)
            @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && !empty($p['field5'] && ($p['field5'] == $id || $p['field5'] == $s['field5'])))
            @php($chiaphong = true)
            @endif @endforeach

            @if($chiaphong)
            <div class="chi-tiet-bai-viet">
              <p style="text-align: center;font-weight: bold;font-style: italic;">Villa cho phép đặt cả villa hoặc theo phòng:</p>
              <table class="table table-striped m-b-20">
            {{-- <thead>
              <tr>
                <th>Tên phòng</th>
                <th>Sức chứa</th>
                <th>Số giường</th>
                <th>Số nhà tắm</th>
                <th>Giá từ</th>
                <th></th>
              </tr>
            </thead> --}}
            <tbody>
              @if(!empty($s['field5']) && isset($post[$s['field5']]))
              @php($p = $post[$s['field5']])
              @else
              @php($p = $s)
              @endif
              <tr @if($p['id'] == $s['id']) class="active" @endif>
                <td><a href="{!!$p['link'] or ''!!}">Cả Villa</a></td>
                <td>{!!$p['field1'] or ''!!} <i class="fa fa-users"></i></td>
                <td>{!!$p['field2'] or ''!!} <i class="fa fa-bed"></i></td>
                <td>{!!$p['field3'] or ''!!} <i class="fa fa-bath"></i></td>
                <td>Từ {!!Helper::money($p['price'])!!} / đêm</td>
                <td>@if($p['id'] == $s['id']) Bạn đang xem mục này @else <a href="{!!$p['link'] or ''!!}" class="btn-primary btn btn-xs">Xem villa</a> @endif</td>
              </tr>
              @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && !empty($p['field5'] && ($p['field5'] == $id || $p['field5'] == $s['field5'])))
              <tr @if($p['id'] == $s['id']) class="active" @endif>
                <td><a href="{!!$p['link'] or ''!!}">{!!$p['title'] or ''!!}</a></td>
                <td>{!!$p['field1'] or ''!!} <i class="fa fa-users"></i></td>
                <td>{!!$p['field2'] or ''!!} <i class="fa fa-bed"></i></td>
                <td>{!!$p['field3'] or ''!!} <i class="fa fa-bath"></i></td>
                <td>Từ {!!Helper::money($p['price'])!!} / đêm</td>
                <td>@if($p['id'] == $s['id']) Bạn đang xem mục này @else <a href="{!!$p['link'] or ''!!}" class="btn-primary btn btn-xs">Xem phòng</a> @endif</td>
              </tr>
              @endif @endforeach
            </tbody>
          </table>
        </div>
        @endif

        @php($tientheosonguoi = false)
        @if(!empty($s['nguoi1']) || !empty($s['nguoi2']) || !empty($s['nguoi3']) || !empty($s['nguoi4']) || !empty($s['nguoi5']))
        @php($tientheosonguoi = true)
        <table class="table table-bordered hidden" id="banggia">
          <tbody>
            <tr>
              <th colspan="2">Giá theo số lượng người ở</th>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <th>Dành cho đoàn {!!$s['nguoi'.$i]!!} người</th>
              @endif
              @endfor
            </tr>
            <tr>
              <th rowspan="3">Bảng giá @if(empty($s['field5']))(cho cả Villa)@else phòng {!!$s['title'] or ''!!}@endif</th>
              <td>Đêm ngày thường (Từ thứ 2 đến thứ 5)</td>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <td>{!!Helper::money($s['price'.$i])!!} / đêm</td>
              @endif
              @endfor
            </tr>
            <tr>
              <td>Đêm Thứ 6 và Chủ Nhật</td>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <td>{!!Helper::money($s['price_cuoituan'.$i])!!} / đêm</td>
              @endif
              @endfor
            </tr>
            <tr>
              <td>Đêm thứ 7 & dịp lễ Tết</td>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <td>{!!Helper::money($s['price_ngayle'.$i])!!} / đêm</td>
              @endif
              @endfor
            </tr>
            <tr>
              <td><b>Số người tiêu chuẩn</b></td>
              <td colspan="100%">{!!$s['field1']!!} người {{-- ({!!$s['field2']!!} giường, {!!$s['field3']!!} nhà tắm/wc) --}}</td>
            </tr>
          </tbody>
        </table>
        @else
        <table class="table table-bordered hidden" id="banggia">
          <tbody>
            <tr>
              <th rowspan="3">Bảng giá @if(empty($s['field5']))(cho cả Villa)@else phòng {!!$s['title'] or ''!!}@endif</th>
              <td>Đêm ngày thường (Từ thứ 2 đến thứ 5)</td>
              <td><b>{!!Helper::money($s['price'])!!} / đêm</b></td>
            </tr>
            <tr>
              <td>Đêm Thứ 6 và Chủ Nhật</td>
              <td><b>{!!Helper::money($s['price_cuoituan'])!!} / đêm</b></td>
            </tr>
            <tr>
              <td>Đêm thứ 7 & dịp lễ Tết</td>
              <td><b>{!!Helper::money($s['price_ngayle'])!!} / đêm</b></td>
            </tr>
            <tr>
              <td><b>Số người tiêu chuẩn</b></td>
              <td colspan="2">{!!$s['field1']!!} người {{-- ({!!$s['field2']!!} giường, {!!$s['field3']!!} nhà tắm/wc) --}}</td>
            </tr>
          </tbody>
        </table>
        @endif
        {{-- <p class="text-center"><a href="#datphong" class="scroll-to btn btn-my">Đặt phòng ngay</a></p> --}}
        <p class="text-center hidden"><a id="priceLinkMore" class="mItemLink mRight15" onclick="$('#boxPrice').slideToggle();$(this).hide()" href="javascript:void(0)">Xem chi tiết giá và phụ thu <i class="fa fa-caret-down"></i></a></p>
        <div id="boxPrice" class="mDetailPrice" style="display: none;">
          <p>Ngoài mức giá như trên, chi phí đặt phòng có thể thay đổi bởi:</p>
          <table class="table table-striped">
            <tbody>
              <tr>
                <td>Phụ thu người lớn</td>
                <td>
                  <b>{!!$s['field6'] or '200.000đ / người'!!}</b><br>
                  <span style="font-size: 0.9em!important"><i>(Số khách tăng thêm không được vượt quá số khách tối đa cho phép)</i></span>
                </td>
              </tr>
              <tr>
                <td>Phụ thu trẻ em</td>
                <td>
                  <b>{!!$s['field7'] or '200.000đ / người'!!}</b><br>
                  {{-- <span style="font-size: 0.9em!important;"><i>(Chi phí này không bao gồm trong tiền thuê phòng và khách trả trực tiếp cho quản gia)</i></span> --}}
                </td>
              </tr>
              <tr>
                <td>Chính sách Hủy/ Hoàn trả/ Thay đổi</td>
                <td>
                  <div class="mdtPriceBlack" style="color: #40ae64">
                    <p><a href="{!!$post[7]['link']!!}" target="_blank">Xem chi tiết ở đây</a></p>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="text-right"><a class="mItemLink mRight15" onclick="$('#priceLinkMore').show();$('#boxPrice').slideToggle();" href="javascript:void(0)">Thu gọn <i class="fa fa-caret-up"></i></a></p>
        </div>
      </div>
    </div>
    {{-- <div class="chi-tiet-bai-viet p-20 m-b-30" style="background: #eee; border: 1px #ccc solid">
      <table class="table">
        <tbody>
          <tr>
            <th>Đánh giá trên Agoda,booking, Airbnb</th>
            <td><a href="{!!$s['link'] or ''!!}?quickView=1&field=field15" data-lightbox="ajax">{!!$s['field9'] or ''!!}</a></td>
          </tr>
          <tr>
            <th>Giá từ</th>
            <td><a href="{!!$s['link'] or ''!!}?quickView=1&field=field16" data-lightbox="ajax">{!!$s['field10'] or ''!!}</a></td>
          </tr>
          <tr>
            <th>Loại villa</th>
            <td><a href="{!!$s['link'] or ''!!}?quickView=1&field=field17" data-lightbox="ajax">{!!$s['field11'] or ''!!}</a></td>
          </tr>
          <tr>
            <th>Điểm khác biệt</th>
            <td><a href="{!!$s['link'] or ''!!}?quickView=1&field=field18" data-lightbox="ajax">{!!$s['field12'] or ''!!}</a></td>
          </tr>
          <tr>
            <th>Thông tin cơ bản</th>
            <td><a href="{!!$s['link'] or ''!!}?quickView=1&field=field19" data-lightbox="ajax">{!!$s['field13'] or ''!!}</a></td>
          </tr>
        </tbody>
      </table>
    </div> --}}
    {{-- <p class="text-center m-b-30">
      <a href="javascript:void(0)" class="btn btn-my btn-mua btn-youtube tonho" data-name="{!!$s['categoryInfo']['title'] or ''!!} - {!!$s['title'] or ''!!}" data-link="{!!$s['field8'] or ''!!}">Book now</a>
    </p> --}}
    {{-- <div class="chi-tiet-bai-viet" id="chitiet">
      <table class="table table-bordered banggia">
        <thead>
          <tr>
            <th class="bg1">Ngày</th>
            <th class="bg2">Giá</th>
            <th class="bg4" style="width: 40%">Ghi chú</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Giá thứ 2 đến thứ 5</th>
            <td>
              <del>{!!Helper::money($s['price1'])!!}</del>
              <span class="gia">{!!Helper::money($s['price_cuoituan1'])!!}</span>
              @if(!empty($s['price1']))<span class="giamgia">-{!!round(($s['price1']-$s['price_cuoituan1'])*100/$s['price1'])!!}%</span>@endif
            </td>
            <td rowspan="5">{!!$s['spec'] or ''!!}</td>
          </tr>
          <tr>
            <th>Giá thứ 6</th>
            <td>
              <del>{!!Helper::money($s['price2'])!!}</del>
              <span class="gia">{!!Helper::money($s['price_cuoituan2'])!!}</span>
              @if(!empty($s['price2']))<span class="giamgia">-{!!round(($s['price2']-$s['price_cuoituan2'])*100/$s['price2'])!!}%</span>@endif
            </td>
          </tr>
          <tr>
            <th>Giá thứ 7</th>
            <td>
              <del>{!!Helper::money($s['price3'])!!}</del>
              <span class="gia">{!!Helper::money($s['price_cuoituan3'])!!}</span>
              @if(!empty($s['price3']))<span class="giamgia">-{!!round(($s['price3']-$s['price_cuoituan3'])*100/$s['price3'])!!}%</span>@endif
            </td>
          </tr>
          <tr>
            <th>Giá chủ nhật</th>
            <td>
              <del>{!!Helper::money($s['price4'])!!}</del>
              <span class="gia">{!!Helper::money($s['price_cuoituan4'])!!}</span>
              @if(!empty($s['price4']))<span class="giamgia">-{!!round(($s['price4']-$s['price_cuoituan4'])*100/$s['price4'])!!}%</span>@endif
            </td>
          </tr>
          <tr>
            <th>Giá ngày lễ</th>
            <td>
              <del>{!!Helper::money($s['price5'])!!}</del>
              <span class="gia">{!!Helper::money($s['price_cuoituan5'])!!}</span>
              @if(!empty($s['price5']))<span class="giamgia">-{!!round(($s['price5']-$s['price_cuoituan5'])*100/$s['price5'])!!}%</span>@endif
            </td>
          </tr>
        </tbody>
      </table>
      {!!$s['desc_full']!!}
    </div> --}}
    {{-- <p class="text-center m-b-30">
      <a href="javascript:void(0)" class="btn btn-my btn-mua btn-youtube tonho" data-name="{!!$s['categoryInfo']['title'] or ''!!} - {!!$s['title'] or ''!!}" data-link="{!!$s['field8'] or ''!!}">Book now</a>
    </p> --}}
    {{-- <div class="m-b-30">
      @include('module.comment') 
    </div> --}}
    {{-- @php($i=0) @foreach($category as $c) @if($c['parent']==2)
    @php($i++) 
    <div id="c{!!$c['id'] or ''!!}" class="@if($i%2==1) background-grey @endif p-20 ">
      <div class="heading">
        <h2 class="m-b-20">{!!$c['title'] or ''!!}</h2>
        <p class="text-center">{!!(isset($c['desc'])) ? strip_tags($c['desc'],'<br><b><i><span><strong><em>') : ''!!}</p>
        </div>
        <div class="row">
          @php($j=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && $j++<10)
          <div class="col-md-4">
            @include('module.eachProduct')
          </div>
          @endif @endforeach
        </div>
      </div>
      <hr class="m-0">
      @endif @endforeach --}}
    </div>
    @include('module.postSidebar')
    {{-- <div class="col-md-4 matchHeight">
      <div class="pinBox" id="datphong" style="height: 100%">
        @include('module.datphong')
      </div>
    </div> --}}
  </div>
</div>
</section>
{{-- <div class="m-t-30 pinBox">
  @for ($i = 1; $i < 9; $i++)
    @if(!empty($site['fBanner'.$i]))
      <a class="pinned m-t-20" href="{!!$site["fBanner".$i."Link"]!!}"><img class="m-b-20" src="{!!$site['fBanner'.$i]!!}" style="width: 100%;height: auto"/></a>
    @endif
  @endfor
</div> --}}
<script type="text/javascript">

</script>

{{-- CHỨC NĂNG ĐẶT PHÒNG --}}

<section class="timkiem p-t-20 p-b-20 background-grey" id="datphong">
  <div class="container">
    <div class="heading heading-center">
      <h2>Tình trạng phòng</h2>
    </div>
    <div id=bTinhtrangphong>
      <div class=mBottom20 id=datepicker></div>
      <div class="m-t-10"></div>
      <div style="width: 100%;overflow: hidden;display: block;">
        @if($chiaphong && empty($s['field5']))
        <div class=fl style="margin-right: 20px">
          <i class=dateHet></i> Hết phòng cả tòa
        </div>
        <div class=fl style="margin-right: 20px">
          <i class=dateDadat></i> Còn phòng trống
        </div>
        <div class=fl>
          <i class=dateConphong></i> Còn phòng cả tòa
        </div>
        @else
        <div class=fl style="margin-right: 20px">
          <i class=dateHet></i> Hết phòng
        </div>
        <div class=fl>
          <i class=dateConphong></i> Còn phòng
        </div>
        @endif
      </div>
    </div>
    <div class="heading heading-center m-t-20" id="datphongngay">
      <h2>Đặt phòng ngay</h2>
    </div>
    <form action="" method="get" class="form-inline form-dat-phong" data-element="booking">
      @php(date_default_timezone_set("Asia/Bangkok"))
      <input type="hidden" name="Mã Booking" value="KH{!!time().Helper::generateRandomString(2)!!}">
      <input type="hidden" name="ID Nơi ở" value="{!!$s['id']!!}">
      <input type="hidden" name="Nơi ở" value="{!!$s['title'] or ''!!}">
      <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" name="Ngày đến" class="form-control" id="dt1x" value="{!!(isset($dateFrom)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateFrom)),'l d/m/Y') : Helper::datevn(time(),'l d/m/Y')!!}" placeholder="Ngày đến">
            <i class="fa fa-calendar"></i>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <input type="text" name="Ngày về" class="form-control" id="dt2x" value="{!!(isset($dateTo)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateTo)),'l d/m/Y') : Helper::datevn(strtotime("+1 days"),'l d/m/Y').' (1 đêm)'!!}" placeholder="Ngày về">
            <i class="fa fa-calendar"></i>
          </div>
        </div>
      </div>
      <div class="canhbao" style="display: none;"><p style="font-weight: bold;color: #ef402b;font-style: italic; text-align: center;">Xin lỗi, ngày bạn chọn đã được book!<br>Vui lòng chọn một ngày khác hoặc liên hệ Hotline: <a href="tel:{!!$site["so-hotline"] or ''!!}"><span class="hidden-xs">{!!$site["so-hotline"] or ''!!}</span></a> - <a href="tel:{!!$site["so-hotline-2"] or ''!!}"><span class="hidden-xs">{!!$site["so-hotline-2"] or ''!!}</span></a></p></div>
      <div class="row">
        @php($maxGuest = (empty($s['field1'])) ? 200 : $s['field1'])
        <div class="col-sm-6">
          <div class="form-group">
            <select name="Số lượng người lớn" id="songuoilon" class="form-control">
              @for ($i = 1; $i <= $maxGuest; $i++)
              <option value="{!!$i!!}" @if(isset($numPeople) && $numPeople==$i) selected="" @endif>{!!$i!!} người lớn</option>
              @endfor
            </select>
            <i class="fa fa-user"></i>
          </div>
          @if($tientheosonguoi)
          <script type="text/javascript">
            jQuery(document).ready(function($) {
              $('#songuoilon').on('change', function(event) {
                event.preventDefault();
                var songuoichon = $('#songuoilon').val();
                console.log(songuoichon); 
                @for ($i = 1; $i < 6; $i++)
                @if(!empty($s['nguoi'.$i]))
                if(songuoichon <= {!!$s['nguoi'.$i]!!}){
                  window.location.href="{!!$s['link'] or ''!!}?priceId={!!$i!!}&numPeople="+songuoichon+"#datphongngay"; return;
                }

                @endif
                @endfor
                @if(isset($priceId))
                window.location.href="{!!$s['link'] or ''!!}?numPeople="+songuoichon+"#datphongngay"; return;
                @endif
              });
            });
          </script>
          @endif
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <select name="Số lượng trẻ em" id="sotreem" class="form-control">
              <option value="0" selected="">Số lượng trẻ em (dưới 2 tuổi)</option>
              @for ($i = 0; $i <= $maxGuest; $i++)
              <option value="{!!$i!!}">{!!$i!!} trẻ em</option>
              @endfor
            </select>
            <i class="fa fa-user"></i>
          </div>
        </div>
      </div>
      <div class="chi-tiet-bai-viet">
        <table>
          <tbody>
            <tr>
              <td>Chi phí ở</td>
              <td>
                <span class="chiphio">{!!Helper::money($s['price'])!!}</span>
                <input type="hidden" name="Chi phí ở" class="chiphioinput" value="">
              </td>
            </tr>
            <tr>
              <th>Tổng cộng</th>
              <td>
                <b><span class="tongcong">{!!Helper::money($s['price'])!!}</span></b>
                <input type="hidden" name="Tổng cộng" class="tongconginput" value="">
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="m-b-0" style="font-size:13px;line-height: 1.4"><i><b>Chú ý:</b><br>
                  - Chi phí trên chưa bao gồm chi phí dọn dẹp<br>
                  - Quý khách vui lòng xem kỹ phần <a href="#banggia" class="scroll-to" style="font-size:13px;">Chi tiết giá</a></i>
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="m-b-0 text-center"><b>Nếu bạn có bất cứ thắc mắc nào, hãy liên hệ với chúng tôi qua số Hotline: </b><a href="tel:{!!$site["so-hotline"] or ''!!}"><i class="fa fa-phone"></i> <span class="hidden-xs">{!!$site["so-hotline"] or ''!!}</span></a> - <a href="tel:{!!$site["so-hotline-2"] or ''!!}"><i class="fa fa-phone"></i> <span class="hidden-xs">{!!$site["so-hotline-2"] or ''!!}</span></a></p>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="form-group">
          <button type="button" class="btn btn-action btn-buoc-2 invalid" data-action="Khách hàng bấm Bước 2: Điền thông tin khách hàng trên trang {!!$s['title'] or ''!!}">Bước 2: Điền thông tin khách hàng <i class="fa fa-chevron-right"></i></button>
        </div>
      </div>
      <div class="dien-thong-tin" style="display: none;">
        <h4 class="text-center">ĐIỀN THÔNG TIN KHÁCH HÀNG</h4>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <input type="text" name="Họ và tên" id="hoten" class="form-control" value="" placeholder="Họ và tên (trên CMND/Hộ chiếu)">
              <i class="fa fa-user"></i>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input type="text" name="Số điện thoại" id="sdt1" class="form-control" value="" placeholder="Số điện thoại">
              <i class="fa fa-phone"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <input type="text" name="Email nếu có" id="email" class="form-control" value="" placeholder="Email nếu có">
              <i class="fa fa-envelope"></i>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input type="text" name="Số điện thoại khác nếu có" id="sdt2" class="form-control" value="" placeholder="Số điện thoại khác nếu có">
              <i class="fa fa-phone"></i>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <textarea type="text" name="Yêu cầu khác nếu có" id="yeucau" rows="2" class="form-control" placeholder="Yêu cầu khác nếu có"></textarea>
              <i class="fa fa-pencil"></i>
            </div>
          </div>
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-action btn-buoc-3 invalid" data-action="Khách hàng bấm Bước 3: Xác nhận thông tin đặt phòng trên trang {!!$s['title'] or ''!!}">Bước 3: Xác nhận thông tin đặt phòng <i class="fa fa-chevron-right"></i></button>
        </div>
      </div>
      <div class="xac-nhan-thong-tin chi-tiet-bai-viet" style="display: none;">
        <h4 class="text-center">XÁC NHẬN THÔNG TIN ĐẶT PHÒNG</h4>
        <table class="table table-striped">
          <tbody>
            <tr>
              <td colspan="2"><b>{!!$s['title'] or ''!!}</b></td>
            </tr>
            <tr>
              <td>Thời gian</td>
              <td><span class="thoigian">-</span></td>
            </tr>
            <tr>
              <td>Số khách</td>
              <td><span class="sokhach">-</span></td>
            </tr>
            <tr>
              <td>Thông tin khách hàng</td>
              <td>
                <span class="thongtinkhachhang">-</span>
              </td>
            </tr>
            <tr>
              <td>Chi phí ở</td>
              <td><span class="chiphio">{!!Helper::money($s['price'])!!}</span></td>
            </tr>
            <tr>
              <th>Tổng cộng</th>
              <td><b><span class="tongcong">{!!Helper::money($s['price'])!!}</span></b></td>
            </tr>
            <tr>
              <td>Chính sách Hủy/ Hoàn trả/ Thay đổi</td>
              <td>
                <div class="mdtPriceBlack" style="color: #40ae64">
                  <p><a href="{!!$post[7]['link']!!}" target="_blank">Xem chi tiết ở đây</a></p>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="m-b-0" style="font-size:13px;line-height: 1.4"><i><b>Chú ý:</b><br>
                  - Chi phí trên chưa bao gồm chi phí dọn dẹp<br>
                  - Quý khách vui lòng xem kỹ phần <a href="#banggia" class="scroll-to" style="font-size:13px;">Chi tiết giá</a></i>
                </p>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <p class="m-b-0 text-center"><b>Nếu bạn có bất cứ thắc mắc nào, hãy liên hệ với chúng tôi qua số Hotline: </b><a href="tel:{!!$site["so-hotline"] or ''!!}"><i class="fa fa-phone"></i> <span class="hidden-xs">{!!$site["so-hotline"] or ''!!}</span></a> - <a href="tel:{!!$site["so-hotline-2"] or ''!!}"><i class="fa fa-phone"></i> <span class="hidden-xs">{!!$site["so-hotline-2"] or ''!!}</span></a></p>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="form-group">
          <input type="hidden" name="mail-to" value="{!!$site['dia-chi-email']!!}">
          <input type="hidden" name="subject" value="Đặt phòng Acasa #{!!time().Helper::generateRandomString(2)!!}">
          <button type="button" class="btn btn-send-mail btn-dat-ngay invalid btn-action" data-action="Khách hàng bấm nút Đặt ngay trên trang {!!$s['title'] or ''!!}"> <i class="fa fa-check"></i> Đặt ngay</button>
        </div>
      </div>
    </form>
  </div>
</section>
<script>
  <?php 
  $bookingDates = [];
  foreach ($booking as $b) {
    $bookingDates = array_merge($bookingDates, date_range($b['ngayden'],$b['ngayve']));
  }

  if(isset($allBooking)){
    $bookingDatesChild = [];
    // Nếu là villa cha, tìm tất cả booking của villa con và thêm vào $bookingDates
    if(empty($s['field5'])){
      $roomId = [];
      foreach($post as $p){
        if($p['field5'] == $s['id']){
          $roomId[] = $p['id'];
        }
      }
      if(!empty($roomId)){
        foreach($allBooking as $b){
          foreach($roomId as $r){
            if($b['post_id'] == $r){
              $bookingDatesChild = array_merge($bookingDatesChild, date_range($b['ngayden'],$b['ngayve']));
            }
          }
        }
      }
      //var_dump($bookingDatesChild); 
      $bookingDates = array_merge($bookingDates, $bookingDatesChild);
    // Nếu là villa con, tìm tất cả booking của villa cha và thêm vào $bookingDates
    }else{
      foreach($allBooking as $b){
        if($b['post_id'] == $s['field5']){
          $bookingDates = array_merge($bookingDates, date_range($b['ngayden'],$b['ngayve']));
        }
      }
    }
  }

  function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {
    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last)-86400;
    while( $current <= $last ) {
      $dates[] = date($output_format, $current);
      $current = strtotime($step, $current);
    }
    return $dates;
  }
  ?>

  var SelectedDates = {};
  @foreach($bookingDatesChild as $b)
  SelectedDates['{!!$b or ''!!}'] = '{!!$b or ''!!}';
  @endforeach
  console.log(SelectedDates); 

  var ngay_dat_phong = [@foreach ($bookingDates as $item)"{!!str_replace(' ', '', $item)!!}"{!!($loop->last)?'':','!!}@endforeach];
  $ = jQuery;
  jQuery(document).ready(function( $ ) {
    var opt = { dateFormat: 'dd/mm/yy', minDate: 0, firstDay: 1 };
    if(ngay_dat_phong.length > 0) {
      opt.beforeShowDay = function(date) {
        var string = $.datepicker.formatDate('dd/mm/yy', date);
        var str_class = 'day-' + date.getDay();

        var Highlight = SelectedDates[string];
        if (Highlight) {
          console.log(Highlight,string); 
          str_class += ' conphong';
        }
        else {
          console.log('hihi',string); 
        }
          return [ ngay_dat_phong.indexOf(string) == -1, str_class ];
      }
    }
    $("#datepicker").datepicker(opt);

    $("#dt1x").datepicker({
      onSelect: function () {
        var dt2x = $('#dt2x');
        var startDate = $(this).datepicker('getDate');
        var minDate = $(this).datepicker('getDate');
        var dt2xDate = dt2x.datepicker('getDate');
        var dateDiff = (dt2xDate - minDate)/(86400 * 1000);

        startDate.setDate(startDate.getDate() + 30);
        if (dt2xDate == null || dateDiff < 0) {
          dt2x.datepicker('setDate', minDate);
        }
        else if (dateDiff > 30){
          dt2x.datepicker('setDate', startDate);
        }
        dt2x.datepicker('option', 'maxDate', startDate);
        minDate.setDate(minDate.getDate() + 1);
        dt2x.datepicker('option', 'minDate', minDate);
        dt2x.datepicker('setDate', minDate);
        dt2x.val(dt2x.val() + ' (1 đêm)');
        tinhtien();
        xacnhanthongtin();
      },
      beforeShowDay: function(date) {
        var string = $.datepicker.formatDate('dd/mm/yy', date);
        var str_class = 'day-' + date.getDay();
        return [ ngay_dat_phong.indexOf(string) == -1, str_class ];
      }
    });

    $('#dt2x').datepicker({
      onSelect: function(a, b) {
        var diff = $('#dt1x').datepicker("getDate") - $(this).datepicker("getDate");
        diff = Math.floor(diff / (1000 * 60 * 60 * 24) * -1);
        var value = a + ' (' + diff + ' đêm)';
        $(this).val(value);
        tinhtien();
        xacnhanthongtin();
      }
    });

    $('.form-dat-phong').on('change', '#songuoilon, #sotreem', function(event) {
      event.preventDefault();
      tinhtien();
      xacnhanthongtin();
    });
    $('.form-dat-phong').on('keyup', '#hoten, #sdt1, #sdt2, #email, #yeucau', function(event) {
      event.preventDefault();
      xacnhanthongtin();
    });

    var ngayle = [@foreach (explode(',',$site["cac-ngay-le-nam-nay"]) as $item)"{!!str_replace(' ', '', $item).'/'.date('Y')!!}"{!!($loop->last)?'':','!!}@endforeach];

    tinhtien();
    xacnhanthongtin();

    $('.btn-buoc-2').on('click', function(event) {
      event.preventDefault();
      if(!$(this).hasClass('invalid')){
        $(this).hide();
        $('.dien-thong-tin').slideToggle();
        xacnhanthongtin();
      }
    });
    $('.btn-buoc-3').on('click', function(event) {
      event.preventDefault();
      if(!$(this).hasClass('invalid')){
        $(this).hide();
        $('.xac-nhan-thong-tin').slideToggle();
        xacnhanthongtin();
      }
    });

    function tinhtien(){
      console.log('tinhtien');
      console.log('ngayle',ngayle);
      var startDate = $('#dt1x').datepicker("getDate");
      var stopDate = $('#dt2x').datepicker("getDate");
      stopDate.setDate(stopDate.getDate()-1);
      console.log('startDate',startDate,'stopDate',stopDate);
      var totalPrice = 0;
      var canhbao = false;
      var dates = getDates(startDate,stopDate);
      dates.forEach(function(date) {
        // console.log(date);
        dateNew = $.datepicker.formatDate('dd/mm/yy', date);
        if(date.getDay() == 6 || isInArray(ngayle,dateNew)){ //Nếu date là T7 hoặc ngày lễ tính giá price_ngayle
          totalPrice += {!!$s['price_ngayle']!!};
        }else if(date.getDay() == 0 || date.getDay() == 5){ //Nếu date là T6 hoặc Chủ Nhật tính giá price_cuoituan
          totalPrice += {!!$s['price_cuoituan']!!};
        }else{ //Nếu không thì tính giá ngày thường
          totalPrice += {!!$s['price']!!};
        }
        if(isInArray(ngay_dat_phong,dateNew)){
          canhbao = true;
        }
      });
      totalPrice = formatNumber(totalPrice) + 'đ';
      $('.chiphio').text(totalPrice);
      $('.chiphioinput').val(totalPrice);
      $('.tongcong').text(totalPrice);
      $('.tongconginput').val(totalPrice);
      if(canhbao){
        console.log('canhbao'); 
        $('.canhbao').show();
        $('.btn-buoc-2').addClass('invalid');
        $('.btn-buoc-3').addClass('invalid');
        $('.btn-dat-ngay').addClass('invalid');
      }else{
        $('.canhbao').hide();
        $('.btn-buoc-2').removeClass('invalid');
        $('.btn-buoc-3').removeClass('invalid');
        $('.btn-dat-ngay').removeClass('invalid');
      }
    }

    function xacnhanthongtin(){
      console.log('xacnhanthongtin');
      if($('#songuoilon').val()=='' || $('#songuoilon').val()==null || $('#songuoilon').val()==undefined){
        $('.btn-buoc-2').addClass('invalid');
      }
      if($('#hoten').val()=='' || $('#hoten').val()==null || $('#hoten').val()==undefined || $('#sdt1').val()=='' || $('#sdt1').val()==null || $('#sdt1').val()==undefined || $('.canhbao').is(":visible")){
        $('.btn-buoc-3').addClass('invalid');
        $('.btn-dat-ngay').addClass('invalid');
      }else{
        console.log('info ok'); 
        $('.btn-buoc-3').removeClass('invalid');
        $('.btn-dat-ngay').removeClass('invalid');
      }

      $('.thoigian').text($('#dt1x').val() + ' => ' + $('#dt2x').val());
      if($('#sotreem').val() != '' && $('#sotreem').val() != null && $('#sotreem').val() != undefined){
        $('.sokhach').text($('#songuoilon').val() + ' người lớn, ' + $('#sotreem').val() + '  trẻ em dưới 2 tuổi');
      }else{
        $('.sokhach').text($('#songuoilon').val() + ' người lớn');
      }
      $('.thongtinkhachhang').html($('#hoten').val() + ' - ' + $('#sdt1').val() + ' ' + $('#sdt2').val() + '<br>' + $('#email').val() + '<br>' + $('#yeucau').val());
    }

    function getDates(startDate, endDate) {
      var dates = [],
      currentDate = startDate,
      addDays = function(days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
      };
      while (currentDate <= endDate) {
        dates.push(currentDate);
        currentDate = addDays.call(currentDate, 1);
      }
      return dates;
    }

  });
</script>
{{-- CHỨC NĂNG ĐẶT PHÒNG --}}

@if(!Helper::checkEmptyString($s['desc_full']))
<!--section class="p-t-20">
  <div class="container">
    <div class="chi-tiet-bai-viet">
      {!!$s['desc_full']!!}
      {{-- @if(Helper::checkEmptyString($s['desc_full']))
      {!!$post[1]['desc_full'] or ''!!}
      @endif --}}
      {{-- <div class="m-t-20">
        {!!$site['doan-thong-tin-lien-he-duoi-moi-san-pham']!!}
      </div> --}}
    </div>
    {{-- @include('module.comment') --}}
  </div>
  {{-- @include('module.productSidebar') --}}
{{-- </div> --}}
{{-- </div> --}}
</section-->
@endif
{{-- <section class="productCategory p-t-60 p-b-20">
  <div class=container>
    <div class="heading heading-center m-b-50">
      <h2 class="m-b-10">Nơi ở khác gần đó</h2>
    </div>
    <div class="shop">
        <div class="row">
          @php($i=0) @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && $i++<4 && empty($p['field5']))
          <div class="col-md-6">
            @include('module.eachProduct')
          </div>
          @endif @endforeach
        </div>
      </div>
    </div>
  </section> --}}
  @endsection