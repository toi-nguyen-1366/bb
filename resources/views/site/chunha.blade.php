<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel=stylesheet href=//cdn.ihappy.vn/adminlte/plugins/datatables/dataTables.bootstrap.css>
<script src=//cdn.ihappy.vn/adminlte/plugins/datepicker/bootstrap-datepicker.js></script>
<link rel=stylesheet href=//cdn.ihappy.vn/adminlte/plugins/datepicker/datepicker3.css>
@include('module.datepicker')

@extends('layouts.frontend')
@section('content')
@include('module.breadcumb')
<section class="sidebar-left sanp p-b-20 p-t-20 product-page" style="border-top: 1px rgba(52, 182, 96, 0.24) solid">
  <div class="container">
    <div class="heading heading-center m-b-20">
      <h1>{{-- {!!$title!!} --}}{!!$chunhalist[$chunha]['name']!!}</h1> 
    </div>
    <p class="text-center"><a href="/" class="btn" style="background: #34b660;border-radius: 20em;">Đăng xuất</a></p>

    <div class="row hidden">
      <div class="col-xs-6 text-right">
        <a href="#bangbooking" class="btn scroll-to" style="background: #34b660;border-radius: 20em;">Danh sách booking</a>
      </div>
      <div class="col-xs-6">
        <a href="#datphongnhanh" class="btn scroll-to" style="background: #34b660;border-radius: 20em;">Đặt phòng nhanh</a>
      </div>
    </div>
  </section>
  <section class="background-grey p-t-20 p-b-20">
    <div class="container">
      <div class="heading heading-center">
        <h2>Tình trạng phòng</h2>
      </div>
      <div id=bTinhtrangphong>
        <div class=mBottom20 id=datepicker></div>
        <div class="m-t-10"></div>
        <div class="" style="width: 100%;overflow: hidden;display: block;">
          <div class=fl style="margin-right: 20px">
            <i class=dateDadat></i> Đã đặt & xác nhận TT
          </div>
          <div class=fl>
            <i class=dateConphong></i> Còn phòng
          </div>
        </div>
      </div>
      <div class="m-t-10 hidden">
        <input type="text" class="form-control myInputTextField" id="myInputTextField" placeholder="Tìm kiếm nhanh bảng booking">
        <table class="table table-hover table-bordered datatable" id="bangbooking">
          <thead>
            <tr>
              <th class="hidden-xs">Mã Booking</th>
              <th class="hidden-xs">Thời gian booking</th>
              <th>Ngày ở</th>
              <th class="hidden-xs">Tổng tiền</th>
              <th>Thông tin khách</th>
              <th>Trạng thái</th>
              <th class="hidden-xs">Tùy chọn</th>
            </tr>
          </thead>
          <tbody>
            @foreach($postList as $pK=>$pL)
            @foreach ($pL as $p)
            <tr class="{!!Helper::getPathFromString($pK)!!}">
              <td class="hidden-xs">{!!$p['code']!!}</td>
              <td class="hidden-xs">{!!date('Y/m/d H:i', strtotime($p['created_at']))!!}</td>
              <td>{!!date('Y/m/d', strtotime($p['ngayden']))!!}<br>{!!date('Y/m/d', strtotime($p['ngayve']))!!}<br>({!! intval((strtotime($p['ngayve']) - strtotime($p['ngayden']))/86400); !!} đêm)</td>
              <td class="hidden-xs">{!!$p['tongtien']!!}</td>
              <td>
                <span class="visible-xs"><b>Mã Booking: </b>{!!$p['code']!!}</span>
                <span class="visible-xs"><b>Thời gian booking: </b>{!!date('d/m/Y H:i:s', strtotime($p['created_at']))!!}</span>
                <span class="visible-xs"><b>Tổng tiền: </b>{!!$p['tongtien']!!}</span>
                {!!$p['hoten']!!} - {!!$p['sdt1']!!} @if(!empty($p['sdt2']))- {!!$p['sdt2']!!}@endif<br>
                {!!$p['email']!!}<br>
                {!!$p['songuoilon']!!} người lớn @if(!empty($p['sotreem'])), {!!$p['sotreem']!!} trẻ em @endif<br>
                {!!$p['ghichu']!!}
              </td>
              <td class="hidden-xs">{!!$pK!!}</td>
              <td>
                <p class="visible-xs">{!!$pK!!}</p>
                @if(!empty($p['nguoitao']))
                <form data-element="bookingupdate">
                  @if(empty($p['deleted_at']))
                  @if($p['active']==0)
                  <button type="button" class="btn btn-default btn-sm active-btn-element" data-id="{!!$p['id']!!}">Đã TT</button>
                  @else
                  <button type="button" class="btn btn-default btn-sm deactive-btn-element" data-id="{!!$p['id']!!}">Hủy lock</button>
                  @endif
                  <button type="button" class="btn btn-default btn-sm delete-btn-element" data-id="{!!$p['id']!!}" data-url-back="/admin/adBookingVilla?p={!!$id!!}">Xóa</button>
                  @else
                  <button type="button" class="btn btn-default btn-sm restore-btn-element" data-id="{!!$p['id']!!}">Khôi phục</button>
                  @endif
                </form>
                @else
                {{-- <i>Phamtanvilla giữ quyền quản trị</i> --}}
                @endif
              </td>
            </tr>
            @endforeach
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="heading heading-center m-t-20 hidden" id="datphongnhanh">
        <h2>Đặt phòng ngay</h2>
      </div>
      <div class="timkiem">
        <form action="" method="get" class="form-inline form-dat-phong" data-element="booking">
          <?php date_default_timezone_set("Asia/Bangkok"); ?>
          <input type="hidden" name="Mã Booking" value="CN{!!time().Helper::generateRandomString(2)!!}">
          <input type="hidden" name="ID Nơi ở" value="{!!$s['id']!!}">
          <input type="hidden" name="Nơi ở" value="{!!$s['title'] or ''!!}">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="Ngày đến" class="form-control" id="dt1x" value="{!!(isset($dateFrom)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateFrom)),'l d/m/Y') : Helper::datevn(time(),'l d/m/Y')!!}" placeholder="Ngày đến">
                <i class="fa fa-calendar"></i>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="Ngày về" class="form-control" id="dt2x" value="{!!(isset($dateTo)) ? Helper::datevn(strtotime(str_replace('/', '-',$dateTo)),'l d/m/Y') : Helper::datevn(strtotime("+1 days"),'l d/m/Y').' (1 đêm)'!!}" placeholder="Ngày về">
                <i class="fa fa-calendar"></i>
              </div>
            </div>
          </div>
          <div class="canhbao" style="display: none;"><p style="font-weight: bold;color: #ef402b;font-style: italic; text-align: center;">Xin lỗi, ngày bạn chọn đã được book!<br>Vui lòng chọn một ngày khác hoặc liên hệ Hotline: <a href="tel:{!!$site["so-hotline"] or ''!!}"><span>{!!$site["so-hotline"] or ''!!}</span></a> - <a href="tel:{!!$site["so-hotline-2"] or ''!!}"><span>{!!$site["so-hotline-2"] or ''!!}</span></a></p></div>
          <div class="row hidden">
            @php($maxGuest = (empty($s['field1'])) ? 200 : $s['field1'])
            <div class="col-sm-6">
              <div class="form-group">
                <select name="Số lượng người lớn" id="songuoilon" class="form-control">
                  <option value="1" selected="">Số lượng người lớn</option>
                  @for ($i = 1; $i <= $maxGuest; $i++)
                  <option value="{!!$i!!}" @if(isset($numPeople) && $numPeople==$i) selected="" @endif>{!!$i!!} người lớn</option>
                  @endfor
                </select>
                <i class="fa fa-user"></i>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <select name="Số lượng trẻ em" id="sotreem" class="form-control">
                  <option value="0" selected="">Số lượng trẻ em (dưới 2 tuổi)</option>
                  @for ($i = 0; $i <= $maxGuest; $i++)
                  <option value="{!!$i!!}">{!!$i!!} trẻ em</option>
                  @endfor
                </select>
                <i class="fa fa-user"></i>
              </div>
            </div>
          </div>
          <div class="chi-tiet-bai-viet hidden">
            <table>
              <tbody>
                <tr>
                  <td>Chi phí ở</td>
                  <td>
                    <span class="chiphio">{!!Helper::money($s['price'])!!}</span>
                    <input type="hidden" name="Chi phí ở" class="chiphioinput" value="">
                  </td>
                </tr>
                <tr>
                  <th>Tổng cộng</th>
                  <td>
                    <b><span class="tongcong">{!!Helper::money($s['price'])!!}</span></b>
                    <input type="hidden" name="Tổng cộng" class="tongconginput" value="">
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <p class="m-b-0" style="font-size:13px;line-height: 1.4"><i><b>Chú ý:</b><br>
                      - Chi phí trên chưa bao gồm chi phí dọn dẹp<br>
                      - Quý khách vui lòng xem kỹ phần <a href="#banggia" class="scroll-to" style="font-size:13px;">Chi tiết giá</a></i>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <p class="m-b-0 text-center"><b>Nếu bạn có bất cứ thắc mắc nào, hãy liên hệ với chúng tôi qua số Hotline: </b><a href="tel:{!!$site["so-hotline"] or ''!!}"><i class="fa fa-phone"></i> <span>{!!$site["so-hotline"] or ''!!}</span></a> - <a href="tel:{!!$site["so-hotline-2"] or ''!!}"><i class="fa fa-phone"></i> <span>{!!$site["so-hotline-2"] or ''!!}</span></a></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="form-group hidden">
              <button type="button" class="btn btn-action btn-buoc-2 invalid" data-action="Khách hàng bấm Bước 2: Điền thông tin khách hàng trên trang {!!$s['title'] or ''!!}">Bước 2: Điền thông tin khách hàng <i class="fa fa-chevron-right"></i></button>
            </div>
          </div>
          <div class="dien-thong-tin hidden" {{-- style="display: none;" --}}>
            <h4 class="text-center">ĐIỀN THÔNG TIN KHÁCH HÀNG</h4>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="Họ và tên" id="hoten" class="form-control" value="Chủ nhà" placeholder="Họ và tên (trên CMND/Hộ chiếu)">
                  <i class="fa fa-user"></i>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="Số điện thoại" id="sdt1" class="form-control" value="0000000000" placeholder="Số điện thoại">
                  <i class="fa fa-phone"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="Email nếu có" id="email" class="form-control" value="" placeholder="Email nếu có">
                  <i class="fa fa-envelope"></i>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="Số điện thoại khác nếu có" id="sdt2" class="form-control" value="" placeholder="Số điện thoại khác nếu có">
                  <i class="fa fa-phone"></i>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <textarea type="text" name="Yêu cầu khác nếu có" id="yeucau" rows="2" class="form-control" placeholder="Yêu cầu khác nếu có"></textarea>
                  <i class="fa fa-pencil"></i>
                </div>
              </div>
            </div>
            <div class="form-group ">
              <button type="button" class="btn btn-action btn-buoc-3 invalid" data-action="Khách hàng bấm Bước 3: Xác nhận thông tin đặt phòng trên trang {!!$s['title'] or ''!!}">Bước 3: Xác nhận thông tin đặt phòng <i class="fa fa-chevron-right"></i></button>
            </div>
          </div>
          <div class="xac-nhan-thong-tin chi-tiet-bai-viet">
            <h4 class="text-center hidden">XÁC NHẬN THÔNG TIN ĐẶT PHÒNG</h4>
            <table class="table table-striped hidden">
              <tbody>
                <tr>
                  <td colspan="2"><b>{!!$s['title'] or ''!!}</b></td>
                </tr>
                <tr>
                  <td>Người tạo booking</td>
                  <td>
                    {!!$chunhalist[$chunha]['name']!!} - {!!$title!!}
                    <input type="hidden" name="Người tạo booking" value="{!!$chunhalist[$chunha]['name']!!} - {!!$title!!}">
                  </td>
                </tr>
                <tr>
                  <td>Thời gian</td>
                  <td><span class="thoigian">-</span></td>
                </tr>
                <tr class="hidden">
                  <td>Số khách</td>
                  <td><span class="sokhach">-</span></td>
                </tr>
                <tr class="hidden">
                  <td>Thông tin khách hàng</td>
                  <td>
                    <span class="thongtinkhachhang">-</span>
                  </td>
                </tr>
                <tr class="hidden">
                  <td>Chi phí ở</td>
                  <td><span class="chiphio">{!!Helper::money($s['price'])!!}</span></td>
                </tr>
                <tr class="hidden">
                  <th>Tổng cộng</th>
                  <td><b><span class="tongcong">{!!Helper::money($s['price'])!!}</span></b></td>
                </tr>
                <tr class="hidden">
                  <td>Chính sách Hủy/ Hoàn trả/ Thay đổi</td>
                  <td>
                    <div class="mdtPriceBlack" style="color: #40ae64">
                      <p><a href="{!!$post[7]['link']!!}" target="_blank">Xem chi tiết ở đây</a></p>
                    </div>
                  </td>
                </tr>
                <tr class="hidden">
                  <td colspan="2">
                    <p class="m-b-0" style="font-size:13px;line-height: 1.4"><i><b>Chú ý:</b><br>
                      - Chi phí trên chưa bao gồm chi phí dọn dẹp<br>
                      - Quý khách vui lòng xem kỹ phần <a href="#banggia" class="scroll-to" style="font-size:13px;">Chi tiết giá</a></i>
                    </p>
                  </td>
                </tr>
                <tr class="hidden">
                  <td colspan="2">
                    <p class="m-b-0 text-center"><b>Nếu bạn có bất cứ thắc mắc nào, hãy liên hệ với chúng tôi qua số Hotline: </b><a href="tel:{!!$site["so-hotline"] or ''!!}"><i class="fa fa-phone"></i> <span>{!!$site["so-hotline"] or ''!!}</span></a> - <a href="tel:{!!$site["so-hotline-2"] or ''!!}"><i class="fa fa-phone"></i> <span>{!!$site["so-hotline-2"] or ''!!}</span></a></p>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="form-group text-center">
              <input type="hidden" name="mail-to" value="{!!$site['dia-chi-email']!!}">
              <input type="hidden" name="subject" value="[Chủ nhà] Đặt phòng Phamtanvilla #CN{!!time().Helper::generateRandomString(2)!!}">
              <button type="button" class="btn btn-send-mail btn-dat-ngay invalid btn-action" data-action="Khách hàng bấm nút Đặt ngay trên trang {!!$s['title'] or ''!!}"> <i class="fa fa-check"></i> Lock phòng ngay</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script>
    <?php 
    $bookingDates = [];
    foreach ($booking as $b) {
      $bookingDates = array_merge($bookingDates, date_range($b['ngayden'],$b['ngayve']));
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

    var ngay_dat_phong = [@foreach ($bookingDates as $item)"{!!str_replace(' ', '', $item)!!}"{!!($loop->last)?'':','!!}@endforeach];
    $ = jQuery;
    jQuery(document).ready(function( $ ) {
      var opt = { dateFormat: 'dd/mm/yy', minDate: null, firstDay: 1 };
      if(ngay_dat_phong.length > 0) {
        opt.beforeShowDay = function(date) {
          var string = $.datepicker.formatDate('dd/mm/yy', date);
          var str_class = 'day-' + date.getDay();
          return [ ngay_dat_phong.indexOf(string) == -1, str_class ];
        }
      }
      $("#datepicker").datepicker(opt);

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
          xacnhanthongtin();
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
          xacnhanthongtin();
        }
      });

      $('.form-dat-phong').on('change', '#songuoilon, #sotreem', function(event) {
        event.preventDefault();
        tinhtien();
        xacnhanthongtin();
      });
      $('.form-dat-phong').on('keyup', '#hoten, #sdt1, #sdt2, #email, #yeucau', function(event) {
        event.preventDefault();
        xacnhanthongtin();
      });

      var ngayle = [@foreach (explode(',',$site["cac-ngay-le-nam-nay"]) as $item)"{!!str_replace(' ', '', $item).'/'.date('Y')!!}"{!!($loop->last)?'':','!!}@endforeach];

      tinhtien();
      xacnhanthongtin();

      $('.btn-buoc-2').on('click', function(event) {
        event.preventDefault();
        if(!$(this).hasClass('invalid')){
          $(this).hide();
          $('.dien-thong-tin').slideToggle();
          xacnhanthongtin();
        }
      });
      $('.btn-buoc-3').on('click', function(event) {
        event.preventDefault();
        if(!$(this).hasClass('invalid')){
          $(this).hide();
          $('.xac-nhan-thong-tin').slideToggle();
          xacnhanthongtin();
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
          totalPrice += {!!$s['price_ngayle']!!};
        }else if(date.getDay() == 0 || date.getDay() == 5){ //Nếu date là T6 hoặc Chủ Nhật tính giá price_cuoituan
          totalPrice += {!!$s['price_cuoituan']!!};
        }else{ //Nếu không thì tính giá ngày thường
          totalPrice += {!!$s['price']!!};
        }
        if(isInArray(ngay_dat_phong,dateNew)){
          canhbao = true;
        }
      });
        totalPrice = formatNumber(totalPrice) + 'đ';
        $('.chiphio').text(totalPrice);
        $('.chiphioinput').val(totalPrice);
        $('.tongcong').text(totalPrice);
        $('.tongconginput').val(totalPrice);
        if(canhbao){
          console.log('canhbao'); 
          $('.canhbao').show();
          $('.btn-buoc-2').addClass('invalid');
          $('.btn-buoc-3').addClass('invalid');
          $('.btn-dat-ngay').addClass('invalid');
        }else{
          $('.canhbao').hide();
          $('.btn-buoc-2').removeClass('invalid');
          $('.btn-buoc-3').removeClass('invalid');
          $('.btn-dat-ngay').removeClass('invalid');
        }
      }

      function xacnhanthongtin(){
        console.log('xacnhanthongtin');
        if($('#songuoilon').val()=='' || $('#songuoilon').val()==null || $('#songuoilon').val()==undefined){
          $('.btn-buoc-2').addClass('invalid');
        }
        if($('#hoten').val()=='' || $('#hoten').val()==null || $('#hoten').val()==undefined || $('#sdt1').val()=='' || $('#sdt1').val()==null || $('#sdt1').val()==undefined || $('.canhbao').is(":visible")){
          $('.btn-buoc-3').addClass('invalid');
          $('.btn-dat-ngay').addClass('invalid');
        }else{
          console.log('info ok'); 
          $('.btn-buoc-3').removeClass('invalid');
          $('.btn-dat-ngay').removeClass('invalid');
        }

        $('.thoigian').text($('#dt1x').val() + ' => ' + $('#dt2x').val());
        if($('#sotreem').val() != '' && $('#sotreem').val() != null && $('#sotreem').val() != undefined){
          $('.sokhach').text($('#songuoilon').val() + ' người lớn, ' + $('#sotreem').val() + '  trẻ em dưới 2 tuổi');
        }else{
          $('.sokhach').text($('#songuoilon').val() + ' người lớn');
        }
        $('.thongtinkhachhang').html($('#hoten').val() + ' - ' + $('#sdt1').val() + ' ' + $('#sdt2').val() + '<br>' + $('#email').val() + '<br>' + $('#yeucau').val());
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

    });
  </script>
  <script src=//cdn.ihappy.vn/adminlte/plugins/datatables/jquery.dataTables.min.js></script>
  <script src=//cdn.ihappy.vn/adminlte/plugins/datatables/dataTables.bootstrap.min.js></script>
  <script type="text/javascript">
    $(document).ready(function(){

    $('.datepicker').datepicker({format: 'yyyy-mm-dd',autoclose: true});

      
      $('.datatable').DataTable({
        "paging": true,
        "pageLength": 10,
        "lengthChange": false,
        "lengthMenu": [[10, 20, -1], [10, 20, "Tất cả"]],
        "searching": true,
        "ordering": true,
        "order": [[ 2, "desc" ]],
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
      })

      $('.active-btn-element').on('click', function(){
        if(confirm('Bạn đồng ý hiện/duyệt?')){
          var element = $(this).parents('form').data('element');
          var id = $(this).data('id');
          var data = [{'name':'id', 'value':id}];
          $.ajax({dataType: "html",type: "POST",evalScripts: true,
            url: "{{action('SiteController@updateDataElement')}}",
            data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),active:1}),
            success: function(){
              alert('Duyệt thành công!');
              window.location.reload();
            }
          });
        }
      });

      $('.deactive-btn-element').on('click', function(){
        if(confirm('Bạn đồng ý ẩn/bỏ duyệt?')){
          var element = $(this).parents('form').data('element');
          var id = $(this).data('id');
          var data = [{'name':'id', 'value':id}];
          $.ajax({dataType: "html",type: "POST",evalScripts: true,
            url: "{{action('SiteController@updateDataElement')}}",
            data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),active:0}),
            success: function(){
              alert('Bỏ duyệt thành công!');
              window.location.reload();
            }
          });
        }
      });

      $('.delete-btn-element').on('click', function(){
        if(confirm('Bạn muốn xóa?')){
          var element = $(this).parents('form').data('element');
          var id = $(this).data('id');
          var urlBack = $(this).data('url-back');
          var data = [{'name':'id', 'value':id}];
          $.ajax({dataType: "html",type: "POST",evalScripts: true,
            url: "{{action('SiteController@updateDataElement')}}",
            data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),delete:true}),
            success: function(){
              alert('Xóa thành công!');
              window.location.reload();
            }
          });
        }
      });

      $('.restore-btn-element').on('click', function(){
        if(confirm('Bạn muốn khôi phục?')){
          var element = $(this).parents('form').data('element');
          var id = $(this).data('id');
          var data = [{'name':'id', 'value':id}];
          $.ajax({dataType: "html",type: "POST",evalScripts: true,
            url: "{{action('SiteController@updateDataElement')}}",
            data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),restore:true}),
            success: function(){
              alert('Khôi phục thành công!');
              window.location.reload();
            }
          });
        }
      });


    });
  </script> 
  @endsection