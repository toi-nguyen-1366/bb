@php($role = explode(',', Auth::user()->role))
@extends('layouts.backend')
@section('content')
<section class="content-header">
  <h1>@lang('Quản lý người dùng')
    <a class="btn btn-info btn-sm" style="float: right;" href="/">@lang('Xem trang web') <i class="fa fa-arrow-right"></i></a>
  </h1>
</section>
<section class="content">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">@lang('Danh sách người dùng')</h3>
    </div>
    <div class="box-body">
      <table class="table table-bordered table-striped datatable">
        <thead>
          <tr>
            <th>@lang('ID')</th>
            <th>@lang('Tên user')</th>
            <th>@lang('Email')</th>
            {{-- <th>@lang('Mật khẩu')</th> --}}
            {{-- <th>@lang('Quyền')</th> --}}
            <th>@lang('Trạng thái')</th>
            <th>@lang('Tùy chọn')</th>
          </tr>
        </thead>
        <tbody>
          @php($i=1)
          @foreach($postList as $p)
          <tr>
            {{-- <td>{!!$p['id'] or ''!!}</td> --}}
                  <td>{{$i++}}</td>
            <td>
              <div id="adminnamebox{!!$p['id'] or ''!!}" style="float: left;margin-right: 5px;">{!!$p['name'] or ''!!}</div>
              {{-- <i class="fa fa-pencil" id="pencilname{!!$p['id'] or ''!!}" onclick="$(this).hide();$('#adminnamebox{!!$p['id'] or ''!!}').hide();$('#name{!!$p['id'] or ''!!}').show();" ></i>
              <form data-element="user" style="display: none;margin: 10px 0 5px 0" id="name{!!$p['id'] or ''!!}">
                <div class="form-group">
                  <input type="hidden" name="id" value="{!!$p['id'] or ''!!}">
                  <input type="text" id="adminname{!!$p['id'] or ''!!}" name="name" class="form-control" style="margin-bottom: 5px;" value="{!!$p['name'] or ''!!}">
                  <button type="button" class="btn btn-primary btn-sm btn-flat edit-btn-element" data-id="{!!$p['id'] or ''!!}" onclick="$('#name{!!$p['id'] or ''!!}').hide();$('#adminnamebox{!!$p['id'] or ''!!}').show();$('#pencilname{!!$p['id'] or ''!!}').show();$('#adminnamebox{!!$p['id'] or ''!!}').text($('#adminname{!!$p['id'] or ''!!}').val());">@lang('Lưu')</button>
                  <button type="button" class="btn btn-default btn-sm btn-flat" onclick="$('#name{!!$p['id'] or ''!!}').hide();$('#pencilname{!!$p['id'] or ''!!}').show();$('#adminnamebox{!!$p['id'] or ''!!}').show();">@lang('Hủy')</button>
                </div>
              </form> --}}
            </td>
            <td>
              <div id="adminemailbox{!!$p['id'] or ''!!}" style="float: left;margin-right: 5px;">{!!$p['email'] or ''!!}</div>
              {{-- <i class="fa fa-pencil" id="pencilemail{!!$p['id'] or ''!!}" onclick="$(this).hide();$('#adminemailbox{!!$p['id'] or ''!!}').hide();$('#email{!!$p['id'] or ''!!}').show();" ></i>
              <form data-element="user" style="display: none;margin: 10px 0 5px 0" id="email{!!$p['id'] or ''!!}">
                <div class="form-group">
                  <input type="hidden" name="id" value="{!!$p['id'] or ''!!}">
                  <input type="text" id="adminemail{!!$p['id'] or ''!!}" name="email" class="form-control" style="margin-bottom: 5px;" value="{!!$p['email'] or ''!!}">
                  <button type="button" class="btn btn-primary btn-sm btn-flat edit-btn-element" data-id="{!!$p['id'] or ''!!}" onclick="$('#email{!!$p['id'] or ''!!}').hide();$('#adminemailbox{!!$p['id'] or ''!!}').show();$('#pencilemail{!!$p['id'] or ''!!}').show();$('#adminemailbox{!!$p['id'] or ''!!}').text($('#adminemail{!!$p['id'] or ''!!}').val());">@lang('Lưu')</button>
                  <button type="button" class="btn btn-default btn-sm btn-flat" onclick="$('#email{!!$p['id'] or ''!!}').hide();$('#pencilemail{!!$p['id'] or ''!!}').show();$('#adminemailbox{!!$p['id'] or ''!!}').show();">@lang('Hủy')</button>
                </div>
              </form> --}}
            </td>
            {{-- <td>
              <div id="adminpasswordbox{!!$p['id'] or ''!!}" style="float: left;margin-right: 5px;">• • • • • • • • </div>
              <i class="fa fa-pencil" id="pencilpassword{!!$p['id'] or ''!!}" onclick="$(this).hide();$('#adminpasswordbox{!!$p['id'] or ''!!}').hide();$('#password{!!$p['id'] or ''!!}').show();" ></i>
              <form data-element="user" style="display: none;margin: 10px 0 5px 0" id="password{!!$p['id'] or ''!!}">
                <div class="form-group">
                  <input type="hidden" name="id" value="{!!$p['id'] or ''!!}">
                  <input type="text" id="adminpassword{!!$p['id'] or ''!!}" name="password" class="form-control" style="margin-bottom: 5px;">
                  <button type="button" class="btn btn-primary btn-sm btn-flat edit-btn-element" data-id="{!!$p['id'] or ''!!}" onclick="$('#password{!!$p['id'] or ''!!}').hide();$('#adminpasswordbox{!!$p['id'] or ''!!}').show();$('#pencilpassword{!!$p['id'] or ''!!}').show();$('#adminpasswordbox{!!$p['id'] or ''!!}').text($('#adminpassword{!!$p['id'] or ''!!}').val());">@lang('Lưu')</button>
                  <button type="button" class="btn btn-default btn-sm btn-flat" onclick="$('#password{!!$p['id'] or ''!!}').hide();$('#pencilpassword{!!$p['id'] or ''!!}').show();$('#adminpasswordbox{!!$p['id'] or ''!!}').show();">@lang('Hủy')</button>
                </div>
              </form>
            </td> --}}
            {{-- <td>
              <div id="adminrolebox{!!$p['id'] or ''!!}" style="float: left;margin-right: 5px;">
                <p>
                  @foreach(unserialize(ROLES) as $kr=>$r)
                  @php($thisRole = explode(',', $p['role']))
                  @if(in_array($r, $thisRole))
                  <span class="label bg-green">{!!$kr!!}</span>
                  @endif
                  @endforeach
                </p>
              </div>
              <i class="fa fa-pencil" id="pencil{!!$p['id'] or ''!!}" onclick="$(this).hide();$('#adminrolebox{!!$p['id'] or ''!!}').hide();$('#role{!!$p['id'] or ''!!}').show();" ></i>
              <form data-element="user" style="display: none;margin: 10px 0 5px 0" id="role{!!$p['id'] or ''!!}">
                <div class="form-group">
                  <input type="hidden" name="id" value="{!!$p['id'] or ''!!}">
                  <select name="role" id="adminrole{!!$p['id'] or ''!!}" style="margin-bottom: 5px" class="form-control multiselect" multiple="">
                    @php($i=1)
                    @foreach(unserialize(ROLES) as $kr=>$r)
                    @php($thisRole = explode(',', $p['role']))
                    <option @if(in_array($r, $thisRole)) selected="" @endif value="{{$r}}">{!!$i++!!}.{!!$kr!!}</option>
                    @endforeach
                  </select>
                  <button type="button" class="btn btn-primary btn-sm btn-flat edit-btn-element" data-id="{!!$p['id'] or ''!!}" onclick="$('#role{!!$p['id'] or ''!!}').hide();$('#adminrolebox{!!$p['id'] or ''!!}').show();$('#pencil{!!$p['id'] or ''!!}').show();$('#adminrolebox{!!$p['id'] or ''!!}').text($('#adminrole{!!$p['id'] or ''!!}').val());">@lang('Lưu')</button>
                  <button type="button" class="btn btn-default btn-sm btn-flat" onclick="$('#role{!!$p['id'] or ''!!}').hide();$('#pencil{!!$p['id'] or ''!!}').show();$('#adminrolebox{!!$p['id'] or ''!!}').show();">@lang('Hủy')</button>
                </div>
              </form>
            </td> --}}
            <td>
              @if($p['active']==0)
              @lang('Đang khóa')
              @else
              @lang('Đang hoạt động')
              @endif
            </td>
            <td>
              @if($p['id']!=Auth::user()->id)
              <form data-element="user">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm edit-user" onclick="$('.box-account').hide();$('.box-account-{!!$p['id'] or ''!!}').show()" data-id="{!!$p['id'] or ''!!}">Sửa</button>
                  @if(empty($p['deleted_at']))
                  @if($p['active']==0)
                  <button type="button" class="btn btn-default btn-sm active-btn-element" data-id="{!!$p['id'] or ''!!}">@lang('Mở khóa tài khoản')</button>
                  @else
                  <button type="button" class="btn btn-default btn-sm deactive-btn-element" data-id="{!!$p['id'] or ''!!}">@lang('Khóa tài khoản')</button>
                  @endif
                  <button type="button" class="btn btn-default btn-sm delete-btn-element" data-id="{!!$p['id'] or ''!!}">@lang('Xóa')</button>
                  @else
                  <button type="button" class="btn btn-default btn-sm restore-btn-element" data-id="{!!$p['id'] or ''!!}">@lang('Khôi phục')</button>
                  @endif
                </div>
              </form>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @foreach($postList as $p)
  <div class="box box-account box-account-{!!$p['id'] or ''!!}" style="display: none;">
    <div class="box-header with-border">
      <h3 class="box-title">Sửa tài khoản {!!$p['email'] or ''!!}</h3>
    </div>
    <div class="box-body">
      <form data-element="user">
        <div>
          <input type="hidden" name="id" value="{!!$p['id'] or ''!!}">
          @php($thisRole = explode(',', $p['role']))
          <div class="form-group">
            <label>Tên user</label>
            <input type="text" name="name" class="form-control" value="{!!$p['name'] or ''!!}">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{!!$p['email'] or ''!!}">
          </div>
          <div class="form-group">
            <label>Mật khẩu</label>
            <input type="text" name="password" class="form-control" value="" placeholder="• • • • • • • • ">
          </div>
          <div class="form-group">
            <label>Phân Quyền</label>
            <div class="radio">
              <label>
                <input type="radio" name="role" id="" value="admin" @if(in_array('admin', $thisRole)) checked="" @endif onclick="$('.roleall{!!$p['id'] or ''!!} input').prop('checked',true);">
                Cho phép tất cả chức năng
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="role" id="" value="" @if(!in_array('admin', $thisRole)) checked="" @endif onclick="$('.roleall{!!$p['id'] or ''!!} input').prop('checked',false);">
                Giới hạn chức năng
              </label>
            </div>
            <table class="table table-bordered roleall{!!$p['id'] or ''!!}">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Chuyên mục</th>
                  <th>Quyền hạn</th>
                </tr>
              </thead>
              <tbody>
                @php($i=1)
                @foreach(unserialize(ROLES) as $kr=>$r)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{!!$kr!!}</td>
                  <td>
                    <div class="form-inline">
                      <div class="checkbox"><label><input value="{{$r}}" name="role" type="checkbox"@if(in_array($r, $thisRole) || in_array('admin', $thisRole)) checked="" @endif> Toàn quyền </label></div>
                      <div class="checkbox"><label><input value="{{$r}}-view" name="role" type="checkbox"@if(in_array($r.'-view', $thisRole) || in_array('admin', $thisRole)) checked="" @endif> Xem </label></div>
                      <div class="checkbox"><label><input value="{{$r}}-edit" name="role" type="checkbox"@if(in_array($r.'-edit', $thisRole) || in_array('admin', $thisRole)) checked="" @endif> Sửa </label></div>
                      <div class="checkbox"><label><input value="{{$r}}-delete" name="role" type="checkbox"@if(in_array($r.'-delete', $thisRole) || in_array('admin', $thisRole)) checked="" @endif> Xóa </label></div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-primary btn-sm btn-flat save-btn-element">@lang('Lưu')</button>
        </div>
      </form>
    </div>
  </div>
  @endforeach
  <div class="box box-account box-account-new">
    <div class="box-header with-border">
      <h3 class="box-title">@lang('Thêm người dùng')</h3>
    </div>
    <div class="box-body">
      <form data-element="user">
        <div>
          <input type="hidden" name="id" value="">
          <div class="form-group">
            <label>Tên user</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Mật khẩu</label>
            <input type="text" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label>Phân Quyền</label>
            <div class="radio">
              <label>
                <input type="radio" name="role" id="" value="admin" checked="" onclick="$('.roleall input').prop('checked',true);">
                Cho phép tất cả chức năng
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="role" id="" value="" onclick="$('.roleall input').prop('checked',false);">
                Giới hạn chức năng
              </label>
            </div>
            <table class="table table-bordered roleall">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Chuyên mục</th>
                  <th>Quyền hạn</th>
                </tr>
              </thead>
              <tbody>
                @php($i=1)
                @foreach(unserialize(ROLES) as $kr=>$r)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{!!$kr!!}</td>
                  <td>
                    <div class="form-inline">
                      <div class="checkbox"><label><input value="{{$r}}" name="role" type="checkbox" checked=""> Toàn quyền </label></div>
                      <div class="checkbox"><label><input value="{{$r}}-view" name="role" type="checkbox" checked=""> Xem </label></div>
                      <div class="checkbox"><label><input value="{{$r}}-edit" name="role" type="checkbox" checked=""> Sửa </label></div>
                      <div class="checkbox"><label><input value="{{$r}}-delete" name="role" type="checkbox" checked=""> Xóa </label></div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <button type="button" class="btn btn-primary btn-sm btn-flat save-btn-element">@lang('Lưu')</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection
