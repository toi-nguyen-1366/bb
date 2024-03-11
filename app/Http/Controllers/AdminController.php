<?php

namespace App\Http\Controllers;
use Request;
use View;
use Hash;
use Auth;
use Cache;
use App\Helpers\Helper;

class AdminController extends Controller
{
  private $siteModel;
  private $categoryModel;
  private $postModel;
  private $commentModel;
  private $bookingModel;
  private $slugModel;
  private $userModel;
  private $site;
  private $category;
  private $post;

  private $prefixLang;

  public function __construct()
  {
    $this->middleware('auth');

    $this->siteModel = app("App\Site");
    $this->categoryModel = app("App\Category");  
    $this->postModel = app("App\Post");  
    $this->commentModel = app("App\Comment");  
    $this->bookingModel = app("App\Booking");  
    $this->slugModel = app("App\Slug");  
    $this->userModel = app("App\User");  
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

    $this->site = Cache::rememberForever('admin.construct.site', function () {
      return $this->siteModel->getRecordReindex();
    });
    $this->category = Cache::rememberForever('admin.construct.category', function () {
      return $this->categoryModel->getRecordReindex();
    });
    $this->post = Cache::rememberForever('admin.construct.post', function () {
      return $this->postModel->getRecordReindex($this->category,false,'','id DESC');
    });
    $this->slug = Cache::rememberForever('admin.construct.slug', function () {
      return $this->slugModel->getRecordReindex();
    });
    $this->user = Cache::rememberForever('admin.construct.user', function () {
      return $this->userModel->getRecordReindex();
    });

    View::share('site', $this->site);
    View::share('category', $this->category);
    View::share('post', $this->post);
  }

  public function index(){
    return redirect(DEFAULT_ADMIN_PAGE);
  }

  public function adSetting(){
    $data = [];
    return view("admin.adSetting",$data);
  }

  public function adFileExplorer() {
    $data = [];
    return view("admin.adFileExplorer",$data);
  }

  public function adStatistic() {
    $data = [];
    return view("admin.adStatistic",$data);
  }

  public function adUser() {
    $data = [];
    $data['postList'] = $this->userModel->getRecordReindex();
    return view("admin.adUser",$data);
  }


  public function adCategory($id) {
    $data = [];
    $data['id']=$id;
    $category = ['new'=> new $this->categoryModel];
    $category['new']['type'] = $this->category[$id]['type'];
    $category += $this->category;
    $data['category'] = $category;
    return view("admin.adCategory",$data);
  }

  public function adPost($catId) {
    $data = [];
    $data['catId']=$catId;
    $post = $this->post;

    // Filter by Category
    if(!empty(Request::get('category'))){
      $categoryFilter = Request::get('category');
      foreach ($post as $k2=>$p2) {
        if(!in_array($categoryFilter, $p2['categoryParent'])){
          unset($post[$k2]);
        }
      }
    }

    // Separate to groups by status
    $data['postList'] = [];
    $data['postList']['active'] = [];
    $data['postList']['inactive'] = [];
    // $data['postList']['deleted'] = [];
    foreach ($post as $k=>$p) { if(in_array($catId, $p['categoryParent'])){
      if(!empty($p['deleted_at'])){
        // $data['postList']['deleted'][$k] = $p;
      }else{
        if($p['active']==1){
          $data['postList']['active'][$k] = $p;
        }
        if($p['active']==0){
          $data['postList']['inactive'][$k] = $p;
        }
      }
    }}
    return view("admin.adPost",$data);
  }

  public function adPostEdit($catId,$id) {
    $data = [];
    if(empty($id)){
      $data['p'] = new $this->postModel;
    }else{
      if(isset($this->post[$id])){
        $data['p'] = $this->post[$id];
      }else{
        return redirect('/admin');
      }
    }
    if(!empty(Request::get('copy'))){
      $data['p'] = $this->post[Request::get('copy')];
      $data['p']['id'] = '';
    }
    $data['catId'] = $catId;
    if($this->category[$data['catId']]['type']=='product'){return view("admin.adProductEdit",$data);}
    if($this->category[$data['catId']]['type']=='gallery'){return view("admin.adGalleryEdit",$data);}
    return view("admin.adPostEdit",$data);
  }

  public function adComment() {
    $data = [];
    $post = $this->commentModel->getRecord(true);
    $data['catId']=0;
    // Separate to groups by status
    $data['postList'] = [];
    $data['postList']['Đã duyệt'] = [];
    $data['postList']['Chưa duyệt'] = [];
    $data['postList']['Đã xóa'] = [];
    foreach ($post as $k=>$p) {
      if(!empty($p['deleted_at'])){
        $data['postList']['Đã xóa'][$k] = $p;
      }else{
        if($p['active']==1){
          $data['postList']['Đã duyệt'][$k] = $p;
        }
        if($p['active']==0){
          $data['postList']['Chưa duyệt'][$k] = $p;
        }
      }
    }
    return view("admin.adComment",$data);
  }

  public function adBooking() {
    $data = [];
    $post = $this->bookingModel->getRecord(true);
    $data['catId']=0;
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
          $data['postList']['Đã look booking'][$k] = $p;
        }
        if($p['active']==0){
          $data['postList']['Chưa thanh toán'][$k] = $p;
        }
      }
    }
    return view("admin.adBooking",$data);
  }

  public function adBookingVilla() {
    $data = [];
    $data['id'] = Request::get('p');
    if (!empty($data['id']) && isset($this->post[$data['id']])) {
      $post = $this->bookingModel->getRecord(true, $data['id']);
      $data['s'] = $this->post[$data['id']];
      $data['allBooking'] = $this->bookingModel->getRecord(false,null,1);
    }else{
      $post = $this->bookingModel->getRecord();
    }
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
    return view("admin.adBookingVilla",$data);
  }

  public function adBookingAll() {
    $data = [];
    $data['id'] = Request::get('p');
    $post = $this->bookingModel->getRecord();
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
    return view("admin.adBookingAll",$data);
  }

  public function updateDataFrontEnd() {
    if (Request::isMethod('post')) {
      $info = json_decode(Request::get('json_data'));
      foreach ($info as $f) {
        $this->siteModel->updateByCode($f->name, str_replace("\\", "\\\\", $f->value));
      }
      Cache::flush();
      echo 1;
    }
  }

  public function updateDataElement() {
    if (Request::isMethod('post')) {
      $element = Request::get('element');
      $info = json_decode(Request::get('json_data'));
      $data = [];
      $imgOther = [];
      $hasImgOther = false;
      $chunha = [];
      foreach ($info as $f) {
        $value = str_replace('../public/', '/public/', $f->value);
        // img1 img2 img3...
        if(substr($f->name, 0,3) == 'img' && strlen($f->name) > 3){
          $hasImgOther = true;
          if(!empty($value)){
            $imgOther[] = [str_replace(' ', '%20', $value), $data['title']];
          }
        }elseif(substr($f->name, 0,6) == 'chunha' && strlen($f->name) > 6){
          $chunha2 = explode('_', $f->name);
          if(!isset($chunha[$chunha2[1]])){
            $chunha[$chunha2[1]] = [];
          }
          $chunha[$chunha2[1]][$chunha2[2]] = trim($value);
        }else{
          if(isset($data[$f->name])){
            $data[$f->name] .= ','.$value;
          }else{
            $data[$f->name] = $value;
          }
        }
      }

      if($element == 'lockphong'){
        preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data['Ngày đến'],$matches);
        $data['Ngày đến'] = str_replace('/', '-', $matches[0][0]); 
        preg_match_all('/\d{2}\/\d{2}\/\d{4}/',$data['Ngày về'],$matches2);
        $data['Ngày về'] = str_replace('/', '-', $matches2[0][0]);
        $newData=[
          'code' => $data['Mã Booking'],
          'post_id' => $data['ID Nơi ở'],
          'ngayden' => date('Y-m-d H:i:s',strtotime($data['Ngày đến'])),
          'ngayve' => date('Y-m-d H:i:s',strtotime($data['Ngày về'])),
          'tongtien' => $data['Tổng cộng'],
          'hoten' => $data['Họ và tên'],
          'sdt1' => $data['Số điện thoại'],
          'nguoitao' => $data['Người tạo booking'],
          'active' => '1',
          'jsondata' => json_encode($data),
          'created_at' => date('Y-m-d H:i:s')
        ];
        $this->bookingModel->insert($newData);
        return '1';
      }

      $id = $data['id'];
      unset($data['id']);
      unset($data['_wysihtml5_mode']);

      if(Request::get('active') !== null){
        $data['active'] = Request::get('active');
      }
      if($element == 'category' || $element == 'post'){
        if(isset($data['rating']) && $data['rating'] == ''){
          $data['rating'] = '4.5';
        }
        if(!empty($data['img'])){
          $data['img'] = str_replace(' ', '%20', $data['img']);
          $data['img_thumb'] = str_replace('/upload/', '/thumbs/', $data['img']);
        }else{
          // $data['img'] = '/public/upload/noimage.jpg';
        }

        if(!empty($data['link'])){
          $data['link'] = strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($data['link'], ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));
          if(substr($data['link'], 0,1) != '/'){
            $data['link'] = '/'.$data['link'];
          }
        }
      }

      if($element == 'category'){
          if(!empty($id) && Request::get('delete')){ // delete or restore =========================
            $this->categoryModel->whereId($id)->delete();
          }elseif(!empty($id) && Request::get('restore')){
            $this->categoryModel->withTrashed()->whereId($id)->restore();
          }else{ //insert or update ============================
            if(empty($data['order'])) { $data['order'] = 9999; }
            if($hasImgOther){
              $data['img_other'] = json_encode($imgOther);
            }
            if(empty($id)){
              $data['created_at'] = date('Y-m-d H:i:s');
              if(!empty($data['title'])){
                $id = $this->categoryModel->insertGetId($data);
              }
            }else{
              $this->categoryModel->whereId($id)->update($data);
            }
            //update slug
            if(isset($data['link'])){
              if(isset($this->slug[$data['link']])){
                $this->slugModel->whereId($this->slug[$data['link']]['id'])->update(['type'=>'category','item'=>$id]);
              }else{
                $this->slugModel->insert(['link'=>$data['link'],'type'=>'category','item'=>$id]);
              }
            }
          }
        }

        if($element == 'post'){
          if(!empty($id) && Request::get('delete')){ // delete or restore =========================
            $this->postModel->whereId($id)->delete();
          }
          elseif(!empty($id) && Request::get('restore')){
            $this->postModel->withTrashed()->whereId($id)->restore();
          }else{ //insert or update ============================
            if(isset($data['desc_full'])){
              $data['desc_full'] = Helper::addAlt(html_entity_decode($data['desc_full']),$data['title']);
            }
            if(isset($data['spec'])){
              $data['spec'] = Helper::addAlt(html_entity_decode($data['spec']),$data['title']);
            }
            if(isset($data['desc'])){
              if(isset($data['desc_full']) && Helper::checkEmptyString($data['desc'])){
                // $data['desc'] = Helper::readMore($data['desc_full']);
              }
              $data['desc'] = html_entity_decode($data['desc']);
            }
            if(empty($data['order'])) { $data['order'] = 9999; }
            if($hasImgOther){
              $data['img_other'] = json_encode($imgOther);
            }

            foreach ($data as $k => &$d) {
              if(substr($k, 0,5) == 'price'){
                $d = (empty($d)) ? '0' : preg_replace("/[^0-9]/","",$d);
              }
            }
            // $data['price'] = (empty($data['price'])) ? '0' : preg_replace("/[^0-9]/","",$data['price']);
            // $data['price_promo'] = (empty($data['price_promo'])) ? '0' : preg_replace("/[^0-9]/","",$data['price_promo']);
            // $data['price_cuoituan'] = (empty($data['price_cuoituan'])) ? '0' : preg_replace("/[^0-9]/","",$data['price_cuoituan']);
            // $data['price_ngayle'] = (empty($data['price_ngayle'])) ? '0' : preg_replace("/[^0-9]/","",$data['price_ngayle']);
            if(isset($data['created_at']) && (empty($data['created_at']) || $data['created_at'] == '1970-01-01')) {
              $data['created_at'] = date('Y-m-d H:i:s');
            }
            $data['updated_at'] = date('Y-m-d H:i:s');
            if(empty($id)){
              if(!empty($data['category']) && !empty($data['title'])){ //phải chọn category và tiêu đề mới cho insert
                $id = $this->postModel->insertGetId($data);
              }
            }else{
              $this->postModel->whereId($id)->update($data);
            }

            //update slug
            if(isset($data['link'])){
              if(isset($this->slug[$data['link']])){
                $this->slugModel->whereId($this->slug[$data['link']]['id'])->update(['type'=>'post','item'=>$id]);
              }else{
                $this->slugModel->insert(['link'=>$data['link'],'type'=>'post','item'=>$id]);
              }
            }
          }
        }

        if($element == 'user'){
          if(isset($data['password'])){
            $data['password'] = bcrypt($data['password']);
          }
          if(empty($id)){
            $this->userModel->insert($data);
          }elseif(Request::get('delete')){
            $this->userModel->whereId($id)->delete();
          }elseif(Request::get('restore')){
            $this->userModel->withTrashed()->whereId($id)->restore();
          }else{
            $this->userModel->whereId($id)->update($data);
          }
        }

        if($element == 'comment'){
          if(empty($id)){
            $this->commentModel->insert($data);
          }elseif(Request::get('delete')){
            $this->commentModel->whereId($id)->delete();
          }elseif(Request::get('restore')){
            $this->commentModel->withTrashed()->whereId($id)->restore();
          }else{
            $this->commentModel->whereId($id)->update($data);
          }
        }

        if($element == 'booking'){
          if(empty($id)){
            $this->bookingModel->insert($data);
          }elseif(Request::get('delete')){
            $this->bookingModel->whereId($id)->delete();
          }elseif(Request::get('restore')){
            $this->bookingModel->withTrashed()->whereId($id)->restore();
          }else{
            // Nếu active phòng, phải check xem phòng đó còn available không
            if(isset($data['active']) && $data['active']=='1'){
              $allBooking = $this->bookingModel->getRecord(false,null,1);
              $post = $this->post;
              $bookingDates = [];
              $postId = Request::get('post_id');
              $s = $post[$postId];

              // Nếu là villa cha, tìm tất cả booking của villa con và thêm vào $bookingDates
              if(empty($s['field5'])){
                $roomId = [];
                foreach($post as $p){
                  if($p['field5'] == $s['id']){
                    $roomId[] = $p['id'];
                  }
                }
                if(!empty($roomId)){
                  foreach($allBooking as $b){
                    foreach($roomId as $r){
                      if($b['post_id'] == $r){
                        $bookingDates = array_merge($bookingDates, $this->date_range($b['ngayden'],$b['ngayve']));
                      }
                    }
                  }
                }
                // Nếu là villa con, tìm tất cả booking của villa cha và thêm vào $bookingDates
              }else{
                foreach($allBooking as $b){
                  if($b['post_id'] == $s['field5']){
                    $bookingDates = array_merge($bookingDates, $this->date_range($b['ngayden'],$b['ngayve']));
                  }
                }
              }

              $thisBooking = $this->bookingModel->whereId($id)->get()->toArray();
              $thisBooking = reset($thisBooking);
              $thisBookingDates = $this->date_range($thisBooking['ngayden'],$thisBooking['ngayve']);

              if(Helper::checkArrayInArray($thisBookingDates,$bookingDates)){
                echo 'Ngày đã bị khóa bởi booking khác!';
              }else{
                $this->bookingModel->whereId($id)->update($data);
              }
            }else{
              $this->bookingModel->whereId($id)->update($data);
            }
          }
        }
        
        if($element == 'chunha'){
          if(!empty($id)){
            foreach ($chunha as $k => &$cn) {
              if(empty($cn['name'])){
                unset($chunha[$k]);
              }
              if(!preg_match('/^[a-f0-9]{32}$/', $cn['password'])){
                $cn['password'] = md5($cn['password'].PASSWORD_KEY);
              }
            }
            $chunhajson = json_encode($chunha);
            $this->postModel->whereId($id)->update(['field4'=>$chunhajson]);
          }
        }

        Cache::flush();
        echo '';
      }
    }

    public function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {
      $dates = array();
      $current = strtotime($first);
      $last = strtotime($last)-86400;
      while( $current <= $last ) {
        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
      }
      return $dates;
    }

    public function showChangePasswordForm(){
      return view('auth.changepassword');
    }

    public function changePassword(Request $request){
      if(empty(Request::get('current-password'))||empty(Request::get('new-password'))){
        return redirect()->back()->with("error","Vui lòng điền đầy đủ thông tin!");
      }
      if (!(Hash::check(Request::get('current-password'), Auth::user()->password))) {
        return redirect()->back()->with("error","Mật khẩu hiện tại không đúng!");
      }
      $user = Auth::user();
      $user->password = bcrypt(Request::get('new-password'));
      $user->save();
      return redirect()->back()->with("success","Thay đổi mật khẩu thành công !");
    }
  }
