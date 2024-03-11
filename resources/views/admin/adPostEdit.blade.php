@extends('layouts.backend')
@section('content')
<section class="content-header">
  <h1><a class="btn btn-danger btn-sm" href="/admin/p{{$catId}}"><i class="fa fa-arrow-left"></i> Quay lại</a>
    @if(!empty($p['id']))<a class="btn btn-primary btn-sm" href="/admin/p{{$catId}}-edit0" ><i class="fa fa-plus"></i> {!!$category[$catId]['title']!!} mới</a>@endif
    {{(empty($p['id']))?'Thêm':'Sửa'}} {!!$category[$catId]['title']!!}
    @if($p['active'])
    <a class="btn btn-primary" style="float: right;" href="{{$p['link']}}" target="_blank">Xem bài viết này <i class="fa fa-arrow-right"></i></a>@endif
    @if(!empty($p['id']))<a class="btn btn-default" style="float: right; margin-right: 10px" href="/admin/p{{$catId}}-edit0?copy={!!$p['id']!!}" target="_blank">Nhân bản thành bài viết mới <i class="fa fa-copy"></i></a>@endif
  </h1> 
</section>
<section class="content">
  <div class="box box-product">
    <form id="oceanform" role="form" data-element="post">
      @php($backLink = (!empty($p['id'])) ? '/admin/p'.$catId.'-edit'.$p['id'] : '/admin/p'.$catId)
      {!! Helper::boxFooterPost($p['id'],$backLink) !!}
      <div class="box-body row">
        <div class="col-md-9">
          <input type="hidden" class="form-control" name="id" value="{{$p['id']}}">
          {!!Helper::inputLabelNormal('text','Tiêu đề (*)','title',$p['title'])!!}
          {!! Helper::inputLabelNormal('text','Tùy biến link','link',$p['link']) !!}
          <div class="form-group">
            <label style="width: 100%">Danh mục (*)</label>
            <select class="form-control multiselect" name="category" multiple="multiple">
              {!!Helper::categoryMultiLayerByCatId($category,$p['category'],999,$catId)!!}
            </select>
          </div>
          {!!Helper::inputLabelNormal('link','Link video youtube nếu có','video',$p['video'])!!}
          @if($catId = 19)
          {!! Helper::inputLabelNormal('notextarea','Mô tả ngắn','desc',$p['desc']) !!}
          @else
          {!! Helper::inputLabelNormal('textarea','Mô tả ngắn','desc',$p['desc']) !!}
          @endif
          {!! Helper::inputLabelNormal('cktextarea','Nội dung bài viết','desc_full',$p['desc_full']) !!}

          <div class="{{-- row --}} sapxepduochet">
            @php($j=0)
            @for($i=0;$i<100;$i++)
            @php($j++)
            <div class=" {{-- col-md-4 --}} xoaluon sapxepduoc {{(empty($p['img_other'][$i][0]))?'hidden':''}}" style="cursor: move;">
              <div class="form-group ">
                <label>Ảnh chi tiết số {{$i+1}} (700x400px)</label>
                <p><img src="{{(empty($p['img_other'][$i][0]))?'':$p['img_other'][$i][0]}}" style="height: 100px;"/></p>
                <div class="input-group">
                  <input type="text" class="form-control file_name" id="{!!rand(111111,999999)!!}" name="img{{$i}}" value="{{(empty($p['img_other'][$i][0]))?'':$p['img_other'][$i][0]}}">
                  <div class="input-group-btn">
                    <a href="javascript:void(0)" class="btn btn-info file-btn">Chọn file khác</a>
                    <a href="javascript:void(0)" class="btn btn-default empty-btn">Xóa</a>
                  </div>
                </div>
                <p class="help-block">Định dạng .jpg .png hoặc .gif</p>
              </div>
            </div>
          {{-- @if($j%3==0) </div><div class="row"> @endif --}}
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
            <li class="seo-check seo-check-1"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Có từ khóa chính')</span></li>
            <li class="seo-check seo-check-2"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Từ khóa chính có trong tiêu đề')</span></li>
            <li class="seo-check seo-check-3"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Từ khóa chính có trong mô tả ngắn')</span></li>
            <li class="seo-check seo-check-4"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Từ khóa chính có trong bài viết')</span></li>
            <li class="seo-check seo-check-5"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Bài viết có tối thiểu 100 chữ')</span></li>
            <li class="seo-check seo-check-6"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Bài viết chia thành các mục tiêu đề 2')</span></li>
            <li class="seo-check seo-check-7"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Bài viết có ít nhất 01 hình ảnh')</span></li>
            <li class="seo-check seo-check-8"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Bài viết có link sang ít nhất 01 bài khác')</span></li>
            <li class="seo-check seo-check-9"><i class="fa fa-check-circle-o"></i><i class="fa fa-circle-o"></i><span>@lang('Đã điền mục các từ khóa tìm kiếm liên quan')</span></li>
          </ul>
          <p><b>Tips:</b> @lang('Để bài viết được Google đánh giá cao (chuẩn SEO), bạn cần xác định một từ khóa chính cho bài viết, ví dụ "học quay video bằng điện thoại", từ này phải xuất hiện 1 lần trong tiêu đề, 1 lần trong mô tả ngắn, và xuất hiện 3-4 lần trong nội dung bài viết.<br>Cụ thể cách viết bài, vui lòng tham khảo link sau:') <a href="http://ihappy.vn/lam-the-nao-de-website-xuat-hien-tren-google-voi-thu-hang-cao--p135" target="_blank">http://ihappy.vn/lam-the-nao-de-website-xuat-hien-tren-google-voi-thu-hang-cao--p135</a></p>
          @php($p['created_at'] = (!empty($p['created_at'])) ? $p['created_at'] : date('Y-m-d'))
          {!! Helper::inputLabelNormal('date','Ngày đăng','created_at',date('Y-m-d',strtotime($p['created_at']))) !!}
          {!! Helper::inputLabelNormal('text','Thứ tự sắp xếp','order',$p['order'],'','Điền số để sắp xếp bài viết lên đầu, ví dụ bài này bạn điền 0.5, bài khác bạn điền 1 thì bài này sẽ luôn xếp trên bài khác, nếu không điền số, mặc định sẽ là 9999 và bài nào mới hơn thì lên đầu') !!}
          {!! Helper::inputLabelNormal('text','Từ khóa tìm kiếm Google','keyword',$p['keyword']) !!}
          {!! Helper::inputLabelNormal('img','Ảnh đại diện (700x400px)','img',$p['img']) !!}
          

          @if(env('CUSTOM_FACEBOOK'))
          <h4 style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Tùy chỉnh Facebook</h4>
          <p>Mặc định khi chia sẻ Facebook sẽ lấy thông tin trong bài viết, còn nếu muốn tùy chỉnh bạn có thể điền vào các trường sau:</p>
          {!! Helper::inputLabelNormal('img','Ảnh hiện khi chia sẻ (800x400px)','facebook_img',$p['facebook_img']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề khi chia sẻ','facebook_title',$p['facebook_title']) !!}
          {!! Helper::inputLabelNormal('notextarea','Mô tả ngắn khi chia sẻ','facebook_desc',$p['facebook_desc']) !!}
          @endif
        </div>
      </div>
      {!! Helper::boxFooterPost($p['id'],$backLink) !!}
    </form>
  </div>
</section>
@endsection
