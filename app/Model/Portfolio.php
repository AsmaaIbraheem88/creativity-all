<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Auto Models By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Portfolio extends Model {

	use SoftDeletes;
	protected $dates = ['deleted_at'];

protected $table    = 'portfolios';
protected $fillable = [
		'id',

'name',
'image',
'client',
'service_id',

		'created_at',
		'updated_at',
		'deleted_at',
	];

   public function service_id(){
      return $this->hasMany(\App\Model\Service::class,'id','service_id');
   }

}
