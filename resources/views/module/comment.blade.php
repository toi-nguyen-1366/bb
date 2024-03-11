<h3 class="tieu-de-h3">Bình luận</h3>
<div class="comments" id="danhgia">
  <div class="fb-comments" data-href="{{env('APP_URL_REAL').$s['link']}}" data-width="100%" data-numposts="5"></div>
  {{-- <div class="comment-list">
    @php($avg = [])
    @forelse($comment as $c)
    @php($avg[] = $c['rating'])
    @if(empty($c['parent']))
    <div class="comment">
      <div class="image"><img alt="{!!$c['name']!!}" src="/public/frontend/image/nobody.png" class="avatar"></div>
      <div class="text">
        <div class="product-rate">
          @for($i=1;$i<=$c['rating'];$i++) <i class="fa fa-star"></i> @endfor
          @for($i=$c['rating']+1;$i<=5;$i++) <i class="fa fa-star-half-o"></i> @endfor
        </div>
        <h5 class="name">{!!(empty($c['name']))?'Khách truy cập':$c['name']!!}</h5>
        @if(!empty($c['created_at']))<span class="comment_date">Đăng vào {!!Helper::timevn($c['created_at'])!!}</span>@endif
        <a class="comment-reply-link" href="javascript:void(0)" data-parent="{!!$c['id']!!}">Trả lời</a>
        <div class="text_holder">
          <p>{!!$c['comment']!!}</p>
        </div>
      </div>
      @foreach($comment as $c2) @if($c2['parent']==$c['id'])
      <div class="comment">
        <div class="image"><img alt="{!!$c2['name']!!}" src="/upload/chat.jpg" class="avatar"></div>
        <div class="text">
          <h5 class="name">{!!$c2['name']!!}</h5>
          @if(!empty($c2['created_at']))<span class="comment_date">Đăng vào {!!Helper::timevn($c2['created_at'])!!}</span>@endif
          <div class="text_holder">
            <p>{!!$c2['comment']!!}</p>
          </div>
        </div>
      </div>
      @endif @endforeach
    </div>
    @endif @empty
    <p>Hiện chưa có bình luận nào</p>
    @endforelse    
    <div class="respond-form p-t-20" id="guibinhluan">
      <div class="respond-comment m-b-10"><b>GỬI BÌNH LUẬN</b></div>
      <form class="form-gray-fields" data-element=comment>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label class="upper" for="name">Tên của bạn (*)</label>
              <input class="form-control name" name="name" placeholder="Tên của bạn" aria-required="true" type="text">
              <input type="hidden" name="parent" value=""/>
              <input type="hidden" name="post" value="{!!$s['id']!!}"/>
              @php($avg = array_filter($avg))
            </div>
          </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label class="upper" for="phone">Số điện thoại (*)</label>
                  <input class="form-control phone" name="phone" placeholder="Số điện thoại" aria-required="true" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="upper" for="comment">Lời bình luận (*)</label>
                  <textarea class="form-control" name="comment" rows="2" placeholder="Lời bình luận" aria-required="true"></textarea>
                </div>
              </div>
            </div>
            <div class="row m-t-15">
              <div class="col-md-12">
                <div class="form-group text-right">
                  <button class="btn btn-primary btn-send-mail" data-action="Gửi bình luận {!!(!empty($s['title']))?'trong bài viết '.$s['title']:''!!}" type="button"><i class="fa fa-paper-plane"></i> Gửi bình luận</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <script type="text/javascript">
          $('#danhgia').on('click', '.comment-reply-link', function(event) {
            console.log(1); 
            $("html, body").animate({ scrollTop: $('#guibinhluan').offset().top-200 }, 500);
            console.log(1); 
            $('#danhgia').find('input[name="parent"]').val($(this).data('parent'));
          });
        </script>
      </div> --}}
    </div>
