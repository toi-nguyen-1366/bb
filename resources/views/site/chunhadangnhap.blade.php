@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="sidebar-left sanp product-page" style="border-top: 1px rgba(52, 182, 96, 0.24) solid">
  <div class="container">
    <div class="heading heading-center row">
      <h1>{!!$title!!}</h1>
    </div>
    @if(!empty($dunghoatdong))
    <h4 class="text-center">{!!$dunghoatdong!!}</h4>
    <p class="text-center"><a class="btn btn-my" href="/">Về trang chủ</a></p>
    @elseif(empty($villa))
    <form method="get" action="/chu-nha">
      <h4 class="text-center">Vui lòng chọn nơi ở mà bạn quản lý.</h4>
      <div class="row">
        <div class="form-group m-b-10 col-md-6 col-md-offset-3">
          <label>Chọn nơi ở</label>
          <select name="villa" class="form-control js-example-basic-single" placeholder="Chọn nơi ở">
            @foreach($post as $p) @if(in_array(2, $p['categoryParent']))
            <option value="{!!$p['id'] or ''!!}" @if(isset($address) && $address==$p['id']) selected="" @endif>{!!$p['title'] or ''!!}</option>
            @endif @endforeach
          </select>
        </div>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-my">Chọn</button>
      </div>
    </form>
    @else
    @if(empty($xinchao))
    <form method="get" action="/chu-nha">
      @if(empty($chunhalist) || !is_array($chunhalist))
      <h4 class="text-center">Hiện nơi ở này chưa được cài đặt chủ nhà nào, vui lòng liên hệ với Phamtanvilla để biết thêm chi tiết.</h4>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-my">Quay lại</button>
      </div>
      @else
      <h4 class="text-center">Vui lòng chọn tài khoản quản lý để đăng nhập.</h4>
      <div class="row">
        <div class="form-group m-b-10 col-md-6 col-md-offset-3">
          <label>Tên người quản lý</label>
          <input type="hidden" name="villa" value="{!!$villa or ''!!}">
          <select class="form-control" name="chunha">
            @foreach($chunhalist as $cnl)
            <option value="{!!$cnl['id']!!}">{!!$cnl['name']!!}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-my">Chọn</button>
      </div>
      @endif
    </form>
    @else
    <h4 class="text-center">{!!$xinchao!!}</h4>
    <form method="get" action="/chu-nha">
      <div class="row">
        <div class="form-group m-b-10 col-md-6 col-md-offset-3">
          <input type="hidden" name="villa" value="{!!$villa or ''!!}">
          <input type="hidden" name="chunha" value="{!!$chunha or ''!!}">
          <label>Mật khẩu</label>
          <input type="password" name="password" class="form-control" placeholder="" value="">
          {{-- <input type="hidden" name="_token" class="form-control" value="{{ csrf_token() }}" placeholder=""> --}}
        </div>
      </div>
      <div class="form-group text-center">
        <a href="/chu-nha?villa={!!$villa or ''!!}" class="btn btn-my" style="background: #6ee898"><i class="fa fa-chevron-left"></i> Quay lại</a>
        <button type="submit" class="btn btn-my">Đăng nhập</button>
      </div>
    </form>
    @endif
    @endif
  </div>
</section>
@endsection