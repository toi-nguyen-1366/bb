@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')

<?php
//if(!empty(Request::get('priceId'))){
  //$priceId = Helper::cleanText(Request::get('priceId'));
  //if(!empty($s['nguoi'.$priceId])){
    //if(!empty($s['price'.$priceId])){
      //$s['price'] = $s['price'.$priceId];
    //}
    //if(!empty($s['price_cuoituan'.$priceId])){
      //$s['price_cuoituan'] = $s['price_cuoituan'.$priceId];
    //}
    //if(!empty($s['price_ngayle'.$priceId])){
      //$s['price_ngayle'] = $s['price_ngayle'.$priceId];
    //}
  //}
//}
?> 
<section class="o654 sidebar-left sanp p-b-20 p-t-20 product-page background-grey" id="chitiet">
  <div class="o655 container">
    <div class="o656 heading heading-center row">
      <h1 class="o657 " >@if(!empty($s['field21'])) {!!$s['field21'] or ''!!} @else {!!$s['title'] or ''!!} @endif @if(!empty($s['field5']) && isset($post[$s['field5']])) - {!!$post[$s['field5']]['title']!!} @endif {!!$s['sku'] or ''!!}</h1>
    </div>
    <div class="o658 product m-b-0">
      <div class="o659 "  style="width: 700px; max-width: 100%;margin:auto;">
        @if(!empty($s["img"]))
        <p class="o660 " > 
          {{-- <div class="o661 carousel dots-inside arrows-visible m-b-5" data-items="1" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=false> --}}
            @if(!empty($s['video']) && empty($s['field20']))
            <a data-href="{!!$s['link'] or ''!!}?quickView=1&all=2" {{-- data-lightbox="ajax" --}} {{--  href="{!!$s['video']!!}" data-lightbox="iframe" --}} class="o662 height500 height500big gallery-video ajaxvideo" style="background: url('{!!$s['img_thumb']!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block; padding-top: 0%"><img class="o663 "  src="/public/frontend/image/play.png"  alt="play"></a>
            {{-- <a href="{!!$s['video']!!}" data-lightbox="iframe" class="o664 height500 gallery-video" style="background: url('{!!Helper::youtubeThumb($s['video'])!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block; padding-top: 0%"><img class="o665 "  src="/public/frontend/image/play.png"  alt="play"></a> --}}
            @else
            <a href="{!!$s['link'] or ''!!}?quickView=1&all=2" data-lightbox="ajax" class="o666 height500 height500big" style="background: url('{!!$s['img']!!}');background-size: cover;background-position: contain;background-repeat: no-repeat;display: block;"></a>
            @endif
          {{-- @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
          <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o667 height500" style="background: url('{!!$img[0]!!}');background-size: cover;background-position: contain;background-repeat: no-repeat;display: block;">
          </a>
          @endif @endforeach @endif --}}
        </p>
        @endif
        @if(!empty($s["img"]))
        <div class="o668 anhnho carousel dots-inside arrows-visible m-b-0" data-margin=5 data-items="6" data-items-xxs="3" data-lightbox="gallery" data-loop=true data-dots=false data-arrows=true data-autoplay="true" data-autoplay-timeout="2000">
          @if(!empty($s['video']))
          <a data-href="{!!$s['link'] or ''!!}?quickView=1&all=2" class="o669 gallery-video ajaxvideo" style="background: url('{!!Helper::youtubeThumb($s['video'])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img class="o670 "  src="/public/frontend/image/play.png"  alt="play"></a>
          @endif
          {{-- <a href="{!!$s['img_thumb']!!}" data-lightbox="gallery-item" class="o671 " style="background: url('{!!$s['img_thumb']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px"></a> --}}
          @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
          <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o672 " style="background: url('{!!str_replace('/upload/', '/thumbs/', $img[0])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px">
            {{-- <img class="o673 img-responsive img-rounded img-thumbnail" alt="{!!$img[1]!!}" src="{!!$img[0]!!}"> --}}
          </a>
          @endif @endforeach @endif
        </div>
        @endif
      </div>
     {{--  @if(!empty($s["img"]))
      <div class="o674 carousel dots-inside arrows-visible m-b-20" data-items="1" data-lightbox="gallery" data-loop=true data-dots=false>
        <a href="{!!$s['img']!!}" data-lightbox="gallery-item" class="o675 height500" style="background: url('{!!$s['img']!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block;"></a>
        @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
        <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="o676 height500" style="background: url('{!!$img[0]!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block;">
        </a>
        @endif @endforeach @endif
      </div>
      @endif --}}
      {{-- <div class="o677 text-center m-b-20">{!!$s['desc']!!}</div> --}}
      <div class="o678 m-b-10 m-t-10 float-right ">
        <div class="o679 fb-like" data-href="https://phamtanvilla.com/{!!$s['link'] or ''!!}" data-width=300 data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        {{-- <div class="o680 post-meta-share">
          <a class="o681 btn btn-xs btn-facebook" target="_blank" href="//www.facebook.com/sharer.php?u=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;t=">
            <i class="o682 fa fa-facebook"></i>
            <span class="o683 " >Share</span>
          </a>
          <a class="o684 btn btn-xs btn-twitter" target="_blank" href="//twitter.com/share?text=Great!&amp;url=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;hashtags=" data-width="100">
            <i class="o685 fa fa-twitter"></i>
            <span class="o686 " >Tweet</span>
          </a>
          <a class="o687 btn btn-xs btn-instagram" target="_blank" href="//www.instagram.com/?url=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;t=">
            <i class="o688 fa fa-instagram"></i>
            <span class="o689 " >Instagram</span>
          </a>
          <a class="o690 btn btn-xs btn-pinterest" target="_blank" href="//pinterest.com/pin/create/button/?url=https://phamtanvilla.com/{!!$s['link'] or ''!!}&amp;t=">
            <i class="o691 fa fa-pinterest"></i>
            <span class="o692 " >Pinterest</span>
          </a>
        </div> --}}
      </div>
      <div class="o693 chi-tiet-bai-viet">

        @php($chiaphong = false)
        @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && !empty($p['field5'] && ($p['field5'] == $id || $p['field5'] == $s['field5'])))
        @php($chiaphong = true)
        @endif @endforeach

        @if($chiaphong)
        <div class="o694 chi-tiet-bai-viet">
          <p class="o695 "  style="text-align: center;font-weight: bold;font-style: italic;">Villa cho phép đặt cả villa hoặc theo phòng:</p>
          <table class="o696 table table-striped m-b-20">
            {{-- <thead class="o697 " >
              <tr class="o698 " >
                <th class="o699 " >Tên phòng</th>
                <th class="o700 " >Sức chứa</th>
                <th class="o701 " >Số giường</th>
                <th class="o702 " >Số nhà tắm</th>
                <th class="o703 " >Giá từ</th>
                <th class="o704 " ></th>
              </tr>
            </thead> --}}
            <tbody class="o705 " >
              @if(!empty($s['field5']) && isset($post[$s['field5']]))
              @php($p = $post[$s['field5']])
              @else
              @php($p = $s)
              @endif
              <tr @if($p['id'] == $s['id']) class="o706 active" @endif>
                <td class="o707 " ><a class="o708 "  href="{!!$p['link'] or ''!!}">Cả Villa</a></td>
                <td class="o709 " >{!!$p['field1'] or ''!!} <i class="o710 fa fa-users"></i></td>
                <td class="o711 " >{!!$p['field2'] or ''!!} <i class="o712 fa fa-bed"></i></td>
                <td class="o713 " >{!!$p['field3'] or ''!!} <i class="o714 fa fa-bath"></i></td>
                <td class="o715 " >Từ {!!Helper::money($p['price'])!!} / đêm</td>
                <td class="o716 " >@if($p['id'] == $s['id']) Bạn đang xem mục này @else <a href="{!!$p['link'] or ''!!}" class="o717 btn-primary btn btn-xs">Xem villa</a> @endif</td>
              </tr>
              @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && !empty($p['field5'] && ($p['field5'] == $id || $p['field5'] == $s['field5'])))
              <tr @if($p['id'] == $s['id']) class="o718 active" @endif>
                <td class="o719 " ><a class="o720 "  href="{!!$p['link'] or ''!!}">{!!$p['title'] or ''!!}</a></td>
                <td class="o721 " >{!!$p['field1'] or ''!!} <i class="o722 fa fa-users"></i></td>
                <td class="o723 " >{!!$p['field2'] or ''!!} <i class="o724 fa fa-bed"></i></td>
                <td class="o725 " >{!!$p['field3'] or ''!!} <i class="o726 fa fa-bath"></i></td>
                <td class="o727 " >Từ {!!Helper::money($p['price'])!!} / đêm</td>
                <td class="o728 " >@if($p['id'] == $s['id']) Bạn đang xem mục này @else <a href="{!!$p['link'] or ''!!}" class="o729 btn-primary btn btn-xs">Xem phòng</a> @endif</td>
              </tr>
              @endif @endforeach
            </tbody>
          </table>
        </div>
        @endif

        @php($tientheosonguoi = false)
        @if(!empty($s['nguoi1']) || !empty($s['nguoi2']) || !empty($s['nguoi3']) || !empty($s['nguoi4']) || !empty($s['nguoi5']))
        @php($tientheosonguoi = true)
        <table class="o730 table table-bordered m-b-10 hidden" id="banggia">
          <tbody class="o731 " >
            <tr class="o732 " >
              <th class="o733 "  colspan="2">Giá theo số lượng người ở</th>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <th class="o734 " >Dành cho đoàn {!!$s['nguoi'.$i]!!} người</th>
              @endif
              @endfor
            </tr>
            <tr class="o735 " >
              <th class="o736 "  rowspan="3">Bảng giá @if(empty($s['field5']))(cho cả Villa)@else phòng {!!$s['title'] or ''!!}@endif</th>
              <td class="o737 " >Đêm ngày thường (Từ thứ 2 đến thứ 5)</td>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <td class="o738 " >{!!Helper::money($s['price'.$i])!!} / đêm</td>
              @endif
              @endfor
            </tr>
            <tr class="o739 " >
              <td class="o740 " >Đêm Thứ 6 và Chủ Nhật</td>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <td class="o741 " >{!!Helper::money($s['price_cuoituan'.$i])!!} / đêm</td>
              @endif
              @endfor
            </tr>
            <tr class="o742 " >
              <td class="o743 " >Đêm thứ 7 & dịp lễ Tết</td>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['nguoi'.$i]))
              <td class="o744 " >{!!Helper::money($s['price_ngayle'.$i])!!} / đêm</td>
              @endif
              @endfor
            </tr>
            <tr class="o745 " >
              <td class="o746 " ><b class="o747 " >Số người tiêu chuẩn</b></td>
              <td class="o748 "  colspan="100%">{!!$s['field1']!!} người {{-- ({!!$s['field2']!!} giường, {!!$s['field3']!!} nhà tắm/wc) --}}</td>
            </tr>
          </tbody>
        </table>
        @else
        <table class="o749 table table-bordered m-b-10 hidden" id="banggia">
          <tbody class="o750 " >
            <tr class="o751 " >
              <th class="o752 "  rowspan="3">Bảng giá @if(empty($s['field5']))(cho cả Villa)@else phòng {!!$s['title'] or ''!!}@endif</th>
              <td class="o753 " >Đêm ngày thường (Từ thứ 2 đến thứ 5)</td>
              <td class="o754 " ><b class="o755 " >{!!Helper::money($s['price'])!!} / đêm</b></td>
            </tr>
            <tr class="o756 " >
              <td class="o757 " >Đêm Thứ 6 và Chủ Nhật</td>
              <td class="o758 " ><b class="o759 " >{!!Helper::money($s['price_cuoituan'])!!} / đêm</b></td>
            </tr>
            <tr class="o760 " >
              <td class="o761 " >Đêm thứ 7 & dịp lễ Tết</td>
              <td class="o762 " ><b class="o763 " >{!!Helper::money($s['price_ngayle'])!!} / đêm</b></td>
            </tr>
            <tr class="o764 " >
              <td class="o765 " ><b class="o766 " >Số người tiêu chuẩn</b></td>
              <td class="o767 "  colspan="2">{!!$s['field1']!!} người {{-- ({!!$s['field2']!!} giường, {!!$s['field3']!!} nhà tắm/wc) --}}</td>
            </tr>
          </tbody>
        </table>
        @endif



        <div class="o768 chi-tiet-bai-viet" id="chitiet">
          <table class="o769 table table-bordered banggia">
            <thead class="o770 " >
              <tr class="o771 " >
                <th class="o772 bg1 text-center" style="    font-size: 30px;">Ngày</th>
                <th class="o773 bg2 text-center" style="    font-size: 30px;">Giá</th>
                {{-- <th class="o774 bg3">Giá khuyến mãi</th> --}}
                <th class="o775 bg4 text-center" style="width: 40%;    font-size: 30px;">Ghi chú</th>
              </tr>
            </thead>
            <tbody class="o776 " >
              <tr class="o777 " >
                <th class="o778 " >Giá thứ 2 đến thứ 5</th>
                <td class="o779 " >
                  <del class="o780 " >{!!Helper::money($s['price1x'])!!}</del>
                  <span class="o781 gia">{!!Helper::money($s['price_cuoituan1x'])!!}</span>
                  @if(!empty($s['price1x']))<span class="o782 giamgia">-{!!round(($s['price1x']-$s['price_cuoituan1x'])*100/$s['price1x'])!!}%</span>@endif
                </td>
                <td class="o783 "  rowspan="5">{!!$s['spec'] or ''!!}</td>
              </tr>
              <tr class="o784 " >
                <th class="o785 " >Giá thứ 6</th>
                <td class="o786 " >
                  <del class="o787 " >{!!Helper::money($s['price2x'])!!}</del>
                  <span class="o788 gia">{!!Helper::money($s['price_cuoituan2x'])!!}</span>
                  @if(!empty($s['price2x']))<span class="o789 giamgia">-{!!round(($s['price2x']-$s['price_cuoituan2x'])*100/$s['price2x'])!!}%</span>@endif
                </td>
              </tr>
              <tr class="o790 " >
                <th class="o791 " >Giá thứ 7</th>
                <td class="o792 " >
                  <del class="o793 " >{!!Helper::money($s['price3x'])!!}</del>
                  <span class="o794 gia">{!!Helper::money($s['price_cuoituan3x'])!!}</span>
                  @if(!empty($s['price3x']))<span class="o795 giamgia">-{!!round(($s['price3x']-$s['price_cuoituan3x'])*100/$s['price3x'])!!}%</span>@endif
                </td>
              </tr>
              <tr class="o796 " >
                <th class="o797 " >Giá chủ nhật</th>
                <td class="o798 " >
                  <del class="o799 " >{!!Helper::money($s['price4x'])!!}</del>
                  <span class="o800 gia">{!!Helper::money($s['price_cuoituan4x'])!!}</span>
                  @if(!empty($s['price4x']))<span class="o801 giamgia">-{!!round(($s['price4x']-$s['price_cuoituan4x'])*100/$s['price4x'])!!}%</span>@endif
                </td>
              </tr>
              <tr class="o802 " >
                <th class="o803 " >Giá ngày lễ</th>
                <td class="o804 " >
                  <del class="o805 " >{!!Helper::money($s['price5x'])!!}</del>
                  <span class="o806 gia">{!!Helper::money($s['price_cuoituan5x'])!!}</span>
                  @if(!empty($s['price5x']))<span class="o807 giamgia">-{!!round(($s['price5x']-$s['price_cuoituan5x'])*100/$s['price5x'])!!}%</span>@endif
                </td>
              </tr>
            </tbody>
          </table>
          <p class="o808 text-center m-b-10">
            <a href="#datphong" onclick="$('#chitiet').hide();$('#datphong').show();" class="o809 btn btn-my btn-youtube tonho">ĐẶT NGAY {!!$s['sku'] or ''!!}</a>
            <a href="javascript:void(0)" class="o810 btn btn-my  btn-mua btn-youtube tonho" data-name="{!!$p['categoryInfo']['title'] or ''!!} - {!!$p['title'] or ''!!}" data-link="{!!$p['field8'] or ''!!}">{{-- Book now --}}TƯ VẤN CHO TÔI</a>
          </p>
          {!! str_replace('[xemnhanh]', '<div class="o811 accordion"><div class="o812 ac-item"><h5 class="o813 ac-title">'.$s['field38'].'</h5><div class="o814 ac-content">'.$s['field39'].'</div></div>',str_replace('[book]', '<p class="o815 text-center m-b-10"><a href="#datphong" class="o816 btn btn-my btn-youtube tonho">ĐẶT NGAY</a></p>', $s['desc_full']))!!}
          <hr class="o817 " >
          <div class="o818 accordion">

            <?php
            $faq = [];
            for ($i = 22; $i < 37; $i++){
              if($i%2==0 && !empty($s['field'.$i])){
                if(empty($s['field'.$i.'x'])){$s['field'.$i.'x'] = $i*10;}
                $faq[] = [
                  "thu-tu-sap-xep" => $s['field'.$i.'x'],
                  "cauhoi" => $s['field'.$i],
                  "traloi" => $s['field'.($i+1)],
                ];
              }
            }
            $sort = array_column($faq, 'thu-tu-sap-xep');
            array_multisort($sort, SORT_ASC, $faq);
            ?>

            @foreach($faq as $f)
            <div class="o819 ac-item"><h5 class="o820 ac-title">{!!$f['cauhoi'] or ''!!}</h5><div class="o821 ac-content">{!!$f['traloi'] or ''!!}</div></div>
            @endforeach

            {{-- @if(!empty($s['field22']))<div class="o822 ac-item"><h5 class="o823 ac-title">{!!$s['field22'] or ''!!}</h5><div class="o824 ac-content">{!!$s['field23'] or ''!!}</div></div>@endif
            @if(!empty($s['field24']))<div class="o825 ac-item"><h5 class="o826 ac-title">{!!$s['field24'] or ''!!}</h5><div class="o827 ac-content">{!!$s['field25'] or ''!!}</div></div>@endif
            @if(!empty($s['field26']))<div class="o828 ac-item"><h5 class="o829 ac-title">{!!$s['field26'] or ''!!}</h5><div class="o830 ac-content">{!!$s['field27'] or ''!!}</div></div>@endif
            @if(!empty($s['field28']))<div class="o831 ac-item"><h5 class="o832 ac-title">{!!$s['field28'] or ''!!}</h5><div class="o833 ac-content">{!!$s['field29'] or ''!!}</div></div>@endif
            @if(!empty($s['field30']))<div class="o834 ac-item"><h5 class="o835 ac-title">{!!$s['field30'] or ''!!}</h5><div class="o836 ac-content">{!!$s['field31'] or ''!!}</div></div>@endif
            @if(!empty($s['field32']))<div class="o837 ac-item"><h5 class="o838 ac-title">{!!$s['field32'] or ''!!}</h5><div class="o839 ac-content">{!!$s['field33'] or ''!!}</div></div>@endif
            @if(!empty($s['field34']))<div class="o840 ac-item"><h5 class="o841 ac-title">{!!$s['field34'] or ''!!}</h5><div class="o842 ac-content">{!!$s['field35'] or ''!!}</div></div>@endif
            @if(!empty($s['field36']))<div class="o843 ac-item"><h5 class="o844 ac-title">{!!$s['field36'] or ''!!}</h5><div class="o845 ac-content">{!!$s['field37'] or ''!!}</div></div>@endif --}}
          </div> 
          
        </div>

        <p class="o846 text-center">
          <a href="#datphong" onclick="$('#chitiet').hide();$('#datphong').show();" class="o847 btn btn-my btn-youtube tonho">ĐẶT NGAY {!!$s['sku'] or ''!!}</a>
          <a href="javascript:void(0)" class="o848 btn btn-my btn-mua btn-youtube tonho" data-name="{!!$p['categoryInfo']['title'] or ''!!} - {!!$p['title'] or ''!!}" data-link="{!!$p['field8'] or ''!!}">{{-- Book now --}}TƯ VẤN CHO TÔI</a>

        </p>
        {{-- <p class="o849 text-center"><a id="priceLinkMore" class="o850 mItemLink mRight15" onclick="$('#boxPrice').slideToggle();$(this).hide()" href="javascript:void(0)">Xem chi tiết giá và phụ thu <i class="o851 fa fa-caret-down"></i></a></p> --}}
        {{-- <div id="boxPrice" class="o852 mDetailPrice" style="display: none;">
          <p class="o853 " >Ngoài mức giá như trên, chi phí đặt phòng có thể thay đổi bởi:</p>
          <table class="o854 table table-striped">
            <tbody class="o855 " >
              <tr class="o856 " >
                <td class="o857 " >Phụ thu người lớn</td>
                <td class="o858 " >
                  <b class="o859 " >{!!$s['field6'] or '200.000đ / người'!!}</b><br class="o860 " >
                  <span class="o861 "  style="font-size: 0.9em!important"><i class="o862 " >(Số khách tăng thêm không được vượt quá số khách tối đa cho phép)</i></span>
                </td>
              </tr>
              <tr class="o863 " >
                <td class="o864 " >Phụ thu trẻ em</td>
                <td class="o865 " >
                  <b class="o866 " >{!!$s['field7'] or '200.000đ / người'!!}</b><br class="o867 " >
                  <span class="o868 "  style="font-size: 0.9em!important;"><i class="o869 " >(Chi phí này không bao gồm trong tiền thuê phòng và khách trả trực tiếp cho quản gia)</i></span>
                </td>
              </tr>
              <tr class="o870 " >
                <td class="o871 " >Chính sách Hủy/ Hoàn trả/ Thay đổi</td>
                <td class="o872 " >
                  <div class="o873 mdtPriceBlack" style="color: #40ae64">
                    <p class="o874 " ><a class="o875 "  href="{!!$post[7]['link']!!}" target="_blank">Xem chi tiết ở đây</a></p>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <p class="o876 text-right"><a class="o877 mItemLink mRight15" onclick="$('#priceLinkMore').show();$('#boxPrice').slideToggle();" href="javascript:void(0)">Thu gọn <i class="o878 fa fa-caret-up"></i></a></p>
        </div> --}}
      </div>
    </div>
  </div>
</section>
{{-- <section class="o879 " >
  <div class="o880 container">
    <div class="o881 chi-tiet-bai-viet">
      {!!$s['spec']!!}
    </div>
  </div>
</section> --}}
<section class="o882 timkiem" id="datphong" style="display: none;">
  <div class="o883 container">
    <div class="o884 heading heading-center" hidden>
      <h2 class="o885 " >Tình trạng</h2>
      <p class="o886 " >Tìm phòng, villa còn trống bên dưới</p>
    </div>
    <div class="o887 "  id=bTinhtrangphong hidden>
      <div class=mBottom20 id=datepicker></div>
      <div class="o888 m-t-10"></div>
      <div class="o889 "  style="width: 100%;overflow: hidden;display: block;">
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
    <div class="o890 heading heading-center m-t-20" id="datphongngay">
      <h2 class="o891 uppercase">ĐẶT NGAY @if(!empty($s['field21'])) {!!$s['field21'] or ''!!} @else {!!$s['title'] or ''!!} @endif @if(!empty($s['field5']) && isset($post[$s['field5']])) - {!!$post[$s['field5']]['title']!!} @endif</h2>
      <p class="o892 " >Hãy điền đầy đủ thông tin để việc đặt villa, phòng diễn ra nhanh chóng</p>
    </div>
    <form action="" method="get" class="o893 form-inline form-dat-phong" data-element="booking">
      <?php date_default_timezone_set("Asia/Bangkok"); ?>
      <input class="o894 "  type="hidden" name="Mã Booking" value="KH{!!time().Helper::generateRandomString(2)!!}">
      <input class="o895 "  type="hidden" name="ID Nơi ở" value="{!!$s['id']!!}">
      <input class="o896 "  type="hidden" name="Nơi ở" value="{!!$s['title'] or ''!!}">
      <div class="o897 "  id="thongtinkhach">
        <div class="o898 row">
          <div class="o899 col-sm-6">
            <label class="o900 " >Ngày đến*</label>
            <div class="o901 form-group">
              <input type="text" name="Ngày đến" class="o902 form-control" id="dt1x" value="{!!(isset($dateFrom)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateFrom)),'l d/m/Y') : Helper::datevn(time(),'l d/m/Y')!!}" placeholder="Ngày đến">
              <i class="o903 fa fa-calendar"></i>
            </div>
          </div>
          <div class="o904 col-sm-6">
            <label class="o905 " >Ngày về*</label>
            <div class="o906 form-group">
              <input type="text" name="Ngày về" class="o907 form-control" id="dt2x" value="{!!(isset($dateTo)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateTo)),'l d/m/Y') : Helper::datevn(strtotime("+1 days"),'l d/m/Y').' (1 đêm)'!!}" placeholder="Ngày về">
              <i class="o908 fa fa-calendar"></i>
            </div>
          </div>
        </div>
        <div class="o909 canhbao" style="display: none;"><p class="o910 "  style="font-weight: bold;color: #ef402b;font-style: italic; text-align: center;">Xin lỗi, ngày bạn chọn đã được book!<br class="o911 " >Vui lòng chọn một ngày khác hoặc liên hệ Hotline: <a class="o912 "  href="tel:{!!$site["so-hotline"] or ''!!}"><span class="o913 hidden-xs">{!!$site["so-hotline"] or ''!!}</span></a> - <a class="o914 "  href="tel:{!!$site["so-hotline-2"] or ''!!}"><span class="o915 hidden-xs">{!!$site["so-hotline-2"] or ''!!}</span></a></p></div>
        <div class="o916 row">
          @php($maxGuest = 200)
          @for ($i = 1; $i < 6; $i++)
          @if(!empty($s['nguoi'.$i]))
          @php($maxGuest = $s['nguoi'.$i])
          @endif
          @endfor
          {{-- @php($maxGuest = (empty($s['field1'])) ? 200 : $s['field1']) --}}
          <div class="o917 col-sm-4">
            <div class="o918 form-group">
              <select name="Số lượng người lớn" id="songuoilon" class="o919 form-control">
                <option class="o920 "  value="1" selected="" disabled="">Số người lớn (Từ trên 12 tuổi)*</option>
                @for ($i = 1; $i <= $s['songuoilonmax']; $i++)
                <option class="o921 "  value="{!!$i!!}" @if(isset($numPeople) && $numPeople==$i) selected="" @endif>{!!$i!!} người lớn</option>
                @endfor
                <option class="o922 "  value="{!!$s['songuoilonmax']!!}">Nhiều hơn {!!$s['songuoilonmax']!!} người lớn, vui lòng liên hệ Hotline {!!$site['so-hotline']!!} để được tư vấn giá</option>
              </select>
              <i class="o923 fa fa-user"></i>
            </div>
            {{-- @if($tientheosonguoi)
            <script class="o924 "  type="text/javascript">
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
            @endif --}}
          </div>
          <div class="o925 col-sm-4">
            <div class="o926 form-group">
              <select name="Số lượng trẻ em 12t" id="sotreem" class="o927 form-control">
                <option class="o928 "  value="" selected="">Số lượng trẻ em (từ 4-12 tuổi)*</option>
                @for ($i = 0; $i <= $s['tongsonguoi']; $i++)
                <option class="o929 "  value="{!!$i!!}">{!!$i!!} trẻ em</option>
                @endfor
              </select>   
              <i class="o930 fa fa-user"></i>
            </div>
          </div>
          <div class="o931 col-sm-4">
            <div class="o932 form-group">
              <select name="Số lượng trẻ em 6t" class="o933 form-control" id="sotreem2" >
                <option class="o934 "  value="" selected="">Số lượng trẻ nhỏ (dưới 4 tuổi)*</option>
                @for ($i = 0; $i <= $s['sotrenho']; $i++)
                <option class="o935 "  value="{!!$i!!}">{!!$i!!} trẻ nhỏ</option>
                @endfor
              </select>
              <i class="o936 fa fa-user"></i>
            </div>
          </div>
        </div>
        <div class="o937 chi-tiet-bai-viet">
          <table class="o938 " >
            <tbody class="o939 " >
              <tr class="o940 " >
                <td class="o941 " >Chi phí ở</td>
                <td class="o942 " >
                  <span class="o943 chiphio">{!!Helper::money($s['price'])!!}</span>
                  <input type="hidden" name="Chi phí ở" class="o944 chiphioinput" value="">
                </td>
              </tr>
              @for ($i = 1; $i < 6; $i++)
              @if(!empty($s['price_phuphikhac'.$i]))
              <tr class="o945 " >
                <td class="o946 " ><p class="o947 " >{!!$s['phuphikhac'.$i] or ''!!}</p></td>
                <td class="o948 " ><p class="o949 " >{!!Helper::money($s['price_phuphikhac'.$i])!!}</p></td>
              </tr>
              @endif
              @endfor
              <tr class="o950 " >
                <th class="o951 " >Tổng cộng</th>
                <td class="o952 " >
                  <b class="o953 " ><span class="o954 tongcong">{!!Helper::money($s['price'])!!}</span></b>
                  <input type="hidden" name="Tổng cộng" class="o955 tongconginput" value="">
                </td>
              </tr>
              <tr class="o956 " >
                <td class="o957 "  colspan="2">
                  <div class="o958 ">
                    {!!$s['ghichugia'] or ''!!}
                  </div> 
                {{-- <p class="o959 m-b-0" style="font-size:13px;line-height: 1.4"><i class="o960 " ><b class="o961 " >Chú ý:</b><br class="o962 " >
                  - Chi phí trên chưa bao gồm chi phí dọn dẹp<br class="o963 " >
                  - Quý khách vui lòng xem kỹ phần <a href="#banggia" class="o964 scroll-to" style="font-size:13px;">Chi tiết giá</a></i>
                </p> --}}
              </td>
            </tr>
            <tr class="o965 " >
              <td class="o966 "  colspan="2">
                <p class="o967 m-b-0 text-center"><b class="o968 " >Nếu bạn có bất cứ thắc mắc nào, hãy liên hệ với chúng tôi qua số Hotline: </b><a class="o969 "  href="tel:{!!$site["so-hotline"] or ''!!}"><i class="o970 fa fa-phone"></i> <span class="o971 hidden-xs">{!!$site["so-hotline"] or ''!!}</span></a> - <a class="o972 "  href="tel:{!!$site["so-hotline-2"] or ''!!}"><i class="o973 fa fa-phone"></i> <span class="o974 hidden-xs">{!!$site["so-hotline-2"] or ''!!}</span></a></p>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="o975 form-group text-center">
          <button type="button" class="o976 btn btn-action btn-buoc-2 invalid" data-action="Khách hàng bấm Bước 2: Điền thông tin khách hàng trên trang {!!$s['title'] or ''!!}">Bước 2: Điền thông tin khách hàng <i class="o977 fa fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
    <div class="o978 dien-thong-tin" style="display: none;">
      <h4 class="o979 text-center">ĐIỀN THÔNG TIN KHÁCH HÀNG</h4>
      <div class="o980 row">
        <div class="o981 col-sm-6">
          <div class="o982 form-group">
            <input type="text" name="Họ và tên" id="hoten" class="o983 form-control name" value="" placeholder="Họ và tên (trên CMND/Hộ chiếu)">
            <i class="o984 fa fa-user"></i>
          </div>
        </div>
        <div class="o985 col-sm-6">
          <div class="o986 form-group">
            <input type="text" name="Số điện thoại" id="sdt1" class="o987 form-control phone" value="" placeholder="Số điện thoại">
            <i class="o988 fa fa-phone"></i>
          </div>
        </div>
      </div>
      <div class="o989 row">
        <div class="o990 col-sm-6">
          <div class="o991 form-group">
            <input type="text" name="Email nếu có" id="email" class="o992 form-control email" value="" placeholder="Email nếu có">
            <i class="o993 fa fa-envelope"></i>
          </div>
        </div>
        <div class="o994 col-sm-6">
          <div class="o995 form-group">
            <input type="text" name="Số điện thoại khác nếu có" id="sdt2" class="o996 form-control" value="" placeholder="Số điện thoại khác nếu có">
            <i class="o997 fa fa-phone"></i>
          </div>
        </div>
      </div>
      <div class="o998 row">
        <div class="o999 col-sm-12">
          <div class="o1000 form-group">
            <textarea type="text" name="Yêu cầu khác nếu có" id="yeucau" rows="2" class="o1001 form-control" placeholder="Yêu cầu khác nếu có"></textarea>
            <i class="o1002 fa fa-pencil"></i>
          </div>
        </div>
      </div>
      <div class="o1003 form-group text-center">
        <button type="button" class="o1004 btn btn-action btn-buoc-3 invalid" data-action="Khách hàng bấm Bước 3: Xác nhận thông tin đặt phòng trên trang {!!$s['title'] or ''!!}">Bước 3: Xác nhận thông tin đặt phòng <i class="o1005 fa fa-chevron-right"></i></button>
      </div>
    </div>
    <div class="o1006 xac-nhan-thong-tin chi-tiet-bai-viet" style="display: none;">
      <h4 class="o1007 text-center">XÁC NHẬN THÔNG TIN ĐẶT PHÒNG</h4>
      <table class="o1008 table table-striped">
        <tbody class="o1009 " >
          <tr class="o1010 " >
            <td class="o1011 "  colspan="2"><b class="o1012 " >{!!$s['title'] or ''!!}</b></td>
          </tr>
          <tr class="o1013 " >
            <td class="o1014 " >Thời gian</td>
            <td class="o1015 " ><span class="o1016 thoigian">-</span></td>
          </tr>
          <tr class="o1017 " >
            <td class="o1018 " >Số khách</td>
            <td class="o1019 " ><span class="o1020 sokhach">-</span></td>
          </tr>
          <tr class="o1021 " >
            <td class="o1022 " >Thông tin khách hàng</td>
            <td class="o1023 " >
              <span class="o1024 thongtinkhachhang">-</span>
            </td>
          </tr>
          <tr class="o1025 " >
            <td class="o1026 " >Chi phí ở</td>
            <td class="o1027 " ><span class="o1028 chiphio">{!!Helper::money($s['price'])!!}</span></td>
          </tr>
          <tr class="o1029 " >
            <th class="o1030 " >Tổng cộng</th>
            <td class="o1031 " ><b class="o1032 " ><span class="o1033 tongcong">{!!Helper::money($s['price'])!!}</span></b></td>
          </tr>
          <tr class="o1034 " >
            <td class="o1035 " >Chính sách Hủy/ Hoàn trả/ Thay đổi</td>
            <td class="o1036 " >
              <div class="o1037 mdtPriceBlack" style="color: #40ae64">
                <p class="o1038 " ><a class="o1039 "  href="{!!$post[7]['link']!!}" target="_blank">Xem chi tiết ở đây</a></p>
              </div>
            </td>
          </tr>
          {{-- <tr class="o1040 " >
            <td class="o1041 "  colspan="2">
              <p class="o1042 m-b-0" style="font-size:13px;line-height: 1.4"><i class="o1043 " ><b class="o1044 " >Chú ý:</b><br class="o1045 " >
                - Chi phí trên chưa bao gồm chi phí dọn dẹp<br class="o1046 " >
                - Quý khách vui lòng xem kỹ phần <a href="#banggia" class="o1047 scroll-to" style="font-size:13px;">Chi tiết giá</a></i>
              </p>
            </td>
          </tr> --}}
          <tr class="o1048 " >
            <td class="o1049 "  colspan="2">
              <p class="o1050 m-b-0 text-center"><b class="o1051 " >Nếu bạn có bất cứ thắc mắc nào, hãy liên hệ với chúng tôi qua số Hotline: </b><a class="o1052 "  href="tel:{!!$site["so-hotline"] or ''!!}"><i class="o1053 fa fa-phone"></i> <span class="o1054 hidden-xs">{!!$site["so-hotline"] or ''!!}</span></a> - <a class="o1055 "  href="tel:{!!$site["so-hotline-2"] or ''!!}"><i class="o1056 fa fa-phone"></i> <span class="o1057 hidden-xs">{!!$site["so-hotline-2"] or ''!!}</span></a></p>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="o1058 form-group text-center">
        <input class="o1059 "  type="hidden" name="mail-to" value="{!!$site['dia-chi-email']!!}">
        <input class="o1060 "  type="hidden" name="subject" value="Đặt phòng Acasa #{!!time().Helper::generateRandomString(2)!!}">
        <button type="button" class="o1061 btn btn-send-mail btn-dat-ngay invalid btn-action" data-action="Khách hàng bấm nút Đặt ngay trên trang {!!$s['title'] or ''!!}"> <i class="o1062 fa fa-check"></i> Đặt ngay {!!$s['sku'] or ''!!}</button>
      </div>
    </div>
  </form>

</div>
</section>
<script class="o1063 " >
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
  console.log('SelectedDates',SelectedDates); 

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
      if($('#songuoilon').val()=='' || $('#songuoilon').val()==null || $('#songuoilon').val()==undefined){
        alert('Vui lòng chọn số người lớn!');
        return;
      }
      else if($('#sotreem').val()=='' || $('#sotreem').val()==null || $('#sotreem').val()==undefined){
        alert('Vui lòng chọn số trẻ em 4-12 tuổi!');
        return;
      }
      else if($('#sotreem2').val()=='' || $('#sotreem2').val()==null || $('#sotreem2').val()==undefined){
        alert('Vui lòng chọn số trẻ em dưới 4 tuổi!');
        return;
      }

      event.preventDefault();
      if(!$(this).hasClass('invalid')){
        $(this).hide();
        $('.dien-thong-tin').slideToggle();
        xacnhanthongtin();
      }
    });
    $('.btn-buoc-3').on('click', function(event) {
      event.preventDefault();
      var form = $('.form-dat-phong');
      var name=form.find('.name').val();
      var phone=form.find('.phone').val();
      var email=form.find('.email').val();
      if(name!=undefined && (name=='' || name==null)){
        alert('Vui lòng điền tên của bạn!'); return;
      } else if(phone!=undefined && (phone=='' || phone==null)){
        alert('Vui lòng điền số điện thoại của bạn!'); return;
      } else if(phone!=undefined && !isPhone(phone)){
       alert('Vui lòng kiểm tra lại số điện thoại, có thể bạn điền chưa đúng!'); return;
     } else if(email!=undefined && (email=='' || email==null)){
      alert('Vui lòng điền địa chỉ email của bạn!'); return;
    } else if(email!=undefined && email!='' && email!=null && !isEmail(email)){
      alert('Vui lòng kiểm tra lại địa chỉ email, có thể bạn điền chưa đúng!'); return;
    }else{
      if(!$(this).hasClass('invalid')){
        $(this).hide();
        $('#bTinhtrangphong').hide();
        $('#datphongngay').hide();
        $('#thongtinkhach').hide();
        $('.dien-thong-tin').hide();
        $('.xac-nhan-thong-tin').show();
        xacnhanthongtin();
      }
    }
  });

    function tinhtien(){
      console.log('tinhtien');
      console.log('ngayle',ngayle);
      var startDate = $('#dt1x').datepicker("getDate");
      var stopDate = $('#dt2x').datepicker("getDate");
      stopDate.setDate(stopDate.getDate()-1);
      console.log('startDate',startDate,'stopDate',stopDate);
      var dates = getDates(startDate,stopDate);
      console.log('dates',dates); 

      var songuoilon = parseInt($('#songuoilon').val()); 
      var sotreem = parseInt($('#sotreem').val()); 
      // var sotreem2 = parseInt($('#sotreem2').val()); 
      if(songuoilon == null || songuoilon == undefined || songuoilon == '' || songuoilon == NaN){
        songuoilon = 1;
      }
      if(sotreem == null || sotreem == undefined || sotreem == '' || sotreem == NaN){
        sotreem = 0;
      }
      // if(sotreem2 == null || sotreem2 == undefined || sotreem2 == '' || sotreem2 == NaN){
      //   sotreem2 = 0;
      // }
      console.log('songuoilon',songuoilon,'sotreem',sotreem);
      
      {{-- @for ($i = 6; $i > 0; $i--) 
      @if(!empty($s['nguoi'.$i]))
      
      if(songuoilon <= {!!$s['nguoi'.$i] or 0!!}){
        console.log('{!!'nguoi'.$i!!}',{!!$s['nguoi'.$i] or 0!!}); 
        var totalPrice = 0;
        var canhbao = false;
        dates.forEach(function(date) {
          console.log('date',date);
          dateNew = $.datepicker.formatDate('dd/mm/yy', date);
          if(isInArray(ngayle,dateNew)){ 
            //Nếu date là Ngày lễ
            totalPrice += {!!$s['price_ngayle'.$i] or 0!!};
          }else if(date.getDay() == 6){ 
            //Nếu date là Chủ Nhật
            totalPrice += {!!$s['price_chunhat'.$i] or 0!!};
          }else if(date.getDay() == 5){ 
            //Nếu date là T7
            totalPrice += {!!$s['price_thubay'.$i] or 0!!};
          }else if(date.getDay() == 0){ 
            //Nếu date là T6
            totalPrice += {!!$s['price_cuoituan'.$i] or 0!!};
          }else{ 
            //Nếu không thì tính giá ngày thường
            totalPrice += {!!$s['price'.$i] or 0!!};
          }
          console.log('totalPrice',totalPrice); 

          if(sotreem > 0){
            if(({!!$s['nguoi'.$i] or 0!!} - songuoilon) >= 0){
              var sotreemtinhtien = sotreem - ({!!$s['nguoi'.$i] or 0!!} - songuoilon);
            }else{
              var sotreemtinhtien = sotreem;
            }
            if(sotreemtinhtien > 0){
              totalPrice += sotreemtinhtien*{!!$s['price_phuthu11tuoi'] or 0!!}; 
              console.log('sotreemtinhtien',sotreemtinhtien,'giatien',{!!$s['price_phuthu11tuoi'] or 0!!}); 
            }
            console.log('totalPrice',totalPrice); 
          }
          if(sotreem2 > 0){
            if(({!!$s['nguoi'.$i] or 0!!} - songuoilon - sotreem) >= 0){
              var sotreem2tinhtien = sotreem2 - ({!!$s['nguoi'.$i] or 0!!} - songuoilon - sotreem);
            }else{
              var sotreem2tinhtien = sotreem2;
            }
            if(sotreem2tinhtien > 0){
              totalPrice += sotreem2tinhtien*{!!$s['price_phuthu6tuoi'] or 0!!}; 
              console.log('sotreem2tinhtien',sotreem2tinhtien,'giatien',{!!$s['price_phuthu6tuoi'] or 0!!}); 
            }
            console.log('totalPrice',totalPrice); 
          }

          if(isInArray(ngay_dat_phong,dateNew)){
            canhbao = true;
          }
        });
      }

      @endif
      @endfor--}}

      var tongsonguoi = songuoilon + sotreem;
      console.log('tongsonguoi',tongsonguoi); 
      if(tongsonguoi > {!!$s['tongsonguoi'] or 100!!}){
        alert('Tổng số người vượt quá sức chứa của Villa ({!!$s['tongsonguoi']!!} người trên 4 tuổi và {!!$s['sotreem']!!} người dưới 4 tuổi), vui lòng chọn lại hoặc liên hệ Hotline: {!!$site["so-hotline"] or ''!!} để được tư vấn');
        $('#sotreem').val("");
      }else{
        var totalPrice = 0;
        var canhbao = false;
        dates.forEach(function(date) {
          console.log('date',date);
          dateNew = $.datepicker.formatDate('dd/mm/yy', date);
          if(isInArray(ngayle,dateNew)){ 
            //Nếu date là Ngày lễ
            totalPrice += {!!$s['price_ngayle'] or 0!!};
          }else if(date.getDay() == 6){ 
            //Nếu date là Chủ Nhật
            totalPrice += {!!$s['price_chunhat'] or 0!!};
          }else if(date.getDay() == 5){ 
            //Nếu date là T7
            totalPrice += {!!$s['price_thubay'] or 0!!};
          }else if(date.getDay() == 0){ 
            //Nếu date là T6
            totalPrice += {!!$s['price_cuoituan'] or 0!!};
          }else{ 
            //Nếu không thì tính giá ngày thường
            totalPrice += {!!$s['price'] or 0!!};
          }
          console.log('totalPrice',totalPrice);

          if(songuoilon > {!!$s['songuoilon'] or 100!!}){
            var songuoilontinhtien = songuoilon - {!!$s['songuoilon'] or 100!!};
            totalPrice += songuoilontinhtien*{!!$s['price_phuthulon'] or 0!!}; 
            console.log('songuoilontinhtien',songuoilontinhtien,'giatien',{!!$s['price_phuthulon'] or 0!!}); 
          }

          if(sotreem > 0){
            var sotreemtinhtien = 0;
            var songuoilonthua = 0;
            var songuoilonthua = {!!$s['songuoilon'] or 0!!} - songuoilon;
            if(songuoilonthua < 0){songuoilonthua = 0;}
            // var sotreemthua = {!!$s['sotreem'] or 0!!} - sotreem;
            // if(sotreemthua < 0){sotreemthua = 0;}
            sotreemtinhtien = sotreem - songuoilonthua - {!!$s['sotreem'] or 0!!};
            if(sotreemtinhtien < 0){sotreemtinhtien = 0;}

            if(sotreemtinhtien > 0){
              totalPrice += sotreemtinhtien*{!!$s['price_phuthu11tuoi'] or 0!!}; 
              console.log('sotreemtinhtien',sotreemtinhtien,'giatien',{!!$s['price_phuthu11tuoi'] or 0!!}); 
            }
            console.log('totalPrice',totalPrice); 
          }
          // if(sotreem2 > 0){
          //   if(({!!$s['songuoilon'] or 0!!} - songuoilon - sotreem) >= 0){
          //     var sotreem2tinhtien = sotreem2 - ({!!$s['songuoilon'] or 0!!} - songuoilon - sotreem);
          //   }else{
          //     var sotreem2tinhtien = sotreem2;
          //   }
          //   if(sotreem2tinhtien > 0){
          //     totalPrice += sotreem2tinhtien*{!!$s['price_phuthu6tuoi'] or 0!!}; 
          //     console.log('sotreem2tinhtien',sotreem2tinhtien,'giatien',{!!$s['price_phuthu6tuoi'] or 0!!}); 
          //   }
          //   console.log('totalPrice',totalPrice); 
          // }

          if(isInArray(ngay_dat_phong,dateNew)){
            canhbao = true;
          }
        });
      }

      // totalPrice = formatNumber(totalPrice) + 'đ';
      $('.chiphio').text(formatNumber(totalPrice) + 'đ');
      $('.chiphioinput').val(formatNumber(totalPrice) + 'đ');

      // Cộng phụ phí
      @for ($i = 1; $i < 6; $i++)
      @if(!empty($s['price_phuphikhac'.$i]))
      totalPrice += {!!$s['price_phuphikhac'.$i] or 0!!}
      @endif
      @endfor

      $('.tongcong').text(formatNumber(totalPrice) + 'đ');
      $('.tongconginput').val(formatNumber(totalPrice) + 'đ');

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
      var sokhach = $('#songuoilon').val() + ' người lớn. ';
      if($('#sotreem').val() != '' && $('#sotreem').val() != null && $('#sotreem').val() != undefined){
        sokhach += $('#sotreem').val() + '  trẻ em 4-12 tuổi. ';
      }
      if($('#sotreem2').val() != '' && $('#sotreem2').val() != null && $('#sotreem2').val() != undefined){
        sokhach += $('#sotreem2').val() + '  trẻ em dưới 4 tuổi. ';
      }
      $('.sokhach').text(sokhach);
      $('.thongtinkhachhang').html($('#hoten').val() + ' - ' + $('#sdt1').val() + ' ' + $('#sdt2').val() + '<br class="o1064 " >' + $('#email').val() + '<br class="o1065 " >' + $('#yeucau').val());
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

    function isMobile() {
      return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
    }

    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }

    function isPhone(phone) {
      var isnum = /^\d+$/.test(phone);
      if(isnum){
        return (phone.match(/\d/g).length===10 || phone.match(/\d/g).length===11);
      }
      return false;
    }

  });
</script> 
@if(!Helper::checkEmptyString($s['desc_full']))
<section class="o1066 p-t-20 hidden">
  <div class="o1067 container">
    <div class="o1068 chi-tiet-bai-viet">
      {!!$s['desc_full']!!}
      {{-- @if(Helper::checkEmptyString($s['desc_full']))
      {!!$post[1]['desc_full'] or ''!!}
      @endif --}}
      {{-- <div class="o1069 m-t-20">
        {!!$site['doan-thong-tin-lien-he-duoi-moi-san-pham']!!}
      </div> --}}
    </div>
    {{-- @include('module.comment') --}}

  </div>
  {{-- @include('module.productSidebar') --}}
{{-- </div> --}}
{{-- </div> --}}
</section>
@endif
<section class="o1070 p-0 background-grey">
  <div class="o1071 container">
    <div class="o1072 p-20 " style="min-height: 200px">
      <div class="o1073 fb-comments" data-href="{!!'http://'.$_SERVER['HTTP_HOST']!!}" data-width="100%" data-numposts="5"></div>
    </div>

  </div>
</section>
{{-- <section class="o1074 productCategory p-t-60 p-b-20">
  <div class=container>
    <div class="o1075 heading heading-center m-b-50">
      <h2 class="o1076 m-b-10">Nơi ở khác gần đó</h2>
    </div>
    <div class="o1077 shop">
        <div class="o1078 row">
          @php($i=0) @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && $i++<4 && empty($p['field5']))
          <div class="o1079 col-md-6">
            @include('module.eachProduct')
          </div>
          @endif @endforeach
        </div>
      </div>
    </div>
  </section> --}}
  @endsection