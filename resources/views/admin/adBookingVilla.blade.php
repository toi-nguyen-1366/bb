@php($role = explode(',', Auth::user()->role))
@extends('layouts.backend')
@section('content')
@include('module.datepicker')
<section class="content-header">
  <h1>Quản lý Booking theo Villa
    <a class="btn btn-info" style="float: right;" href="/">Xem trang web <i class="fa fa-arrow-right"></i></a>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-3 padding-right-0">
      <div class="box">
        <div class="box-body">
          {{-- <input type="text" class="form-control myInputTextField" placeholder="Tìm kiếm nhanh"> --}}
          <table class="table table-hover datatable table-bordered">
            <thead>
              <tr>
                <th class="hidden-xs">ID</th>
                <th>Tên Villa</th>
              </tr>
            </thead>
            <tbody>
              @foreach($post as $p) @if(in_array(2, $p['categoryParent']))
              <tr {!!(Request::get('p')==$p['id'])?'class="active"':''!!} onclick="window.location='/admin/adBookingVilla?p={{$p['id']}}';" style="cursor: pointer;">
                <td class="hidden-xs">{{$p['id']}}</td>
                <td>@if(!empty($p['field5']) && isset($post[$p['field5']])) {!!explode(' ',trim($post[$p['field5']]['title']))[0]!!} {{$p['title']}} @else {{$p['title']}} @endif</td>
              </tr>
              @endif @endforeach 
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      @if(!empty($id))
      <div class="box">
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Tình trạng đặt phòng</a></li>
              @if(in_array('admin', $role) || in_array('r09', $role))
              <li class=""><a href="#tab_2" data-toggle="tab">Quản lý chủ nhà</a></li>
              @endif
              {{-- <li class=""><a href="#tab_3" data-toggle="tab">Đặt phòng nhanh</a></li> --}}
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                @if(in_array('admin', $role) || in_array('r06', $role))
                <p class="text-right"><a href="javascript:void(0)" onclick="$('.lockphong').toggle(300);">Lock phòng nhanh <i class="fa fa-angle-double-right"></i></a></p>
                <div class="lockphong" style="display: none;">
                  <form class="" style="margin-bottom: 20px" data-element="lockphong">
                    <input type="hidden" name="Mã Booking" value="AD{!!time().Helper::generateRandomString(2)!!}">
                    <input type="hidden" name="ID Nơi ở" value="{!!$s['id'] or ''!!}">
                    <input type="hidden" name="Tổng cộng" class="tongconginput" value="">
                    <input type="hidden" name="Người tạo booking" value="Admin">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="Ngày đến" class="form-control" id="dt1x" {{-- value="{!!(isset($dateFrom)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateFrom)),'l d/m/Y') : Helper::datevn(time(),'l d/m/Y')!!}" --}} placeholder="Ngày đến">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" name="Ngày về" class="form-control" id="dt2x" {{-- value="{!!(isset($dateTo)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateTo)),'l d/m/Y') : Helper::datevn(strtotime("+1 days"),'l d/m/Y').' (1 đêm)'!!}"  --}}placeholder="Ngày về">
                        </div>
                      </div>
                    </div>
                    <div class="canhbao" style="display: none;"><p style="font-weight: bold;color: #ef402b;font-style: italic; text-align: center;">Xin lỗi, ngày bạn chọn đã được book!</p></div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" name="Họ và tên" class="form-control" placeholder="Tên KH">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <input type="text" name="Số điện thoại" class="form-control" placeholder="SĐT">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <button type="button" class="btn btn-primary btn-flat btn-lockphong" style="width: 100%">Lock phòng</button>
                      </div>
                    </div>
                  </form>
                </div>
                @endif
                <div id=bTinhtrangphong style="margin-bottom: 10px">
                  <div class=mBottom20 id=datepicker></div>
                  <div class="m-t-10"></div>
                  <div style="width: 100%;overflow: hidden;display: block; margin-top: 10px">
                    @php($chiaphong = false)
                    @foreach($post as $p) @if(in_array(2, $p['categoryParent']) && !empty($p['field5'] && ($p['field5'] == $id || $p['field5'] == $s['field5'])))
                    @php($chiaphong = true)
                    @endif @endforeach
                    @if($chiaphong && empty($s['field5']))
                    <div class=fl style="margin-right: 20px">
                      <i class=dateHet></i> Hết phòng cả tòa
                    </div>
                    <div class=fl style="margin-right: 20px">
                      <i class=dateDadat></i> Còn phòng trống
                    </div>
                    <div class=fl>
                      <i class=dateConphong></i> Còn phòng cả tòa
                    </div>
                    @else
                    <div class=fl style="margin-right: 20px">
                      <i class=dateHet></i> Hết phòng
                    </div>
                    <div class=fl>
                      <i class=dateConphong></i> Còn phòng
                    </div>
                    @endif
                  </div>
                </div>
                <input type="text" class="form-control myInputTextField" placeholder="Tìm kiếm nhanh">
                <table class="table table-hover table-bordered datatable">
                  <thead>
                    <tr>
                      <th>Mã Booking</th>
                      <th>Thời gian booking</th>
                      {{-- <th>Villa</th> --}}
                      <th>Ngày ở</th>
                      {{-- <th>Tổng tiền</th> --}}
                      <th>Thông tin khách</th>
                      <th>Trạng thái</th>
                      {{-- <th>Ghi chú</th> --}}
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
                      {{-- <td><a href="{!!$post[$p['post_id']]['link'] or ''!!}" target="_blank">{!!$post[$p['post_id']]['title'] or ''!!}</a></td> --}}
                      <td>{!!date('Y/m/d', strtotime($p['ngayden']))!!}<br>{!!date('Y/m/d', strtotime($p['ngayve']))!!}<br>({!! intval((strtotime($p['ngayve']) - strtotime($p['ngayden']))/86400); !!} đêm)</td>
                      {{-- <td>{!!$p['tongtien'] or ''!!}</td> --}}
                      <td>{!!$p['hoten'] or ''!!} - {!!$p['sdt1'] or ''!!} @if(!empty($p['sdt2']))- {!!$p['sdt2'] or ''!!}@endif<br>
                        {!!$p['email'] or ''!!}<br>
                        {!!$p['songuoilon'] or ''!!} người lớn. {!!$p['sotreem'] or 0!!} trẻ em. {!!$p['sotreem2'] or 0!!} trẻ nhỏ<br>
                        {!!$p['ghichu'] or ''!!}
                      </td>
                      <td>{!!$pK!!}</td>
                      {{-- <td>{!!$p['ghichuadmin'] or ''!!}</td> --}}
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
                            <button type="button" class="btn btn-default btn-sm delete-btn-element" data-id="{!!$p['id'] or ''!!}" data-url-back="/admin/adBookingVilla?p={!!$id!!}">Xóa</button>
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
              @if(in_array('admin', $role) || in_array('r09', $role))
              <div class="tab-pane" id="tab_2">
                <form data-element="chunha">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td>ID</td>
                        <td>Tên chủ nhà</td>
                        <td>Link đăng nhập</td>
                        <td>Trạng thái</td>
                        <td>Thao tác</td>
                      </tr>
                    </thead>
                    <tbody>
                      @php($chunha = json_decode($s['field4'],true))
                      @if(!empty($chunha) && is_array($chunha))
                      @foreach($chunha as $cn)
                      <tr>
                        <td>{!!$cn['id'] or ''!!}
                          <input type="hidden" class="form-control" name="chunha_{!!$cn['id'] or ''!!}_id" value="{!!$cn['id'] or ''!!}">
                        </td>
                        <td>
                          <span class="edit-hide">{!!$cn['name'] or ''!!}</span>
                          <div class="form-group edit-show" style="margin-bottom: 0; display: none;">
                            <input type="text" class="form-control" name="chunha_{!!$cn['id'] or ''!!}_name" value="{!!$cn['name'] or ''!!}" placeholder="Tên chủ nhà">
                          </div>
                        </td>
                        <td>
                          <a href="{{env('APP_URL_REAL')}}/chu-nha?villa={{$id}}&chunha={!!$cn['id'] or ''!!}" class="edit-hide" target="_blank">{{env('APP_URL_REAL')}}/chu-nha?villa={{$id}}&chunha={!!$cn['id'] or ''!!}</a>
                          <div class="form-group edit-show" style="margin-bottom: 0; display: none;">
                            <input type="text" class="form-control" name="" value="" placeholder="Mật khẩu mới (nếu có)" onkeyup="$(this).siblings('input').val($(this).val())">
                            <input type="hidden" class="form-control inputunchange" name="chunha_{!!$cn['id'] or ''!!}_password" value="{!!$cn['password'] or ''!!}">
                          </div>
                        </td>
                        <td>
                          <span class="edit-hide">{!!($cn['active']=='1')?'Hoạt động':'Dừng hoạt động'!!}</span>
                          <div class="form-group edit-show" style="margin-bottom: 0; display: none;">
                            <select class="form-control" name="chunha_{!!$cn['id'] or ''!!}_active">
                              <option value="1" @if($cn['active']=='1') selected="" @endif>Hoạt động</option>
                              <option value="0" @if($cn['active']=='0') selected="" @endif>Dừng hoạt động</option>
                            </select>
                          </div>
                        </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm edit-hide" onclick="$(this).parents('tr').find('.edit-hide').hide();$(this).parents('tr').find('.edit-show').show();">Sửa / đổi mật khẩu</button>
                            <button type="button" class="btn btn-primary btn-sm save-btn-element edit-show" onclick="$(this).parents('tr').find('.edit-hide').hide();$(this).parents('tr').find('.edit-show').show();" style="display: none;">Lưu</button>
                            <button type="button" class="btn btn-default btn-sm" onclick="if(confirm('Bạn muốn xóa?')){$(this).parents('tr').find('input,select').remove();$(this).parents('tr').find('.save-btn-element').trigger('click');$(this).parents('tr').remove();}">Xóa</button>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                      @endif
                      <tr class="nutthemchunha">
                        <td colspan="4">
                          <p style="text-align: center;margin-bottom: 0"><button type="button" class="btn btn-primary btn-sm add-btn-element" onclick="$(this).parents('tr').hide();$('.themchunha').show();"><i class="fa fa-plus"></i> Thêm chủ nhà</button></p>
                        </td>
                      </tr>
                      <tr class="themchunha" style="display: none;">
                        <td>
                          <input type="text" class="form-control" name="chunha_{!!time()!!}_id" value="{!!time()!!}" readonly="">
                        </td>
                        <td>
                          <div class="form-group" style="margin-bottom: 0">
                            <input type="text" class="form-control" name="chunha_{!!time()!!}_name" value="" placeholder="Tên chủ nhà">
                            <input type="hidden" class="form-control" name="id" value="{!!$id!!}">
                          </div>
                        </td>
                        <td>
                          <div class="form-group" style="margin-bottom: 0">
                            <input type="text" class="form-control" name="chunha_{!!time()!!}_password" value="" placeholder="Mật khẩu">
                          </div>
                        </td>
                        <td>
                          <div class="form-group" style="margin-bottom: 0">
                            <select class="form-control" name="chunha_{!!time()!!}_active">
                              <option value="1">Hoạt động</option>
                              <option value="0">Dừng hoạt động</option>
                            </select>
                          </div>
                        </td>
                        <td>
                          <div class="form-group" style="margin-bottom: 0">
                            <div class="btn-group">
                              <button type="button" class="btn btn-primary btn-sm save-btn-element">Thêm</button>
                              <button type="button" class="btn btn-default btn-sm" data-id="1" onclick="$(this).parents('tr').hide();$('.nutthemchunha').show();">Hủy</button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
              @endif
              {{-- <div class="tab-pane" id="tab_3">
              </div> --}}
            </div>
          </div>
        </div>
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

  <?php 
  $bookingDates = [];
  foreach ($postList['Đã lock'] as $b) {
    $bookingDates = array_merge($bookingDates, date_range($b['ngayden'],$b['ngayve']));
  }

  if(isset($allBooking)){
    $bookingDatesChild = [];
    // Nếu là villa cha, tìm tất cả booking của villa con và thêm vào $bookingDates
    if(empty($s['field5'])){
      $roomId = [];
      foreach($post as $p){
        if($p['field5'] == $s['id']){
          $roomId[] = $p['id'];
        }
      }
      if(!empty($roomId)){
        foreach($allBooking as $b){
          foreach($roomId as $r){
            if($b['post_id'] == $r){
              $bookingDatesChild = array_merge($bookingDatesChild, date_range($b['ngayden'],$b['ngayve']));
            }
          }
        }
      }
      //var_dump($bookingDatesChild); 
      $bookingDates = array_merge($bookingDates, $bookingDatesChild);
    // Nếu là villa con, tìm tất cả booking của villa cha và thêm vào $bookingDates
    }else{
      foreach($allBooking as $b){
        if($b['post_id'] == $s['field5']){
          $bookingDates = array_merge($bookingDates, date_range($b['ngayden'],$b['ngayve']));
        }
      }
    }
  }



  function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {
    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last)-86400;
    while( $current <= $last ) {
      $dates[] = date($output_format, $current);
      $current = strtotime($step, $current);
    }
    return $dates;
  }
  ?>

  var SelectedDates = {};
  @if(!empty($bookingDatesChild))
  @foreach($bookingDatesChild as $b)
  SelectedDates['{!!$b or ''!!}'] = '{!!$b or ''!!}';
  @endforeach
  @endif
  console.log(SelectedDates); 

  var ngay_dat_phong = [@foreach ($bookingDates as $item)"{!!str_replace(' ', '', $item)!!}"{!!($loop->last)?'':','!!}@endforeach];
  $ = jQuery;
  jQuery(document).ready(function( $ ) {
    var opt = { dateFormat: 'dd/mm/yy', minDate: 0, firstDay: 1 };
    if(ngay_dat_phong.length > 0) {
      opt.beforeShowDay = function(date) {
        var string = $.datepicker.formatDate('dd/mm/yy', date);
        var str_class = 'day-' + date.getDay();
        var Highlight = SelectedDates[string];
        if (Highlight) {
          console.log(Highlight,string); 
          str_class += ' conphong';
        }
        else {
          console.log('hihi',string); 
        }
        return [ ngay_dat_phong.indexOf(string) == -1, str_class ];
      }
    }
    $("#datepicker").datepicker(opt);

    var ngayle = [@foreach (explode(',',$site["cac-ngay-le-nam-nay"]["value"]) as $item)"{!!str_replace(' ', '', $item).'/'.date('Y')!!}"{!!($loop->last)?'':','!!}@endforeach];
      // tinhtien();

      $("#dt1x").datepicker({
        onSelect: function () {
          var dt2x = $('#dt2x');
          var startDate = $(this).datepicker('getDate');
          var minDate = $(this).datepicker('getDate');
          var dt2xDate = dt2x.datepicker('getDate');
          var dateDiff = (dt2xDate - minDate)/(86400 * 1000);

          startDate.setDate(startDate.getDate() + 30);
          if (dt2xDate == null || dateDiff < 0) {
            dt2x.datepicker('setDate', minDate);
          }
          else if (dateDiff > 30){
            dt2x.datepicker('setDate', startDate);
          }
          dt2x.datepicker('option', 'maxDate', startDate);
          minDate.setDate(minDate.getDate() + 1);
          dt2x.datepicker('option', 'minDate', minDate);
          dt2x.datepicker('setDate', minDate);
          dt2x.val(dt2x.val() + ' (1 đêm)');
          tinhtien();
        // xacnhanthongtin();
      },
      beforeShowDay: function(date) {
        var string = $.datepicker.formatDate('dd/mm/yy', date);
        var str_class = 'day-' + date.getDay();
        return [ ngay_dat_phong.indexOf(string) == -1, str_class ];
      }
    });

      $('#dt2x').datepicker({
        onSelect: function(a, b) {
          var diff = $('#dt1x').datepicker("getDate") - $(this).datepicker("getDate");
          diff = Math.floor(diff / (1000 * 60 * 60 * 24) * -1);
          var value = a + ' (' + diff + ' đêm)';
          $(this).val(value);
          tinhtien();
        // xacnhanthongtin();
      }
    });

      function tinhtien(){
        console.log('tinhtien');
        console.log('ngayle',ngayle);
        var startDate = $('#dt1x').datepicker("getDate");
        var stopDate = $('#dt2x').datepicker("getDate");
        stopDate.setDate(stopDate.getDate()-1);
        console.log('startDate',startDate,'stopDate',stopDate);
        var totalPrice = 0;
        var canhbao = false;
        var dates = getDates(startDate,stopDate);
        dates.forEach(function(date) {
        // console.log(date);
        dateNew = $.datepicker.formatDate('dd/mm/yy', date);
        if(date.getDay() == 6 || isInArray(ngayle,dateNew)){ //Nếu date là T7 hoặc ngày lễ tính giá price_ngayle
          totalPrice += {!!$s['price_ngayle'] or 0!!};
        }else if(date.getDay() == 0 || date.getDay() == 5){ //Nếu date là T6 hoặc Chủ Nhật tính giá price_cuoituan
          totalPrice += {!!$s['price_cuoituan'] or 0!!};
        }else{ //Nếu không thì tính giá ngày thường
          totalPrice += {!!$s['price'] or 0!!};
        }
        if(isInArray(ngay_dat_phong,dateNew)){
          canhbao = true;
        }
      });
        totalPrice = formatNumber(totalPrice) + 'đ';
        $('.tongconginput').val(totalPrice);
        if(canhbao){
          console.log('canhbao'); 
          $('.canhbao').show();
          $('.btn-lockphong').addClass('invalid');
        }else{
          $('.canhbao').hide();
          $('.btn-lockphong').removeClass('invalid');
        }
      }

      function getDates(startDate, endDate) {
        var dates = [],
        currentDate = startDate,
        addDays = function(days) {
          var date = new Date(this.valueOf());
          date.setDate(date.getDate() + days);
          return date;
        };
        while (currentDate <= endDate) {
          dates.push(currentDate);
          currentDate = addDays.call(currentDate, 1);
        }
        return dates;
      }

      function isInArray(array, value) {
        return (array.find(item => {return item == value}) || []).length > 0;
      }
      function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
      }


      $('.content-wrapper').on('click','.btn-lockphong:not(.invalid)', function(){
        if($('input[name="Ngày đến"]').val()==null||$('input[name="Ngày đến"]').val()==""||$('input[name="Ngày đến"]').val()==undefined){
          alert('Vui lòng điền ngày đến'); return;
        }else if($('input[name="Ngày về"]').val()==null||$('input[name="Ngày về"]').val()==""||$('input[name="Ngày về"]').val()==undefined){
          alert('Vui lòng điền ngày về'); return;
        }else if($('input[name="Họ và tên"]').val()==null||$('input[name="Họ và tên"]').val()==""||$('input[name="Họ và tên"]').val()==undefined){
          alert('Vui lòng điền Họ và tên'); return;
        }else if($('input[name="Số điện thoại"]').val()==null||$('input[name="Số điện thoại"]').val()==""||$('input[name="Số điện thoại"]').val()==undefined){
          alert('Vui lòng điền số điện thoại'); return;
        }else{
          $(this).text('Đang lưu...');
          var data = $(this).parents('form').serializeArray();
          var element = $(this).parents('form').attr('data-element');
          var urlBack = $(this).data('url-back');
          var active = $(this).data('active');
          $.ajax({dataType: "html",type: "POST",evalScripts: true,
            url: "{{action('AdminController@updateDataElement')}}",
            data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),active:active}),
            success: function(){
              alert('Lưu thành công!');
              if(urlBack===undefined){
                window.location.reload();
              }else{
                window.location.href = urlBack;
              }
            }
          });
        }
      });
    });
  </script>
  @endsection
