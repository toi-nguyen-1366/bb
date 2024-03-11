<div class="ajax-quick-view">
  <div class="quick-view-content">
    @if(Request::get('all')!=2)
    <div class="heading m-b-0 m-t-10">
      <h2 class="text-center">Thông tin chi tiết {!!$s['title'] or ''!!}</h2>
    </div>
    @endif
    <div class="product @if(Request::get('all')==2) p-20 @endif">
      <div class="product-description">
        {{-- <div class="product-title">
          <h1 class="text-center">{!!$s['title']!!}</h1>
        </div> --}}
        {{-- <div class="seperator m-b-10"></div> --}}
        @if(Request::get('all')==2)
        <div class="">
          @if(!empty($s['video']))
          <div class="videone m-b-10" style="width: 70%;margin: auto">
            {!!Helper::youtube($s['video'])!!}
          </div>
          <p id="panhchinh" class="text-center m-b-10" style="display: none; width: 70%;margin: auto"><img id="anhchinh" src="{!!$s['img'] or ''!!}"></p> 
          @else
          <p id="panhchinh" class="text-center m-b-10" style="width: 70%;margin: auto"><img id="anhchinh" src="{!!$s['img'] or ''!!}"></p> 
          @endif

          <div class="m-b-0 p-0">
              {{-- @if(!empty($s["img"]))
              <div class="carousel dots-inside arrows-visible m-b-5" data-items="1" data-lightbox="gallery" data-loop=true data-dots=false>
                @if(!empty($s['video']))
                <div class="height500">
                  <a href="javascript:void(0)" data-video="{!!$s['video']!!}" data-lightbox="iframe" class="height500 gallery-video" style="background: url('{!!Helper::youtubeThumb($s['video'])!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block; padding-top: 0%"><img src="/public/frontend/image/play.png"></a>
                  {!!Helper::youtube($s['video'],560,280)!!}
                </div>
                @endif
                <a href="{!!$s['img']!!}" data-lightbox="gallery-item" class="height500" style="background: url('{!!$s['img']!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block;"></a>
                @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
                <a href="{!!$img[0]!!}" data-lightbox="gallery-item" class="height500" style="background: url('{!!$img[0]!!}');background-size: contain;background-position: center;background-repeat: no-repeat;display: block;">
                </a>
                @endif @endforeach @endif
              </div>
              @endif --}}
              @if(!empty($s["img"]))
              <div class="carousel2 dots-inside arrows-visible m-b-0 m-t-20" data-margin=5 data-items-lg=6 data-items-md=6 data-items="6" data-items-sm="6" data-items-xs="4" data-lightbox="gallery" data-loop=true data-dots=false style="opacity: 1;visibility: visible;width: 100%;">
                {{-- @if(!empty($s['video']))
                <a href="{!!$s['video']!!}" data-lightbox="iframe" class="gallery-video" style="background: url('{!!Helper::youtubeThumb($s['video'])!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 60px;padding-top: 0%"><img src="/public/frontend/image/play.png"></a>
                @endif --}}
                <a href="javascript:void(0)" data-img="{!!$s['img']!!}" onclick="$('.videone').hide();$('#anhchinh').attr('src','{!!$s['img']!!}');$('#panhchinh').show();" {{-- data-lightbox="gallery-item" --}} class="" style="background: url('{!!$s['img']!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 90px"></a>
                @if(!empty($s['img_other'])) @foreach($s['img_other'] as $img) @if(!empty($img) && !empty($img[0]))
                <a href="javascript:void(0)" data-img="{!!$img[0]!!}" onclick="$('.videone').hide();$('#anhchinh').attr('src','{!!$img[0]!!}');$('#panhchinh').show();" {{-- data-lightbox="gallery-item" --}} class="" style="background: url('{!!$img[0]!!}');background-size: cover;background-position: center;background-repeat: no-repeat;display: block; height: 90px">
                  {{-- <img class="img-responsive img-rounded img-thumbnail" alt="{!!$img[1]!!}" src="{!!$img[0]!!}"> --}}
                </a>
                @endif @endforeach @endif
              </div>
              @endif
              <!--div class="chi-tiet-bai-viet p-20 m-b-30" style="background: #eee; border: 1px #ccc solid">
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
              </div>
              <p class="text-center m-b-30">
                {{-- <a href="#chitiet" class="btn btn-my scroll-to">Chi tiết</a> --}}
                <a href="#datphongngay" class="btn btn-my btn-youtube tonho" data-name="{!!$s['categoryInfo']['title'] or ''!!} - {!!$s['title'] or ''!!}" data-link="{!!$s['field8'] or ''!!}">ĐẶT NGAY</a>
              </p-->
            </div>
          </div>
          <style type="text/css">
            .modal .carousel2{display: none;}
            .modal .videone{width:100%!important;}
            .modal .videone iframe{height: 505px}
            .modal .product.p-20{padding: 0!important;margin: 0}
            .modal .product.p-20 .product-description{padding: 0!important;}
            /*.carousel2 .owl-item.active{width: 15%!important}*/
            /*.carousel2 .owl-stage{width: 100%!important;}*/
          </style>
          <script type="text/javascript">
            jQuery(document).ready(function($) {
              $('.carousel2').owlCarousel({
                loop:false,
                margin:5,
                nav:false,
                dots:false,
                responsive:{
                  0:{
                    items:4
                  },
                  600:{
                    items:6
                  },
                  1000:{
                    items:6
                  }
                }
              });
            });
          </script>


          @elseif(Request::get('all')==1)
          <div class="">


            <div class="chi-tiet-bai-viet" id="chitiet">
              <table class="table table-bordered banggia">
                <thead>
                  <tr>
                    <th class="bg1 text-center">Ngày</th>
                    <th class="bg2 text-center">Giá</th>
                    {{-- <th class="bg3">Giá khuyến mãi</th> --}}
                    <th class="bg4 text-center" style="width: 40%">Ghi chú</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Giá thứ 2 đến thứ 5</th>
                    <td>
                      <del>{!!Helper::money($s['price1x'])!!}</del>
                      <span class="gia">{!!Helper::money($s['price_cuoituan1x'])!!}</span>
                      @if(!empty($s['price1x']))<span class="giamgia">-{!!round(($s['price1x']-$s['price_cuoituan1x'])*100/$s['price1x'])!!}%</span>@endif
                    </td>
                    <td rowspan="5">{!!$s['spec'] or ''!!}</td>
                  </tr>
                  <tr>
                    <th>Giá thứ 6</th>
                    <td>
                      <del>{!!Helper::money($s['price2x'])!!}</del>
                      <span class="gia">{!!Helper::money($s['price_cuoituan2x'])!!}</span>
                      @if(!empty($s['price2x']))<span class="giamgia">-{!!round(($s['price2x']-$s['price_cuoituan2x'])*100/$s['price2x'])!!}%</span>@endif
                    </td>
                  </tr>
                  <tr>
                    <th>Giá thứ 7</th>
                    <td>
                      <del>{!!Helper::money($s['price3x'])!!}</del>
                      <span class="gia">{!!Helper::money($s['price_cuoituan3x'])!!}</span>
                      @if(!empty($s['price3x']))<span class="giamgia">-{!!round(($s['price3x']-$s['price_cuoituan3x'])*100/$s['price3x'])!!}%</span>@endif
                    </td>
                  </tr>
                  <tr>
                    <th>Giá chủ nhật</th>
                    <td>
                      <del>{!!Helper::money($s['price4x'])!!}</del>
                      <span class="gia">{!!Helper::money($s['price_cuoituan4x'])!!}</span>
                      @if(!empty($s['price4x']))<span class="giamgia">-{!!round(($s['price4x']-$s['price_cuoituan4x'])*100/$s['price4x'])!!}%</span>@endif
                    </td>
                  </tr>
                  <tr>
                    <th>Giá ngày lễ</th>
                    <td>
                      <del>{!!Helper::money($s['price5x'])!!}</del>
                      <span class="gia">{!!Helper::money($s['price_cuoituan5x'])!!}</span>
                      @if(!empty($s['price5x']))<span class="giamgia">-{!!round(($s['price5x']-$s['price_cuoituan5x'])*100/$s['price5x'])!!}%</span>@endif
                    </td>
                  </tr>
                </tbody>
              </table>
              <p class="text-center m-b-10">
                <a href="#datphongngay" class="btn btn-my btn-youtube tonho">ĐẶT NGAY</a>
              </p>
              {!! str_replace('[book]', '<p class="text-center m-b-10">
                <a href="#datphongngay" class="btn btn-my btn-youtube tonho">ĐẶT NGAY</a>
              </p>', $s['desc_full'])!!}
            </div>
            <div id="datphongngay">
              @include('module.datphongngay2')
            </div>
            {{-- <p class="text-center m-b-30"> --}}
              {{-- <a href="#chitiet" class="btn btn-my scroll-to">Chi tiết</a> --}}
              {{-- <a href="javascript:void(0)" class="btn btn-my btn-mua-2 btn-youtube tonho" data-name="{!!$s['categoryInfo']['title'] or ''!!} - {!!$s['title'] or ''!!}" data-link="{!!$s['field8'] or ''!!}">ĐẶT NGAY</a> --}}
            {{-- </p> --}}
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
            @else
            <div class="chi-tiet-bai-viet">
              @if(in_array(2, $s['categoryParent']) && isset($s[Request::get('field')]))
              {!!$s[Request::get('field')]!!}
              @else


              {!!$s['desc_full']!!}
              @endif
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(function(){
        $('.multiselect2').multiselect();
        $('form').on('click', '.btn-send-mail', function(event) {
          if($(this).hasClass('invalid')){
            return;
          }
          event.preventDefault();
          var form = $(this).parents('form');
          var name=form.find('.name').val();
          var phone=form.find('.phone').val();
          var email=form.find('.email').val();
          var xuatphat=form.find('.xuatphat').val();
          var link=form.find('.sp-link').val();
          // if(name!=undefined && (name=='' || name==null)){
            // alert('Vui lòng điền tên của bạn!'); return;
          // } else if(xuatphat!=undefined && (xuatphat=='' || xuatphat==null)){
            // alert('Vui lòng điền điểm xuất phát của bạn!'); return;
          // } else
          if(phone!=undefined && (phone=='' || phone==null)){
            alert('Vui lòng điền số điện thoại của bạn!'); return;
          } else if(phone!=undefined && !isPhone(phone)){
            alert('Vui lòng kiểm tra lại số điện thoại, có thể bạn điền chưa đúng!'); return;
          } else if(form.find('.kenhnao').length && form.find('.kenhnao').val()==null){
            alert('Vui lòng chọn Bạn biết Phạm Tân Villa qua kênh nào'); return;
          } else if(form.find('.dichvunao').length && form.find('.dichvunao').val()==null){
            alert('Vui lòng chọn Bạn sử dụng dịch vụ nào'); return;
          } else if(form.find('.loainao').length && form.find('.loainao').val()==null){
            alert('Vui lòng chọn Bạn thuê villa loại nào'); return;
          } else if(form.find('.ngayden').val()!=undefined && (form.find('.ngayden').val()=='' || form.find('.ngayden').val()==null)){
            alert('Vui lòng chọn ngày đến!'); return;
          } else if(form.find('.ngayve').val()!=undefined && (form.find('.ngayve').val()=='' || form.find('.ngayve').val()==null)){
            alert('Vui lòng chọn ngày về!'); return;
          } else if(form.find('.nguoilon').val()!=undefined && (form.find('.nguoilon').val()=='' || form.find('.nguoilon').val()==null)){
            alert('Vui lòng chọn số người lớn!'); return;
          } else if(form.find('.treem').val()!=undefined && (form.find('.treem').val()=='' || form.find('.treem').val()==null)){
            alert('Vui lòng chọn số trẻ em 6-12 tuổi!'); return;
          } else if(form.find('.treem2').val()!=undefined && (form.find('.treem2').val()=='' || form.find('.treem2').val()==null)){
            alert('Vui lòng chọn số trẻ em 1-5 tuổi!'); return;
          // } else if(email!=undefined && (email=='' || email==null)){
            // alert('Vui lòng điền địa chỉ email của bạn!'); return;
          } else if(email!=undefined && email!='' && email!=null && !isEmail(email)){
            alert('Vui lòng kiểm tra lại địa chỉ email, có thể bạn điền chưa đúng!'); return;
          }

          $(this).text('Đang gửi...');
          
          var element = form.data('element');
          var data = form.serializeArray();
          var json_data = JSON.stringify(data);
          var device = (isMobile())?'Điện thoại':'Máy tính';
          var utm = getUrlParameter('utm_source');
          var action = $(this).data('action');

          $.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: "/ds-add.php",
            data: ({device:device, utm:utm, action:action, json_data:json_data}),
            success: function(){}
          });

          $.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: "{{action('SiteController@updateDataElement')}}",
            data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data)}),
            success: function(){}
          });

          @if(Request::is('/chu-nha'))
          window.location.reload;
          @else

          @if(env('IHAPPY_MAIL_SERVICE'))
          $.ajax({
            dataType: "html",
            type: "POST",
            evalScripts: true,
            url: "//api.ihappy.vn/sendMail",
            data: ({to:'{!!$site['dia-chi-email']!!},'+email,url:window.location.hostname,json_data:json_data}),
            success: function(){
              @if(isset($chunhalist))
              window.location.reload();
              {{-- @elseif(isset($s) && isset($s['category']) && in_array(2, $s['categoryParent']) && !empty($s['field8'])) --}}
              {{-- window.location.href="{!!$s['field8'] or $post[3]['link']!!}?url="+document.referrer; --}}
              @else
              if(link != '' && link != undefined){
                window.location.href=link;
              }else{
                window.location.href="{!!$post[3]['link'] or ''!!}?url="+document.referrer;
              }
              @endif
            }
          });
          @else
          @if(isset($chunhalist))
          window.location.reload();
          {{-- @elseif(isset($s) && isset($s['category']) && in_array(2, $s['categoryParent']) && !empty($s['field8'])) --}}
          {{-- window.location.href="{!!$s['field8'] or $post[3]['link']!!}?url="+document.referrer; --}}
          @else
          if(link != '' && link != undefined){
            window.location.href=link;
          }else{
            window.location.href="{!!$post[3]['link'] or ''!!}?url="+document.referrer;
          }
          @endif
          @endif
          
          @endif
        });

});
</script>
