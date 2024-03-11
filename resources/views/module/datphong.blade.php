<form class="{{-- pinned --}}" data-element="mail-to-admin" style="background: #000066;padding: 10px;border-radius: 0px;">
  <h4 class="text-center m-b-0  text-light">{!!$site["tieu-de-popup-so-1"]!!}</h4>
  <p class="text-center  text-light" style="line-height: 1.2">
    {!!$site["tieu-de-popup-so-2"]!!}
  </p>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        {{-- <input type="hidden" class="form-control" name="Loại villa đang xem" value="" placeholder="{!!$s['categoryInfo']['title'] or ''!!}"> --}}
        <input type="hidden" class="form-control sp-name" name="Tên villa" value="{!!$s['categoryInfo']['title'] or ''!!} - {!!$s['title'] or ''!!}">
        <input type="text" class="form-control name" name="Name" value="" placeholder="{!!$site["tieu-de-popup-so-3"]!!}">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" class="form-control phone" name="Phone" value="" required placeholder="{!!$site["tieu-de-popup-so-4"]!!}*">
      </div>  
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" class="form-control email" name="Email" value="" placeholder="{!!$site["tieu-de-popup-so-5"]!!}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <input type="text" class="form-control xuatphat" name="Xuất phát" value="" placeholder="{!!$site["tieu-de-popup-so-6"]!!}">
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control ngayden" name="Ngày đến" required value="" placeholder="{!!$site["tieu-de-popup-so-10"]!!}">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" class="form-control ngayve" name="Ngày về" required value="" placeholder="{!!$site["tieu-de-popup-so-11"]!!}">
      </div>
    </div>
  </div>
  <div class="row m-b-10">
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" class="form-control nguoilon" name="Số Nglớn" value="" required placeholder="{!!$site["tieu-de-popup-so-12"]!!}">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" class="form-control treem" name="Số trẻ em 6-11t" value="" required placeholder="{!!$site["tieu-de-popup-so-13"]!!}">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <input type="text" class="form-control treem2" name="Số trẻ em 1-5t" value="" required placeholder="{!!$site["tieu-de-popup-so-14"]!!}">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group" style="">
        <label class=" text-light">{!!$site["tieu-de-popup-so-7"]!!}</label>
        <select class="form-control multiselect kenhnao" name="Biết qua kênh" required multiple="multiple">
          <option>Tiktok</option>
          <option>Google Search</option>
          <option>Youtube</option>
          <option>Bạn bè giới thiệu</option>
          <option>Khác</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group" style="">
        <label class=" text-light">{!!$site["tieu-de-popup-so-8"]!!}</label>
        <select class="form-control multiselect loainao" name="Thuê loại villa" required multiple="multiple">
          <option>Villa cư dân (Loại thông thường)</option>
          <option>Villa cư dân (Loại đặc biệt)</option>
          <option>Villa vận hành</option>
          <option>Hãy tư vấn cho tôi kỹ hơn</option>
        </select>
      </div>
    </div>
  </div>
  <div class="form-group m-b-15" style="">
    <label class=" text-light">{!!$site["tieu-de-popup-so-9"]!!}</label>
    <select class="form-control multiselect loainao" name="{!!$site["tieu-de-popup-so-9"]!!}" required multiple="multiple">
      @foreach($post as $p) @if(in_array(19, $p['categoryParent']) && empty($p['field5']))
      <option>{!!$p['title'] or ''!!}</option>
      @endif @endforeach 
    </select>
    {{-- <div class="row">
      @foreach($post as $p) @if(in_array(19, $p['categoryParent']) && empty($p['field5']))
      <div class="col-md-4 dv3">
        <p class="dv">
          <label class="dv2" title="{!!strip_tags(str_replace(["\n","&nbsp;"], " ", $p['desc']))!!}">
            <input class="dv4" type="checkbox" name="Sử dụng dịch vụ" value="{!!$p['title'] or ''!!}">{!!$p['title'] or ''!!}
          </label>
          <a class="dv5" href="{!!$p['link'] or ''!!}" target="_blank"><i class="fa fa-external-link"></i></a>
        </p>
      </div>
      @endif @endforeach 
    </div> --}}
    {{-- <select class="form-control multiselect dichvunao" name="Sử dụng dịch vụ" required multiple="multiple">
      @foreach($post as $p) @if(in_array(19, $p['categoryParent']) && empty($p['field5']))
      <option data-link="{!!$p['link'] or ''!!}" data-tooltip="{!!strip_tags($p['desc'])!!}">{!!$p['title'] or ''!!}</option>
      @endif @endforeach 
    </select> --}}
  </div>
  <div class="row m-b-20">
    <div class="col-md-12">
      <div class="form-group m-b-0 text-center">
        <input type="hidden" name="mail-to" value="{!!$site['dia-chi-email-nhan-thong-bao'] or ''!!}">
        <input type="hidden" name="subject" value="Đặt phòng {!!$s['title'] or ''!!}">
        <input type="hidden" class="utm" name="utm" value="">
        <input type="hidden" class="device" name="device" value="">
        <input type="hidden" class="sp-link" name="sp-link" value="">
        <button type="button" class="btn btn-send-mail btn-youtube tonho" data-wow-iteration="100000" data-wow-duration="0.3s" style="" data-action="Thuê villa">{!!$site["tieu-de-popup-so-15"]!!}</button>
      </div>
    </div>
  </div>
  <div style="background: #fff;
  padding: 10px 20px;
  border-radius: 10px;">
  <p class="text-center" style="line-height: 1.3;font-weight: bold;color: #000066;
  font-size: 120%;">
  {!!$site["tieu-de-popup-so-16"]!!}
</p>
<p class="text-center" style="line-height: 1.3;text-transform: uppercase;margin: 0;">
  <a href="tel:{!!$site['so-hotline'] or ''!!}"><u style="font-weight: bold;font-size: 150%;color: #b00;">Mobile: {!!$site['so-hotline'] or ''!!}</u></a> - <a href="http://zalo.me/{!!$site['so-hotline'] or ''!!}"><u style="font-weight: bold;font-size: 150%;color: #b00;">Zalo: {!!$site['so-hotline'] or ''!!}</u></a>
</p>
</div>
</form>