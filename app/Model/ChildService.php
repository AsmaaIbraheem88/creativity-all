<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class ChildService extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'child_services';
protected $fillable = [
		'id',

'name_ar',
'name_en',
'service_id',

'image',
		'created_at',
		'updated_at',
		'deleted_at',
	];

   public function service_id(){
      return $this->hasMany(\App\Model\Service::class,'id','service_id');
   }

}
