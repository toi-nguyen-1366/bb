<div class="sidebar col-md-3 m-t-0 product-sidebar">
  <div class="widget widget-newsletter">
    <h4 class="tieu-de-danh-muc widget-title m-t-0 m-b-10">Danh mục sản phẩm</h4>
    <div class="list-group m-t-0">
      @foreach($category as $c) @if($c['parent']==2)
      <a href="{!!$c['link']!!}" class="list-group-item {!!((isset($s['parent']) && $c['id']==$s['id']) || (isset($s['category']) && in_array($c['id'],$s['category'])))?'active':''!!}" style="font-weight: bold;">{!!$c['title']!!}</a>
      @foreach($category as $c2) @if($c2['parent']==$c['id'])
      @if($c2['hasChild'])
      <a href="javascript:void(0)" class="list-group-item catParent parent{!!$c2['id']!!} {!!((isset($s['parent']) && $c2['id']==$s['id']) || (isset($s['category']) && in_array($c2['id'],$s['category'])))?'active':''!!}" data-id="{!!$c2['id']!!}">{!!$c2['title']!!}<i class="fa fa-plus"></i><i class="fa fa-minus"></i></a>
      @foreach($category as $c3) @if($c3['parent']==$c2['id'])
      <a href="{!!$c3['link']!!}" class="list-group-item p-l-20 catChild child{!!$c2['id']!!} {!!((isset($s['parent']) && $c3['id']==$s['id']) || (isset($s['category']) && in_array($c3['id'],$s['category'])))?'active':''!!}" data-parent="{!!$c2['id']!!}" style="display: none;">{!!$c3['title']!!}</a>
      @endif @endforeach
      @else
      <a href="{!!$c2['link']!!}" class="list-group-item {!!((isset($s['parent']) && $c2['id']==$s['id']) || (isset($s['category']) && in_array($c2['id'],$s['category'])))?'active':''!!}">{!!$c2['title']!!}</a>
      @endif @endif @endforeach
      @endif @endforeach
    </div>
    {{-- <div class="list-group m-t-20 box-thong-tin-sidebar">
      <a href="#" class="list-group-item nohover p-10" style="background: #fff;">
        <h4>Danh sách đại lý phân phối</h4>
        <p>
          <b>Showroom Big C Thăng Long</b><br>
          Điện thoại: 0837106609 <br>
          Địa chỉ: Phố Thái Học phường Thái Học thị xã Chí Linh , tỉnh Hải Dương
        </p>
        <p>
          <b>Showroom Big C Thăng Long</b><br>
          Điện thoại: 0837106609 <br>
          Địa chỉ: Phố Thái Học phường Thái Học thị xã Chí Linh , tỉnh Hải Dương
        </p>
        <p>
          <b>Showroom Big C Thăng Long</b><br>
          Điện thoại: 0837106609 <br>
          Địa chỉ: Phố Thái Học phường Thái Học thị xã Chí Linh , tỉnh Hải Dương
        </p>
      </a>
    </div> --}}
    <div class="list-group m-t-10 box-thong-tin-sidebar">
      <div class="list-group-item nohover p-10" style="background: #eee;">
        <h4>Hỗ trợ mua hàng</h4>
        {!!$site["doan-thong-tin-lien-he"]!!}
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('.list-group').on('click', '.catParent', function(event) {
      event.preventDefault();
      var id = $(this).data('id');
      $('.child'+id).toggle();
      $(this).find('i.fa-plus').toggle();
      $(this).find('i.fa-minus').toggle();
    });
    $('.list-group-item').each(function(index, el) {
      if($(this).hasClass('active')){
        var parent = $(this).data('parent');
        $('.parent'+parent).trigger('click');
      }
    });
  });
</script>