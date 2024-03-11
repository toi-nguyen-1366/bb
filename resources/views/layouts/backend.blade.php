@php($role = explode(',', Auth::user()->role))
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <title>{{WEB_MAKER_SOFTWARE}}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name=viewport>
  <link rel=stylesheet href=//cdn.ihappy.vn/adminlte/bootstrap/css/bootstrap.min.css>
  <link rel=stylesheet href=//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css>
  {{-- <link rel=stylesheet href=//cdn.ihappy.vn/adminlte/plugins/ionicons/ionicons.min.css> --}}
  <link rel=stylesheet href=//cdn.ihappy.vn/adminlte/dist/css/AdminLTE.min.css>
  <link rel=stylesheet href=//cdn.ihappy.vn/adminlte/dist/css/skins/skin-green.min.css>
  <!--[if lt IE 9]>
  <script src=https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js></script>
  <script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script>
<![endif]-->
<script src=//cdn.ihappy.vn/adminlte/plugins/jQuery/jquery-2.2.3.min.js></script>
<script src=//cdn.ihappy.vn/adminlte/bootstrap/js/bootstrap.min.js></script>
<script src=//cdn.ihappy.vn/adminlte/dist/js/app.min.js></script>

<script src=//cdn.ihappy.vn/adminlte/jquery.ui.widget.js></script>
<script src=//cdn.ihappy.vn/adminlte/jquery.iframe-transport.js></script>
{{-- <script src=//cdn.ihappy.vn/adminlte/jquery.fileupload.js></script> --}}

<script src=//cdn.ihappy.vn/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js></script>
<link rel=stylesheet href=//cdn.ihappy.vn/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css>

{{-- <script src=//cdn.ihappy.vn/adminlte/plugins/ckeditor/ckeditor.js></script> --}}
{{-- <script src=//cdn.ihappy.vn/adminlte/plugins/ckeditor/adapters/jquery.js></script> --}}
<script src=//cdn.ihappy.vn/adminlte/plugins/tinymce/tinymce.min.js></script>

<script src=//cdn.ihappy.vn/adminlte/plugins/datatables/jquery.dataTables.min.js></script>
<script src=//cdn.ihappy.vn/adminlte/plugins/datatables/dataTables.bootstrap.min.js></script>
<link rel=stylesheet href=//cdn.ihappy.vn/adminlte/plugins/datatables/dataTables.bootstrap.css>

{{-- <script src=//cdn.ihappy.vn/adminlte/bootstrap-multiselect.js></script> --}}
<script src=/public/frontend/js/bootstrap-multiselect.js?1></script>
<link rel=stylesheet href=//cdn.ihappy.vn/adminlte/bootstrap-multiselect.css>

<script src=//cdn.ihappy.vn/adminlte/plugins/datepicker/bootstrap-datepicker.js></script>
<link rel=stylesheet href=//cdn.ihappy.vn/adminlte/plugins/datepicker/datepicker3.css>

<script src="//cdn.ihappy.vn/js/jquery.observe_field.js" type="text/javascript"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<link rel=stylesheet href=/backend/style.css?<?php echo time(); ?>>
</head>
<body class="hold-transition skin-green sidebar-mini">
  <div class=wrapper>
    <header class=main-header>
      <a href=/ class=logo><span class=logo-lg>{{WEB_MAKER_SOFTWARE}}</span></a>
      <nav class="navbar navbar-static-top visible-xs">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> MENU CHỨC NĂNG</a>
      </nav>
    </header>
    <aside class=main-sidebar>
      <section class=sidebar>
        <ul class=sidebar-menu>
          <?php 
          $menu = ADMIN_MENU;
          $role = explode(',', Auth::user()->role);
          $roletext = Auth::user()->role;
          //if(Auth::user()->role == 'admin'){ $menu = ADMIN_MENU; }
          //elseif(Auth::user()->role == 'checkphong'){ $menu = CHECKPHONG_MENU; }
          //elseif(Auth::user()->role == 'checkvalockphong'){ $menu = CHECKPHONG_MENU; }
          //elseif(Auth::user()->role == 'voucher'){ $menu = VOUCHER_MENU; }
          //else{ $menu = CHECKPHONG_MENU; }
          ?>
          @foreach(unserialize($menu) as $mK => $m)
          <li class=header>{{$mK}}</li>
          @foreach($m as $mK2 => $m2)
          @if(in_array('admin', $role) || strpos($roletext,$m2[1]) !== false)
          <li class={{((Request::is('admin/'.$mK2)) ? 'active' : '')}}>
            <a href="/admin/{{$mK2}}"><i class="fa fa-minus"></i> <span>{{$m2[0]}}</span></a>
          </li>
          @endif
          @endforeach
          @endforeach
          <li class=header>TÀI KHOẢN</li>
          <li class={{((Request::is('changePassword')) ? 'active' : '')}}>
            <a href="/changePassword"><i class="fa fa-key"></i> <span>Đổi mật khẩu</span></a>
          </li>
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>
            <span>Đăng xuất</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </section>
  </aside>
  <div class=content-wrapper>
    @yield('content')
  </div>
  {{-- <footer class=main-footer>
    <strong>Website được thiết kế bởi <a href={{WEB_MAKER_URL}} target=_blank>{{WEB_MAKER_NAME}}</a></strong> sử dụng phần mềm {{WEB_MAKER_SOFTWARE}} - Điện thoại/Zalo hỗ trợ: <a href=tel:{{WEB_MAKER_PHONE_URL}} target=_blank>{{WEB_MAKER_PHONE}}</a> - Email: <a href=mailto:{{WEB_MAKER_EMAIL}} target=_blank>{{WEB_MAKER_EMAIL}}</a>
  </footer> --}}
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="upload-modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <iframe src="" style="width: 100%;height: 700px"></iframe>
    </div>
  </div>
</div>
{{-- <script src=//cdn.ihappy.vn/adminlte/dist/js/demo.js></script> --}}
<script type="text/javascript">
  $(document).ready(function(){
    $('.textarea').wysihtml5({
      toolbar:{
        'font-styles': false,
        'blockquote':false,
        'image':false,
        'link':false,
        'fa': true,
      }
    });
    $('.multiselect').multiselect();
    $('.datepicker').datepicker({format: 'yyyy-mm-dd',autoclose: true});

    tinymce.init({
      selector: ".cktextarea",theme: "modern",height: 500,language:'vi_VN',
      plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
      "table contextmenu directionality emoticons paste textcolor responsivefilemanager code toc"
      ],
      toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | formatselect fontselect fontsizeselect | removeformat",
      toolbar2: "| responsivefilemanager | link unlink | table | forecolor backcolor | media toc charmap | code ",
      image_advtab: true ,
      table_default_styles: {width: '100%'},
      external_filemanager_path:"/filemanager/",
      filemanager_title:"Quản lý file" ,
      external_plugins: { "filemanager" : "/filemanager/plugin.min.js"},
      content_style: 'img {max-width: 100%;margin: 10px 0;border: 1px #ccc solid;}'
    });

    $('.file-btn').click(function(){
      var id = $(this).parents('.form-group').find("input").attr('id');
      $('#upload-modal').find('iframe').attr('src','/filemanager/dialog.php?type=2&field_id='+id);
      $('#upload-modal').modal('show');
      $(this).parents('.form-group').find("input").observe_field(1, function() {
       $(this).parents('.form-group').find("img").attr('src',this.value).show();
       $(this).parents('.form-group').find("video").html('<source src="'+this.value+'" type="video/mp4"></source>');
     });
    });

    if(isMobile()){
     $("table").wrap("<div class='table-responsive'></div>");
   }

   $( ".sapxepduochet" ).sortable();

   $('.empty-btn').click(function(){
    if(confirm('Bạn đồng ý xóa?')){
     $(this).parents('.form-group').find("input").val('');
     $(this).parents('.form-group').find("img").attr('src','');
     $(this).parents('.form-group').remove();
     // $('.save-btn-post').trigger('click');

     if($('input[name="title"]').val()==null||$('input[name="title"]').val()==""||$('input[name="title"]').val()==undefined){
       alert('Vui lòng điền tiêu đề'); return;
     }else if($('select[name="category"]').length && $('select[name="category"]').val()==null){
       alert('Vui lòng chọn danh mục'); return;
     }else{
       var data = $('#oceanform').serializeArray();
       if (tinyMCE.activeEditor != null){
         if(data[search("field15", data)]){data[search("field15", data)].value = tinyMCE.get('field15').getContent({format : 'raw'})};
         if(data[search("field16", data)]){data[search("field16", data)].value = tinyMCE.get('field16').getContent({format : 'raw'})};
         if(data[search("field17", data)]){data[search("field17", data)].value = tinyMCE.get('field17').getContent({format : 'raw'})};
         if(data[search("field18", data)]){data[search("field18", data)].value = tinyMCE.get('field18').getContent({format : 'raw'})};
         if(data[search("field19", data)]){data[search("field19", data)].value = tinyMCE.get('field19').getContent({format : 'raw'})};
         if(data[search("spec", data)]){data[search("spec", data)].value = tinyMCE.get('spec').getContent({format : 'raw'})};
         if(data[search("desc_full", data)]){data[search("desc_full", data)].value = tinyMCE.get('desc_full').getContent({format : 'raw'})};
       }
       var element = $('#oceanform').attr('data-element');
       // var urlBack = $(this).data('url-back');
       // var active = $(this).data('active');
       $.ajax({dataType: "html",type: "POST",evalScripts: true,
         url: "{{action('AdminController@updateDataElement')}}",
         data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),active:1}),
         success: function(){
           // alert('Lưu thành công!');
           // if(urlBack===undefined){
             // window.location.reload();
           // }else{
             // window.location.href = urlBack;
           // }
         }
       });
     }
   }
 });


   $('.content-wrapper').on('click','.save-btn', function(){
    var button = $(this);
    button.text('Đang lưu...');
    var data = $(this).parents('form').serializeArray();
    $.ajax({dataType: "html",type: "POST",evalScripts: true,
      url: "{{action('AdminController@updateDataFrontEnd')}}",
      data: ({"_token": "{{ csrf_token() }}",json_data:JSON.stringify(data)}),
      success: function(){
        button.html('<i class="fa fa-check"></i> Đã lưu thành công!').addClass('btn-warning').removeClass('btn-primary');
            // alert('Lưu thành công!');
            window.location.reload();
          }
        });
  });

   $('.content-wrapper').on('click','.save-btn-element', function(){
    var button = $(this);
    button.text('Đang lưu...');
    var data = $(this).parents('form').serializeArray();
    var element = $(this).parents('form').data('element');
    $.ajax({dataType: "html",type: "POST",evalScripts: true,
      url: "{{action('AdminController@updateDataElement')}}",
      data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data)}),
      success: function(){
        button.html('<i class="fa fa-check"></i> Đã lưu thành công!').addClass('btn-warning').removeClass('btn-primary');
            // alert('Lưu thành công!');
            window.location.reload();
          }
        });
  });

   $('.content-wrapper').on('click','.edit-btn-element', function(){
     var element = $(this).parents('form').data('element');
     var id = $(this).data('id');
     var data = $(this).parents('form').serializeArray();
     $.ajax({dataType: "html",type: "POST",evalScripts: true,
       url: "{{action('AdminController@updateDataElement')}}",
       data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data)}),
       success: function(){
       },
       error: function (xhr, ajaxOptions, thrownError) {
         alert(thrownError);
       }
     });
   });
   

   $('.content-wrapper').on('click','.active-btn-element', function(){
    if(confirm('Bạn đồng ý duyệt?')){
      var element = $(this).parents('form').data('element');
      var id = $(this).data('id');
      var data = [{'name':'id', 'value':id}];
      $.ajax({dataType: "html",type: "POST",evalScripts: true,
        url: "{{action('AdminController@updateDataElement')}}",
        data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),active:1 @if(isset($s) && isset($s['id'])) ,post_id: '{!!$s['id']!!}' @endif }),
        success: function(message){
          if(message!='' && message!='1'){
            alert(message);
          }else{
            alert('Duyệt thành công!');
          }
          window.location.reload();
        }
      });
    }
  });

   $('.content-wrapper').on('click','.deactive-btn-element', function(){
    if(confirm('Bạn đồng ý bỏ duyệt?')){
      var element = $(this).parents('form').data('element');
      var id = $(this).data('id');
      var data = [{'name':'id', 'value':id}];
      $.ajax({dataType: "html",type: "POST",evalScripts: true,
        url: "{{action('AdminController@updateDataElement')}}",
        data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),active:0}),
        success: function(){
          alert('Bỏ duyệt thành công!');
          window.location.reload();
        }
      });
    }
  });

   $('.content-wrapper').on('click','.delete-btn-element', function(){
    if(confirm('Bạn muốn xóa?')){
      var element = $(this).parents('form').data('element');
      var id = $(this).data('id');
      var urlBack = $(this).data('url-back');
      var data = [{'name':'id', 'value':id}];
      $.ajax({dataType: "html",type: "POST",evalScripts: true,
        url: "{{action('AdminController@updateDataElement')}}",
        data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),delete:true}),
        success: function(){
          alert('Xóa thành công!.');
          if(urlBack===undefined){
            window.location = window.location.href.split("?")[0];
          }else{
            window.location.href = urlBack; 
          }
        }
      });
    }
  });

   $('.content-wrapper').on('click','.restore-btn-element', function(){
    if(confirm('Bạn muốn khôi phục?')){
      var element = $(this).parents('form').data('element');
      var id = $(this).data('id');
      var data = [{'name':'id', 'value':id}];
      $.ajax({dataType: "html",type: "POST",evalScripts: true,
        url: "{{action('AdminController@updateDataElement')}}",
        data: ({"_token": "{{ csrf_token() }}",element:element, json_data:JSON.stringify(data),restore:true}),
        success: function(){
          alert('Khôi phục thành công!');
          window.location.reload();
        }
      });
    }
  });

   $('.content-wrapper').on('click','.save-btn-post', function(){
    if($('input[name="title"]').val()==null||$('input[name="title"]').val()==""||$('input[name="title"]').val()==undefined){
      alert('Vui lòng điền tiêu đề'); return;
    }else if($('select[name="category"]').length && $('select[name="category"]').val()==null){
      alert('Vui lòng chọn danh mục'); return;
    }else{
      $(this).text('Đang lưu...');
      var data = $(this).parents('form').serializeArray();
      if (tinyMCE.activeEditor != null){
        if(data[search("field15", data)]){data[search("field15", data)].value = tinyMCE.get('field15').getContent({format : 'raw'})};
        if(data[search("field16", data)]){data[search("field16", data)].value = tinyMCE.get('field16').getContent({format : 'raw'})};
        if(data[search("field17", data)]){data[search("field17", data)].value = tinyMCE.get('field17').getContent({format : 'raw'})};
        if(data[search("field18", data)]){data[search("field18", data)].value = tinyMCE.get('field18').getContent({format : 'raw'})};
        if(data[search("field19", data)]){data[search("field19", data)].value = tinyMCE.get('field19').getContent({format : 'raw'})};
        if(data[search("spec", data)]){data[search("spec", data)].value = tinyMCE.get('spec').getContent({format : 'raw'})};
        if(data[search("desc_full", data)]){data[search("desc_full", data)].value = tinyMCE.get('desc_full').getContent({format : 'raw'})};
        if(data[search("field23", data)]){data[search("field23", data)].value = tinyMCE.get('field23').getContent({format : 'raw'})};
        if(data[search("field25", data)]){data[search("field25", data)].value = tinyMCE.get('field25').getContent({format : 'raw'})};
        if(data[search("field27", data)]){data[search("field27", data)].value = tinyMCE.get('field27').getContent({format : 'raw'})};
        if(data[search("field29", data)]){data[search("field29", data)].value = tinyMCE.get('field29').getContent({format : 'raw'})};
        if(data[search("field31", data)]){data[search("field31", data)].value = tinyMCE.get('field31').getContent({format : 'raw'})};
        if(data[search("field33", data)]){data[search("field33", data)].value = tinyMCE.get('field33').getContent({format : 'raw'})};
        if(data[search("field35", data)]){data[search("field35", data)].value = tinyMCE.get('field35').getContent({format : 'raw'})};
        if(data[search("field37", data)]){data[search("field37", data)].value = tinyMCE.get('field37').getContent({format : 'raw'})};
        if(data[search("field39", data)]){data[search("field39", data)].value = tinyMCE.get('field39').getContent({format : 'raw'})};
        if(data[search("ghichugia", data)]){data[search("ghichugia", data)].value = tinyMCE.get('ghichugia').getContent({format : 'raw'})};
        if(data[search("phuphikhac", data)]){data[search("phuphikhac", data)].value = tinyMCE.get('phuphikhac').getContent({format : 'raw'})};

      }
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

   $('.content-wrapper').on('click','.seo-checker-btn', function(){
     var mainKeyword = $('input[name="main_keyword"]').val().toLowerCase();
     console.log('mainKeyword',mainKeyword); 
     if(mainKeyword==null||mainKeyword==""||mainKeyword==undefined){
       $('.diem-seo .kiem-tra').show();
       alert('Vui lòng điền từ khóa chính!'); return;
     }
     var data = $(this).parents('form').serializeArray();

     var title = data[search("title", data)].value;
     console.log('title',title); 
     var desc = data[search("desc", data)].value;
     console.log('desc',desc); 
     var descFull = '';
     if(data[search("desc_full", data)]){descFull += tinyMCE.get('desc_full').getContent();}
     // if(data[search("field1", data)]){descFull += tinyMCE.get('field1').getContent();}
     // if(data[search("field2", data)]){descFull += tinyMCE.get('field2').getContent();}
     // if(data[search("field3", data)]){descFull += tinyMCE.get('field3').getContent();}
     // if(data[search("field4", data)]){descFull += tinyMCE.get('field4').getContent();}
     // if(data[search("field5", data)]){descFull += tinyMCE.get('field5').getContent();}
     // if(data[search("field6", data)]){descFull += tinyMCE.get('field6').getContent();}
     // if(data[search("field7", data)]){descFull += tinyMCE.get('field7').getContent();}
     // if(data[search("field8", data)]){descFull += tinyMCE.get('field8').getContent();}
     // if(data[search("field9", data)]){descFull += tinyMCE.get('field9').getContent();}
     console.log('descFull',descFull); 
     var keyword = data[search("keyword", data)].value;
     console.log('keyword',keyword); 

     $('.seo-check').removeClass('active');
     var seoPoint = 0;
     $('.seo-check-1').addClass('active');
     seoPoint += 1;
     if (title.toLowerCase().indexOf(mainKeyword) >= 0){
       $('.seo-check-2').addClass('active');
       seoPoint += 1;
     }
     if (desc.toLowerCase().indexOf(mainKeyword) >= 0){
       $('.seo-check-3').addClass('active');
       seoPoint += 1;
     }
     descFull2 = $('<div/>').html(descFull).text();
     if (descFull2.toLowerCase().indexOf(mainKeyword) >= 0){
       $('.seo-check-4').addClass('active');
       seoPoint += 1;
     }
     if (descFull.toLowerCase().trim().split(/\s+/gi).length >= 100){
       $('.seo-check-5').addClass('active');
       seoPoint += 1;
     }
     if (descFull.toLowerCase().indexOf('<h2') >= 0){
       $('.seo-check-6').addClass('active');
       seoPoint += 1;
     }
     if (descFull.toLowerCase().indexOf('<img') >= 0){
       $('.seo-check-7').addClass('active');
       seoPoint += 1;
     }
     if (descFull.toLowerCase().indexOf('href=') >= 0){
       $('.seo-check-8').addClass('active');
       seoPoint += 1;
     }
     if (keyword!=null && keyword!="" && keyword!=undefined && keyword.toLowerCase().indexOf(mainKeyword) >= 0){
       $('.seo-check-9').addClass('active');
       seoPoint += 1;
     }
     $('.diem-seo .kiem-tra').text(seoPoint+'/9');
     $('#seo_point').val(seoPoint);
     $('.diem-seo .label').hide();
     if(seoPoint > 6){
       $('.diem-seo .label-info').show();
     }
     else if(seoPoint > 4){
       $('.diem-seo .label-warning').show();
     }
     else if(seoPoint > 3){
       $('.diem-seo .label-success').show();
     }
     else if(seoPoint > 0){
       $('.diem-seo .label-danger').show();
     }
   });

   $('.link-preview-btn').click(function(){
    $(this).parents('.input-group').find('input').each(function(){
      var win = window.open($(this).val(), '_blank');
      win.focus();
    });
  });

   $("input[name^='price']").bind("change keyup input", function(event) {
    if(event.which >= 37 && event.which <= 40) return;
    $(this).val(function(index, value) {
      return value.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    });
  });

   $('input[name="title"]').bind("change keyup input", function(event) {
    $('input[name="keyword"]').val($(this).val());
  });

   function search(nameKey, myArray){
    for(var i=0; i < myArray.length; i++) { if(myArray[i].name === nameKey) {return i;}} 
  }

function isMobile() {
  return (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent));
}


});
</script>
</body>
</html>