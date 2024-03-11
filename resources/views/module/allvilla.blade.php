@php($i=0) @foreach($category as $c) @if($c['parent']==2)
@php($i++) 
<div id="c{!!$c['id'] or ''!!}" class="o644 @if($i%2==1) background-grey @endif p-20 ">
  <div class="o645 heading">
    <h2 class="o646 m-b-10">{!!$c['title'] or ''!!}</h2>
    <p class="o647 text-center">{!!(isset($c['desc'])) ? strip_tags($c['desc'],'<br><b><i><span><strong><em>') : ''!!}</p>
    </div>
    <div class="o648 "  style="max-height: 1200px;overflow-y: auto;overflow-x: hidden;">
    <div class="o649 row m-b-20">
      @php($j=0) @foreach($post as $p) @if(in_array($c['id'], $p['categoryParent']) && $j++<3)
      <div class="o650 col-md-4">
        @include('module.eachProduct')
      </div>
      @endif @endforeach
    </div>
    <p class="o651 text-center"><a href="{!!$c['link'] or ''!!}" class="o652 btn btn-my">Xem tất cả</a></p>
    </div>
  </div>
  {{-- <hr class="o653 m-0"> --}}
  @endif @endforeach