<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasDateTimeFormatter;

//    protected $primaryKey = 'code';

    public $timestamps = false;

}
