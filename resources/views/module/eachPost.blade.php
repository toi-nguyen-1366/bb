<a href="{!!$p['link']!!}" title="{!!$p['title']!!}" class="o564 post-item grid-item each-post">
  <div class="o565 post-item-wrap">
    <div class="o566 post-image">
        <img class="o567 "  alt="{!!$p['title']!!}" src="{!!$p['img_thumb']!!}">
    </div>
    <div class="o568 post-item-description p-l-0 p-r-0 p-t-10 matchHeight">
      <span class="o569 post-meta-date"><b class="o570 " >{!!$p['categoryInfo']['title']!!}</b> | {!!Helper::datevn($p['created_at'])!!}</span>
      <h4 class="o571 " >{!!$p['title']!!}</h4>
      <p class="o572 " >{!!(empty($p['desc']))?Helper::readMore($p['desc_full']):Helper::readMore($p['desc'])!!}</p>
      <span class="o573 item-link">Xem chi tiết <i class="o574 fa fa-arrow-right"></i></span>
    </div>
  </div>
</a>