<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {
	protected $table    = 'settings';
	protected $fillable = [
		'sitename_ar',
		'sitename_en',
		'email',
        'tel',
		'logo',
		'icon',
		'system_status',
		'system_message',
	];

}
