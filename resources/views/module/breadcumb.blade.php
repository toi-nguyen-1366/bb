{{-- <section class="pageHeader background-overlay" style="background-image:url('/upload/bg.jpg');background-position: center;background-size: cover;">
  <div class=container>
    <div class="heading text-center">
      <h1>{!!$s['title'] or ''!!}</h1>
      <p class="text-center">
        @if(!empty($breadcumb) && is_array($breadcumb))
        @foreach($breadcumb as $k=>$b)
        <a href="{!!$k!!}">{!!$b!!}</a>{!!($loop->last)?'':' > '!!}
        @endforeach
        @endif
      </p>
    </div>
  </div>
</section> --}}
{{-- <section class="breadcumb background-grey">
  <div class="container">
    <p>
      @if(!empty($breadcumb) && is_array($breadcumb))
      @foreach($breadcumb as $k=>$b)
      <a href="{!!$k!!}">{!!$b!!}</a>{!!($loop->last)?'':' > '!!}
      @endforeach
      @endif
    </p>
  </div>
</section>
<hr class="m-0"> --}}
{{-- For Google Search --}}
<script type="application/ld+json">{"@context": "http://schema.org","@type": "BreadcrumbList","itemListElement": [@foreach($breadcumb as $k=>$b){"@type": "ListItem","position": {!!$loop->index+1!!},"item": {"@id": "{!!$k!!}","name": "{!!Helper::cleanText($b)!!}"}}{!!($loop->last)?'':','!!}@endforeach]}</script>