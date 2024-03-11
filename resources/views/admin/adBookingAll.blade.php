@php($role = explode(',', Auth::user()->role))
@extends('layouts.backend')
@section('content')
@include('module.datepicker')
<section class="content-header">
  <h1>Check phòng theo ngày
    <a class="btn btn-info" style="float: right;" href="/">Xem trang web <i class="fa fa-arrow-right"></i></a>
  </h1>
</section>
<section class="content">
  <div class="box">
    <div class="box-body">
      <form action="/admin/adBookingAll" method="get" class="form-inline">
        <div class="form-group">
          <label>Ngày đến</label>
          <input type="text" name="from" class="datepicker form-control" value="{!!Request::get('from')!!}">
        </div>
        <div class="form-group">
          <label>Ngày về</label>
          <input type="text" name="to" class="datepicker form-control" value="{!!Request::get('to')!!}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Kiểm tra trên toàn hệ thống</button>
        </div>
      </form>
      @if(!empty(Request::get('from')) && !empty(Request::get('to')))
      <div>
        <?php  
        $from = Request::get('from');
        $from = explode(' ', $from);
        $from = $from[2];
        $from = explode('/', $from);
        $from = $from[2].'-'.$from[1].'-'.$from[0];

        $to = Request::get('to');
        $to = explode(' ', $to);
        $to = $to[2];
        $to = explode('/', $to);
        $to = $to[2].'-'.$to[1].'-'.$to[0];


        $villa = [];
        foreach($post as $p){
          if(in_array(2, $p['categoryParent'])){
            $villa[$p['id']] = $p;
          }
        }

        //var_dump($from,$to);
        $from = strtotime($from);
        $to = strtotime($to);
        //var_dump($from,$to);

        foreach ($postList['Đã lock'] as $p) {
          $p['ngayden'] = strtotime($p['ngayden']);
          $p['ngayve'] = strtotime($p['ngayve']);

          if(($p['ngayden'] >= $from && $p['ngayden'] < $to) || ($p['ngayve'] > $from && $p['ngayve'] <= $to)){
            unset($villa[$p['post_id']]);
          }
        }
        ?>
        <h3>Danh sách các Villa còn trống vào ngày đã chọn:</h3>
        <table class="table datatable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên Villa</th>
              <th>Quản lý</th>
            </tr>
          </thead>
          <tbody>
            @foreach($villa as $v)
            <tr>
              <td>{!!$v['id']!!}</td>
              <td>{!!$v['title']!!}</td>
              <td>
                @if(in_array('admin', $role) || in_array('r06', $role))
                <a href="/admin/adBookingVilla?p={!!$v['id'] or ''!!}" class="btn btn-info">Xem chi tiết tháng</a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </div>
  </div>
</section>
<style>.dataTables_filter{display: none}</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('.datatable').DataTable({
      "paging": false,
      "pageLength": 20,
      "lengthChange": false,
      "lengthMenu": [[10, 20, -1], [10, 20, "Tất cả"]],
      "searching": true,
      "ordering": true,
      "order": [[ 1, "asc" ]],
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
          "next":       "<i class='fa fa-chevron-right'></i>",
          "previous":   "<i class='fa fa-chevron-left'></i>"
        },
        "aria": {
          "sortAscending":  ": activate to sort column ascending",
          "sortDescending": ": activate to sort column descending"
        }
      }
    });

    $('.myInputTextField').keyup(function(){
      $(this).parents('.box').find('.datatable').DataTable().search($(this).val()).draw() ;
    });


  });
</script>
@endsection
