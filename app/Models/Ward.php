<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
	use HasDateTimeFormatter;
    protected $primaryKey = 'wards_id';

    public $timestamps = false;
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
}
