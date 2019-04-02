<?php

namespace App\Http\models;

use Illuminate\Database\Eloquent\Model;

class bbstopic extends Model
{
    //
	public $table="bbstopic";
	public $guarded = [];
	public $timestamps = false;
	public function Bbsuser(){
		return $this->hasOne(Bbsuser::class, 'UID', 'TUID');
	}
}
