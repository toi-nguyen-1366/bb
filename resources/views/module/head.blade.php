<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="vi" />
<link rel="apple-touch-icon" href="{!!$site['anh-favicon']!!}">
<link rel="icon" type="image/png" href="{!!$site['anh-favicon']!!}">
<meta name="robots" content="INDEX,FOLLOW" />
<meta name="copyright" content="Thiết kế web iHappy.vn" />
<meta name="author" content="Thiết kế web iHappy.vn" />
<meta name="generator" content="Thiết kế web iHappy.vn" />
<meta http-equiv="audience" content="General" />
<meta name="resource-type" content="Document" />
<meta name="distribution" content="Global" />
<meta name="revisit-after" content="1 days" />
<meta name="rating" content="GENERAL" />
<meta name="robots" content="index,follow" />
<meta name="Googlebot" content="index,follow,archive" />
<title>{!!strip_tags($title)!!}</title>
<meta name="description" content="{!!strip_tags($desc)!!}">
<meta name="keywords" content="{!!strip_tags($keyword)!!}">
@if(Request::is('/'))
<meta property="og:title" content="{!!(!empty($site['tieu-de-chia-se-facebook'])) ? $site['tieu-de-chia-se-facebook'] : strip_tags($title)!!}"/>
<meta property="og:description" content="{!!(!empty($site['mo-ta-chia-se-facebook'])) ? $site['mo-ta-chia-se-facebook'] : strip_tags($desc)!!}"/>
<meta property="og:image" content="https://{!!$_SERVER['HTTP_HOST']!!}{!!$site['anh-chia-se-facebook'] or ''!!}"/>
@else
<meta property="og:title" content="{!!(!empty($s['facebook_title'])) ? $s['facebook_title'] : strip_tags($title)!!}"/>
<meta property="og:description" content="{!!(!empty($s['facebook_desc'])) ? $s['facebook_desc'] : strip_tags($desc)!!}"/>
<meta property="og:image" content="@if(!empty($s['facebook_img']))https://phamtanvilla.com{!!$s['facebook_img'] or '' !!} @elseif(!empty($s['img']) && $s['img']!='/public/upload/noimage.jpg')https://phamtanvilla.com{!!$s['img_thumb'] or '' !!}@else https://phamtanvilla.com@site('anh-chia-se-facebook')@endif"/>
@endif
@if(Request::is('/'))
<meta property="og:type" content="website" />
@elseif(!empty($s['categoryParent']) && in_array(2, $s['categoryParent']))
<meta property="og:type" content="product"/>
@else
<meta property="og:type" content="article"/>
@endif
<meta property="og:url" content="https://{!!$_SERVER['HTTP_HOST']!!}{!!(!empty($s['link'])) ? $s['link'] : ''!!}"/>
<link rel="canonical" href="https://{!!$_SERVER['HTTP_HOST']!!}{!!(!empty($s['link'])) ? $s['link'] : ''!!}" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:site_name" content="{!!$site['tieu-de-trang']!!}"/>
<meta property="fb:app_id" content="1626757400901101"/>
{!!$site['ma-google-facebook'] or ''!!}
<script type="text/javascript">
  if(('https://'+window.location.hostname)=='{!!env('APP_URL_REAL')!!}'){
    if (location.protocol != 'https:'){
      location.href = 'https:' + window.location.href.substring(window.location.protocol.length);
    }
  }
</script>