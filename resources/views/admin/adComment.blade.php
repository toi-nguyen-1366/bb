@extends('layouts.backend')
@section('content')
<section class="content-header">
  <h1>Danh sách bình luận
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
              <input type="text" class="form-control" id="myInputTextField" placeholder="Gõ từ khóa để tìm">
            </div>
          </div>
        </div>
      </div>
      <div class="box-body">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            @php($i=0)
            @foreach($postList as $pK=>$pL)
            <li class="{!!($i++==0) ? 'active':''!!}"><a href="#tab_{!!$i!!}" data-toggle="tab">{!!$pK!!} ({!!count($pL)!!})</a></li>
            @endforeach
          </ul>
          <div class="tab-content">
            @php($i=0)
            @foreach($postList as $pK=>$pL)
            <div class="tab-pane {!!($i++==0) ? 'active':''!!}" id="tab_{!!$i!!}">
              <table class="table table-hover datatable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ngày</th>
                    <th>Bài viết</th>
                    <th>Đánh giá (sao)</th>
                    <th>Tên</th>
                    <th>Bình luận</th>
                    <th>Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pL as $p)
                  <tr>
                    <td>{!!$p['id']!!}</td>
                    <td>{!!$p['created_at']!!}</td>
                    <td>{!!$post[$p['post']]['title']!!}</td>
                    <td>{!!$p['rating']!!}</td>
                    <td>{!!$p['name']!!}</td>
                    <td>{!!$p['comment']!!}</td>
                    <td>
                      <form data-element="comment">
                        <div class="btn-group">
                          @if(empty($p['deleted_at']))
                            @if($p['active']==0)
                              <button type="button" class="btn btn-default btn-sm active-btn-element" data-id="{!!$p['id']!!}">Duyệt</button>
                            @else
                              <a href="{!!$post[$p['post']]['link']!!}" target="_blank" class="btn btn-default btn-sm">Xem sản phẩm</a> 
                            @endif
                            <button type="button" class="btn btn-default btn-sm delete-btn-element" data-id="{!!$p['id']!!}">Xóa</button>
                          @else
                            <button type="button" class="btn btn-default btn-sm restore-btn-element" data-id="{!!$p['id']!!}">Khôi phục</button>
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
      "order": [[ 0, "desc" ]],
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
  });
</script>
@endsection
