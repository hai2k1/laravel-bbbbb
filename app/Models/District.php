<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'district';
    protected $primaryKey = 'district_id';

    public $timestamps = false;
    public function province(){
        return $this->belongsTo(Province::class,'province_id');
    }

}
