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
    <form role="form" data-element="post">
      @php($backLink = (!empty($p['id'])) ? '/admin/p'.$catId.'-edit'.$p['id'] : '/admin/p'.$catId)
      {!! Helper::boxFooterPost($p['id'],$backLink) !!}
      <div class="box-body row">
        <div class="col-md-9">
          <input type="hidden" class="form-control" name="id" value="{{$p['id']}}">
          <input type="hidden" class="form-control" name="category" value="{{$catId}}">
          {!!Helper::inputLabelNormal('text','Tiêu đề (*)','title',$p['title'])!!}
          {{-- <div class="form-group">
            <label style="width: 100%">Danh mục (*)</label>
            <select class="form-control multiselect" name="category" multiple="multiple">
              {!!Helper::categoryMultiLayerByCatId($category,$p['category'],999,$catId)!!}
            </select>
          </div> --}}
          {!! Helper::inputLabelNormal('textarea','Mô tả ngắn','desc',$p['desc']) !!}
          @for($i=0;$i<200;$i++)
          <div class="form-group">
            <label>Ảnh số {{$i+1}}</label>
            <div class="input-group">
              <input type="text" class="form-control file_name" id="{!!rand(111111,999999)!!}" name="img{{$i}}" value="{{(empty($p['img_other'][$i][0]))?'':$p['img_other'][$i][0]}}">
              <div class="input-group-btn">
                <a href="javascript:void(0)" class="btn btn-info file-btn"><i class="fa fa-folder-open"></i> Chọn file khác</a>
              </div>
            </div>
            <p class="help-block">Định dạng .jpg .png hoặc .gif</p>
            <img src="{{(empty($p['img_other'][$i][0]))?'':$p['img_other'][$i][0]}}" style="width: 300px;"/>
          </div>
          @endfor
          {{-- <div class="form-group">
            <button type="button" class="btn btn-primary add-image-btn"><i class="fa fa-plus"></i> Up thêm ảnh vào bộ sưu tập</button>
          </div>
          <script type="text/javascript">
            $(document).ready(function($) {
              $('.box-product').on('click', '.add-image-btn', function(event) {
                $('.hidden:first').show().removeClass('hidden');
              });
            });
          </script> --}}
        </div>
        {{-- <div class="col-md-3">
          {!! Helper::inputLabelNormal('text','Thứ tự sắp xếp','order',$p['order'],'','Điền số để sắp xếp bài viết lên đầu, ví dụ bài này bạn điền 0.5, bài khác bạn điền 1 thì bài này sẽ luôn xếp trên bài khác, nếu không điền số, mặc định sẽ là 9999 và bài nào mới hơn thì lên đầu') !!}
          {!! Helper::inputLabelNormal('text','Từ khóa tìm kiếm Google','keyword',$p['keyword']) !!}
          {!! Helper::inputLabelNormal('img','Ảnh đại diện (600x600px)','img',$p['img']) !!}
          @if(env('CUSTOM_FACEBOOK'))
          <h4 style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Tùy chỉnh Facebook</h4>
          <p>Mặc định khi chia sẻ Facebook sẽ lấy thông tin trong bài viết, còn nếu muốn tùy chỉnh bạn có thể điền vào các trường sau:</p>
          {!! Helper::inputLabelNormal('img','Ảnh hiện khi chia sẻ (800x400px)','facebook_img',$p['facebook_img']) !!}
          {!! Helper::inputLabelNormal('text','Tiêu đề khi chia sẻ','facebook_title',$p['facebook_title']) !!}
          {!! Helper::inputLabelNormal('notextarea','Mô tả ngắn khi chia sẻ','facebook_desc',$p['facebook_desc']) !!}
          @endif
        </div> --}}
      </div>
      {!! Helper::boxFooterPost($p['id'],$backLink) !!}
    </form>
  </div>
</section>
@endsection
