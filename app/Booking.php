<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Booking extends Model
{
  use SoftDeletes;
  public $timestamps = true;

  public static function getRecord($deleted=false,$post=null,$active=null,$futureOnly=false) {
    $query = Booking::query();
    if($deleted){ $query = $query->withTrashed(); }
    if(!empty($post)){ $query = $query->where('post_id', $post);}
    if(!empty($active)){ $query = $query->where('active', $active);}
    // if(!empty($date)){ $query = $query->whereRaw('Date(created_at) <= DATE_ADD(CURDATE(), INTERVAL -'.$date.' DAY)');}
    if($futureOnly){ $query = $query->whereRaw('Date(ngayden) >= CURDATE()');}
    $query = $query->orderBy('ngayden', 'desc');
    return $query->get()->toArray();
  }
}
