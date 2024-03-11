@if(isset($site['chay-banner-khuyen-mai-2']) && $site['chay-banner-khuyen-mai-2']=='1')
<div class="o575 modal fade modalSale" id="modalSale2" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true">
  <div class="o576 modal-dialog">
    <div class="o577 modal-content">
      <button type="button" class="o578 close" data-dismiss="modal" aria-hidden="true" style="color: var(--main-color);">×</button>
      <div class="o579 modal-body p-0">
        {{-- <a href="{!!$site["link-chuyen-den-khi-click-banner-khuyen-mai"]!!}" class="o580 bannerLink"> --}}
          {{-- <img class="o581 " src="{!!$site["anh-banner-khuyen-mai"]!!}"> --}}
          <div class="o582 kmtext text-light" style="background: var(--main-color);
          color: #fff;
          text-align: center;
          font-size: 16px;
          padding: 10px; margin-bottom: 20px">{!!$site["doan-chu-tren-banner-khuyen-mai"]!!}</div>
        {{-- </a> --}}
        {{-- @if(isset($site['hien-form-dien-thong-tin-tren-banner-khuyen-mai']) && $site['hien-form-dien-thong-tin-tren-banner-khuyen-mai']=='1') --}}
        <form class="o583 form-inline p-10 p-t-0" data-element="mail-to-admin">
          <div class="o584 form-group">
            <input type="text" class="o585 form-control name" name="Tên của bạn" value="" placeholder="Tên của bạn">
          </div>
          <div class="o586 form-group">
            <input type="text" class="o587 form-control phone" name="Số điện thoại" value="" placeholder="Số điện thoại">
          </div>
          <div class="o588 form-group">
            <input type="text" class="o589 form-control email" name="Địa chỉ email" value="" placeholder="Địa chỉ email">
          </div>
          <p style="margin-top: 5px" class="o590 m-b-0">Ngân sách cho chuyến đi (VNĐ):</p>
          <div class="o591 form-group" style="width: 100%">
            <input type="text" class="o592 form-control" name="Ngân sách cho chuyến đi (VNĐ)" value="" placeholder="Ngân sách cho chuyến đi (VNĐ)">
          </div>
          <p style="margin-top: 5px" class="o593 m-b-0">Số người dự kiến:</p>
          <div class="o594 form-group">
            <input type="text" class="o595 form-control" name="Số người 4-12 tuổi" value="" placeholder="Số người 4-12 tuổi">
          </div>
          <div class="o596 form-group">
            <input type="text" class="o597 form-control" name="Số người trên 12 tuổi" value="" placeholder="Số người trên 12 tuổi">
          </div>
          <div class="o598 form-group">
            <input type="text" class="o599 form-control" name="Số người dưới 4 tuổi" value="" placeholder="Số người dưới 4 tuổi">
          </div>
          <p class="o600 "  style="margin-top: 5px"><b class="o601 " >Điều kiện nhận voucher:</b> Tất cả thành viên, sau khi lưu trú tại Resort. Nếu quý khách thấy dịch vụ tốt thì đăng lên facebook ở chế độ chia sẻ Public và tag 5 người bạn vào tin đã đăng. (Chỉ những thành viên từ 18 tuổi trở lên mới cần đăng chia sẻ, nội dung chia sẻ xin mời <a class="o602 "  href="{!!$site["link-chuyen-den-khi-click-banner-khuyen-mai-2"]!!}" target="_blank"><u class="o603 " >click vào đây</u></a></p>
          <div class="o604 m-b-20">
            <div class="o605 radio">
              <label class="o606 " ><input type="radio" class="o607 " name="Đồng ý" value="Đồng ý"> Đồng ý</label>
            </div>
            <div class="o608 radio">
              <label class="o609 " ><input type="radio" class="o610 " name="Đồng ý" value="Không đồng ý"> Không đồng ý</label>
            </div>
          </div>
          <div class="o611 form-group text-center" style="width: 100%">
            <input class="o612 "  type="hidden" name="mail-to" value="{!!$site['dia-chi-email']!!}">
            <input class="o613 "  type="hidden" name="subject" value="Điền thông tin trên popup thông tin">
            <button type="button" class="o614 btn btn-pinterest btn-send-mail" data-action="Khách hàng điền thông tin trên popup thông tin">Đăng kí</button>
          </div>
        </form>
        {{-- @endif --}}
      </div>
    </div>
  </div>
</div>
@endif
@if(isset($site['chay-banner-khuyen-mai']) && $site['chay-banner-khuyen-mai']=='1')
<div class="o615 modal fade modalSale" id="modalSale" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true">
  <div class="o616 modal-dialog">
    <div class="o617 modal-content">
      <button type="button" class="o618 close" data-dismiss="modal" aria-hidden="true" style="color: var(--main-color);">×</button>
      <div class="o619 modal-body p-0">
        <a href="{!!$site["link-chuyen-den-khi-click-banner-khuyen-mai"]!!}" class="o620 bannerLink">
          <img class="o621 " src="{!!$site["anh-banner-khuyen-mai"]!!}">
          {{-- <div class="o622 kmtext text-light" style="background: var(--main-color);
          color: #fff;
          text-align: center;
          font-size: 16px;
          padding: 10px; margin-bottom: 20px">{!!$site["doan-chu-tren-banner-khuyen-mai"]!!}</div> --}}
        </a>
        @if(isset($site['hien-form-dien-thong-tin-tren-banner-khuyen-mai']) && $site['hien-form-dien-thong-tin-tren-banner-khuyen-mai']=='1')
        <form class="o623 form-inline p-10 p-t-0" data-element="mail-to-admin">
          <div class="o624 form-group">
            <input type="text" class="o625 form-control name" name="Tên của bạn" value="" placeholder="Tên của bạn">
          </div>
          <div class="o626 form-group">
            <input type="text" class="o627 form-control phone" name="Số điện thoại" value="" placeholder="Số điện thoại">
          </div>
          <div class="o628 form-group">
            <input type="text" class="o629 form-control email" name="Địa chỉ email" value="" placeholder="Địa chỉ email">
          </div>
          <div class="o630 form-group text-center" style="width: 100%; margin-top: 10px">
            <input class="o631 "  type="hidden" name="mail-to" value="{!!$site['dia-chi-email']!!}">
            <input class="o632 "  type="hidden" name="subject" value="Điền thông tin trên banner khuyến mãi">
            <button type="button" class="o633 btn btn-pinterest btn-send-mail" data-action="Khách hàng điền thông tin trên banner khuyến mãi">Đăng kí nhận khuyến mãi</button>
          </div>
        </form>
        @endif
      </div>
    </div>
  </div>
</div>
@endif
{{-- Nút bấm hotline kèm nút khuyến mãi --}}
{{-- <div class="o634 saleButton hidden-xs">
  <a href="javascript:void(0)" onclick="alert('Vui lòng gọi số {!!$site["so-hotline"]!!} để được tư vấn miễn phí!')" class="o635 btn btn-action btn-pinterest" data-action="Click nút hotline"><span class="o636 " >TƯ VẤN MIỄN PHÍ</span> <span class="o637 " >{!!$site["so-hotline"]!!}</span></a>
  <a href="javascript:void(0)" onclick="$('#modalSale').modal('show');" class="o638 btn btn-action btn-facebook" data-action="Click nút nhận khuyến mãi"><span class="o639 " >Đăng kí nhận</span> <span class="o640 " >Giảm giá 5%</span></a>
</div> --}}
<style class="o641 "  type="text/css">
  .modalSale .modal-content{position:  relative;padding: 0;}
  .modalSale .close{position:  absolute;top: 0;right: 0;color: #fff;z-index: 99;opacity:  1;font-size: 45px;font-weight: normal;width: 45px;}
  .modalSale .bannerLink{display: block;position: relative;overflow: hidden;margin-bottom: 11px;}
  .modalSale .bannerLink img{max-width: 100%;}
/*#modalSale .bannerLink::before{text-align: center;
    font-size: 20px;
    line-height: 1.4;
    padding: 20px;}*/
    .modalSale .bannerLink .kmtext{width: 90%;text-align: center;font-size: 35px;line-height: 45px;}
    .modalSale .form-group{width: 31.8%;margin-right: 1%;padding: 0;}
    .modalSale .form-group input{border: 2px #ccc solid;margin-bottom: 0;width: 100%;}
    .modalSale .form-group .btn{width: 100%;}
    @media only screen and (max-width:480px) {
      .modalSale .form-group{width: 100%}
    }
    .saleButton{box-shadow:0 3px 12px rgba(0, 0, 0, .15);position:  fixed;z-index: 999;    border-radius: 2em;bottom: 23px;left: 10px;}
    .saleButton .btn:first-child{margin: 0;font-size: 20px;padding: 33px 8px 14px 15px;border-radius: 0;border-top-left-radius: 2em;border-bottom-left-radius: 2em;}
    .saleButton .btn:first-child span:first-child{position:  absolute;top: 14px;left: 52%;transform:  translateX(-50%);font-size: 13px;}
    .saleButton .btn:last-child{margin: 0;font-size: 20px;padding: 33px 15px 14px 8px;border-radius: 0;border-top-right-radius: 2em;border-bottom-right-radius: 2em;margin-left: -4px;}
    .saleButton .btn:last-child span:first-child{position:  absolute;top: 13px;left: 47%;transform:  translateX(-50%);font-size: 13px;color: #fff}
  </style>

  {{-- Luôn hiện khi vào trang --}}
{{-- <script class="o642 "  type="text/javascript">
  $(document).ready(function() {
    $('#modalSale').modal('show');
  });
</script> --}}
{{-- Chỉ hiện 1 lần 1 ngày --}}
<script class="o643 "  type="text/javascript">
  $(document).ready(function() {
    if($.cookie("closeModalSale")==undefined){
      setTimeout(function(){
        $('#modalSale').modal('show');
      },{!!$site["so-giay-tren-banner-khuyen-mai"] or '10'!!}000);
    }
    $('#modalSale').on('hidden.bs.modal', function () {
      $.cookie('closeModalSale', '1', { expires: 1, path: '/' });
    });

    if($.cookie("closeModalSale2")==undefined){
      setTimeout(function(){
        $('#modalSale2').modal('show');
      },{!!$site["so-giay-tren-banner-khuyen-mai-2"] or '10'!!}000);
    }
    $('#modalSale2').on('hidden.bs.modal', function () {
      $.cookie('closeModalSale2', '1', { expires: 1, path: '/' });
    });
  });
</script>
