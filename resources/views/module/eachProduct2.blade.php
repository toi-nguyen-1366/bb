<div class="row background-grey m-b-15 p-t-15 p-b-15">
  <div class="col-lg-3 col-md-3 col-sm-12 m-b-20">
    <a href="{!!$p['link']!!}" title="{!!$p['title']!!}">
      <img src="{!!$p['img_thumb']!!}" class="img-responsive" alt="{!!$p['title']!!}">
    </a>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 tour-info-new" style="position: relative;">
    <div class="row">
      <div class="col-lg-12">
        <a href="{!!$p['link']!!}" title="{!!$p['title']!!}"><h4 class="uppercase">{!!$p['title']!!}</h4></a>
      </div>
    </div>
    <div class="row m-b-10">
      <div class="col-xs-12">
        <div class="product-rate">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-md-12">
        {!!$p['desc_full']!!}
      </div>
      <div class="col-lg-2 col-md-3 col-sm-3 text-right">
        <div class="price-new">
          {!!Helper::money($p['price'])!!}
        </div>
        <a class="btn btn-mua btn-facebook" href="javascript:void(0)" title="{!!$p['title']!!}" data-name="{!!$p['title']!!}"><i class="fa fa-shopping-cart"></i> ĐẶT NGAY</a><br>
        <a class="btn btn-default btn-sm btn-reveal btn-reveal-right" href="{!!$p['link']!!}" data-name="{!!$p['title']!!}"><span>Details</span><i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>