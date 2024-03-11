<?php

namespace App\Http\Controllers;
use Mail;
use Request;
use View;
use Cache;
use App\Helpers\Helper;

class SiteController extends Controller
{
  private $siteModel;
  private $categoryModel;
  private $postModel;
  private $commentModel;
  private $bookingModel;
  private $slugModel;
  private $site;
  private $category;
  private $post;
  private $mailData;

  private $prefixLang;

  public function __construct(){
    $this->siteModel = app("App\Site");  
    $this->categoryModel = app("App\Category");  
    $this->postModel = app("App\Post");  
    $this->commentModel = app("App\Comment");  
    $this->bookingModel = app("App\Booking");  
    $this->slugModel = app("App\Slug");  
    $this->prefixLang='';

      // Nhận biết ngôn ngữ
    if(!empty(OTHER_LANGUAGE)){
      $otherLanguage = unserialize(OTHER_LANGUAGE);
      $textLengh = 7;
      if (starts_with(Request::root(), 'https://')){
        $textLengh = 8;
      }if (starts_with(Request::root(), 'https://www.')){
        $textLengh = 12;
      }if (starts_with(Request::root(), 'http://www.')){
        $textLengh = 11;
      }if (starts_with(Request::root(), 'http://') || starts_with(Request::root(), 'https://')){
        foreach ($otherLanguage as $k => $o) {
          if(substr(Request::root(), $textLengh) == $o){
            $this->siteModel = app("App\\".ucfirst($k)."Site");  
            $this->categoryModel = app("App\\".ucfirst($k)."Category");  
            $this->postModel = app("App\\".ucfirst($k)."Post");  
            $this->commentModel = app("App\\".ucfirst($k)."Comment");  
            $this->bookingModel = app("App\\".ucfirst($k)."Booking");  
            $this->prefixLang=$k;
          }
        }
      }
    }

    $this->site = Cache::rememberForever('site.construct.site', function () {
      return $this->siteModel->getRecordReindexFrontEnd();
    });
    $this->category = Cache::rememberForever('site.construct.category', function () {
      return $this->categoryModel->getRecordReindex(false,'',null,1);
    });
    $this->post = Cache::rememberForever('site.construct.post', function () {
      return $this->postModel->getRecordReindex($this->category,false,'','ISNULL(`order`) ASC,`order` ASC,`created_at` DESC,`id` DESC',1);
    });
    $this->slug = Cache::rememberForever('site.construct.slug', function () {
      return $this->slugModel->getRecordReindex();
    });

    View::share('site', $this->site);
    View::share('category', $this->category);
    View::share('post', $this->post);
    View::share('prefixLang', $this->prefixLang);
    View::share('title', $this->site['tieu-de-trang']);
    View::share('desc', $this->site['gioi-thieu-trang']);
    View::share('keyword', $this->site['tu-khoa-trang']);
  }

  public function index(){
    $data = [];

    $textLengh = 7;
    if (starts_with(Request::root(), 'https://')){ $textLengh = 8; }
    if (starts_with(Request::root(), 'https://www.')){ $textLengh = 12; }
    if (starts_with(Request::root(), 'http://www.')){ $textLengh = 11; }
    if (starts_with(Request::root(), 'http://') || starts_with(Request::root(), 'https://')){
    // foreach($this->post as $p){
    //   if(in_array(9, $p['categoryParent']) && !empty($p['field9']) && substr(Request::root(), $textLengh) == $p['field9']){
    //     return SiteController::post('',$p['id']);
    //   }
    // }
      if(substr(Request::root(), $textLengh) == 'voucher.phamtanvilla.com'){
        return SiteController::post('',$id=89);
      }
      // if(substr(Request::root(), $textLengh) == 'vinhomes-vuyenhaiphong.vn'){
      //   return SiteController::post('',$id=20);
      // }
    }

    return view("site.index",$data);

  }

  public function findBySlug($link){
    if(isset($this->slug['/'.$link])){
      $slug = $this->slug['/'.$link];
      if($slug['type']=='category' && !empty($this->category[$slug['item']])){
        return $this->category('',$slug['item']);
      }elseif($slug['type']=='post' && !empty($this->post[$slug['item']])){
        return $this->post('',$slug['item']);
      }
    }
    return abort(404);
  }

  public function search(){
    $data = [];
    $keyword = Helper::cleanText(Request::get('keyword'));
    // $data['address'] = $address = Helper::cleanText(Request::get('address'));
    // preg_match("^\\d{1,2}/\\d{2}/\\d{4}^", Request::get('dateFrom'), $match);
    // $data['dateFrom'] = $dateFrom = $match[0];
    // preg_match("^\\d{1,2}/\\d{2}/\\d{4}^", Request::get('dateTo'), $match2);
    // $data['dateTo'] = $dateTo = $match2[0];
    // $data['numPeople'] = $numPeople = Helper::cleanText(Request::get('numPeople'));

    // if(!empty($address) && isset($this->post[$address])){
      // return redirect($this->post[$address]['link'].'?address='.$address.'&dateFrom='.$dateFrom.'&dateTo='.$dateTo.'&numPeople='.$numPeople);
    // }

    if(!empty($keyword)){
      $data['seachKeyword'] = $keyword;
      $data['postList'] = $this->postModel->getRecordReindex($this->category,false,$keyword,'`title` ASC',1);
      $data['title'] = Helper::translate('Tìm kiếm cho từ khóa',$this->prefixLang).' "'.$keyword.'"';
      if(count($data['postList']) > 0){
        $data['desc'] =  Helper::translate('Tìm thấy',$this->prefixLang).' '.count($data['postList']).' '.Helper::translate('kết quả cho từ khóa',$this->prefixLang).' "'.$keyword.'"';
      }else{
        $data['desc'] = Helper::translate('Không tìm thấy kết quả nào cho từ khóa',$this->prefixLang).' "'.$keyword.'"';
      }
    }else{
      $data['postList'] = $this->postModel->getRecordReindex();
      $data['desc'] = Helper::translate('Không tìm thấy kết quả nào',$this->prefixLang);
    }

    $data['id']=2;
    $data['s']=$this->category[2];
    $data['breadcumb'] = ['/'=>Helper::translate('Trang chủ',$this->prefixLang),'/tim-kiem?keyword='.$keyword => Helper::translate('Tìm kiếm',$this->prefixLang)];
    $data['currentFilter']='/s?keyword='.$keyword;

    foreach ($data['postList'] as $k=>$p) {
      if(!empty($address) && substr($address, 0,2) == 't_'){
        $catId = substr($address, 2);
        $data['title'] = 'Tìm kiếm các nơi ở tại '. $this->category[$catId]['title'];
        if(!in_array($catId, $p['categoryParent'])){
          unset($data['postList'][$k]);
        }
      }
    }

    // paging
    $perPage = env('PAGING_PERPAGE');
    if(count($data['postList']) > $perPage){
      $data['page'] = Request::get('page');
      if(empty($data['page'])){$data['page']=1;}
      $data['numPage'] = intval(ceil(count($data['postList'])/$perPage));
      $data['postList'] = array_slice($data['postList'], ($data['page']-1)*$perPage, $perPage, true);
    }

    return view("site.productCategory",$data);
  }

  public function category($path='',$id=0){
    if(empty($this->category[$id])){
      return redirect('/');
    }
    $item = $this->category[$id];
    if(empty($item['type'])){
      $item['type'] = 'post';
    }
    $data = ['id'=>$id,'s'=>$item];
    if(!empty($item['title'])) {$data['title'] = $item['title'];}
    if(!empty($item['desc'])) {$data['desc'] = $item['desc'];}
    if(!empty($item['keyword'])) {$data['keyword'] = $item['keyword'];}
    
    $data['breadcumb'] = ['/'=>Helper::translate('Trang chủ',$this->prefixLang)];
    foreach ($item['categoryParent'] as $b) {
      if(!empty($b)){
        $data['breadcumb'][$this->category[$b]['link']] = $this->category[$b]['title'];
      }
    }
    $data['breadcumb'][$item['link']] = $item['title'];

    $data['filter'] = Request::all();
    $data['currentFilter']=$item['link'].'?';

    $keyword = Helper::cleanText(Request::get('keyword'));


    if(isset($data['filter']['order'])){
      $data['currentFilter'].="&order={$data['filter']['order']}";
      $postList = Cache::rememberForever('site.category.post', function () {
        return $this->postModel->getRecordReindex($this->category,false,$keyword,unserialize(ORDER_OPTION)[$data['filter']['order']]['code'],1);
      });
    }else if(!empty($keyword)){
      $postList = $this->postModel->getRecordReindex($this->category,false,$keyword,'`title` ASC',1);
    }else{
      $postList = $this->post;
    }

    $data['postList'] = [];
    foreach ($postList as $p) {
      if(in_array($id,$p['categoryParent'])){
        $data['postList'][$p['id']] = $p;
      }
    }


    if(isset($data['filter']['favorite'])){ // favorite filter
      $data['postList'] = [];
      $favoriteProducts = (!empty($_COOKIE['favoriteProducts'])) ? explode(',', $_COOKIE['favoriteProducts']):[];
      foreach ($favoriteProducts as $f) {
        $data['postList'][$f] = $this->post[$f];
      }
    }

    // apply filter
    if(!empty($data['filter'])){
      foreach ($data['filter'] as $k => $f) {
        if(!empty($f)){
          // multi category
          if($k=='category'){
            $data['currentFilter'].='&'.$k.'='.$f;
            $fArray = explode(',', $f);
            foreach ($data['postList'] as $kp => $p) {
              if(!Helper::checkArrayInArray($fArray, $p['categoryParent'])){
              // if(!in_array($f, $p['categoryParent'])){
                unset($data['postList'][$kp]);
              }
            }
          }
          if($k=='title'){
            $data['currentFilter'].='&title='.$f;
            $data['title']=$f;
          }
        }
      }
    }

    if(!empty(Request::get('from')) && !empty(Request::get('to'))){
      $from = Request::get('from');
      $from = explode(' ', $from);
      $from = $from[2];
      $from = explode('/', $from);
      $from = $from[2].'-'.$from[1].'-'.$from[0];

      $to = Request::get('to');
      $to = explode(' ', $to);
      $to = $to[2];
      $to = explode('/', $to);
      $to = $to[2].'-'.$to[1].'-'.$to[0];
      
    // var_dump($from,$to);
      $from = strtotime($from);
      $to = strtotime($to);
    // var_dump($from,$to);
      $booking = $this->bookingModel->getRecord();

      foreach ($booking as $p) {
        if($p['active'] == 1){
          $p['ngayden'] = strtotime($p['ngayden']);
          $p['ngayve'] = strtotime($p['ngayve']);

          if(($p['ngayden'] >= $from && $p['ngayden'] < $to) || ($p['ngayve'] > $from && $p['ngayve'] <= $to)){
            unset($data['postList'][$p['post_id']]);
          }
        }
      }
      $data['title'] = 'Danh sách các villa còn trống trong thời gian '.Request::get('from').' đến '.Request::get('to');
    }




    // paging
    $perPage = env('PAGING_PERPAGE');
    if(count($data['postList']) > $perPage){
      $data['page'] = Request::get('page');
      if(empty($data['page'])){$data['page']=1;}
      $data['numPage'] = intval(ceil(count($data['postList'])/$perPage));
      $data['postList'] = array_slice($data['postList'], ($data['page']-1)*$perPage, $perPage, true);
    }
    if(!empty($item['theme']) && view()->exists('site.'.$item['theme'])){
      return view("site.".$item['theme'],$data);
    }
    if(View::exists("site.".$item['type']."Category")){
      return view("site.".$item['type']."Category",$data);
    }else{
      return view("site.postCategory",$data);
    }
  }

  public function post($path='',$id=0){
    if (Request::get('preview')) {
      $this->post = Cache::rememberForever('site.post.post', function () {
        return $this->postModel->getRecordReindex($this->category,false,'','');
      });
    }
    if(empty($this->post[$id])){
      return redirect('/');
    }


    $item = $this->post[$id];
    $data = Cache::rememberForever('site.post.data'.$id, function () use ($item) {
      $data = ['id'=>$item['id'],'s'=>$item];
      if(!empty($item['title'])) {$data['title'] = $item['title'];}
      if(!empty($item['desc'])) {$data['desc'] = $item['desc'];}
      if(!empty($item['keyword'])) {$data['keyword'] = $item['keyword'];}


      $data['breadcumb'] = ['/'=>Helper::translate('Trang chủ',$this->prefixLang)];
      foreach ($item['categoryInfo']['categoryParent'] as $b) {
        if(!empty($b) && $b!=1){
          $data['breadcumb'][$this->category[$b]['link']] = $this->category[$b]['title'];
        }
      }
      if($item['categoryInfo']['id']!=1){
        $data['breadcumb'][$item['categoryInfo']['link']] = $item['categoryInfo']['title'];
      }
      $data['breadcumb'][$item['link']] = $item['title'];

      $data['relatedPost'] = Helper::relatedPost($item,$this->post,env('PRODUCT_RELATED'));
      $data['featuredPost'] = Helper::featuredPost($item,$this->post,env('PRODUCT_RELATED'));
      $data['comment'] = $this->commentModel->getRecord(false,$item['id'],1,1);
      $data['booking'] = $this->bookingModel->getRecord(false,$item['id'],1,true);
      $data['allBooking'] = $this->bookingModel->getRecord(false,null,1);
      return $data;
    });

    $data['address'] = $address = Helper::cleanText(Request::get('address'));
    preg_match("^\\d{1,2}/\\d{2}/\\d{4}^", Request::get('dateFrom'), $match);
    if(isset($match[0])) {$data['dateFrom'] = $dateFrom = $match[0];}
    preg_match("^\\d{1,2}/\\d{2}/\\d{4}^", Request::get('dateTo'), $match2);
    if(isset($match2[0])) {$data['dateTo'] = $dateTo = $match2[0];}
    $data['numPeople'] = $numPeople = Helper::cleanText(Request::get('numPeople'));

    if(!empty($item['theme']) && view()->exists('site.'.$item['theme'])){
      return view("site.".$item['theme'],$data);
    }

    if(Request::get('quickView')){
      return view("site.productQuickView",$data);
    }
    if($item['categoryInfo']['type'] == 'gallery'){
      return view("site.gallery",$data);
    }
    if($item['categoryInfo']['type'] == 'page'){
      return view("site.page",$data);
    }
    if($item['categoryInfo']['type'] == 'product'){
      return view("site.product",$data);
    }
    return view("site.post",$data);
  }

  public function chunha(){
    $data = ['breadcumb' => [],'trangchunha'=>true];
    $data['title'] = 'Chủ nhà quản lý villa';
    $data['villa'] = $villa = Request::get('villa');
    $data['chunha'] = $chunha = Request::get('chunha');
    if(!empty($villa) && !empty($this->post[$villa])) {
      $data['title'] = 'Chủ nhà quản lý '.$this->post[$villa]['title'];
      $data['chunhalist'] = json_decode($this->post[$villa]['field4'],true);
      if(isset($data['chunhalist'][$chunha])){
        if($data['chunhalist'][$chunha]['active'] == '1'){
          $data['xinchao'] = 'Xin chào '.$data['chunhalist'][$chunha]['name']. ', vui lòng điền mật khẩu vào ô dưới đây để quản lý villa.';
        }else{
          $data['dunghoatdong'] = 'Xin chào '.$data['chunhalist'][$chunha]['name']. ', tài khoản chủ nhà của bạn đang tạm khóa, vui lòng liên hệ với Acasa để biết thêm chi tiết.';
        }
      }
    }

    $password = Request::get('password');
    if (!empty($villa) && !empty($this->post[$villa]) && !empty($chunha) && !empty($password)){
      if(isset($data['chunhalist'][$chunha])){
        if($data['chunhalist'][$chunha]['password'] != md5($password.PASSWORD_KEY)){
          $data['xinchao'] = 'Mật khẩu không đúng, vui lòng điền mật khẩu vào ô dưới đây để quản lý villa.';
          return view("site.chunhadangnhap",$data);
        }
      }

      $item = $this->post[$villa];
      $data['id'] = $villa;
      $data['s'] = $item;
      if(!empty($item['title'])) {$data['title'] = 'Chủ nhà quản lý '.$item['title'];}
      $data['booking'] = $this->bookingModel->getRecord(false,$item['id'],1,true);
      $post = $this->bookingModel->getRecord(true,$item['id']);

      // Separate to groups by status
      $data['postList'] = [];
      $data['postList']['Chưa thanh toán'] = [];
      $data['postList']['Đã lock'] = [];
      $data['postList']['Đã xóa'] = [];
      foreach ($post as $k=>$p) {
        if(!empty($p['deleted_at'])){
          $data['postList']['Đã xóa'][$k] = $p;
        }else{
          if($p['active']==1){
            $data['postList']['Đã lock'][$k] = $p;
          }
          if($p['active']==0){
            $data['postList']['Chưa thanh toán'][$k] = $p;
          }
        }
      }
      return view("site.chunha",$data);
    }
    return view("site.chunhadangnhap",$data);
  }

  public function updateDataElement() {
    if (Request::isMethod('post')) {
      $element = Request::get('element');
      $info = json_decode(Request::get('json_data'));
      $data = [];
      foreach ($info as $f) {
        if(isset($data[$f->name])){
          $data[$f->name] .= ','.$f->value;
        }else{
          $data[$f->name] = $f->value;
        }
      }
      if($element == 'mail-to-admin'){
        if(!env('IHAPPY_MAIL_SERVICE')){
          $this->mailData = $data;
          Mail::send('mail.default', ['data'=>$data], function($message){
            $data = $this->mailData;
            if(empty($data['mail-to'])){$data['mail-to'] = $this->site['dia-chi-email'];}
            if(empty($data['subject'])){$data['subject'] = 'Thông báo từ website'. env('APP_URL_REAL');}
            $message->to($data['mail-to'], env('COMPANY_NAME'))->subject('Thông báo từ website: '.$data['subject']);
          });
        }
      }
      if($element == 'comment'){
        $data['jsondata'] = json_encode($data);
        $data['active'] = 1;
        unset($data['email']);
        unset($data['phone']);
        $data['created_at'] = date('Y-m-d H:i:s');
        $this->commentModel->insert($data);
      }
      if($element == 'booking'){
        preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data['Ngày đến'],$matches);
        $data['Ngày đến'] = str_replace('/', '-', $matches[0][0]); 
        preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data['Ngày về'],$matches2);
        $data['Ngày về'] = str_replace('/', '-', $matches2[0][0]);
        if(!isset($data['Người tạo booking'])){
          $data['Người tạo booking'] = 'Khách';
          $data['active'] = '0';
        }else{
          $data['active'] = '1';
        }
        $newData=[
          'code' => $data['Mã Booking'],
          'post_id' => $data['ID Nơi ở'],
          'ngayden' => date('Y-m-d H:i:s',strtotime($data['Ngày đến'])),
          'ngayve' => date('Y-m-d H:i:s',strtotime($data['Ngày về'])),
          'songuoilon' => $data['Số lượng người lớn'],
          'sotreem' => $data['Số lượng trẻ em 12t'],
          'sotreem2' => $data['Số lượng trẻ em 6t'],
          'tongtien' => $data['Tổng cộng'],
          'hoten' => $data['Họ và tên'],
          'sdt1' => $data['Số điện thoại'],
          'sdt2' => $data['Số điện thoại khác nếu có'],
          'email' => $data['Email nếu có'],
          'ghichu' => $data['Yêu cầu khác nếu có'],
          'nguoitao' => $data['Người tạo booking'],
          'active' => $data['active'],
          'jsondata' => json_encode($data),
          'created_at' => date('Y-m-d H:i:s')
        ];
        $this->bookingModel->insert($newData);
      }

      if($element == 'bookingupdate'){
        $id = $data['id'];
        unset($data['id']);
        if(Request::get('active') !== null){
          $data['active'] = Request::get('active');
        }
        if(empty($id)){
          $this->bookingModel->insert($data);
        }elseif(Request::get('delete')){
          $this->bookingModel->whereId($id)->delete();
        }elseif(Request::get('restore')){
          $this->bookingModel->withTrashed()->whereId($id)->restore();
        }else{
          $this->bookingModel->whereId($id)->update($data);
        }
      }
      Cache::flush();
      echo 1;
    }
  }
}
