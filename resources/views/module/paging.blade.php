@if(!empty($numPage))
<div class="text-center p-20">
<ul class="pagination">
  @if($page!=1)
  <li><a href="{!!$currentFilter.'&page='.($page-1)!!}" aria-label="Previous" data-filter="page" data-value="{{$page-1}}"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a></li>
  @endif

  @php($show3DotsPrev=false)
  @php($show3DotsNext=false)

  @for($i=1;$i<=$numPage;$i++)
    @if($i==$page)<li class="active"><a href="{!!$currentFilter.'&page='.$i!!}">{{$i}}</a></li>
    @else
      @if($i!=$numPage && $i!=1 && $i>($page+1))
        @unless($show3DotsPrev)
          @php($show3DotsPrev=true)
          <li><a href="javascript:void(0)">…</a> </li>
        @endunless
      @elseif($i!=$numPage && $i!=1 && $i<($page-1))
        @unless($show3DotsNext)
          @php($show3DotsNext=true)
          <li><a href="javascript:void(0)">…</a></li>
        @endunless
      @else
      <li><a href="{!!$currentFilter.'&page='.$i!!}" data-filter="page" data-value="{{$i}}">{{$i}}</a></li>
      @endif
    @endif
  @endfor
  
  @if($page!=$numPage)
  <li><a href="{!!$currentFilter.'&page='.($page+1)!!}" data-filter="page" data-value="{{$page+1}}" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a></li>
  @endif
</ul>
</div>
@endif