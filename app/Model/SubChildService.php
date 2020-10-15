<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class SubChildService extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'sub_child_services';
protected $fillable = [
		'id',
		'admin_id',
		              'child_service_id',
'name_ar',
'name_en',
'child_service_id',

		'created_at',
		'updated_at',
		'deleted_at',
	];

   public function child_service_id(){
      return $this->hasMany(\App\Model\ChildService::class,'id','child_service_id');
   }

}
