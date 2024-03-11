@php($role = explode(',', Auth::user()->role))
@php($roletext = Auth::user()->role)
@extends('layouts.backend')
@section('content')
<section class="content-header">
  <h1>
    Tất cả {!!$category[$catId]['title']!!}
    <a class="btn btn-primary btn-sm" href="/admin/p{{$catId}}-edit0" ><i class="fa fa-plus"></i> {!!$category[$catId]['title']!!} mới</a>
    <a class="btn btn-info" style="float: right;" href="/">Xem trang web <i class="fa fa-arrow-right"></i></a>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <div class="box-tools">
            <div class="pull-right">
              <div class="form-group form-inline">
                <select class="form-control filter-select hidden-xs" id="category">
                  <option value="">Tất cả danh mục</option>
                  {!!Helper::categoryMultiLayerByCatId($category,Request::get('category'),999,$catId)!!}
                </select>
                <input type="text" class="form-control hidden-xs" id="myInputTextField" placeholder="Gõ từ khóa để tìm">
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Đã đăng ({!!count($postList['active'])!!})</a></li>
              <li><a href="#tab_2" data-toggle="tab">Nháp ({!!count($postList['inactive'])!!})</a></li>
              {{-- <li><a href="#tab_3" data-toggle="tab">Đã xóa ({!!count($postList['deleted'])!!})</a></li> --}}
            </ul>
            <div class="tab-content">
              @php($i=0)
              @foreach($postList as $pK=>$pL)
              <div class="tab-pane {{($i++==0) ? 'active':''}}" id="tab_{{$i}}">
                <table class="table table-hover datatable">
                  <thead>
                    <tr>
                      {{-- <th class="hidden-xs">STT</th> --}}
                      <th>Danh mục</th>
                      <th>Tiêu đề</th>
                      <th>Mã</th>
                      <th class="hidden-xs">Ngày đăng</th>
                      <th class="">Thứ hạng hiện tại</th>
                      <th class="">Sắp xếp</th>
                      <th>Tùy chọn</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php($j=1)
                    @foreach ($pL as $p)
                    <tr>
                      {{-- <td class="hidden-xs">{{$p['id']}}</td> --}}
                      {{-- <td class="hidden-xs">{{$j++}}</td> --}}
                      <td>
                        <?php $categoryText = [];
                        foreach ($p['category'] as $pc) {$categoryText[] = $category[$pc]['title'];} ?>
                        {{implode(', ', $categoryText)}}
                      </td>
                      <td>{{$p['title']}} {!!(empty($p['field21'])) ? '' : '('.$p['field21'].')'!!}</td>
                      <td>{{$p['sku']}}</td>
                      <td class="hidden-xs">{{Helper::datevn($p['created_at'])}}</td>
                      <td class="">{{$p['order']}}</td>
                      <td class="">
                        <div id="adminstatusbox{!!$p['id'] or '' !!}">{{$p['order']}}</div>
                        <i class="fa fa-pencil" id="pencil{!!$p['id'] or '' !!}" onclick="$(this).hide();$('#adminstatusbox{!!$p['id'] or '' !!}').hide();$('#status{!!$p['id'] or '' !!}').show();"></i>
                        <form data-element="post" style="display: none;margin: 10px 0 5px 0" id="status{!!$p['id'] or '' !!}">
                          <div class="form-group">
                            <input type="hidden" name="id" value="{!!$p['id'] or '' !!}">
                            <input name="order" id="adminstatus{!!$p['id'] or '' !!}" style="margin-bottom: 5px" value="{{$p['order']}}">
                            <button type="button" class="btn btn-primary btn-sm btn-flat edit-btn-element" data-id="{!!$p['id'] or '' !!}" onclick="$('#status{!!$p['id'] or '' !!}').hide();$('#adminstatusbox{!!$p['id'] or '' !!}').show();$('#pencil{!!$p['id'] or '' !!}').show();$('#adminstatusbox{!!$p['id'] or '' !!}').text($('#adminstatus{!!$p['id'] or '' !!}').val());">@lang('Lưu')</button>
                            <button type="button" class="btn btn-default btn-sm btn-flat" onclick="$('#status{!!$p['id'] or '' !!}').hide();$('#pencil{!!$p['id'] or '' !!}').show();$('#adminstatusbox{!!$p['id'] or '' !!}').show();">@lang('Hủy')</button>
                          </div>
                        </form>
                      </td>
                      <td>
                        <form data-element="post">
                          <div class="btn-group">
                            @if(empty($p['deleted_at']))
                            <a href="{{$p['link']}}?preview=1" target="_blank" class="btn btn-default btn-sm">Xem</a>
                            @if(in_array('admin', $role) || ($catId == 2 && strpos($roletext,'r08') !== false) || (in_array(3, $category[$catId]['categoryParent']) && strpos($roletext,'r11') !== false))
                            <a href="/admin/p{{$catId}}-edit{{$p['id']}}" class="btn btn-default btn-sm">Sửa</a>
                            {{-- <button type="button" class="btn btn-default btn-sm show-post" data-catid="{{$catId}}" data-id="{{$p['id']}}">Sửa</button> --}}
                            <button type="button" class="btn btn-default btn-sm delete-btn-element" data-id="{{$p['id']}}">Xóa</button>
                            @endif
                            @else
                            <button type="button" class="btn btn-default btn-sm restore-btn-element" data-id="{{$p['id']}}">Khôi phục</button>
                            @endif
                          </div>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row ajax-show"></div>
</section>
<style>.dataTables_filter{display: none}</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('.datatable').DataTable({
      "paging": false,
      "lengthChange": false,
      "lengthMenu": [[10, 20, -1], [10, 20, "Tất cả"]],
      "searching": true,
      "ordering": true,
      "order": [[ 3, "asc" ]],
      "info": false,
      "autoWidth": true,
      "language": {
        "decimal":        "",
        "emptyTable":     "Chưa có dữ liệu",
        "info":           "Đang hiện _START_ đến _END_ trong tổng số _TOTAL_ kết quả",
        "infoEmpty":      "Showing 0 to 0 of 0 entries",
        "infoFiltered":   "(filtered from _MAX_ total entries)",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Hiện _MENU_ kết quả mỗi trang",
        "loadingRecords": "Loading...",
        "processing":     "Processing...",
        "search":         "Tìm kiếm:",
        "zeroRecords":    "Không có kết quả nào",
        "paginate": {
          "first":      "Trang đầu",
          "last":       "Trang cuối",
          "next":       "Trang tiếp",
          "previous":   "Trang trước"
        },
        "aria": {
          "sortAscending":  ": activate to sort column ascending",
          "sortDescending": ": activate to sort column descending"
        }
      }
    });

    oTable = $('.datatable').DataTable();
    $('#myInputTextField').keyup(function(){
      oTable.search($(this).val()).draw() ;
    })

    $('.content-wrapper').on('click','.show-post', function(){
      $('.ajax-show').html('<div style="text-align: center;"><img src="//cdn.ihappy.vn/adminlte/loading.gif"></div>');
      var id = $(this).data('id');
      var catid = $(this).data('catid');
      $.ajax({
        dataType: "html",
        type: "POST",
        evalScripts: true,
        url: "{{action('AdminController@adPostAjax')}}",
        data: ({"_token": "{{ csrf_token() }}",id:id,catid:catid}),
        success: function(result){
          $('.ajax-show').html(result);
          $('html, body').animate({
            scrollTop: $(".ajax-show").offset().top
          }, 1000);
        }
      });
    });
    
    $('.content-wrapper').on('change','.filter-select', function(){
      var category = $('#category').val();
      window.location.href="/admin/p{{$catId}}?category="+category;
    });
  });
</script>
@endsection
