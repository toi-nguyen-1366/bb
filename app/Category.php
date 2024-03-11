<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Helpers\Helper;

class Category extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  public $timestamps = true;
  
  public static function getRecord($deleted=false,$type='',$limit=null,$active='') {
    $query = Category::query();
    if($deleted){ $query = $query->withTrashed(); }
    if(!empty($type)){ $query = $query->where('type',$type); }
    if(!empty($limit)){ $query = $query->limit($limit); }
    if($active!=''){ $query = $query->where('active', $active); }

    $query = $query->orderBy(DB::raw('ISNULL(`order`)', 'ASC'))->orderBy(DB::raw('`order`', 'ASC'))->orderBy(DB::raw('`title`', 'ASC'));
    return $query->get()->toArray();
  }

  public static function getRecordReindex($deleted=false,$type='',$limit=null) {
    $data = Category::getRecord($deleted,$type,$limit);
    $newData = [];
    $post = Post::getRecord();
    foreach ($data as $d) {
        if(empty($d['link'])){ $d['link'] = '/'.Helper::getPathFromString($d['title']).'-2523'.$d['id']; }
      if(empty($d['img'])) { $d['img'] = '/public/upload/noimage.jpg'; }
      if(empty($d['img_thumb'])) { $d['img_thumb'] = $d['img']; }
      $d['img_other'] = json_decode($d['img_other'],true);
      $d['categoryParent'] = Category::getAllParentIdIncludeSelf($d['id'],$data);
      $d['categoryChild'] = Category::getAllChildIdIncludeSelf($d['id'],$data);
      $d['hasChild'] = (count($d['categoryChild']) > 1);
      $d['postId'] = array();
      foreach ($post as $p){
        if(Helper::checkArrayInArray(explode(',', $p['category']),$d['categoryChild']) && empty($p['field5'])){
          $d['postId'][] = $p['id'];
        }
      }
      $d['postCount'] = sizeof($d['postId']);
      $newData[$d['id']] = $d;
    }
    return $newData;
  }

  public static function getAllParentIdIncludeSelf($catId=0, $category=[]) {
    if(empty($category)){
      $category = Category::getRecord();
    }
    $data = [(int)$catId];
    foreach ($category as $k=>$c) {
      if($c['id'] == $catId){
        $data = array_merge(Category::getAllParentIdIncludeSelf($c['parent'],$category),$data);
      }
    }
    return $data;
  }

  public static function getAllChildIdIncludeSelf($catId=0, $category=[]) {
    if(empty($category)){
      $category = Category::getRecord();
    }
    $data = [(int)$catId];
    foreach ($category as $k=>$c) {
      if($c['parent'] == $catId){
        $data = array_merge($data, Category::getAllChildIdIncludeSelf($c['id'],$category));
      }
    }
    return $data;
  }


}
