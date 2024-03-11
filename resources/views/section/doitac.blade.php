<section class="productCategory background-grey">
  <div class=container>
    <div class="heading heading-center">
      <a href="{!!$category[9]['link'] or ''!!}"><h2>Đối tác</h2></a>
    </div>
    <div class="shop">
      <div class="carousel" data-items="5" data-margin="30" data-loop=false data-autoplay=true data-dots=false>
        @for ($i = 1; $i < 21; $i++)
        @if(!empty($site["anh-doi-tac-".$i."-300x200-"]))<a href="{!!$site["link-tro-den-khi-click-logo-doi-tac-".$i]!!}" style="padding: 10px;overflow: hidden;display: block;background:#fff"><span style="background: url('{!!$site["anh-doi-tac-".$i."-300x200-"]!!}');background-size: contain; background-position: center; background-repeat: no-repeat;width:100%;height: 130px;background-color: #fff;display: block;">&nbsp;</span></a>@endif
        @endfor
      </div>
    </div>
  </div>
</section>