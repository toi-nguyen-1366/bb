<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Site;
use App\Helpers\Helper;

class Post extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  public $timestamps = true;

  public static function getRecord($deleted=false,$keyword='',$order='',$active=1) {
    $query = Post::query();
    $query = $query->whereNotNull('category');
    if($deleted){ $query = $query->withTrashed(); }
    if(!empty($limit)){ $query = $query->limit($limit); }
    if($active!=''){ $query = $query->where('active', $active); }
    if(!empty($keyword)){ 
      $query = $query->where('title', 'like', '%' . $keyword . '%')
      ->orWhere('field21', 'like', '%' . $keyword . '%')
      ->orWhere('keyword', 'like', '%' . $keyword . '%')
      ->orWhere('desc', 'like', '%' . $keyword . '%');
    }
    if(!empty($order)){
      $order = explode(',',$order);
      foreach ($order as $o) {
        $query = $query->orderBy(DB::raw(explode(' ', $o)[0]), explode(' ', $o)[1]);
      }
    }
    return $query->get()->toArray();
  }

  public static function getRecordReindex($category=[],$deleted=false,$keyword='',$order='ISNULL(`order`) ASC,`order` ASC,ISNULL(`price`) ASC,(`price`=0) ASC,`price` ASC',$active='') {
    $category = (empty($category)) ? Category::getRecordReindex(true) : $category;
    $data = Post::getRecord($deleted,$keyword,$order,$active);
    $newData = [];
    foreach ($data as $d) {
      if(empty($d['link'])){ $d['link'] = '/'.Helper::getPathFromString($d['title']).'-3425'.$d['id']; }
      if(empty($d['img'])) { $d['img'] = '/public/upload/noimage.jpg'; }
      if(empty($d['img_thumb'])) { $d['img_thumb'] = $d['img']; }
      $d['img_other'] = json_decode($d['img_other'],true);
      $d['category'] = explode(',', $d['category']);
      if(!empty($d['category']) && isset($category[$d['category'][0]])){
        $d['categoryInfo'] = $category[$d['category'][0]];
        $d['categoryParent'] = [];
        foreach ($d['category'] as $c) {
          $d['categoryParent'] = array_merge($d['categoryParent'],Category::getAllParentIdIncludeSelf($c,$category));
        }
        $newData[$d['id']] = $d;
      }
    }
    return $newData;
  }
}
