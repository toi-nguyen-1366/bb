@php($role = explode(',', Auth::user()->role))
@extends('layouts.backend')
@section('content')
<section class="content-header">
  <h1>Danh sách Booking
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
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">
          <input type="text" class="form-control" id="myInputTextField" placeholder="Gõ từ khóa để tìm">
          <div class="tab-content">
            <table class="table table-hover datatable">
              <thead>
                <tr>
                  <th>Mã Booking</th>
                  <th>Thời gian booking</th>
                  <th>Villa</th>
                  <th>Ngày ở</th>
                  <th>Tổng tiền</th>
                  <th>Thông tin khách</th>
                  <th>Trạng thái</th>
                  <th>Người tạo</th>
                  <th>Tùy chọn</th>
                </tr>
              </thead>
              <tbody>
                @foreach($postList as $pK=>$pL)
                @foreach ($pL as $p)
                <tr class="{!!Helper::getPathFromString($pK)!!}">
                  <td>{!!$p['code'] or ''!!}</td>
                  <td>{!!date('Y/m/d H:i', strtotime($p['created_at']))!!}</td>
                  <td><a href="{!!$post[$p['post_id']]['link'] or ''!!}" target="_blank">{!!$post[$p['post_id']]['title'] or ''!!}</a></td>
                  <td>{!!date('Y/m/d', strtotime($p['ngayden']))!!}<br>{!!date('Y/m/d', strtotime($p['ngayve']))!!}<br>({!! intval((strtotime($p['ngayve']) - strtotime($p['ngayden']))/86400); !!} đêm)</td>
                  <td>{!!$p['tongtien'] or ''!!}</td>
                  <td>{!!$p['hoten'] or ''!!} - {!!$p['sdt1'] or ''!!} @if(!empty($p['sdt2']))- {!!$p['sdt2'] or ''!!}@endif<br>
                    {!!$p['email'] or ''!!}<br>
                    {!!$p['songuoilon'] or 0!!} người lớn. {!!$p['sotreem'] or 0!!} trẻ em. {!!$p['sotreem2'] or 0!!} trẻ nhỏ<br>
                    {!!$p['ghichu'] or ''!!}
                  </td>
                  <td>{!!$pK!!}</td>
                  <td>{!!$p['nguoitao'] or ''!!}</td>
                  <td>
                    @if(in_array('admin', $role) || in_array('r06', $role))
                    <form data-element="booking">
                      <div class="btn-group">
                        @if(empty($p['deleted_at']))
                        @if($p['active']==0)
                        <button type="button" class="btn btn-default btn-sm active-btn-element" data-id="{!!$p['id'] or ''!!}">Đã TT</button>
                        @else
                        <button type="button" class="btn btn-default btn-sm deactive-btn-element" data-id="{!!$p['id'] or ''!!}">Hủy lock</button>
                        @endif
                        <button type="button" class="btn btn-default btn-sm delete-btn-element" data-id="{!!$p['id'] or ''!!}">Xóa</button>
                        @else
                        <button type="button" class="btn btn-default btn-sm restore-btn-element" data-id="{!!$p['id'] or ''!!}">Khôi phục</button>
                        @endif
                      </div>
                    </form>
                    @endif
                  </td>
                </tr>
                @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
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
      "order": [[ 1, "desc" ]],
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
