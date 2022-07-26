<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'province';

    protected $primaryKey = 'province_id';

    public $timestamps = false;
    public function district()
    {
        return $this->hasMany(District::class,'province_id');
    }

}
