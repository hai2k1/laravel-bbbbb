<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class RealEstateProject extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'real_estate_project';
    protected $guarded = [];

    public function district(){
        return $this->belongsTo(District::class,'id_district');
    }
    public function ward(){
        return $this->belongsTo(Ward::class,'id_ward');
    }
    public function province(){
        return $this->belongsTo(Province::class,'id_province');
    }
}
