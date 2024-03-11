@extends('layouts.backend')
@section('content')
@php($catSelect = Request::get('catSelect'))
<section class="content-header">
  <h1>
    Danh mục {!!$category[$id]['title']!!}
    @if(!empty($catSelect) && isset($category[$catSelect]))
    <a class="btn btn-primary" style="float: right;" href="{{$category[$catSelect]['link']}}" target="_blank">Xem danh mục này <i class="fa fa-arrow-right"></i></a>
    @else
    <a class="btn btn-info" style="float: right;" href="/">Xem trang web <i class="fa fa-arrow-right"></i></a>
    @endif
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-3 padding-right-0">
      <div class="nav-tabs-custom nav-tabs-left">
        <ul class="nav nav-tabs">
          @foreach ($category as $k => $c)
          @if($k == 'new')
          <li {!!(empty($catSelect))?'class="active"':''!!}><a href="/admin/c{!!$id!!}"><i class="fa fa-plus"></i> Thêm danh mục</a></li>
          @else
          @if($k==$id)
          @foreach ($category as $c2) @if($c2['parent'] == $c['id'])
          <li {!!($catSelect==$c2['id'])?'class="active"':''!!}>
            <a href="/admin/c{!!$id!!}?catSelect={{$c2['id']}}"><i class="fa fa-chevron-right"></i> {{$c2['title']}} 
              <form role="form" data-element="category" style="display: initial;">
                <span href="javascript:void(0)" class=" label label-danger pull-right {{-- btn btn-flat btn-default --}} delete-btn-element" data-id="{{$c2['id']}}" style="margin-left: 5px;">Xóa</span>
              </form>
              <span class="label label-primary pull-right">{{$c2['postCount']}}</span>
            </a>
          </li>
          @foreach ($category as $c3) @if($c3['parent'] == $c2['id'])
          <li {!!($catSelect==$c3['id'])?'class="active"':''!!}><a href="/admin/c{!!$id!!}?catSelect={{$c3['id']}}" class="li-2-layer"><i class="fa fa-chevron-right"></i> {{$c3['title']}} <form role="form" data-element="category" style="display: initial;">
                <span href="javascript:void(0)" class=" label label-danger pull-right {{-- btn btn-flat btn-default --}} delete-btn-element" data-id="{{$c2['id']}}" style="margin-left: 5px;">Xóa</span>
              </form><span class="label label-primary pull-right">{{$c3['postCount']}}</span></a></li>
          @foreach ($category as $c4) @if($c4['parent'] == $c3['id'])
          <li {!!($catSelect==$c4['id'])?'class="active"':''!!}><a href="/admin/c{!!$id!!}?catSelect={{$c4['id']}}" class="li-3-layer"><i class="fa fa-chevron-right"></i> {{$c4['title']}} <form role="form" data-element="category" style="display: initial;">
                <span href="javascript:void(0)" class=" label label-danger pull-right {{-- btn btn-flat btn-default --}} delete-btn-element" data-id="{{$c2['id']}}" style="margin-left: 5px;">Xóa</span>
              </form><span class="label label-primary pull-right">{{$c4['postCount']}}</span></a></li>
          @foreach ($category as $c5) @if($c5['parent'] == $c4['id'])
          <li {!!($catSelect==$c5['id'])?'class="active"':''!!}><a href="/admin/c{!!$id!!}?catSelect={{$c5['id']}}" class="li-4-layer"><i class="fa fa-chevron-right"></i> {{$c5['title']}} <form role="form" data-element="category" style="display: initial;">
                <span href="javascript:void(0)" class=" label label-danger pull-right {{-- btn btn-flat btn-default --}} delete-btn-element" data-id="{{$c2['id']}}" style="margin-left: 5px;">Xóa</span>
              </form><span class="label label-primary pull-right">{{$c5['postCount']}}</span></a></li>
          @endif @endforeach
          @endif @endforeach
          @endif @endforeach
          @endif @endforeach
          @endif
          @endif
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <div class="tab-content">
          @php($c6 = (isset($category[Request::get('catSelect')]))?$category[Request::get('catSelect')]:$category['new'])
          <div class="tab-pane active">
            <form role="form" data-element="category">
              <div class="box-body">
                <input type="hidden" class="form-control" name="id" value="{{$c6['id']}}">
                <input type="hidden" class="form-control" name="type" value="{{$c6['type']}}">
                {!! Helper::inputLabelNormal('text','Tên (*)','title',$c6['title']) !!}
                {!! Helper::inputLabelNormal('text','Tiêu đề nút Xem tất cả (nếu có)','field2',$c6['field2']) !!}
                <div class="form-group">
                  <label>Mục cha (*)</label>
                  <select class="form-control" name="parent">
                    @foreach ($category as $k7 => $c7) @if($k7==$id && $k7 != 'new' && $c7['id'] != $c6['id'])
                    <option value="{{$c7['id']}}" {{($c6['parent'] == $c7['id']) ? 'selected' : ''}}>{{$c7['title']}}</option>
                    @foreach ($category as $k8 => $c8) @if($c8['parent']==$c7['id'] && $c8['id'] != $c6['id'])
                    <option value="{{$c8['id']}}" {{($c6['parent'] == $c8['id']) ? 'selected' : ''}}>-- {{$c8['title']}}</option>
                    @foreach ($category as $k9 => $c9)
                    @if($c9['parent']==$c8['id'] && $c9['id'] != $c6['id'])
                    <option value="{{$c9['id']}}" {{($c6['parent'] == $c9['id']) ? 'selected' : ''}}>---- {{$c9['title']}}</option>
                    @foreach ($category as $k10 => $c10)
                    @if($c10['parent']==$c9['id'] && $c10['id'] != $c6['id'])
                    <option value="{{$c10['id']}}" {{($c6['parent'] == $c10['id']) ? 'selected' : ''}}>------ {{$c10['title']}}</option>
                    @endif
                    @endforeach
                    @endif
                    @endforeach
                    @endif @endforeach
                    @endif @endforeach
                  </select>
                </div>
                {!! Helper::inputLabelNormal('text','Thứ tự sắp xếp','order',$c6['order']) !!}
                @if($id == 20)
                {!! Helper::inputLabelNormal('link','Link chuyển hướng khi click','field1',$c6['field1']) !!}
                @else
                {!! Helper::inputLabelNormal('text','Tùy biến link','link',$c6['link']) !!}
                {!! Helper::inputLabelNormal('text','Từ khóa tìm kiếm','keyword',$c6['keyword']) !!}
                {!! Helper::inputLabelNormal('img','Ảnh đại diện','img',$c6['img']) !!}
                {!! Helper::inputLabelNormal('textarea','Mô tả ngắn','desc',$c6['desc']) !!}
                {!! Helper::inputLabelNormal('cktextarea','Mô tả chi tiết','desc_full',$c6['desc_full']) !!}
                @if(env('CUSTOM_FACEBOOK'))
                <h4 style="background: #3c8dbc;color: #fff;padding: 10px 20px;">Tùy chỉnh Facebook</h4>
                <p>Mặc định khi chia sẻ Facebook sẽ lấy thông tin trong bài viết, còn nếu muốn tùy chỉnh bạn có thể điền vào các trường sau:</p>
                {!! Helper::inputLabelNormal('img','Ảnh hiện khi chia sẻ (800x400px)','facebook_img',$c6['facebook_img']) !!}
                {!! Helper::inputLabelNormal('text','Tiêu đề khi chia sẻ','facebook_title',$c6['facebook_title']) !!}
                {!! Helper::inputLabelNormal('notextarea','Mô tả ngắn khi chia sẻ','facebook_desc',$c6['facebook_desc']) !!}
                @endif
                @endif
              </div>
              <div class="box-footer">
                <a href="javascript:void(0)" class="btn btn-flat btn-primary save-btn-element">Lưu</a>
                @if($c6['active'] == '1')
                <a href="javascript:void(0)" class="btn btn-flat btn-primary deactive-btn-element" data-id="{{$c6['id']}}">Ẩn</a>
                @else
                <a href="javascript:void(0)" class="btn btn-flat btn-primary active-btn-element" data-id="{{$c6['id']}}">Hiện</a>
                @endif
                {{-- @if($c6['postCount']==0) --}}
                <a href="javascript:void(0)" class="btn btn-flat btn-default delete-btn-element" data-id="{{$c6['id']}}">Xóa</a>
                {{-- @else --}}
                {{-- <a href="javascript:void(0)" class="btn btn-flat btn-default" disabled>Xóa</a>
                <small>Không thể xóa vì vẫn còn sản phẩm/bài viết trong danh mục này</small>
                @endif --}}
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
