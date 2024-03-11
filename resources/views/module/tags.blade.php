@if(!empty($s['keyword']))
<div class="product-meta">
  <p>Tags:
	@foreach(explode(',', $s['keyword']) as $t) @if(!empty($t))
  <a href="/tim-kiem?keyword={!!mb_strtolower($t)!!}">{!!$t!!}</a>@if(!$loop->last) , @endif
  @endif @endforeach
  </p>
</div>
@endif