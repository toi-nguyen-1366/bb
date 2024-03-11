<div class="modal fade" id="modalForm" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" data-element="mail-to-admin">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <div class="modal-body">
        @include('module.datphong')
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalVideo" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-0" data-element="mail-to-admin">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
      <div class="modal-body p-0">

      </div>
    </div>
  </div>
</div>
{{-- <div class="modal fade" id="modalChitiet" tabindex="-1" role="modal" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" data-element="mail-to-admin">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Đóng</button>
      <div class="modal-body chitietne">
        
      </div>
    </div>
  </div>
</div> --}}
<script type="text/javascript">
  $(document).ready(function($) {
    $('body').on('click', '.btn-mua', function(event) {
      $('#modalForm').modal('show');
      $('#modalForm').find('.sp-name').val($(this).data('name'));
      $('#modalForm').find('.sp-link').val($(this).data('link'));
    });

    $('body').on('click', '.ajaxvideo', function(event) {
      var url = $(this).data('href');
      $.ajax({
        dataType: "html",
        type: "GET",
        evalScripts: true,
        url: url,
        data: ({"_token": "{{ csrf_token() }}"}),
        success: function(html){
          $('#modalVideo').modal('show');
          $('#modalVideo').find('.modal-body').html(html);


        }
      });
    });

    $('#modalVideo').on('hidden.bs.modal', function () {
        $('#modalVideo').find('.modal-body').html('');
    });

    // $('body').on('click', '.btn-chitiet', function(event) {
    //   var id=$(this).data('id');
    //   $.ajax({
    //     dataType: "html",
    //     type: "GET",
    //     evalScripts: true,
    //     url: "/---3425"+id+"?quickView=1&all=1",
    //     data: ({"_token": "{{ csrf_token() }}",id:id}),
    //     success: function(html){
    //       $('.chitietne').html(html);
    //     }
    //   });
    //   $('#modalChitiet').modal('show');
    // });
  });
</script>