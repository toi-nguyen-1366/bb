<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
  public $timestamps = true;
	public static function getRecord() {
		return Site::where('deleted_at',null)
	    // ->orderBy('created_at','DESC')
	    ->get()
	    ->toArray();
	}

  public static function getRecordReindex() {
      $data = Site::getRecord();
      $newData = [];
      foreach ($data as $d) {
          $newData[$d['code']] = $d;
      }
      return $newData;
  }

  public static function getRecordReindexFrontEnd() {
      $data = Site::getRecord();
      $newData = [];
      foreach ($data as $d) {
          $newData[$d['code']] = $d['value'];
      }
      return $newData;
  }

  public static function updateByCode($code='',$value=''){
      if (empty($code)) {return false;}
      return Site::where('code',$code)->update(['value'=>$value]);
  }
}
