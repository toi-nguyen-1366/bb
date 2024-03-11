@extends('layouts.backend')
@section('content')
<section class="content-header">
  <h1><a class="btn btn-danger btn-sm" href="/admin/p{{$catId}}"><i class="fa fa-arrow-left"></i> Quay lại</a>
    @if(!empty($p['id']))<a class="btn btn-primary btn-sm" href="/admin/p{{$catId}}-edit0" ><i class="fa fa-plus"></i> {!!$category[$catId]['title']!!} mới</a>@endif
    {{(empty($p['id']))?'Thêm':'Sửa'}} {!!$category[$catId]['title']!!}
    @if($p['active'])
    <a class="btn btn-primary" style="float: right;" href="{{$p['link']}}" target="_blank">Xem bài viết này <i class="fa fa-arrow-right"></i></a>
    @if(!empty($p['id']))<a class="btn btn-default" style="float: right; margin-right: 10px" href="/admin/p{{$catId}}-edit0?copy={!!$p['id']!!}" target="_blank">Nhân bản thành bài viết mới <i class="fa fa-copy"></i></a>@endif
    @endif
  </h1> 
</section>
<section class="content">
  <div class="box box-product">
    <form role="form" data-element="post">
      @php($backLink = (!empty($p['id'])) ? '/admin/p'.$catId.'-edit'.$p['id'] : '/admin/p'.$catId)
      {!! Helper::boxFooterPost($p['id'],$backLink) !!}
      <div class="box-body row">
        <div class="col-md-9">
          <input type="hidden" class="form-control" name="id" value="{{$p['id']}}">
          {!!Helper::inputLabelNormal('text','Tiêu đề (*)','title',$p['title'])!!}
          {!!Helper::inputLabelNormal('text','Tiêu đề hiện trong danh sách','field21',$p['field21'])!!}
          {!!Helper::inputLabelNormal('text','Mã Villa','sku',$p['sku'])!!}
          {!! Helper::inputLabelNormal('text','Tùy biến link','link',$p['link']) !!}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label style="width: 100%">Danh mục (*)</label>
                <select class="form-control multiselect" name="category" multiple="multiple">
                  {!!Helper::categoryMultiLayerByCatId($category,$p['category'],999,$catId)!!}
                </select>
              </div>
            </div>
            <div class="col-md-6">
              {{-- {!! Helper::inputLabelNormal('text','Nếu đây là phòng con của một villa, điền ID villa vào đây','field5',$p['field5']) 
              !!} --}}
              <div class="form-group">
                <label style="width: 100%">Trang thành công tương ứng</label>
                <select class="form-control" name="field8">
                  @php($i=0) @foreach($post as $p2) @if(in_array(1, $p2['categoryParent']) && $i++<100)
                  <option value="{!!$p2['link'] or ''!!}" @if((empty($p['field8']) &&  $p2['id'] == '3') || ($p['field8'] == $p2['link'])) selected="" @endif>{!!$p2['title'] or ''!!}</option>
                  @endif @endforeach
                </select>
              </div>
            </div>
          </div>

          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Giá niêm yết (để hiển thị)</th>
                <th>Giá khuyến mãi (để hiển thị)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá thứ 2 đến thứ 5','price1x',number_format((float)preg_replace("/[^0-9]/","",$p['price1x'])),'đ') !!}
                </td>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá thứ 2 đến thứ 5','price_cuoituan1x',number_format((float)preg_replace("/[^0-9]/","",$p['price_cuoituan1x'])),'đ') !!}
                </td>
              </tr>
              <tr>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá thứ 6','price2x',number_format((float)preg_replace("/[^0-9]/","",$p['price2x'])),'đ') !!}
                </td>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá thứ 6','price_cuoituan2x',number_format((float)preg_replace("/[^0-9]/","",$p['price_cuoituan2x'])),'đ') !!}
                </td>
              </tr>
              <tr>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá thứ 7','price3x',number_format((float)preg_replace("/[^0-9]/","",$p['price3x'])),'đ') !!}
                </td>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá thứ 7','price_cuoituan3x',number_format((float)preg_replace("/[^0-9]/","",$p['price_cuoituan3x'])),'đ') !!}
                </td>
              </tr>
              <tr>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá chủ nhật','price4x',number_format((float)preg_replace("/[^0-9]/","",$p['price4x'])),'đ') !!}
                </td>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá chủ nhật','price_cuoituan4x',number_format((float)preg_replace("/[^0-9]/","",$p['price_cuoituan4x'])),'đ') !!}
                </td>
              </tr>
              <tr>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá ngày lễ','price5x',number_format((float)preg_replace("/[^0-9]/","",$p['price5x'])),'đ') !!}
                </td>
                <td>
                  {!! Helper::inputLabelNormal('text','Giá ngày lễ','price_cuoituan5x',number_format((float)preg_replace("/[^0-9]/","",$p['price_cuoituan5x'])),'đ') !!}
                </td>
              </tr>
            </tbody>
          </table>
          {!! Helper::inputLabelNormal('cktextarea','Ghi chú giá','spec',$p['spec']) !!}


          <h4 {{-- class="hidden" --}} style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Giá để tính tiền{{-- , theo số lượng người (điền theo thứ tự tăng dần, số lớn nhất phải bằng sức chứa tối đa của villa) --}}</h4>
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Số lượng người trên 12 tuổi (tiêu chuẩn)','songuoilon',$p['songuoilon'],'người') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Số lượng người trên 12 tuổi tối đa (có phụ thu)','songuoilonmax',$p['songuoilonmax'],'người') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Số lượng người 4-12 tuổi (tiêu chuẩn)','sotreem',$p['sotreem'],'người') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Số lượng người dưới 4 tuổi (tiêu chuẩn)','sotrenho',$p['sotrenho'],'người') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tổng số người trên 12t và 4-12t không vượt quá (kể cả phụ thu)','tongsonguoi',$p['tongsonguoi'],'người') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá ngày thường','price',number_format($p['price']),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá thứ 6','price_cuoituan',number_format($p['price_cuoituan']),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá thứ 7','price_thubay',number_format($p['price_thubay']),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá chủ nhật','price_chunhat',number_format($p['price_chunhat']),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá ngày lễ Tết','price_ngayle',number_format($p['price_ngayle']),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá phụ thu người lớn','price_phuthulon',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuthulon'])),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá phụ thu 4-12 tuổi','price_phuthu11tuoi',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuthu11tuoi'])),'đ') !!}
            </div>
            {{-- <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá phụ thu dưới 4 tuổi','price_phuthu6tuoi',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuthu6tuoi'])),'đ') !!}
            </div> --}}
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Ghi chú phụ thu','ghichugia',$p['ghichugia']) !!}
          <h4 style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Phụ phí (luôn cộng vào tổng tiền)</h4>
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Mô tả Phụ phí 1','phuphikhac1',$p['phuphikhac1']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá Phụ phí 1','price_phuphikhac1',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuphikhac1'])),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Mô tả Phụ phí 2','phuphikhac2',$p['phuphikhac2']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá Phụ phí 2','price_phuphikhac2',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuphikhac2'])),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Mô tả Phụ phí 3','phuphikhac3',$p['phuphikhac3']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá Phụ phí 3','price_phuphikhac3',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuphikhac3'])),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Mô tả Phụ phí 4','phuphikhac4',$p['phuphikhac4']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá Phụ phí 4','price_phuphikhac4',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuphikhac4'])),'đ') !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Mô tả Phụ phí 5','phuphikhac5',$p['phuphikhac5']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Giá Phụ phí 5','price_phuphikhac5',number_format((float)preg_replace("/[^0-9]/","",$p['price_phuphikhac5'])),'đ') !!}
            </div>
          </div>
          {{-- @for ($i = 1; $i < 6; $i++)
          <div class="row ">
            <div class="col-md-2">
              {!! Helper::inputLabelNormal('text','Số lượng người tối đa','nguoi'.$i,$p['nguoi'.$i],'người') !!}
            </div>
            <div class="col-md-2">
              {!! Helper::inputLabelNormal('text','Giá ngày thường','price'.$i,number_format((float)preg_replace("/[^0-9]/","",$p['price'.$i])),'đ') !!}
            </div>
            <div class="col-md-2">
              {!! Helper::inputLabelNormal('text','Giá thứ 6','price_cuoituan'.$i,number_format((float)preg_replace("/[^0-9]/","",$p['price_cuoituan'.$i])),'đ') !!}
            </div>
            <div class="col-md-2">
              {!! Helper::inputLabelNormal('text','Giá thứ 7','price_thubay'.$i,number_format((float)preg_replace("/[^0-9]/","",$p['price_thubay'.$i])),'đ') !!}
            </div>
            <div class="col-md-2">
              {!! Helper::inputLabelNormal('text','Giá chủ nhật','price_chunhat'.$i,number_format((float)preg_replace("/[^0-9]/","",$p['price_chunhat'.$i])),'đ') !!}
            </div>
            <div class="col-md-2">
              {!! Helper::inputLabelNormal('text','Giá ngày lễ Tết','price_ngayle'.$i,number_format((float)preg_replace("/[^0-9]/","",$p['price_ngayle'.$i])),'đ') !!}
            </div>
          </div>
          @endfor --}}
          <h4 {{-- class="hidden" --}} style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Đánh giá</h4>
          {!! Helper::inputLabelNormal('text','Đánh giá','field9',$p['field9']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề "Đánh giá" (không điền sẽ hiện chữ gốc)','field9x',$p['field9x']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Mô tả Đánh giá','field15',$p['field15']) !!}
          <h4 {{-- class="hidden" --}} style="background: #3c8dbc;color: #fff;padding: 10px 20px;">4 mục thông tin</h4>
          {!! Helper::inputLabelNormal('text','Giá từ','field10',$p['field10']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề "Giá từ" (không điền sẽ hiện chữ gốc)','field10x',$p['field10x']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Mô tả Giá từ','field16',$p['field16']) !!}
          {!! Helper::inputLabelNormal('text','Loại villa','field11',$p['field11']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề "Loại villa" (không điền sẽ hiện chữ gốc)','field11x',$p['field11x']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Mô tả Loại villa','field17',$p['field17']) !!}
          {!! Helper::inputLabelNormal('text','Điểm vượt trội','field12',$p['field12']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề "Điểm vượt trội" (không điền sẽ hiện chữ gốc)','field12x',$p['field12x']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Mô tả Điểm vượt trội','field18',$p['field18']) !!}
          {!! Helper::inputLabelNormal('text','Thông tin cơ bản','field13',$p['field13']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề "Thông tin cơ bản" (không điền sẽ hiện chữ gốc)','field13x',$p['field13x']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Mô tả Thông tin cơ bản','field19',$p['field19']) !!}

          <h4 {{-- class="hidden" --}} style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Chi tiết villa</h4>
          {!! Helper::inputLabelNormal('textarea','Mô tả ngắn','desc',$p['desc']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Nội dung bài viết','desc_full',$p['desc_full']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi giữa bài nếu có (điền mã [xemnhanh] ở vị trí muốn hiện trong bài viết)','field38',$p['field38']) !!}
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời giữa bài nếu có','field39',$p['field39']) !!}

          <h4 {{-- class="hidden" --}} style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Chi tiết villa dạng câu hỏi từng mục</h4>
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 1','field22',$p['field22']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 1','field22x',$p['field22x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 1','field23',$p['field23']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 2','field24',$p['field24']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 2','field24x',$p['field24x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 2','field25',$p['field25']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 3','field26',$p['field26']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 3','field26x',$p['field26x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 3','field27',$p['field27']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 4','field28',$p['field28']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 4','field28x',$p['field28x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 4','field29',$p['field29']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 5','field30',$p['field30']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 5','field30x',$p['field30x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 5','field31',$p['field31']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 6','field32',$p['field32']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 6','field32x',$p['field32x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 6','field33',$p['field33']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 7','field34',$p['field34']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 7','field34x',$p['field34x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 7','field35',$p['field35']) !!}
          <div class="row">
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Tiêu đề câu hỏi 8','field36',$p['field36']) !!}
            </div>
            <div class="col-md-6">
              {!! Helper::inputLabelNormal('text','Thứ tự câu hỏi 8','field36x',$p['field36x']) !!}
            </div>
          </div>
          {!! Helper::inputLabelNormal('cktextarea','Nội dung câu trả lời 8','field37',$p['field37']) !!}




          {!! Helper::inputLabelNormal('text','Từ khóa tìm kiếm Google','keyword',$p['keyword']) !!}
          {!!Helper::inputLabelNormal('link','Link video youtube nếu có','video',$p['video'])!!}
          {!!Helper::inputLabelNormal('onoff','Hiện ảnh làm chính thay vì video?','field20',$p['field20'])!!}
          {!! Helper::inputLabelNormal('img','Ảnh đại diện (700x400px)','img',$p['img']) !!}
          {!! Helper::inputLabelNormal('img','Ảnh đại diện Mobile (600x1300px)','field14',$p['field14']) !!}
          <div class="{{-- row --}} sapxepduochet">
            {{-- <div class="row"> --}}
              @for($i=0;$i<100;$i++)
              <div class="{{-- col-md-3 --}} xoaluon sapxepduoc {{(empty($p['img_other'][$i][0]))?'hidden':''}}">
                <div class="form-group ">
                  <label>Ảnh chi tiết số {{$i+1}} (700x400px)</label>
                  <div class="input-group">
                    <input type="text" class="form-control file_name" id="{!!rand(111111,999999)!!}" name="img{{$i}}" value="{{(empty($p['img_other'][$i][0]))?'':$p['img_other'][$i][0]}}">
                    <div class="input-group-btn">
                      <a href="javascript:void(0)" class="btn btn-info file-btn">Chọn ảnh</a>
                      <a href="javascript:void(0)" class="btn btn-default empty-btn">Xóa</a>
                    </div>
                  </div>
                  <p class="help-block">Định dạng .jpg .png hoặc .gif</p>
                  <img src="{{(empty($p['img_other'][$i][0]))?'':$p['img_other'][$i][0]}}" style="height: 100px;"/>
                </div>
              </div>
              @endfor
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary add-image-btn"><i class="fa fa-plus"></i> Up thêm ảnh chi tiết</button>
            </div>
            <script type="text/javascript">
              $(document).ready(function($) {
                $('.box-product').on('click', '.add-image-btn', function(event) {
                  $('.hidden:first').show().removeClass('hidden');
                });
              });
            </script>
            @if(env('CUSTOM_FACEBOOK'))
            <h4 style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Tùy chỉnh Facebook</h4>
            <p>Mặc định khi chia sẻ sẽ lấy thông tin trong bài viết, còn nếu muốn tùy chỉnh bạn có thể điền vào các trường sau:</p>
            {!! Helper::inputLabelNormal('img','Ảnh hiện khi chia sẻ (800x400px)','facebook_img',$p['facebook_img']) !!}
            {!! Helper::inputLabelNormal('text','Tiêu đề khi chia sẻ','facebook_title',$p['facebook_title']) !!}
            {!! Helper::inputLabelNormal('notextarea','Mô tả ngắn khi chia sẻ','facebook_desc',$p['facebook_desc']) !!}
            @endif
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>@lang('Từ khóa chính của bài viết (từ/cụm từ dài 2-10 chữ)')</label>
              <div class="input-group">
                <input type="text" class="form-control" id="main_keyword" name="main_keyword" value="{!!$p['main_keyword'] or ''!!}">
                <div class="input-group-btn"><button type="button" class="btn btn-default seo-checker-btn">@lang('Kiểm tra SEO')</button></div>
              </div>
              <input type="hidden" id="seo_point" name="seo_point" value="{!!$p['seo_point'] or ''!!}">
            </div>
            <script type="text/javascript">
              $(document).ready(function() {
                setTimeout(function(){
                  var mainKeyword = $('#main_keyword').val();
                  if(mainKeyword!=null && mainKeyword!="" && mainKeyword!=undefined){
                    $('.seo-checker-btn').trigger('click');
                  }
                },1000);
              });
            </script>
            <p class="diem-seo"><b>@lang('Điểm SEO:')</b> <span class="kiem-tra">@lang('Chưa kiểm tra')</span> <span class="label label-info">@lang('Tuyệt vời')</span><span class="label label-warning">@lang('Tốt')</span><span class="label label-success">@lang('Trung bình')</span><span class="label label-danger">@lang('Kém')</span></p>
            <ul class="seo-check-ul">
              <li class="seo-check seo-check-1"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Có từ khóa chính</span></li>
              <li class="seo-check seo-check-2"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Từ khóa chính có trong tiêu đề</span></li>
              <li class="seo-check seo-check-3"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Từ khóa chính có trong mô tả ngắn</span></li>
              <li class="seo-check seo-check-4"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Từ khóa chính có trong bài viết</span></li>
              <li class="seo-check seo-check-5"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Bài viết có tối thiểu 100 chữ</span></li>
              <li class="seo-check seo-check-6"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Bài viết chia thành các mục tiêu đề 2</span></li>
              <li class="seo-check seo-check-7"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Bài viết có ít nhất 01 hình ảnh</span></li>
              <li class="seo-check seo-check-8"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Bài viết có link sang ít nhất 01 bài khác</span></li>
              <li class="seo-check seo-check-9"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>Đã điền mục các từ khóa tìm kiếm liên quan</span></li>
            </ul>
            <p><b>Tips:</b> @lang('Để bài viết được Google đánh giá cao (chuẩn SEO), bạn cần xác định một từ khóa chính cho bài viết, ví dụ "học quay video bằng điện thoại", từ này phải xuất hiện 1 lần trong tiêu đề, 1 lần trong mô tả ngắn, và xuất hiện 3-4 lần trong nội dung bài viết.<br>Cụ thể cách viết bài, vui lòng tham khảo link sau:') <a href="http://ihappy.vn/lam-the-nao-de-website-xuat-hien-tren-google-voi-thu-hang-cao--p135" target="_blank">http://ihappy.vn/lam-the-nao-de-website-xuat-hien-tren-google-voi-thu-hang-cao--p135</a></p>

            <div class="hidden">
              {{-- {!! Helper::inputLabelNormal('text','Giá ngày thường','price',number_format($p['price']),'đ') !!} --}}
              {{-- {!! Helper::inputLabelNormal('text','Giá thứ 6 và Chủ Nhật','price_cuoituan',number_format($p['price_cuoituan']),'đ') !!} --}}
              {{-- {!! Helper::inputLabelNormal('text','Giá thứ 7 & dịp lễ Tết','price_ngayle',number_format($p['price_ngayle']),'đ') !!} --}}
              {!! Helper::inputLabelNormal('text','Sức chứa tối đa','field1',$p['field1'],'người') !!}
              {!! Helper::inputLabelNormal('text','Số giường','field2',$p['field2'],'giường') !!}
              {!! Helper::inputLabelNormal('text','Số nhà tắm/wc','field3',$p['field3'],'nhà tắm/wc') !!}
              {!! Helper::inputLabelNormal('text','Phụ thu người lớn (mặc định 200.000đ / người)','field6',$p['field6']) !!}
              {!! Helper::inputLabelNormal('text','Phụ thu trẻ em (mặc định 200.000đ / người)','field7',$p['field7']) !!}
            </div>
            {{-- {!! Helper::inputLabelNormal('text','Đánh giá','rating',$p['rating'],'sao') !!} --}}
            {{-- {!! Helper::inputLabelNormal('text','Giá khuyến mãi','price_promo',$p['price_promo'],'đ') !!} --}}
            {{-- {!! Helper::inputLabelNormal('date','Ngày đăng','created_at',date('Y-m-d',strtotime($p['created_at']))) !!} --}}
            {!! Helper::inputLabelNormal('text','Thứ tự sắp xếp','order',$p['order'],'','Điền số để sắp xếp bài viết lên đầu, ví dụ bài này bạn điền 0.5, bài khác bạn điền 1 thì bài này sẽ luôn xếp trên bài khác, nếu không điền số, mặc định sẽ là 9999 và bài nào mới hơn thì lên đầu') !!}
            
          </div>
        </div>
        {!! Helper::boxFooterPost($p['id'],$backLink) !!}
      </form>
    </div>
  </section>
  @endsection
